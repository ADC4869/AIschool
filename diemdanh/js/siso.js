function toggleTongSo() {
    var infoTongSo = document.getElementById("infoTongSo");
    var infoHienDien = document.getElementById("infoHienDien");
    var infoVang = document.getElementById("infoVang");
    var infoTre = document.getElementById("infoTre");

    // Ẩn các phần khác
    infoHienDien.style.display = "none";
    infoVang.style.display = "none";
    infoTre.style.display = "none";

    // Toggle Tổng số
    if (infoTongSo.style.display === "none") {
        infoTongSo.style.display = "block";
    } else {
        infoTongSo.style.display = "none";
    }
}

function toggleHienDien() {
    var infoTongSo = document.getElementById("infoTongSo");
    var infoHienDien = document.getElementById("infoHienDien");
    var infoVang = document.getElementById("infoVang");
    var infoTre = document.getElementById("infoTre");

    // Ẩn các phần khác
    infoTongSo.style.display = "none";
    infoVang.style.display = "none";
    infoTre.style.display = "none";

    // Toggle Hiện diện
    if (infoHienDien.style.display === "none") {
        infoHienDien.style.display = "block";
    } else {
        infoHienDien.style.display = "none";
    }
}

function toggleVang() {
    var infoTongSo = document.getElementById("infoTongSo");
    var infoHienDien = document.getElementById("infoHienDien");
    var infoVang = document.getElementById("infoVang");
    var infoTre = document.getElementById("infoTre");

    // Ẩn các phần khác
    infoTongSo.style.display = "none";
    infoHienDien.style.display = "none";
    infoTre.style.display = "none";

    // Toggle Vắng
    if (infoVang.style.display === "none") {
        infoVang.style.display = "block";
    } else {
        infoVang.style.display = "none";
    }
}

function toggleTre() {
    var infoTongSo = document.getElementById("infoTongSo");
    var infoHienDien = document.getElementById("infoHienDien");
    var infoVang = document.getElementById("infoVang");
    var infoTre = document.getElementById("infoTre");

    // Ẩn các phần khác
    infoTongSo.style.display = "none";
    infoHienDien.style.display = "none";
    infoVang.style.display = "none";

    // Toggle Trễ
    if (infoTre.style.display === "none") {
        infoTre.style.display = "block";
    } else {
        infoTre.style.display = "none";
    }
}

//Hiện từng lớp
function showClass(classNumber) {
    var infoTongSo = document.getElementById("infoTongSo");
    var infoHienDien = document.getElementById("infoHienDien");
    var infoVang = document.getElementById("infoVang");
    var infoTre = document.getElementById("infoTre");
    
    // Dữ liệu về tổng số, hiện diện, vắng và trễ của từng lớp
    var classData = {
        1: {tongSo: 40, hienDien: 36, vang: 4, tre: 2}, 
        2: {tongSo: 35, hienDien: 30, vang: 3, tre: 2},
        3: {tongSo: 42, hienDien: 38, vang: 2, tre: 2},
        4: {tongSo: 38, hienDien: 32, vang: 4, tre: 2},
        5: {tongSo: 36, hienDien: 31, vang: 4, tre: 1},
        6: {tongSo: 33, hienDien: 28, vang: 3, tre: 2}
    };
    
    // Hiển thị phần thông tin nếu nó đang ẩn
    if (infoTongSo.style.display === "none") {
        infoTongSo.style.display = "block";
    }

    // Cập nhật các giá trị hiện diện, vắng, trễ và tổng số
    document.querySelector(".circle__tongso .title__tongso:nth-child(2)").innerText = classData[classNumber].tongSo;
    document.querySelector(".circle__hiendien .title__hiendien:nth-child(2)").innerText = classData[classNumber].hienDien;
    document.querySelector(".circle__vang .title__vang:nth-child(2)").innerText = classData[classNumber].vang;
    document.querySelector(".circle__tre .title__tre:nth-child(2)").innerText = classData[classNumber].tre;
}

// Gọi hàm showClass khi bấm vào nút lớp tương ứng
document.querySelectorAll('.btn__khoi').forEach(function(button, index) {
    button.addEventListener('click', function() {
        showClass(index + 1); // Truyền số lớp dựa trên vị trí nút
    });
});
