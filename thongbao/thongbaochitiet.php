<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo</title>
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
    <link rel="stylesheet" href="./css/notidetail.css">
    <link rel="stylesheet" href="../css/fix.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <style>
        /* Style for the modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            position: relative;
            background-color: white;
            padding: 10px;
            border-radius: 10px;
        }

        .swiper-container {
            width: 100%;
            height: 300px;
        }

        .swiper-slide img {
            width: 100%;
            height: 300px;
            display: block;
            object-fit: cover;
        }

        .close,
        .close-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }

        .close-btn {
            top: 20px;
            right: 20px;
            font-size: 16px;
            color: black;
            background-color: white;
            border: 1px solid #ccc;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: var(--primary-color);
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
            <div class="title">Thông báo</div>
        </div>
    </header>

    <main>
        <div class="main__info">
            <div class="info_content">
                <p class="info data_thoigian">04/09/2024 - 18:35</p>
                <p class="info data_hovatenhieutruong"> <strong>Người gửi: </strong> Hiệu trưởng</p>
            </div>
        </div>
        <div class="main__text">
            <div class="notification">
                <div class="text__title">
                    <p class="data_tieudethongbao">Thông tin học phí HK1 2023-2024</p>
                </div>
                <div class="text__content data_noidungthongbao">
                    <p>Nhà Trường thông báo thời gian đóng học phí HK1 năm 2024-2025 như sau: <br>
                        I/ Thời gian đóng học phí: <br>
                        Thời gian đóng học phí đợt 1: Từ ngày hiện công nợ đến hết 16h30 ngày 31/07/2024 (Đối với trường
                        hợp
                        nộp học phí theo hình thức tiền mặt, gạch nợ trực tiếp qua cổng sinh viên hoặc qua app 3 ngân
                        hàng
                        Agribank, Vietcombank, Nam Á bank).
                        Trường hợp các em sinh viên đóng học phí qua hình thức chuyển khoản cần phải hoàn tất trước ngày
                        29/07/2024 để tránh trường hợp đã chuyển khoản rồi nhưng học phần đã bị hủy (Đối với trường hợp
                        này
                        các em sinh viên liên hệ Khoa hoặc phòng Đào tạo để đăng ký lại học phần đã mất sau đó quay lại
                        Phòng Tài chính Kế toán ngay trong ngày để xử lý công nợ)
                    </p>

                    <!-- Bấm vào ảnh để mở modal -->
                    <div class="notification_image">
                        <img src="../img/dt.jpg" alt="Notification Image" onclick="openModal()">
                    </div>
                    <div class="file-list">
                        <ul>
                            <li><a href="../path/to/your/file1.pdf" target="_blank">../path/to/your/file1.pdf</a></li>
                            <li><a href="../path/to/your/file2.pdf" target="_blank">../path/to/your/file2.pdf</a></li>
                            <li><a href="../path/to/your/file3.pdf" target="_blank">../path/to/your/file3.pdf</a></li>
                        </ul>
                    </div>

                    <!-- Modal để hiển thị ảnh -->
                    <div id="imageModal" class="modal">
                        <span class="close" onclick="closeModal()">&times;</span>
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <!-- Các ảnh hiển thị trong modal -->
                                <div class="swiper-slide">
                                    <img src="../img/dt.jpg" alt="Image 1">
                                </div>
                                <div class="swiper-slide">
                                    <img src="../img/HN.jpg" alt="Image 2">
                                </div>
                                <div class="swiper-slide">
                                    <img src="../img/VN.jpg" alt="Image 3">
                                </div>
                            </div>
                            <!-- Thêm nút điều hướng -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                        <!-- Nút Tắt để đóng modal -->
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Scripts -->
    <script src="../js/back.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Mở modal khi bấm vào ảnh
        function openModal() {
            document.getElementById('imageModal').style.display = 'flex';
            var swiper = new Swiper('.swiper-container', {
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        }

        // Đóng modal
        function closeModal() {
            document.getElementById('imageModal').style.display = 'none';
        }
    </script>
</body>

</html>