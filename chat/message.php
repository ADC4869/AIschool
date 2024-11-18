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
    <link rel="stylesheet" href="./css/message.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
    <header>
        <div class="container">
            <button onclick="goBack()"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                    fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16" color="white">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                </svg>
            </button>
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
                        <div class="chat-name data_hovatenphuhuynh">Nguyễn Như Ý</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>

                    <div class="days">
                        <div class="chat-time">1 giờ</div>
                        <div class="time">5+</div>
                    </div>
                </li>

                <li class="chat-item" data-chat-id="A">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Nguyễn Như Ý</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>

                    <div class="days">
                        <div class="chat-time">1 giờ</div>
                        <div class="time">5+</div>
                    </div>
                </li>

                <li class="chat-item" data-chat-id="A">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Nguyễn Như Ý</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>

                    <div class="days">
                        <div class="chat-time">1 giờ</div>
                        <div class="time">5+</div>
                    </div>
                </li>

                <li class="chat-item" data-chat-id="A">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Nguyễn Như Ý</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>

                    <div class="days">
                        <div class="chat-time">1 giờ</div>
                        <div class="time">5+</div>
                    </div>
                </li>

                <li class="chat-item" data-chat-id="B">
                    <img src="../img/hs1.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Trần Anh Đạt</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>

                    <div class="days">
                        <div class="chat-time">1 giờ</div>
                        <div class="time">5+</div>
                    </div>
                </li>

                <li class="chat-item" data-chat-id="C">
                    <img src="../img/hs1.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Nguyễn Hùng Cường</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item" data-chat-id="D">
                    <img src="../img/hs1.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Trần Anh Kiệt</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Lâm Thị Ánh Tuyết</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Phạm Thiên Kim</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Lương Gia Huy</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Trần Ánh Dương</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
            </ul>
        </div>

        <!-- Nhóm -->
        <div id="groupContent" class="content" style="display: none;">
            <ul class="chat-list">
                <li class="chat-item" data-chat-id="E">
                    <img src="../img/hs1.jpg" alt="" class="avt">
                    <div class="chat-info">
                        <div class="chat-name data_lophoc">Lớp 9A1</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>

                    <div class="days">
                        <div class="chat-time">1 giờ</div>
                        <div class="time">5+</div>
                    </div>
                </li>
                <li class="chat-item" data-chat-id="F">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_lophoc">Lớp 9A2</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item" data-chat-id="G">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_lophoc">Lớp 9A3</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item" data-chat-id="H">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_lophoc">Lớp 9A4</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item" data-chat-id="H">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_lophoc">Lớp 9A4</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item" data-chat-id="H">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_lophoc">Lớp 9A4</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_lophoc">Lớp 8A2</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_lophoc">Lớp 8A4</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_lophoc">Lớp 7A3</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_lophoc">Lớp 6A2</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_lophoc">Lớp 6A1</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="../img/hs.jpg" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_lophoc">Lớp 7A1</div>
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