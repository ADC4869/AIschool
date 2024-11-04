<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- css -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header>
        <div class="navbar">
            <button class="back-btn" id="back-btn">
                <i class="fa-solid fa-circle-left"></i>
            </button>
            <span class="title">SchoolAI</span>
            <button class="action-btn">
                <i class="fa-solid fa-camera-rotate"></i>
            </button>
        </div>
        <video id="video" autoplay></video>
    </header>

    <main>
        <div class="profile-container">
            <img src="../img/call.png" alt="Profile Picture" class="profile-pic">
            <h2 class="profile-name ">Trần Văn Giàu</h2>
            <p class="profile-status">Đang đổ chuông</p>
        </div>
    </main>

    <footer>
        <div class="button-container">
            <div class="button-wrap" id="videoButton">
                <div class="button">
                    <i class="fa-solid fa-video-slash" id="videoIcon"></i> <!-- Video Icon -->
                </div>
                <span>Video</span>
            </div>

            <!-- Ví dụ: phần tử video -->
            <video id="videoElement" autoplay></video>

            <div class="button-wrap" id="volume-toggle">
                <div class="button">
                    <i class="fas fa-volume-up" id="volume-icon"></i> <!-- Speaker Icon -->
                </div>
                <span>Loa</span>
            </div>

            <div class="button-wrap" id="muteButton">
                <div class="button">
                    <i class="fa-solid fa-microphone" id="icon"></i> <!-- Mute Icon -->
                </div>
                <span id="statusText">Tắt tiếng</span>
            </div>

            <div class="button-wrap" onclick="goBack()">
                <div class="button end">
                    <i class="fas fa-phone-slash"></i> <!-- End Call Icon -->
                </div>
                <span>Kết thúc</span>
            </div>
        </div>
    </footer>
</body>
<script src="../js/back.js"></script>
<script src="./js/footer.js"></script>
</html>