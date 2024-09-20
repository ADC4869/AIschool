function login() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username === '' || password === '') {
        alert('Vui lòng nhập tài khoản và mật khẩu.');
    } else {
        document.getElementById('loginForm').submit(); // Submit the form
    }
}