<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách</title>
    <link rel="stylesheet" href="css/danhsach.css">
</head>

<body>
    <header>
        <div class="container">
            <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
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
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Huỳnh Hoàng Hữu</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>

                <li class="chat-item" data-chat-id="B">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Nguyễn Kim Châu</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>

                <li class="chat-item" data-chat-id="C">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Trần Kim Anh</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item" data-chat-id="D">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Nguyễn Hùng Gia Huy</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Phan Lê Ái Mỹ</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Phạm Nhật Tân</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Lệ Kim Thu</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
                <li class="chat-item">
                    <img src="./img/skin.png" alt="">
                    <div class="chat-info">
                        <div class="chat-name data_hovatenphuhuynh">Trần Anh Tuấn</div>
                        <div class="chat-message">Nội dung chat...</div>
                    </div>
                    <div class="chat-time">1 giờ</div>
                </li>
            </ul>
        </div>

        <!-- Nhóm -->
        <div id="groupContent" class="content" style="display: none;">
            <div class="container">
                <div class="row">
                    <button>Chọn Khối</button>
                    <button>Chọn Lớp</button>
                </div>
                <div class="row">
                    <select>
                        <option>Khối 1</option>
                        <option>Khối 2</option>
                        <option>Khối 3</option>
                    </select>
                    <select>
                        <option>Lớp 1A</option>
                        <option>Lớp 1B</option>
                        <option>Lớp 1C</option>
                    </select>
                </div>
                <div class="row">
                    <a href="message.php"><button class="button">Chat now</button></a>
                </div>
            </div>
        </div>
    </main>

   
</body>
<script src="js/tab.js"></script>
<script src="js/chat.js"></script>
<script src="js/nhom.js"></script>

</html>