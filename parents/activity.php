<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sự kiện và lịch họp</title>
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
    <link rel="stylesheet" href="css/activity.css">
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
        <div class="main_tab">
            <div class="tab_meeting active" id="tab_general">
                <button type="button">Hoạt động chung</button>
            </div>

            <div class="tab_event" id="tab_registered">
                <button type="button">Hoạt động đã đăng ký</button>
            </div>
        </div>


        <div class="main_activity_general" id="general">
            <div class="activity_item">
                <a href="../activitydetail.php">
                    <div class="activity_photo">
                        <img src="../img/cayxanh.jfif" alt="">
                    </div>

                    <div class="activity_info">
                        <span class="title data_tieudehoatdong">Phát động chương trình 'Triệu cây xanh - Vì một Việt Nam
                            xanh'</span>
                        <span class="content data_noidunghoatdong">Chương trình được triển khai nhằm góp phần thực hiện
                            thành công Đề án
                            trồng 1 tỷ cây xanh
                            của Chính phủ...</span>
                    </div>

                    <div class="activity_time">
                        <span class="data_thoigian"><i class="fa-regular fa-clock"></i> <span>10:39
                                16/09/2024</span></span>
                    </div>
                </a>
            </div>

            <div class="activity_item">
                <a href="../activitydetail.php">
                    <div class="activity_photo">
                        <img src="../img/cayxanh.jfif" alt="">
                    </div>

                    <div class="activity_info">
                        <span class="title data_tieudehoatdong">Phát động chương trình 'Triệu cây xanh - Vì một Việt Nam
                            xanh'</span>
                        <span class="content data_noidunghoatdong">Chương trình được triển khai nhằm góp phần thực hiện
                            thành công Đề án
                            trồng 1 tỷ cây xanh
                            của Chính phủ...</span>
                    </div>

                    <div class="activity_time">
                        <span class="data_thoigian"><i class="fa-regular fa-clock"></i> <span>10:39
                                16/09/2024</span></span>
                    </div>
                </a>
            </div>
        </div>

        <div class="main_activity_registered" style="display: none" id="registered">
            <div class="activity_item">
                <a href="../activitydetail.php">
                    <div class="activity_photo">
                        <img src="../img/thigiuaki.jpeg" alt="">
                    </div>

                    <div class="activity_info">
                        <span class="title data_tieudehoatdong">Phát động chương trình 'Triệu cây xanh - Vì một Việt Nam
                            xanh'</span>
                        <span class="content data_noidunghoatdong">Chương trình được triển khai nhằm góp phần thực hiện
                            thành công Đề án
                            trồng 1 tỷ cây xanh
                            của Chính phủ...</span>
                    </div>

                    <div class="activity_time">
                        <span class="data_thoigian"><i class="fa-regular fa-clock"></i> <span>10:39
                                16/09/2024</span></span>
                    </div>
                </a>
            </div>

            <div class="activity_item">
                <a href="../activitydetail.php">
                    <div class="activity_photo">
                        <img src="../img/cayxanh.jfif" alt="">
                    </div>

                    <div class="activity_info">
                        <span class="title data_tieudehoatdong">Phát động chương trình 'Triệu cây xanh - Vì một Việt Nam
                            xanh'</span>
                        <span class="content data_noidunghoatdong">Chương trình được triển khai nhằm góp phần thực hiện
                            thành công Đề án
                            trồng 1 tỷ cây xanh
                            của Chính phủ...</span>
                    </div>

                    <div class="activity_time">
                        <span class="data_thoigian"><i class="fa-regular fa-clock"></i> <span>10:39
                                16/09/2024</span></span>
                    </div>
                </a>
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
<script>

    document.getElementById('tab_general').addEventListener('click', function () {
        // Ẩn tất cả các nội dung khác
        document.getElementById('general').style.display = 'flex';
        document.getElementById('registered').style.display = 'none';

        // Thêm lớp 'active' cho tab "Hoạt động chung" 
        document.getElementById('tab_general').classList.add('active');
        document.getElementById('tab_registered').classList.remove('active');
    });

    document.getElementById('tab_registered').addEventListener('click', function () {
        // Ẩn tất cả các nội dung khác
        document.getElementById('general').style.display = 'none';
        document.getElementById('registered').style.display = 'flex';

        // Thêm lớp 'active' cho tab "Hoạt động đã đăng ký" 
        document.getElementById('tab_general').classList.remove('active');
        document.getElementById('tab_registered').classList.add('active');
    });
</script>

</html>