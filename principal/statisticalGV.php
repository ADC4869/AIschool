<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê giáo viên</title>
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
    <link rel="stylesheet" href="./css/statiscal.css">
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
            <div class="title">Thống kê giáo viên</div>
        </div>
    </header>

    <main>
        <div class="teacher-list">
            <span class="title">Danh sách Giáo viên</span>
            <div class="teacher-info">
                <div class="tabs">
                    <div class="total tab_total active" id="total">
                        <p>Tổng số: 30</p>
                    </div>

                    <div class="male tab_male" id="male">
                        <p>Nam: 28</p>
                    </div>

                    <div class="female tab_female" id="female">
                        <p>Nữ: 12</p>
                    </div>
                </div>
            </div>
            <div class="main_search">
                <input type="search" placeholder="Nhập tên, mã học sinh để tìm kiếm">
            </div>
        </div>

        <div class="teacher-card girl">
            <a href="../setting/accountteacher.php">
                <div class="profile">
                    <img src="../img/hs.jpg" alt="Profile Image">
                    <div class="info">
                        <p class="data_hovatengiaovien"><b>Nguyễn Thị Ánh Xuân</b></p>
                        <p class="data_magiaovien">Mã nhân viên: GV20014567</p>
                    </div>
                </div>
                <div class="actions">
                    <button class="call"><a href="../call/index.php"><i data-feather="phone"
                                style="color: #5B6998"></i></a></button>
                    <button class="message"><a href="../chat/chatgiaovien.php"><i data-feather="message-square"
                                style="color: #5B6998"></i></a></button>
                </div>
            </a>
        </div>

        <div class="teacher-card boy">
            <a href="../setting/accountteacher.php">
                <div class="profile">
                    <img src="../img/hs.jpg" alt="Profile Image">
                    <div class="info">
                        <p class="data_hovatengiaovien"><b>Trần Nguyên Khôi</b></p>
                        <p class="data_magiaovien">Mã nhân viên: GV20014568</p>
                    </div>
                </div>
                <div class="actions">

                    <button class="call"><a href="../call/index.php"><i data-feather="phone"
                                style="color: #5B6998"></i></a></button>
                    <button class="message"><a href="../chat/chatgiaovien.php"><i data-feather="message-square"
                                style="color: #5B6998"></i></a></button>
                </div>
            </a>
        </div>

    </main>
</body>
<script src="../js/back.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>
<script>
    // Lấy các phần tử "Tổng số", "Nam", và "Nữ"
    const totalBtn = document.getElementById("total");
    const maleBtn = document.getElementById("male");
    const femaleBtn = document.getElementById("female");

    // Lấy danh sách học sinh
    const allTeachers = document.querySelectorAll(".teacher-card");

    // Hàm hiển thị tất cả học sinh
    function showAllTeachers() {
        allTeachers.forEach(teacher => {
            teacher.style.display = "flex";
        });
    }

    // Hàm hiển thị học sinh nam
    function showMaleTeachers() {
        allTeachers.forEach(teacher => {
            if (teacher.classList.contains("boy")) {
                teacher.style.display = "flex";
            } else {
                teacher.style.display = "none";
            }
        });
    }

    // Hàm hiển thị học sinh nữ
    function showFemaleTeachers() {
        allTeachers.forEach(teacher => {
            if (teacher.classList.contains("girl")) {
                teacher.style.display = "flex";
            } else {
                teacher.style.display = "none";
            }
        });
    }

    // Gán sự kiện click cho các phần tử
    totalBtn.addEventListener("click", showAllTeachers);
    maleBtn.addEventListener("click", showMaleTeachers);
    femaleBtn.addEventListener("click", showFemaleTeachers);

    document.getElementById('total').addEventListener('click', function () {
        // Thêm lớp 'active' cho tab "Sự kiện đang diễn ra" 
        document.getElementById('total').classList.add('active');
        document.getElementById('male').classList.remove('active');
        document.getElementById('female').classList.remove('active');
    });

    document.getElementById('male').addEventListener('click', function () {
        // Thêm lớp 'active' cho tab "Sự kiện đang diễn ra" 
        document.getElementById('total').classList.remove('active');
        document.getElementById('male').classList.add('active');
        document.getElementById('female').classList.remove('active');
    });
    document.getElementById('female').addEventListener('click', function () {
        // Thêm lớp 'active' cho tab "Sự kiện đang diễn ra" 
        document.getElementById('total').classList.remove('active');
        document.getElementById('male').classList.remove('active');
        document.getElementById('female').classList.add('active');
    });

</script>


</html>