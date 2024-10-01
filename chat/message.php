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
    <style>
    main .time {
        /* Màu sắc mặc định cho số lượng tin nhắn */
        color: transparent;
        /* Ẩn màu sắc nếu không có tin nhắn */
    }

    main .time.has-unread {
        color: red;
        /* Màu sắc hiển thị khi có tin nhắn chưa đọc */
    }
    </style>
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
                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    fetchMessages(); // Gọi hàm tải tin nhắn khi tài liệu đã sẵn sàng

                    // Hàm tải tin nhắn từ server
                    function fetchMessages() {
                        fetch('fetch_messages.php')
                            .then(response => {
                                if (!response.ok) {
                                    throw new Error('Network response was not ok');
                                }
                                return response.json(); // Chuyển đổi phản hồi thành JSON
                            })
                            .then(messages => {
                                const chatList = document.querySelector('.chat-list');
                                if (chatList) { // Kiểm tra sự tồn tại của chatList
                                    chatList.innerHTML = ''; // Xóa nội dung hiện tại

                                    if (Array.isArray(messages) && messages.length === 0) {
                                        chatList.innerHTML =
                                        '<li>Chưa có tin nhắn nào.</li>'; // Thông báo không có tin nhắn
                                        return;
                                    }

                                    messages.forEach(message => {
                                        // Tạo phần tử chat mới
                                        const chatItem = document.createElement('li');
                                        chatItem.classList.add('chat-item');
                                        chatItem.setAttribute('data-chat-id', message
                                        .chat_id); // ID chat

                                        chatItem.innerHTML = `
                                <img src="../img/hs1.jpg" alt="User Image">
                                <div class="chat-info">
                                    <div class="chat-name">${message.sender_name}</div>
                                    <div class="chat-message">${message.message || 'Chưa có tin nhắn'}</div>
                                </div>
                                <div class="days">
                                    <div class="chat-time">${formatTime(message.created_at)}</div>
                                    <div class="time">${message.unread_messages > 0 ? (message.unread_messages > 5 ? '5+' : message.unread_messages) : ''}</div>
                                </div>
                            `;
                                        chatList.appendChild(chatItem);
                                    });

                                    // Thêm sự kiện click cho từng phần tử chat
                                    addChatItemListeners();
                                }
                            })
                            .catch(error => {
                                console.error('Error fetching messages:', error);
                                alert(
                                'Không thể tải tin nhắn. Vui lòng thử lại sau.'); // Thông báo lỗi cho người dùng
                            });
                    }

                    // Hàm định dạng thời gian
                    function formatTime(timestamp) {
                        const date = new Date(timestamp);
                        const hours = date.getHours();
                        const minutes = date.getMinutes();
                        return `${hours}:${minutes < 10 ? '0' + minutes : minutes}`; // Định dạng giờ:phút
                    }

                    // Hàm thêm sự kiện click cho từng mục chat
                    function addChatItemListeners() {
                        document.querySelectorAll('.chat-item').forEach(item => {
                            item.addEventListener('click', function() {
                                const chatId = this.getAttribute('data-chat-id');
                                window.location.href =
                                `chat.php?chat_id=${chatId}`; // Chuyển đến trang chat với chat_id
                            });
                        });
                    }

                    // Gọi hàm để tự động cập nhật tin nhắn mỗi 5 giây
                    setInterval(fetchMessages, 5000);
                });
                </script>
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
<script src="js/nhom.js"></script>
<script src="../js/back.js"></script>

</html>