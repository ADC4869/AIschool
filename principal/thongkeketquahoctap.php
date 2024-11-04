<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin giáo viên</title>
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
    <link rel="stylesheet" href="../thongtingiaovienhocsinh/css/infoteacherstudent.css">
    <style>
    .student-list .gioi {
        background-color: #B0DEFF;
    }
    .student-list .kha {
        background-color: #76C4AA;
    }
    .student-list .trungbinh {
        background-color: #FFF48F;
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
            <div class="title">Thống kê kết quả học tập</div>
        </div>
    </header>
    <!-- Thông tin giáo viên -->
    <main>


        <!-- Thống kê KQHT -->
        <div class="container" style="margin-top: 10px">

            <div class="class_name" style="width: 100%; display: flex; justify-content: center; align-item: center;">
                <span>Lớp: 9A1</span>
            </div>

            <div class="legend-container">
                <h3>Học lực</h3>

                <div class="legend-item" onclick="showContent('gioi')">
                    <div class="legend-color" style="background-color: #B0DEFF;"></div>
                    Giỏi: 75%
                </div>
                <div class="legend-item" onclick="showContent('kha')">
                    <div class="legend-color" style="background-color: #76C4AA;"></div>
                    Khá: 15%
                </div>
                <div class="legend-item" onclick="showContent('trung-binh')">
                    <div class="legend-color" style="background-color: #FFF48F;"></div>
                    Trung bình: 5%
                </div>
                <div class="legend-item" onclick="showContent('yeu')">
                    <div class="legend-color" style="background-color: #E18786;"></div>
                    Yếu: 0%
                </div>
            </div>

            <!-- Biểu đồ -->
            <div class="chart-container">
                <canvas id="myPieChart"></canvas>
            </div>
        </div>






        <div id="class-list" style="padding: 0 10px">
            <div class="class-list-title "
                style="width: 100%; display: flex; align-item: center; justify-content: flex-start;">
                <h2 style="width: 100%; padding: 0 15px">Danh sách lớp 9A1</h2>
            </div>
            <div class="student-list">
                <div class="student-card gioi">
                    <div class="student-left">
                        <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                            <img src="../img/hs.jpg" alt="Học sinh 1">
                        </a>
                        <div class="icons">
                            <a href="../call/index.php">
                                <i data-feather="phone" style="color: #5B6998"></i>
                            </a>
                            <a href="../chat/chathocsinh.php">
                                <i data-feather="message-square" style="color: #5B6998"></i>
                            </a>
                        </div>
                    </div>
                    <div class="student-info">
                        <h4 class="data_hovatenhocsinh">Họ tên: Nguyễn Thị Mỹ Anh</h4>
                        <p class="data_ngaysinh">Ngày sinh: 01/01/2000</p>
                        <p class="data_diachi">Địa chỉ: 12 Ấp A, Xã Phú Hòa</p>
                        <p class="data_sodienthoai">SDT liên lạc: 0123456789</p>
                        <p class="data_hovatenphuhuynh">Phụ huynh: Nguyễn Hoa</p>
                    </div>

                    <div class="icons1" onclick="openModal()">
                        <i data-feather="edit-3" style="color: #5B6998"></i>
                    </div>
                </div>


                <div class="student-card kha">
                    <div class="student-left">
                        <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                            <img src="../img/hs1.jpg" alt="Học sinh 2">
                        </a>
                        <div class="icons">
                            <a href="../call/index.php">
                                <i data-feather="phone" style="color: #5B6998"></i>
                            </a>
                            <a href="../chat/chathocsinh.php">
                                <i data-feather="message-square" style="color: #5B6998"></i>
                            </a>
                        </div>
                    </div>
                    <div class="student-info">
                        <h4 class="data_hovatenhocsinh">Họ tên: Trần Văn Giàu</h4>
                        <p class="data_ngaysinh">Ngày sinh: 01/02/2000</p>
                        <p class="data_diachi">Địa chỉ: 12 Ấp B, Xã Phú Hòa</p>
                        <p class="data_sodienthoai">SDT liên lạc: 0133456789</p>
                        <p class="data_hovatenphuhuynh">Phụ huynh: Nguyễn Du</p>
                    </div>
                    <div class="icons1" onclick="openModal()">
                        <i data-feather="edit-3" style="color: #5B6998"></i>
                    </div>
                </div>


                <div class="student-card trungbinh">
                    <div class="student-left">
                        <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                            <img src="../img/hs.jpg" alt="Học sinh 2">
                        </a>
                        <div class="icons">
                            <a href="../call/index.php">
                                <i data-feather="phone" style="color: #5B6998"></i>
                            </a>
                            <a href="../chat/chathocsinh.php">
                                <i data-feather="message-square" style="color: #5B6998"></i>
                            </a>
                        </div>
                    </div>
                    <div class="student-info">
                        <h4 class="data_hovatenhocssinh">Họ tên: Nguyễn Thị Anh Thư</h4>
                        <p class="data_ngaysinh">Ngày sinh: 01/03/2000</p>
                        <p class="data_diachi">Địa chỉ: 12 Ấp C, Xã Phú Hòa</p>
                        <p class="data_sodienthoai">SĐT liên lạc: 0143456789</p>
                        <p class="data_hovatenphuhuynh">Phụ huynh: Nguyễn Hoàng</p>
                    </div>
                    <div class="icons1" onclick="openModal()">
                        <i data-feather="edit-3" style="color: #5B6998"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Học lực giỏi -->
        <div id="gioi" class="hidden-content" style="padding: 0 10px">
            <div class="class-list-title "
                style="width: 100%; display: flex; align-item: center; justify-content: flex-start;">
                <h2 style="width: 100%; padding: 0 15px">Số học sinh giỏi: 30</h2>
            </div>
            <div class="student-list">
                <!-- Học sinh 1 -->
                <div class="student-card gioi">
                    <div class="student-left">
                        <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                            <img src="../img/hs.jpg" alt="Học sinh 1">
                        </a>
                        <div class="icons">
                            <a href="../call/index.php">
                                <i data-feather="phone" style="color: #5B6998"></i>
                            </a>
                            <a href="../chat/chathocsinh.php">
                                <i data-feather="message-square" style="color: #5B6998"></i>
                            </a>
                        </div>
                    </div>
                    <div class="student-info">
                        <h4 class="data_hovatenhocsinh">Họ tên: Nguyễn Thị Mỹ Anh</h4>
                        <p class="data_hang">Hạng: 3</p>
                        <p class="data_diemtrungbinh">Trung bình: 9.65</p>
                        <p class="data_hocluc">Học lực: Giỏi</p>
                        <p class="data_hanhkiem">Hạnh kiểm: Tốt</p>
                    </div>

                    <div class="icons1" onclick="openModal()">
                        <i data-feather="edit-3" style="color: #5B6998"></i>
                    </div>
                </div>

                <!-- Học sinh 2 -->
                <div class="student-card gioi">
                    <div class="student-left">
                        <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                            <img src="../img/hs1.jpg" alt="Học sinh 2">
                        </a>
                        <div class="icons">
                            <a href="../call/index.php">
                                <i data-feather="phone" style="color: #5B6998"></i>
                            </a>
                            <a href="../chat/chathocsinh.php">
                                <i data-feather="message-square" style="color: #5B6998"></i>
                            </a>
                        </div>
                    </div>
                    <div class="student-info">
                        <h4 class="data_hovatenhocsinh">Họ tên: Nguyễn Minh Khoa</h4>
                        <p class="data_hang">Hạng: 4</p>
                        <p class="data_diemtrungbinh">Trung bình: 9.6</p>
                        <p class="data_hocluc">Học lực: Giỏi</p>
                        <p class="data_hanhkiem">Hạnh kiểm: Tốt</p>
                    </div>
                    <div class="icons1" onclick="openModal()">
                        <i data-feather="edit-3" style="color: #5B6998"></i>
                    </div>
                </div>

                <!-- Học sinh 3 -->
                <div class="student-card gioi">
                    <div class="student-left">
                        <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                            <img src="../img/hs.jpg" alt="Học sinh 2">
                        </a>
                        <div class="icons">
                            <a href="../call/index.php">
                                <i data-feather="phone" style="color: #5B6998"></i>
                            </a>
                            <a href="../chat/chathocsinh.php">
                                <i data-feather="message-square" style="color: #5B6998"></i>
                            </a>
                        </div>
                    </div>
                    <div class="student-info">
                        <h4 class="data_hovatenhocsinh">Họ tên: Nguyễn Khoa Điềm</h4>
                        <p class="data_hang">Hạng: 5</p>
                        <p class="data_diemtrungbinh">Trung bình: 9.5</p>
                        <p class="data_hocluc">Học lực: Giỏi</p>
                        <p class="data_hanhkiem">Hạnh kiểm: Tốt</p>
                    </div>
                    <div class="icons1" onclick="openModal()">
                        <i data-feather="edit-3" style="color: #5B6998"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Học lực khá -->
        <div id="kha" class="hidden-content" style="padding: 0 10px">
            <div class="class-list-title "
                style="width: 100%; display: flex; align-item: center; justify-content: flex-start;">
                <h2 style="width: 100%; padding: 0 15px">Số học sinh khá: 6</h2>
            </div>
            <div class="student-list">
                <!-- Học sinh 1 -->
                <div class="student-card kha">
                    <div class="student-left">
                        <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                            <img src="../img/hs.jpg" alt="Học sinh 1">
                        </a>
                        <div class="icons">
                            <a href="../call/index.php">
                                <i data-feather="phone" style="color: #5B6998"></i>
                            </a>
                            <a href="../chat/chathocsinh.php">
                                <i data-feather="message-square" style="color: #5B6998"></i>
                            </a>
                        </div>
                    </div>
                    <div class="student-info">
                        <h4 class="data_hovatenhocsinh">Họ tên: Nguyễn Lan Hương</h4>
                        <p class="data_hang">Hạng: 11</p>
                        <p class="data_diemtrungbinh">Trung bình: 8.8</p>
                        <p class="data_hocluc">Học lực: Khá</p>
                        <p class="data_hanhkiem">Hạnh kiểm: Tốt</p>
                    </div>

                    <div class="icons1" onclick="openModal()">
                        <i data-feather="edit-3" style="color: #5B6998"></i>
                    </div>
                </div>

                <!-- Học sinh 2 -->
                <div class="student-card kha">
                    <div class="student-left">
                        <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                            <img src="../img/hs1.jpg" alt="Học sinh 2">
                        </a>
                        <div class="icons">
                            <a href="../call/index.php">
                                <i data-feather="phone" style="color: #5B6998"></i>
                            </a>
                            <a href="../chat/chathocsinh.php">
                                <i data-feather="message-square" style="color: #5B6998"></i>
                            </a>
                        </div>
                    </div>
                    <div class="student-info">
                        <h4 class="data_hovatenhocsinh">Họ tên: Trần Đức Minh</h4>
                        <p class="data_hang">Hạng: 12</p>
                        <p class="data_diemtrungbinh">Trung bình: 8.65</p>
                        <p class="data_hocluc">Học lực: Khá</p>
                        <p class="data_hanhkiem">Hạnh kiểm: Tốt</p>
                    </div>
                    <div class="icons1" onclick="openModal()">
                        <i data-feather="edit-3" style="color: #5B6998"></i>
                    </div>
                </div>

                <!-- Học sinh 3 -->
                <div class="student-card kha">
                    <div class="student-left">
                        <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                            <img src="../img/hs.jpg" alt="Học sinh 2">
                        </a>
                        <div class="icons">
                            <i class="fa fa-phone" style="position: relative; right: 10px;"></i>
                            <i class="fa-solid fa-message"></i>
                        </div>
                    </div>
                    <div class="student-info">
                        <h4 class="data_hovatenhocsinh">Họ tên: Nguyễn Minh Anh</h4>
                        <p class="data_hang">Hạng: 13</p>
                        <p class="data_diemtrungbinh">Trung bình: 8.5</p>
                        <p class="data_hocluc">Học lực: Khá</p>
                        <p class="data_hanhkiem">Hạnh kiểm: Tốt</p>
                    </div>
                    <div class="icons1" onclick="openModal()">
                        <i data-feather="edit-3" style="color: #5B6998"></i>
                    </div>
                </div>

                <!-- Học sinh 4 -->
                <div class="student-card kha">
                    <div class="student-left">
                        <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                            <img src="../img/hs1.jpg" alt="Học sinh 2">
                        </a>
                        <div class="icons">
                            <a href="../call/index.php">
                                <i data-feather="phone" style="color: #5B6998"></i>
                            </a>
                            <a href="../chat/chathocsinh.php">
                                <i data-feather="message-square" style="color: #5B6998"></i>
                            </a>
                        </div>
                    </div>
                    <div class="student-info">
                        <h4 class="data_hovatenhocsinh">Họ tên: Trần Đức Mẫn</h4>
                        <p class="data_hang">Hạng: 14</p>
                        <p class="data_diemtrungbinh">Trung bình: 8.4</p>
                        <p class="data_hocluc">Học lực: Khá</p>
                        <p class="data_hanhkiem">Hạnh kiểm: Tốt</p>
                    </div>
                    <div class="icons1" onclick="openModal()">
                        <i data-feather="edit-3" style="color: #5B6998"></i>
                    </div>
                </div>

                <!-- Học sinh 5 -->
                <div class="student-card kha">
                    <div class="student-left">
                        <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                            <img src="../img/hs.jpg" alt="Học sinh 2">
                        </a>
                        <div class="icons">
                            <a href="../call/index.php">
                                <i data-feather="phone" style="color: #5B6998"></i>
                            </a>
                            <a href="../chat/chathocsinh.php">
                                <i data-feather="message-square" style="color: #5B6998"></i>
                            </a>
                        </div>
                    </div>
                    <div class="student-info">
                        <h4 class="data_hovatenhocsinh">Họ tên: Nguyễn Lê Thúy Vy</h4>
                        <p class="data_hang">Hạng: 15</p>
                        <p class="data_diemtrungbinh">Trung bình: 8.3</p>
                        <p class="data_hocluc">Học lực: Khá</p>
                        <p class="data_hanhkiem">Hạnh kiểm: Tốt</p>
                    </div>
                    <div class="icons1" onclick="openModal()">
                        <i data-feather="edit-3" style="color: #5B6998"></i>
                    </div>
                </div>

                <!-- Học sinh 6 -->
                <div class="student-card kha">
                    <div class="student-left">
                        <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                            <img src="../img/hs1.jpg" alt="Học sinh 2">
                        </a>
                        <div class="icons">
                            <a href="../call/index.php">
                                <i data-feather="phone" style="color: #5B6998"></i>
                            </a>
                            <a href="../chat/chathocsinh.php">
                                <i data-feather="message-square" style="color: #5B6998"></i>
                            </a>
                        </div>
                    </div>
                    <div class="student-info">
                        <h4 class="data_hovatenhocsinh">Họ tên: Trần Anh Tuấn</h4>
                        <p class="data_hang">Hạng: 16</p>
                        <p class="data_diemtrungbinh">Trung bình: 8.2</p>
                        <p class="data_hocluc">Học lực: Khá</p>
                        <p class="data_hanhkiem">Hạnh kiểm: Tốt</p>
                    </div>
                    <div class="icons1" onclick="openModal()">
                        <i data-feather="edit-3" style="color: #5B6998"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Học lực trung bình -->
        <div id="trung-binh" class="hidden-content" style="padding: 0 10px">
        <div class="class-list-title " style="width: 100%; display: flex; align-item: center; justify-content: flex-start;">
                <h2 style="width: 100%; padding: 0 15px">Số học sinh trung bình: 2</h2>
            </div>
            <div class="student-list">
                <!-- Học sinh 1 -->
                <div class="student-card trungbinh">
                    <div class="student-left">
                        <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                            <img src="../img/hs.jpg" alt="Học sinh 1">
                        </a>
                        <div class="icons">
                            <a href="../call/index.php">
                                <i data-feather="phone" style="color: #5B6998"></i>
                            </a>
                            <a href="../chat/chathocsinh.php">
                                <i data-feather="message-square" style="color: #5B6998"></i>
                            </a>
                        </div>
                    </div>
                    <div class="student-info">
                        <h4 class="data_hovatenhocsinh">Họ tên: Đào Gia Hảo</h4>
                        <p class="data_hang">Hạng: 28</p>
                        <p class="data_diemtrungbinh">Trung bình: 6.3</p>
                        <p class="data_hocluc">Học lực: Trung Bình</p>
                        <p class="data_hanhkiem">Hạnh kiểm: Tốt</p>
                    </div>

                    <div class="icons1" onclick="openModal()">
                        <i data-feather="edit-3" style="color: #5B6998"></i>
                    </div>
                </div>

                <!-- Học sinh 2 -->
                <div class="student-card trungbinh">
                    <div class="student-left">
                        <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                            <img src="../img/hs1.jpg" alt="Học sinh 2">
                        </a>
                        <div class="icons">
                            <a href="../call/index.php">
                                <i data-feather="phone" style="color: #5B6998"></i>
                            </a>
                            <a href="../chat/chathocsinh.php">
                                <i data-feather="message-square" style="color: #5B6998"></i>
                            </a>
                        </div>
                    </div>
                    <div class="student-info">
                        <h4 class="data_hovatenhocsinh">Họ tên: Phương Chí Hùng</h4>
                        <p class="data_hang">Hạng: 29</p>
                        <p class="data_diemtrungbinh">Trung bình: 6.2</p>
                        <p class="data_hocluc">Học lực: Trung bình</p>
                        <p class="data_hanhkiem">Hạnh kiểm: Tốt</p>
                    </div>
                    <div class="icons1" onclick="openModal()">
                        <i data-feather="edit-3" style="color: #5B6998"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Học sinh yếu -->
        <div id="yeu" class="hidden-content" style="padding: 0 10px">
        <div class="class-list-title " style="width: 100%; display: flex; align-item: center; justify-content: flex-start;">
                <h2 style="width: 100%; padding: 0 15px">Số học sinh yếu: 0</h2>
            </div>
            <div class="student-list">

            </div>
        </div>
        </div>
        </div>

        <!-- Tình trạng chuyên cần -->
        <div id="tab2" class="tab-content">
            <div class="chart-container1">
                <div class="chart-header">
                    <h2>Chuyên cần theo ngày</h2>
                    <input type="date" id="dailyDate">
                </div>
                <canvas id="dailyChart"></canvas>
            </div>

            <div class="chart-container1">
                <div class="chart-header">
                    <h2>Chuyên cần theo tuần</h2>
                    <input type="date" id="weeklyDate">
                </div>
                <canvas id="weeklyChart"></canvas>
            </div>
        </div>

        <!-- MODAL GHI CHÚ -->
        <div class="modal fade hidden" id="detailModal">
            <div class="modal-dialog modal__ghichu">
                <div class="modal-content">
                    <div class="modal-header modal__header">
                        <h3 class="header__title">Ghi chú</h3>
                    </div>
                    <div class="modal-body modal__body">
                        <!-- Chỉnh lại class ở đây nếu cần -->
                        <textarea class="note__input input_ghichu" placeholder="Nhập ghi chú..."></textarea>
                    </div>
                    <div class="modal-footer modal__footer">
                        <button type="button" class="btn__save" onclick="saveNote()">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="../js/back.js"></script>
<script src="./js/tab.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../thongtingiaovienhocsinh/js/chart.js"></script>
<script src="../thongtingiaovienhocsinh/js/hocluc.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>
<script>
    function openModal() {
        document.getElementById("detailModal").classList.remove("hidden");
    }

    function closeModal() {
        document.getElementById("detailModal").classList.add("hidden");
    }

    function saveNote() {
        // Lấy giá trị từ ô ghi chú
        const noteInput = document.querySelector(".note__input");

        // Xóa nội dung của ô ghi chú sau khi lưu
        noteInput.value = "";

        // Đóng modal
        closeModal();
    }
</script>

</html>