document.addEventListener('DOMContentLoaded', function () {
    const chatContainer = document.getElementById('chatContainer');
    const messageInput = document.getElementById('message-input');
    const sendBtn = document.getElementById('send-btn');

    // Hàm để tải tin nhắn từ server
    function fetchMessages() {
        fetch('fetch_messages.php')
            .then(response => response.json())
            .then(messages => {
                chatContainer.innerHTML = ''; // Xóa nội dung hiện tại
                messages.forEach(message => {
                    const chatBubble = document.createElement('div');
                    chatBubble.classList.add('chat-bubble', message.sender === 'user' ? 'user' : 'bot');
                    chatBubble.style.justifyContent = message.sender === 'user' ? 'right' : 'left';

                    chatBubble.innerHTML = 
                        `${message.sender === 'user' ? '' : '<img src="../img/hs.jpg" alt="Bot">'}
                        <div class="message">
                            ${message.content}
                            <p class="time">${message.time}</p>
                        </div>`;
                    chatContainer.appendChild(chatBubble);
                });
                chatContainer.scrollTop = chatContainer.scrollHeight; // Cuộn đến tin nhắn mới nhất
            });
    }

    // Gửi tin nhắn
    sendBtn.addEventListener('click', function () {
        const message = messageInput.value.trim();
        if (message) {
            fetch('send_message.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ message })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    messageInput.value = ''; // Xóa ô nhập
                    fetchMessages(); // Tải lại tin nhắn
                }
            });
        }
    });

    setInterval(fetchMessages, 3000); // Tự động tải tin nhắn mới mỗi 3 giây
});