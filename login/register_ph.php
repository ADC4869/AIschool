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
$parent_code = $_POST['parent_code'];

$role = 'phuhuynh'; // Vai trò là phụ huynh

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
    // Kiểm tra parent_code đã tồn tại trong bảng parents chưa
    $query_check_parent = "SELECT * FROM parents WHERE parent_code = ?";
    $stmt = $conn->prepare($query_check_parent);

    if (!$stmt) {
        die("Lỗi trong quá trình chuẩn bị câu truy vấn kiểm tra mã phụ huynh: " . $conn->error);
    }

    $stmt->bind_param("s", $parent_code);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Mã phụ huynh đã tồn tại!";
    } else {
        // Thêm người dùng vào bảng users
        $query_user = "INSERT INTO users (fullname, cccd, dob, gender, nationality, ethnic, religion, address, phone, role, password) 
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, '')";  // Password sẽ thêm sau
        $stmt = $conn->prepare($query_user);

        if (!$stmt) {
            die("Lỗi trong quá trình chuẩn bị câu truy vấn thêm phụ huynh: " . $conn->error);
        }

        $stmt->bind_param("ssssssssss", $fullname, $cccd, $dob, $gender, $nationality, $ethnic, $religion, $address, $phone, $role);

        if ($stmt->execute()) {
            // Lấy ID của người dùng vừa tạo
            $user_id = $conn->insert_id;

            // Thêm thông tin phụ huynh vào bảng parents
            $query_parent = "INSERT INTO parents (id, parent_code) VALUES (?, ?)";
            $stmt = $conn->prepare($query_parent);

            if (!$stmt) {
                die("Lỗi trong quá trình chuẩn bị câu truy vấn thêm vào bảng parents: " . $conn->error);
            }

            $stmt->bind_param("is", $user_id, $parent_code);

            if ($stmt->execute()) {
                // Chuyển hướng đến trang đăng ký mật khẩu
                header("Location: ../forgot/loginpassword.php?user_id=" . $user_id);
                exit();
            } else {
                echo "Lỗi trong quá trình thêm phụ huynh vào bảng parents: " . $stmt->error;
            }
        } else {
            echo "Lỗi trong quá trình thêm người dùng: " . $stmt->error;
        }
    }
}
?>