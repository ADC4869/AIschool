<?php
// Khởi tạo session nếu chưa có
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Lấy giao diện đã lưu từ cookie (nếu có)
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light'; // Mặc định là 'light'
?>

<script>
        document.addEventListener("DOMContentLoaded", function() {
            // Thay đổi lớp theo theme
            document.body.classList.add('<?php echo $theme; ?>-theme');
            
            // Cập nhật màu chữ
            if ('<?php echo $theme; ?>' === 'light') {
                document.body.style.color = 'black'; // Màu chữ cho giao diện sáng
            } else {
                document.body.style.color = 'white'; // Màu chữ cho giao diện tối
            }
        });
    </script>