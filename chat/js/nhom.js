document.querySelectorAll('.chat-item').forEach(item => {
    item.addEventListener('click', function () {
        const chatId = this.getAttribute('data-chat-id');

        // Assuming you have different HTML files for each chat
        // For example, chatA.html, chatB.html
        if (chatId === 'E') {
            window.location.href = 'nhom.php';
        } else if (chatId === 'F') {
            window.location.href = 'nhom.php';
        } else if (chatId === 'G') {
            window.location.href = 'nhom.php';
        } else if (chatId === 'H') {
            window.location.href = 'nhom.php';
        }
    });
});