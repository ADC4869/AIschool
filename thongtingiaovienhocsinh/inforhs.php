<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inforhs</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- Css -->
    <link rel="stylesheet" href="inforhs.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="top-info">
                <div class="back-arrow">
                    <span class="back-arrow" onclick="goBack()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                        </svg>
                    </span>
                </div>
                <h2>Thông tin học sinh</h2>
            </div>

            <div class="content-section">
                <img class="data_anhdaidien" src="../img/avtteacher.png" alt="Nguyễn Thị Yến Loan">
                <div class="info">
                    <h3 class="data_hovatenhocsinh">Nguyễn Thị Yến Loan</h3>
                    <p class="data_mahocsinh">20016741</p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Thông tin chung</h2>
            <div class="info-grid">
                <div class="info-item data_lophoc">
                    <span class="label">Lớp</span>
                    <span class="value">1A</span>
                </div>

                <div class="info-item data_hovatengiaovien">
                    <span>GVCN</span>
                    <span>Lưu trên database</span>
                </div>

                <div class="info-item data_ngaysinh">
                    <span>Ngày sinh</span>
                    <span>16/05/2024</span>
                </div>

                <div class="info-item data_namhoc">
                    <span>Niên khóa</span>
                    <span>2024-2025</span>
                </div>

                <div class="info-item data_diachi">
                    <span>Địa chỉ</span>
                    <span>TP.HCM</span>
                </div>
                
                <div class="info-item data_sodienthoai">
                    <span>Liên hệ</span>
                    <span>0963852411</span>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="../js/back.js"></script>
</html>