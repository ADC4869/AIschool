<?php
session_start();
include '../database/db_config.php';

$data = json_decode(file_get_contents("php://input"));

if (isset($data->message)) {
    $message = $data->message;
    $user_id = $_SESSION['user_id'];

    // Lưu tin nhắn vào cơ sở dữ liệu
    $stmt = $conn->prepare("INSERT INTO messages (content, sender, created_at) VALUES (?, 'user', NOW())");
    $stmt->bind_param("s", $message);
    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Không thể gửi tin nhắn.']);
    }
}
?>