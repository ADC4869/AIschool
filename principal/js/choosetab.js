document.getElementById('tab_eventpresent').addEventListener('click', function () {
    // Ẩn tất cả các nội dung khác
    document.getElementById('eventpresent').style.display = 'flex';
    document.getElementById('upcoming').style.display = 'none';
    document.getElementById('schedule').style.display = 'none';
    document.getElementById('collaborate').style.display = 'none';
    
    // Thêm lớp 'active' cho tab "Sự kiện đang diễn ra" 
    document.getElementById('tab_eventpresent').classList.add('active');
    document.getElementById('tab_upcoming').classList.remove('active');
    document.getElementById('tab_schedule').classList.remove('active');
    document.getElementById('tab_collaborate').classList.remove('active');
});

document.getElementById('tab_upcoming').addEventListener('click', function () {
    // Ẩn tất cả các nội dung khác
    document.getElementById('eventpresent').style.display = 'none';
    document.getElementById('upcoming').style.display = '';
    document.getElementById('schedule').style.display = 'none';
    document.getElementById('collaborate').style.display = 'none';

    // Thêm lớp 'active' cho tab "Sự kiện sắp tới" 
    document.getElementById('tab_eventpresent').classList.remove('active');
    document.getElementById('tab_upcoming').classList.add('active');
    document.getElementById('tab_schedule').classList.remove('active');
    document.getElementById('tab_collaborate').classList.remove('active');
});

document.getElementById('tab_schedule').addEventListener('click', function () {
    // Ẩn tất cả các nội dung khác
    document.getElementById('eventpresent').style.display = 'none';
    document.getElementById('upcoming').style.display = 'none';
    document.getElementById('schedule').style.display = '';
    document.getElementById('collaborate').style.display = 'none';

    // Thêm lớp 'active' cho tab "Lịch họp" 
    document.getElementById('tab_eventpresent').classList.remove('active');
    document.getElementById('tab_upcoming').classList.remove('active');
    document.getElementById('tab_schedule').classList.add('active');
    document.getElementById('tab_collaborate').classList.remove('active');
});

document.getElementById('tab_collaborate').addEventListener('click', function () {
    // Ẩn tất cả các nội dung khác
    document.getElementById('eventpresent').style.display = 'none';
    document.getElementById('upcoming').style.display = 'none';
    document.getElementById('schedule').style.display = 'none';
    document.getElementById('collaborate').style.display = '';

     // Thêm lớp 'active' cho tab "Lịch công tác" 
     document.getElementById('tab_eventpresent').classList.remove('active');
     document.getElementById('tab_upcoming').classList.remove('active');
     document.getElementById('tab_schedule').classList.remove('active');
     document.getElementById('tab_collaborate').classList.add('active');
});


// LỊCH HỌP
document.addEventListener('DOMContentLoaded', function () {

    // Thêm lớp 'active' cho tab "Lịch họp của trường" và bỏ khỏi "Lịch họp của tôi"
    document.getElementById('tab_schoolschedule').classList.add('active');
    document.getElementById('tab_myschedule').classList.remove('active');
});

// Mặc định chọn tab "Lịch họp của trường"
document.getElementById('schoolschedule').style.display = 'flex';
document.getElementById('myschedule').style.display = 'none';


// Sự kiện khi bấm vào tab "Lịch họp của trường"
document.getElementById('tab_schoolschedule').addEventListener('click', function () {
    // Ẩn nội dung khác và hiển thị nội dung của "Lịch họp của trường"
    document.getElementById('schoolschedule').style.display = 'flex';
    document.getElementById('myschedule').style.display = 'none';

    // Thêm lớp 'active' cho tab "Lịch họp của trường" và bỏ khỏi "Lịch họp của tôi"
    document.getElementById('tab_schoolschedule').classList.add('active');
    document.getElementById('tab_myschedule').classList.remove('active');
});

// Sự kiện khi bấm vào tab "Lịch họp của tôi"
document.getElementById('tab_myschedule').addEventListener('click', function () {
    // Ẩn nội dung khác và hiển thị nội dung của "Lịch họp của tôi"
    document.getElementById('schoolschedule').style.display = 'none';
    document.getElementById('myschedule').style.display = 'flex';

    // Thêm lớp 'active' cho tab "Lịch họp của tôi" và bỏ khỏi "Lịch họp của trường"
    document.getElementById('tab_myschedule').classList.add('active');
    document.getElementById('tab_schoolschedule').classList.remove('active');
});


// LỊCH CÔNG TÁC
document.addEventListener('DOMContentLoaded', function () {
    // Mặc định chọn tab "Lịch công tác của trường"
    document.getElementById('schoolcollaborate').style.display = 'flex';
    document.getElementById('mycollaborate').style.display = 'none';

    // Sự kiện khi bấm vào tab "Lịch công tác của trường"
    document.getElementById('tab_schoolcollaborate').addEventListener('click', function () {
        // Ẩn nội dung khác và hiển thị nội dung của "Lịch công tác của trường"
        document.getElementById('schoolcollaborate').style.display = 'flex';
        document.getElementById('mycollaborate').style.display = 'none';

        // Thêm lớp 'active' cho tab "Lịch công tác của trường" và bỏ khỏi "Lịch công tác của tôi"
        document.getElementById('tab_schoolcollaborate').classList.add('active');
        document.getElementById('tab_mycollaborate').classList.remove('active');
    });

    // Sự kiện khi bấm vào tab "Lịch công tác của tôi"
    document.getElementById('tab_mycollaborate').addEventListener('click', function () {
        // Ẩn nội dung khác và hiển thị nội dung của "Lịch công tác của tôi"
        document.getElementById('schoolcollaborate').style.display = 'none';
        document.getElementById('mycollaborate').style.display = 'flex';

        // Thêm lớp 'active' cho tab "Lịch công tác của tôi" và bỏ khỏi "Lịch công tác của trường"
        document.getElementById('tab_mycollaborate').classList.add('active');
        document.getElementById('tab_schoolcollaborate').classList.remove('active');
    });
});

