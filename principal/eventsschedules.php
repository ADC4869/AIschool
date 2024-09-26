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
            <div class="title">Sự kiện và lịch trình</div>
        </div>
    </header>

    <main>
        <!-- TAB SỰ KIỆN -->
        <div class="main_tab">
            <div class="tab_item" id="tab_eventpresent">
                <p>Sự kiện <br> đang diễn ra</p>
            </div>

            <div class="tab_item" id="tab_upcoming">
                <p>Sự kiện <br> sắp tới</p>
            </div>

            <div class="tab_item">
                <p>Lịch họp</p>
            </div>

            <div class="tab_item">
                <p>Lịch công tác</p>
            </div>

        </div>
        <!-- SỰ KIỆN ĐANG DIỄN RA -->
        <div class="main_eventpresent" id="eventpresent" style="display: none">
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
                    </div>
                </div>
            </div>
        </div>
        <!-- LỊCH HỌP -->
            <div class="main_schedule">
                <div class="schedule_tab">
                    <div class="tab_schoolschedule">
                        <div class="schoolschedule">
                            <p>Lịch họp của trường</p>
                        </div>
                    </div>
                    <div class="tab_myschedule">
                    <div class="myschedule">
                            <p>Lịch họp của tôi</p>
                        </div>
                    </div>
                </div>


               


            </div>


    </main>




</body>
<script src="../js/back.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>
<script>
    document.getElementById('tab_eventpresent').addEventListener('click', function () {
        // Ẩn tất cả các nội dung khác
        document.getElementById('eventpresent').style.display = 'flex'; // Hiển thị sự kiện đang diễn ra
        document.getElementById('upcoming').style.display = 'none';     // Ẩn sự kiện sắp diễn ra
    });

    document.getElementById('tab_upcoming').addEventListener('click', function () {
        // Ẩn tất cả các nội dung khác
        document.getElementById('eventpresent').style.display = 'none';  // Ẩn sự kiện đang diễn ra
        document.getElementById('upcoming').style.display = '';      // Hiển thị sự kiện sắp diễn ra
    });


    // MODAL
    // Lấy các phần tử
    var modal = document.getElementById("myModal");
    var openBtn = document.getElementById("openModal");
    var closeBtn = document.getElementsByClassName("close")[0];

    // Khi nhấn vào dấu cộng, mở modal
    openBtn.onclick = function () {
        modal.style.display = "flex";
    }

    // Khi nhấn vào dấu X, đóng modal
    closeBtn.onclick = function () {
        modal.style.display = "none";
    }

    // Khi nhấn ngoài modal, cũng đóng modal
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


</script>

</html>