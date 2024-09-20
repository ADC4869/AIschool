const sendButton = document.getElementById('send-btn');
const messageInput = document.getElementById('message-input');
const chatContainer = document.querySelector('.chat-container');

sendButton.addEventListener('click', function () {
    const messageText = messageInput.value.trim();

    // If the input is not empty
    if (messageText !== "") {
        // Create a new chat bubble
        const chatBubble = document.createElement('div');
        chatBubble.classList.add('chat-bubble', 'user');
        chatBubble.style.justifyContent = 'right';

        const message = document.createElement('div');
        message.classList.add('message');
        message.textContent = messageText;

        chatBubble.appendChild(message);
        chatContainer.appendChild(chatBubble);

        // Clear the input
        messageInput.value = "";

        // Scroll chat to bottom
        chatContainer.scrollTop = chatContainer.scrollHeight;
    }
});