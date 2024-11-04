<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin giáo viên & học sinh</title>
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="./css/thongtingvhsph.css">
</head>
<body>
    <main class="main">

        <!-- HEADER -->
        <div class="header">
            <div class="content-header">
                <div class="icon-header" onclick="goBack()">
                    <i class="ti-angle-left"></i>
                </div>
                <div class="title-header">
                    <h6>Thông tin giáo viên, phụ huynh, học sinh</h6>
                </div>
            </div>
        </div>

        <!-- TAB GIÁO VIÊN VÀ HỌC SINH  -->
        <main>
            <div class="container-fluid tab mt-2">
                <div class="container-fluid tab mt-2">
                    <div class="btn-group" role="group" aria-label="Tab buttons">
                        <button class="btn btn-tab " id="giaovien-tab" onclick="showTab('giaovien')">Giáo
                            viên</button>
                        <button class="btn btn-tab" id="hocsinh-tab" onclick="showTab('hocsinh')">Học sinh</button>
                        <button class="btn btn-tab" id="phuhuynh-tab" onclick="showTab('phuhuynh')">Phụ huynh</button>
                    </div>
                </div>
            </div>

            <!-- TAB CONTENT -->
            <div class="tab-content" id="myTabContent">
                <!-- MÔN HỌC CỦA GIÁO VIÊN -->
                <div class="tab-pane fade show active" id="giaovien" role="tabpanel" aria-labelledby="giaovien-tab">

                    <div class="subject">
                        <div class="content-subject">
                            <div class="content-subject-subjectname">
                                <button type="button" class="btn-subject"
                                    onclick="toggleSection('teacher-toan')">Toán</button>
                                <button type="button" class="btn-subject"
                                    onclick="toggleSection('teacher-tiengviet')">Tiếng
                                    Việt</button>
                                <button type="button" class="btn-subject"
                                    onclick="toggleSection('teacher-tienganh')">Tiếng
                                    Anh</button>
                                <button type="button" class="btn-subject" onclick="toggleSection('teacher-lichsu')">Lịch
                                    Sử</button>
                                <button type="button" class="btn-subject" onclick="toggleSection('teacher-diali')">Địa
                                    Lí</button>
                                <button type="button" class="btn-subject"
                                    onclick="toggleSection('teacher-khoahoc')">Khoa
                                    Học</button>
                                <button type="button" class="btn-subject"
                                    onclick="toggleSection('teacher-tnxh')">TN&XH</button>
                                <button type="button" class="btn-subject" onclick="toggleSection('teacher-amnhac')">Âm
                                    Nhạc</button>
                                <button type="button" class="btn-subject" onclick="toggleSection('teacher-mithuat')">Mĩ
                                    Thuật</button>
                                <button type="button" class="btn-subject" onclick="toggleSection('teacher-daoduc')">Đạo
                                    Đức</button>
                                <button type="button" class="btn-subject" onclick="toggleSection('teacher-tinhoc')">Tin
                                    Học</button>
                                <button type="button" class="btn-subject"
                                    onclick="toggleSection('teacher-gvcn')">GVCN</button>
                            </div>
                        </div>
                    </div>

                    <!-- THÔNG TIN GIÁO VIÊN -->
                    <div class="collapse" id="teacher-toan">
                        <div class="info-teacher">
                            <div class="info-teacher-detail">
                                <div class="info-teacher-title">
                                    <h6><strong>Họ tên: Nguyễn Thị Mai</strong></h6>
                                    <p>Môn: Toán</p>
                                    <p>Số điện thoại: 038263637</p>
                                    <p>Lớp đảm nhiệm: 1A, 2C</p>
                                    <div class="button-info-teacher">
                                        <a href="../chat/chatgiaovien.php">
                                            <button type="button" class="btn-chat">Chat</button>
                                        </a>
                                        <a href="../diemdanh/thongtindiemdanh_gv.php">
                                            <button type="button" class="btn-detail">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="info-teacher-photo">
                                    <img src="../IMG/avtteacher.png" alt="" class="info-teacher-img">
                                </div>
                            </div>
                        </div>

                        <div class="info-teacher">
                            <div class="info-teacher-detail">
                                <div class="info-teacher-title">
                                    <h6><strong>Họ tên: Nguyễn Thị Mai</strong></h6>
                                    <p>Môn: Toán</p>
                                    <p>Số điện thoại: 038263637</p>
                                    <p>Lớp đảm nhiệm: 1A, 2C</p>
                                    <div class="button-info-teacher">
                                        <a href="../chat/chatgiaovien.php">
                                            <button type="button" class="btn-chat">Chat</button>
                                        </a> <a href="../diemdanh/thongtindiemdanh_gv.php">
                                            <button type="button" class="btn-detail">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="info-teacher-photo">
                                    <img src="../IMG/avtteacher.png" alt="" class="info-teacher-img">
                                </div>
                            </div>
                        </div>

                        <div class="info-teacher">
                            <div class="info-teacher-detail">
                                <div class="info-teacher-title">
                                    <h6><strong>Họ tên: Nguyễn Thị Mai</strong></h6>
                                    <p>Môn: Toán</p>
                                    <p>Số điện thoại: 038263637</p>
                                    <p>Lớp đảm nhiệm: 1A, 2C</p>
                                    <div class="button-info-teacher">
                                        <a href="../chat/chatgiaovien.php">
                                            <button type="button" class="btn-chat">Chat</button>
                                        </a> <a href="../diemdanh/thongtindiemdanh_gv.php">
                                            <button type="button" class="btn-detail">Chi tiết</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="info-teacher-photo">
                                    <img src="../IMG/avtteacher.png" alt="" class="info-teacher-img">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- KHỐI CỦA HỌC SINH -->
                <div class="tab-pane fade" id="hocsinh" role="tabpanel" aria-labelledby="hocsinh-tab">
                    <div class="khoi">
                        <div class="content-khoi">
                            <div class="content-khoi-title">
                                <h6>Chọn Khối</h6>
                            </div>
                            <div class="content-khoi-khoiname">
                                <button type="button" class="btn-khoi" onclick="toggleSection('khoi-1')">Khối 1</button>
                                <button type="button" class="btn-khoi" onclick="toggleSection('khoi-2')">Khối 2</button>
                                <button type="button" class="btn-khoi" onclick="toggleSection('khoi-3')">Khối 3</button>
                                <button type="button" class="btn-khoi" onclick="toggleSection('khoi-4')">Khối 4</button>
                                <button type="button" class="btn-khoi" onclick="toggleSection('khoi-5')">Khối 5</button>
                            </div>
                        </div>
                    </div>

                    <div class="collapse" id="khoi-1">
                        <div class="class">
                            <div class="content-class">
                                <div class="content-class-title">
                                    <h6>Chọn Lớp</h6>
                                </div>
                                <div class="content-class-classname">
                                    <button type="button" class="btn-class"
                                        onclick="toggleSection('class-1A')">Lớp1A</button>
                                    <button type="button" class="btn-class"
                                        onclick="toggleSection('class-1B')">Lớp1B</button>
                                    <button type="button" class="btn-class"
                                        onclick="toggleSection('class-1C')">Lớp1C</button>
                                    <button type="button" class="btn-class"
                                        onclick="toggleSection('class-1D')">Lớp1D</button>
                                    <button type="button" class="btn-class"
                                        onclick="toggleSection('class-1E')">Lớp1E</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- THÔNG TIN HỌC SINH -->
                    <div class="collapse" id="class-1A">
                        <div class="infostudent-container">
                            <div class="info-student">
                                <div class="info-student-detail">
                                    <div class="info-student-title">
                                        <h6><strong>Họ tên: Từ Văn Tú</strong></h6>
                                        <p>Lớp: 1A</p>
                                        <p>Mã học sinh: 2002</p>
                                        <p>Phụ huynh: Từ Văn Hiền</p>
                                        <div class="button-info-student">
                                            <a href="../chat/chathocsinh.php">
                                                <button type="button" class="btn-chat">Chat</button>
                                            </a>
                                            <a href="./inforhs.php">
                                                <button type="button" class="btn-detail">Chi tiết</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="info-student-photo">
                                        <img src="../IMG/avtteacher.png" alt="" class="info-student-img">
                                    </div>
                                </div>
                            </div>
                            <!-- Các học sinh khác -->
                        </div>
                    </div>
                </div>

                <!-- KHỐI CỦA PHỤ HUYNH -->
                <div class="tab-pane fade" id="phuhuynh" role="tabpanel" aria-labelledby="phuhuynh-tab">
                    <div class="khoi">
                        <div class="content-khoi">
                            <div class="content-khoi-title">
                                <h6>Chọn Khối</h6>
                            </div>
                            <div class="content-khoi-khoiname">
                                <button type="button" class="btn-khoi" onclick="toggleSection('khoiph-1')">Khối
                                    1</button>
                                <button type="button" class="btn-khoi" onclick="toggleSection('khoiph-2')">Khối
                                    2</button>
                                <button type="button" class="btn-khoi" onclick="toggleSection('khoiph-3')">Khối
                                    3</button>
                                <button type="button" class="btn-khoi" onclick="toggleSection('khoiph-4')">Khối
                                    4</button>
                                <button type="button" class="btn-khoi" onclick="toggleSection('khoiph-5')">Khối
                                    5</button>
                            </div>
                        </div>
                    </div>

                    <div class="collapse" id="khoiph-1">
                        <div class="class">
                            <div class="content-class">
                                <div class="content-class-title">
                                    <h6>Chọn Lớp</h6>
                                </div>
                                <div class="content-class-classname">
                                    <button type="button" class="btn-class"
                                        onclick="toggleSection('ph-1A')">Lớp1A</button>
                                    <button type="button" class="btn-class"
                                        onclick="toggleSection('ph-1B')">Lớp1B</button>
                                    <button type="button" class="btn-class"
                                        onclick="toggleSection('ph-1C')">Lớp1C</button>
                                    <button type="button" class="btn-class"
                                        onclick="toggleSection('ph-1D')">Lớp1D</button>
                                    <button type="button" class="btn-class"
                                        onclick="toggleSection('ph-1E')">Lớp1E</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- THÔNG TIN PHỤ HUYNH -->
                    <div class="collapse" id="ph-1A">
                        <div class="infostudent-container">
                            <div class="info-student">
                                <div class="info-student-detail">
                                    <div class="info-student-title">
                                        <h6><strong>Họ tên: Nguyễn Nam</strong></h6>
                                        <p>Số điện thoại: 028336262</p>
                                        <p>Địa chỉ: Bến Tre</p>
                                        <p>Phụ huynh của: Trần Nam</p>
                                        <div class="button-info-student">
                                            <a href="../chat/chat.php">
                                                <button type="button" class="btn-chat">Chat</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="info-student-photo">
                                        <img src="../IMG/avtteacher.png" alt="" class="info-student-img">
                                    </div>
                                </div>
                            </div>
                            <!-- Các phụ huynh khác -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
        </div>

        <script>
            function showTab(tabName) {
                // Ẩn tất cả các tab
                const tabs = document.querySelectorAll('.tab-pane');
                tabs.forEach(tab => {
                    tab.classList.remove('show', 'active');
                });

                // Ẩn tất cả các phần nội dung con (collapsible sections)
                const collapsibleSections = document.querySelectorAll('.collapse');
                collapsibleSections.forEach(section => {
                    section.classList.remove('show');
                });

                // Hiển thị tab được chọn
                const selectedTab = document.getElementById(tabName);
                selectedTab.classList.add('show', 'active');

                // Đặt trạng thái active cho nút bấm
                const buttons = document.querySelectorAll('.btn-tab');
                buttons.forEach(button => {
                    button.classList.remove('active');
                });

                // Đặt active cho nút tương ứng
                const activeButton = document.getElementById(`${tabName}-tab`);
                activeButton.classList.add('active');
            }
            // Đặt mặc định nút "Giáo viên" là active khi trang load
            document.addEventListener("DOMContentLoaded", function () {
                document.getElementById("giaovien-tab").click();
            });

            // Đặt mặc định nút "Giáo viên" là active khi trang load
            document.addEventListener("DOMContentLoaded", function () {
                document.getElementById("giaovien-tab").classList.add("active");
            });


            function toggleSection(sectionId) {
                const section = document.getElementById(sectionId);
                if (section.classList.contains('show')) {
                    section.classList.remove('show');
                } else {
                    section.classList.add('show');
                }
            }
        </script>

</body>
<script src="../js/back.js"></script>

</html>