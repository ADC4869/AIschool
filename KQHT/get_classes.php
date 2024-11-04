<?php
session_start();
include '../database/db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['grade'])) {
    $grade = $_POST['grade'];
    $classData = [];

    $stmt = $conn->prepare("SELECT c.class_name, u.fullname AS homeroom_teacher 
                             FROM classes c 
                             LEFT JOIN teachers t ON c.homeroom_teacher_id = t.id 
                             LEFT JOIN users u ON t.user_id = u.id 
                             WHERE c.grade = ?");
    
    $stmt->bind_param("i", $grade);
    $stmt->execute();
    $result = $stmt->get_result();
    
    while ($row = $result->fetch_assoc()) {
        $classData[] = $row;
    }
    $stmt->close();

    echo json_encode($classData);
}

$conn->close();
?>