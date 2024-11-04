<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phân công học tập</title>
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
    <link rel="stylesheet" href="css/thoikhoabieu.css">
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
            <div class="title" id="headerTitle">Phân công học tập
            </div>
        </div>
    </header>

    <main>
        <div class="main_infoteacher">
            <div class="info_detail">
                <span>Lớp 9A1</span>
            </div>
        </div>
        <div class="timetable_title">
            <span>Đang chỉnh sửa</span>
        </div>
        <div class="main_timetable">

            <div class="timetable">
                <table>
                    <thead>
                        <tr>
                            <th class="title">Ca học</th>
                            <th class="time">
                                <div class="time_content">
                                    <span>Thứ 2</span>
                                    <span>30/09/2024</span>
                                </div>
                            </th>
                            <th class="time">
                                <div class="time_content">
                                    <span>Thứ 3</span>
                                    <span>01/10/2024</span>
                                </div>
                            </th>
                            <th class="time">
                                <div class="time_content">
                                    <span>Thứ 4</span>
                                    <span>02/10/2024</span>
                                </div>
                            </th>
                            <th class="time">
                                <div class="time_content">
                                    <span>Thứ 5</span>
                                    <span>03/10/2024</span>
                                </div>
                            </th>
                            <th class="time">
                                <div class="time_content">
                                    <span>Thứ 6</span>
                                    <span>04/10/2024</span>
                                </div>
                            </th>
                            <th class="time">
                                <div class="time_content">
                                    <span>Thứ 7</span>
                                    <span>05/10/2024</span>
                                </div>
                            </th>
                            <th class="time">
                                <div class="time_content">
                                    <span>Chủ nhật</span>
                                    <span>06/10/2024</span>
                                </div>
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td class="title">Sáng</td>
                            <td class="teaching_schedule">
                                <i data-feather="more-horizontal" id="openModal" style="color: #5B6998"></i>

                            </td>
                            <td class="teaching_schedule">
                                <i data-feather="more-horizontal"  style="color: #5B6998"></i>
                            </td>
                            <td class="teaching_schedule">
                                <i data-feather="more-horizontal" style="color: #5B6998"></i>
                            </td>
                            <td class="teaching_schedule">
                                <i data-feather="more-horizontal" style="color: #5B6998"></i>
                            </td>
                            <td class="teaching_schedule">
                                <i data-feather="more-horizontal" style="color: #5B6998"></i>
                            </td>
                            <td class="teaching_schedule">
                                <div class="theory">
                                    <span>Môn: Ngữ Văn</span>
                                    <span>Lớp: 9A1</span>
                                    <span>Tiết: 1-2</span>
                                    <span>Phòng: 9A1</span>
                                </div>
                                <div class="theory">
                                    <span>Môn: Sinh hoạt lớp</span>
                                    <span>Lớp: 9A1</span>
                                    <span>Tiết: 5</span>
                                    <span>Phòng: 9A2</span>
                                </div>
                            </td>
                            <td class="teaching_schedule"></td>
                        </tr>
                        <tr>
                            <td class="title">Chiều</td>
                            <td class="teaching_schedule">
                                <i data-feather="more-horizontal" style="color: #5B6998"></i>
                            </td>
                            <td class="teaching_schedule">
                                <i data-feather="more-horizontal" style="color: #5B6998"></i>
                            </td>
                            <td class="teaching_schedule">
                                <i data-feather="more-horizontal" style="color: #5B6998"></i>
                            </td>
                            <td class="teaching_schedule">
                                <div class="theory">
                                    <span>Môn: Ngữ Văn</span>
                                    <span>Lớp: 9A1</span>
                                    <span>Tiết: 6-7</span>
                                    <span>Phòng: 9A1</span>
                                </div>
                                <div class="theory">
                                    <span>Môn: Ngữ Văn</span>
                                    <span>Lớp: 9A2</span>
                                    <span>Tiết: 8-9</span>
                                    <span>Phòng: 9A2</span>
                                </div>
                            </td>
                            <td class="teaching_schedule">
                                <div class="theory">
                                    <span>Môn: Ngữ Văn</span>
                                    <span>Lớp: 9A1</span>
                                    <span>Tiết: 6-7</span>
                                    <span>Phòng: 9A1</span>
                                </div>
                                <div class="theory">
                                    <span>Môn: Ngữ Văn</span>
                                    <span>Lớp: 9A2</span>
                                    <span>Tiết: 8-9</span>
                                    <span>Phòng: 9A2</span>
                                </div>
                            </td>
                            <td class="teaching_schedule">
                                <div class="theory">
                                    <span>Môn: Ngữ Văn</span>
                                    <span>Lớp: 9A1</span>
                                    <span>Tiết: 6-7</span>
                                    <span>Phòng: 9A1</span>
                                </div>
                                <div class="theory">
                                    <span>Môn: Ngữ Văn</span>
                                    <span>Lớp: 9A2</span>
                                    <span>Tiết: 8-9</span>
                                    <span>Phòng: 9A2</span>
                                </div>
                            </td>
                            <td class="teaching_schedule"></td>
                        </tr>
                        <tr>
                            <td class="title">Tối</td>
                            <td class="teaching_schedule">
                                <i data-feather="more-horizontal" style="color: #5B6998"></i>
                            </td>
                            <td class="teaching_schedule">
                                <i data-feather="more-horizontal" style="color: #5B6998"></i>
                            </td>
                            <td class="teaching_schedule">
                                <i data-feather="more-horizontal" style="color: #5B6998"></i>
                            </td>
                            <td class="teaching_schedule">
                                <i data-feather="more-horizontal" style="color: #5B6998"></i>
                            </td>
                            <td class="teaching_schedule">
                                <i data-feather="more-horizontal" style="color: #5B6998"></i>
                            </td>
                            <td class="teaching_schedule">
                                <i data-feather="more-horizontal" style="color: #5B6998"></i>
                            </td>
                            <td class="teaching_schedule">
                                <i data-feather="more-horizontal" style="color: #5B6998"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <!-- Modal -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal_body">
                    <div class="modalbody_content">
                        <label for="">Môn: </label>
                        <select name="" id="">
                            <option value="">Ngữ Văn</option>
                            <option value="">Toán</option>
                            <option value="">Tiếng Anh</option>
                            <option value="">Hóa học</option>
                            <option value="">Vật Lí</option>
                            <option value="">Địa Lí</option>
                            <option value="">Lịch sử</option>
                            <option value="">Tin học</option>
                            <option value="">Công nghệ</option>
                            <option value="">GDCD</option>
                            <option value="">Âm nhạc</option>
                        </select>
                    </div>

                    <div class="modalbody_content">
                        <label for="">Khối: </label>
                        <select name="" id="">
                            <option value="">Khối 9</option>
                            <option value="">Khối 8</option>
                            <option value="">Khối 7</option>
                            <option value="">Khối 6</option>
                        </select>
                    </div>

                    <div class="modalbody_content">
                        <label for="">Lớp: </label>
                        <select name="" id="">
                            <option value="">Lớp 9A1</option>
                            <option value="">Lớp 9A2</option>
                            <option value="">Lớp 9A3</option>
                            <option value="">Lớp 9A4</option>
                        </select>
                    </div>

                    <div class="modalbody_period">
                        <label for="">Tiết: </label>
                        <div class="input">
                            <input type="text">
                            <span>đến</span>
                            <input type="text">
                        </div>
                    </div>

                    <div class="modalbody_content">
                        <label for="">Lịch: </label>
                        <select name="" id="">
                            <option value="">Lý thuyết</option>
                            <option value="">Trực tuyến</option>
                            <option value="">Thực hành</option>
                            <option value="">Coi thi</option>
                            <option value="">Tạm ngưng</option>
                        </select>
                    </div>

                    <div class="modalbody_content">
                        <label for="">Phòng: </label>
                        <select name="" id="">
                            <option value="">9A1</option>
                            <option value="">9A2</option>
                            <option value="">9A3</option>
                            <option value="">9A4</option>
                            <option value="">Zoom</option>
                            <option value="">Thực hành 1</option>
                            <option value="">Thực hành 2</option>
                            <option value="">Thực hành 3</option>
                        </select>
                    </div>

                    <div class="modalbody_content">
                        <label for="">Ghi chú: </label>
                        <input type="text" placeholder="Nhập ghi chú vào đây">
                    </div>

                    <div class="modalbody_content">
                        <label for="">Thời gian áp dụng: </label>
                        <input type="date">
                    </div>

                    <div class="modalbody_content">
                        <label for="">Đến: </label>
                        <input type="date">
                    </div>

                    <div class="modalbody_button">
                        <button type="button" class="close">Hủy</button>
                        <button type="button" class="close">Đồng ý</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_note">
            <div class="row">
                <div class="content1">
                    <div class="color_theory"></div>
                    <div class="text">
                        <span>Lịch dạy lý thuyết</span>
                    </div>
                </div>
                <div class="content2">
                    <div class="color_lab"></div>
                    <div class="text">
                        <span>Lịch dạy thực hành</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="content1">
                    <div class="color_online"></div>
                    <div class="text">
                        <span>Lịch dạy trực tuyến</span>
                    </div>
                </div>
                <div class="content2">
                    <div class="color_exam"></div>
                    <div class="text">
                        <span>Lịch coi thi</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="content1">
                    <div class="color_pause"></div>
                    <div class="text">
                        <span>Lịch tạm ngưng</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="main_button">
            <div class="button_edit">
                <a href="./timetableclass.php">
                    <button type="button" class="btn_edit">Áp dụng</button>
                </a>
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

<script>
   // Lấy phần modal
var modal = document.getElementById("myModal");

// Lấy icon mở modal
var icon = document.getElementById("openModal");

// Lấy tất cả các nút đóng modal (cả nút "Hủy" và "Đồng ý")
var closeButtons = document.getElementsByClassName("close");

// Khi nhấn vào icon, mở modal
icon.onclick = function () {
    modal.style.display = "block";
}

// Thêm sự kiện cho tất cả các nút "Hủy" và "Đồng ý" để đóng modal
for (var i = 0; i < closeButtons.length; i++) {
    closeButtons[i].onclick = function () {
        modal.style.display = "none";
    }
}

// Khi nhấn ngoài modal, ẩn modal
window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


</script>

</html>