<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="./css/loginpw.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../css/global.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="header__icon">
                <i class="ti-angle-left" onclick="goBack()"></i>
            </div>
        </header>

        <main>
            <div class="main__content">
                <img src="../img/intro4.jpg" alt="anh dang nhap">
                <p class="title">Chào mừng đến SchoolAI App</p>
                <!-- Thêm form để xử lý mật khẩu -->
                <form method="POST" action="../login/login.php">
                    <div class="main__input">
                        <input class="input_matkhau" type="password" name="password" placeholder="Nhập mật khẩu" required>
                        <input class="input_matkhau" type="password" name="confirm_password" placeholder="Nhập lại mật khẩu" required>
                    </div>
                    <div class="main__button">
                        <button type="submit" class="btn__signin">Đăng ký</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
<script src="../js/back.js"></script>

</html>