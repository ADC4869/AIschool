document.querySelector('.send-button').addEventListener('click', function () {
    const inputField = document.querySelector('.input-field');
    const messageText = inputField.value.trim();

    if (messageText) {
        const messageContainer = document.createElement('div');
        messageContainer.classList.add('message', 'sent');
        messageContainer.innerHTML = `<p>${messageText}</p>`;

        document.querySelector('.chat-messages').appendChild(messageContainer);
        inputField.value = '';
        document.querySelector('.chat-messages').scrollTop = document.querySelector('.chat-messages').scrollHeight;
    }
});