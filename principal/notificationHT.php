<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo thông báo mới</title>
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
    <link rel="stylesheet" href="./css/notifi.css">
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
            <div class="title">Tạo thông báo mới</div>
        </div>
    </header>

    <main>
        <form method="post" enctype="multipart/form-data" id="feedbackForm">
            <div class="form-group">
                <label for="title">Tiêu đề <span class="required">*</span></label>
                <input clang="input_tieudethongbao" type="text" id="title" name="title" required>
            </div>

            <div class="form-group">
                <label for="content">Nội dung <span class="required">*</span></label>
                <textarea class="input_noidungthongbao" id="content" name="content" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label for="file">Đính kèm tệp</label>
                <input class="input_file" type="file" id="file" name="file" accept="image/*">
            </div>

            <div class="form-group">
                <label for="recipient">Đối tượng nhận <span class="required">*</span></label>
                <div id="recipientSelector" class="select-box">
                    <span class="select-text">Chọn đối tượng</span>
                    <div class="select-options">
                        <label><input type="checkbox" name="recipient" value="GVCN"> Giáo viên chủ nhiệm</label>
                        <label><input type="checkbox" name="recipient" value="GV"> Tất cả giáo viên</label>
                        <label><input type="checkbox" name="recipient" value="PHHS"> Phụ huynh và học sinh</label>
                        <label><input type="checkbox" name="recipient" value="All"> Tất cả mọi người</label>
                    </div>
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
    window.location.href = '../thongbao/notification.php?role=hieutruong'; // Redirect về trang chủ hoặc trang trước
}
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
// Bắt sự kiện submit của form
    const feedbackForm = document.getElementById('feedbackForm');

    feedbackForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Ngăn việc submit form ngay lập tức

        // Hiển thị hộp thoại thành công
        document.getElementById('successDialog').style.display = 'block';

        // Sau 2 giây, chuyển hướng đến trang notificationHS.php
        setTimeout(function() {
            window.location.href = '../thongbao/notification.php?role=hieutruong';
        }, 1000); // 2000ms = 2 giây
    });
});
</script>

<script>
// JS for the recipient selector
document.addEventListener('DOMContentLoaded', function () {
    const selectBox = document.querySelector('.select-box');
    const options = document.querySelector('.select-options');
    const selectText = document.querySelector('.select-text');

    selectBox.addEventListener('click', function () {
        options.style.display = options.style.display === 'block' ? 'none' : 'block';
    });

    document.querySelectorAll('.select-options input').forEach(input => {
        input.addEventListener('change', function () {
            let selected = Array.from(document.querySelectorAll('.select-options input:checked'))
                .map(checkbox => checkbox.parentElement.textContent.trim())
                .join(', ');

            selectText.textContent = selected.length > 0 ? selected : 'Chọn đối tượng';
        });
    });

    // Close the options box if clicked outside
    document.addEventListener('click', function (e) {
        if (!selectBox.contains(e.target)) {
            options.style.display = 'none';
        }
    });
});
</script>
</html>