<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="./css/pglogin.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <!-- <form id="loginForm" action="login_process.php" method="POST"> -->
                <div class="main__photo">
                    <img src="../img/intro4.jpg" alt="Anh login" class="img__login">
                </div>

                <div class="main__title">
                    <p class="main__title1">Chào mừng đến AlSchool</p>
                </div>

                <div class="main__input">
                    <input type="text" placeholder="Tên đăng nhập" id="username" name="username" class="input input_username">
                    <input type="text" placeholder="Mật khẩu" id="password" name="password" class="input input_password">
                </div>

                <div class="main__fogotpassword">
                    <p><a href="../forgot/fogotpw.php" class="fogotpassword">Quên mật khẩu?</a></p>
                </div>

                <div class="main__button">
                    <a href="../home.php">
                        <button type="submit" class="btn__button1" onclick="login()">Đăng nhập</button>
                    </a>
                    <div class="main__buttontitle">
                        <p>Hoặc</p>
                    </div>

                    <div class="main__button2">
                        <a href="role.php">
                            <button type="button" class="btn__button2">Tạo tài khoản</button>
                        </a>
                    </div>
                </div>
            <!-- </form> -->
        </div>
    </div>
</body>
<!-- <script src="../js/login.js"></script> -->
</html>