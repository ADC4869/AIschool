<?php
session_start();
require_once '../database/db_config.php'; // Kết nối database

if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    http_response_code(403); // Trả về mã lỗi 403 nếu chưa đăng nhập
    echo json_encode(['error' => 'Unauthorized']);
    exit;
}

$user_id = $_SESSION['user_id'];
$role = $_SESSION['role']; // Vai trò của tài khoản đang đăng nhập
$messages = [];

// Truy vấn cho giáo viên
if ($role === 'giaovien') {
    // Lấy tất cả học sinh trong lớp mà giáo viên chủ nhiệm hoặc dạy, không bao gồm chính giáo viên
    $query_students = "SELECT s.id AS student_id, u.fullname AS student_name, c.class_name, p.fullname AS parent_name,
            COALESCE(m.message, 'Chưa có tin nhắn') AS message,
            COALESCE(m.created_at, NOW()) AS created_at,
            COALESCE(m.is_read, 1) AS is_read
        FROM students s
        JOIN classes c ON s.class_id = c.id
        JOIN users u ON s.id = u.id
        JOIN users p ON s.parent_id = p.id
        LEFT JOIN messages m ON m.receiver_id = u.id AND m.sender_id <> ? AND m.chat_id = m.id
        WHERE s.class_id IN (
            SELECT ts.class_id FROM teacher_subjects ts WHERE ts.teacher_id = ?
            UNION
            SELECT c.id FROM classes c WHERE c.homeroom_teacher_id = ?
        )
        ORDER BY m.created_at DESC ";

    $stmt_students = $conn->prepare($query_students);
    $stmt_students->bind_param("sss", $user_id, $user_id, $user_id);
    $stmt_students->execute();
    $result_students = $stmt_students->get_result();

    while ($row = $result_students->fetch_assoc()) {
        $unread_messages = ($row['is_read'] == 0) ? 1 : 0;
        $messages[] = [
            'chat_id' => $row['student_id'], // Sử dụng ID học sinh cho chat_id
            'sender_name' => $row['student_name'] . ' (' . $row['class_name'] . ')',
            'message' => $row['message'],
            'created_at' => $row['created_at'],
            'unread_messages' => $unread_messages
        ];

        // Thêm phụ huynh của học sinh
        $messages[] = [
            'chat_id' => $row['student_id'], // Sử dụng ID học sinh cho chat_id
            'sender_name' => $row['parent_name'] . ' (Phụ huynh của ' . $row['student_name'] . ')',
            'message' => $row['message'],
            'created_at' => $row['created_at'],
            'unread_messages' => $unread_messages
        ];
    }

    // Truy vấn cho giáo viên khác trong cùng lớp
    $query_teachers = "SELECT m.id AS chat_id, u.fullname AS teacher_name, s.subject_name, 
               COALESCE(m.message, 'Chưa có tin nhắn') AS message, 
               COALESCE(m.created_at, NOW()) AS created_at, 
               COALESCE(m.is_read, 1) AS is_read
        FROM teachers t
        JOIN users u ON t.user_id = u.id
        JOIN teacher_subjects ts ON t.id = ts.teacher_id
        JOIN subjects s ON ts.subject_id = s.id
        LEFT JOIN messages m ON m.receiver_id = u.id AND m.sender_id = ? AND m.chat_id = m.id
        WHERE ts.class_id IN (
            SELECT ts.class_id FROM teacher_subjects ts WHERE ts.teacher_id = ?
        )
        ORDER BY m.created_at DESC
    ";

    $stmt_teachers = $conn->prepare($query_teachers);
    $stmt_teachers->bind_param("ss", $user_id, $user_id);
    $stmt_teachers->execute();
    $result_teachers = $stmt_teachers->get_result();

    while ($row = $result_teachers->fetch_assoc()) {
        $subject_info = ($row['subject_name'] === null) ? 'GVCN' : $row['subject_name'];
        $unread_messages = ($row['is_read'] == 0) ? 1 : 0;
        $messages[] = [
            'chat_id' => $row['chat_id'],
            'sender_name' => $row['teacher_name'] . ' (' . $subject_info . ')',
            'message' => $row['message'],
            'created_at' => $row['created_at'],
            'unread_messages' => $unread_messages
        ];
    }
} elseif ($role === 'hocsinh') {
    // Truy vấn cho học sinh
    $query_students = "SELECT m.id AS chat_id, u.fullname AS name, 
               CASE 
                   WHEN t.class_supervised_id = st.class_id THEN 'GVCN' 
                   ELSE s.subject_name 
               END AS role_info,
               COALESCE(m.message, 'Chưa có tin nhắn') AS message, 
               COALESCE(m.created_at, NOW()) AS created_at, 
               COALESCE(m.is_read, 1) AS is_read 
        FROM students st
        JOIN classes c ON st.class_id = c.id
        JOIN teacher_subjects ts ON c.id = ts.class_id
        JOIN teachers t ON ts.teacher_id = t.id
        JOIN users u ON t.user_id = u.id
        LEFT JOIN subjects s ON ts.subject_id = s.id
        LEFT JOIN messages m ON m.receiver_id = u.id AND m.sender_id = ? AND m.chat_id = m.id
        WHERE st.id = ?
        ORDER BY m.created_at DESC
    ";
    
    $stmt_students = $conn->prepare($query_students);
    $stmt_students->bind_param("ss", $user_id, $user_id);
    $stmt_students->execute();
    $result_students = $stmt_students->get_result();
    
    while ($row = $result_students->fetch_assoc()) {
        $unread_messages = ($row['is_read'] == 0) ? 1 : 0;
        $messages[] = [
            'chat_id' => $row['chat_id'],
            'sender_name' => $row['name'] . ' (' . $row['role_info'] . ')',
            'message' => $row['message'],
            'created_at' => $row['created_at'],
            'unread_messages' => $unread_messages
        ];
    }
}

echo json_encode($messages);
?>