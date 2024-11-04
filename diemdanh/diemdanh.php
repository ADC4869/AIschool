<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Điểm danh</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <div class="header">
            <span class="back-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                </svg>
            </span>
            <span class="title">Điểm danh lớp 1A</span>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="header">
                <img src="https://via.placeholder.com/50" alt="Teacher Avatar">
                <div class="info">
                    <h2 class="data_hovatengiaovien">Giáo viên : Nguyễn Thị Ánh Xuân</h2>
                    <p>Ngày: 15/08/2024</p>
                    <p>Thời gian: 10:30</p>
                </div>
            </div>

            <div class="status">
                <span class="content" data-type="present">Hiện diện: 36</span>
                <span class="content1" data-type="late">Trễ: 2</span>
                <span class="content2" data-type="absent">Vắng: 2</span>
            </div>

            <div class="attendance-list" id="attendanceList">
                <!-- Attendance items will be dynamically loaded here -->
                <div class="attendance">
                    <img src="https://via.placeholder.com/40" alt="Student Avatar">
                    <div class="attendance-info">
                        <h3 class="data_hovatenhocsinh">Nguyễn Thị Yến Loan</h3>
                        <p>Thời gian đến lớp: 10:25</p>
                    </div>
                    <div class="actions">
                        <button>Sức khỏe</button>
                        <button class="edit">✏️</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="js/diemdanh.js"></script>

</html>