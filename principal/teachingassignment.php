<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phân công giảng dạy</title>
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
    <link rel="stylesheet" href="css/phanconglichday.css">
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
            <div class="title" id="headerTitle">Phân công giảng dạy
            </div>
        </div>
    </header>

    <main>
        <div class="main_tab">
            <div class="tab_content">
                <div class="tab_timetable active" id="tab_timetableteacher">
                    <p>Thời khóa biểu giáo viên</p>
                </div>
                <div class="wall">
                    <p>|</p>
                </div>
                <div class="tab_timetable" id="tab_timetableclass">
                    <p>Thời khóa biểu theo lớp</p>
                </div>
            </div>
        </div>

        <!-- DANH SÁCH CÁC GIÁO VIÊN  -->
        <div class="main_teacher" id="listteacher">
            <div class="number_student">
                <p>Tổng số: 40</p>
                <p>Nam: 25</p>
                <p>Nữ: 15</p>
            </div>

            <div class="info_student">
                <div class="info_detail">
                    <a href="./timetableteacher.php">
                        <div class="photo_student">
                            <img src="../img/hs.jpg" alt="">
                        </div>

                        <div class="content_student">
                            <span class="name_teacher data_hovatengiaovien">Nguyễn Thị Ánh Xuân</span>
                            <span class="id_teacher data_magiaovien">Mã giáo viên: GVV12345678</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="info_student">
                <div class="info_detail">
                    <a href="./timetableteacher.php">
                        <div class="photo_student">
                            <img src="../img/hs1.jpg" alt="">
                        </div>

                        <div class="content_student">
                            <span class="name_teacher data_hovatengiaovien">Lý Bí</span>
                            <span class="id_teacher data_magiaovien">Mã giáo viên: GVS12345678</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="info_student">
                <div class="info_detail">
                    <a href="./timetableteacher.php">
                        <div class="photo_student">
                            <img src="../img/hs.jpg" alt="">
                        </div>

                        <div class="content_student">
                            <span class="name_teacher data_hovatengiaovien">Huỳnh Thị Giàu</span>
                            <span class="id_teacher data_magiaovien">Mã giáo viên: GVL12345678</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="info_student">
                <div class="info_detail">
                    <a href="./timetableteacher.php">
                        <div class="photo_student">
                            <img src="../img/hs.jpg" alt="">
                        </div>

                        <div class="content_student">
                            <span class="name_teacher data_hovatengiaovien">Hoa Mộng</span>
                            <span class="id_teacher data_magiaovien">Mã giáo viên: GVD12345678</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="info_student">
                <div class="info_detail">
                    <a href="./timetableteacher.php">
                        <div class="photo_student">
                            <img src="../img/hs1.jpg" alt="">
                        </div>

                        <div class="content_student">
                            <span class="name_teacher data_hovatengiaovien">Hoàng Minh Kha</span>
                            <span class="id_teacher data_magiaovien">Mã giáo viên: GVH12345678</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="info_student">
                <div class="info_detail">
                    <a href="./timetableteacher.php">
                        <div class="photo_student">
                            <img src="../img/hs.jpg" alt="">
                        </div>

                        <div class="content_student">
                            <span class="name_teacher data_hovatengiaovien">Đào Mộng</span>
                            <span class="id_teacher data_magiaovien">Mã giáo viên: GVH12345678</span>
                        </div>
                    </a>
                </div>
            </div>


        </div>

        <!-- DANH SÁCH CÁC KHỐI -->
        <div class="main_grades" style="display: none" id="listgrade">
            <div class="grade_content">
                <button type="button" id="class6">Khối 6</button>
                <button type="button" id="class7">Khối 7</button>
                <button type="button" id="class8">Khối 8</button>
                <button type="button" id="class9">Khối 9</button>
            </div>

            <div class="info_class" id="listclass6" style="display: none">
                <div class="class_card">
                    <a href="./timetableclass.php">
                        <span class="name_class data_lophoc">Lớp 6A1</span>
                        <span class="data_hovatengiaovien">GVCN: Nguyễn Thị Ánh Xuân</span>
                        <span class="data_siso">Sỉ số: 40</span>
                    </a>
                </div>
            </div>

            <div class="info_class" id="listclass7" style="display: none">
                <div class="class_card">
                    <a href="./timetableclass.php">
                        <span class="name_class data_lophoc">Lớp 7A1</span>
                        <span class="data_hovatengiaovien">GVCN: Nguyễn Thị Ánh Xuân</span>
                        <span class="data_siso">Sỉ số: 40</span>
                    </a>
                </div>
            </div>

            <div class="info_class" id="listclass8" style="display: none">
                <div class="class_card">
                    <a href="./timetableclass.php">
                        <span class="name_class data_lophoc">Lớp 8A1</span>
                        <span class="data_hovatengiaovien">GVCN: Nguyễn Thị Ánh Xuân</span>
                        <span class="data_siso">Sỉ số: 40</span>
                    </a>
                </div>
            </div>

            <div class="info_class" id="listclass9" style="display: none">
                <div class="class_card">
                    <a href="./timetableclass.php">
                        <span class="name_class data_lophoc">Lớp 9A1</span>
                        <span class="data_hovatengiaovien">GVCN: Nguyễn Thị Ánh Xuân</span>
                        <span class="data_siso">Sỉ số: 40</span>
                    </a>
                </div>

                <div class="class_card">
                    <a href="./timetableclass.php">
                        <span class="name_class data_lophoc">Lớp 9A2</span>
                        <span class="data_hovatengiaovien">GVCN: Trần Nguyễn Khởi</span>
                        <span class="data_siso">Sỉ số: 40</span>
                    </a>
                </div>

                <div class="class_card">
                    <a href="./timetableclass.php">
                        <span class="name_class data_lophoc">Lớp 9A3</span>
                        <span class="data_hovatengiaovien">GVCN: Huỳnh Vũ Nhi</span>
                        <span class="data_siso">Sỉ số: 40</span>
                    </a>
                </div>

                <div class="class_card">
                    <a href="./timetableclass.php">
                        <span class="name_class data_lophoc">Lớp 9A4</span>
                        <span class="data_hovatengiaovien">GVCN: Trương Tam</span>
                        <span class="data_siso">Sỉ số: 40</span>
                    </a>
                </div>
            </div>
        </div>
    </main>





</body>
<script src="../js/back.js"></script>
<script src="./js/opentabtkb.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>


</html>