
// TAB THỜI KHÓA BIỂU THEO GIÁO VIÊN - THỜI KHÓA BIỂU THEO LỚP
document.getElementById('tab_timetableteacher').addEventListener('click', function () {
    // Ẩn tất cả các nội dung khác
    document.getElementById('listteacher').style.display = 'flex';
    document.getElementById('listgrade').style.display = 'none';

    // Thêm lớp 'active' cho tab "Thời khóa biểu theo giáo viên 
    document.getElementById('tab_timetableteacher').classList.add('active');
    document.getElementById('tab_timetableclass').classList.remove('active');
});

document.getElementById('tab_timetableclass').addEventListener('click', function () {
    // Ẩn tất cả các nội dung khác
    document.getElementById('listteacher').style.display = 'none';
    document.getElementById('listgrade').style.display = 'flex';

    // Thêm lớp 'active' cho tab "Thời khóa biểu heo lớp" 
    document.getElementById('tab_timetableteacher').classList.remove('active');
    document.getElementById('tab_timetableclass').classList.add('active');
});

// KHỐI LỚP

document.addEventListener('DOMContentLoaded', function () {
    // Sự kiện khi bấm vào tab "lỚP 6"
    document.getElementById('class6').addEventListener('click', function () {
        // Ẩn nội dung khác và hiển thị nội dung đã chọn
        document.getElementById('listclass6').style.display = 'flex';
        document.getElementById('listclass7').style.display = 'none';
        document.getElementById('listclass8').style.display = 'none';
        document.getElementById('listclass9').style.display = 'none';

        document.getElementById('class6').classList.add('active');
        document.getElementById('class7').classList.remove('active');
        document.getElementById('class8').classList.remove('active');
        document.getElementById('class9').classList.remove('active');
    });
    // Sự kiện khi bấm vào tab "lỚP 7"
    document.getElementById('class7').addEventListener('click', function () {
        // Ẩn nội dung khác và hiển thị nội dung đã chọn
        document.getElementById('listclass6').style.display = 'none';
        document.getElementById('listclass7').style.display = 'flex';
        document.getElementById('listclass8').style.display = 'none';
        document.getElementById('listclass9').style.display = 'none';

        document.getElementById('class6').classList.remove('active');
        document.getElementById('class7').classList.add('active');
        document.getElementById('class8').classList.remove('active');
        document.getElementById('class9').classList.remove('active');
    });
    // Sự kiện khi bấm vào tab "lỚP 8"
    document.getElementById('class8').addEventListener('click', function () {
        // Ẩn nội dung khác và hiển thị nội dung đã chọn
        document.getElementById('listclass6').style.display = 'none';
        document.getElementById('listclass7').style.display = 'none';
        document.getElementById('listclass8').style.display = 'flex';
        document.getElementById('listclass9').style.display = 'none';

        document.getElementById('class6').classList.remove('active');
        document.getElementById('class7').classList.remove('active');
        document.getElementById('class8').classList.add('active');
        document.getElementById('class9').classList.remove('active');
    });
    // Sự kiện khi bấm vào tab "lỚP 9"
    document.getElementById('class9').addEventListener('click', function () {
        // Ẩn nội dung khác và hiển thị nội dung đã chọn
        document.getElementById('listclass6').style.display = 'none';
        document.getElementById('listclass7').style.display = 'none';
        document.getElementById('listclass8').style.display = 'none';
        document.getElementById('listclass9').style.display = 'flex';

        document.getElementById('class6').classList.remove('active');
        document.getElementById('class7').classList.remove('active');
        document.getElementById('class8').classList.remove('active');
        document.getElementById('class9').classList.add('active');
    });

});

