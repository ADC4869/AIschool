<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Học tập</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- css -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/hs.css">
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
            <div class="title">Kết Quả Học Tập</div>
        </div>
    </header>

    <main>
        
        <div class="student-list">
            <h2>Danh sách học sinh lớp 9A1</h2>
            <div class="student-card">
                <div class="info">
                    <p class="data_hovatenhocsinh"><strong>Họ tên: Từ Văn Tú</strong></p>
                    <p class="=data_lophoc">Lớp: 9A1</p>
                    <p class="data_mahocsinh">Mã học sinh: 2002</p>
                    <p class="data_hovatenphuhuynh">Phụ huynh: Từ Văn Hiền</p>
                    <a href="ketqua.php"><button>Chi tiết</button></a>
                </div>
                <img src="../img/ht.jpg" alt="Student 1">
            </div>

            <div class="student-card">
                <div class="info">
                    <p class="data_hovatenhocsinh"><strong>Họ tên: Nguyễn Nam</strong></p>
                    <p class="data_lophoc">Lớp: 9A1</p>
                    <p class="data_mahocsinh">Mã học sinh: 2003</p>
                    <p class="data_hovatenphuhuynh">Phụ huynh: Nguyễn Dương</p>
                    <a href="ketqua.php"><button>Chi tiết</button></a>
                </div>
                <img src="../img/ht.jpg" alt="Student 2">
            </div>

            <div class="student-card">
                <div class="info">
                    <p class="data_hovatenhocsinh"><strong>Họ tên: Nguyễn Huệ</strong></p>
                    <p class="data_lophoc">Lớp: 9A1</p>
                    <p class="data_mahocsinh">Mã học sinh: 2004</p>
                    <p class="data_hovatenphuhuynh">Phụ huynh: Nguyễn Hưng</p>
                    <a href="ketqua.php"><button>Chi tiết</button></a>
                </div>
                <img src="../img/ht.jpg" alt="Student 3">
            </div>
        </div> 
    </main>
</body>
<script src="../js/back.js"></script>
</html>