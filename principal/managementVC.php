<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý vật chất</title>
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
    <link rel="stylesheet" href="css/managementVC.css">
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
            <div class="title" id="headerTitle">Quản lý vật chất</div>
        </div>
    </header>

    <main>
        

        <div class="container">
            <h3>Các khối lớp:</h3>
            <div class="class-blocks">
                <button class="class-btn" onclick="toggleClassContent('class6')">Khối 6</button>
                <button class="class-btn" onclick="toggleClassContent('class7')">Khối 7</button>
                <button class="class-btn" onclick="toggleClassContent('class8')">Khối 8</button>
                <button class="class-btn" onclick="toggleClassContent('class9')">Khối 9</button>
            </div>

            <!-- Class content for Khối 6 -->
            <div id="class6" class="class-details" style="display:none;">
                <div class="class-card">
                    <div class="class-info">
                        <h4 class="data_lophoc">Lớp 6A1</h4>
                        <p class="data_hovatengiaovien">GVCN: Nguyễn Văn A</p>
                        <p class="data_siso">Sĩ số: 40</p>
                    </div>
                    <button class="details-btn">Chi tiết</button>
                </div>
            </div>

            <!-- Class content for Khối 7 -->
            <div id="class7" class="class-details" style="display:none;">
                <div class="class-card">
                    <div class="class-info">
                        <h4 class="data_lophoc">Lớp 7A1</h4>
                        <p class="data_hovatengiaovien">GVCN: Nguyễn Văn B</p>
                        <p class="data_siso">Sĩ số: 40</p>
                    </div>
                    <button class="details-btn">Chi tiết</button>
                </div>
            </div>

            <!-- Class content for Khối 8 -->
            <div id="class8" class="class-details" style="display:none;">
                <div class="class-card">
                    <div class="class-info">
                        <h4 class="data_lophoc">Lớp 8A1</h4>
                        <p class="data_hovatengiaovien">GVCN: Nguyễn Văn C</p>
                        <p class="data_siso">Sĩ số: 40</p>
                    </div>
                    <button class="details-btn">Chi tiết</button>
                </div>
            </div>

            <!-- Class content for Khối 9 -->
            <div id="class9" class="class-details" style="display:none;">
                <div class="class-card">
                    <div class="class-info">
                        <h4 class="data_lophoc">Lớp 9A1</h4>
                        <p class="data_hovatengiaovien">GVCN: Nguyễn Thị Ánh Xuân</p>
                        <p class="data_siso">Sĩ số: 40</p>
                    </div>
                    <a href="managementlop.php"><button class="details-btn">Chi tiết</button></a>
                </div>
                <div class="class-card">
                    <div class="class-info">
                        <h4 class="data_lophoc">Lớp 9A2</h4>
                        <p class="data_hovatengiaovien">GVCN: Trần Nguyên Khôi</p>
                        <p class="data_siso">Sĩ số: 40</p>
                    </div>
                    <button class="details-btn">Chi tiết</button>
                </div>
                <div class="class-card">
                    <div class="class-info">
                        <h4 class="data_lophoc">Lớp 9A3</h4>
                        <p class="data_hovatengiaovien">GVCN: Huỳnh Vũ Nhi</p>
                        <p class="data_siso">Sĩ số: 40</p>
                    </div>
                    <button class="details-btn">Chi tiết</button>
                </div>
                <div class="class-card">
                    <div class="class-info">
                        <h4 class="data_lophoc">Lớp 9A4</h4>
                        <p class="data_hovatengiaovien">GVCN: Trương Tam</p>
                        <p class="data_siso">Sĩ số: 40</p>
                    </div>
                    <button class="details-btn">Chi tiết</button>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../js/back.js"></script>
<script>
// Data for the first set of charts
const data1 = {
    labels: ['Khối 6', 'Khối 7', 'Khối 8', 'Khối 9', 'Kho'],
    datasets: [{
        data: [160, 160, 160, 160, 10],
        backgroundColor: ['#F28E2B', '#E15759', '#76B7B2', '#59A14F', '#EDC948']
    }]
};

const data2 = {
    labels: ['Khối 6', 'Khối 7', 'Khối 8', 'Khối 9', 'Kho'],
    datasets: [{
        data: [4, 4, 4, 4, 2],
        backgroundColor: ['#F28E2B', '#E15759', '#76B7B2', '#59A14F', '#EDC948']
    }]
};

const data3 = {
    labels: ['Khối 6', 'Khối 7', 'Khối 8', 'Khối 9'],
    datasets: [{
        data: [4, 4, 4, 4],
        backgroundColor: ['#F28E2B', '#E15759', '#76B7B2', '#59A14F']
    }]
};

// Data for the second set of charts
const data4 = {
    labels: ['Khối 6', 'Khối 7', 'Khối 8', 'Khối 9', 'Kho'],
    datasets: [{
        data: [4, 4, 4, 4, 2],
        backgroundColor: ['#F28E2B', '#E15759', '#76B7B2', '#59A14F', '#EDC948']
    }]
};

const data5 = {
    labels: ['Khối 6', 'Khối 7', 'Khối 8', 'Khối 9'],
    datasets: [{
        data: [4, 4, 4, 4],
        backgroundColor: ['#F28E2B', '#E15759', '#76B7B2', '#59A14F']
    }]
};

const data6 = {
    labels: ['Phòng thí nghiệm', 'Phòng bảo vệ', 'Phòng giáo viên', 'Phòng hiệu trưởng', 'Phòng hiệu phó'],
    datasets: [{
        data: [2, 1, 6, 2, 1],
        backgroundColor: ['#F28E2B', '#E15759', '#76B7B2', '#59A14F', '#EDC948']
    }]
};

// Config for each chart
const config = {
    type: 'pie',
    options: {
        responsive: true,
        maintainAspectRatio: false, // Ensures chart is drawn in a square area
        plugins: {
            legend: {
                position: 'right',
            }
        }
    }
};

// Render charts
new Chart(document.getElementById('chart1'), {
    data: data1,
    ...config
});
new Chart(document.getElementById('chart2'), {
    data: data2,
    ...config
});
new Chart(document.getElementById('chart3'), {
    data: data3,
    ...config
});
new Chart(document.getElementById('chart4'), {
    data: data4,
    ...config
});
new Chart(document.getElementById('chart5'), {
    data: data5,
    ...config
});
new Chart(document.getElementById('chart6'), {
    data: data6,
    ...config
});
</script>
<script>
function toggleClassContent(classId) {
    var allContents = document.querySelectorAll('.class-details'); // Chọn tất cả các nội dung chi tiết lớp
    var content = document.getElementById(classId); // Lấy phần chi tiết của lớp được nhấn

    // Ẩn tất cả các nội dung chi tiết lớp
    allContents.forEach(function(section) {
        section.style.display = "none";
    });

    // Hiển thị nội dung của lớp được nhấn
    content.style.display = "block";
}
</script>
</html>