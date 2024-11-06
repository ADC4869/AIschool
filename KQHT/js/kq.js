// Nhận phương thức
var modal1 = document.getElementById("gradeModal1");
var modal2 = document.getElementById("gradeModal2");

// Nhận tất cả các điểm và dấu cộng
var gradeElements = document.querySelectorAll(".grades");
var plusButtons = document.querySelectorAll(".enter-grade-button");

// Lấy các phần tử <span> để đóng từng modal
var closeButtons = document.querySelectorAll(".modal .close");

// Khi người dùng nhấp vào điểm, hãy mở modal 1 và cập nhật nội dung
gradeElements.forEach(function (element) {
    element.onclick = function () {
        var gradeValue = element.getAttribute("data-grade");
        var subjectValue = element.getAttribute("data-subject");
        document.getElementById("gradeValue1").textContent = gradeValue;
        document.getElementById("subject1").textContent = subjectValue;
        modal1.style.display = "flex";
    };
});

// Khi người dùng nhấp vào dấu cộng, hãy mở modal 2 và cập nhật nội dung
plusButtons.forEach(function (button) {
    button.onclick = function () {
        var subjectValue = button.getAttribute("data-subject");
        document.getElementById("subject2").textContent = subjectValue;
        modal2.style.display = "flex";
    };
});

// Khi người dùng nhấp vào <span> (x), hãy đóng phương thức
closeButtons.forEach(function (span) {
    span.onclick = function () {
        span.closest('.modal').style.display = "none";
    };
});

// Vô hiệu hóa đóng khi nhấp vào bên ngoài phương thức
window.onclick = function (event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
};

// Tải ảnh cho Modal 1 (tải về máy)
const downloadBtn1 = document.getElementById('downloadBtn1');
const image1 = document.getElementById('image1');

downloadBtn1.addEventListener('click', () => {
    const link = document.createElement('a');
    link.href = image1.src; // Đường dẫn ảnh
    link.download = 'downloaded_image.jpg'; // Tên file sẽ được tải về
    link.click();
});

// Tải ảnh cho Modal 2 (tải lên máy)
const uploadBtn2 = document.getElementById('uploadBtn2');
const image2 = document.getElementById('image2');
const fileInput2 = document.createElement('input');
fileInput2.type = 'file';
fileInput2.style.display = 'none';
document.body.appendChild(fileInput2);

uploadBtn2.addEventListener('click', () => {
    fileInput2.click();
});

fileInput2.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            image2.src = e.target.result; // Cập nhật ảnh đã chọn vào modal 2
        };
        reader.readAsDataURL(file);
    }
});
