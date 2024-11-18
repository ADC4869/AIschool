// Tải ảnh
document.getElementById('gallery-btn').addEventListener('click', function () {
    document.getElementById('image-upload').click();
});

document.getElementById('image-upload').addEventListener('change', function (event) {
    const files = event.target.files; // Lấy danh sách các file được chọn
    if (files && files.length > 0) {
        const chatContainer = document.querySelector('.chat-container');

        // Tạo một chat bubble mới cho nhóm ảnh
        const chatBubble = document.createElement('div');
        chatBubble.classList.add('chat-bubble', 'user');

        const message = document.createElement('div');
        message.classList.add('message');

        Array.from(files).forEach(file => {
            if (file.type.startsWith('image/')) { // Kiểm tra xem file có phải là ảnh không
                const reader = new FileReader();
                reader.onload = function (e) {
                    // Tạo một thẻ img cho từng ảnh
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = "Uploaded Image";
                    img.style.margin = "5px"; // Thêm khoảng cách giữa các ảnh
                    img.style.width = "100px"; // Đặt kích thước ảnh
                    img.style.height = "100px";
                    img.style.objectFit = "cover";

                    message.appendChild(img);
                };
                reader.readAsDataURL(file);
            }
        });

        chatBubble.appendChild(message);
        chatContainer.appendChild(chatBubble);
    }
});

// Hộp thoại của dấu cộng
document.getElementById('dialogOverlay').addEventListener('click', function (e) {
    if (e.target === this || e.target.id === 'closeDialog') {
        this.classList.remove('show');
    }
});

document.querySelector('.icon-btn').addEventListener('click', function () {
    document.getElementById('dialogOverlay').classList.add('show');
});