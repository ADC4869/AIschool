document.getElementById('camera-btn').addEventListener('click', async function () {
    try {
        // Mở camera để chụp ảnh
        const stream = await navigator.mediaDevices.getUserMedia({ video: true });
        const track = stream.getVideoTracks()[0];
        const imageCapture = new ImageCapture(track);

        // Chụp ảnh
        const blob = await imageCapture.takePhoto();
        const imgURL = URL.createObjectURL(blob);

        // Thêm ảnh vào đoạn chat
        const chatContainer = document.getElementById('chat-container');
        const userBubble = document.createElement('div');
        userBubble.className = 'chat-bubble user';
        userBubble.style.justifyContent = 'right';

        const img = document.createElement('img');
        img.src = imgURL;
        img.alt = 'User';

        const messageDiv = document.createElement('div');
        messageDiv.className = 'message';
        messageDiv.textContent = 'Ảnh vừa chụp';

        userBubble.appendChild(img);
        userBubble.appendChild(messageDiv);
        chatContainer.appendChild(userBubble);

        // Tắt camera sau khi chụp ảnh
        track.stop();
    } catch (error) {
        console.error('Error accessing the camera', error);
    }
});