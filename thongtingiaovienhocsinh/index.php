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
    <link rel="stylesheet" href="css/infoteacherstudent.css">
</head>
<body>
    <?php
        $role = isset($_GET['role']) ? $_GET['role'] : '';
        $teacher_id = isset($_GET['teacher_id']) ? $_GET['teacher_id'] : null;

        if ($role == 'giaovien') {
            include 'giaovien.php'; // Bao gồm trang giaovien.php
        } elseif ($role == 'hocsinh') {
            // Chuyển đến trang hocsinh.php nếu cần
        } else {
            // Mặc định là hocsinh.php nếu không có role
            header('Location: hocsinh.php');
            exit();
        }
    ?>
</body>
</html>