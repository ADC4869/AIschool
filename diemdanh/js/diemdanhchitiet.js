function showSection(classId) {
    // Ẩn tất cả các phần thông tin
    document.querySelectorAll('.main__class').forEach(detail => {
        detail.classList.add('hidden');
    });

    // Hiển thị phần thông tin của lớp được chọn
    document.getElementById(classId).classList.remove('hidden');
}
function showStatus(status) {
    // Ẩn tất cả các phần danh sách trạng thái
    document.querySelectorAll('.main__infodetail').forEach(detail => {
        detail.classList.add('hidden');
    });

    // Hiển thị phần thông tin trạng thái được chọn
    document.getElementById(status).classList.remove('hidden');
}



/// Lấy checkbox và footer
const checkboxes = document.querySelectorAll('input[type="checkbox"]');
const footer = document.querySelector('footer');

// Hàm kiểm tra trạng thái checkbox và hiển thị footer
function toggleFooter() {
    let isChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
    footer.classList.toggle('hidden', !isChecked);
}

// Lắng nghe sự kiện thay đổi trên các checkbox
checkboxes.forEach(checkbox => {
    checkbox.addEventListener('change', toggleFooter);
});

// Lắng nghe sự kiện click vào bất cứ đâu trên trang
document.addEventListener('click', function (event) {
    // Kiểm tra xem click có xảy ra bên trong footer hoặc checkbox hay không
    let isClickInside = footer.contains(event.target) || Array.from(checkboxes).some(checkbox => checkbox.contains(event.target));

    // Ẩn footer và bỏ chọn checkbox nếu click ra ngoài
    if (!isClickInside) {
        footer.classList.add('hidden');
        checkboxes.forEach(checkbox => checkbox.checked = false);
    }
});
