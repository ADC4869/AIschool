<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký phụ huynh</title>
    <link rel="stylesheet" href="./css/signinbyrole.css">
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
                        <label for="">Họ và tên</label>
                        <input type="text" placeholder="Họ và tên">
                        <label for="">CCCD / Định danh</label>
                        <input type="text" placeholder="CCCD / Định danh">
                        <label for="">Ngày sinh</label>
                        <input type="date" placeholder="Ngày sinh">
                    </div>
                    <div class="main__input2">
                        <div class="main_label">
                            <label for="">Giới tính</label>
                            <label for="">Quốc tịch</label>
                        </div>
                        <input type="text" placeholder="Giới tính">
                        <input type="text" placeholder="Quốc tịch">
                        <div class="main_label">
                            <label for="">Dân tộc</label>
                            <label for="">Tôn giáo</label>
                        </div>
                        <input type="text" placeholder="Dân tộc">
                        <input type="text" placeholder="Tôn giáo">
                    </div>
                    <div class="main__input1">
                        <label for="">Địa chỉ</label>
                        <input type="text" placeholder="Địa chỉ">
                        <label for="">Số điện thoại</label>
                        <input type="text" placeholder="Số điện thoại">
                        <label for="">Mã phụ huynh</label>
                        <input type="text" placeholder="Mã phụ huynh">
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