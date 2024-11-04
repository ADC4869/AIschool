document.querySelectorAll('.fee-item2').forEach(item => {
    item.addEventListener('click', function () {
        const studentListpaid = document.getElementById('student-listpaid');
        studentListpaid.style.display = 'none';
        // Toggle the student list visibility
        const studentList = document.getElementById('student-list');
        if (studentList.style.display === 'block') {
            studentList.style.display = 'none';
        } else {
            studentList.style.display = 'block';
        }
    });
});

document.querySelectorAll('.fee-item1').forEach(item => {
    item.addEventListener('click', function () {
        const studentList = document.getElementById('student-list');
        studentList.style.display = 'none';
        // Toggle the student list visibility
        const studentListpaid = document.getElementById('student-listpaid');
        if (studentListpaid.style.display === 'block') {
            studentListpaid.style.display = 'none';
        } else {
            studentListpaid.style.display = 'block';
        }
    });
});