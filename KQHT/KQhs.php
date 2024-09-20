<?php
session_start();
include '../database/db_config.php';

// Kiểm tra quyền truy cập
if ($_SESSION['role'] !== 'giaovien') {
    die("Bạn không có quyền truy cập trang này.");
}

// Lấy ID lớp từ URL
$class_id = isset($_GET['class_id']) ? intval($_GET['class_id']) : 0;

// Kiểm tra kết nối cơ sở dữ liệu
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy thông tin lớp
$class_stmt = $conn->prepare("SELECT class_name FROM classes WHERE id = ?");
$class_stmt->bind_param("i", $class_id);
$class_stmt->execute();
$class_result = $class_stmt->get_result();
$class_info = $class_result->fetch_assoc();
$class_stmt->close();

$class_name = $class_info['class_name'] ?? 'Lớp không xác định';

// Lấy danh sách học sinh trong lớp
$students_stmt = $conn->prepare("SELECT s.student_code, u.fullname AS student_name, u.phone AS parent_phone 
                                  FROM students s 
                                  LEFT JOIN users u ON s.id = u.id 
                                  WHERE s.class_id = ?");
$students_stmt->bind_param("i", $class_id);
$students_stmt->execute();
$students_result = $students_stmt->get_result();

$students = [];
while ($row = $students_result->fetch_assoc()) {
    $students[] = $row;
}
$students_stmt->close();

$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Học tập</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- css -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/HS.css">
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
            <div class="title">Kết Quả Học Tập</div>
        </div>
    </header>

    <main>
        <div class="student-list">
            <h2>Danh sách học sinh lớp <?php echo htmlspecialchars($class_name); ?></h2>
            
            <?php foreach ($students as $student): ?>
                <div class="student-card">
                    <div class="info">
                        <p><strong>Họ tên: <?php echo htmlspecialchars($student['student_name']); ?></strong></p>
                        <p>Lớp: <?php echo htmlspecialchars($class_name); ?></p>
                        <p>Mã học sinh: <?php echo htmlspecialchars($student['student_code']); ?></p>
                        <p>Phụ huynh: <?php echo htmlspecialchars($student['parent_phone'] ?? 'Chưa có'); ?></p>
                        <a href="ketqua.php?student_id=<?php echo $student['student_code']; ?>">
                            <button>Chi tiết</button>
                        </a>
                    </div>
                    <img src="../img/ht.jpg" alt="Student">
                </div>
            <?php endforeach; ?>
        </div>
        <!-- <div class="student-list">
            <h2>Danh sách học sinh lớp 9A1</h2>
            <div class="student-card">
                <div class="info">
                    <p><strong>Họ tên: Nguyễn Thị Mỹ Anh</strong></p>
                    <p>Lớp: 1A</p>
                    <p>Mã học sinh: 2002</p>
                    <p>Phụ huynh: Từ Văn Hiền</p>
                    <a href="ketqua.php"><button>Chi tiết</button></a>
                </div>
                <img src="../img/ht.jpg" alt="Student 1">
            </div>

            <div class="student-card">
                <div class="info">
                    <p><strong>Họ tên: Nguyễn Nam</strong></p>
                    <p>Lớp: 1A</p>
                    <p>Mã học sinh: 2003</p>
                    <p>Phụ huynh: Nguyễn Dương</p>
                    <a href="ketqua.php"><button>Chi tiết</button></a>
                </div>
                <img src="../img/ht.jpg" alt="Student 2">
            </div>

            <div class="student-card">
                <div class="info">
                    <p><strong>Họ tên: Nguyễn Huệ</strong></p>
                    <p>Lớp: 1A</p>
                    <p>Mã học sinh: 2004</p>
                    <p>Phụ huynh: Nguyễn Hưng</p>
                    <a href="ketqua.php"><button>Chi tiết</button></a>
                </div>
                <img src="../img/ht.jpg" alt="Student 3">
            </div>
        </div> -->
    </main>
</body>
<script src="../js/back.js"></script>
</html>