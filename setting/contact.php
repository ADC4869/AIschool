<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trợ giúp</title>
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
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="../css/fix.css">
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
            <div class="title">Thông tin liên hệ</div>
        </div>
    </header>

    <main>
        <div class="tab-container">
            <button class="tab-btn active" onclick="openTab('company')">Thông tin công ty</button>
            <button class="tab-btn" onclick="openTab('school')">Thông tin trường học</button>
        </div>

        <!-- THÔNG TIN CÔNG TY -->
        <div class="tab-content" id="company">
            <div class="info__company">
                <div class="photo__company">
                    <img src="../img/company.jpg" alt="Ảnh công ty">
                </div>

                <div class="info__detail">
                    <div class="detail">
                        <i class="fa-solid fa-house" style="color: #B0DEFF;"></i>
                        <span>Công ty TNHH Giải pháp phần mềm điện toán đám mây Keri</span>
                    </div>

                    <div class="detail">
                        <i class="fa-solid fa-location-dot" style="color: #EC4646;"></i>
                        <span>Tòa nhà SBI, Lô 6B, Đường số 3, Công viên phần mềm Quang Trung, Phường Tân Chánh
                            Hiệp, Quận 12, Tp. Hồ Chí Mình</span>
                    </div>

                    <div class="detail">
                        <i class="fa-solid fa-globe" style="color: #596FFD;"></i>
                        <a href="https://keri.vn/">
                            <span>www.keri.vn</span>
                        </a>
                    </div>

                    <div class="detail">
                        <i class="fa-solid fa-phone" style="color: #9DDEAB;"></i>
                        <span>028 3715 0068</span>
                    </div>

                    <div class="detail">
                        <i class="fa-regular fa-envelope" style="color: #FF0000;"></i>
                        <span>Kericloud2022@gmail.com</span>
                    </div>

                    <div class="detail">
                        <i class="fa-brands fa-facebook-f" style="color: #002EFB;"></i>
                        <a href="https://www.facebook.com/vietphanmemtheoyeucaukericloud/">
                            <span>https://www.facebook.com/vietphanmemtheoyeucaukericloud/</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- THÔNG TIN TRƯỜNG HỌC -->
        <div class="tab-content" id="school" style="display:none;">
            <div class="info__school">
                <div class="photo__school">
                    <img src="../img/school.jpg" alt="Ảnh trường học">
                </div>

                <div class="info__detail">
                    <div class="detail">
                        <i class="fa-solid fa-house" style="color: #B0DEFF;"></i>
                        <span>Công ty TNHH Giải pháp phần mềm điện toán đám mây Keri</span>
                    </div>

                    <div class="detail">
                        <i class="fa-solid fa-location-dot" style="color: #EC4646;"></i>
                        <span>Tòa nhà SBI, Lô 6B, Đường số 3, Công viên phần mềm Quang Trung, Phường Tân Chánh
                            Hiệp, Quận 12, Tp. Hồ Chí Mình</span>
                    </div>

                    <div class="detail">
                        <i class="fa-solid fa-globe" style="color: #596FFD;"></i>
                        <a href="https://keri.vn/">
                            <span>www.keri.vn</span>
                        </a>
                    </div>

                    <div class="detail">
                        <i class="fa-solid fa-phone" style="color: #9DDEAB;"></i>
                        <span>028 3715 0068</span>
                    </div>

                    <div class="detail">
                        <i class="fa-regular fa-envelope" style="color: #FF0000;"></i>
                        <span>Kericloud2022@gmail.com</span>
                    </div>

                    <div class="detail">
                        <i class="fa-brands fa-facebook-f" style="color: #002EFB;"></i>
                        <a href="https://www.facebook.com/vietphanmemtheoyeucaukericloud/">
                            <span>https://www.facebook.com/vietphanmemtheoyeucaukericloud/</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>






    </main>

</body>
<script src="../js/back.js"></script>
<script src="./js/tab.js"></script>

</html>