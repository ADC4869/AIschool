<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao diện và ngôn ngữ</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- css -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/language.css">
</head>
<body>
    <header>
        <div class="header" id="content">
            <span class="back-arrow" onclick="goBack()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                </svg>
            </span>
            <div class="title" id="description">Thay đổi ngôn ngữ</div>
        </div>
    </header>

    <main>
        <div class="language-dropdown">
            <div class="language-option" data-lang="vi" onclick="selectLanguage(this)">
                <img src="../img/VN.png" alt="Vietnam Flag">
                <span>Tiếng Việt</span>
                <div class="checkmark"><i class="fa-solid fa-check"></i></div>
            </div>
            <div class="language-option" data-lang="en" onclick="selectLanguage(this)">
                <img src="../img/my.png" alt="USA Flag">
                <span>English</span>
                <div class="checkmark"><i class="fa-solid fa-check"></i></div>
            </div>
        </div>
    </main>

    <div id="content">
        <h1 id="title"></h1>
        <p id="description"></p>
    </div>
</body>
<script src="../js/back.js"></script>
<script src="js/language.js"></script>
</html>