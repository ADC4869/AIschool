<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý vật chất</title>
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
    <link rel="stylesheet" href="css/class.css">
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
            <div class="title" id="headerTitle">Quản lý vật chất</div>
        </div>
    </header>

    <main>
        <div class="class-info">
            <h3 class="data_lophoc">Lớp 9A1</h3>
            <ul>
                <li>Số bộ bàn ghế học sinh: 40 <span class="edit-icon" onclick="showDropdown(this)"></span></li>
                <li>Số bảng học: 1 <span class="edit-icon" onclick="showDropdown(this)"></span></li>
                <li>Số máy lạnh: 1 <span class="edit-icon" onclick="showDropdown(this)"></span></li>
                <li>Số bộ bàn ghế giáo viên: 1 <span class="edit-icon" onclick="showDropdown(this)"></span></li>
                <li>Số máy chiếu: 1 <span class="edit-icon" onclick="showDropdown(this)"></span></li>
            </ul>

            <!-- Dropdown được đặt ngay dưới ul -->
            <div class="dropdown">
                <label for="status">Tình trạng:</label>
                <select id="status" onchange="showAdditionalFields()">
                    <option value="Tốt">Tốt</option>
                    <option value="cần thay thế">Cần thay thế</option>
                </select>

                <!-- Additional fields hidden initially -->
                <div id="additional-fields" style="display: none;">
                    <label for="replacement-quantity">Số lượng cần thay thế:</label>
                    <input type="number" id="replacement-quantity" placeholder="Nhập số lượng">

                    <label for="note">Ghi chú:</label>
                    <textarea id="note" placeholder="Ghi chú"></textarea>

                    <!-- "Lưu" Button -->
                    <button id="save-btn">Lưu</button>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="../js/back.js"></script>
<script>
function showDropdown(icon) {
    const dropdown = document.querySelector('.dropdown');
    const allIcons = document.querySelectorAll('.edit-icon');

    if (dropdown.style.display === 'block') {
        dropdown.style.display = 'none';
    } else {
        dropdown.style.display = 'block';
        const ul = icon.closest('ul');
        ul.insertAdjacentElement('afterend', dropdown);
    }
}

function showAdditionalFields() {
    const statusSelect = document.getElementById('status');
    const additionalFields = document.getElementById('additional-fields');

    if (statusSelect.value === 'cần thay thế') {
        additionalFields.style.display = 'block';
    } else {
        additionalFields.style.display = 'none';
    }
}

document.getElementById('save-btn').addEventListener('click', function() {
    // Show a simple alert for success
    alert('Lưu thành công!');

    // Close the dropdown
    const dropdown = document.querySelector('.dropdown');
    dropdown.style.display = 'none';
});
</script>
</html>