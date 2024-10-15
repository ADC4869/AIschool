<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AISchool</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="./css/thongtinlienlac.css">
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
            <div class="title">Thông Tin Liên Lạc</div>
        </div>
    </header>

    <main>
        <?php
            // Kiểm tra role từ URL, nếu không có thì mặc định là 'hocsinh'
            $role = isset($_GET['role']) ? $_GET['role'] : 'hocsinh'; 

            // Nếu là hiệu trưởng
            if ($role == 'hieutruong') {
                echo '
                <h4 style="margin: 10px;">Danh sách các khối</h4>
                <div class="container">
                    <div class="block" onclick="showDetails(\'details1\')">Khối 1</div>
                    <div class="block" onclick="showDetails(\'details2\')">Khối 2</div>
                    <div class="block" onclick="showDetails(\'details3\')">Khối 3</div>
                    <div class="block" onclick="showDetails(\'details4\')">Khối 4</div>
                    <div class="block" onclick="showDetails(\'details5\')">Khối 5</div>
                </div>

                <!-- details1 -->
                <div id="details1" class="details">
                    <div class="details-content">
                        <div class="details-text">
                            <p>Lớp 1A</p>
                            <p>GVCN: Nguyễn Thị Mận Xoài</p>
                        </div>
                        <a href="GV.php"><button>Chi tiết</button></a>
                    </div>
                </div>
                ';
            }
            // Nếu là giáo viên
            elseif ($role == 'giaovien') {
                include 'giaovien.php';
            }
            // Nếu là học sinh
            else {
                include 'GV.php';
            }
        ?>
    </main>
</body>
<script src="js/contact.js"></script>
<script src="../js/back.js"></script>
</html>