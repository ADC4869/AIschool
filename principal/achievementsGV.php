<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thành tích</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- Css -->
    <link rel="stylesheet" href="./css/achievementsGV.css">
    <link rel="stylesheet" href="../css/global.css">
</head>
<body>
    <header>
        <div class="header">
            <p class="header__title">Thành tích giáo viên</p>
            <div class="back-arrow">
                <span class="back-arrow" onclick="goBack()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                    </svg>
                </span>
            </div>
            <div class="teacher-info">
                <img src="../img/hs1.jpg" alt="Teacher Photo" class="teacher-photo">
                <div class="teacher-details">
                    <p class="data_hovatengiaovien">Nguyễn Thị Ánh Xuân</p>
                    <p class="data_magiaovien">GV20014567</p>
                    <p class="data_lophoc">Chủ nhiệm lớp 9A1</p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <?php
            $role = isset($_SESSION['role']) ? $_SESSION['role'] : 'hocsinh'; // Mặc định là học sinh nếu không có vai trò
        ?>

        <?php
            $role = isset($_GET['role']) ? $_GET['role'] : 'hocsinh';
            $accountInfo = '';
            if ($role === 'giaovien') {
                $accountInfo = 'Tài khoản : Giáo viên';
                $msLabel = 'MSGV';
            } elseif ($role === 'hieutruong') {
                $accountInfo = 'Tài khoản : Hiệu trưởng';
                $msLabel = 'MSHT';
            } else {
                $accountInfo = 'Tài khoản : Học sinh';
                $msLabel = 'MSHS';
            }
        ?>
        
        <div class="main__title">
            <h5>Thành tích giảng dạy</h5>
        </div>

        <div class="main__content">
            <div class="data_thanhtichgiangday">
                <div class="info">
                    <p>95% học sinh đạt điểm khá, giỏi trong kỳ thi cuối năm</p>
                </div>
                <div class="info">
                    <p>Bồi dưỡng 2 học sinh giỏi cấp thành phố, 3 học sinh giỏi cấp trường</p>
                </div>
            </div>
        </div>

        <div class="main__title">
            <h5>Thành tích nghiên cứu khoa học</h5>
        </div>

        <div class="main__content">
            <div class="data_thanhtichnghiencuu">
                <div class="info">
                    <p>Công bố 3 bài báo khoa học trên tạp chí giáo dục</p>
                </div>
            </div>
        </div>

        <div class="main__title">
            <h5>Thành tích trong công tác chủ nhiệm</h5>
        </div>

        <div class="main__content">
            <div class="data_thanhtichchunhiem">
                <div class="info">
                    <p>Tăng tỷ lệ học sinh tiến bộ trong học tập</p>
                </div>
            </div>
        </div>

        <div class="main__title">
            <h5>Thành tích cá nhân</h5>
        </div>

        <div class="main__content">
            <div class="data_thanhtichcanhan">
                <div class="info">
                    <p>Đạt giải 3 cuộc thi Giáo viên dạy giỏi cấp quận</p>
                </div>
            </div>
        </div>

        <div class="main__title">
            <h5>Đóng góp cho cộng đồng</h5>
        </div>

        <div class="main__content">
            <div class="data_donggopcongdong">
                <div class="info">
                    <p>Tham gia các hoạt động từ thiện, công tác xã hội</p>
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