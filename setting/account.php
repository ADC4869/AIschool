<?php
include '../database/db_config.php';
session_start();

if (!isset($_SESSION['role'])) {
    header("Location: ../login/login.php");
    exit;
}

$fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : 'Người dùng';
$dob = isset($_SESSION['dob']) ? $_SESSION['dob'] : 'dob';
$gender = isset($_SESSION['gender']) ? $_SESSION['gender'] : 'gender';
$user_role = isset($_SESSION['role']) ? $_SESSION['role'] : 'guest';

// Khởi tạo biến mã số
$code = 'Chưa có mã';

// Truy vấn cơ sở dữ liệu để lấy mã số dựa trên vai trò
if ($user_role === 'giaovien') {
    $query = "SELECT teacher_code FROM teachers JOIN users ON teachers.id = users.id WHERE users.fullname = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $fullname);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $code = htmlspecialchars($row['teacher_code']);
    }
} elseif ($user_role === 'hieutruong') {
    // Giả sử bạn có một bảng hiệu trưởng tương tự như bảng giáo viên
    $query = "SELECT principal_code FROM principals JOIN users ON principals.id = users.id WHERE users.fullname = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $fullname);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $code = htmlspecialchars($row['principal_code']);
    }
} elseif ($user_role === 'hocsinh') {
    $query = "SELECT student_code FROM students JOIN users ON students.id = users.id WHERE users.fullname = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $fullname);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        $code = htmlspecialchars($row['student_code']);
    }
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cài đặt tài khoản</title>
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
    <link rel="stylesheet" href="css/account.css">
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
            <div class="title">Cài đặt tài khoản</div>
        </div>
    </header>

    <main>
        <?php
            $role = isset($_SESSION['role']) ? $_SESSION['role'] : 'hocsinh'; // Mặc định là học sinh nếu không có vai trò
        ?>

        <?php
            $role = isset($_GET['role']) ? $_GET['role'] : 'hocsinh';
            $accountInfo = '';
            if ($role === 'giaovien') {
                $accountInfo = 'Tài khoản : Giáo viên';
                $msLabel = 'MSGV';
            } elseif ($role === 'hieutruong') {
                $accountInfo = 'Tài khoản : Hiệu trưởng';
                $msLabel = 'MSHT';
            } else {
                $accountInfo = 'Tài khoản : Học sinh';
                $msLabel = 'MSHS';
            }
        ?>
        
        <div class="account-info"><?php echo $accountInfo; ?></div>
        <div class="profile-container">
            <img src="../img/at.jpg" alt="Nguyễn Thị Yến Loan">
            <div class="profile-details">
                <span>Thông tin cá nhân</span>
                <h3><?php echo htmlspecialchars($fullname); ?></h3>
            </div>
        </div>

        <div class="info-card">
            <div class="info-row">
                <i class="icon"><i class="fa-regular fa-user"></i></i>
                <span class="label">Tên</span>
                <span class="value"><?php echo htmlspecialchars($fullname); ?></span>
            </div>

            <div class="info-row">
                <i class="icon"><i class="fa-regular fa-calendar-days"></i></i>
                <span class="label">Ngày sinh</span>
                <span class="value"><?php echo htmlspecialchars($dob); ?></span>
            </div>

            <div class="info-row">
                <i class="icon"><i class="fa-solid fa-genderless"></i></i>
                <span class="label">Giới tính</span>
                <span class="value"><?php echo htmlspecialchars($gender); ?></span>
            </div>

            <div class="info-row">
                <i class="icon"><i class="fa-solid fa-circle-info"></i></i>
                <span class="label"><?php echo $msLabel; ?></span>
                <span class="value"><?php echo htmlspecialchars($code); ?></span>
            </div>
        </div>
    </main>

    <footer>
        <div class="button">
            <a href="">
                <span class="icon"><i class="fa-solid fa-pen"></i></span>
                <button type="button" class="login">Chỉnh sửa</button>
            </a>
        </div>
    </footer>
</body>
<script src="../js/back.js"></script>
</html>