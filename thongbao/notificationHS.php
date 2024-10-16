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
    <link rel="stylesheet" href="./css/notifiHS.css">
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
        <div class="container">
            <a href="suggest.php">
                <button class="icon-btn">
                    <i class="fa fa-plus"></i> Góp ý mới
                </button>
            </a>
            <div class="feedback">
                <img  src="../img/avt.jfif" alt="Feedback Icon" class="feedback-icon data_anhdaidien">
                <div class="feedback-details">
                    <h3 class="data_tieudegopy">Góp ý về quá trình học tập</h3>
                    <p class="data_noidunggopy">V/v tiến độ học tập trong năm nay, nhà trường...</p>
                </div>
                <div class="feedback-right">
                    <span class="notification-badge">1</span>
                    <i class="fa fa-chevron-right"></i>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="../js/back.js"></script>
</html>