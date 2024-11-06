// Lấy modal và các phần tử cần thiết
var modal = document.getElementById("gradeModal");
var gradeElements = document.querySelectorAll(".grades");
var span = document.getElementsByClassName("close")[0];

// Khi người dùng nhấp vào bất kỳ lớp nào, hãy mở modal
gradeElements.forEach(function (grade) {
    grade.onclick = function () {
        modal.style.display = "flex";
    };
});

// Khi người dùng nhấp vào <span> (x), đóng modal
span.onclick = function () {
    modal.style.display = "none";
};

// Vô hiệu hóa đóng khi nhấp vào bên ngoài modal
window.onclick = function (event) {
    if (event.target == modal) {
        event.stopPropagation(); // Ngăn chặn hành động mặc định
    }
};

// Tải ảnh về
const downloadBtn = document.getElementById('downloadBtn');
const image = document.getElementById('image');

// Khi bấm nút "Tải ảnh", sẽ tải ảnh về thiết bị
downloadBtn.addEventListener('click', () => {
    const link = document.createElement('a');
    link.href = image.src; // Đường dẫn đến ảnh
    link.download = 'downloaded_image.jpg'; // Tên file sẽ được tải về
    link.click();
});
