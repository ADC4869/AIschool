<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê giáo viên</title>
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
    <link rel="stylesheet" href="./css/statiscal.css">
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
            <div class="title">Thống kê giáo viên</div>
        </div>
    </header>

    <main>
        <div class="teacher-list">
            <h2>Danh sách Giáo viên</h2>
            <div class="teacher-info">
                <span>Tổng số: <b>30</b></span>
                <span>Nam: <b>18</b></span>
                <span>Nữ: <b>12</b></span>
            </div>
        </div>

        <div class="teacher-card">
            <div class="profile">
                <img src="../img/hs.jpg" alt="Profile Image">
                <div class="info">
                    <p><b>Nguyễn Thị Ánh Xuân</b></p>
                    <p>Mã nhân viên: GV20014567</p>
                </div>
            </div>
            <div class="actions">
                <button class="call"><i class="fas fa-phone"></i></button>
                <button class="message"><i class="fas fa-comment"></i></button>
            </div>
        </div>

        <div class="teacher-card">
            <div class="profile">
                <img src="../img/hs.jpg" alt="Profile Image">
                <div class="info">
                    <p><b>Trần Nguyên Khôi</b></p>
                    <p>Mã nhân viên: GV20014568</p>
                </div>
            </div>
            <div class="actions">
                <button class="call"><i class="fas fa-phone"></i></button>
                <button class="message"><i class="fas fa-comment"></i></button>
            </div>
        </div>
    </main>
</body>
<script src="../js/back.js"></script>
</html>