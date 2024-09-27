
// MODAL TRANG EVENTSSCHEDULES

// Lấy các phần tử
const openModalButton = document.getElementById("openModal");
const modal = document.getElementById("myModal");
const closeModalButton = document.getElementById("closeModal");
const saveButton = document.querySelector(".btn_save");
const openModal = document.getElementById("openmeetingModal")
const meetingmodal = document.getElementById("meetingModal")
const closemeetingModalButton = document.getElementById("closemeetingModal");
const savemeetingModalButton = document.getElementById("savemeetingModal");

const opencollaborateModal = document.getElementById("opencollaborateModal")
const collaboratemodal = document.getElementById("collaborateModal")
const closecollaborateModalButton = document.getElementById("closecollaborateModal");
const savecollaborateModalButton = document.getElementById("savecollaborateModal");

// Hàm mở modal
openModalButton.onclick = function () {
    modal.style.display = "flex"; // Hiện modal
}

openModal.onclick = function () {
    meetingmodal.style.display = "flex"; // Hiện modal
}

opencollaborateModal.onclick = function () {
    collaboratemodal.style.display = "flex"; // Hiện modal
}



// Hàm đóng modal
function closeModal() {
    modal.style.display = "none"; // Ẩn modal
    clearModalInputs(); // Xóa thông tin nhập
}
function closemeetingModal() {
    meetingmodal.style.display = "none"; // Ẩn modal
    clearModalInputs(); // Xóa thông tin nhập
}
function closecollaborateModal() {
    collaboratemodal.style.display = "none"; // Ẩn modal
    clearModalInputs(); // Xóa thông tin nhập
}


// Gán sự kiện cho nút "Hủy" và "Lưu"
closeModalButton.onclick = closeModal;
saveButton.onclick = closeModal; // Đóng modal khi lưu
closemeetingModalButton.onclick = closemeetingModal;
savemeetingModalButton.onclick = closemeetingModal;

closecollaborateModalButton.onclick = closecollaborateModal;
savecollaborateModalButton.onclick = closecollaborateModal;


// Hàm xóa thông tin nhập trong modal
function clearModalInputs() {
    const inputs = modal.querySelectorAll("input[type='text'], input[type='date']");
    inputs.forEach(input => {
        input.value = ""; // Đặt giá trị của mỗi input về rỗng
    });
}
function clearModalInputs() {
    const inputs = meetingmodal.querySelectorAll("input[type='text'], input[type='date']");
    inputs.forEach(input => {
        input.value = ""; // Đặt giá trị của mỗi input về rỗng
    });
}
function clearModalInputs() {
    const inputs = collaboratemodal.querySelectorAll("input[type='text'], input[type='date']");
    inputs.forEach(input => {
        input.value = ""; // Đặt giá trị của mỗi input về rỗng
    });
}



function changeHeaderTitle(newTitle) {
    document.getElementById('headerTitle').textContent = newTitle;
}


