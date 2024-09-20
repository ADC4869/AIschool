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
    <?php
        $role = isset($_GET['role']) ? $_GET['role'] : '';
            if ($role == 'giaovien') {
                header('Location: giaovien.php');
                exit();
            } elseif ($role == 'hocsinh') {
                header('Location: hocsinh.php');
                exit();
            } else {
                header('Location: hocsinh.php');
                exit();
            }
    ?>
</body>
</html>