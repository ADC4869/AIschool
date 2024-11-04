<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thời khóa biểu</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="./css/thoikhoabieu.css">
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

    <main>
        <div class="main_information">
            <span>Trường THCS Bình Châu</span>
            <span>Năm học 2024 - 2025</span>
            <span>Học kì 1</span>
        </div>

        <table class="schedule-table">
        <tr>
            <th rowspan="2">THỨ</th>
            <th rowspan="2">TIẾT</th>
            <th colspan="2" class="class">6A1</th>
            <th colspan="2" class="class">6A2</th>
            <th colspan="2" class="class">6A3</th>
            <th colspan="2" class="class">6A4</th>
        </tr>
        <tr>
            <th class="time">Sáng</th>
            <th class="time">Chiều</th>
            <th class="time">Sáng</th>
            <th class="time">Chiều</th>
            <th class="time">Sáng</th>
            <th class="time">Chiều</th>
            <th class="time">Sáng</th>
            <th class="time">Chiều</th>
            
        </tr>
        <tr>
            <td rowspan="5" class="day-column">2</td>
            <td>1</td>
            <td>ChCờ - N.Trinh</td>
            <td>Văn 2 - Tuyết</td>
            <td>ChCờ - Niệm</td>
            <td>Toán 2 - Niệm</td>
        </tr>
        <tr>
            <td>2</td>
            <td>GDCD - T.Thảo</td>
            <td>Văn 2 - Tuyết</td>
            <td>CNghệ - N.Trinh</td>
            <td>Toán 2 - Niệm</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Toán - Niệm</td>
            <td>Toán 2 - Niệm</td>
            <td>NNgữ - Anh</td>
            <td>Văn 2 - Tuyết</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Văn - Tuyết</td>
            <td>GDCD - T.Thảo</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>5</td>
            <td colspan="2"></td>
            <td colspan="2"></td>
        </tr>
        <!-- Continue the rows similarly for other days -->
    </table>
    </main>


</body>

</html>