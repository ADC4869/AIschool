<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kế chuyên cần</title>
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
    <link rel="stylesheet" href="./css/diligence1.css">
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
            <div class="title">Thống kế chuyên cần theo học kỳ</div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="title">Danh sách học sinh lớp 9A1</div>
            <div class="info-bar">
                <span>Sĩ số: 40</span>
                <span class="green">Hiện diện: 38</span>
                <span class="red">Vắng: 2</span>
                <span class="orgin">Trễ: 1</span>
            </div>
            <ul class="list-students">
                <li class="student-item">
                    <a href="./diligence.php">
                        <div class="student-photo">
                            <img src="../img/hs.jpg" alt="Nguyễn Thị Mỹ Tiên">
                        </div>
                        <div class="student-info">
                            <div class="student-name">Nguyễn Thị Mỹ Tiên</div>
                            <div class="student-id">Mã học sinh: HS0001</div>
                        </div>
                        <div class="student-status">i</div>
                    </a>
                </li>
                <li class="student-item">
                    <a href="./diligence.php">
                        <div class="student-photo">
                            <img src="../img/hs1.jpg" alt="Nguyễn Minh Khoa">
                        </div>
                        <div class="student-info">
                            <div class="student-name">Nguyễn Minh Khoa</div>
                            <div class="student-id">Mã học sinh: HS0002</div>
                        </div>
                        <div class="student-status">i</div>
                    </a>
                </li>
                <li class="student-item">
                    <a href="./diligence.php">
                        <div class="student-photo">
                            <img src="../img/hs1.jpg" alt="Nguyễn Minh Khoa">
                        </div>
                        <div class="student-info">
                            <div class="student-name">Nguyễn Minh Khoa</div>
                            <div class="student-id">Mã học sinh: HS0002</div>
                        </div>
                        <div class="student-status">i</div>
                    </a>
                </li>
                <li class="student-item">
                    <a href="./diligence.php">
                        <div class="student-photo">
                                <img src="../img/hs1.jpg" alt="Nguyễn Minh Khoa">
                        </div>
                        <div class="student-info">
                            <div class="student-name">Nguyễn Minh Khoa</div>
                            <div class="student-id">Mã học sinh: HS0002</div>
                        </div>
                        <div class="student-status">i</div>
                    </a>
                </li>
                <!-- Repeat student items as needed -->
            </ul>
        </div>
    </main>
</body>

</html>
<script src="../js/back.js"></script>
