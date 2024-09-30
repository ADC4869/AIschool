<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý giáo viên</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <!-- css -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="./css/managementGV.css">
    <style>
    .card {
        transition: background-color 0.3s;
    }

    .absent-card.active {
        background-color: #FFB9BD; /* Background color for absent */
    }

    .late-card.active {
        background-color: #F8AD29; /* Background color for late */
    }
</style>
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
            <div class="title">Quản lý giáo viên</div>
        </div>
    </header>

    <main>
        <div class="tabs">
            <button class="tablinks active" onclick="openTab(event, 'giaovien')">Thống kê số giáo viên</button>
            <div class="vertical-line"></div>
            <button class="tablinks" onclick="openTab(event, 'chuyencan')">Thống kê chuyên cần</button>
            <div class="vertical-line"></div>
            <button class="tablinks" onclick="openTab(event, 'thanhtich')">Thành tích</button>
        </div>

        <!-- Thống kê số giáo viên -->
        <div id="giaovien" class="tabcontent" style="display: block;">
            <div class="chart-container">
                <center>
                    <button class="btn">Chọn học kỳ<i class="fa-solid fa-angle-down"></i></button>
                </center>

                <canvas id="myDoughnutChart"></canvas>
                <div class="chart-labels">
                    <span class="label-nu">58 Nữ</span>
                    <span class="label-nam">67 Nam</span>
                </div>
                <div class="center-text">125</div>
            </div>

            <h4>Tổng quan :</h4>
            <div class="container">
                <div class="item">
                    <img src="../img/khoi.png" alt="Icon 1">
                    <p>5 Khối</p>
                </div>
                <div class="item">
                    <img src="../img/lop.png" alt="Icon 2">
                    <p>16 Lớp</p>
                </div>
                <div class="item">
                    <img src="../img/nha.png" alt="Icon 3">
                    <p>1 Cơ sở</p>
                </div>
            </div>

            <h4>Thông tin các khối lớp :</h4>
            <div class="class-info-container">
                <div class="class-card">
                    <div class="class-info">
                        <div class="class-circle green">Khối 6</div>
                        <div class="class-details">
                            <p>Số lớp: 4 &nbsp;&nbsp; Tổng số giáo viên: 30</p>
                            <p>Trưởng khối: Lưu trên database</p>
                        </div>
                        <a href="statisticalGV.php"><div class="class-icon"><i class="fa-solid fa-circle-exclamation"></i></div></a>
                    </div>
                </div>

                <div class="class-card">
                    <div class="class-info">
                        <div class="class-circle green">Khối 7</div>
                        <div class="class-details">
                            <p>Số lớp: 4 &nbsp;&nbsp; Tổng số giáo viên: 32</p>
                            <p>Trưởng khối: Lưu trên database</p>
                        </div>
                        <div class="class-icon"><i class="fa-solid fa-circle-exclamation"></i></div>
                    </div>
                </div>

                <div class="class-card">
                    <div class="class-info">
                        <div class="class-circle green">Khối 8</div>
                        <div class="class-details">
                            <p>Số lớp: 4 &nbsp;&nbsp; Tổng số giáo viên: 28</p>
                            <p>Trưởng khối: Lưu trên database</p>
                        </div>
                        <div class="class-icon"><i class="fa-solid fa-circle-exclamation"></i></div>
                    </div>
                </div>

                <div class="class-card">
                    <div class="class-info">
                        <div class="class-circle green">Khối 9</div>
                        <div class="class-details">
                            <p>Số lớp: 4 &nbsp;&nbsp; Tổng số giáo viên: 35</p>
                            <p>Trưởng khối: Lưu trên database</p>
                        </div>
                        <div class="class-icon"><i class="fa-solid fa-circle-exclamation"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Thống kê chuyên cần -->
        <div id="chuyencan" class="tabcontent">
            <div class="attendance-container">
                <div class="date-container">
                    <span class="date" id="selected-date">15/08/2024</span>
                    <button class="calendar-btn" id="calendar-btn">
                        <i class="fas fa-calendar-alt"></i> <!-- Font Awesome calendar icon -->
                    </button>
                    <!-- This div will be used to show the calendar -->
                    <div class="calendar" id="calendar-container"></div>
                </div>

                <div class="attendance-summary">
                    <span id="total-attendance">Tổng: <strong>125</strong></span>
                    <span class="present" id="present-count">Có mặt: <strong>123</strong></span>
                    <span class="absent" id="absent-count">Vắng mặt: <strong>2</strong></span>
                    <span class="late" id="late-count">Trễ: <strong>1</strong></span>
                </div>
            </div>

            <div class="container1">
                <div class="card present-card">
                    <a href="../diemdanh/diemdanhhocsinh.php"><img src="../img/hs.jpg" alt="Nguyễn Thị Ánh Xuân" class="profile-image"></a>
                    <div class="card-content">
                        <div class="card-header">
                            <h2>Tên: Nguyễn Thị Ánh Xuân</h2>
                            <span class="edit-icon"><i class="fa-solid fa-pen"></i></span>
                        </div>
                        <p>Mã nhân viên: GV20014567</p>
                        <p>Phụ trách: Môn Văn</p>
                        <p>Thời gian vào lớp: 07:55</p>
                        <p>Thời gian ra lớp: 11:40</p>
                        <p>Số tiết trong ngày: 4</p>
                    </div>
                </div>

                <div class="card absent-card" style="display:none;">
                    <a href="../diemdanh/diemdanhhocsinh.php"><img src="../img/gvn.jpg" alt="Lý Lan Anh" class="profile-image"></a>
                    <div class="card-content">
                        <div class="card-header">
                            <h2>Tên: Lý Lan Anh</h2>
                            <span class="edit-icon"><i class="fa-solid fa-pen"></i></span>
                        </div>
                        <p>Mã nhân viên: GV20014567</p>
                        <p>Phụ trách: Môn Toán</p>
                        <p>Thời gian vào lớp: 07:55</p>
                        <p>Thời gian ra lớp: 11:40</p>
                        <p>Số tiết trong ngày: 4</p>
                    </div>
                </div>

                <div class="card late-card" style="display:none;">
                    <a href="../diemdanh/diemdanhhocsinh.php"><img src="../img/hs1.jpg" alt="Trần Nguyên Khôi" class="profile-image"></a>
                    <div class="card-content">
                        <div class="card-header">
                            <h2>Tên: Trần Nguyên Khôi</h2>
                            <span class="edit-icon"><i class="fa-solid fa-pen"></i></span>
                        </div>
                        <p>Mã nhân viên: GV20014567</p>
                        <p>Phụ trách: Môn Lý</p>
                        <p>Thời gian vào lớp: 07:55</p>
                        <p>Thời gian ra lớp: 11:40</p>
                        <p>Số tiết trong ngày: 4</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Thành tích -->
        <div id="thanhtich" class="tabcontent">
            <center>
                <button class="btn">Chọn học kỳ</button>
            </center>

            <div class="summary">
                <span>Tổng số: 30</span>
                <span>Nam: 18</span>
                <span>Nữ: 12</span>
            </div>
            
            <div class="teacher-list">
                <div class="teacher-card">
                    <img src="../img/gv.jpg" alt="Nguyễn Thị Ánh Xuân">
                    <div class="teacher-info">
                        <h3>Nguyễn Thị Ánh Xuân</h3>
                        <p>Mã nhân viên: GV20014567</p>
                        <p>Chủ nhiệm: Lớp 9A1</p>
                    </div>
                    <a href="achievementsGV.php">
                        <div class="icon">
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                    </a>
                </div>

                <div class="teacher-card">
                    <img src="../img/gv.jpg" alt="Hoàng Hồng">
                    <div class="teacher-info">
                        <h3>Hoàng Hồng</h3>
                        <p>Mã nhân viên: GV20014677</p>
                    </div>
                    <a href="achievementsGV.php">
                        <div class="icon">
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                    </a>
                </div>

                <!-- Add more teacher cards here -->

            </div>
        </div>
    </main>
