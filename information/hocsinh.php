<?php
// Bắt đầu session để lấy thông tin tài khoản đăng nhập
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa và vai trò có phải là học sinh không
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'hocsinh') {
    header("Location: ../login/login.php");
    exit; // Dừng thực thi nếu không phải là học sinh
}

// Kết nối tới cơ sở dữ liệu
include '../database/db_config.php'; // Đường dẫn đến file kết nối cơ sở dữ liệu

// Lấy ID của học sinh đang đăng nhập từ session
$student_id = $_SESSION['user_id'];

// Truy vấn để lấy thông tin lớp của học sinh và giáo viên chủ nhiệm
$query = "SELECT classes.class_name, classes.id AS class_id, teachers.id AS teacher_id, users.fullname AS teacher_name 
          FROM students 
          JOIN classes ON students.class_id = classes.id 
          JOIN teachers ON classes.homeroom_teacher_id = teachers.id 
          JOIN users ON teachers.user_id = users.id 
          WHERE students.id = ? ";

$stmt = $conn->prepare($query);
$stmt->bind_param("i", $student_id); // Liên kết tham số
$stmt->execute();
$result = $stmt->get_result();

// Kiểm tra xem học sinh có lớp không
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $class_name = $row['class_name'];
    $teacher_name = $row['teacher_name'];
    $class_id = $row['class_id'];
} else {
    $class_name = "Chưa có lớp";
    $teacher_name = "Chưa có giáo viên chủ nhiệm";
    $class_id = 0; // Nếu không có lớp, class_id sẽ là 0
}

$stmt->close(); // Đóng statement sau khi sử dụng
?>
<!-- Hiển thị thông tin lớp -->
<h4 style="margin: 10px;">Danh sách lớp</h4>
    <div class="class-list">
        <div class="class-item">
            <div class="class-info">
                <span class="class-name">Lớp: <?php echo htmlspecialchars($class_name); ?></span>
                <span>GVCN: <?php echo htmlspecialchars($teacher_name); ?></span>
            </div>
            <!-- Nút Chi tiết sẽ dẫn đến trang chi tiết giáo viên với class_id -->
            <a href="GV.php?class_id=<?php echo urlencode($class_id); ?>">
                <button class="btn-detail">Chi tiết</button>
            </a>
        </div>
    </div>
<!-- <h4 style="margin: 10px;">Danh sách lớp</h4>
<div class="class-list">
    <div class="class-item">
        <div class="class-info">
            <span class="class-name">Lớp: 9A1</span>
            <span>GVCN: Trần Thành Đạt</span>
        </div>
        <a href="GV.php"><button class="btn-detail">Chi tiết</button></a>
    </div>
</div> -->