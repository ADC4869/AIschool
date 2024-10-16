<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê số học sinh</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="./css/thongkehocsinh2.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
</head>

<body>
    <div class="container">
        <!-- HEADER -->
        <header>
            <div class="header">
                <i class="ti-angle-left" onclick="goBack()"></i>
                <p class="header__title">
                    Thống kê số học sinh
                </p>
            </div>
        </header>

        <main>
            <div class="main__title">
                <p class="title">
                    Danh sách học sinh lớp 9A1
                </p>
            </div>
            <div class="main__siso">
                <div class="siso__content">
                    <p class="total">Tổng số: <span>40</span></p>
                    <p class="male">Nam: <span>25</span></p>
                    <p class="female">Nữ: <span>15</span></p>
                </div>
            </div>

            <div class="main__student">
                <div class="detail__student">
                    <a href="../setting/accountteacher.php">
                        <div class="left__student">
                            <img src="../img/hs.jpg" alt="anh hoc sinh" class="img__student">
                        </div>
                        <div class="between__student">
                            <p class="name__student data_hovatenhocsinh">Nguyễn Thị Ánh Linh</p>
                            <p class="mshs data_mahocsinh">Mã học sinh: <span>HS0901</span></p>
                        </div>
                        <div class="right__class">
                            <button type="button" class="btn__detail"><i data-feather="alert-circle"
                                    style="color: gray"></i></button>
                        </div>
                    </a>
                </div>

                <div class="detail__student">
                    <a href="../setting/accountteacher.php">
                        <div class="left__student">
                            <img src="../img/hs.jpg" alt="anh hoc sinh" class="img__student">
                        </div>
                        <div class="between__student">
                            <p class="name__student data_hovatenhocsinh">Nguyễn Kim Châu</p>
                            <p class="mshs data_mahocsinh">Mã học sinh: <span>HS0902</span></p>
                        </div>
                        <div class="right__class">
                            <button type="button" class="btn__detail"><i data-feather="alert-circle"
                                    style="color: gray"></i></button>
                        </div>
                    </a>
                </div>

                <div class="detail__student">
                    <a href="../setting/accountteacher.php">
                        <div class="left__student">
                            <img src="../img/hs1.jpg" alt="anh hoc sinh" class="img__student">
                        </div>
                        <div class="between__student">
                            <p class="name__student data_hovatenhocsinh">Lâm Nhựt Nam</p>
                            <p class="mshs data_mahocsinh">Mã học sinh: <span>HS0903</span></p>
                        </div>
                        <div class="right__class">
                            <button type="button" class="btn__detail"><i data-feather="alert-circle"
                                    style="color: gray"></i></button>
                        </div>
                    </a>
                </div>

                <div class="detail__student">
                    <a href="../setting/accountteacher.php">
                        <div class="left__student">
                            <img src="../img/hs.jpg" alt="anh hoc sinh" class="img__student">
                        </div>
                        <div class="between__student">
                            <p class="name__student data_hovatenhocsinh">Nguyễn Thị Mỹ Tiên</p>
                            <p class="mshs data_mahocsinh">Mã học sinh: <span>HS0904</span></p>
                        </div>
                        <div class="right__class">
                            <button type="button" class="btn__detail"><i data-feather="alert-circle"
                                    style="color: gray"></i></button>
                        </div>
                    </a>
                </div>

                <div class="detail__student">
                    <a href="../setting/accountteacher.php">
                        <div class="left__student">
                            <img src="../img/hs1.jpg" alt="anh hoc sinh" class="img__student">
                        </div>
                        <div class="between__student">
                            <p class="name__student data_hovatenhocsinh">Nguyễn Minh Khoa</p>
                            <p class="mshs data_mahocsinh">Mã học sinh: <span>HS0905</span></p>
                        </div>
                        <div class="right__class">
                            <button type="button" class="btn__detail"><i data-feather="alert-circle"
                                    style="color: gray"></i></button>
                        </div>
                    </a>
                </div>

                <div class="detail__student">
                    <a href="../setting/accountteacher.php">
                        <div class="left__student">
                            <img src="../img/hs.jpg" alt="anh hoc sinh" class="img__student">
                        </div>
                        <div class="between__student">
                            <p class="name__student data_hovatenhocsinh">Nguyễn Thị Yến Loan</p>
                            <p class="mshs data_mahocsinh">Mã học sinh: <span>HS0906</span></p>
                        </div>
                        <div class="right__class">
                            <button type="button" class="btn__detail"><i data-feather="alert-circle"
                                    style="color: gray"></i></button>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </div>
</body>
<script src="../js/back.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>

</html>