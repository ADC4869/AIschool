document.getElementById('dob').addEventListener('focus', function () {
    this.type = 'date';
});
document.getElementById('dob').addEventListener('blur', function () {
    if (!this.value) {
        this.type = 'text';
    }
});

