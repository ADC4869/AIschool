<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn vai trò</title>
    <link rel="stylesheet" href="./css/chooserole.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="icon">
                <i class="ti-angle-left" onclick="goBack()"></i>
            </div>
        </div>
        <div class="main">
            <div class="main__photo">
                <img src="../img/intro4.jpg" alt="Anh login" class="img__login">
            </div>

            <div class="main__title">
                <p class="main__title1">Chào mừng đến AlSchool</p>
            </div>

            <div class="main__role">
                <p class="role">Bạn là ai?</p>
            </div>

            <div class="main__button">
                <a href="./loginGV.php?role=giaovien">
                    <button type="button" class="btn__teacher">
                        <div class="div"></div>
                        <p>Giáo viên</p>
                        <i data-feather="camera" style="color: #5B6998"></i>
                    </button>
                </a>
                <a href="./loginPH.php?role=phuhuynh">
                    <button type="button" class="btn__teacher">
                        <div class="div"></div>
                        <p>Phụ huynh</p>
                        <i data-feather="camera" style="color: #5B6998"></i>
                    </button>
                </a>
                <a href="./loginHS.php?role=hocsinh">
                    <button type="button" class="btn__teacher">
                        <div class="div"></div>
                        <p>Học sinh</p>
                        <i data-feather="camera" style="color: #5B6998"></i>
                    </button>
                </a>
            </div>
        </div>
    </div>
</body>
<script src="../js/back.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>
</html>