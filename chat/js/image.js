// Tải ảnh
document.getElementById('gallery-btn').addEventListener('click', function () {
    document.getElementById('image-upload').click();
});

document.getElementById('image-upload').addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
            // Create a new chat bubble for the uploaded image
            const chatContainer = document.querySelector('.chat-container');

            const chatBubble = document.createElement('div');
            chatBubble.classList.add('chat-bubble', 'user');

            const img = document.createElement('img');
            img.src = e.target.result;
            img.alt = "Uploaded Image";

            const message = document.createElement('div');
            message.classList.add('message');
            message.appendChild(img);

            chatBubble.appendChild(message);

            chatContainer.appendChild(chatBubble);
        };
        reader.readAsDataURL(file);
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