<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê học sinh</title>
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
    <link rel="stylesheet" href="css/thongkehocsinh.css">
</head>
<style>
    .dropdown {
        display: none;
        position: absolute;
        top: 20%;
        left: 50%;
        transform: translateX(-50%);
        background-color: #ffffff;
        border: 1px solid #bcbcbd;
        z-index: 1;
    }

    .dropdown ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .dropdown li {
        padding: 10px;
        cursor: pointer;
    }

    .dropdown li:hover {
        background-color: #f0f0f0;
    }
</style>

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
            <div class="title" onclick="toggleDropdown()">Thống kê số học sinh</div>

            <div class="dropdown" id="dropdownMenu">
                <ul>
                    <li>Thống kê số học sinh</li>
                    <li>Thống kê kết quả học tập</li>
                    <li>Thống kê chuyên cần</li>
                </ul>
            </div>

            <center>
                <button class="btn">Chọn học kỳ<i class="fa-solid fa-angle-down"></i></button>
            </center>

            <center>
                <div id="myChartContainer">
                    <canvas id="myChart" style="margin-top: 10px;"></canvas>
                    <div class="center-text">1800</div>
                </div>
            </center>
        </div>
    </header>

    <main>
        <h4>Tổng quan :</h4>
        <div class="container">
            <div class="item">
                <img src="../img/khoi.png" alt="Icon 1">
                <p>5 Khối</p>
            </div>
            <div class="item">
                <img src="../img/lop.png" alt="Icon 2">
                <p>10 Lớp</p>
            </div>
            <div class="item">
                <img src="../img/nha.png" alt="Icon 3">
                <p>2 Cơ sở</p>
            </div>
        </div>

        <h4>Thông tin các khối lớp :</h4>
        <div class="class-info-container">
            <div class="class-card">
                <div class="class-info">
                    <div class="class-circle green">Khối 1</div>
                    <div class="class-details">
                        <p>Trưởng khối: Lưu trên database</p>
                        <p>Số lớp: 2 &nbsp;&nbsp; Số học sinh: 200</p>
                    </div>
                    <div class="class-icon"><i class="fa-solid fa-circle-exclamation"></i></div>
                </div>
            </div>

            <div class="class-card">
                <div class="class-info">
                    <div class="class-circle pink">Khối 1</div>
                    <div class="class-details">
                        <p>Trưởng khối: Lưu trên database</p>
                        <p>Số lớp: 2 &nbsp;&nbsp; Số học sinh: 200</p>
                    </div>
                    <div class="class-icon"><i class="fa-solid fa-circle-exclamation"></i></div>
                </div>
            </div>

            <div class="class-card">
                <div class="class-info">
                    <div class="class-circle purple">Khối 1</div>
                    <div class="class-details">
                        <p>Trưởng khối: Lưu trên database</p>
                        <p>Số lớp: 2 &nbsp;&nbsp; Số học sinh: 200</p>
                    </div>
                    <div class="class-icon"><i class="fa-solid fa-circle-exclamation"></i></div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="./js/chart.js"></script>
<script src="../js/back.js"></script>
<script>
    function toggleDropdown() {
        var dropdown = document.getElementById("dropdownMenu");
        dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
    }

</script>

</html>