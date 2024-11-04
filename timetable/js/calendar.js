    document.addEventListener('DOMContentLoaded', function() {
        // Lấy phần tử input với class "calendar"
        var dateInput = document.querySelector('.calendar');
        
        // Lấy ngày hiện tại
        var today = new Date();
        var day = String(today.getDate()).padStart(2, '0');
        var month = String(today.getMonth() + 1).padStart(2, '0'); // Tháng bắt đầu từ 0 nên phải +1
        var year = today.getFullYear();
        
        // Định dạng ngày theo chuẩn yyyy-mm-dd
        var currentDate = `${year}-${month}-${day}`;
        
        // Đặt giá trị cho input
        dateInput.value = currentDate;
    });
