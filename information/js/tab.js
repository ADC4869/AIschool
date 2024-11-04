function openTab(tabId) {
    // Remove active class from all tabs
    document.querySelectorAll('.tab').forEach(function (tab) {
        tab.classList.remove('active');
    });

    // Remove active class from all tab contents
    document.querySelectorAll('.tab-content').forEach(function (content) {
        content.classList.remove('active');
    });

    // Add active class to the clicked tab
    document.getElementById(tabId).classList.add('active');

    // Show the corresponding content
    if (tabId === 'chatTab') {
        document.getElementById('chatContent').classList.add('active');
    } else if (tabId === 'groupTab') {
        document.getElementById('groupContent').classList.add('active');
    }
}