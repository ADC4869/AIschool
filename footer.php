<?php
// Determine the current page
$current_page = basename($_SERVER['PHP_SELF']);

// Get the role, default to 'hocsinh'
$role = isset($_GET['role']) ? $_GET['role'] : 'hocsinh';
?>

<footer>
    <div class="bottom-nav">
        <a href="./chat/message.php<?php echo ($role == 'giaovien' || $role == 'hieutruong' || $role == 'phuhuynh') ? '?role=' . $role : ''; ?>"
            class="<?php echo ($current_page == 'message.php') ? 'home-active' : ''; ?>">
            <div class="nav-item">
                <i class="fa-solid fa-message"></i>
                <span>Tin nhắn</span>
            </div>
        </a>

        <?php
        // Role-based navigation
        if ($role == 'hieutruong') {
            echo '
            <a href="./principal/comment.php" class="' . ($current_page == 'comment.php' ? 'home-active' : '') . '">
                <div class="nav-item">
                    <i class="fa-solid fa-star"></i>
                    <span>Góp ý</span>
                </div>
            </a>';
        } elseif ($role == 'giaovien') {
            echo '
            <a href="./KQHT/index.php' . ($role == 'giaovien' ? '?role=giaovien' : '') . '" class="' . ($current_page == 'index.php' ? 'home-active' : '') . '">
                <div class="nav-item">
                    <i class="fa-solid fa-star"></i>
                    <span>Học tập</span>
                </div>
            </a>';
        } elseif ($role == 'hocsinh') {
            echo '
            <a href="./thongbao/notificationHS.php' . ($role == 'hocsinh' ? '?role=hocsinh' : '') . '" class="' . ($current_page == 'index.php' ? 'home-active' : '') . '">
                <div class="nav-item">
                    <i class="fa-solid fa-star"></i>
                    <span>Góp ý</span>
                </div>
            </a>';
        } elseif ($role == 'phuhuynh') {
            echo '
            <a href="./parents/ykiendonggop.php' . ($role == 'phuhuynh' ? '?role=phuhuynh' : '') . '" class="' . ($current_page == 'index.php' ? 'home-active' : '') . '">
                <div class="nav-item">
                    <i class="fa-solid fa-star"></i>
                    <span>Góp ý</span>
                </div>
            </a>';
        }
        ?>

        <a href="home.php<?php echo ($role == 'giaovien' || $role == 'hieutruong' || $role == 'phuhuynh') ? '?role=' . $role : ''; ?>"
            class="<?php echo ($current_page == 'home.php') ? 'home-active' : ''; ?>">
            <div class="nav-item">
                <i class="fa-solid fa-house"></i>
                <span>Trang chủ</span>
            </div>
        </a>

        <a href="./thongbao/notification.php<?php echo ($role == 'giaovien' || $role == 'hieutruong' || $role == 'phuhuynh') ? '?role=' . $role : ''; ?>"
            class="<?php echo ($current_page == 'notification.php') ? 'home-active' : ''; ?>">
            <div class="nav-item">
                <i class="fa-solid fa-bell"></i>
                <span>Thông báo</span>
            </div>
        </a>

        <a href="setting.php<?php echo ($role == 'giaovien' || $role == 'hieutruong' || $role == 'phuhuynh') ? '?role=' . $role : ''; ?>"
            class="<?php echo ($current_page == 'setting.php') ? 'home-active' : ''; ?>">
            <div class="nav-item">
                <i class="fa-solid fa-gear"></i>
                <span>Cài đặt</span>
            </div>
        </a>
    </div>
</footer>