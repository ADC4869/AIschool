<?php
session_start();

// Kiểm tra ngôn ngữ được gửi từ form
if (isset($_POST['language'])) {
    $language = $_POST['language'];
    setcookie('language', $language, time() + (365 * 24 * 60 * 60), "/");
    $_SESSION['language'] = $language; // Lưu vào session
}

// Lấy ngôn ngữ từ cookie
$lang = isset($_COOKIE['language']) ? $_COOKIE['language'] : 'vi';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
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
    <style>
    .checkmark {
        display: none;
    }

    /* Ẩn checkmark mặc định */
    .language-option.active .checkmark {
        display: block;
    }

    /* Hiện checkmark cho ngôn ngữ được chọn */
    </style>
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
            <div class="language-option <?php echo $lang === 'vi' ? 'active' : ''; ?>" data-lang="vi">
                <img src="../img/VN.png" alt="Vietnam Flag">
                <span>Tiếng Việt</span>
                <div class="checkmark"><i class="fa-solid fa-check"></i></div>
            </div>
            <div class="language-option <?php echo $lang === 'en' ? 'active' : ''; ?>" data-lang="en">
                <img src="../img/my.png" alt="USA Flag">
                <span>English</span>
                <div class="checkmark"><i class="fa-solid fa-check"></i></div>
            </div>
        </div>
    </main>
</body>
<script src="../js/back.js"></script>
<script>
// JavaScript để xử lý chọn ngôn ngữ
document.querySelectorAll('.language-option').forEach(option => {
    option.addEventListener('click', function() {
        // Xóa class active khỏi tất cả ngôn ngữ
        document.querySelectorAll('.language-option').forEach(opt => {
            opt.classList.remove('active');
        });

        // Thêm class active cho ngôn ngữ đã chọn
        this.classList.add('active');

        // Gửi yêu cầu để lưu ngôn ngữ vào cookie
        const lang = this.getAttribute('data-lang');
        const form = document.createElement('form');
        form.method = 'POST';
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'language';
        input.value = lang;
        form.appendChild(input);
        document.body.appendChild(form);
        form.submit(); // Tải lại trang
    });
});
</script>

</html>