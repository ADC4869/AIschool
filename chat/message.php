<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- Css -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="./css/messagestyle.css">
    <link rel="stylesheet" href="../css/footer.css">
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
            <div class="search-bar">
                <input type="text" placeholder="Tìm kiếm">
            </div>
        </div>
        <div class="tab-container">
            <div id="chatTab" class="tab active">Đoạn chat</div>
            <div id="groupTab" class="tab">Nhóm</div>
        </div>
    </header>





    <main>
        <!-- Đoạn chat -->
        <div id="chatContent" class="content">
            <ul class="chat-list">
                <li class="chat-item" data-chat-id="A">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Lê Hồng Anh</div>
                        <div class="chat-message">Tôi cần thay đổi thông tin số điện thoại...</div>
                    </div>

                    <div class="days">
                        <div class="chat-time">1 giờ</div>
                        <div class="time">5+</div>
                    </div>
                </li>

                <li class="chat-item" data-chat-id="B">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Trần Uyên Bạch Yên Vy</div>
                        <div class="chat-message">Tôi cần thay đổi thông tin số điện thoại...</div>
                    </div>

                    <div class="days">
                        <div class="chat-time">1 giờ</div>
                        <div class="time">5+</div>
                    </div>
                </li>

                <li class="chat-item" data-chat-id="C">
                    <img src="../img/hs1.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Nguyễn Đăng Khoa</div>
                        <div class="chat-message">Nội dung họp phụ huynh thứ 5 ngày 15/...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item" data-chat-id="D">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Uyên Mỹ Anh</div>
                        <div class="chat-message">Nội dung họp phụ huynh thứ 5 ngày 15/...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/hs1.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Lâm Anh Tuấn</div>
                        <div class="chat-message">Nội dung họp phụ huynh thứ 5 ngày 15/...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/hs1.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Lê Huỳnh Anh</div>
                        <div class="chat-message">Nội dung họp phụ huynh thứ 5 ngày 15/...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Vũ Thị Thu Phương</div>
                        <div class="chat-message">Nội dung họp phụ huynh thứ 5 ngày 15/...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Uyên Mỹ Anh</div>
                        <div class="chat-message">Nội dung họp phụ huynh thứ 5 ngày 15/...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
            </ul>
        </div>

        <!-- Nhóm -->
        <div id="groupContent" class="content" style="display: none;">
            <ul class="chat-list">
                <li class="chat-item" data-chat-id="E">
                    <img src="../img/group1.jfif" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Lớp 9A - Nhóm chat chung</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>

                    <div class="days">
                        <div class="chat-time">1 giờ</div>
                        <div class="time">5+</div>
                    </div>
                </li>
                <li class="chat-item" data-chat-id="F">
                    <img src="../img/group2.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Lớp 9A - Nhóm phụ huynh</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item" data-chat-id="G">
                    <img src="../img/group1.jfif" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Lớp 9A - Nhóm chat giáo viên</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item" data-chat-id="H">
                    <img src="../img/group2.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Nhóm môn Toán</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/group2.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Nhóm môn Văn</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/group1.jfif" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Nhóm môn Lịch Sử</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/group2.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Nhóm môn Tiếng Anh</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/group1.jfif" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Nhóm môn Hóa Học</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/group2.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Nhóm môn Vật Lí</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/group2.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name">Nhóm môn Địa Lý</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
            </ul>
        </div>
    </main>

    <?php include '../footer/footer.php' ?>
</body>
<script src="js/tab.js"></script>
<script src="js/chat.js"></script>
<script src="js/nhom.js"></script>
<script src="../js/back.js"></script>

</html>