<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tình trạng chuyên cần</title>
    <link rel="stylesheet" href="./css/baocaodiemdanh.css">
    <link rel="stylesheet" href="./css/diligence.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../css/fix.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="header">
            <span class="back-arrow" onclick="goBack()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                </svg>
            </span>
            <div class="title">Tình trạng chuyên cần</div>
        </div>
    </header>

    <?php
    if (!isset($_GET['role']) || ($_GET['role'] != 'giaovien' && $_GET['role'] != 'hieutruong')) {
        include 'diemdanhhocsinh.php';
    }
    ?>
    <!-- MAIN -->
    <main>
        <?php
        if (isset($_GET['role']) && $_GET['role'] == 'giaovien') {
            ?>
            <!-- LỊCH -->
            <div class="main__calendar">
                <input type="date" id="date__present" class="calendar">
            </div>

            <!-- TỔNG QUAN -->
            <div class="main__tongquan">
                <div class="tongquan__content">
                    <div class="title__tongquan">
                        <p>Lớp chủ nhiệm</p>
                    </div>
                    <div class="top__tonquan">
                        <div class="circle__tongso" onclick="toggleTongSo()">
                            <div class="title">
                                <p class="title__tongso">Sỉ số</p>
                                <p class="title__tongso">40</p>
                            </div>
                        </div>
                    </div>

                    <div class="bottom__tongquan">
                        <div class="circle__hiendien">
                            <div class="title">
                                <p class="title__hiendien" onclick="toggleHienDien()">Hiện diện</p>
                                <p class="title__hiendien">36</p>
                            </div>
                        </div>
                        <div class="circle__vang" onclick="toggleVang()">
                            <div class="title">
                                <p class="title__vang">Vắng</p>
                                <p class="title__vang">4</p>
                            </div>
                        </div>
                        <div class="circle__tre" onclick="toggleTre()">
                            <div class="title">
                                <p class="title__tre">Trễ</p>
                                <p class="title__tre">2</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
        <!-- KHỐI -->
        <?php
        // Kiểm tra xem có giá trị 'role' được truyền qua URL không
        if (isset($_GET['role'])) {
            // Lấy giá trị role từ URL
            $role = $_GET['role'];

            // Kiểm tra role là giáo viên hay hiệu trưởng
            if ($role == 'giaovien') {
                // Giáo viên chỉ xem được 1 lớp
                echo "<div class='khoilop'>";
                include 'giaovien.php';
                echo "</div>";
            } elseif ($role == 'hieutruong') {
                // Hiệu trưởng xem được tất cả các lớp
                echo "<div class='khoilop'>";
                include 'hieutruong.php';
                echo "</div>";
            }
        }
        ?>

        <footer id="footer" class="hidden" onclick="showReportModal()">
            <div class="footer btn__tinhtrang">
                <button type="button">
                    Trạng thái
                </button>
            </div>
        </footer>


    </main>
</body>
<script src="./js/calendar.js"></script>
<script src="./js/siso.js"></script>
<script src="./js/diemdanhchitiet.js"></script>
<script src="../js/back.js"></script>
<script src="./js/tinhtrang.js"></script>
<script>
    function showReportModal() {
        var reportModal = document.getElementById("reportModal");
        reportModal.classList.remove("hidden");
        reportModal.classList.add("show"); // Thêm class để hiện modal
    }


</script>


</html>