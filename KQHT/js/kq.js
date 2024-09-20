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

// Khi người dùng bấm vào nút tải về
downloadBtn.addEventListener('click', function () {
    const link = document.createElement('a');
    link.href = image.src; // Đường dẫn ảnh
    link.download = 'downloaded_image.jpg'; // Tên file sẽ được tải về
    link.click();
});