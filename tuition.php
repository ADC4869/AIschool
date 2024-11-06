<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Học phí</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- Css -->
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="css/fee.css">
    <link rel="stylesheet" href="css/tinhtranghocphi.css">
    <link rel="stylesheet" href="./css/fix.css">
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

            <?php
            // Giả sử $role chứa vai trò của người dùng
            $role = isset($_GET['role']) ? $_GET['role'] : '';

            // Xác định tiêu đề dựa trên vai trò
            $title = ($role === 'giaovien') ? 'Trình trạng học phí' : 'Thông tin học phí';
            ?>
            <div class="title"><?php echo $title; ?></div>
        </div>
    </header>

    <main>
        <?php
        // Kiểm tra role thông qua URL (nếu không có thì mặc định là học sinh)
        $role = isset($_GET['role']) ? $_GET['role'] : '';
        ?>
        <?php if ($role == 'giaovien'): ?>
            <!-- Giao diện cho giáo viên -->
            <div class="container">
                <div class="header">
                    <span class="class-info data_lophoc">Tên Lớp: Lớp 9A1</span>
                    <span class="student-count data_siso">Sĩ số: 40</span>
                    <button class="term-btn" id="openModalBtn">Học kì II (2024-2025)</button>
                </div>

                <!-- Modal -->
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <ul>
                            <li class="semester-option active">Chọn học kì</li>
                            <li class="semester-option">Học kì II (2024-2025)</li>
                            <li class="semester-option">Học kì I (2024-2025)</li>
                            <li class="semester-option">Học kì II (2023-2024)</li>
                            <li class="semester-option">Học kì I (2023-2024)</li>
                        </ul>
                        <button class="cancelBtn">Hủy</button>
                    </div>
                </div>

                <div class="fee-container">
                    <div class="fee-row fee-header">
                        <div class="fee-item">Mức học phí</div>
                        <div class="fee-item">Đã đóng</div>
                        <div class="fee-item">Chưa đóng</div>
                    </div>

                    <div class="fee-row">
                        <div class="fee-item data_khoanhocphi">Học phí học kì I
                            <br><span>1.000.000</span>
                        </div>
                        <div class="fee-item1"><br>38 </div>
                        <div class="fee-item2"><br>2</div>
                    </div>

                    <div class="fee-row">
                        <div class="fee-item data_khoanhocphi">Bảo hiểm y tế
                            <br><span>1.000.000</span>
                        </div>
                        <div class="fee-item1" style="padding-left: 15px"><br>40
                            <i class="fa-solid fa-check" style="color: #6AB099;"></i>
                        </div>
                        <div class="fee-item2"><br>0</div>
                    </div>

                    <div class="fee-row">
                        <div class="fee-item">Bảo hiểm tai nạn
                            <br><span>3.000.000</span>
                        </div>
                        <div class="fee-item1"><br>38</div>
                        <div class="fee-item2"><br>2</div>
                    </div>
                </div>

                <!-- Hidden List Section for Chưa đóng -->
                <div id="student-list" class="student-list">
                    <h4>Danh sách chưa đóng</h4>
                    <div class="student-card">
                        <img class="data_anhdaidien" src="./img/hs.jpg" alt="avatar">
                        <div style="position: relative; right: 15px;">
                            <h4 class="data_hovatenhocsinh">Nguyễn Ngọc Ánh</h4>
                            <p>Chưa đóng học phí</p>
                            <p>Ghi chú: Khó khăn</p>
                        </div>
                        <div class="icons">
                            <a href="./call/index.php">
                                <span class="icon-phone"><i data-feather="phone" style="color: black"></i></span>
                            </a>
                            <a href="./chat/chathocsinh.php">
                                <span class="icon-chat"><i data-feather="message-square" style="color: black"></i></span>
                            </a>
                        </div>
                    </div>

                    <div class="student-card">
                        <img class="data_anhdaidien" src="./img/hs1.jpg" alt="avatar">
                        <div style="position: relative; right: 15px;">
                            <h4 class="data_hovatenhocsinh">Phạm Gia Bách</h4>
                            <p>Chưa đóng học phí</p>
                            <p>Ghi chú: Khó khăn</p>
                        </div>
                        <div class="icons">
                            <a href="./call/index.php">
                                <span class="icon-phone"><i data-feather="phone" style="color: black"></i></span>
                            </a>
                            <a href="./chat/chathocsinh.php">
                                <span class="icon-chat"><i data-feather="message-square" style="color: black"></i></span>
                            </a>
                        </div>
                    </div>
                    <!-- Add more student cards as needed -->
                </div>

                <!-- Hidden List Section for đã đóng -->
                <div id="student-listpaid" class="student-listpaid">
                    <h4>Danh sách đã đóng</h4>
                    <div class="student-card-paid">
                        <img class="data_anhdaidien" src="./img/hs.jpg" alt="avatar">
                        <div style="position: relative; right: 15px;">
                            <h4 class="data_hovatenhocsinh">Đào Ngọc Hoa</h4>
                            <p>Đã đóng học phí</p>
                        </div>
                        <div class="icons">
                            <a href="./call/index.php">
                                <span class="icon-phone"><i data-feather="phone" style="color: black"></i></span>
                            </a>
                            <a href="./chat/chathocsinh.php">
                                <span class="icon-chat"><i data-feather="message-square" style="color: black"></i></span>
                            </a>
                        </div>
                    </div>

                    <div class="student-card-paid">
                        <img class="data_anhdaidien" src="./img/hs1.jpg" alt="avatar">
                        <div style="position: relative; right: 15px;">
                            <h4 class="data_hovatenhocsinh">Hoa Thanh Sơn</h4>
                            <p>Đã đóng học phí</p>
                        </div>
                        <div class="icons">
                            <a href="./call/index.php">
                                <span class="icon-phone"><i data-feather="phone" style="color: black"></i></span>
                            </a>
                            <a href="./chat/chathocsinh.php">
                                <span class="icon-chat"><i data-feather="message-square" style="color: black"></i></span>
                            </a>
                        </div>
                    </div>
                    <!-- Add more student cards as needed -->
                </div>
            </div>

        <?php else: ?>
            <!-- Giao diện cho học sinh -->
            <center>
                <button class="btn" id="openModalBtn">Chọn học kì<i class="fa-solid fa-angle-down"></i></button>
            </center>

            <!-- Modal -->
            <div id="myModal" class="modal">
                <div class="modal-content">
                    <ul>
                        <li class="semester-option active">Chọn học kì</li>
                        <li class="semester-option">Học kì II (2024-2025)</li>
                        <li class="semester-option">Học kì I (2024-2025)</li>
                        <li class="semester-option">Học kì II (2023-2024)</li>
                        <li class="semester-option">Học kì I (2023-2024)</li>
                    </ul>
                    <button class="cancelBtn">Hủy</button>
                </div>
            </div>

            <div class="fee-container">
                <div class="fee-row fee-header">
                    <div class="fee-item">Các khoản</div>
                    <div class="fee-item">Tình trạng</div>
                    <div class="fee-item">Ghi chú</div>
                </div>

                <div class="fee-row">
                    <div class="fee-item data_khoanhocphi">Học phí học kì I
                        <br><span>1.000.000</span>
                    </div>
                    <div class="fee-item" style="color: var(--primary-color); font-weight: bold;"><br><i
                            class="fa-solid fa-check" style="color: #6AB099;"></i></div>
                    <div class="fee-item"><br>Bắt buộc</div>
                </div>

                <div class="fee-row">
                    <div class="fee-item data_khoanhocphi">Bảo hiểm y tế
                        <br><span>1.000.000</span>
                    </div>
                    <div class="fee-item" style="color: var(--primary-color); font-weight: bold;"><br><i
                            class="fa-solid fa-check" style="color: #6AB099;"></i></div>
                    <div class="fee-item"><br>Không bắt buộc</div>
                </div>

                <div class="fee-row">
                    <div class="fee-item data_khoanhocphi">Bảo hiểm tai nạn
                        <br><span>3.000.000</span>
                    </div>
                    <div class="fee-item" style="color: var(--primary-color); font-weight: bold;"><br><i
                            class="fa-solid fa-check" style="color: #6AB099;"></i></div>
                    <div class="fee-item"><br>Không bắt buộc</div>
                </div>
                <!-- Các mục khác -->
            </div>
        <?php endif; ?>
    </main>

    <footer>
        <?php
        // Giả sử $role chứa vai trò của người dùng
        $role = isset($_GET['role']) ? $_GET['role'] : 'hocsinh';

        // Kiểm tra vai trò và hiển thị nội dung tương ứng
        if ($role !== 'giaovien') {
            echo '<div class="debt-container">
                        <span class="label">Tổng công nợ :</span>
                        <span class="amount">3.000.000</span>
                    </div>';
        } elseif ($role !== 'hocsinh'){
            echo '<div class="debt-container">
                        <span class="label">Tổng:</span>
                        <span class="amount">5.000.000</span>
                    </div>';
        }
        ?>
    </footer>
</body>
<script src="./js/back.js"></script>
<script src="./js/modal.js"></script>
<script src="./js/fee.js"></script>
<script src="./node_modules/feather-icons/dist/feather.js"></script>
<script src="./node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>

</html>