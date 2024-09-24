<?php
if (isset($_GET['role'])) {
    $user_role = $_GET['role'];
} else {
    $user_role = 'hocsinh';
}
?>

<?php
include './database/theme_loader.php';

// Kiểm tra xem người dùng đã đăng nhập chưa
if (!isset($_SESSION['role'])) {
    // Nếu chưa đăng nhập, chuyển hướng tới trang đăng nhập
    header("Location: ../login/login.php");
    exit;  // Dừng thực thi script sau khi chuyển hướng
}

// Giả sử bạn đã kết nối với cơ sở dữ liệu và xác thực người dùng ở đây
$fullname = isset($_SESSION['fullname']) ? $_SESSION['fullname'] : 'Người dùng';
$user_role = isset($_SESSION['role']) ? $_SESSION['role'] : 'guest';
$teacher_code = isset($_SESSION['teacher_code']) ? $_SESSION['teacher_code'] : 'mã số';
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;  // Lấy ID từ session

// Kiểm tra và lấy teacher_id từ URL
$teacher_id = isset($_GET['teacher_id']) ? $_GET['teacher_id'] : $user_id; // Sử dụng user_id nếu không có teacher_id
$student_id = isset($_GET['student_id']) ? $_GET['student_id'] : $user_id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- Css -->
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/giaodien.css">
</head>
<body>
    <header>
        <div class="header">
            <h1><span>Xin chào,</span><br><?php echo htmlspecialchars($fullname); ?></h1>
            <img src="img/a.jpg" alt="Avatar">
        </div>
    </header>

    <main>
        <div class="button-container">
            <!-- Phân quyền cho học sinh -->
            <?php if ($user_role == 'hocsinh'): ?>
                <a href="./timetable/index.php" class="button"><i class="fa-regular fa-calendar"></i> Thời khóa biểu</a>
                <a href="tuition.php" class="button"><i class="fa-solid fa-coins" style="color: #63E6BE;"></i> Học phí</a>
                <a href="./information/index.php" class="button"><i class="fa-solid fa-circle-info"
                        style="color: #B197FC;"></i> Thông tin liên lạc</a>
                <a href="./diemdanh/index.php" class="button"><i class="fa-solid fa-calendar-days"></i> Điểm danh</a>
                <a href="./meeting/index.php" class="button"><i class="fa-solid fa-book"></i> Lịch họp</a>
                <a href="./thongtingiaovienhocsinh/index.php" class="button"><i class="fa-solid fa-medal"
                        style="color: #FFD43B;"></i> Thông tin</a>
            <?php endif; ?>

            <!-- Phân quyền cho giáo viên -->
            <?php if ($user_role == 'giaovien'): ?>
                <a href="./timetable/index.php?role=giaovien" class="button">
                    <div class="circle circle__timetable">
                        <i class="fa-regular fa-calendar" style="color: #ffffff;"></i>
                    </div>
                    Thời khóa biểu
                </a>

                <a href="tuition.php?role=giaovien" class="button">
                    <div class="circle circle__fee">
                        <i class="fa-solid fa-dollar-sign" style="color: #ffffff;"></i>
                    </div>
                    Tình trạng học phí
                </a>

                <a href="./information/index.php?role=giaovien" class="button">
                    <div class="circle circle__contact">
                        <i class="fa-solid fa-circle-info" style="color: #ffffff;"></i>
                    </div>
                    Thông tin liên lạc
                </a>

                <a href="./diemdanh/index.php?role=giaovien" class="button">
                    <div class="circle circle__diligence">
                        <i class="fa-regular fa-clipboard" style="color: #ffffff;"></i>
                    </div>
                    Tình trạng chuyên cần
                </a>

                <a href="./meeting/index.php?role=giaovien" class="button">
                    <div class="circle circle__meeting">
                        <i class="fa-solid fa-book-open" style="color: #ffffff;"></i>
                    </div>
                    Lịch họp
                </a>

                <a href="./thongtingiaovienhocsinh/index.php?role=giaovien&teacher_id=<?php echo htmlspecialchars($teacher_id); ?>" class="button">
                    <div class="circle circle__infoclass">
                        <i class="fa-solid fa-users" style="color: #ffffff;"></i>
                    </div>
                    Lớp chủ nhiệm
                </a>
            <?php endif; ?>

            <!-- Phân quyền cho hiệu trưởng -->
            <?php if ($user_role == 'hieutruong'): ?>
                <a href="./principal/statisticsHS.php" class="button"><i class="fa-regular fa-calendar"></i> Thống kê số học
                    sinh</a>
                <a href="./principal/statisticsDD.php" class="button"><i class="fa-solid fa-book"></i> Thống kê điểm
                    danh</a>
                <a href="./principal/statisticsHT.php" class="button"><i class="fa-solid fa-circle-info"
                        style="color: #B197FC;"></i> Thống kê KQHT</a>
                <a href="./principal/event.php" class="button"><i class="fa-solid fa-medal" style="color: #FFD43B;"></i>
                    Quản lý sự kiện và lịch trình</a>
            <?php endif; ?>
        </div>

        <div class="main__content">
            <div class="content__title">
                <p>Hình ảnh nổi bật</p>
            </div>

            <div class="content__slider">
                <img src="img/slide1.jpg" alt="Image 1">
                <img src="img/slide2.jpg" alt="Image 2">
                <img src="img/slide3.jpg" alt="Image 3">
            </div>

            <div class="content__title">
                <p>Tin tức</p>
                <a href="./news.php">
                    <i class="fa-solid fa-ellipsis" style="color: #5C6898;"></i>
                </a>
            </div>

            <div class="content__news">
                <div class="left__news">
                    <a href="">
                        <div class="photo">
                            <img src="./img/thivaolop10.jpg" alt="">
                        </div>

                        <div class="info">
                            <p class="news__title">Tuyển sinh lớp 10 năm học 2024-2025</p>
                            <p class="news__time"><i class="fa-regular fa-clock"></i> 05/08/2024</p>
                        </div>

                    </a>
                </div>

                <div class="right__news">
                    <div class="top__news">
                        <a href="">
                            <div class="photo">
                                <img src="./img/thigiuaki.jpeg" alt="">
                            </div>

                            <div class="info">
                                <p class="news__title">Lịch thi giữa kì học kì I năm học 2024-2025</p>
                                <p class="news__time"><i class="fa-regular fa-clock"></i> 05/08/2024</p>
                            </div>
                        </a>
                    </div>

                    <div class="bottom__news">
                        <a href="">
                            <div class="photo">
                                <img src="./img/thihocsinhgioi.jfif" alt="">
                            </div>

                            <div class="info">
                                <p class="news__title">Kết quả cuộc thi học sinh giỏi cấp trường năm 2024-2024</p>
                                <p class="news__time"><i class="fa-regular fa-clock"></i> 05/08/2024</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="content__title">
                <p>Diễn đàn</p>
                <a href="./forum.php">
                    <i class="fa-solid fa-ellipsis" style="color: #5C6898;"></i>
                </a>
            </div>

            <div class="content__news">
                <div class="left__news">
                    <a href="">
                        <div class="photo">
                            <img src="./img/tg1.jpg" alt="">
                        </div>

                        <div class="info">
                            <p class="news__title">Quản lý thời gian là gì? 9 Cách quản lý thời gian hiệu quả hơn</p>
                            <p class="news__time"><i class="fa-regular fa-clock"></i> 05/08/2024</p>
                        </div>

                    </a>
                </div>

                <div class="right__news">
                    <div class="top__news">
                        <a href="">
                            <div class="photo">
                                <img src="./img/dd.jpg" alt="">
                            </div>

                            <div class="info">
                                <p class="news__title">Kỹ năng mềm là gì? Cách rèn luyện và phát triển kỹ năng mềm</p>
                                <p class="news__time"><i class="fa-regular fa-clock"></i> 05/08/2024</p>
                            </div>
                        </a>
                    </div>

                    <div class="bottom__news">
                        <a href="">
                            <div class="photo">
                                <img src="./img/en.jpg" alt="">
                            </div>

                            <div class="info">
                                <p class="news__title">11 cách tự học tiếng Anh giao tiếp nhanh chóng và hiệu quả nhất
                                </p>
                                <p class="news__time"><i class="fa-regular fa-clock"></i> 05/08/2024</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="content__title">
                <p>Hoạt động ngoại khóa</p>
                <a href="./activity.php">
                    <i class="fa-solid fa-ellipsis" style="color: #5C6898;"></i>
                </a>
            </div>

            <div class="content__news">
                <div class="left__news">
                    <a href="./activitydetail.php">
                        <div class="photo">
                            <img src="./img/dt.jpg" alt="">
                        </div>

                        <div class="info">
                            <p class="news__title">Tham quan tìm hiểu lịch sử dân tộc Việt Nam</p>
                            <p class="news__time"><i class="fa-regular fa-clock"></i> 05/08/2024</p>
                        </div>

                    </a>
                </div>

                <div class="right__news">
                    <div class="top__news">
                        <a href="./activitydetail.php">
                            <div class="photo">
                                <img src="./img/atb.jpg" alt="">
                            </div>

                            <div class="info">
                                <p class="news__title">Chiến dịch lao động làm sạch và nâng cao ý thức bảo vệ m...</p>
                                <p class="news__time"><i class="fa-regular fa-clock"></i> 05/08/2024</p>
                            </div>
                        </a>
                    </div>

                    <div class="bottom__news">
                        <a href="./activitydetail.php">
                            <div class="photo">
                                <img src="./img/cayxanh.jfif" alt="">
                            </div>

                            <div class="info">
                                <p class="news__title">Phát động chương trình 'Triệu cây xanh - Vì một Việt Nam xanh'
                                </p>
                                <p class="news__time"><i class="fa-regular fa-clock"></i> 05/08/2024</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>











    </main>

    <?php include 'footer.php' ?>
</body>

</html>