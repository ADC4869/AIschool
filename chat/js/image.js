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

        // Kiểm tra số lượng ảnh
        const isSingleImage = files.length === 1;

        Array.from(files).forEach(file => {
            if (file.type.startsWith('image/')) { // Kiểm tra xem file có phải là ảnh không
                const reader = new FileReader();
                reader.onload = function (e) {
                    // Tạo một thẻ img cho từng ảnh
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = "Uploaded Image";
                    img.style.margin = "5px"; // Thêm khoảng cách giữa các ảnh

                    // Đặt kích thước ảnh tùy thuộc vào số lượng
                    if (isSingleImage) {
                        img.style.width = "250px";
                        img.style.height = "300px";
                    } else {
                        img.style.width = "100px";
                        img.style.height = "100px";
                    }
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

// Xử lý khi bấm vào "Tài liệu"
document.querySelector('.dialog-item').addEventListener('click', function () {
    // Mở trình chọn file
    document.getElementById('file-upload').click();
});

// Xử lý khi người dùng chọn file
document.getElementById('file-upload').addEventListener('change', function (event) {
    const files = event.target.files; // Lấy danh sách các file được chọn
    if (files && files.length > 0) {
        const chatContainer = document.querySelector('.chat-container');

        // Tạo một chat bubble mới cho các file
        const chatBubble = document.createElement('div');
        chatBubble.classList.add('chat-bubble', 'user');

        const message = document.createElement('div');
        message.classList.add('message');

        Array.from(files).forEach(file => {
            const fileItem = document.createElement('a'); // Thẻ <a> để tải file
            fileItem.classList.add('file-item');

            const fileIcon = document.createElement('i');
            fileIcon.classList.add('fa-regular', 'fa-file-lines');

            const fileName = document.createElement('span');
            fileName.textContent = file.name;

            // Tạo URL cho file bằng FileReader
            const reader = new FileReader();
            reader.onload = function (e) {
                fileItem.href = e.target.result; // Gán URL của file vào href
                fileItem.download = file.name; // Gán tên file để tải về
            };
            reader.readAsDataURL(file);

            fileItem.appendChild(fileIcon);
            fileItem.appendChild(fileName);

            message.appendChild(fileItem);
        });

        chatBubble.appendChild(message);
        chatContainer.appendChild(chatBubble);
    }
});