<?php
session_start();
include '../database/db_config.php';

// Lấy dữ liệu từ form và xử lý an toàn
$fullname = $_POST['fullname'];
$cccd = $_POST['cccd'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$nationality = $_POST['nationality'];
$ethnic = $_POST['ethnic'];
$religion = $_POST['religion'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$student_code = $_POST['student_code'];
$class = $_POST['classes'];  // Lớp học được chọn từ form

$role = 'hocsinh'; // Xác định vai trò học sinh

// Kiểm tra CCCD có tồn tại trong bảng users chưa
$query_check_user = "SELECT * FROM users WHERE cccd = ?";
$stmt = $conn->prepare($query_check_user);

if (!$stmt) {
    die("Lỗi trong quá trình chuẩn bị câu truy vấn kiểm tra CCCD: " . $conn->error);
}

$stmt->bind_param("s", $cccd);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "Người dùng với CCCD này đã tồn tại!";
} else {
    // Kiểm tra student_code đã tồn tại trong bảng students chưa
    $query_check_student = "SELECT * FROM students WHERE student_code = ?";
    $stmt = $conn->prepare($query_check_student);

    if (!$stmt) {
        die("Lỗi trong quá trình chuẩn bị câu truy vấn kiểm tra student_code: " . $conn->error);
    }

    $stmt->bind_param("s", $student_code);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Mã học sinh đã tồn tại!";
    } else {
        // Thêm học sinh mới vào bảng users
        $query_user = "INSERT INTO users (fullname, cccd, dob, gender, nationality, ethnic, religion, address, phone, role, password) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, '')";  // Password sẽ được thêm sau
        $stmt = $conn->prepare($query_user);

        if (!$stmt) {
            die("Lỗi trong quá trình chuẩn bị câu truy vấn thêm học sinh: " . $conn->error);
        }

        $stmt->bind_param("ssssssssss", $fullname, $cccd, $dob, $gender, $nationality, $ethnic, $religion, $address, $phone, $role);

        if ($stmt->execute()) {
            // Lấy ID của người dùng vừa tạo
            $user_id = $conn->insert_id;

            // Thêm thông tin học sinh vào bảng students
            $query_student = "INSERT INTO students (id, student_code, class_id) 
                              VALUES (?, ?, ?)";
            $stmt = $conn->prepare($query_student);

            if (!$stmt) {
                die("Lỗi trong quá trình chuẩn bị câu truy vấn thêm vào bảng students: " . $conn->error);
            }

            $stmt->bind_param("isi", $user_id, $student_code, $class);

            if ($stmt->execute()) {
                // Chuyển hướng tới trang tạo mật khẩu
                header("Location: ../forgot/loginpassword.php?user_id=" . $user_id);
                exit();
            } else {
                echo "Lỗi trong quá trình thêm học sinh vào bảng students: " . $stmt->error;
            }
        } else {
            echo "Lỗi trong quá trình thêm người dùng: " . $stmt->error;
        }
    }
}
?>