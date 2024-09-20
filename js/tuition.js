document.querySelectorAll('.fee-item2').forEach(item => {
    item.addEventListener('click', function() {
        // Toggle the student list visibility
        const studentList = document.getElementById('student-list');
        if (studentList.style.display === 'block') {
            studentList.style.display = 'none';
        } else {
            studentList.style.display = 'block';
        }
    });
});