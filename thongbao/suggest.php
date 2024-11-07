<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gợi ý</title>
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
    <link rel="stylesheet" href="./css/suggest.css">
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
            <div class="title">Góp ý</div>
        </div>
    </header>

    <main>
        <form method="post" enctype="multipart/form-data" id="feedbackForm">
            <div class="form-group">
                <label for="title">Danh mục <span class="required">*</span></label>
                <input class="subject_datalist" list="subjects" id="subject" name="subject" required>
                <datalist id="subjects">
                    <option value="Cơ sở vật chất">
                    <option value="Chất lượng giảng dạy">
                    <option value="Nâng cao kết quả học tập">
                    <option value="Hoạt động ngoại khóa">
                    <option value="An toàn và an ninh">
                    <option value="Công nghệ trong giáo dục">
                </datalist>
            </div>
            <div class="form-group">
                <label for="title">Tiêu đề <span class="required">*</span></label>
                <input class="input_tieudegopy" type="text" id="title" name="title" required>

            </div>

            <div class="form-group">
                <label for="content">Nội dung <span class="required">*</span></label>
                <textarea class="input_noidunggopy" id="content" name="content" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="file">Đính kèm tệp</label>
                <input class="input_file" type="file" id="file" name="file" accept="image/*">
            </div>
            <div class="form-group-button">
                <div class="button_camera">
                    <i class="fa-solid fa-camera"></i>
                </div>
                <div class="button_video">
                    <i class="fa-solid fa-video"></i>
                </div>
            </div>

            <div class="form-actions">
                <button type="reset" class="btn cancel" onclick="showConfirmDialog()">Hủy</button>
                <button type="submit" class="btn submit">Gửi</button>
            </div>

        </form>

        <!-- Hộp thoại xác nhận -->
        <div id="confirmDialog" class="confirm-dialog">
            <p>Bạn có chắc muốn thoát hay không? Thông tin sẽ không được lưu</p>
            <div class="dialog-actions">
                <button class="btn cancel" onclick="closeConfirmDialog()">Hủy</button>
                <button class="btn ok" onclick="confirmExit()">OK</button>
            </div>
        </div>

        <div class="confirm-overlay"></div>

        <!-- Hộp thoại thành công -->
        <div id="successDialog" class="success-dialog">
            <div class="success-content">
                <div class="success-icon">
                    <span>&#10004;</span> <!-- Biểu tượng dấu check -->
                </div>
                <p>Gửi góp ý thành công</p>
            </div>
        </div>
    </main>
</body>
<script src="../js/back.js"></script>
<script>
    // Hiển thị hộp thoại xác nhận
    function showConfirmDialog() {
        document.getElementById('confirmDialog').style.display = 'block';
        document.querySelector('.confirm-overlay').style.display = 'block';
    }

    // Đóng hộp thoại xác nhận
    function closeConfirmDialog() {
        document.getElementById('confirmDialog').style.display = 'none';
        document.querySelector('.confirm-overlay').style.display = 'none';
    }

    // Xác nhận thoát (có thể chuyển hướng trang hoặc làm hành động khác)
    function confirmExit() {
        closeConfirmDialog();
        // Thực hiện hành động thoát, ví dụ như quay lại trang trước
        window.location.href = 'notificationHS.php'; // Redirect về trang chủ hoặc trang trước
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Bắt sự kiện submit của form
        const feedbackForm = document.getElementById('feedbackForm');

        feedbackForm.addEventListener('submit', function (event) {
            event.preventDefault(); // Ngăn việc submit form ngay lập tức

            // Hiển thị hộp thoại thành công
            document.getElementById('successDialog').style.display = 'block';

            // Sau 2 giây, chuyển hướng đến trang notificationHS.php
            setTimeout(function () {
                window.location.href = 'notificationHS.php';
            }, 1000); // 2000ms = 2 giây
        });
    });
</script>

</html>