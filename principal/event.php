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
    <link rel="stylesheet" href="css/event.css">
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
            <i class="fa-solid fa-plus"></i>
        </div>
    </header>

    <main>
        <div class="event-section">
                <div class="event-header">
                    <div class="event-icon">
                        <i class="fa-regular fa-calendar-check"></i> <!-- Icon cho sự kiện đang diễn ra -->
                    </div>
                    <a href="actingevent.php"><div class="event-title">Sự kiện đang diễn ra</div></a>
                    <div class="event-options">
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>
                </div>
            
            <div class="event-list">
                <div class="event-item">
                    <img src="../img/HN.jpg" alt="Sự kiện 1">
                    <div class="event-info">
                        <h3 class="data_tieudesukien">Giao lưu văn hóa Hàn Quốc</h3>
                        <p>Thời gian: 06:30 - 10:00</p>
                        <p>Ngày: 03/09/2024</p>
                    </div>
                </div>

                <div class="event-item">
                    <img src="../img/HN1.jpg" alt="Sự kiện 2">
                    <div class="event-info">
                        <h3 class="data_tieudesukien">Giao lưu văn hóa Hàn Quốc</h3>
                        <p>Thời gian: 06:30 - 10:00</p>
                        <p>Ngày: 03/09/2024</p>
                    </div>
                </div>

                <div class="event-item">
                    <img src="../img/HN.jpg" alt="Sự kiện 3">
                    <div class="event-info">
                        <h3 class="data_tieudesukien">Giao lưu văn hóa Hàn Quốc</h3>
                        <p>Thời gian: 06:30 - 10:00</p>
                        <p>Ngày: 03/09/2024</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="event-section">
            <div class="event-header">
                <div class="event-icon">
                    <i class="fa-solid fa-calendar-minus"></i> <!-- Icon cho sự kiện sắp diễn ra -->
                </div>
                <a href="upcomingevent.php"><div class="event-title">Sự kiện sắp diễn ra</div></a>
                <div class="event-options">
                    <i class="fa-solid fa-ellipsis"></i>
                </div>
            </div>

            <div class="event-list">
                <div class="event-item">
                    <img src="../img/HN.jpg" alt="Sự kiện 1">
                    <div class="event-info">
                        <h3 class="data_tieudesukien">Giao lưu văn hóa Hàn Quốc</h3>
                        <p>Thời gian: 06:30 - 10:00</p>
                        <p>Ngày: 03/09/2024</p>
                    </div>
                </div>

                <div class="event-item">
                    <img src="../img/HN1.jpg" alt="Sự kiện 2">
                    <div class="event-info">
                        <h3 class="data_tieudesukien">Giao lưu văn hóa Hàn Quốc</h3>
                        <p>Thời gian: 06:30 - 10:00</p>
                        <p>Ngày: 03/09/2024</p>
                    </div>
                </div>

                <div class="event-item">
                    <img src="../img/HN.jpg" alt="Sự kiện 3">
                    <div class="event-info">
                        <h3 class="data_tieudesukien">Giao lưu văn hóa Hàn Quốc</h3>
                        <p>Thời gian: 06:30 - 10:00</p>
                        <p>Ngày: 03/09/2024</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="event-section">
            <div class="event-header">
                <div class="event-icon">
                    <i class="fa-solid fa-calendar"></i> <!-- Icon cho sự kiện sắp diễn ra -->
                </div>
                <a href="schedule.php"><div class="event-title">Lịch họp</div></a>
                <div class="event-options">
                    <i class="fa-solid fa-ellipsis"></i>
                </div>
            </div>

            <div class="event-list">
                <div class="event-item">
                    <img src="../img/HN.jpg" alt="Sự kiện 1">
                    <div class="event-info">
                        <h3 class="data_tieudesukien">Giao lưu văn hóa Hàn Quốc</h3>
                        <p>Thời gian: 06:30 - 10:00</p>
                        <p>Ngày: 03/09/2024</p>
                    </div>
                </div>

                <div class="event-item">
                    <img src="../img/HN1.jpg" alt="Sự kiện 2">
                    <div class="event-info">
                        <h3 class="data_tieudesukien">Giao lưu văn hóa Hàn Quốc</h3>
                        <p>Thời gian: 06:30 - 10:00</p>
                        <p>Ngày: 03/09/2024</p>
                    </div>
                </div>

                <div class="event-item">
                    <img src="../img/HN.jpg" alt="Sự kiện 3">
                    <div class="event-info">
                        <h3 class="data_tieudesukien">Giao lưu văn hóa Hàn Quốc</h3>
                        <p>Thời gian: 06:30 - 10:00</p>
                        <p>Ngày: 03/09/2024</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="../js/back.js"></script>
</html>