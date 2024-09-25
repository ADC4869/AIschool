<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký phụ huynh</title>
    <link rel="stylesheet" href="./css/signin.css">
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
            <!-- Phụ huynh -->
            <div class="main__content">
                <img src="../img/intro4.jpg" alt="anh dang nhap">
                <p class="title">Chào mừng đến AISchool</p>
                <div class="main__input">
                    <div class="main__input1">
                        <input type="text" placeholder="Họ và tên">
                        <input type="text" placeholder="CCCD / Định danh">
                        <input type="text" placeholder="Ngày sinh">
                    </div>
                    <div class="main__input2">
                        <input type="text" placeholder="Giới tính">
                        <input type="text" placeholder="Quốc tịch">
                        <input type="text" placeholder="Dân tộc">
                        <input type="text" placeholder="Tôn giáo">
                    </div>
                    <div class="main__input1">
                        <input type="text" placeholder="Địa chỉ">
                        <input type="text" placeholder="Số điện thoại">
                        <input type="text" placeholder="Nhập thông tin học sinh">
                    </div>
                </div>

                <div class="main__button">
                    <a href="../forgot/loginpassword.php?role=phuhuynh">
                        <button type="button" class="btn__signin">Tiếp theo</button>
                    </a>
                </div>
            </div>
        </main>
    </div>
</body>
<script src="../js/back.js"></script>
</html>