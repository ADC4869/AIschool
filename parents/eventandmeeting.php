<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sự kiện và lịch họp</title>
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
    <link rel="stylesheet" href="css/eventandmeeting.css">
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
            <div class="title">Sự kiện và lịch họp</div>
        </div>
    </header>

    <main>
        <div class="main_tab">
            <div class="tab_meeting active" id="tab_meeting">
                <button type="button">Lịch họp phụ huynh</button>
            </div>

            <div class="tab_activity" id="tab_activity">
                <button type="button">Hoạt động ngoại khóa</button>
            </div>
        </div>

        <div id="meeting" class="main_student_meeting">
            <div class="student_detail">
                <div class="student_photo">
                    <img src="../img/hs.jpg" alt="">
                </div>

                <div class="student_info">
                    <span class="name_student data_hovatenhocsinh">Nguyễn Thị Yến Loan</span>
                    <span class="data_mahocsinh">Mã học sinh: HS2001587 <span class="data_lophoc"> Lớp:
                            9A1</span></span>
                </div>

                <div class="student_icon">
                    <a href="./meeting.php">
                        <i data-feather="alert-circle" style="color: #5B6998"></i>
                    </a>
                </div>
            </div>

            <div class="student_detail">
                <div class="student_photo">
                    <img src="../img/hs.jpg" alt="">
                </div>

                <div class="student_info">
                    <span class="name_student data_hovatenhocsinh">Nguyễn Châu Giang</span>
                    <span class="data_mahocsinh">Mã học sinh: HS2001588 <span class="data_lophoc"> Lớp:
                            9A2</span></span>
                </div>

                <div class="student_icon">
                    <a href="./meeting.php">
                        <i data-feather="alert-circle" style="color: #5B6998"></i>
                    </a>
                </div>
            </div>
        </div>

        <div id="activity" class="main_student_event" style="display: none">
            <div class="student_detail">
                <div class="student_photo">
                    <img src="../img/hs.jpg" alt="">
                </div>

                <div class="student_info">
                    <span class="name_student data_hovatenhocsinh">Nguyễn Thị Yến Loan</span>
                    <span class="data_mahocsinh">Mã học sinh: HS2001587 <span class="data_lophoc"> Lớp:
                            9A1</span></span>
                </div>

                <div class="student_icon">
                    <a href="./activity.php">
                        <i data-feather="alert-circle" style="color: #5B6998"></i>
                    </a>
                </div>
            </div>

            <div class="student_detail">
                <div class="student_photo">
                    <img src="../img/hs.jpg" alt="">
                </div>

                <div class="student_info">
                    <span class="name_student data_hovatenhocsinh">Nguyễn Châu Giang</span>
                    <span class="data_mahocsinh">Mã học sinh: HS2001588 <span class="data_lophoc"> Lớp:
                            9A2</span></span>
                </div>

                <div class="student_icon">
                    <a href="./activity.php">
                        <i data-feather="alert-circle" style="color: #5B6998"></i>
                    </a>
                </div>
            </div>
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

    document.getElementById('tab_meeting').addEventListener('click', function () {
        // Hiển thị nội dung họp và ẩn nội dung hoạt động
        document.getElementById('meeting').style.display = 'flex';
        document.getElementById('activity').style.display = 'none';

        // Thêm lớp 'active' cho tab "Lịch họp phụ huynh" và xóa lớp 'active' của tab hoạt động
        document.getElementById('tab_meeting').classList.add('active');
        document.getElementById('tab_activity').classList.remove('active');
    });

    document.getElementById('tab_activity').addEventListener('click', function () {
        // Hiển thị nội dung hoạt động và ẩn nội dung họp
        document.getElementById('meeting').style.display = 'none';
        document.getElementById('activity').style.display = 'flex';

        // Thêm lớp 'active' cho tab "Hoạt động ngoại khóa" và xóa lớp 'active' của tab họp
        document.getElementById('tab_activity').classList.add('active');
        document.getElementById('tab_meeting').classList.remove('active');
    });

</script>


</html>