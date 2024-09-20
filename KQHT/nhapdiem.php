<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập điểm</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- css -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/nhapdiem.css">
    <link rel="stylesheet" href="../css/footer.css">
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
            <div class="title">Nhập điểm</div>
        </div>
    </header>

    <main>
        <div class="button-container">
            <!-- Nút tải tệp lên -->
            <label for="file-upload" class="upload-button">Tải dữ liệu lên</label>
            <input type="file" id="file-upload" multiple style="display: none;" accept=".doc,.docx,.xls,.xlsx,.pdf,.jpg,.jpeg,.png,.txt"/>
        </div>

        <div id="file-list"></div> <!-- Hiển thị danh sách tệp đã chọn -->
        <div id="file-viewer"></div> <!-- Khu vực hiển thị nội dung tệp -->

        <div class="action-buttons">
            <!-- Nút lưu -->
            <button id="save-button" class="save-button" disabled>Lưu</button>
            <!-- Nút xóa -->
            <button id="delete-button" class="delete-button" disabled>Xóa</button>
        </div>
    </main>
</body>
<script src="../js/back.js"></script>
<script src="./js/nhapdiem.js"></script>
</html>