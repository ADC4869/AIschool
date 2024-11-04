document.addEventListener("DOMContentLoaded", function () {
    // Lấy phần tử input ngày
    const dateInput = document.getElementById("date__present");

    // Kiểm tra xem phần tử có tồn tại không
    if (dateInput) {
        // Tạo một đối tượng Date cho ngày hiện tại
        const today = new Date();

        // Định dạng ngày theo kiểu YYYY-MM-DD
        const year = today.getFullYear();
        const month = String(today.getMonth() + 1).padStart(2, '0'); // Tháng bắt đầu từ 0
        const day = String(today.getDate()).padStart(2, '0');

        // Tạo chuỗi ngày theo định dạng YYYY-MM-DD
        const todayDate = `${year}-${month}-${day}`;

        // Đặt giá trị cho input ngày
        dateInput.value = todayDate;
    }
});
