<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo</title>
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
    <link rel="stylesheet" href="./css/notifi.css">
    <link rel="stylesheet" href="../css/footer.css">
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
            <div class="title">Thông báo</div>
            <?php
            $role = isset($_GET['role']) ? $_GET['role'] : 'hocsinh'; // Mặc định là học sinh nếu không có role
            if ($role === 'hieutruong') {
                // Chỉ hiển thị icon cho hiệu trưởng
                echo '<a href="../principal/notificationHT.php">
                            <div class="icon">
                                <i class="fa-solid fa-plus"></i>
                            </div>
                           </a>';
            }
            ?>
        </div>
    </header>

    <main>
        <div class="main_action">
            <div class="notification_category">
                <label for="title">Danh mục <span class="required"></span></label>
                <input class="subject_datalist" list="subjects" id="subject" name="subject" required>
                <datalist id="subjects">
                    <option value="Cơ sở vật chất">
                    <option value="Chất lượng giảng dạy">
                    <option value="Nâng cao kết quả học tập">
                    <option value="Hoạt động ngoại khóa">
                    <option value="An toàn và an ninh">
                    <option value="Công nghệ trong giáo dục">
                </datalist>
            </div>

            <div class="notification_search">
                <input type="text" placeholder="Tìm kiếm">
            </div>
        </div>





        <div class="card">
            <a href="./thongbaochitiet.php">
                <div class="card-content">
                    <div class="card-image data_anhdaidien">
                        <img src="../img/avtteacher.png" alt="Icon">
                    </div>
                    <div class="card-text">
                        <h3 class="data_tieudethongbao">Thông tin học phí HK1 2023-2024</h3>
                        <p class=data_noidungthongbao>Thông báo về học phí của các khối tiểu học...</p>
                    </div>
                    <div class="card-notification">
                        <span class="notification-badge">1</span>
                        <div class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
            <a href="./thongbaochitiet.php">
                <div class="card-content">
                    <div class="card-image data_anhdaidien">
                        <img src="../img/avtteacher.png" alt="Icon">
                    </div>
                    <div class="card-text">
                        <h3 class="data_tieudethongbao">Thông tin học phí HK1 2023-2024</h3>
                        <p class="data_noidungthongbao">Thông báo về học phí của các khối tiểu học...</p>
                    </div>
                    <div class="card-notification">
                        <span class="notification-badge">1</span>
                        <div class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>

            <a href="./thongbaochitiet.php">
                <div class="card-content">
                    <div class="card-image data_anhdaidien">
                        <img src="../img/avtteacher.png" alt="Icon">
                    </div>
                    <div class="card-text">
                        <h3 class="data_tieudethongbao">Thông tin học phí HK1 2023-2024</h3>
                        <p class="data_noidungthongbao">Thông báo về học phí của các khối tiểu học...</p>
                    </div>
                    <div class="card-notification">
                        <span class="notification-badge">1</span>
                        <div class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>

            <a href="./thongbaochitiet.php">
                <div class="card-content">
                    <div class="card-image data_anhdaidien">
                        <img src="../img/avtteacher.png" alt="Icon">
                    </div>
                    <div class="card-text">
                        <h3 class="data_tieudethongbao">Thông tin học phí HK1 2023-2024</h3>
                        <p class="data_noidungthongbao">Thông báo về học phí của các khối tiểu học...</p>
                    </div>
                    <div class="card-notification">
                        <span class="notification-badge">1</span>
                        <div class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" />
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </main>

    <?php include '../footer/footer.php' ?>
</body>
<script src="../js/back.js"></script>

</html>