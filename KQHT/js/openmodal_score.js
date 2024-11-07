const modal = document.getElementById('gradeModal');
    const gradeElements = document.querySelectorAll('.grades');
    const span = document.querySelector('.close');
    const downloadBtn = document.getElementById('downloadBtn');
    const image = document.getElementById('image');

    // Mở modal khi bấm vào điểm
    gradeElements.forEach(function (grade) {
        grade.onclick = function () {
            modal.style.display = "flex"; // Hiển thị modal
        };
    });

    // Đóng modal khi click vào nút đóng
    span.onclick = function () {
        modal.style.display = "none"; // Ẩn modal
    };

    // Đóng modal khi click vào ngoài modal
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none"; // Ẩn modal nếu click vào ngoài modal
        }
    };

    // Tải ảnh khi bấm nút "Tải ảnh"
    downloadBtn.addEventListener('click', () => {
        const link = document.createElement('a');
        link.href = image.src; // Đường dẫn đến ảnh
        link.download = 'downloaded_image.jpg'; // Tên file khi tải ảnh
        link.click();  // Thực hiện tải ảnh
    });