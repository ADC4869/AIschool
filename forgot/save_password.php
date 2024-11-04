<?php
// Bắt đầu session
session_start();

// Kết nối tới cơ sở dữ liệu
include '../database/db_config.php';  // File chứa thông tin kết nối database

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $user_id = $_GET['user_id'];  // ID người dùng được truyền từ register_gv.php

    // Mã hóa mật khẩu
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Cập nhật mật khẩu vào bảng users
    $query = "UPDATE users SET password = ? WHERE id = ?";
    $stmt = $conn->prepare($query);

    if (!$stmt) {
        die("Lỗi trong quá trình chuẩn bị câu truy vấn cập nhật mật khẩu: " . $conn->error);
    }

    $stmt->bind_param("si", $hashed_password, $user_id);

    if ($stmt->execute()) {
        // Chuyển hướng về trang đăng nhập
        header("Location: ../login/login.php");
        exit();
    } else {
        echo "Lỗi khi cập nhật mật khẩu: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>