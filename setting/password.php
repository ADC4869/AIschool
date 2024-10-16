<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt lại mật khẩu</title>
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
    <link rel="stylesheet" href="css/password.css">
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
            <div class="title">Đặt lại mật khẩu</div>
        </div>
    </header>

    <main>
        <div class="main__content">
            <div class="text">
                <p>Mật khẩu phải dài 6-15 kí tự gồm chữ hoa, chữ thường, số hoặc ký tự đặt biệt</p>
            </div>

            <div class="title">
                <p>Mật khẩu hiện tại </p>
            </div>

            <div class="input">
                <input class="input_matkhau" type="text" placeholder="Nhập mật khẩu hiện tại">
            </div>

            <div class="title">
                <p>Mật khẩu mới</p>
            </div>

            <div class="input">
                <input class="input_matkhaumoi" type="text" placeholder="Nhập mật khẩu mới">
            </div>

            <div class="title">
                <p>Nhập lại mật khẩu mới</p>
            </div>

            <div class="input">
                <input class="input_matkhaumoi" type="text" placeholder="Nhập mật khẩu mới">
            </div>

            <div class="button">
                <button type="button">Cập nhật</button>
            </div>
        </div>
    </main>

   
</body>
<script src="../js/back.js"></script>
</html>