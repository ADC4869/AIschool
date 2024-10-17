

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AISchool</title>
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
    <link rel="stylesheet" href="css/infocontact.css">
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
            <div class="title">Thông Tin Liên Lạc</div>
        </div>

        <div class="tab-container">
            <div id="chatTab" class="tab active" onclick="openTab('chatTab')">Giáo viên</div>
            <div id="groupTab" class="tab" onclick="openTab('groupTab')">Học sinh</div>
        </div>
    </header>

    <main>
        <!-- Giáo viên -->
        <div id="chatContent" class="tab-content active">
       
            <div class="card">
                <img src="../img/gvn.jpg" alt="Image">
                <div class="card-content">
                    <h3 class="data_hovatengiaovien">Họ Tên : Trần Thành Đạt</h3>
                    <p class="data_monhoc">Môn: Văn</p>
                    <p class="data_sodienthoai">Số điện thoại : 0369194202</p>
                    <p class="data_diachi">Địa chỉ: 299/12 Lê Quang Sung P6 Q6 HCM</p>
                    <p class="data_ghichu">Ghi chú : GVCN</p>
                </div>
                <div class="icon">
                    <a href="../call/index.php" style="font-size: 25px; color: var(--primary-color)"><i
                    data-feather="phone" style="color: #5B6998"></i></a>
                    <a href="../chat/chat.php" style="font-size: 25px; color: var(--primary-color); position: relative; left: 30px;"><i
                    data-feather="message-square" style="color: #5B6998"></i></a>
                </div>
            </div>

            <div class="card">
                <img src="../img/tg.jpg" alt="Image">
                <div class="card-content">
                    <h3 class="data_hovatengiaovien">Họ Tên : Trần Nguyên Khởi</h3>
                    <p class="data_monhoc">Môn: Lý</p>
                    <p class="data_sodienthoai">Số điện thoại : 123456789</p>
                    <p class="data_diachi">Địa chỉ: 192/23 Nguyễn Trãi, Quận 5, HCM</p>
                </div>
                <div class="icon">
                    <a href="../call/index.php" style="font-size: 25px; color: var(--primary-color)"><i
                    data-feather="phone" style="color: #5B6998"></i></a>
                    <a href="../chat/chat.php" style="font-size: 25px; color: var(--primary-color); position: relative; left: 30px;"><i
                    data-feather="message-square" style="color: #5B6998"></i></a>                       
                </div>
            </div>

            <div class="card">
                <img src="../img/gvn1.jpg" alt="Image">
                <div class="card-content">
                    <h3 class="data_hovatengiaovien">Họ Tên : Lâm Thị Mỹ Ngọc</h3>
                    <p class="data_monhoc">Môn: Toán</p>
                    <p class="data_sodienthoai">Số điện thoại : 123456789</p>
                    <p class="data_diachi">Địa chỉ: 192 Tạ Quan Bửu, Quận 8, HCM</p>
                </div>
                <div class="icon">
                    <a href="../call/index.php" style="font-size: 25px; color: var(--primary-color)"><i
                    data-feather="phone" style="color: #5B6998"></i></a>
                    <a href="../chat/chat.php" style="font-size: 25px; color: var(--primary-color); position: relative; left: 30px;"><i
                    data-feather="message-square" style="color: #5B6998"></i></a>
                </div>
            </div>
        </div>

        <!-- Phụ huynh -->
        <div id="groupContent" class="tab-content">
            <div class="card">
                <img src="../img/ph.jpg" alt="Image">
                <div class="card-content">
                    <h3 class="data_hovatenphuhuynh">Họ Tên : Lê Hồng Anh</h3>
                    <p>Số học sinh: 2</p>
                    <p class="data_sodienthoai">Số điện thoại : 0934567896</p>
                    <p class="data_diachi">Địa chỉ: 123/25 Võ Thị Sáu, Quận 3, HCM</p>
                </div>
                <div class="button-group">
                    <a href="../call/index.php" style="font-size: 25px; color: var(--primary-color)"><i
                            data-feather="phone" style="color: #5B6998"></i></a>
                    <a href="../chat/chat.php" style="font-size: 25px; color: var(--primary-color)"><i
                            data-feather="message-square" style="color: #5B6998"></i></a>
                </div>
            </div>

           

            <div class="card">
                <img src="../img/ph1.jpg" alt="Image">
                <div class="card-content">
                    <h3 class="data_hovatenphuhuynh">Họ Tên : Nguyễn Đăng Khoa</h3>
                    <p>Số học sinh: 1</p>
                    <p class="data_sodienthoai">Số điện thoại : 0345678985</p>
                    <p class="data_diachi">Địa chỉ: 208/30 Tên Lửa, Quận Bình Tân, HCM</p>
                </div>
                <div class="button-group">
                    <a href="../call/index.php" style="font-size: 25px; color: var(--primary-color)"><i
                            data-feather="phone" style="color: #5B6998"></i></a>
                    <a href="../chat/chat.php" style="font-size: 25px; color: var(--primary-color)"><i
                            data-feather="message-square" style="color: #5B6998"></i></a>
                </div>
            </div>

            <div class="card">
                <img src="../img/ph2.jpg" alt="Image">
                <div class="card-content">
                    <h3 class="data_hovatenphuhuynh">Họ Tên : Nguyễn Yến Vy</h3>
                    <p>Số học sinh: 2</p>
                    <p class="data_sodienthoai">Số điện thoại : 0923456789</p>
                    <p class="data_diachi">Địa chỉ: 33, Nguyễn Hữu Thọ, Quận Gò Vấp, HCM</p>
                </div>
                <div class="button-group">
                    <a href="../call/index.php" style="font-size: 25px; color: var(--primary-color)"><i
                            data-feather="phone" style="color: #5B6998"></i></a>
                    <a href="../chat/chat.php" style="font-size: 25px; color: var(--primary-color)"><i
                            data-feather="message-square" style="color: #5B6998"></i></a>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="js/tab.js"></script>
<script src="js/chitiet.js"></script>
<script src="../js/back.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>
</html>