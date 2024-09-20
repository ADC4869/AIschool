document.querySelectorAll('.chat-item').forEach(item => {
    item.addEventListener('click', function () {
        const chatId = this.getAttribute('data-chat-id');

        // Assuming you have different HTML files for each chat
        // For example, chatA.html, chatB.html
        if (chatId === 'A') {
            window.location.href = 'chat.php';
        } else if (chatId === 'B') {
            window.location.href = 'chat.php';
        } else if (chatId === 'C') {
            window.location.href = 'chat.php';
        } else if (chatId === 'D') {
            window.location.href = 'chat.php';
        }
    });
});