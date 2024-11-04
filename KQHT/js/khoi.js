function showClasses(grade) {
    var gradeElement = document.getElementById(grade);
    
    // Kiểm tra trạng thái hiện tại của danh sách lớp
    if (gradeElement.style.display === 'none' || gradeElement.style.display === '') {
        // Ẩn tất cả các danh sách lớp khác
        var classLists = document.querySelectorAll('.class-list');
        classLists.forEach(function(list) {
            list.style.display = 'none';
        });
        // Hiển thị danh sách lớp được chọn
        gradeElement.style.display = 'block';
    } else {
        // Ẩn danh sách lớp nếu nó đang hiển thị
        gradeElement.style.display = 'none';
    }
}