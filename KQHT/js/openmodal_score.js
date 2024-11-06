// Nhận phương thức
var modal = document.getElementById("gradeModal");

// Nhận các phần tử kích hoạt phương thức
var gradeElements = document.querySelectorAll(".grades");

// Lấy phần tử <span> để đóng phương thức
var span = document.getElementsByClassName("close")[0];

// Khi người dùng nhấp vào bất kỳ lớp nào, hãy mở phương thức 
gradeElements.forEach(function (grade) {
    grade.onclick = function () {
        modal.style.display = "flex";
    }
});

// Khi người dùng nhấp vào <span> (x), hãy đóng phương thức
span.onclick = function () {
    modal.style.display = "none";
}

// Vô hiệu hóa đóng khi nhấp vào bên ngoài phương thức
window.onclick = function (event) {
    if (event.target == modal) {
        event.stopPropagation(); // Ngăn chặn hành động mặc định
    }
}

// Tải ảnh
// Lấy phần tử download button và ảnh
const downloadBtn = document.getElementById('downloadBtn');
    const image = document.getElementById('image');
    const uploadBtn = document.getElementById('uploadBtn');
    const fileInput = document.getElementById('fileInput');

    // Khi bấm vào nút "Tải ảnh", sẽ mở hộp thoại chọn ảnh
    uploadBtn.addEventListener('click', () => {
        fileInput.click(); // Mở hộp thoại chọn file
    });

    // Khi người dùng chọn ảnh từ thiết bị của mình
    fileInput.addEventListener('change', (event) => {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                image.src = e.target.result; // Cập nhật ảnh hiển thị
            };
            reader.readAsDataURL(file);
        }
    });

    // Khi bấm nút "Thay ảnh", sẽ tải ảnh về thiết bị
    downloadBtn.addEventListener('click', () => {
        const link = document.createElement('a');
        link.href = image.src; // Đường dẫn ảnh
        link.download = 'downloaded_image.jpg'; // Tên file sẽ được tải về
        link.click();
    });