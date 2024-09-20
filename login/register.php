<?php
$role = isset($_GET['role']) ? $_GET['role'] : 'hocsinh';
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
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
    <link rel="stylesheet" href="css/signin.css">
</head>
<body>
    <div class="container">
        <main>
            <?php
                // Include file tương ứng dựa vào role
                if ($role == 'giaovien') {
                    include 'loginGV.php';
                } elseif ($role == 'phuhuynh') {
                    include 'loginPH.php';
                } else {
                    include 'loginHS.php';
                }
            ?>
        </main>
    </div>
</body>
<script src="../js/back.js"></script>
</html>