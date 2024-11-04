<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời khóa biểu</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
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
            <div class="title">Thời khóa biểu</div>
        </div>
    </header>

    <div class="container">
        <main>
            <?php
            $role = isset($_GET['role']) ? $_GET['role'] : 'hocsinh';
            if ($role == 'giaovien') {
                include('TKBgiaovien.php');
            } elseif ($role == 'hocsinh') {
                include('TKBhocsinh.php');
            } else {
                include('TKBhocsinh.php');
            }
            ?>
        </main>
    </div>
</body>
<script src="../js/back.js"></script>
<script src="./js/calendar.js"></script>
<script>
    // Lấy tất cả radio buttons và các phần lịch dạy, lịch thi
    const radios = document.querySelectorAll('input[name="options"]');
    const schedule = document.querySelectorAll('.schedule_study'); // Lấy tất cả các lịch dạy
    const exam = document.querySelectorAll('.schedule_exam'); // Lấy tất cả các lịch thi

    // Hàm để ẩn/hiện lịch theo radio được chọn
    radios.forEach((radio) => {
        radio.addEventListener('change', function () {
            if (this.value === 'schedule') {
                // Hiện tất cả các lịch dạy và ẩn tất cả các lịch thi
                schedule.forEach(item => item.style.display = 'block');
                exam.forEach(item => item.style.display = 'none');
            } else if (this.value === 'exam') {
                // Hiện tất cả các lịch thi và ẩn tất cả các lịch dạy
                schedule.forEach(item => item.style.display = 'none');
                exam.forEach(item => item.style.display = 'block');
            } else {
                // Hiện tất cả lịch dạy và lịch thi
                schedule.forEach(item => item.style.display = 'block');
                exam.forEach(item => item.style.display = 'block');
            }
        });
    });
</script>

</html>