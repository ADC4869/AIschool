<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoạt động ngoại khóa</title>
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
    <link rel="stylesheet" href="css/activity.css">
    <link rel="stylesheet" href="./css/fix.css">
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
            <div class="title">Hoạt động ngoại khóa</div>
        </div>
    </header>

    <main>
        <div class="card-container">
            <div class="card">
                <a href="./activitydetail.php">
                    <img src="./img/dt.jpg" alt="anh hoat dong ngoai khoa">
                    <div class="card-content">
                        <h3 class="data_tieudehoatdong">Tham quan cố đô Huế tìm hiểu lịch sử và văn hóa dân tộc Việt Nam</h3>
                        <span class="data_noidunghoatdong">Nhầm khám phá quần thể di tích cố đô Huế nổi tiếng lưu giữ nhiều giá trị lịch sử được
                            UNESCO
                            công nhận...</span>
                        <p class="data_thoigian"> <i class="fa-regular fa-clock" style="color: #8a8a8a;"></i> 10:39 05/08/2024</p>
                    </div>
                </a>
            </div>

            <div class="card">
                <a href="./activitydetail.php">
                    <img src="./img/thigiuaki.jpeg" alt="anh hoat dong ngoai khoa">
                    <div class="card-content">
                        <h3 class="data_tieudehoatdong">Chiến dịch lao động làm sạch và nâng cao ý thức bảo vệ môi trường</h3>
                        <span class="data_noidunghoatdong">nhằm gắn công tác bảo vệ môi trường với phát triển bền vững; góp phần động viên, tôn vinh,
                            nhân rộng...</span>
                        <p class="data_thoigian"> <i class="fa-regular fa-clock" style="color: #8a8a8a;"></i> 10:39 16/09/2024</p>
                    </div>
                </a>
            </div>


            <div class="card">
                <a href="./activitydetail.php">
                    <img src="./img/cayxanh.jfif" alt="anh hoat dong ngoai khoa">
                    <div class="card-content">
                        <h3 class="data_tieudehoatdong">Phát động chương trình 'Triệu cây xanh - Vì một Việt Nam xanh'</h3>
                        <span class="data_noidunghoatdong">Chương trình được triển khai nhằm góp phần thực hiện thành công Đề án trồng 1 tỷ cây xanh
                            của Chính phủ...</span>
                        <p class="data_thoigian"> <i class="fa-regular fa-clock" style="color: #8a8a8a;"></i> 10:39 16/09/2024</p>
                    </div>
                </a>
            </div>


        </div>
    </main>
</body>
<script src="./js/back.js"></script>

</html>