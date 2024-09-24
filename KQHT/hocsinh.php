<?php
session_start();
include '../database/db_config.php';

// Lấy mã học sinh từ phiên hoặc cơ sở dữ liệu nếu cần
$student_id = $_SESSION['user_id'];
$grades = ['6', '7', '8', '9'];
$classData = [];

// Lấy thông tin lớp cho tất cả các khối
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
<!-- Học sinh -->
<div class="container">
            <div class="year-semester">
                <div id="yearDisplay" class="year" onclick="openDialog()">Năm học: 2024 - 2025</div>
                <div class="semester" id="openModalBtn">Chọn học kì</div>
            </div>

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

            
            <!-- Hiển thị các khối -->
            <div class="grade-buttons">
                <?php foreach ($grades as $grade): ?>
                    <div class="grade-button" onclick="showClasses('grade<?php echo $grade; ?>')">Khối <?php echo $grade; ?></div>
                <?php endforeach; ?>
            </div>

            <!-- Hiển thị danh sách lớp cho từng khối -->
            <?php foreach ($grades as $grade): ?>
                <div id="grade<?php echo $grade; ?>" class="class-list" style="display:none;">
                    <?php if (isset($classData[$grade])): ?>
                        <?php foreach ($classData[$grade] as $class): ?>
                            <div class="class-item">
                                <div class="class-info">
                                    <p><strong><?php echo htmlspecialchars($class['class_name']); ?></strong></p>
                                    <p>GVCN: <?php echo htmlspecialchars($class['homeroom_teacher'] ?? 'Chưa có'); ?></p>
                                </div>
                                <a href="KQhs.php?class_id=<?php echo $class['id']; ?>"><button class="details-button">Chi tiết</button></a>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Không có lớp nào trong khối <?php echo $grade; ?>.</p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
            <!-- <div id="grade1" class="class-list" style="display:none;">
                <div class="class-item">
                    <div class="class-info">
                        <p><strong>Lớp 1A</strong></p>
                        <p>GVCN: Nguyễn Thị Ánh Xuân</p>
                    </div>
                    <a href="KQhs.php"><button class="details-button">Chi tiết</button></a>
                </div>

                <div class="class-item">
                    <div class="class-info">
                        <p><strong>Lớp 1B</strong></p>
                        <p>GVCN: Trần Nguyên Khôi</p>
                    </div>
                    <a href="KQhs.php"><button class="details-button">Chi tiết</button></a>
                </div>

                <div class="class-item">
                    <div class="class-info">
                        <p><strong>Lớp 1C</strong></p>
                        <p>GVCN: Chu Văn An</p>
                    </div>
                    <a href="KQhs.php"><button class="details-button">Chi tiết</button></a>
                </div>
            </div> -->

            <!-- Lớp cho Khối 2 -->
            <!-- <div id="grade2" class="class-list" style="display:none;">
                <div class="class-item">
                    <div class="class-info">
                        <p><strong>Lớp 2A</strong></p>
                        <p>GVCN: Lê Thị Lan</p>
                    </div>
                    <a href="KQhs.php"><button class="details-button">Chi tiết</button></a>
                </div>

                <div class="class-item">
                    <div class="class-info">
                        <p><strong>Lớp 2B</strong></p>
                        <p>GVCN: Nguyễn Văn Nam</p>
                    </div>
                    <a href="KQhs.php"><button class="details-button">Chi tiết</button></a>
                </div>
            </div> -->

            <!-- Lớp cho Khối 3 -->
            <!-- <div id="grade3" class="class-list" style="display:none;">
                <div class="class-item">
                    <div class="class-info">
                        <p><strong>Lớp 3A</strong></p>
                        <p>GVCN: Lê Thị Lan</p>
                    </div>
                    <a href="KQhs.php"><button class="details-button">Chi tiết</button></a>
                </div>

                <div class="class-item">
                    <div class="class-info">
                        <p><strong>Lớp 3B</strong></p>
                        <p>GVCN: Nguyễn Văn Nam</p>
                    </div>
                    <a href="KQhs.php"><button class="details-button">Chi tiết</button></a>
                </div>

                <div class="class-item">
                    <div class="class-info">
                        <p><strong>Lớp 3C</strong></p>
                        <p>GVCN: Chu Văn An</p>
                    </div>
                    <a href="KQhs.php"><button class="details-button">Chi tiết</button></a>
                </div>
            </div> -->

            <!-- Lớp cho Khối 4 -->
            <!-- <div id="grade4" class="class-list" style="display:none;">
                <div class="class-item">
                    <div class="class-info">
                        <p><strong>Lớp 4A</strong></p>
                        <p>GVCN: Lê Thị Lan</p>
                    </div>
                    <a href="KQhs.php"><button class="details-button">Chi tiết</button></a>
                </div>

                <div class="class-item">
                    <div class="class-info">
                        <p><strong>Lớp 4B</strong></p>
                        <p>GVCN: Nguyễn Văn Nam</p>
                    </div>
                    <a href="KQhs.php"><button class="details-button">Chi tiết</button></a>
                </div>
            </div> -->

            <!-- Lớp cho Khối 5 -->
            <!-- <div id="grade5" class="class-list" style="display:none;">
                <div class="class-item">
                    <div class="class-info">
                        <p><strong>Lớp 5A</strong></p>
                        <p>GVCN: Lê Thị Lan</p>
                    </div>
                    <a href="KQhs.php"><button class="details-button">Chi tiết</button></a>
                </div>

                <div class="class-item">
                    <div class="class-info">
                        <p><strong>Lớp 5B</strong></p>
                        <p>GVCN: Nguyễn Văn Nam</p>
                    </div>
                    <a href="KQhs.php"><button class="details-button">Chi tiết</button></a>
                </div>
            </div> -->
        </div>