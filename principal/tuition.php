<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tình trạng học phí</title>
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
    <link rel="stylesheet" href="css/tuition.css">
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
            <div class="title" id="headerTitle">Tình trạng học phí</div>
        </div>
    </header>

    <main>
        <div class="container">
            <h2>Tổng quan học phí</h2>
            <div class="fee-summary">
                <p>Tổng học phí: 1.000.000.000</p>
                <p>Tổng học phí đã thu: 800.000.000</p>
                <p>Tổng học phí chưa thu: 200.000.000</p>
                <i class="fas fa-print print-icon" onclick="window.print()"></i>
            </div>
            <canvas id="tuitionChart"></canvas>
        </div>

        <div class="container1">
            <h2>Danh sách tình trạng các khối</h2>
            <div class="status-list">
                <div class="status-item" id="khoi6-btn" onclick="toggleClassList('khoi6', this)">
                    <div class="circle">Khối 6</div>
                    <button class="status-button">Đủ</button>
                </div>
                <div class="status-item" id="khoi7-btn" onclick="toggleClassList('khoi7', this)">
                    <div class="circle">Khối 7</div>
                    <button class="status-button">Đủ</button>
                </div>
                <div class="status-item" id="khoi8-btn" onclick="toggleClassList('khoi8', this)">
                    <div class="circle">Khối 8</div>
                    <button class="status-button">Đủ</button>
                </div>
                <div class="status-item" id="khoi9-btn" onclick="toggleClassList('khoi9', this)">
                    <div class="circle">Khối 9</div>
                    <button class="status-button thiếu">Thiếu</button>
                </div>
            </div>

            <!-- Class List Section -->
            <div id="khoi9" class="class-list" style="display: none;">
                <h2>Danh sách lớp khối 9</h2>
                <a href="list.php">
                    <div class="class-item red-bg">
                        <h3>Lớp 9A1</h3>
                        <p>GVCN: Nguyễn Thị Ánh Xuân</p>
                        <p>Sĩ số: 40</p>
                    </div>
                </a>
                <div class="class-item blue-bg">
                    <h3>Lớp 9A2</h3>
                    <p>GVCN: Trần Nguyên Khôi</p>
                    <p>Sĩ số: 40</p>
                </div>
                <div class="class-item blue-bg">
                    <h3>Lớp 9A3</h3>
                    <p>GVCN: Huỳnh Vũ Nhi</p>
                    <p>Sĩ số: 40</p>
                </div>
                <div class="class-item blue-bg">
                    <h3>Lớp 9A4</h3>
                    <p>GVCN: Trương Tam</p>
                    <p>Sĩ số: 40</p>
                </div>
            </div>

            <div id="khoi8" class="class-list" style="display: none;">
                <h2>Danh sách lớp khối 8</h2>
                <div class="class-item blue-bg">
                    <h3>Lớp 8A1</h3>
                    <p>GVCN: Nguyễn Thị Ánh Xuân</p>
                    <p>Sĩ số: 40</p>
                </div>
                <div class="class-item blue-bg">
                    <h3>Lớp 8A2</h3>
                    <p>GVCN: Trần Nguyên Khôi</p>
                    <p>Sĩ số: 40</p>
                </div>
                <div class="class-item blue-bg">
                    <h3>Lớp 8A3</h3>
                    <p>GVCN: Huỳnh Vũ Nhi</p>
                    <p>Sĩ số: 40</p>
                </div>
                <div class="class-item blue-bg">
                    <h3>Lớp 8A4</h3>
                    <p>GVCN: Trương Tam</p>
                    <p>Sĩ số: 40</p>
                </div>
            </div>

            <div id="khoi7" class="class-list" style="display: none;">
                <h2>Danh sách lớp khối 7</h2>
                <div class="class-item blue-bg">
                    <h3>Lớp 7A1</h3>
                    <p>GVCN: Nguyễn Thị Ánh Xuân</p>
                    <p>Sĩ số: 40</p>
                </div>
                <div class="class-item blue-bg">
                    <h3>Lớp 7A2</h3>
                    <p>GVCN: Trần Nguyên Khôi</p>
                    <p>Sĩ số: 40</p>
                </div>
                <div class="class-item blue-bg">
                    <h3>Lớp 7A3</h3>
                    <p>GVCN: Huỳnh Vũ Nhi</p>
                    <p>Sĩ số: 40</p>
                </div>
                <div class="class-item blue-bg">
                    <h3>Lớp 7A4</h3>
                    <p>GVCN: Trương Tam</p>
                    <p>Sĩ số: 40</p>
                </div>
            </div>

            <div id="khoi6" class="class-list" style="display: none;">
                <h2>Danh sách lớp khối 6</h2>
                <div class="class-item blue-bg">
                    <h3>Lớp 6A1</h3>
                    <p>GVCN: Nguyễn Thị Ánh Xuân</p>
                    <p>Sĩ số: 40</p>
                </div>
                <div class="class-item blue-bg">
                    <h3>Lớp 6A2</h3>
                    <p>GVCN: Trần Nguyên Khôi</p>
                    <p>Sĩ số: 40</p>
                </div>
                <div class="class-item blue-bg">
                    <h3>Lớp 6A3</h3>
                    <p>GVCN: Huỳnh Vũ Nhi</p>
                    <p>Sĩ số: 40</p>
                </div>
                <div class="class-item blue-bg">
                    <h3>Lớp 6A4</h3>
                    <p>GVCN: Trương Tam</p>
                    <p>Sĩ số: 40</p>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../js/back.js"></script>
<script>
const ctx = document.getElementById('tuitionChart').getContext('2d');
const tuitionChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Học phí đã thu', 'Học phí chưa thu'],
        datasets: [{
            label: 'Học phí',
            data: [800000000, 200000000],
            backgroundColor: ['#b3e5fc', '#ffcdd2'],
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        plugins: {
            legend: {
                position: 'bottom',
            },
            tooltip: {
                callbacks: {
                    label: function(tooltipItem) {
                        const value = tooltipItem.raw;
                        return value.toLocaleString() + ' VND';
                    }
                }
            }
        }
    }
});
</script>
<script>
function toggleClassList(id, element) {
    // Get the selected class list and check its current display state
    var selectedList = document.getElementById(id);
    
    // If the selected list is already visible, hide it and remove the 'active' class
    if (selectedList.style.display === 'block') {
        selectedList.style.display = 'none';

        // Remove the 'active' class from the clicked circle
        var clickedCircle = element.querySelector('.circle');
        clickedCircle.classList.remove('active');
    } else {
        // Hide all class lists first
        var classLists = document.querySelectorAll('.class-list');
        classLists.forEach(function(list) {
            list.style.display = 'none';
        });

        // Remove 'active' class from all circles
        var circles = document.querySelectorAll('.circle');
        circles.forEach(function(circle) {
            circle.classList.remove('active');
        });

        // Display the selected class list
        selectedList.style.display = 'block';

        // Add 'active' class to the clicked element's circle
        var clickedCircle = element.querySelector('.circle');
        clickedCircle.classList.add('active');
    }
}
</script>
</html>