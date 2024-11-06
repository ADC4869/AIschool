<?php
include '../database/theme_loader.php'
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao diện và ngôn ngữ</title>
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
    <link rel="stylesheet" href="css/innterfacelg.css">
    <link rel="stylesheet" href="../css/giaodien.css">
    
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
            <div class="title">Giao diện và ngôn ngữ</div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="title">Giao diện</div>
            <div class="theme-options">
                <div class="theme-option">
                    <input type="radio" id="light" name="theme" onclick="changeTheme('light')" checked>
                    <label for="light">
                        <img src="../img/sang.png" alt="Sáng">
                        <div>Sáng</div>
                    </label>
                </div>
                <div class="theme-option">
                    <input type="radio" id="dark" name="theme" onclick="changeTheme('dark')">
                    <label for="dark">
                        <img src="../img/toi.png" alt="Tối">
                        <div>Tối</div>
                    </label>
                </div>
                <div class="theme-option">
                    <input type="radio" id="system" name="theme" onclick="setTheme('system')">
                    <label for="system">
                        <img src="../img/hethong.png" alt="Theo hệ thống">
                        <div>Theo hệ thống</div>
                    </label>
                </div>
            </div>

            <a href="#">
                <div class="setting-item">
                    <div>Đổi phông chữ</div>
                    <div class="arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                        </svg>
                    </div>
                </div>
            </a>

            <a href="#">
                <div class="setting-item1">
                    <div>Đổi cỡ chữ</div>
                    <div class="arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </main>

    <article>
        <div class="container">
            <div class="header_language">Ngôn ngữ</div>
            <a href="language.php">
                <div class="item">
                    <div class="item-text">Đổi ngôn ngữ</div>
                    <div class="icon">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Flag_of_Vietnam.svg/320px-Flag_of_Vietnam.svg.png" alt="Tiếng Việt">
                        <div class="content">Tiếng Việt</div>
                        <div class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </article>
</body>
<script src="../js/back.js"></script>
<script>
    // Hàm thay đổi theme
function changeTheme(theme) {
    document.body.classList.remove('light-theme', 'dark-theme');
    document.body.classList.add(theme + '-theme');
    
    // Cập nhật màu chữ
    if (theme === 'light') {
        document.body.style.color = 'black';
    } else {
        document.body.style.color = 'white';
    }

    // Lưu vào cookie
    document.cookie = "theme=" + theme + "; path=/";
}

</script>
</html>