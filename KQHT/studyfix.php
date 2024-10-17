<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả học tập</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="./css/studyfix.css">
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
            <div class="title">Kết Quả Học Tập</div>
        </div>

        <div class="subheader">
            <div class="info__student">
                <div class="photo">
                    <img src="../img/hs1.jpg" alt="Avatar" class="student-avatar">
                </div>
            </div>
            <div class="infodetail">
                <p class="student-name"><?php echo htmlspecialchars($student_name); ?></p>
                <p class="student-class"><?php echo htmlspecialchars($class_name); ?></p>
                <p>Điểm trung bình: <span style="color: green">8.8</span></p>
            </div>


        </div>

        <div class="button__header">
            <div class="button__year">
                <div id="yearDisplay" class="year" onclick="openDialog()">Chọn năm học</div>
            </div>
            <div class="button__semester">
                <div class="semester" id="openModalBtn">Chọn học kì</div>
            </div>
        </div>


    </header>

    <main>
        <div class="table-container">

            <div id="yearDialog" class="dialog">
                <div class="dialog-content">
                    <h3>Năm học</h3>
                    <ul>
                        <li onclick="selectYear('2024-2025')">2024-2025</li>
                        <li onclick="selectYear('2023-2024')">2023-2024</li>
                        <li onclick="selectYear('2022-2023')">2022-2023</li>
                        <li onclick="selectYear('2021-2022')">2021-2022</li>
                    </ul>
                    <button onclick="closeDialog()" class="cancel-btn">Hủy</button>
                </div>
            </div>

            <div id="myModal" class="modal">
                <div class="modal-content">
                    <h3>Học kì</h3>
                    <ul>
                        <li class="semester-option">Học kì: I</li>
                        <li class="semester-option">Học kì: II</li>
                        <li class="semester-option">Cả năm</li>
                    </ul>
                    <button class="cancelBtn">Hủy</button>
                </div>
            </div>

            <table class="fixed-column">
                <thead>
                    <tr>
                        <th>Môn học</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tổng kết</td>
                    </tr>
                    <tr>
                        <td>Điểm 15'</td>
                    </tr>
                    <tr>
                        <td>Điểm 1 tiết</td>
                    </tr>
                    <tr>
                        <td>Điểm GK</td>
                    </tr>
                    <tr>
                        <td>Điểm CK</td>
                    </tr>
                </tbody>
            </table>

            <div class="scrollable-columns">
                <table>
                    <thead>
                        <tr>
                            <th>Ngữ Văn</th>
                            <th>Toán Học</th>
                            <th>Tiếng Anh</th>
                            <th>Lịch Sử</th>
                            <th>Địa Lý</th>
                            <th>Hóa học</th>
                            <th>Sinh học</th>
                            <th>Vật Lý</th>
                            <th>Tin học</th>
                            <!-- Add more subjects as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="grades">10</div>
                            </td>

                            <!-- Tổng kết môn toán -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn địa lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="grades" style="background-color: var(--peachy-color);">5</div>
                                <div class="grades">10</div>
                                <div class="grades">10</div>
                            </td>
                            <!-- Tổng kết môn toán -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn địa lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="grades">10</div>
                            </td>
                            <!-- Tổng kết môn toán -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn địa lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="grades">10</div>
                            </td>
                            <!-- Tổng kết môn toán -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn địa lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="grades">10</div>
                            </td>
                            <!-- Tổng kết môn toán -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn địa lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />
                                <div class="grades-wrapper"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Modal Structure -->
            <div id="gradeModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Chi tiết bài kiểm tra</h2>
                    <div class="modal-body">
                        <div class="info-row">
                            <div class="info">
                                <p>Trường: Lê Hồng Phong</p>
                                <p class="data_lophoc">Lớp: 9A1</p>
                                <p class="data_hovatenhocsinh">Tên: Nguyễn Thị Yến Loan</p>
                            </div>
                            <div class="info">
                                <p>Ngày: 14/08/2024</p>
                                <p>Môn: Toán</p>
                                <p>Thời gian: 15’</p>
                            </div>
                        </div>
                        <div class="grade-review">
                            <div class="grade">
                                <div class="grades">10</div><br>
                                <img id="image" src="../img/header1.jpg" alt="Image to Download" width="300px"
                                    style="width: 120px; height: 85px;">
                                <br><br>
                                <button id="downloadBtn">Tải ảnh</button>
                            </div>
                            <div class="review">
                                <p>Nhận xét của giáo viên</p>
                                <p>Very good</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BẢNG ĐIỂM CẢ NĂM -->
        <div class="table-container" style="display: none">
            <table class="fixed-column">
                <thead>
                    <tr>
                        <th>Môn học</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>HỌC KÌ I</td>
                    </tr>
                    <tr>
                        <td>HỌC KÌ II</td>
                    </tr>
                    <tr>
                        <td>ĐTB</td>
                    </tr>
                </tbody>
            </table>

            <div class="scrollable-columns">
                <table>
                    <thead>
                        <tr>
                            <th>Ngữ Văn</th>
                            <th>Toán Học</th>
                            <th>Tiếng Anh</th>
                            <th>Lịch Sử</th>
                            <th>Địa Lý</th>
                            <th>Hóa học</th>
                            <th>Sinh học</th>
                            <th>Vật Lý</th>
                            <th>Tin học</th>
                            <!-- Add more subjects as needed -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="grades">10</div>
                            </td>

                            <!-- Tổng kết môn toán -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>

                            </td>

                            <!-- Tổng kết môn địa lý -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="grades" style="background-color: var(--peachy-color);">5</div>
                            </td>
                            <!-- Tổng kết môn toán -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>

                            </td>

                            <!-- Tổng kết môn địa lý -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="grades">6.7</div>
                            </td>
                            <!-- Tổng kết môn toán -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>

                            </td>

                            <!-- Tổng kết môn địa lý -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>

                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>
                                <div class="grades-wrapper"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Modal Structure -->
            <div id="gradeModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Chi tiết bài kiểm tra</h2>
                    <div class="modal-body">
                        <div class="info-row">
                            <div class="info">
                                <p>Trường: Lê Hồng Phong</p>
                                <p class="data_lophoc">Lớp: 9A1</p>
                                <p class="data_hovatenhocsinh">Tên: Nguyễn Thị Yến Loan</p>
                            </div>
                            <div class="info">
                                <p>Ngày: 14/08/2024</p>
                                <p class="data_monhoc">Môn: Toán</p>
                                <p>Thời gian: 15’</p>
                            </div>
                        </div>
                        <div class="grade-review">
                            <div class="grade">
                                <div class="grades">10</div><br>
                                <img id="image" src="../img/header1.jpg" alt="Image to Download" width="300px"
                                    style="width: 120px; height: 85px;">
                                <br><br>
                                <button id="downloadBtn">Tải ảnh</button>
                            </div>
                            <div class="review">
                                <p>Nhận xét của giáo viên</p>
                                <p>Very good</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </main>
</body>
<script src="./js/kq.js"></script>
<script src="../js/back.js"></script>
<script src="./js/diemso.js"></script>
<script>
    // Hiển thị năm học và học kỳ đã chọn
    window.onload = function () {
        const savedYear = localStorage.getItem('selectedYear');
        const savedSemester = localStorage.getItem('selectedSemester');

        if (savedYear) {
            document.getElementById('selectedYear').innerText = 'Năm học: ' + savedYear;
        }

        if (savedSemester) {
            document.getElementById('selectedSemester').innerText = '' + savedSemester;
        }
    };
</script>
<script src="./js/tacvu.js"></script>
<script src="./js/hocki.js"></script>
<script src="./js/namhoc.js"></script>

</html>