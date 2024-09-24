<?php
include '../database/db_config.php'; // Kết nối đến cơ sở dữ liệu

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'giaovien') {
    header("Location: ../login/login.php");
    exit; // Dừng thực thi nếu không phải là giáo viên
}

// Lấy teacher_id từ URL
$teacher_id = isset($_GET['teacher_id']) ? $_GET['teacher_id'] : null;

if ($teacher_id) {
    // Bước 1: Lấy thông tin lớp chủ nhiệm của giáo viên
    $query_class = "SELECT classes.id AS class_id, classes.class_name 
                    FROM classes 
                    JOIN teachers ON classes.homeroom_teacher_id = teachers.id 
                    WHERE teachers.id = ?";
    $stmt = $conn->prepare($query_class);
    
    if (!$stmt) {
        die("Lỗi trong câu lệnh chuẩn bị: " . $conn->error);
    }
    
    $stmt->bind_param("i", $teacher_id);
    $stmt->execute();
    $result_class = $stmt->get_result();

    if ($result_class->num_rows > 0) {
        $class_info = $result_class->fetch_assoc();
        $class_id = $class_info['class_id'];
        $class_name = $class_info['class_name'];

        // Bước 2: Lấy thông tin học sinh trong lớp đó
        $query_students = "SELECT u.id AS student_id, u.fullname, u.dob, u.address, u.phone 
                           FROM students AS s 
                           JOIN users AS u ON s.id = u.id 
                           WHERE s.class_id = ?";
        $stmt_students = $conn->prepare($query_students);
        
        if (!$stmt_students) {
            die("Lỗi trong câu lệnh chuẩn bị: " . $conn->error);
        }

        $stmt_students->bind_param("i", $class_id);
        $stmt_students->execute();
        $result_students = $stmt_students->get_result();

        $students = [];
        while ($student = $result_students->fetch_assoc()) {
            // Thêm thông tin học sinh vào mảng
            $students[] = $student;
        }
        $stmt_students->close(); // Đóng statement học sinh
    } else {
        $class_info = null;
    }
} else {
    $class_info = null;
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin giáo viên</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- css -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <div class="header">
            <span class="back-arrow" onclick="goBack()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                </svg>
            </span>
            <div class="title">Thông tin lớp 9A1</div>
        </div>
    </header>
    <!-- Thông tin giáo viên -->
    <main>
        <div class="tabs">
            <button class="tab-button active" onclick="openTab(event, 'tab1')">Thống kê KQHT</button>
            <button class="tab-button" onclick="openTab(event, 'tab2')">Tình trạng chuyên cần</button>
        </div>

        <!-- Thống kê KQHT -->
        <div id="tab1" class="tab-content active">
            <div class="container">
                <div class="legend-container">
                    <h3>Học lực</h3>
                    <div class="legend-item" onclick="showContent('xuat-sac')">
                        <div class="legend-color" style="background-color: #6A9CFD;"></div>
                        Xuất sắc: 5%
                    </div>
                    <div class="legend-item" onclick="showContent('gioi')">
                        <div class="legend-color" style="background-color: #B0DEFF;"></div>
                        Giỏi: 75%
                    </div>
                    <div class="legend-item" onclick="showContent('kha')">
                        <div class="legend-color" style="background-color: #76C4AA;"></div>
                        Khá: 15%
                    </div>
                    <div class="legend-item" onclick="showContent('trung-binh')">
                        <div class="legend-color" style="background-color: #FFF48F;"></div>
                        Trung bình: 5%
                    </div>
                    <div class="legend-item" onclick="showContent('yeu')">
                        <div class="legend-color" style="background-color: #E18786;"></div>
                        Yếu: 0%
                    </div>
                </div>

                <!-- Biểu đồ -->
                <div class="chart-container">
                    <canvas id="myPieChart"></canvas>
                </div>
            </div>

            <!-- Danh sách lớp -->
            <?php if ($class_info): ?> 
                <h2>Danh sách học sinh lớp <?php echo htmlspecialchars($class_info['class_name']); ?></h2>
                <div class="student-list">
                    <?php foreach ($students as $student): ?>
                        <div class="student-card">
                            <div class="student-left">
                                <a href="./lylichhocsinh.php?student_id=<?php echo urlencode($student['student_id']); ?>">
                                    <img src="../img/hs1.jpg" alt="Học sinh 1">
                                </a>
                                <div class="icons">
                                    <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                    <i class="fa-solid fa-message"></i>
                                </div>
                            </div>
                            <div class="student-info">
                                <h4>Họ tên: <?php echo htmlspecialchars($student['fullname']); ?></h4>
                                <p>Ngày sinh: <?php echo htmlspecialchars($student['dob']); ?></p>
                                <p>Địa chỉ: <?php echo htmlspecialchars($student['address']); ?></p>
                                <p>SĐT liên lạc: <?php echo htmlspecialchars($student['phone']); ?></p>
                                <p>Phụ huynh: </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p>Giáo viên này không phụ trách lớp nào.</p>
            <?php endif; ?>
            <!-- <div id="class-list">
                <h2>Danh sách lớp 9A1</h2>
                <div class="student-list">
                    
                    <div class="student-card">
                        <div class="student-left">
                            <a href="./lylichhocsinh.php">
                                <img src="../img/hs.jpg" alt="Học sinh 1">
                            </a>
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Nguyễn Thị Mỹ Anh</h4>
                            <p>Ngày sinh: 01/01/2000</p>
                            <p>Địa chỉ: 12 Ấp A, Xã Phú Hòa</p>
                            <p>SDT liên lạc: 0123456789</p>
                            <p>Phụ huynh: Nguyễn Hoa</p>
                        </div>

                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>

                    
                    <div class="student-card">
                        <div class="student-left">
                            <a href="./lylichhocsinh.php">
                                <img src="../img/hs1.jpg" alt="Học sinh 2">
                            </a>
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Trần Văn Giàu</h4>
                            <p>Ngày sinh: 01/02/2000</p>
                            <p>Địa chỉ: 12 Ấp B, Xã Phú Hòa</p>
                            <p>SDT liên lạc: 0133456789</p>
                            <p>Phụ huynh: Nguyễn Du</p>
                        </div>
                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>

                   
                    <div class="student-card">
                        <div class="student-left">
                            <a href="./lylichhocsinh.php">
                                <img src="../img/hs.jpg" alt="Học sinh 2">
                            </a>
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Nguyễn Thị Anh Thư</h4>
                            <p>Ngày sinh: 01/03/2000</p>
                            <p>Địa chỉ: 12 Ấp C, Xã Phú Hòa</p>
                            <p>SĐT liên lạc: 0143456789</p>
                            <p>Phụ huynh: Nguyễn Hoàng</p>
                        </div>
                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- Học lực -->
            <div id="xuat-sac" class="hidden-content">
                <h2>Số học sinh xuất sắc: 2</h2>
                <div class="student-list">
                    <!-- Học sinh 1 -->
                    <div class="student-card">
                        <div class="student-left">
                            <img src="../img/hs.jpg" alt="Học sinh 1">
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Nguyễn Thị Mỹ Anh</h4>
                            <p>Hạng: 1</p>
                            <p>Trung bình: 9.8</p>
                            <p>Học lực: Xuất sắc</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>

                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>

                    <!-- Học sinh 2 -->
                    <div class="student-card">
                        <div class="student-left">
                            <img src="../img/hs1.jpg" alt="Học sinh 2">
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Trần Văn Giàu</h4>
                            <p>Hạng: 2</p>
                            <p>Trung bình: 9.7</p>
                            <p>Học lực: Xuất sắc</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>
                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Học lực giỏi -->
            <div id="gioi" class="hidden-content">
                <h2>Số học sinh giỏi: 30</h2>
                <div class="student-list">
                    <!-- Học sinh 1 -->
                    <div class="student-card">
                        <div class="student-left">
                            <img src="../img/hs.jpg" alt="Học sinh 1">
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Nguyễn Thị Mỹ Anh</h4>
                            <p>Hạng: 3</p>
                            <p>Trung bình: 9.65</p>
                            <p>Học lực: Giỏi</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>

                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>

                    <!-- Học sinh 2 -->
                    <div class="student-card">
                        <div class="student-left">
                            <img src="../img/hs1.jpg" alt="Học sinh 2">
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Nguyễn Minh Khoa</h4>
                            <p>Hạng: 4</p>
                            <p>Trung bình: 9.6</p>
                            <p>Học lực: Giỏi</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>
                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>

                    <!-- Học sinh 3 -->
                    <div class="student-card">
                        <div class="student-left">
                            <img src="../img/hs.jpg" alt="Học sinh 2">
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Nguyễn Khoa Điềm</h4>
                            <p>Hạng: 5</p>
                            <p>Trung bình: 9.5</p>
                            <p>Học lực: Giỏi</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>
                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Học lực khá -->
            <div id="kha" class="hidden-content">
                <h2>Số học sinh khá: 6</h2>
                <div class="student-list">
                    <!-- Học sinh 1 -->
                    <div class="student-card">
                        <div class="student-left">
                            <img src="../img/hs.jpg" alt="Học sinh 1">
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Nguyễn Lan Hương</h4>
                            <p>Hạng: 11</p>
                            <p>Trung bình: 8.8</p>
                            <p>Học lực: Khá</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>

                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>

                    <!-- Học sinh 2 -->
                    <div class="student-card">
                        <div class="student-left">
                            <img src="../img/hs1.jpg" alt="Học sinh 2">
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Trần Đức Minh</h4>
                            <p>Hạng: 12</p>
                            <p>Trung bình: 8.65</p>
                            <p>Học lực: Khá</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>
                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>

                    <!-- Học sinh 3 -->
                    <div class="student-card">
                        <div class="student-left">
                            <img src="../img/hs.jpg" alt="Học sinh 2">
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Nguyễn Minh Anh</h4>
                            <p>Hạng: 13</p>
                            <p>Trung bình: 8.5</p>
                            <p>Học lực: Khá</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>
                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>

                    <!-- Học sinh 4 -->
                    <div class="student-card">
                        <div class="student-left">
                            <img src="../img/hs1.jpg" alt="Học sinh 2">
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Trần Đức Mẫn</h4>
                            <p>Hạng: 14</p>
                            <p>Trung bình: 8.4</p>
                            <p>Học lực: Khá</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>
                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>

                    <!-- Học sinh 5 -->
                    <div class="student-card">
                        <div class="student-left">
                            <img src="../img/hs.jpg" alt="Học sinh 2">
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Nguyễn Lê Thúy Vy</h4>
                            <p>Hạng: 15</p>
                            <p>Trung bình: 8.3</p>
                            <p>Học lực: Khá</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>
                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>

                    <!-- Học sinh 6 -->
                    <div class="student-card">
                        <div class="student-left">
                            <img src="../img/hs1.jpg" alt="Học sinh 2">
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Trần Anh Tuấn</h4>
                            <p>Hạng: 16</p>
                            <p>Trung bình: 8.2</p>
                            <p>Học lực: Khá</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>
                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Học lực trung bình -->
            <div id="trung-binh" class="hidden-content">
                <h2>Số học sinh trung bình: 2</h2>
                <div class="student-list">
                    <!-- Học sinh 1 -->
                    <div class="student-card">
                        <div class="student-left">
                            <img src="../img/hs.jpg" alt="Học sinh 1">
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Đào Gia Hảo</h4>
                            <p>Hạng: 28</p>
                            <p>Trung bình: 6.3</p>
                            <p>Học lực: Trung Bình</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>

                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>

                    <!-- Học sinh 2 -->
                    <div class="student-card">
                        <div class="student-left">
                            <img src="../img/hs1.jpg" alt="Học sinh 2">
                            <div class="icons">
                                <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                                <i class="fa-solid fa-message"></i>
                            </div>
                        </div>
                        <div class="student-info">
                            <h4>Họ tên: Phương Chí Hùng</h4>
                            <p>Hạng: 29</p>
                            <p>Trung bình: 6.2</p>
                            <p>Học lực: Trung bình</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>
                        <div class="icons1">
                            <i class="fa-solid fa-pen"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Học sinh yếu -->
            <div id="yeu" class="hidden-content">
                <h2>Số học sinh yếu: 0</h2>
                <div class="student-list">

                </div>
            </div>
        </div>

        <!-- Tình trạng chuyên cần -->
        <div id="tab2" class="tab-content">
            <div class="container1">
                <div class="date-picker">
                    <div class="chart-title">Chuyên cần theo ngày</div>
                    <input type="date" value="2024-09-10">
                </div>
                <canvas id="attendanceChart"></canvas>
            </div>
        </div>
    </main>
</body>
<script src="../js/back.js"></script>
<script src="./js/tab.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="./js/chart.js"></script>
<script src="./js/hocluc.js"></script>
</html>