</body>
<script src="../js/back.js"></script>
<script src="./js/manage.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    function openTab(evt, tabName) {
    var i, tabcontent, tablinks;

    // Ẩn tất cả các tab
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Loại bỏ class "active" khỏi tất cả các tab
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Hiển thị tab được chọn và thêm class "active"
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
<script src="./js/GV.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const calendarBtn = document.getElementById('calendar-btn');
    const selectedDate = document.getElementById('selected-date');
    const calendarContainer = document.getElementById('calendar-container');

    // Initialize Flatpickr inside the calendar container
    const flatpickrInstance = flatpickr(calendarContainer, {
        enableTime: false, // Only select the date
        dateFormat: "d/m/Y", // Format as DD/MM/YYYY
        defaultDate: "15/08/2024", // Pre-select a default date
        onChange: function(selectedDates, dateStr, instance) {
            selectedDate.textContent = dateStr; // Update the displayed date
        }
    });

    // Show calendar when the icon is clicked
    calendarBtn.addEventListener('click', function() {
        flatpickrInstance.open(); // Open the Flatpickr calendar
    });

    // Close the calendar when clicking outside of it
    document.addEventListener('click', function(event) {
        if (!calendarContainer.contains(event.target) && !calendarBtn.contains(event.target)) {
            flatpickrInstance.close(); // Close the calendar
        }
    });
});
</script>
</html>