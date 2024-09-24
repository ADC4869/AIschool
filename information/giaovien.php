<?php
session_start();
include '../database/db_config.php';

// Lấy ID của giáo viên từ session
$teacher_id = $_SESSION['user_id'];

// Truy vấn để lấy danh sách các lớp học mà giáo viên dạy
$query = "SELECT c.id AS class_id, c.class_name, ht.fullname AS homeroom_teacher, s.subject_name
          FROM classes c
          LEFT JOIN users ht ON c.homeroom_teacher_id = ht.id
          LEFT JOIN teacher_subjects ts ON ts.class_id = c.id
          LEFT JOIN subjects s ON ts.subject_id = s.id
          WHERE ts.teacher_id = ?
";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $teacher_id);
$stmt->execute();
$result = $stmt->get_result();

// Xử lý và xuất dữ liệu
$classes = [];
while ($row = $result->fetch_assoc()) {
    $classes[] = $row;
}

// Debug: Kiểm tra dữ liệu
// var_dump($classes);
?>
<h4 style="margin: 10px;">Danh sách các lớp đang giảng dạy</h4>
    <div class="class-list">
        <?php foreach ($classes as $class): ?>
            <div class="class-item">
                <div class="class-info">
                    <span class="class-name"><?php echo htmlspecialchars($class['class_name']); ?></span>
                    <span>GVCN: <?php echo htmlspecialchars($class['homeroom_teacher']); ?></span>
                    <span>Ghi chú: Dạy <?php echo htmlspecialchars($class['subject_name']); ?></span>
                </div>
                <a href="GV.php?class_id=<?php echo $class['class_id']; ?>"><button class="btn-detail">Chi tiết</button></a>
            </div>
        <?php endforeach; ?>
    </div>

<!-- <h4 style="margin: 10px;">Danh sách các lớp đang giảng dạy</h4>
<div class="class-list">
    <div class="class-item active">
        <div class="class-info">
            <span class="class-name">Lớp 1A</span>
            <span>GVCN: Trần Thành Đạt</span>
            <span>Ghi chú: Dạy Văn</span>
        </div>
        <a href="GV.php"><button class="btn-detail">Chi tiết</button></a>
    </div>
    <div class="class-item">
        <div class="class-info">
            <span class="class-name">Lớp 2A</span>
            <span>GVCN: Trần Đăng Khoa</span>
            <span>Ghi chú: Dạy Văn</span>
        </div>
        <a href="GV.php"><button class="btn-detail">Chi tiết</button></a>
    </div>
    <div class="class-item">
        <div class="class-info">
            <span class="class-name">Lớp 3A</span>
            <span>GVCN: Lý Lan Anh</span>
            <span>Ghi chú: Dạy Văn</span>
        </div>
        <a href="GV.php"><button class="btn-detail">Chi tiết</button></a>
    </div>
</div> -->