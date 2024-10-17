<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sự kiện sắp diễn ra</title>
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
    <link rel="stylesheet" href="./css/upcoming.css">
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
            <div class="title">Danh sách sự kiện sắp diễn ra</div>
        </div>
    </header>

    <main>
        <div class="event-list">
            <div class="event-item">
                <img src="../img/TA.jpg" alt="Event Image">
                <div class="event-content">
                    <h3 class="data_tieudesukien">Giao lưu văn hóa Hàn Quốc</h3>
                    <p class="data_noidungsukien">Nhằm mục tiêu đẩy mạnh hợp tác quốc tế trong lĩnh vực nghiên cứu và tạo cơ hội trao đổi giao lưu
                        cho sinh viên, từ ngày 16/01/2024 đến 18/01/2024</p>
                </div>
            </div>

            <div class="event-item">
                <img src="../img/TA.jpg" alt="Event Image">
                <div class="event-content">
                    <h3>Giao lưu văn hóa Hàn Quốc</h3>
                    <p>Nhằm mục tiêu đẩy mạnh hợp tác quốc tế trong lĩnh vực nghiên cứu và tạo cơ hội trao đổi giao lưu
                        cho sinh viên, từ ngày 16/01/2024 đến 18/01/2024</p>
                </div>
            </div>

            <div class="event-item">
                <img src="../img/TA.jpg" alt="Event Image">
                <div class="event-content">
                    <h3>Giao lưu văn hóa Hàn Quốc</h3>
                    <p>Nhằm mục tiêu đẩy mạnh hợp tác quốc tế trong lĩnh vực nghiên cứu và tạo cơ hội trao đổi giao lưu
                        cho sinh viên, từ ngày 16/01/2024 đến 18/01/2024</p>
                </div>
            </div>

            <div class="event-item">
                <img src="../img/TA.jpg" alt="Event Image">
                <div class="event-content">
                    <h3 class="data_tieudesukien">Giao lưu văn hóa Hàn Quốc</h3>
                    <p class="data_noidungsukien">Nhằm mục tiêu đẩy mạnh hợp tác quốc tế trong lĩnh vực nghiên cứu và tạo cơ hội trao đổi giao lưu
                        cho sinh viên, từ ngày 16/01/2024 đến 18/01/2024</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="pagination-container">
            <button class="prev-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                </svg>
            </button>

            <input type="text" id="page-number" value="1" readonly>

            <button class="next-btn">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                </svg>
            </button>
        </div>
    </footer>
</body>
<script src="./js/quantity.js"></script>
<script src="../js/back.js"></script>
</html>