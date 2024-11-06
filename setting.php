<?php
include './database/theme_loader.php';
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
    <link rel="stylesheet" href="./css/fix.css">
    <style>
        /* Giao diện sáng */
        .light-theme {
            background-color: white;
            color: black;
        }

        /* Giao diện tối */
        .dark-theme {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
<header>
        <div class="header">
            <span class="back-arrow" onclick="goBack()">
               
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
                <a
                    href="<?php echo $basePath; ?>accountteacher.php?role=<?= isset($_GET["role"]) ? $_GET["role"] : "" ?>">
                    <i data-feather="settings" style="color: #5C6898 ; margin-bottom: -5px; margin-right: 10px"></i>
                    <span>Cài đặt tài khoản</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="<?php echo $basePath; ?>password.php?role=<?= isset($_GET["role"]) ? $_GET["role"] : "" ?>">
                    <i data-feather="lock" style="color: #5C6898 ; margin-bottom: -5px; margin-right: 10px"></i>
                    <span>Đặt lại mật khẩu</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="<?php echo $basePath; ?>device.php?role=<?= isset($_GET["role"]) ? $_GET["role"] : "" ?>">
                    <i data-feather="tablet" style="color: #5C6898 ; margin-bottom: -5px; margin-right: 10px"></i>
                    <span>Quản lý thiết bị</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="<?php echo $basePath; ?>interface.php?role=<?= isset($_GET["role"]) ? $_GET["role"] : "" ?>">
                    <i data-feather="globe" style="color: #5C6898 ; margin-bottom: -5px; margin-right: 10px"></i>
                    <span>Giao diện và ngôn ngữ</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="<?php echo $basePath; ?>application.php?role=<?= isset($_GET["role"]) ? $_GET["role"] : "" ?>">
                    <i data-feather="info" style="color: #5C6898 ; margin-bottom: -5px; margin-right: 10px"></i>
                    <span>Giới thiệu về ứng dụng</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="<?php echo $basePath; ?>contact.php?role=<?= isset($_GET["role"]) ? $_GET["role"] : "" ?>">
                    <i data-feather="user" style="color: #5C6898 ; margin-bottom: -5px; margin-right: 10px"></i>
                    <span>Thông tin liên hệ</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="<?php echo $basePath; ?>help.php?role=<?= isset($_GET["role"]) ? $_GET["role"] : "" ?>">
                    <i data-feather="help-circle" style="color: #5C6898 ; margin-bottom: -5px; margin-right: 10px"></i>
                    <span>Trợ giúp</span>
                </a>
            </div>

            <div class="menu-item">
                <a href="./login/login.php">
                    <i data-feather="log-out" style="color: #5C6898 ; margin-bottom: -5px; margin-right: 10px"></i>
                    <span>Đăng xuất</span>
                </a>
            </div>
        </div>
    </main>

    <?php include 'footer.php' ?>
</body>
<script src="./js/back.js"></script>
<script src="./node_modules/feather-icons/dist/feather.js"></script>
<script src="./node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>

</html>