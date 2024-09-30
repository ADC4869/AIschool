<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sự kiện và lịch trình</title>
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
    <link rel="stylesheet" href="css/events.css">
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
            <div class="title" id="headerTitle">Sự kiện và lịch trình
            </div>
        </div>

    </header>

    <main>
        <!-- TAB SỰ KIỆN -->
        <div class="main_tab">
            <div class="tab_item active" id="tab_eventpresent" onclick="changeHeaderTitle('Sự kiện đang diễn ra')">
                <p>Sự kiện <br> đang diễn ra</p>
            </div>

            <div class="tab_item" id="tab_upcoming" onclick="changeHeaderTitle('Sự kiện sắp tới')">
                <p>Sự kiện <br> sắp tới</p>
            </div>

            <div class="tab_item" id="tab_schedule" onclick="changeHeaderTitle('Lịch họp')">
                <p>Lịch họp</p>
            </div>

            <div class="tab_item" id="tab_collaborate" onclick="changeHeaderTitle('Lịch công tác')">
                <p>Lịch công tác</p>
            </div>

        </div>
        <!-- SỰ KIỆN ĐANG DIỄN RA -->
        <div class="main_eventpresent" id="eventpresent">
            <div class="main_content">
                <div class="event_item">
                    <a href="./eventpresent.php">
                        <div class="event_photo">
                            <img src="../img/lekhaigiang.jfif" alt="">
                        </div>

                        <div class="event_info">
                            <span class="event_title">Lễ Khai Giảng Năm Học 2024 - 2025</span>
                            <span class="event_time"><i data-feather="clock"
                                    style="color: gray; width: 16px; height: 16px"></i> <span>05/09/2024
                                    09:11:00</span>
                            </span>
                            <span class="event_status present">Đang diễn ra</span>
                        </div>
                    </a>
                </div>

                <div class="event_item">
                    <a href="./eventpresent.php">
                        <div class="event_photo">
                            <img src="../img/hoatdongtrainghiem.jfif" alt="">
                        </div>

                        <div class="event_info">
                            <span class="event_title">Tổ chức hoạt động trải nghiệm Steam "Chế tạo xà phòng từ dầu ăn
                                thừa"</span>
                            <span class="event_time"><i data-feather="clock"
                                    style="color: gray; width: 16px; height: 16px"></i> <span>05/09/2024
                                    09:11:00</span>
                            </span>
                            <span class="event_status present">Đang diễn ra</span>
                        </div>
                    </a>
                </div>

                <div class="event_item">
                    <a href="./eventpresent.php">
                        <div class="event_photo">
                            <img src="../img/lekhaimac.jfif" alt="">
                        </div>

                        <div class="event_info">
                            <span class="event_title">Lễ Khai Mạc Hội Khỏe Phù Đổng Vòng Trường NH 2023 - 2024</span>
                            <span class="event_time"><i data-feather="clock"
                                    style="color: gray; width: 16px; height: 16px"></i> <span>12/09/2024 08:30:00</span>
                            </span>
                            <span class="event_status present">Đang diễn ra</span>
                        </div>
                    </a>
                </div>

                <div class="event_item">
                    <a href="./eventpresent.php">
                        <div class="event_photo">
                            <img src="../img/lekhaimac1.jfif" alt="">
                        </div>

                        <div class="event_info">
                            <span class="event_title">Lễ Khai Mạc Tuần Lễ Hưởng Ứng Học Tập Suốt Đời Năm 2024-
                                2025</span>
                            <span class="event_time"><i data-feather="clock"
                                    style="color: gray; width: 16px; height: 16px"></i> <span>28/08/2024 07:30:00</span>
                            </span>
                            <span class="event_status finished">Đã kết thúc</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- SỰ KIẾN SẮP TỚI -->
        <div class="main_event" style="display: none" id="upcoming">
            <div class="main_addevent">
                <span id="openModal"><i data-feather="plus" style="color: black; width: 30px; height: 30px"></i></span>
            </div>

            <div class="main_content">
                <div class="event_item">
                    <a href="./eventupcoming.php">
                        <div class="event_photo">
                            <img src="../img/nhagiaovn.jfif" alt="">
                        </div>

                        <div class="event_info">
                            <span class="event_title">Mừng ngày nhà giáo Việt Nam 20/11</span>
                            <span class="event_time"><i data-feather="clock"
                                    style="color: gray; width: 16px; height: 16px"></i> <span>20/11/2024 09:11:00</span>
                            </span>
                            <span class="event_status prepare">Sắp diễn ra</span>
                        </div>
                    </a>
                </div>

                <div class="event_item">
                    <a href="./eventupcoming.php">
                        <div class="event_photo">
                            <img src="../img/phunuvn.jfif" alt="">
                        </div>

                        <div class="event_info">
                            <span class="event_title">Hoạt động mừng ngày phụ nữ Việt Nam
                                20/10</span>
                            <span class="event_time"><i data-feather="clock"
                                    style="color: gray; width: 16px; height: 16px"></i> <span>10/09/2024 09:00:00
                                </span>
                            </span>
                            <span class="event_status prepare">Sắp diễn ra</span>
                        </div>
                    </a>
                </div>

                <div class="event_item">
                    <a href="./eventupcoming.php">
                        <div class="event_photo">
                            <img src="../img/letrungthu.jfif" alt="">
                        </div>

                        <div class="event_info">
                            <span class="event_title">Tổ chức đêm hội trăng rằm cho học sinh</span>
                            <span class="event_time"><i data-feather="clock"
                                    style="color: gray; width: 16px; height: 16px"></i> <span>12/09/2024 08:30:00</span>
                            </span>
                            <span class="event_status prepare">Sắp diễn ra</span>
                        </div>
                    </a>
                </div>

                <div class="event_item">
                    <a href="./eventupcoming.php">
                        <div class="event_photo">
                            <img src="../img/hoctapsuotdoi.jfif" alt="">
                        </div>

                        <div class="event_info">
                            <span class="event_title">Lễ tổng kết Tuần Lễ Hưởng Ứng Học Tập Suốt Đời Năm 2024 -
                                2025</span>
                            <span class="event_time"><i data-feather="clock"
                                    style="color: gray; width: 16px; height: 16px"></i> <span>28/08/2024 07:30:00</span>
                            </span>
                            <span class="event_status prepare">Sắp diễn ra</span>
                        </div>
                    </a>
                </div>
            </div>



            <!-- MODAL -->
            <div class="modal" id="myModal" style="display: none;">
                <div class="modal-content">
                    <div class="modal_header">
                        <p>Thông tin sự kiện</p>
                    </div>
                    <div class="modal_body">
                        <div class="body_title">
                            <span>Tên sự kiện</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>
                        <div class="body_title">
                            <span>Nội dung sự kiện</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>
                        <div class="body_title">
                            <span>Thời gian</span>
                        </div>
                        <div class="body_inputtime">
                            <input type="text" class="time" placeholder="11:00">
                            <input type="date" class=date>
                            <span>đến</span>
                            <input type="text" class="time" placeholder="11:00">
                            <input type="date" class="date">
                        </div>
                        <div class="body_title">
                            <span>Địa điểm</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>
                        <div class="body_title">
                            <span>Ghi chú</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>
                        <div class="body_title">
                            <span>Đối tượng tham gia</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>

                        <div class="body_button">
                            <button type="button" class="btn_save">Tạo</button>
                            <button type="button" class="btn_cancle" id="closeModal">Hủy</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- LỊCH HỌP -->
        <div class="main_schedule" style="display: none" id="schedule">
            <div class="schedule_tab">
                <div class="tab_schoolschedule active" id="tab_schoolschedule">
                    <p class="schoolschedule">Lịch họp của trường</p>
                </div>
                <p class="separate">|</p>
                <div class="tab_myschedule" id="tab_myschedule">
                    <p class="myschedule">Lịch họp của tôi</p>
                </div>
            </div>


            <!-- LỊCH HỌP CỦA TRƯỜNG -->
            <div class="schedule_content" id="schoolschedule">
                <div class="schedule_item important">
                    <div class="schedule_header">
                        <p class="schedule_title">Thứ 6 - 06/09/2024</p>
                    </div>

                    <div class="schedule_body">
                        <span>Họp với Phòng Đào tạo về kế hoạch học kỳ mới</span>
                        <span>Nội dung: Họp triển khai nội dung đầu năm</span>
                        <span>Người chủ trì : Hiệu trưởng nhà trường</span>
                        <span>Thời gian : 10:30</span>
                        <span>Địa điểm : Phòng họp 01</span>
                        <span>Ghi chú : Quan trọng</span>
                    </div>
                </div>

                <div class="schedule_item normal">
                    <div class="schedule_header">
                        <p class="schedule_title">Thứ 5 - 12/09/2024</p>
                    </div>

                    <div class="schedule_body">
                        <span>Họp với Phòng Tài chính về ngân sách năm học</span>
                        <span>Nội dung: Phân bổ ngân sách và lên kế hoạch...</span>
                        <span>Người chủ trì : Trần Nguyên Khởi</span>
                        <span>Thời gian : 14:00 - 015:00:</span>
                        <span>Địa điểm : Phòng họp 02</span>
                        <span>Ghi chú : ....</span>
                    </div>
                </div>

                <div class="schedule_item normal past">
                    <div class="schedule_header">
                        <p class="schedule_title">Thứ 5 - 12/09/2024</p>
                    </div>

                    <div class="schedule_body">
                        <span>Họp ban Giám Hiệu</span>
                        <span>Nội dung: Họp ban Giám Hiệu</span>
                        <span>Người chủ trì : Trần Nguyên Khởi</span>
                        <span>Thời gian : :0800 - 09:00:</span>
                        <span>Địa điểm : Phòng họp 04</span>
                        <span>Ghi chú : ....</span>
                    </div>
                </div>
            </div>

            <!-- LỊCH HỌP CỦA TÔI -->
            <div class="schedule_content normal" style="display: none" id="myschedule">

                <div class="create_schedule">
                    <span>Tạo lịch họp</span>
                    <i data-feather="plus" id="openmeetingModal" style="color: #bcbcbd; width: 25px; height: 25px"></i>

                </div>

                <div class="schedule_item">
                    <div class="schedule_header">
                        <p class="schedule_title">Thứ 5 - 15/08/2024</p>
                    </div>

                    <div class="schedule_body">
                        <span>Họp với Phòng Truyền thông</span>
                        <span>Nội dung: Lên kế hoạch quảng bá trường</span>
                        <span>Người chủ trì : Nguyễn Thị Ánh Xuân </span>
                        <span>Thời gian : 08:00 - 09:30</span>
                        <span>Địa điểm : Phòng họp 01</span>
                        <span>Ghi chú : ....</span>
                    </div>
                </div>

                <div class="schedule_item normal">
                    <div class="schedule_header">
                        <p class="schedule_title">Thứ 5 - 08/08/2024</p>
                    </div>

                    <div class="schedule_body">
                        <span>Họp với Ban Giám hiệu về tổng kết tuần</span>
                        <span>Nội dung: Tổng kết cuối tuần</span>
                        <span>Người chủ trì : Trần Nguyên Khởi</span>
                        <span>Thời gian : 08:00 - 09:30</span>
                        <span>Địa điểm : Phòng học lớp 9B</span>
                        <span>Ghi chú : .....</span>
                    </div>
                </div>

                <div class="schedule_item normal">
                    <div class="schedule_header">
                        <p class="schedule_title">Thứ 7 - 03/08/2024</p>
                    </div>

                    <div class="schedule_body">
                        <span>Họp với Phòng Hành chính</span>
                        <span>Nội dung: Công tác chuẩn bị cho tuần</span>
                        <span>Người chủ trì : Hiệu trưởng nhà trường</span>
                        <span>Thời gian : 10:00 - 11:30</span>
                        <span>Địa điểm : Phòng học lớp 9A</span>
                        <span>Ghi chú : ....</span>
                    </div>
                </div>
            </div>

            <!-- MODAL TẠO LỊCH HỌP-->
            <div class="modal" id="meetingModal" style="display: none;">
                <div class="modal-content">
                    <div class="modal_header">
                        <p>Thông tin lịch họp</p>
                    </div>
                    <div class="modal_body">
                        <div class="body_title">
                            <span>Tên cuộc họp</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>
                        <div class="body_title">
                            <span>Nội dung họp</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>
                        <div class="body_title">
                            <span>Thời gian</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>
                        <div class="body_title">
                            <span>Địa điểm</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>
                        <div class="body_title">
                            <span>Ghi chú</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>
                        <div class="body_title">
                            <span>Đối tượng tham gia</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>

                        <div class="body_button">
                            <button type="button" class="btn_save" id="savemeetingModal">Tạo</button>
                            <button type="button" class="btn_cancle" id="closemeetingModal">Hủy</button>
                        </div>
                    </div>


                </div>
            </div>

        </div>

        <!-- LỊCH CÔNG TÁC -->
        <div class="main_schedule" style="display: none" id="collaborate">
            <div class="schedule_tab">
                <div class="tab_schoolschedule active" id="tab_schoolcollaborate">
                    <p class="schoolschedule">Lịch công tác của trường</p>
                </div>
                <p class="separate">|</p>
                <div class="tab_myschedule" id="tab_mycollaborate">
                    <p class="myschedule">Lịch công tác của tôi</p>
                </div>
            </div>


            <!-- LỊCH CÔNG TÁC CỦA TRƯỜNG -->
            <div class="schedule_content" id="schoolcollaborate">
                <div class="schedule_item important">
                    <div class="schedule_header">
                        <p class="schedule_title">Thứ 6 - 06/09/2024</p>
                    </div>

                    <div class="schedule_body">
                        <span>Hội nghị triển khai công tác giáo vụ đầu năm </span>
                        <span>Nội dung: Họp triển khai nội dung đầu năm</span>
                        <span>Người chủ trì : Hiệu trưởng nhà trường</span>
                        <span>Thời gian : 10:30</span>
                        <span>Địa điểm : Phòng họp 01</span>
                        <span>Ghi chú : Quan trọng</span>
                    </div>
                </div>

                <div class="schedule_item normal">
                    <div class="schedule_header">
                        <p class="schedule_title">Thứ 5 - 12/09/2024</p>
                    </div>

                    <div class="schedule_body">
                        <span>Họp với Phòng Tài chính về ngân sách năm học</span>
                        <span>Nội dung: Phân bổ ngân sách và lên kế hoạch...</span>
                        <span>Người chủ trì : Trần Nguyên Khởi</span>
                        <span>Thời gian : 14:00 - 015:00:</span>
                        <span>Địa điểm : Phòng họp 02</span>
                        <span>Ghi chú : ....</span>
                    </div>
                </div>

                <div class="schedule_item normal past">
                    <div class="schedule_header">
                        <p class="schedule_title">Thứ 5 - 12/09/2024</p>
                    </div>

                    <div class="schedule_body">
                        <span>Họp ban Giám Hiệu</span>
                        <span>Nội dung: Họp ban Giám Hiệu</span>
                        <span>Người chủ trì : Trần Nguyên Khởi</span>
                        <span>Thời gian : :0800 - 09:00:</span>
                        <span>Địa điểm : Phòng họp 04</span>
                        <span>Ghi chú : ....</span>
                    </div>
                </div>
            </div>

            <!-- LỊCH CÔNG TÁC CỦA TÔI -->
            <div class="schedule_content" style="display: none" id="mycollaborate">

                <div class="create_schedule">
                    <span>Tạo lịch</span>
                    <i data-feather="plus" id="opencollaborateModal"
                        style="color: #bcbcbd; width: 25px; height: 25px"></i>

                </div>

                <div class="schedule_item important">
                    <div class="schedule_header">
                        <p class="schedule_title">Thứ 5 - 15/08/2024</p>
                    </div>

                    <div class="schedule_body">
                        <span>Họp với Phòng Truyền thông</span>
                        <span>Nội dung: Lên kế hoạch quảng bá trường</span>
                        <span>Người chủ trì : Nguyễn Thị Ánh Xuân </span>
                        <span>Thời gian : 08:00 - 09:30</span>
                        <span>Địa điểm : Phòng họp 01</span>
                        <span>Ghi chú : ....</span>
                    </div>
                </div>

                <div class="schedule_item normal">
                    <div class="schedule_header">
                        <p class="schedule_title">Thứ 5 - 08/08/2024</p>
                    </div>

                    <div class="schedule_body">
                        <span>Họp với Ban Giám hiệu về tổng kết tuần</span>
                        <span>Nội dung: Tổng kết cuối tuần</span>
                        <span>Người chủ trì : Trần Nguyên Khởi</span>
                        <span>Thời gian : 08:00 - 09:30</span>
                        <span>Địa điểm : Phòng học lớp 9B</span>
                        <span>Ghi chú : .....</span>
                    </div>
                </div>

                <div class="schedule_item normal">
                    <div class="schedule_header">
                        <p class="schedule_title">Thứ 7 - 03/08/2024</p>
                    </div>

                    <div class="schedule_body">
                        <span>Họp với Phòng Hành chính</span>
                        <span>Nội dung: Công tác chuẩn bị cho tuần</span>
                        <span>Người chủ trì : Hiệu trưởng nhà trường</span>
                        <span>Thời gian : 10:00 - 11:30</span>
                        <span>Địa điểm : Phòng học lớp 9A</span>
                        <span>Ghi chú : ....</span>
                    </div>
                </div>
            </div>

            <!-- MODAL TẠO LỊCH CÔNG TÁC-->
            <div class="modal" id="collaborateModal" style="display: none;">
                <div class="modal-content">
                    <div class="modal_header">
                        <p>Thông tin lịch công tác</p>
                    </div>
                    <div class="modal_body">
                        <div class="body_title">
                            <span>Tên lịch công tác</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>
                        <div class="body_title">
                            <span>Nội dung công tác</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>
                        <div class="body_title">
                            <span>Thời gian</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>
                        <div class="body_title">
                            <span>Địa điểm</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>
                        <div class="body_title">
                            <span>Ghi chú</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>
                        <div class="body_title">
                            <span>Người tham gia</span>
                        </div>
                        <div class="body_input">
                            <input type="text">
                        </div>

                        <div class="body_button">
                            <button type="button" class="btn_save" id="savecollaborateModal">Tạo</button>
                            <button type="button" class="btn_cancle" id="closecollaborateModal">Hủy</button>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </main>




</body>
<script src="../js/back.js"></script>
<script src="./js/choosetab.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>
<script src="./js/openmodal.js"></script>


</html>