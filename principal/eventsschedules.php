<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sự kiện và lịch trình</title>
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
    <link rel="stylesheet" href="css/events.css">
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
            <div class="title">Sự kiện và lịch trình</div>
        </div>
    </header>

    <main>
        <div class="main_tab">
            <div class="tab_item">
                <p>Sự kiện <br> đang diễn ra</p>
            </div>

            <div class="tab_item">
                <p>Sự kiện <br> sắp tới</p>
            </div>

            <div class="tab_item">
                <p>Lịch họp</p>
            </div>

            <div class="tab_item">
                <p>Lịch công tác</p>
            </div>

        </div>

        <div class="main_content">
            <div class="event_item">
                <a href="">
                    <div class="event_photo">
                        <img src="../img/lekhaigiang.jfif" alt="">
                    </div>

                    <div class="event_info">
                        <p class="event_title">Lễ Khai Giảng Năm Học 2024 - 2025</p>
                        <p class="event_time"><i data-feather="clock" style="color: gray; width: 18px; height: 18px"></i> <span>05/09/2024
                                09:11:00</span>
                        </p>
                        <p class="event_status">Đang diễn ra</p>
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

</html>