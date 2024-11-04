// Lấy tất cả các nút và modal
const btnsTinhTrang = document.querySelectorAll('.btn__tinhtrang');
const btnsChiTiet = document.querySelectorAll('.btn__chitiet');
const reportModal = document.querySelector('#reportModal');
const detailModal = document.querySelector('#detailModal');
const btnExits = document.querySelectorAll('.btn-exit');
const btnSave = document.querySelector('.btn__save');

// Thêm sự kiện click cho các nút 'Tình trạng'
btnsTinhTrang.forEach(button => {
    button.addEventListener('click', function() {
        reportModal.classList.remove('hidden'); // Hiển thị modal báo cáo sức khỏe
    });
});

// Thêm sự kiện click cho các nút 'Chi tiết'
btnsChiTiet.forEach(button => {
    button.addEventListener('click', function() {
        detailModal.classList.remove('hidden'); // Hiển thị modal ghi chú
    });
});

// Đóng modal khi bấm vào bất kỳ nút 'Đóng' nào
btnExits.forEach(button => {
    button.addEventListener('click', function() {
        reportModal.classList.add('hidden');
        detailModal.classList.add('hidden');
    });
});

// Xử lý sự kiện click cho nút Lưu
btnSave.addEventListener('click', function() {
    
    // Sau khi lưu, nếu muốn có thể đóng modal
    reportModal.classList.add('hidden');
    detailModal.classList.add('hidden');
});