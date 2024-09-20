// Hàm để mở trang gọi điện
function openCall() {
    document.getElementById('callFrameContainer').style.display = 'block';
}

// Hàm để thu nhỏ trang gọi điện
function minimizeCall() {
    var callFrameContainer = document.getElementById('callFrameContainer');
    callFrameContainer.style.width = '300px'; // Kích thước thu nhỏ
    callFrameContainer.style.height = '200px';
    callFrameContainer.style.bottom = '10px';
    callFrameContainer.style.right = '10px';
}

// Hàm để trở lại kích thước lớn (khi cần)
function maximizeCall() {
    var callFrameContainer = document.getElementById('callFrameContainer');
    callFrameContainer.style.width = '100%';
    callFrameContainer.style.height = '100vh';
}