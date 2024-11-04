<?php
// Bắt đầu session
session_start();

// Kết nối tới cơ sở dữ liệu
include '../database/db_config.php';  // File chứa thông tin kết nối database

// Bật hiển thị lỗi để giúp debug
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Lấy dữ liệu từ form
$fullname = $_POST['fullname'];
$cccd = $_POST['cccd'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$ethnic = $_POST['ethnic'];
$religion = $_POST['religion'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$teacher_code = $_POST['teacher_code'];
$class_supervised = $_POST['class_supervised']; // Lớp chủ nhiệm
$subject_name = $_POST['subjects']; // Môn dạy
$role = 'giaovien';

// Kiểm tra xem người dùng có tồn tại dựa vào cccd trong bảng users
$query_check_user = "SELECT * FROM users WHERE cccd = ?";
$stmt = $conn->prepare($query_check_user);
$stmt->bind_param("s", $cccd);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Nếu người dùng đã tồn tại
    echo "Người dùng với CCCD này đã tồn tại!";
} else {
    // Kiểm tra xem teacher_code đã tồn tại trong bảng teachers chưa
    $query_check_teacher = "SELECT * FROM teachers WHERE teacher_code = ?";
    $stmt = $conn->prepare($query_check_teacher);
    $stmt->bind_param("s", $teacher_code);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Mã giáo viên đã tồn tại!";
    } else {
        // Thêm giáo viên mới vào bảng users
        $query_user = "INSERT INTO users (fullname, dob, gender, nationality, ethnic, religion, address, phone, cccd, role) 
                       VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query_user);
        $stmt->bind_param("ssssssssss", $fullname, $dob, $gender, $nationality, $ethnic, $religion, $address, $phone, $cccd, $role);
        if ($stmt->execute()) {
            // Lấy ID của người dùng vừa tạo
            $user_id = $conn->insert_id;

            // Kiểm tra xem lớp chủ nhiệm có tồn tại không
            if (!empty($class_supervised)) {
                $query_check_class = "SELECT id FROM classes WHERE id = ?";
                $stmt = $conn->prepare($query_check_class);
                $stmt->bind_param("i", $class_supervised);
                $stmt->execute();
                $stmt->store_result();

                if ($stmt->num_rows > 0) {
                    // Kiểm tra xem môn học đã tồn tại trong bảng subjects chưa
                    $query_check_subject = "SELECT id FROM subjects WHERE subject_name = ?";
                    $stmt = $conn->prepare($query_check_subject);
                    $stmt->bind_param("s", $subject_name);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        // Môn học đã tồn tại, lấy ID môn học
                        $subject_id = $result->fetch_assoc()['id'];
                    } else {
                        // Môn học chưa tồn tại, thêm mới vào bảng subjects
                        $query_insert_subject = "INSERT INTO subjects (subject_name) VALUES (?)";
                        $stmt = $conn->prepare($query_insert_subject);
                        $stmt->bind_param("s", $subject_name);
                        if ($stmt->execute()) {
                            $subject_id = $conn->insert_id;
                        } else {
                            echo "Lỗi trong quá trình thêm môn học: " . $stmt->error;
                            exit();
                        }
                    }

                    // Thêm giáo viên vào bảng teachers
                    $query_teacher = "INSERT INTO teachers (id, teacher_code, class_supervised_id) VALUES (?, ?, ?)";
                    $stmt = $conn->prepare($query_teacher);
                    $stmt->bind_param("isi", $user_id, $teacher_code, $class_supervised);
                    if ($stmt->execute()) {
                        // Thêm liên kết vào bảng teacher_subjects
                        $query_teacher_subject = "INSERT INTO teacher_subjects (teacher_id, class_id, subject_id) VALUES (?, ?, ?)";
                        $stmt = $conn->prepare($query_teacher_subject);
                        $stmt->bind_param("iis", $user_id, $class_supervised, $subject_id);
                        if ($stmt->execute()) {
                            // Chuyển hướng tới trang tạo mật khẩu, gửi kèm ID người dùng
                            header("Location: ../forgot/loginpassword.php?user_id=" . $user_id);
                            exit();
                        } else {
                            echo "Lỗi trong quá trình thêm liên kết môn học: " . $stmt->error;
                        }
                    } else {
                        echo "Lỗi trong quá trình thêm giáo viên: " . $stmt->error;
                    }
                } else {
                    echo "Lỗi: Lớp chủ nhiệm không tồn tại.";
                    exit();
                }
            } else {
                // Thêm giáo viên vào bảng teachers mà không có lớp chủ nhiệm
                $query_teacher = "INSERT INTO teachers (id, teacher_code) VALUES (?, ?)";
                $stmt = $conn->prepare($query_teacher);
                $stmt->bind_param("is", $user_id, $teacher_code);
                if ($stmt->execute()) {
                    // Thêm liên kết vào bảng teacher_subjects
                    $query_check_subject = "SELECT id FROM subjects WHERE subject_name = ?";
                    $stmt = $conn->prepare($query_check_subject);
                    $stmt->bind_param("s", $subject_name);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    if ($result->num_rows > 0) {
                        $subject_id = $result->fetch_assoc()['id'];
                    } else {
                        $query_insert_subject = "INSERT INTO subjects (subject_name) VALUES (?)";
                        $stmt = $conn->prepare($query_insert_subject);
                        $stmt->bind_param("s", $subject_name);
                        if ($stmt->execute()) {
                            $subject_id = $conn->insert_id;
                        } else {
                            echo "Lỗi trong quá trình thêm môn học: " . $stmt->error;
                            exit();
                        }
                    }

                    $query_teacher_subject = "INSERT INTO teacher_subjects (teacher_id, subject_id) VALUES (?, ?)";
                    $stmt = $conn->prepare($query_teacher_subject);
                    $stmt->bind_param("ii", $user_id, $subject_id);
                    if ($stmt->execute()) {
                        header("Location: ../forgot/loginpassword.php?user_id=" . $user_id);
                        exit();
                    } else {
                        echo "Lỗi trong quá trình thêm liên kết môn học: " . $stmt->error;
                    }
                } else {
                    echo "Lỗi trong quá trình thêm giáo viên: " . $stmt->error;
                }
            }
        } else {
            echo "Lỗi trong quá trình thêm người dùng: " . $stmt->error;
        }
    }
}
?>