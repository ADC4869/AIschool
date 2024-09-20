<?php
session_start();
$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'hocsinh';
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cài đặt</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- css -->
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="css/caidat.css">
    <link rel="stylesheet" href="css/footer.css">
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
            <div class="title">Cài đặt</div>
        </div>
    </header>

    <main>
        <?php
        $role = isset($_SESSION['role']) ? $_SESSION['role'] : 'hocsinh';
        $paths = [
            'hocsinh' => './setting/',
            'giaovien' => './setting/',
            'hieutruong' => './setting/'
        ];

        $basePath = isset($paths[$role]) ? $paths[$role] : $paths['hocsinh'];
        ?>

        <div class="menu">
            <div class="menu-item">
                <a href="<?php echo $basePath; ?>account.php?role=<?= isset($_GET["role"]) ? $_GET["role"] : "" ?>">
                    <i class="fa-solid fa-gear"></i>
                    <span>Cài đặt tài khoản</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="<?php echo $basePath; ?>password.php?role=<?= isset($_GET["role"]) ? $_GET["role"] : "" ?>">
                    <i class="fa-solid fa-lock"></i>
                    <span>Đặt lại mật khẩu</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="<?php echo $basePath; ?>device.php?role=<?= isset($_GET["role"]) ? $_GET["role"] : "" ?>">
                    <i class="fa-solid fa-mobile"></i>
                    <span>Quản lý thiết bị</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="<?php echo $basePath; ?>interface.php?role=<?= isset($_GET["role"]) ? $_GET["role"] : "" ?>">
                    <i class="fa-solid fa-globe"></i>
                    <span>Giao diện và ngôn ngữ</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="<?php echo $basePath; ?>application.php?role=<?= isset($_GET["role"]) ? $_GET["role"] : "" ?>">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>Giới thiệu về ứng dụng</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="<?php echo $basePath; ?>contact.php?role=<?= isset($_GET["role"]) ? $_GET["role"] : "" ?>">
                    <i class="fa-solid fa-address-book"></i>
                    <span>Thông tin liên hệ</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="<?php echo $basePath; ?>help.php?role=<?= isset($_GET["role"]) ? $_GET["role"] : "" ?>">
                    <i class="fa-solid fa-circle-question"></i>
                    <span>Trợ giúp</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="./login/login.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Đăng xuất</span>
                </a>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>
</body>
<script src="./js/back.js"></script>

</html>