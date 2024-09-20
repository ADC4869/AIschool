const chatTab = document.getElementById('chatTab');
const groupTab = document.getElementById('groupTab');
const chatContent = document.getElementById('chatContent');
const groupContent = document.getElementById('groupContent');

chatTab.addEventListener('click', function () {
    chatTab.classList.add('active');
    groupTab.classList.remove('active');
    chatContent.style.display = 'block';
    groupContent.style.display = 'none';
});

groupTab.addEventListener('click', function () {
    groupTab.classList.add('active');
    chatTab.classList.remove('active');
    groupContent.style.display = 'block';
    chatContent.style.display = 'none';
});