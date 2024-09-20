<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập chưa và vai trò có phải là giáo viên không
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'giaovien') {
    header("Location: ../login/login.php");
    exit;
}

// Kết nối đến cơ sở dữ liệu
$conn = new mysqli('localhost', 'root', '', 'kc_news');
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

$user_id = $_SESSION['user_id'];  // Lấy ID giáo viên từ session

// Truy vấn lấy thông tin lịch dạy của giáo viên
$sql = "SELECT c.class_name, s.subject_name, sch.day_of_week, sch.time_slot
        FROM schedules sch
        JOIN classes c ON sch.class_id = c.id
        JOIN subjects s ON sch.subject_id = s.id
        JOIN teachers t ON sch.teacher_id = t.id
        WHERE t.id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$result = $stmt->get_result();

$schedules = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $schedules[] = $row; // Lưu tất cả các lớp và lịch dạy vào mảng
    }
} else {
    $schedules = null; // Nếu không có lịch dạy, đặt biến là null
}

$stmt->close();
$conn->close();
?>

<!-- Giáo viên -->
<div class="container">
    <main>
        <div class="main__title">
            <p>Lịch dạy, lịch coi thi theo tuần</p>
        </div>

        <div class="main__radio">
            <label>
                <input type="radio" name="options" value="all" checked>
                Tất cả
            </label>
            <label>
                <input type="radio" name="options" value="schedule">
                Lịch dạy
            </label>
            <label>
                <input type="radio" name="options" value="exam">
                Lịch coi thi
            </label>
        </div>

        <div class="main__calendar">
            <input type="date" class="calendar">
            <button type="button" class="btn__present">
                <i class="fa-regular fa-calendar" style="color: #ffffff;"></i>
                <p>Hiện tại</p>
            </button>
            <button type="button" class="btn__undo">
                <i class="ti-angle-left"></i>
                <p>Trở về</p>
            </button>
            <button type="button" class="btn__next">
                <p>Tiếp</p>
                <i class="ti-angle-right"></i>
            </button>
        </div>
        <div class="main__schedule">
            <table class="schedule">
                <thead class="schedule__time">
                    <tr>
                        <th class="cahoc">Ca dạy</th>
                        <th>
                            <p>Thứ Hai</p>
                            <p>09/09/2024</p>
                        </th>
                        <th>
                            <p>Thứ Ba</p>
                            <p>10/09/2024</p>
                        </th>
                        <th>
                            <p>Thứ Tư</p>
                            <p>11/09/2024</p>
                        </th>
                        <th>
                            <p>Thứ Năm</p>
                            <p>12/09/2024</p>
                        </th>
                        <th>
                            <p>Thứ Sáu</p>
                            <p>13/09/2024</p>
                        </th>
                        <th>
                            <p>Thứ Bảy</p>
                            <p>14/09/2024</p>
                        </th>
                        <th>
                            <p>Chủ Nhật</p>
                            <p>15/09/2024</p>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($schedules): ?>
                        <?php foreach ($schedules as $schedule): ?>
                            <tr class="colum__timetable">
                                <td class="body__time">Sáng</td>
                                <td class="body__subject">
                                    <div class="timetable__detail color__<?php echo $schedule['subject_name']; ?>">
                                        <p>Môn: <?php echo $schedule['subject_name']; ?></p>
                                        <p>Lớp: <?php echo $schedule['class_name']; ?></p>
                                        <p>Tiết: <?php echo $schedule['time_slot']; ?></p>
                                    </div>
                                </td>
                                <!-- Add more days and slots based on your needs -->
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="8">Không có lịch dạy.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="main__color">
            <div class="color__detail">
                <div class="color color__lythuyet"></div>
                <div class="title">
                    <p>Lịch dạy lý thuyết</p>
                </div>
            </div>
            <div class="color__detail">
                <div class="color color__thuchanh"></div>
                <div class="title">
                    <p>Lịch dạy thực hành</p>
                </div>
            </div>
            <div class="color__detail">
                <div class="color color__online"></div>
                <div class="title">
                    <p>Lịch dạy trực tuyến</p>
                </div>
            </div>
            <div class="color__detail">
                <div class="color color__lichthi"></div>
                <div class="title">
                    <p>Lịch coi thi</p>
                </div>
            </div>
            <div class="color__detail">
                <div class="color color__tamngung"></div>
                <div class="title">
                    <p>Lịch tạm ngưng</p>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- Giáo viên -->
    <!-- <div class="container">
        <main>
            <div class="main__title">
                <p>Lịch dạy, lịch coi thi</p>
            </div>

            <div class="main__radio">
                <label>
                    <input type="radio" name="options" value="all" checked>
                    Tất cả
                </label>
                <label>
                    <input type="radio" name="options" value="schedule">
                    Lịch dạy
                </label>
                <label>
                    <input type="radio" name="options" value="exam">
                    Lịch coi thi
                </label>
            </div>

            <div class="main__calendar">
                <input type="date" class="calendar">
                <button type="button" class="btn__present">
                    <i class="fa-regular fa-calendar" style="color: #ffffff;"></i>
                    <p>Hiện tại</p>
                </button>
                <button type="button" class="btn__undo">
                    <i class="ti-angle-left"></i>
                    <p>Trở về</p>
                </button>
                <button type="button" class="btn__next">
                    <p>Tiếp</p>
                    <i class="ti-angle-right"></i>
                </button>
            </div>
            <div class="main__schedule">
                <table class="schedule">
                    <thead class="schedule__time">
                        <tr>
                            <th class="cahoc">Ca dạy</th>
                            <th>
                                <p>Thứ Hai</p>
                                <p>09/09/2024</p>
                            </th>
                            <th>
                                <p>Thứ Ba</p>
                                <p>10/09/2024</p>
                            </th>
                            <th>
                                <p>Thứ Tư</p>
                                <p>11/09/2024</p>
                            </th>
                            <th>
                                <p>Thứ Năm</p>
                                <p>12/09/2024</p>
                            <th>
                                <p>Thứ Sáu</p>
                                <p>13/09/2024</p>
                            </th>
                            <th>
                                <p>Thứ Bảy</p>
                                <p>14/09/2024</p>
                            </th>
                            <th>
                                <p>Chủ Nhật</p>
                                <p>15/09/2024</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="colum__timetable">
                            <td class="body__time">Sáng</td>
                            <td class="body__subject">
                                <div class="timetable__detail color__lythuyet">
                                    <p>Môn: Văn</p>
                                    <p>Lớp: 9A1</p>
                                    <p>Tiết: 1-2</p>
                                    <p>Phòng: 9A1</p>
                                </div>
                                <div class="timetable__detail color__online">
                                    <p>Môn: Văn</p>
                                    <p>Lớp: 9A1</p>
                                    <p>Tiết: 1-2</p>
                                    <p>Phòng: 9A1</p>
                                </div>
                            </td>
                            <td class="body__subject"></td>
                            <td class="body__subject">
                                <div class="timetable__detail color__lichthi">
                                    <p>Môn: Văn</p>
                                    <p>Lớp: 9A1</p>
                                    <p>Tiết: 1-2</p>
                                    <p>Phòng: 9A1</p>
                                </div>
                                <div class="timetable__detail1">

                                </div>
                            </td>
                            <td class="body__subject"></td>
                            <td class="body__subject">
                                <div class="timetable__detail color__lythuyet">
                                    <p>Môn: Văn</p>
                                    <p>Lớp: 9A1</p>
                                    <p>Tiết: 1-2</p>
                                    <p>Phòng: 9A1</p>
                                </div>

                                <div class="timetable__detail color__thuchanh">
                                    <p>Môn: Văn</p>
                                    <p>Lớp: 9A1</p>
                                    <p>Tiết: 1-2</p>
                                    <p>Phòng: 9A1</p>
                                </div>
                            </td>
                            <td class="body__subject">
                                <div class="timetable__detail color__thuchanh">
                                    <p>Môn: Văn</p>
                                    <p>Lớp: 9A1</p>
                                    <p>Tiết: 1-2</p>
                                    <p>Phòng: 9A1</p>
                                </div>

                                <div class="timetable__detail color__online">
                                    <p>Môn: Văn</p>
                                    <p>Lớp: 9A1</p>
                                    <p>Tiết: 1-2</p>
                                    <p>Phòng: 9A1</p>
                                </div>
                            </td>
                            <td class="body__subject"></td>
                        </tr>
                        <tr>
                            <td class="body__time">Chiều</td>
                            <td></td>
                            <td>
                                <div class="timetable__detail color__thuchanh">
                                    <p>Môn: Văn</p>
                                    <p>Lớp: 9A1</p>
                                    <p>Tiết: 1-2</p>
                                    <p>Phòng: 9A1</p>
                                </div>

                                <div class="timetable__detail color__tamngung">
                                    <p>Môn: Văn</p>
                                    <p>Lớp: 9A1</p>
                                    <p>Tiết: 1-2</p>
                                    <p>Phòng: 9A1</p>
                                </div>
                            </td>
                            <td>
                                <div class="timetable__detail color__lythuyet">
                                    <p>Môn: Văn</p>
                                    <p>Lớp: 9A1</p>
                                    <p>Tiết: 1-2</p>
                                    <p>Phòng: 9A1</p>
                                </div>
                                <div class="timetable__detail1">

                                </div>
                            </td>
                            <td>
                                <div class="timetable__detail color__lythuyet">
                                    <p>Môn: Văn</p>
                                    <p>Lớp: 9A1</p>
                                    <p>Tiết: 1-2</p>
                                    <p>Phòng: 9A1</p>
                                </div>

                                <div class="timetable__detail color__lythuyet">
                                    <p>Môn: Văn</p>
                                    <p>Lớp: 9A1</p>
                                    <p>Tiết: 1-2</p>
                                    <p>Phòng: 9A1</p>
                                </div>
                            </td>
                            <td>
                                <div class="timetable__detail color__lythuyet">
                                    <p>Môn: Văn</p>
                                    <p>Lớp: 9A1</p>
                                    <p>Tiết: 1-2</p>
                                    <p>Phòng: 9A1</p>
                                </div>

                                <div class="timetable__detail color__lythuyet">
                                    <p>Môn: Văn</p>
                                    <p>Lớp: 9A1</p>
                                    <p>Tiết: 1-2</p>
                                    <p>Phòng: 9A1</p>
                                </div>
                            </td>
                            <td>

                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="body__time">Tối</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="main__color">
                <div class="color__detail">
                    <div class="color color__lythuyet">
                    </div>
                    <div class="title">
                        <p>Lịch dạy lý thuyết</p>
                    </div>
                </div>
                <div class="color__detail">
                    <div class="color color__thuchanh">
                    </div>
                    <div class="title">
                        <p>Lịch dạy thực hành</p>
                    </div>
                </div>
                <div class="color__detail">
                    <div class="color color__online">
                    </div>
                    <div class="title">
                        <p>Lịch dạy trực tuyến</p>
                    </div>
                </div>
                <div class="color__detail">
                    <div class="color color__lichthi">
                    </div>
                    <div class="title">
                        <p>Lịch coi thi</p>
                    </div>
                </div>
                <div class="color__detail">
                    <div class="color color__tamngung">
                    </div>
                    <div class="title">
                        <p>Lịch tạm ngưng</p>
                    </div>
                </div>
            </div>
        </main>
    </div> -->