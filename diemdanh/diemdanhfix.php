<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Điểm danh</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="./css/diemdanhfix.css">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="main">
        <!-- HEADER -->
        <div class="header">
            <div class="content-header">
                <div class="icon-header" onclick="goBack()">
                    <i class="ti-angle-left"></i>
                </div>
                <div class="title-header">Báo cáo điểm danh</div>
            </div>
        </div>
        <div class="main__body">
            <main>
                <!-- LỊCH -->
                <div class="content">
                    <div class="content-calendar">
                        <label for="calendar"></label>
                        <input type="date" class="calendar" name="calendar">
                    </div>

                    <!-- TỔNG QUAN -->
                    <div class="content-tongquan">
                        <div class="container-tongquan">
                            <div class="top-tongquan">
                                <div class="circle">
                                    <div class="content-circle">
                                        <p class="tongso">Tổng số</p>
                                        <p class="so-tongso">40</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bottom-tongquan">
                                <div class="circle">
                                    <div class="content-circle">
                                        <p class="hiendien">Hiện diện</p>
                                        <p class="so-hiendien">36</p>
                                    </div>
                                </div>
                                <div class="circle">
                                    <div class="content-circle">
                                        <p class="tre">Trễ</p>
                                        <p class="so-tre">2</p>
                                    </div>
                                </div>
                                <div class="circle">
                                    <div class="content-circle">
                                        <p class="vang">Vắng</p>
                                        <p class="so-vang">4</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- KHỐI -->
                    <div class="content-khoi">
                        <button type="button" class="btn-khoi" onclick="toggleClass('class-1')">Khối 1</button>
                        <button type="button" class="btn-khoi" onclick="toggleClass('class-2')">Khối 2</button>
                        <button type="button" class="btn-khoi" onclick="toggleClass('class-3')">Khối 3</button>
                        <button type="button" class="btn-khoi" onclick="toggleClass('class-4')">Khối 4</button>
                        <button type="button" class="btn-khoi" onclick="toggleClass('class-5')">Khối 5</button>
                        <button type="button" class="btn-khoi" onclick="toggleClass('class-6')">Khối 6</button>
                        <button type="button" class="btn-khoi" onclick="toggleClass('class-7')">Khối 7</button>
                        <button type="button" class="btn-khoi" onclick="toggleClass('class-8')">Khối 8</button>
                    </div>

                    <!-- JS -->
                    <script>
                        function toggleClass(classId) {
                            document.querySelectorAll('.collapse').forEach(function(element) {
                                if (element.id !== classId) {
                                    element.classList.remove('show');
                                }
                            });

                            var element = document.getElementById(classId);
                            if (element.classList.contains('show')) {
                                element.classList.remove('show');
                            } else {
                                element.classList.add('show');
                            }
                        }
                    </script>

                    <!-- LỚP HỌC  -->
                    <div class="content-class">
                        <div class="collapse" id="class-1">
                            <div class="two-class">
                                <div class="class">
                                    <div class="title-class">
                                        <h6>Lớp 1A</h6>
                                    </div>
                                    <div class="body-class">
                                        <div class="class-photo">
                                            <img src="../img/avtteacher.png" class="img-class" alt="Arnh lớp">
                                        </div>
                                        <div class="class-content">
                                            <p class="teacher-name data_hovatengiaovien">GVCN: <span>Nguyễn Thị Mai</span></p>
                                            <div class="class-siso">
                                                <p>SS: <span>40</span></p>
                                                <p>HD: <span>36</span></p>
                                                <p>Trễ: <span>2</span></p>
                                                <p>Vắng: <span>4</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-class">
                                        <button type="button" class="btn-diemdanh"><a href="./trangdiemdanhlop.php"
                                                style="text-decoration: none; color: black;">Điểm danh</a></button>
                                        <button type="button" class="btn-thongtinlop" data-bs-toggle="modal"
                                            data-bs-target="#infoModal-1a">Thông tin lớp</button>
                                    </div>
                                </div>

                                <div class="class">
                                    <div class="title-class">
                                        <h6>Lớp 1B</h6>
                                    </div>
                                    <div class="body-class">
                                        <div class="class-photo">
                                            <img src="../img/avtteacher.png" class="img-class" alt="Arnh lớp">
                                        </div>
                                        <div class="class-content">
                                            <p class="teacher-name">GVCN: <span>Nguyễn Thị Lan</span></p>
                                            <div class="class-siso">
                                                <p>SS: <span>40</span></p>
                                                <p>HD: <span>36</span></p>
                                                <p>Trễ: <span>2</span></p>
                                                <p>Vắng: <span>4</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-class">
                                        <button type="button" class="btn-diemdanh">Điểm danh</button>
                                        <button type="button" class="btn-thongtinlop">Thông tin lớp</button>
                                    </div>
                                </div>

                                <div class="class">
                                    <div class="title-class">
                                        <h6>Lớp 1A</h6>
                                    </div>
                                    <div class="body-class">
                                        <div class="class-photo">
                                            <img src="../img/avtteacher.png" class="img-class" alt="Arnh lớp">
                                        </div>
                                        <div class="class-content">
                                            <p class="teacher-name">GVCN: <span>Nguyễn Thị Mai</span></p>
                                            <div class="class-siso">
                                                <p>SS: <span>40</span></p>
                                                <p>HD: <span>36</span></p>
                                                <p>Trễ: <span>2</span></p>
                                                <p>Vắng: <span>4</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-class">
                                        <button type="button" class="btn-diemdanh">Điểm danh</button>
                                        <button type="button" class="btn-thongtinlop">Thông tin lớp</button>
                                    </div>
                                </div>

                                <div class="class">
                                    <div class="title-class">
                                        <h6>Lớp 1A</h6>
                                    </div>
                                    <div class="body-class">
                                        <div class="class-photo">
                                            <img src="../img/avtteacher.png" class="img-class" alt="Arnh lớp">
                                        </div>
                                        <div class="class-content">
                                            <p class="teacher-name">GVCN: <span>Nguyễn Thị Mai</span></p>
                                            <div class="class-siso">
                                                <p>SS: <span>40</span></p>
                                                <p>HD: <span>36</span></p>
                                                <p>Trễ: <span>2</span></p>
                                                <p>Vắng: <span>4</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-class">
                                        <button type="button" class="btn-diemdanh">Điểm danh</button>
                                        <button type="button" class="btn-thongtinlop">Thông tin lớp</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="collapse" id="class-2">
                            <div class="two-class">
                                <div class="class">
                                    <div class="title-class">
                                        <h6>Lớp 2A</h6>
                                    </div>
                                    <div class="body-class">
                                        <div class="class-photo">
                                            <img src="../img/avtteacher.png" class="img-class" alt="Arnh lớp">
                                        </div>
                                        <div class="class-content">
                                            <p class="teacher-name">GVCN: <span>Nguyễn Thị Mai</span></p>
                                            <div class="class-siso">
                                                <p>SS: <span>40</span></p>
                                                <p>HD: <span>36</span></p>
                                                <p>Trễ: <span>2</span></p>
                                                <p>Vắng: <span>4</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer-class">
                                        <button type="button" class="btn-diemdanh"><a href="./trangdiemdanhlop.php"
                                                style="text-decoration: none; color: black;">Điểm danh</a></button>
                                        <button type="button" class="btn-thongtinlop" data-bs-toggle="modal"
                                            data-bs-target="#infoModal-1a">Thông tin lớp</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MODAL THÔNG TIN LỚP HỌC -->
                    <div class="modal fade" id="infoModal-1a" tabindex="-1" aria-labelledby="infoModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5>Thông tin lớp 1A</h5>
                                </div>
                                <div class="modal-body">
                                    <!-- Thông tin lớp học -->
                                    <div class="info-class-modal">
                                        <div class="teacher-photo-modal">
                                            <img src="../img/avtteacher.png" class="img-teacher-modal" alt="Anh giao vien">
                                        </div>
                                        <div class="info-class-teacher">
                                            <div class="top-info-class">
                                                <p class="teacher-name-modal">GVCN: <span>Nguyễn Thị Mai</span></p>
                                            </div>
                                            <div class="bottom-info-class">
                                                <p>SS: <span class="ss-number">40</span></p>
                                                <p>HD: <span class="hd-number">36</span></p>
                                                <p>Trễ: <span class="tre-number">2</span></p>
                                                <p>Vắng: <span class="vang-number">4</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Bảng thông tin các giáo viên dạy -->
                                    <table class="table">
                                        <thead class="table-header">
                                            <tr>
                                                <th style="background-color: #B0DEFF">STT</th>
                                                <th style="background-color: #B0DEFF" scope="col">Môn học</th>
                                                <th style="background-color: #B0DEFF" scope="col">Tên Giáo Viên</th>
                                                <th style="background-color: #B0DEFF">Ghi chú</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-body">
                                            <tr class="gvcn">
                                                <td style="background-color: pink">01</td>
                                                <td style="background-color: pink">Toán</td>
                                                <td style="background-color: pink">Nguyễn Thị Mai</td>
                                                <td style="background-color: pink">Giáo viên chủ nhiệm</td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td>Văn</td>
                                                <td>Nguyễn Văn A</td>
                                                <td>Giáo viên bộ môn</td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td>Tiếng Anh</td>
                                                <td>Phạm Thị B</td>
                                                <td>Giáo viên bộ môn</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </div>
        </main>
</body>
<script src="../js/back.js"></script>
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>

</html>