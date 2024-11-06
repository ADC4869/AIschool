// mở modal
gradeElements.forEach(function (grade) {
    grade.onclick = function () {
        modal.style.display = "flex";
    };
});

// đóng modal
span.onclick = function () {
    modal.style.display = "none";
};

// nhấp vào bên ngoài modal
window.onclick = function (event) {
    if (event.target == modal) {
        event.stopPropagation(); 
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
