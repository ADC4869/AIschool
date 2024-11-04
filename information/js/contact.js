function showDetails(id) {
    hideAllDetails();
    document.getElementById(id).style.display = 'flex';
}

function hideDetails(id) {
    document.getElementById(id).style.display = 'none';
}

function hideAllDetails() {
    var details = document.querySelectorAll('.details');
    details.forEach(function (detail) {
        detail.style.display = 'none';
    });
}