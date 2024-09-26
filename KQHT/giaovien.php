<?php
session_start();
include '../database/db_config.php';

$teacher_id = $_SESSION['user_id'];

$grades = ['6', '7', '8', '9'];
$classData = [];

foreach ($grades as $grade) {
    $stmt = $conn->prepare("SELECT c.id, c.class_name, u.fullname AS homeroom_teacher 
                             FROM classes c 
                             LEFT JOIN teachers t ON c.homeroom_teacher_id = t.id 
                             LEFT JOIN users u ON t.user_id = u.id 
                             WHERE c.grade = ?");
    
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    
    $stmt->bind_param("i", $grade);
    $stmt->execute();
    $result = $stmt->get_result();
    
    while ($row = $result->fetch_assoc()) {
        $classData[$grade][] = $row;
    }
    $stmt->close();
}

$conn->close();
?>

<!-- Giáo viên -->
<div class="container">
    

    <!-- Modal năm học -->
    <div id="yearDialog" class="dialog">
        <div class="dialog-content">
            <h3>Năm học</h3>
            <ul>
                <li onclick="selectYear('2024-2025')">2024-2025</li>
                <li onclick="selectYear('2023-2024')">2023-2024</li>
                <li onclick="selectYear('2022-2023')">2022-2023</li>
                <li onclick="selectYear('2021-2022')">2021-2022</li>
            </ul>
            <button onclick="closeDialog()" class="cancel-btn">Hủy</button>
        </div>
    </div>

    <!-- Modal học kì -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <h3>Học kì</h3>
            <ul>
                <li class="semester-option">Học kì: I</li>
                <li class="semester-option">Học kì: II</li>
                <li class="semester-option">Cả năm</li>
            </ul>
            <button class="cancelBtn">Hủy</button>
        </div>
    </div>

    <!-- Hiển thị khối -->
    <div class="grade-buttons">
        <?php foreach ($grades as $grade): ?>
            <div class="grade-button" onclick="showClasses('grade<?php echo $grade; ?>')">Khối <?php echo $grade; ?></div>
        <?php endforeach; ?>
    </div>

<!-- Hiển thị danh sách lớp cho mỗi khối -->
<?php foreach ($grades as $grade): ?>
    <div id="grade<?php echo $grade; ?>" class="class-list" style="display:none;">
        <?php if (isset($classData[$grade])): ?>
            <?php foreach ($classData[$grade] as $class): ?>
                <div class="class-item">
                    <div class="class-info">
                        <p><strong><?php echo htmlspecialchars($class['class_name']); ?></strong></p>
                        <p>GVCN: <?php echo htmlspecialchars($class['homeroom_teacher'] ?? 'Chưa có'); ?></p>
                    </div>
                    <button class="details-button" onclick="togglePopup(this, '<?php echo $class['id']; ?>')">Chọn tác vụ</button>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Không có lớp nào trong khối <?php echo $grade; ?>.</p>
        <?php endif; ?>
    </div>
<?php endforeach; ?>

<div id="popup" class="popup">
        <div class="popup-content">
            <a id="viewScoreLink" href="#"><p>Xem điểm</p></a>
            <a href="nhapdiem.php"><p>Nhập điểm</p></a>
        </div>
    </div>
</div>
<script src="./js/tacvu.js"></script>