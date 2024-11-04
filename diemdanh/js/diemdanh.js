const attendanceData = {
    present: [
        { name: "Nguyễn Thị Yến Loan", time: "10:25" },
        { name: "Nguyễn Thị Yến Loan", time: "10:15" }
    ],
    late: [
        { name: "Từ Văn Tú", time: "10:35" },
        { name: "Từ Văn Tú", time: "10:40" }
    ],
    absent: [
        { name: "Từ Văn Tú", time: "N/A" },
        { name: "Nguyễn Thị Yến Loan", time: "N/A" }
    ]
};

const attendanceListElement = document.getElementById('attendanceList');
const statusElements = document.querySelectorAll('.status span');

function loadAttendance(type) {
    attendanceListElement.innerHTML = ''; // Clear the current list
    const list = attendanceData[type];
    list.forEach(student => {
        const attendanceItem = document.createElement('div');
        attendanceItem.classList.add('attendance');
        attendanceItem.innerHTML = `
            <img src="https://via.placeholder.com/40" alt="Student Avatar">
            <div class="attendance-info">
                <h3>${student.name}</h3>
                <p>Thời gian đến lớp: ${student.time}</p>
            </div>
            <div class="actions">
                <button>Sức khỏe</button>
                <button class="edit">✏️</button>
            </div>
        `;
        attendanceListElement.appendChild(attendanceItem);
    });

    // Change background color based on the type
    let bgColor;
    if (type === 'present') {
        bgColor = '#dff0d8'; // Light green for "Hiện diện"
    } else if (type === 'late') {
        bgColor = '#fcf8e3'; // Light yellow for "Trễ"
    } else if (type === 'absent') {
        bgColor = '#f2dede'; // Light red for "Vắng"
    }
    attendanceListElement.style.backgroundColor = bgColor;
}

statusElements.forEach(span => {
    span.addEventListener('click', () => {
        const type = span.getAttribute('data-type');
        loadAttendance(type);
    });
});

// Load the present students by default


