<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kế chuyên cần</title>
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
    <link rel="stylesheet" href="./css/diligence.css">
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
            <div class="title">Thống kế chuyên cần theo học kỳ</div>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Chi tiết học sinh</h2>

            <div class="student-info">
                <img src="../img/hs.jpg" alt="Student Photo">
                <div class="student-details">
                    <h3 class="data_hovatenhocsinh">Nguyễn Thị Mỹ Tiên</h3>
                    <p class="data_mahocsinh">Mã học sinh: HS0001</p>
                </div>
            </div>

            <div class="pie-chart">
                <canvas id="attendanceChart"></canvas>
            </div>

            <div class="legend">
                <div>
                    <div style="background-color: #3498db; width: 15px; height: 15px; display: inline-block;"></div>
                    <span>Đúng giờ</span>
                </div>
                <div>
                    <div style="background-color: #f39c12; width: 15px; height: 15px; display: inline-block;"></div>
                    <span>Trễ</span>
                </div>
                <div>
                    <div style="background-color: #e74c3c; width: 15px; height: 15px; display: inline-block;"></div>
                    <span>Vắng</span>
                </div>
            </div>

            <div class="summary">
                <p>Số ngày trong học kỳ: 90</p>
                <p>Số ngày đến đúng giờ: 80</p>
                <p>Số ngày đi trễ: 8</p>
                <p>Số ngày vắng: 2</p>
            </div>
        </div>
    </main>
</body>
<script src="./js/back.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('attendanceChart').getContext('2d');
    const attendanceChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Đúng giờ', 'Trễ', 'Vắng'],
            datasets: [{
                data: [80, 8, 2],
                backgroundColor: ['#3498db', '#f39c12', '#e74c3c'],
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            }
        }
    });
</script>
</html>