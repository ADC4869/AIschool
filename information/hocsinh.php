<?php
session_start();
include '../database/db_config.php';  // Kết nối tới cơ sở dữ liệu

// Lấy ID học sinh từ session (sau khi học sinh đã đăng nhập)
$student_id = $_SESSION['user_id'];

// Truy vấn lấy thông tin lớp học và giáo viên chủ nhiệm
$query = "SELECT classes.class_name, users.fullname AS teacher_name
          FROM hocsinh
          JOIN classes ON hocsinh.class_id = classes.class_id
          JOIN giaovien ON classes.class_id = giaovien.class_supervised
          JOIN users ON giaovien.user_id = users.id
          WHERE hocsinh.user_id = ?";

// Kiểm tra kết nối và chuẩn bị truy vấn
if ($stmt = $conn->prepare($query)) {
    // Gán giá trị cho tham số truy vấn (student_id)
    $stmt->bind_param("i", $student_id);

    // Thực thi truy vấn
    $stmt->execute();

    // Lấy kết quả truy vấn
    $result = $stmt->get_result();

    // Kiểm tra nếu có dữ liệu trả về
    if ($result->num_rows > 0) {
        $class_info = $result->fetch_assoc();  // Lấy thông tin lớp và giáo viên chủ nhiệm
    } else {
        $class_info = null;  // Không có thông tin lớp cho học sinh này
    }
} else {
    // Nếu chuẩn bị truy vấn không thành công, in lỗi ra
    echo "Lỗi truy vấn: " . $conn->error;
    exit; // Dừng chương trình nếu có lỗi
}
?>

<!-- Hiển thị thông tin lớp -->
<h4 style="margin: 10px;">Danh sách lớp</h4>
<div class="class-list">
    <?php if ($class_info): ?>
    <div class="class-item">
        <div class="class-info">
            <span class="class-name">Lớp: <?php echo $class_info['class_name']; ?></span>
            <span>GVCN: <?php echo $class_info['teacher_name']; ?></span>
        </div>
        <a href="GV.php"><button class="btn-detail">Chi tiết</button></a>
    </div>
    <?php else: ?>
        <p>Không tìm thấy thông tin lớp.</p>
    <?php endif; ?>
</div>