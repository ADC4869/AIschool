<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lịch họp</title>
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
    <link rel="stylesheet" href="css/meetingpage.css">
    <link rel="stylesheet" href="../css/fix.css">
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
            <div class="title">Lịch Họp Phụ Huynh</div>
            <i class="fas fa-calendar-alt icon-calendar calendar-button"></i>
        </div>

        <div class="calendar-dialog" id="calendarDialog">
            <span class="close" id="closeCalendar">&times;</span>
            <div class="calendar-header">
                <span id="prevMonth">&lt;</span>
                <span class="month-year" id="monthYear"></span>
                <span id="nextMonth">&gt;</span>
            </div>
            <table class="calendar" id="calendarTable">
                <thead>
                    <tr>
                        <th>T2</th>
                        <th>T3</th>
                        <th>T4</th>
                        <th>T5</th>
                        <th>T6</th>
                        <th>T7</th>
                        <th>CN</th>
                    </tr>
                </thead>
                <tbody id="calendarBody">
                    <!-- Calendar will be dynamically generated here -->
                </tbody>
            </table>
        </div>
    </header>

    <main>
        <div class="tab-container">
            <button class="tab-btn active" onclick="openTab('school')">Lịch họp của trường</button>
            <button class="tab-btn" onclick="openTab('me')">Lịch họp của tôi</button>
        </div>

        <!-- Lịch họp của trường -->
        <div class="tab-content" id="school">
            <div class="container">
                <div class="card important">
                    <div class="card-header">Thứ 5 - 15/08/2024</div>
                    <div class="card-body">
                        <p class="data_tieudelichhop"><strong>Họp phụ huynh lớp 9A1</strong></p>
                        <p class="data_noidunglichhop"><strong>Nội dung:</strong> Họp phụ huynh đầu năm</p>
                        <p class="data_nguoichutri"><strong>Người chủ trì:</strong> Trần Tiến Phát</p>
                        <p class="data_thoigian"><strong>Thời gian:</strong> 10:30</p>
                        <p class="data_diadiem"><strong>Địa điểm:</strong> Phòng học lớp 9A1</p>
                        <p class="data_ghichu"><strong>Ghi chú:</strong> Quan trọng</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Thứ 5 - 15/08/2024</div>
                    <div class="card-body">
                        <p class="data_tieudelichhop"><strong>Họp phụ huynh lớp 9A1</strong></p>
                        <p class="data_noidunglichhop"><strong>Nội dung:</strong> Họp phụ huynh đầu năm</p>
                        <p class="data_nguoichutri"><strong>Người chủ trì:</strong>Lê Long Dũng</p>
                        <p class="data_thoigian"><strong>Thời gian:</strong> 10:30</p>
                        <p class="data_diadiem"><strong>Địa điểm:</strong> Phòng học lớp 9A1</p>
                        <p class="data_ghichu"><strong>Ghi chú:</strong> ....</p>
                    </div>
                </div>

                <div class="card past">
                    <div class="card-header">Thứ 5 - 15/08/2024</div>
                    <div class="card-body">
                        <p class="data_tieudelichhop"><strong>Họp phụ huynh lớp 9A1</strong></p>
                        <p class="data_noidunglichhop"><strong>Nội dung:</strong> Họp phụ huynh đầu năm</p>
                        <p class="data_nguoichutri"><strong>Người chủ trì:</strong>Phạm Lan Anh</p>
                        <p class="data_thoigian"><strong>Thời gian:</strong> 10:30</p>
                        <p class="data_diadiem"><strong>Địa điểm:</strong> Phòng học lớp 9A1</p>
                        <p class="data_ghichu"><strong>Ghi chú:</strong> ....</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lịch họp của tôi -->
        <div class="tab-content" id="me" style="display:none;">
            <div class="container1">
                <span class="text">Tạo lịch họp</span>
                <button id="openDialog" class="icon-button">+</button>
            </div>

            <!-- Modal dialog -->
            <div id="meetingModal" class="modal">
                <div class="modal-content">
                    <h3>Thông tin lịch họp</h3>
                    <form>
                        <label for="meetingName">Tên cuộc họp</label>
                        <input class="input_tieudelichhop" type="text" id="meetingName" name="meetingName" placeholder="Nhập tên cuộc họp">

                        <label for="meetingContent">Nội dung họp</label>
                        <input class="data_noidunglichhop" type="text" id="meetingContent" name="meetingContent" placeholder="Nhập nội dung họp">

                        <label for="meetingTime">Thời gian</label>
                        <input class="input_thoigian" type="text" id="meetingTime" name="meetingTime" placeholder="Nhập thời gian">

                        <label for="meetingLocation">Địa điểm</label>
                        <input class="input_diadiem" type="text" id="meetingLocation" name="meetingLocation" placeholder="Nhập địa điểm">

                        <label for="meetingNotes">Ghi chú</label>
                        <input class="input_ghichu" type="text" id="meetingNotes" name="meetingNotes" placeholder="Nhập ghi chú">

                        <label for="meetingparticipants">Người tham gia</label>
                        <select class="select_doituongthamgia" name="options" id="meetingparticipants">
                            <option value="">Tập thể lớp 9A</option>
                            <option value="">Tập thể giáo viên lớp 9A</option>
                            <option value="">Tập thể phụ huynh lớp 9A</option>
                        </select>

                        <div class="actions">
                            <button type="submit" class="create-btn">Tạo</button>
                            <button type="button" class="cancel-btn" id="closeDialog">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Nội dung -->
            <div class="container">
                <div class="card">
                    <div class="card-header">Thứ 4 - 15/09/2024</div>
                    <div class="card-body">
                        <p class="data_tieudelichhop"><strong>Họp phụ huynh lớp 9A1</strong></p>
                        <p class="data_noidunglichhop"><strong>Nội dung:</strong> Họp phụ huynh đầu năm</p>
                        <p class="data_nguoichutri"><strong>Người chủ trì:</strong> Phạm Yến Linh</p>
                        <p class="data_thoigian"><strong>Thời gian:</strong> 10:30</p>
                        <p class="data_diadiem"><strong>Địa điểm:</strong> Phòng học lớp 9A1</p>
                        <p class="data_ghichu"><strong>Ghi chú:</strong> ....</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Thứ 2 - 13/09/2024</div>
                    <div class="card-body">
                        <p class="data_tieudelichhop"><strong>Họp phụ huynh lớp 9A1</strong></p>
                        <p class="data_noidunglichhop"><strong>Nội dung:</strong> Họp phụ huynh đầu năm</p>
                        <p class="data_nguoichutri"><strong>Người chủ trì:</strong> Nguyễn Văn Nam</p>
                        <p class="data_thoigian"><strong>Thời gian:</strong> 10:30</p>
                        <p class="data_diadiem"><strong>Địa điểm:</strong> Phòng học lớp 9A1</p>
                        <p class="data_ghichu"><strong>Ghi chú:</strong> ....</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">Thứ 6 - 17/09/2024</div>
                    <div class="card-body">
                        <p class="data_tieudelichhop"><strong>Họp phụ huynh lớp 9A1</strong></p>
                        <p class="data_noidunglichhop"><strong>Nội dung:</strong> Họp phụ huynh đầu năm</p>
                        <p class="data_nguoichutri"><strong>Người chủ trì:</strong> Lê Trần Nhựt Huy</p>
                        <p class="data_thoigian"><strong>Thời gian:</strong> 10:30</p>
                        <p class="data_diadiem"><strong>Địa điểm:</strong> Phòng học lớp 9A1</p>
                        <p class="data_ghichu"><strong>Ghi chú:</strong> ....</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="js/lich.js"></script>
<script src="./js/opentab.js"></script>
<script src="../js/back.js"></script>
<script src="./js/modal.js"></script>

</html>