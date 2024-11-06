<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả học tập</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="./css/ketquahoctap.css">
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
                    <span>Từ Văn Tú</span>
                </div>
            </div>
            <div class="infodetail">
                <span class="student-class data_lophoc">Lớp 9A1</span>
                <div class="row">
                    <select id="student" name="student">
                        <option value="apple">Họ và tên học sinh</option>
                        <option value="apple">Từ Văn Tú</option>
                        <option value="banana">Nguyễn Thị Yến Loan</option>
                        <option value="orange">Trần Thành Đạt</option>
                    </select>
                </div>
                <div class="row">
                    <select id="score" name="score">
                        <option value="apple">Điểm trung bình</option>
                        <option value="apple">8.0 - 10.0</option>
                        <option value="banana">6.5 - 7.9</option>
                        <option value="orange">5.0 - 6.4</option>
                        <option value="orange">0 - 4.9</option>
                    </select>
                </div>

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

            <!-- MODAL NĂM HỌC VÀ HỌC KÌ -->
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


            <div class="scrollable-columns">
                <table>
                    <thead>
                        <tr>
                            <td class="pointtitle">Môn Học</td>
                            <th>Ngữ Văn</th>
                            <th>Toán</th>
                            <th>Tiếng Anh</th>
                            <th>Lịch Sử</th>
                            <th>Địa Lý</th>
                            <th>Hóa học</th>
                            <th>Sinh học</th>
                            <th>Vật Lý</th>
                            <th>Tin học</th>
                            <!-- Thêm nhiều môn học nếu cần -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pointtitle">Tổng kết</td>
                            <td>
                                <div class="grades" data-grade="10" data-subject="Toán">10</div>
                            </td>
                            <td>
                                <button class="enter-grade-button" data-subject="Toán"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>
                                <button class="enter-grade-button" id="plusButton"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>
                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Địa lý -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>
                        </tr>
                        <tr>
                            <td class="pointtitle">Điểm 15'</td>
                            <td>
                                <div class="grades" style="background-color: var(--peachy-color);">5</div>
                                <div class="grades">10</div>
                                <div class="grades">10</div>
                            </td>
                            <!-- Tổng kết môn Toán -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Địa lý -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>
                        </tr>

                        <tr>
                            <td class="pointtitle">Điểm 1 tiết</td>
                            <td>
                                <div class="grades" style="background-color: var(--peachy-color);">5</div>
                                <div class="grades">10</div>
                            </td>
                            <!-- Tổng kết môn Toán -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Địa lý -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>
                        </tr>

                        <tr>
                            <td class="pointtitle">Điểm GK</td>
                            <td>
                                <div class="grades">10</div>
                            </td>
                            <!-- Tổng kết môn Toán -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Địa lý -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>
                        </tr>

                        <tr>
                            <td class="pointtitle">Điểm CK</td>
                            <td>
                                <div class="grades">10</div>
                            </td>
                            <!-- Tổng kết môn Toán -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Địa lý -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>

                                <button class="enter-grade-button"><i data-feather="plus"
                                        style="color: #bcbcbd"></i></button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;" />

                                <div class="grades-wrapper"></div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Modal Structure -->

            <!-- Modal dùng chung cho các điểm -->
            <div id="gradeModal1" class="modal">
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
                                <p class="data_monhoc">Môn: <span id="subject1"></span></p>
                                <p>Thời gian: 15’</p>
                            </div>
                        </div>
                        <div class="grade-review">
                            <div class="grade">
                                <div id="gradeValue1" class="grades">10</div><br>
                                <img id="image1" src="../img/header1.jpg" alt="Image to Download" width="300px"
                                    style="width: 120px; height: 85px;">
                                <br><br>
                                <button id="downloadBtn1">Tải ảnh</button>
                            </div>
                            <div class="review">
                                <span>Rất tốt</span>
                            </div>
                        </div>
                        <div class="modal-score-button">
                            <button type="button">Gửi</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal dùng chung cho các dấu cộng -->
            <div id="gradeModal2" class="modal">
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
                                <p class="data_monhoc">Môn: <span id="subject2"></span></p>
                                <p>Thời gian: 15’</p>
                            </div>
                        </div>
                        <div class="grade-review">
                            <div class="grade">
                                <div class="grade-score">
                                    <input type="text" placeholder="Nhập điểm">
                                </div><br>
                                <img id="image2" src="../img/header1.jpg" alt="Image to Download" width="300px"
                                    style="width: 120px; height: 85px;">
                                <br><br>
                                <button id="uploadBtn2">Tải ảnh</button>
                            </div>
                            <div class="review">
                                <textarea placeholder="Nhập nhận xét"></textarea>
                            </div>
                        </div>
                        <div class="modal-score-button">
                            <button type="button">Gửi</button>
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


        </div>


    </main>
</body>
<script src="./js/kq.js"></script>
<script src="../js/back.js"></script>
<script src="./js/diemso.js"></script>
<script src="./js/tacvu.js"></script>
<script src="./js/hocki.js"></script>
<script src="./js/namhoc.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Lắng nghe sự kiện click vào nút Nhận xét
        document.getElementById("commentBtn").addEventListener("click", function () {
            // Hiển thị hộp thoại yêu cầu người dùng nhập nhận xét
            let comment = prompt("Nhập nhận xét của giáo viên:");

            // Nếu người dùng nhập nhận xét, cập nhật nội dung vào phần tử <p id="teacherComment">
            if (comment) {
                document.getElementById("teacherComment").innerText = comment;
            }
        });
    });

</script>

<script>
    // Hiển thị năm học và học kỳ đã chọn
    window.onload = function () {
        const savedYear = localStorage.getItem('selectedYear');
        const savedSemester = localStorage.getItem('selectedSemester');
    };
</script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>

</html>