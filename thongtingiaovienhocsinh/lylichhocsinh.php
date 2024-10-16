
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin học sinh</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- Css -->
    <link rel="stylesheet" href="./css/lylichhocsinh.css">
    <link rel="stylesheet" href="../css/global.css">
</head>
<body>
    <header>
        <div class="header">
            <p class="header__title">Thông Tin Học Sinh</p>
            <div class="back-arrow">
                <span class="back-arrow" onclick="goBack()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                    </svg>
                </span>
            </div>
            <div class="student-info">
                <img src="../img/hs1.jpg" alt="Student Photo" class="student-photo">
                <div class="student-details">
                    <p>Từ Văn Tú</p>
                    <p>HS001</p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- thông tin cá nhân -->
        <div class="main__title">
            <h5>Thông tin cá nhân</h5>
        </div>

        <div class="main__content">
            <p class="small__title">CCCD / Định danh</p>
            <div class="info">
                <p>079202099288</p>
            </div>

            <p class="small__title">Ngày sinh</p>
            <div class="info">
                <p>2007-11-12</p>
            </div>
            <div class="short__row">
                <div>
                    <p class="small__title">Giới tính</p>
                    <div class="info">
                        <p>Nam</p>
                    </div>
                </div>
                <div>
                    <p class="small__title">Tôn giáo</p>
                    <div class="info">
                        <p>Không</p>
                    </div>
                </div>
            </div>

            <div class="short__row">
                <div>
                    <p class="small__title">Quốc tịch</p>
                    <div class="info">
                        <p>Việt Nam</p>
                    </div>
                </div>
                <div>
                    <p class="small__title">Dân tộc</p>
                    <div class="info">
                        <p>Kinh</p>
                    </div>
                </div>
            </div>

            <div>
                <p class="small__title">Số điện thoại</p>
                <div class="info">
                    <p>0907889677</p>
                </div>
            </div>

            <div>
                <p class="small__title">Email</p>
                <div class="info">
                    <p>anhxuan300595@gmail.com</p>
                </div>
            </div>
            <div>
                <p class="small__title">Địa chỉ</p>
                <div class="info__address">
                    <p>123/23 HCM</p>
                </div>
            </div>


        </div>

        <!-- Thông tin học tập -->
        <div class="main__title">
            <h5>Thông tin học tập:</h5>
        </div>
        <div class="main__content">
            <div>
                <p class="small__title">Lớp</p>
                <div class="info">
                    <p>9A1</p>
                </div>
            </div>

            <div>
                <p class="small__title">Giáo viên chủ nhiệm</p>
                <div class="info">
                    <p>Trần Đức Minh</p>
                </div>
            </div>
            <div class="short__row">
                <div>
                    <p class="small__title">Học lực</p>
                    <div class="info">
                        <p>Giỏi</p>
                    </div>
                </div>
                <div>
                    <p class="small__title">Hạnh kiểm</p>
                    <div class="info">
                        <p>Tốt</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sơ yếu lý lịch -->
        <div class="main__title">
            <h5>Sơ yếu lý lịch</h5>
        </div>
        <div class="main__content">
            <div>
                <p class="small__title">Họ và tên cha</p>
                <div class="info">
                    <p>Trương Huỳnh Anh</p>
                </div>
            </div>

            <div class="short__row">
                <div>
                    <p class="small__title">Ngày sinh</p>
                    <div class="info">
                        <p>01/01/1978</p>
                    </div>
                </div>
                <div>
                    <p class="small__title">Quốc tịch</p>
                    <div class="info">
                        <p>Việt Nam</p>
                    </div>
                </div>
            </div>
            <div class="short__row">
                <div>
                    <p class="small__title">Dân tộc</p>
                    <div class="info">
                        <p>Kinh</p>
                    </div>
                </div>
                <div>
                    <p class="small__title">Tôn giáo</p>
                    <div class="info">
                        <p>Không</p>
                    </div>
                </div>
            </div>

            <div>
                <p class="small__title">Nghề nghiệp</p>
                <div class="info">
                    <p>Kỹ sư</p>
                </div>
            </div>

            <div>
                <p class="small__title">Cơ quan</p>
                <div class="info">
                    <p>DXC</p>
                </div>
            </div>
            <div>
                <p class="small__title">Địa chỉ</p>
                <div class="info__address">
                    <p>28/16 Lê Văn Thọ, phường 6, Gò Vấp, Hồ Chí Minh</p>
                </div>
            </div>

            <div>
                <p class="small__title">Số điện thoại</p>
                <div class="info">
                    <p>0894567978</p>
                </div>
            </div>

            <!-- thông tin mẹ -->
            <div>
                <p class="small__title">Họ và tên mẹ</p>
                <div class="info">
                    <p>Lâm Thị Bảo Ngọc</p>
                </div>
            </div>

            <div class="short__row">
                <div>
                    <p class="small__title">Ngày sinh</p>
                    <div class="info">
                        <p>01/01/1978</p>
                    </div>
                </div>
                <div>
                    <p class="small__title">Quốc tịch</p>
                    <div class="info">
                        <p>Việt Nam</p>
                    </div>
                </div>
            </div>
            <div class="short__row">
                <div>
                    <p class="small__title">Dân tộc</p>
                    <div class="info">
                        <p>Kinh</p>
                    </div>
                </div>
                <div>
                    <p class="small__title">Tôn giáo</p>
                    <div class="info">
                        <p>Không</p>
                    </div>
                </div>
            </div>

            <div>
                <p class="small__title">Nghề nghiệp</p>
                <div class="info">
                    <p>Nhân viên văn phòng</p>
                </div>
            </div>

            <div>
                <p class="small__title">Cơ quan</p>
                <div class="info">
                    <p>DXC</p>
                </div>
            </div>
            <div>
                <p class="small__title">Địa chỉ</p>
                <div class="info__address">
                    <p>28/16 Lê Văn Thọ, phường 6, Gò Vấp, Hồ Chí Minh</p>
                </div>
            </div>

            <div>
                <p class="small__title">Số điện thoại</p>
                <div class="info">
                    <p>0394567978</p>
                </div>
            </div>
        </div>


    </main>


</body>
<script src="../js/back.js"></script>

</html>