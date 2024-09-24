<?php
session_start();
include '../database/db_config.php'; // Kết nối tới database

$user_id = $_SESSION['user_id']; // ID của người dùng đăng nhập
$user_role = $_SESSION['role']; // Vai trò của người dùng (hocsinh, giaovien)

$messages = [];

if ($user_role == 'hocsinh') {
    // Lấy thông tin lớp của học sinh
    $query_class = "SELECT class_id FROM students WHERE user_id = ?";
    $stmt_class = $conn->prepare($query_class);
    $stmt_class->bind_param("i", $user_id);
    $stmt_class->execute();
    $result_class = $stmt_class->get_result();
    $class_row = $result_class->fetch_assoc();
    $class_id = $class_row['class_id'];

    // Truy vấn tin nhắn giữa học sinh và giáo viên chủ nhiệm, giáo viên dạy môn, và học sinh cùng lớp
    $query_messages = "
        SELECT m.*, u.fullname as sender_name, u2.fullname as receiver_name 
        FROM messages m
        JOIN users u ON m.sender_id = u.id
        JOIN users u2 ON m.receiver_id = u2.id
        WHERE (
            m.sender_id = ? OR m.receiver_id = ?
        )
        AND (
            m.sender_id IN (
                SELECT t.user_id
                FROM teachers t
                JOIN teacher_subjects ts ON t.user_id = ts.teacher_id
                WHERE ts.class_id = ?
            ) OR m.receiver_id IN (
                SELECT t.user_id
                FROM teachers t
                JOIN teacher_subjects ts ON t.user_id = ts.teacher_id
                WHERE ts.class_id = ?
            ) OR m.sender_id IN (
                SELECT s.user_id
                FROM students s
                WHERE s.class_id = ?
            ) OR m.receiver_id IN (
                SELECT s.user_id
                FROM students s
                WHERE s.class_id = ?
            )
        )
        ORDER BY m.created_at ASC
    ";
    $stmt_messages = $conn->prepare($query_messages);
    $stmt_messages->bind_param("iiiiii", $user_id, $user_id, $class_id, $class_id, $class_id, $class_id);
} elseif ($user_role == 'giaovien') {
    // Giáo viên - Lấy danh sách lớp mà giáo viên chủ nhiệm hoặc dạy
    $query_classes = "
        SELECT c.id AS class_id
        FROM classes c
        LEFT JOIN teacher_subjects ts ON c.id = ts.class_id
        WHERE ts.teacher_id = ? OR c.homeroom_teacher_id = ?
    ";
    $stmt_classes = $conn->prepare($query_classes);
    $stmt_classes->bind_param("ii", $user_id, $user_id);
    $stmt_classes->execute();
    $result_classes = $stmt_classes->get_result();

    $class_ids = [];
    while ($row = $result_classes->fetch_assoc()) {
        $class_ids[] = $row['class_id'];
    }
    $class_ids_placeholder = implode(',', array_fill(0, count($class_ids), '?'));

    // Truy vấn tin nhắn giữa giáo viên và học sinh/phụ huynh trong lớp
    $query_messages = "
        SELECT m.*, u.fullname as sender_name, u2.fullname as receiver_name 
        FROM messages m
        JOIN users u ON m.sender_id = u.id
        JOIN users u2 ON m.receiver_id = u2.id
        WHERE (
            m.sender_id = ? OR m.receiver_id = ?
        )
        AND (
            m.sender_id IN (
                SELECT s.user_id
                FROM students s
                WHERE s.class_id IN ($class_ids_placeholder)
            ) OR m.receiver_id IN (
                SELECT s.user_id
                FROM students s
                WHERE s.class_id IN ($class_ids_placeholder)
            ) OR m.sender_id IN (
                SELECT u.id
                FROM users u
                JOIN students s ON u.id = s.parent_id
                WHERE s.class_id IN ($class_ids_placeholder)
            ) OR m.receiver_id IN (
                SELECT u.id
                FROM users u
                JOIN students s ON u.id = s.parent_id
                WHERE s.class_id IN ($class_ids_placeholder)
            )
        )
        ORDER BY m.created_at ASC
    ";
    $stmt_messages = $conn->prepare($query_messages);
    $params = array_merge([$user_id, $user_id], $class_ids, $class_ids, $class_ids, $class_ids);
    $types = str_repeat('i', count($params));
    $stmt_messages->bind_param($types, ...$params);
}

$stmt_messages->execute();
$result_messages = $stmt_messages->get_result();

while ($row = $result_messages->fetch_assoc()) {
    $messages[] = $row;
}

echo json_encode($messages);

?>