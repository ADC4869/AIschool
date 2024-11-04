<?php
// connect.php
$host = "localhost";  // Địa chỉ máy chủ MySQL
$username = "root";   // Tên đăng nhập MySQL
$password = "";       // Mật khẩu MySQL
$database = "kc_news"; // Tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($host, $username, $password, $database);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
?>