<?php
session_start();
include '../database/db_config.php';

// Kiểm tra quyền truy cập
if ($_SESSION['role'] !== 'giaovien') {
    die("Bạn không có quyền truy cập trang này.");
}

// Lấy ID học sinh từ URL
$student_id = isset($_GET['student_id']) ? $_GET['student_id'] : '';

if (empty($student_id)) {
    die("ID học sinh không hợp lệ.");
}

// Kiểm tra kết nối cơ sở dữ liệu
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lấy thông tin học sinh và lớp
$stmt = $conn->prepare("SELECT u.fullname AS student_name, c.class_name 
                        FROM students s 
                        JOIN users u ON s.id = u.id 
                        JOIN classes c ON s.class_id = c.id 
                        WHERE s.student_code = ?");
$stmt->bind_param("s", $student_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $student_info = $result->fetch_assoc();
    $student_name = $student_info['student_name'];
    $class_name = $student_info['class_name'];
} else {
    die("Học sinh không tìm thấy.");
}

$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả học tập</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="./css/kqht.css">
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
            <div class="row">
                <span>Họ tên: <?php echo htmlspecialchars($student_name); ?></span>
                <span>Lớp: <?php echo htmlspecialchars($class_name); ?></span>
            </div>

            <div class="row">
                <span id="selectedSemester">Học kỳ: </span>
                <span id="selectedYear">Năm học: </span>
            </div>
        </div>
    </header>

    <main>
        <div class="table-container">
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
                            <th>Văn</th>
                            <th>Toán</th>
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
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn địa lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
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
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn địa lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
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
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn địa lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
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
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn địa lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
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
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tiếng Anh -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Lịch sử -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn địa lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Hóa học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Sinh học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Vật Lý -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
                                <div class="grades-wrapper"></div>
                            </td>

                            <!-- Tổng kết môn Tin học -->
                            <td>
                                <button class="enter-grade-button">Nhập điểm</button>
                                <input type="number" class="grade-input" min="0" max="10" style="display:none;"/>
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
                                <p>Trường: IUH</p>
                                <p>Lớp: 1B</p>
                                <p>Tên: Nguyễn Thị Yến Loan</p>
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
    </main>
</body>
<script src="./js/kq.js"></script>
<script src="../js/back.js"></script>
<script src="./js/diemso.js"></script>
<script>
// Hiển thị năm học và học kỳ đã chọn
window.onload = function() {
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
</html>