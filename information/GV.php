<?php
session_start();
include '../database/db_config.php';

// Lấy ID lớp từ query string
$class_id = isset($_GET['class_id']) ? intval($_GET['class_id']) : 0;

// Truy vấn để lấy thông tin các giáo viên dạy lớp và giáo viên chủ nhiệm
$query = "
    SELECT 
        t.id AS teacher_id,
        u.fullname AS teacher_name,
        s.subject_name,
        u.phone,
        u.address,
        CASE 
            WHEN c.homeroom_teacher_id = t.id THEN 'GVCN'
            ELSE ''
        END AS note,
        u.fullname AS homeroom_teacher_name
    FROM teacher_subjects ts
    JOIN teachers t ON ts.teacher_id = t.id
    JOIN users u ON t.id = u.id
    JOIN subjects s ON ts.subject_id = s.id
    JOIN classes c ON ts.class_id = c.id
    WHERE ts.class_id = ?
";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $class_id);
$stmt->execute();
$result = $stmt->get_result();

// Xử lý và xuất dữ liệu
$teachers = [];
while ($row = $result->fetch_assoc()) {
    $teachers[] = $row;
}
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AISchool</title>
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
    <link rel="stylesheet" href="css/infocontact.css">
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
            <div class="title">Thông Tin Liên Lạc</div>
        </div>

        <div class="tab-container">
            <div id="chatTab" class="tab active" onclick="openTab('chatTab')">Giáo viên</div>
            <div id="groupTab" class="tab" onclick="openTab('groupTab')">Phụ Huynh</div>
        </div>
    </header>

    <main>
        <!-- Giáo viên -->
        <div id="chatContent" class="tab-content active">
            <?php foreach ($teachers as $teacher): ?>
                <div class="card">
                    <img src="../img/gvn.jpg" alt="Image"> <!-- Placeholder image, replace as needed -->
                    <div class="card-content">
                        <h3>Họ Tên : <?php echo htmlspecialchars($teacher['teacher_name']); ?></h3>
                        <p>Môn: <?php echo htmlspecialchars($teacher['subject_name']); ?></p>
                        <p>Số điện thoại : <?php echo htmlspecialchars($teacher['phone']); ?></p>
                        <p>Địa chỉ: <?php echo htmlspecialchars($teacher['address']); ?></p>
                        <?php if ($teacher['note'] === 'GVCN'): ?>
                            <p>Ghi chú : <?php echo htmlspecialchars($teacher['homeroom_teacher_name']); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="icon">
                        <a href="../call/index.php" style="font-size: 25px; color: var(--primary-color)"><i
                                data-feather="phone" style="color: #5B6998"></i></a>
                        <a href="../chat/chat.php"
                            style="font-size: 25px; color: var(--primary-color); position: relative; left: 30px;"><i
                                data-feather="message-square" style="color: #5B6998"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- <div class="card">
                <img src="../img/gvn.jpg" alt="Image">
                <div class="card-content">
                    <h3>Họ Tên : Trần Thành Đạt</h3>
                    <p>Môn: Văn</p>
                    <p>Số điện thoại : 0369194202</p>
                    <p>Địa chỉ: 299/12 Lê Quang Sung P6 Q6 HCM</p>
                    <p>Ghi chú : GVCN</p>
                </div>
                <div class="icon">
                    <a href="../call/index.php" style="font-size: 25px; color: var(--primary-color)"><i class="fa-solid fa-phone"></i></a>
                    <a href="../chat/chat.php" style="font-size: 25px; color: var(--primary-color); position: relative; left: 30px;"><i class="fa-solid fa-message"></i></a>
                </div>
            </div>

            <div class="card">
                <img src="../img/tg.jpg" alt="Image">
                <div class="card-content">
                    <h3>Họ Tên : Trần Nguyên Khởi</h3>
                    <p>Môn: Lý</p>
                    <p>Số điện thoại : 123456789</p>
                    <p>Địa chỉ: 192/23 Nguyễn Trãi, Quận 5, HCM</p>
                </div>
                <div class="icon">
                    <a href="../call/index.php" style="font-size: 25px; color: var(--primary-color)"><i class="fa-solid fa-phone"></i></a>
                    <a href="../chat/chat.php" style="font-size: 25px; color: var(--primary-color); position: relative; left: 30px;"><i class="fa-solid fa-message"></i></a>                       
                </div>
            </div>

            <div class="card">
                <img src="../img/gvn1.jpg" alt="Image">
                <div class="card-content">
                    <h3>Họ Tên : Lâm Thị Mỹ Ngọc</h3>
                    <p>Môn: Toán</p>
                    <p>Số điện thoại : 123456789</p>
                    <p>Địa chỉ: 192 Tạ Quan Bửu, Quận 8, HCM</p>
                </div>
                <div class="icon">
                    <a href="../call/index.php" style="font-size: 25px; color: var(--primary-color)"><i class="fa-solid fa-phone"></i></a>
                    <a href="../chat/chat.php" style="font-size: 25px; color: var(--primary-color); position: relative; left: 30px;"><i class="fa-solid fa-message"></i></a>
                </div>
            </div> -->
        </div>

        <!-- Phụ huynh -->
        <div id="groupContent" class="tab-content">
            <div class="card">
                <img src="../img/ph.jpg" alt="Image">
                <div class="card-content">
                    <h3>Họ Tên : Lê Hồng Anh</h3>
                    <p>Số học sinh: 2</p>
                    <p>Số điện thoại : 0934567896</p>
                    <p>Địa chỉ: 123/25 Võ Thị Sáu, Quận 3, HCM</p>
                </div>
                <div class="button-group">
                    <a href="../call/index.php" style="font-size: 25px; color: var(--primary-color)"><i
                            data-feather="phone" style="color: #5B6998"></i></a>
                    <a href="../chat/chat.php" style="font-size: 25px; color: var(--primary-color)"><i
                            data-feather="message-square" style="color: #5B6998"></i></a>
                    <button class="detail-button" onclick="openModal()">Chi tiết</button>
                </div>
            </div>

            <div class="modal" id="detailModal">
                <div class="modal-content">
                    <span class="close-button" onclick="closeModal()">&times;</span>
                    <center>
                        <p class="title">Thông tin của các con đang theo học tại trường</p>
                    </center>
                    <div class="student-info">
                        <div class="student-image">
                            <img src="../img/hs.jpg" alt="Student Image">
                            <div class="icon">
                                <a href="../call/index.php" style="font-size: 25px; color: var(--primary-color)"><i
                                        data-feather="phone" style="color: #5B6998"></i></a>
                                <a href="../chat/chathocsinh.php" style="font-size: 25px; color: var(--primary-color)"><i
                                        data-feather="message-square" style="color: #5B6998"></i></a>
                            </div>
                        </div>
                        <div class="student-details">
                            <p>Họ tên: Nguyễn Thị Mỹ Anh</p>
                            <p>Lớp: 9A1</p>
                            <p>Năm học: 2024-2025</p>
                            <p>GVCN: Trần Nguyên Khởi</p>
                            <p>Học lực: Giỏi</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>
                    </div>
                    <div class="student-info">
                        <div class="student-image">
                            <img src="../img/hs1.jpg" alt="Student Image">
                            <div class="icon">
                                <a href="../call/index.php" style="font-size: 25px; color: var(--primary-color)"><i
                                        data-feather="phone" style="color: #5B6998"></i></a>
                                <a href="../chat/chathocsinh.php" style="font-size: 25px; color: var(--primary-color)"><i
                                        data-feather="message-square" style="color: #5B6998"></i></a>
                            </div>
                        </div>
                        <div class="student-details">
                            <p>Họ tên: Nguyễn Minh Khoa</p>
                            <p>Lớp: 6A2</p>
                            <p>Năm học: 2024-2025</p>
                            <p>GVCN: Phạm Thừa Quang</p>
                            <p>Học lực: Giỏi</p>
                            <p>Hạnh kiểm: Tốt</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <img src="../img/ph1.jpg" alt="Image">
                <div class="card-content">
                    <h3>Họ Tên : Nguyễn Đăng Khoa</h3>
                    <p>Số học sinh: 1</p>
                    <p>Số điện thoại : 0345678985</p>
                    <p>Địa chỉ: 208/30 Tên Lửa, Quận Bình Tân, HCM</p>
                </div>
                <div class="button-group">
                    <a href="../call/index.php" style="font-size: 25px; color: var(--primary-color)"><i
                            data-feather="phone" style="color: #5B6998"></i></a>
                    <a href="../chat/chat.php" style="font-size: 25px; color: var(--primary-color)"><i
                            data-feather="message-square" style="color: #5B6998"></i></a>
                    <button class="detail-button">Chi tiết</button>
                </div>
            </div>

            <div class="card">
                <img src="../img/ph2.jpg" alt="Image">
                <div class="card-content">
                    <h3>Họ Tên : Nguyễn Yến Vy</h3>
                    <p>Số học sinh: 2</p>
                    <p>Số điện thoại : 0923456789</p>
                    <p>Địa chỉ: 33, Nguyễn Hữu Thọ, Quận Gò Vấp, HCM</p>
                </div>
                <div class="button-group">
                    <a href="../call/index.php" style="font-size: 25px; color: var(--primary-color)"><i
                            data-feather="phone" style="color: #5B6998"></i></a>
                    <a href="../chat/chat.php" style="font-size: 25px; color: var(--primary-color)"><i
                            data-feather="message-square" style="color: #5B6998"></i></a>
                    <button class="detail-button">Chi tiết</button>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="js/tab.js"></script>
<script src="js/chitiet.js"></script>
<script src="../js/back.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>

</html>