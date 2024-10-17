<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê kết quả học tập</title>
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
    <link rel="stylesheet" href="css/statisticsHT.css">
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
            <div class="title">Thống kê kết quả học tập</div>
        </div>
    </header>

    <main>
        <center>
            <button class="btn" id="openModalBtn">Chọn học kì<i class="fa-solid fa-angle-down"></i></button>
        </center>

        <!-- Modal -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <ul>
                    <li class="semester-option active">Chọn học kì</li>
                    <li class="semester-option">Học kì II (2024-2025)</li>
                    <li class="semester-option">Học kì I (2024-2025)</li>
                    <li class="semester-option">Học kì II (2023-2024)</li>
                    <li class="semester-option">Học kì I (2023-2024)</li>
                </ul>
                <button class="cancelBtn">Hủy</button>
            </div>
        </div>

        <p>
        <div class="card-container">
            <div class="card blue">
                <div class="icon"><i class="fas fa-users"></i></div>
                <div class="number">550</div>
                <div class="label" style="color: blue">Học sinh Giỏi</div>
            </div>
            <div class="card green">
                <div class="icon"><i class="fas fa-users"></i></div>
                <div class="number">80</div>
                <div class="label" style="color: green">Học sinh Khá</div>
            </div>
            <div class="card orange">
                <div class="icon"><i class="fas fa-users"></i></div>
                <div class="number">10</div>
                <div class="label" style="color: orange">Học sinh TB</div>
            </div>
            <div class="card red">
                <div class="icon"><i class="fas fa-users"></i></div>
                <div class="number">10</div>
                <div class="label" style="color: red">Học sinh Yếu</div>
            </div>
        </div>
    </main>

    <article>
        <div class="chart-container">
            <canvas id="myChart"></canvas>
        </div>

        <div id="detailContent" style="display: none;">
            <h4 style="margin: 10px;">Thông tin chi tiết</h4>
            <!-- Nội dung sẽ được hiển thị khi click vào các khối -->

            <!-- Khối 1 -->
            <div class="class-info-container" id="content-1">
                <div class="class-card">
                <a href="./thongkeketquahoctap.php">
                    <div class="class-info">
                        <div class="class-circle green">
                            <span style="text-align: center;" class="data_lophoc">Lớp 6A1</span>
                        </div>
                        <div class="class-details">
                            <p class="data_hovatengiaovien">GVCN: Nguyễn Kim Anh</p>
                            <p>
                                <span class="content5">Số lớp: 40</span>&nbsp;&nbsp;
                                <span class="content1">Giỏi: 10</span>&nbsp;&nbsp;
                                <span class="content2">Khá: 20</span>&nbsp;&nbsp;
                                <span class="content3">TB: 10</span>&nbsp;&nbsp;
                                <span class="content4">Yếu: 0</span>
                            </p>
                        </div>
                        <div class="class-icon"><i class="fa-solid fa-ellipsis"></i></div>
                    </div>
                    </a>
                </div>

                <div class="class-card">
                <a href="./thongkeketquahoctap.php">
                    <div class="class-info">
                        <div class="class-circle pink">
                            <span style="text-align: center;" class="data_lophoc">Lớp 6A2</span>
                        </div>
                        <div class="class-details">
                            <p class="data_hovatengiaovien">GVCN: Trần Thái Tín</p>
                            <p>
                                <span class="content5">Số lớp: 40</span>&nbsp;&nbsp;
                                <span class="content1">Giỏi: 10</span>&nbsp;&nbsp;
                                <span class="content2">Khá: 20</span>&nbsp;&nbsp;
                                <span class="content3">TB: 10</span>&nbsp;&nbsp;
                                <span class="content4">Yếu: 0</span>
                            </p>
                        </div>
                        <div class="class-icon"><i class="fa-solid fa-ellipsis"></i></div>
                    </div>
                    </a>
                </div>

                <div class="class-card">
                <a href="./thongkeketquahoctap.php">
                    <div class="class-info">
                        <div class="class-circle purple">
                            <span style="text-align: center;" class="data_lophoc">Lớp 6A3</span>
                        </div>
                        <div class="class-details">
                            <p class="data_hovatengiaovien">GVCN: Phạm Anh Thư</p>
                            <p>
                                <span class="content5">Số lớp: 40</span>&nbsp;&nbsp;
                                <span class="content1">Giỏi: 10</span>&nbsp;&nbsp;
                                <span class="content2">Khá: 20</span>&nbsp;&nbsp;
                                <span class="content3">TB: 10</span>&nbsp;&nbsp;
                                <span class="content4">Yếu: 0</span>
                            </p>
                        </div>
                        <div class="class-icon"><i class="fa-solid fa-ellipsis"></i></div>
                    </div>
                    </a>
                </div>
            </div>

            <!-- Khối 2 -->
            <div class="class-info-container" id="content-2">
                <div class="class-card">
                <a href="./thongkeketquahoctap.php">
                    <div class="class-info">
                        <div class="class-circle green">
                            <span style="text-align: center;" class="data_lophoc">Lớp 7A1</span>
                        </div>
                        <div class="class-details">
                            <p class="data_hovatengiaovien">GVCN: Phạm Kiều Nga</p>
                            <p>
                                <span class="content5">Số lớp: 40</span>&nbsp;&nbsp;
                                <span class="content1">Giỏi: 10</span>&nbsp;&nbsp;
                                <span class="content2">Khá: 20</span>&nbsp;&nbsp;
                                <span class="content3">TB: 10</span>&nbsp;&nbsp;
                                <span class="content4">Yếu: 0</span>
                            </p>
                        </div>
                        <div class="class-icon"><i class="fa-solid fa-ellipsis"></i></div>
                    </div>
                    </a>
                </div>

                <div class="class-card">
                <a href="./thongkeketquahoctap.php">
                    <div class="class-info">
                        <div class="class-circle pink">
                            <span style="text-align: center;" class="data_lophoc">Lớp 7A2</span>
                        </div>
                        <div class="class-details">
                            <p class="data_hovatengiaovien">GVCN: Lê Anh Quốc</p>
                            <p>
                                <span class="content5">Số lớp: 40</span>&nbsp;&nbsp;
                                <span class="content1">Giỏi: 10</span>&nbsp;&nbsp;
                                <span class="content2">Khá: 20</span>&nbsp;&nbsp;
                                <span class="content3">TB: 10</span>&nbsp;&nbsp;
                                <span class="content4">Yếu: 0</span>
                            </p>
                        </div>
                        <div class="class-icon"><i class="fa-solid fa-ellipsis"></i></div>
                    </div>
                    </a>
                </div>

                <div class="class-card">
                <a href="./thongkeketquahoctap.php">
                    <div class="class-info">
                        <div class="class-circle purple">
                            <span style="text-align: center;" class="data_lophoc">Lớp 7A3</span>
                        </div>
                        <div class="class-details">
                            <p class="data_hovatengiaovien">GVCN: Trần Hồng Ngọc</p>
                            <p>
                                <span class="content5">Số lớp: 40</span>&nbsp;&nbsp;
                                <span class="content1">Giỏi: 10</span>&nbsp;&nbsp;
                                <span class="content2">Khá: 20</span>&nbsp;&nbsp;
                                <span class="content3">TB: 10</span>&nbsp;&nbsp;
                                <span class="content4">Yếu: 0</span>
                            </p>
                        </div>
                        <div class="class-icon"><i class="fa-solid fa-ellipsis"></i></div>
                    </div>
                    </a>
                </div>
            </div>

            <!-- Khối 3 -->
            <div class="class-info-container" id="content-3">
                <div class="class-card">
                <a href="./thongkeketquahoctap.php">
                    <div class="class-info">
                        <div class="class-circle green">
                            <span style="text-align: center;" class="data_lophoc">Lớp 8A1</span>
                        </div>
                        <div class="class-details">
                            <p class="data_hovatengiaovien">GVCN: Lâm Xuân Trường</p>
                            <p>
                                <span class="content5">Số lớp: 40</span>&nbsp;&nbsp;
                                <span class="content1">Giỏi: 10</span>&nbsp;&nbsp;
                                <span class="content2">Khá: 20</span>&nbsp;&nbsp;
                                <span class="content3">TB: 10</span>&nbsp;&nbsp;
                                <span class="content4">Yếu: 0</span>
                            </p>
                        </div>
                        <div class="class-icon"><i class="fa-solid fa-ellipsis"></i></div>
                    </div>
                    </a>
                </div>

                <div class="class-card">
                    <div class="class-info">
                        <div class="class-circle pink">
                            <span style="text-align: center;" class="data_lophoc">Lớp 8A2</span>
                        </div>
                        <div class="class-details">
                            <p class="data_hovatengiaovien">GVCN: Trần Nam</p>
                            <p>
                                <span class="content5">Số lớp: 40</span>&nbsp;&nbsp;
                                <span class="content1">Giỏi: 10</span>&nbsp;&nbsp;
                                <span class="content2">Khá: 20</span>&nbsp;&nbsp;
                                <span class="content3">TB: 10</span>&nbsp;&nbsp;
                                <span class="content4">Yếu: 0</span>
                            </p>
                        </div>
                        <div class="class-icon"><i class="fa-solid fa-ellipsis"></i></div>
                    </div>
                </div>

                <div class="class-card">
                    <a href="./thongkeketquahoctap.php">
                        <div class="class-info">
                            <div class="class-circle purple">
                                <span style="text-align: center;" class="data_lophoc">Lớp 8A3</span>
                            </div>
                            <div class="class-details">
                                <p class="data_hovatengiaovien">GVCN: Bạch Văn Sơn</p>
                                <p>
                                    <span class="content5">Số lớp: 40</span>&nbsp;&nbsp;
                                    <span class="content1">Giỏi: 10</span>&nbsp;&nbsp;
                                    <span class="content2">Khá: 20</span>&nbsp;&nbsp;
                                    <span class="content3">TB: 10</span>&nbsp;&nbsp;
                                    <span class="content4">Yếu: 0</span>
                                </p>
                            </div>
                            <div class="class-icon"><i class="fa-solid fa-ellipsis"></i></div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Khối 4 -->
            <div class="class-info-container" id="content-4">
                <div class="class-card">
                    <a href="./thongkeketquahoctap.php">
                        <div class="class-info">
                            <div class="class-circle green">
                                <span style="text-align: center;" class="data_lophoc">Lớp 9A1</span>
                            </div>
                            <div class="class-details">
                                <p class="data_hovatengiaovien">GVCN: Nguyễn Thị Ánh Xuân</p>
                                <p>
                                    <span class="content5">Số lớp: 40</span>&nbsp;&nbsp;
                                    <span class="content1">Giỏi: 10</span>&nbsp;&nbsp;
                                    <span class="content2">Khá: 20</span>&nbsp;&nbsp;
                                    <span class="content3">TB: 10</span>&nbsp;&nbsp;
                                    <span class="content4">Yếu: 0</span>
                                </p>
                            </div>
                            <div class="class-icon"><i class="fa-solid fa-ellipsis"></i></div>
                        </div>
                    </a>
                </div>

                <div class="class-card">
                    <a href="./thongkeketquahoctap.php">
                        <div class="class-info">
                            <div class="class-circle pink">
                                <span style="text-align: center;" class="data_lophoc">Lớp 9A2</span>
                            </div>
                            <div class="class-details">
                                <p class="data_hovatengiaovien">GVCN: Triệu Lưu Ánh</p>
                                <p>
                                    <span class="content5">Số lớp: 40</span>&nbsp;&nbsp;
                                    <span class="content1">Giỏi: 10</span>&nbsp;&nbsp;
                                    <span class="content2">Khá: 20</span>&nbsp;&nbsp;
                                    <span class="content3">TB: 10</span>&nbsp;&nbsp;
                                    <span class="content4">Yếu: 0</span>
                                </p>
                            </div>
                            <div class="class-icon"><i class="fa-solid fa-ellipsis"></i></div>
                        </div>
                    </a>
                </div>

                <div class="class-card">
                    <div class="class-info">
                        <div class="class-circle purple">
                            <span style="text-align: center;" class="data_lophoc">Lớp 9A3</span>
                        </div>
                        <div class="class-details">
                            <p class="data_hovatengiaovien">GVCN: Trần Vĩnh Kiên</p>
                            <p>
                                <span class="content5">Số lớp: 40</span>&nbsp;&nbsp;
                                <span class="content1">Giỏi: 10</span>&nbsp;&nbsp;
                                <span class="content2">Khá: 20</span>&nbsp;&nbsp;
                                <span class="content3">TB: 10</span>&nbsp;&nbsp;
                                <span class="content4">Yếu: 0</span>
                            </p>
                        </div>
                        <div class="class-icon"><i class="fa-solid fa-ellipsis"></i></div>
                    </div>
                </div>
            </div>

            <!-- Khối 5 -->
            <div class="class-info-container" id="content-5">
                <div class="class-card">
                    <div class="class-info">
                        <div class="class-circle green">
                            <span style="text-align: center;" class="data_lophoc">Lớp 9A1</span>
                        </div>
                        <div class="class-details">
                            <p class="data_hovatengiaovien">GVCN: Trần Kiến Tạo</p>
                            <p>
                                <span class="content5">Số lớp: 40</span>&nbsp;&nbsp;
                                <span class="content1">Giỏi: 10</span>&nbsp;&nbsp;
                                <span class="content2">Khá: 20</span>&nbsp;&nbsp;
                                <span class="content3">TB: 10</span>&nbsp;&nbsp;
                                <span class="content4">Yếu: 0</span>
                            </p>
                        </div>
                        <div class="class-icon"><i class="fa-solid fa-ellipsis"></i></div>
                    </div>
                </div>

                <div class="class-card">
                    <a href="./thongkeketquahoctap.php">
                        <div class="class-info">
                            <div class="class-circle pink">
                                <span style="text-align: center;" class="data_lophoc">Lớp 9A2</span>
                            </div>
                            <div class="class-details">
                                <p class="data_hovatengiaovien">GVCN: Nguyễn Thanh Phong</p>
                                <p>
                                    <span class="content5">Số lớp: 40</span>&nbsp;&nbsp;
                                    <span class="content1">Giỏi: 10</span>&nbsp;&nbsp;
                                    <span class="content2">Khá: 20</span>&nbsp;&nbsp;
                                    <span class="content3">TB: 10</span>&nbsp;&nbsp;
                                    <span class="content4">Yếu: 0</span>
                                </p>
                            </div>
                            <div class="class-icon"><i class="fa-solid fa-ellipsis"></i></div>
                        </div>
                    </a>
                </div>

                <div class="class-card">
                    <a href="./thongkeketquahoctap.php">
                        <div class="class-info">
                            <div class="class-circle purple">
                                <span style="text-align: center;" class="data_lophoc">Lớp 9A3</span>
                            </div>
                            <div class="class-details">
                                <p class="data_hovatengiaovien">GVCN: Huỳnh Vũ Nhi</p>
                                <p>
                                    <span class="content5">Số lớp: 40</span>&nbsp;&nbsp;
                                    <span class="content1">Giỏi: 10</span>&nbsp;&nbsp;
                                    <span class="content2">Khá: 20</span>&nbsp;&nbsp;
                                    <span class="content3">TB: 10</span>&nbsp;&nbsp;
                                    <span class="content4">Yếu: 0</span>
                                </p>
                            </div>
                            <div class="class-icon"><i class="fa-solid fa-ellipsis"></i></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </article>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    function goBack() {
        window.location.href = '../home.php?role=hieutruong'; // Chuyển đến trang chủ
    }
</script>
<script src="./js/HT.js"></script>
<script src="./js/modal.js"></script>

</html>