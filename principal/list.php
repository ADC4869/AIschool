<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tình trạng học phí</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- Css -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/list.css">
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
            <div class="title" id="headerTitle">Tình trạng học phí</div>
        </div>
    </header>

    <main>
        <div class="class-info">
            <p><strong>Lớp 9A1</strong><br>GVCN: Nguyễn Thị Ánh Xuân<br>Sĩ số: 40</p>
        </div>

        <div class="student-list">
            <div class="student-item paid">
                <img src="../img/gv.jpg" alt="Đào Ngọc Hoa">
                <div class="info">
                    <p class="name">Đào Ngọc Hoa</p>
                    <p class="status">Đã đóng học phí</p>
                </div>
                <div class="icons">
                    <a href="../call/index.php">
                        <button class="call"><i data-feather="phone" style="color: #5B6998"></i></button>
                    </a>
                    <a href="../chat/chathocsinh.php">
                        <button class="message"><i data-feather="message-square" style="color: #5B6998"></i></button>
                    </a>
                </div>
            </div>
            <div class="student-item paid">
                <img src="../img/gv.jpg" alt="Hoa Thanh Sơn">
                <div class="info">
                    <p class="name">Hoa Thanh Sơn</p>
                    <p class="status">Đã đóng học phí</p>
                </div>
                <div class="icons">
                    <button class="call"><i data-feather="phone" style="color: #5B6998"></i></button>
                    <button class="message"><i data-feather="message-square" style="color: #5B6998"></i></button>
                </div>
            </div>
            <!-- Add more student-item divs similarly -->
            <div class="student-item unpaid">
                <img src="../img/gv.jpg" alt="Nguyễn Ngọc Ánh">
                <div class="info">
                    <p class="name">Nguyễn Ngọc Ánh</p>
                    <p class="status">Chưa đóng học phí</p>
                    <p class="note">Ghi chú: Khó khăn</p>
                </div>
                <div class="icons">
                    <a href="../call/index.php">
                        <button class="call"><i data-feather="phone" style="color: #5B6998"></i></button>
                    </a>
                    <button class="message"><i data-feather="message-square" style="color: #5B6998"></i></button>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="../js/back.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>

</html>