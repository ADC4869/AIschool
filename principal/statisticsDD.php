<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê điểm danh</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- Css -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/statisticsDD.css">
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
            <div class="title">Thống kê chuyên cần</div>
        </div>
    </header>

    <main>
        <div class="menu-bar">
            <div class="tab active" data-target="hoc-ki">Học kì</div>
            <div class="tab" data-target="thang">Tháng</div>
            <div class="tab" data-target="tuan">Tuần</div>
        </div>

        <!-- Học kỳ -->
        <div id="hoc-ki" class="content active">
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

            <div class="container">
                <div class="box">
                    <p class="percentage green">90%</p>
                    <p class="details">1620 học sinh</p>
                    <p class="details">Điểm danh đúng giờ</p>
                </div>

                <div class="divider"></div>
                <div class="box">
                    <p class="percentage orange">5%</p>
                    <p class="details">90 học sinh</p>
                    <p class="details">Điểm danh trễ giờ</p>
                </div>

                <div class="divider"></div>
                <div class="box">
                    <p class="percentage bright">5%</p>
                    <p class="details">90 học sinh</p>
                    <p class="details">Không đến lớp</p>
                </div>
            </div>
        </div>

        <!-- Tháng -->
        <div id="thang" class="content">
            <div class="date-container">
                <span class="date-text" id="current-date"></span>
                <span class="calendar-icon" id="calendar-toggle">
                    <i class="fa-solid fa-calendar-days"></i>
                </span>
            </div>

            <!-- Hiển thị lịch -->
            <div class="calendar-dropdown" id="calendar">
                <div class="calendar-header">
                    <span class="prev-month" id="prev-month">&#8249;</span>
                    <span class="calendar-title" id="calendar-title"></span>
                    <span class="next-month" id="next-month">&#8250;</span>
                </div>
                <table class="calendar-table">
                    <thead>
                        <tr>
                            <th>T2</th>
                            <th>T3</th>
                            <th>T4</th>
                            <th>T5</th>
                            <th>T6</th>
                            <th>T7</th>
                            <th>CN</th>
                        </tr>
                    </thead>
                    <tbody id="calendar-body">
                        <!-- Calendar dates will be dynamically generated here -->
                    </tbody>
                </table>
            </div>

            <div class="container">
                <div class="box">
                    <p class="percentage green">90%</p>
                    <p class="details">1620 học sinh</p>
                    <p class="details">Điểm danh đúng giờ</p>
                </div>

                <div class="divider"></div>
                <div class="box">
                    <p class="percentage orange">5%</p>
                    <p class="details">90 học sinh</p>
                    <p class="details">Điểm danh trễ giờ</p>
                </div>

                <div class="divider"></div>
                <div class="box">
                    <p class="percentage bright">5%</p>
                    <p class="details">90 học sinh</p>
                    <p class="details">Không đến lớp</p>
                </div>
            </div>
        </div>

        <!-- Tuần -->
        <div id="tuan" class="content">
            <div class="date-container">
                <span class="date-text" id="current-date">05/09/2024 - 11/09/2024</span>
                <span class="calendar-icon" id="calendar-toggle">
                    <i class="fa-solid fa-calendar-days"></i>
                </span>
            </div>

            <div class="container">
                <div class="box">
                    <p class="percentage green">90%</p>
                    <p class="details">1620 học sinh</p>
                    <p class="details">Điểm danh đúng giờ</p>
                </div>

                <div class="divider"></div>
                <div class="box">
                    <p class="percentage orange">5%</p>
                    <p class="details">90 học sinh</p>
                    <p class="details">Điểm danh trễ giờ</p>
                </div>

                <div class="divider"></div>
                <div class="box">
                    <p class="percentage bright">5%</p>
                    <p class="details">90 học sinh</p>
                    <p class="details">Không đến lớp</p>
                </div>
            </div>
        </div>

        <div class="chart-container">
            <canvas id="myChart"></canvas>
        </div>

        <h4 style="padding-left: 10px">Thông tin các khối lớp :</h4>
        <div class="class-info-container">
            <div class="class-card">
                <a href="./thongkechuyencan.php">
                    <div class="class-info">
                        <div class="class-circle green">Khối 6</div>
                        <div class="class-details">
                            <p>Số lớp: 4 &nbsp;&nbsp; Số học sinh: 160</p>
                            <div class="male_female">
                                <div class="female">
                                    <span><i class="fa-solid fa-venus"></i> <span>70</span></span>
                                </div>
                                <div class="male">
                                    <span><i class="fa-solid fa-mars-stroke-up"></i> <span>90</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="class-icon"><i data-feather="alert-circle" style="color: #5B6998"></i></div>
                    </div>
                </a>
            </div>

            <div class="class-card">
                <a href="./thongkechuyencan.php">
                    <div class="class-info">
                        <div class="class-circle pink">Khối 7</div>
                        <div class="class-details">
                            <p>Số lớp: 4 &nbsp;&nbsp; Số học sinh: 160</p>
                            <div class="male_female">
                                <div class="female">
                                    <span><i class="fa-solid fa-venus"></i> <span>70</span></span>
                                </div>
                                <div class="male">
                                    <span><i class="fa-solid fa-mars-stroke-up"></i> <span>90</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="class-icon"><i data-feather="alert-circle" style="color: #5B6998"></i></div>
                    </div>
                </a>
            </div>

            <div class="class-card">
                <a href="./thongkechuyencan.php">
                    <div class="class-info">
                        <div class="class-circle purple">Khối 8</div>
                        <div class="class-details">
                            <p>Số lớp: 4 &nbsp;&nbsp; Số học sinh: 160</p>
                            <div class="male_female">
                                <div class="female">
                                    <span><i class="fa-solid fa-venus"></i> <span>70</span></span>
                                </div>
                                <div class="male">
                                    <span><i class="fa-solid fa-mars-stroke-up"></i> <span>90</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="class-icon"><i data-feather="alert-circle" style="color: #5B6998"></i></div>
                    </div>
                </a>
            </div>

            <div class="class-card">
                <a href="./thongkechuyencan.php">
                    <div class="class-info">
                        <div class="class-circle purple">Khối 9</div>
                        <div class="class-details">
                            <p>Số lớp: 4 &nbsp;&nbsp; Số học sinh: 160</p>
                            <div class="male_female">
                                <div class="female">
                                    <span><i class="fa-solid fa-venus"></i> <span>70</span></span>
                                </div>
                                <div class="male">
                                    <span><i class="fa-solid fa-mars-stroke-up"></i> <span>90</span></span>
                                </div>
                            </div>
                        </div>
                        <div class="class-icon"><i data-feather="alert-circle" style="color: #5B6998"></i></div>
                    </div>
                </a>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="./js/tab.js"></script>
<script src="./js/chartkhoi.js"></script>
<script src="./js/lich.js"></script>
<script src="./js/modal.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>
<script>
    function goBack() {
        window.location.href = '../home.php?role=hieutruong'; // Chuyển đến trang chủ
    }
</script>

</html>