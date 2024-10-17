<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu</title>
    <link rel="stylesheet" href="./css/pagefogotpassword.css">
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
                <p class="title">Chào mừng đến AISchool</p>
                <p class="title2">Nhập số điện thoại đã đăng ký để đặt lại mật khẩu</p>
                <div class="main__input">
                    <form action="./changepassword.php" method="POST">

                        <input class="input_sodienthoai" type="text" placeholder="Nhập số điện thoại">

                        <a href="./changepassword.php">
                            <button type="button" class="btn__signin">Tiếp theo</button>
                        </a>

                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
<script src="../js/back.js"></script>

</html>