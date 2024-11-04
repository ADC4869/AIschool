document.querySelector('.prev-btn').addEventListener('click', function () {
    let currentValue = parseInt(document.getElementById('page-number').value);
    document.getElementById('page-number').value = currentValue - 1;
});

document.querySelector('.next-btn').addEventListener('click', function () {
    let currentValue = parseInt(document.getElementById('page-number').value);
    document.getElementById('page-number').value = currentValue + 1;
});