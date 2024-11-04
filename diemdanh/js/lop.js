function showSection(section) {
    // Ẩn tất cả các phần
    document.getElementById('siso').classList.add('hidden');
    document.getElementById('hiendien').classList.add('hidden');
    document.getElementById('tre').classList.add('hidden');
    document.getElementById('vang').classList.add('hidden');

    // Hiện phần được chọn
    document.getElementById(section).classList.remove('hidden');
}

function openModal() {
    document.getElementById('statusModal').classList.remove('hidden');
}

function closeModal() {
    document.getElementById('statusModal').classList.add('hidden');
}
function openDetailModal() {
    document.getElementById('detailModal').classList.remove('hidden');
}

function closeDetailModal() {
    document.getElementById('detailModal').classList.add('hidden');
}

// Thêm sự kiện click cho các nút "Tình trạng"
document.querySelectorAll('.btn__tinhtrang').forEach(button => {
    button.addEventListener('click', openModal);
});

// Thêm sự kiện click cho các nút "Ghu chú"
document.querySelectorAll('.btn__chitiet').forEach(button => {
    button.addEventListener('click', openDetailModal);
});

function saveNote() {
    console.log('Nút Lưu đã được nhấn');
    const noteInput = document.querySelector('.note__input');
    const note = noteInput.value;
    console.log('Ghi chú đã lưu:', note);

    // Đóng modal
    closeDetailModal();

    // Xóa nội dung trong textarea
    noteInput.value = '';
}