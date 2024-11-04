document.querySelector('.calendar-button').addEventListener('click', function() {
    document.getElementById('calendarDialog').classList.add('open');
    generateCalendar(new Date());
});

document.getElementById('closeCalendar').addEventListener('click', function() {
    document.getElementById('calendarDialog').classList.remove('open');
});

const monthNames = [
    "Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6",
    "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"
];

let currentDate = new Date();

document.getElementById('prevMonth').addEventListener('click', function() {
    currentDate.setMonth(currentDate.getMonth() - 1);
    generateCalendar(currentDate);
});

document.getElementById('nextMonth').addEventListener('click', function() {
    currentDate.setMonth(currentDate.getMonth() + 1);
    generateCalendar(currentDate);
});

function generateCalendar(date) {
    const calendarBody = document.getElementById('calendarBody');
    calendarBody.innerHTML = ''; // Clear previous calendar

    const year = date.getFullYear();
    const month = date.getMonth();
    const today = new Date().getDate();

    document.getElementById('monthYear').textContent = `${monthNames[month]} / ${year}`;

    const firstDay = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    let dateCount = 1;
    const numRows = Math.ceil((firstDay + daysInMonth) / 7);

    for (let i = 0; i < numRows; i++) {
        const row = document.createElement('tr');
        for (let j = 1; j <= 7; j++) {
            const cell = document.createElement('td');
            const dayOfWeek = (j + 6) % 7; // Convert to Monday-based index (0=Monday, 6=Sunday)

            if (i === 0 && dayOfWeek < firstDay || dateCount > daysInMonth) {
                cell.innerHTML = '';
            } else {
                cell.innerHTML = dateCount;
                if (dateCount === today && year === new Date().getFullYear() && month === new Date().getMonth()) {
                    cell.classList.add('today');
                }
                dateCount++;
            }
            row.appendChild(cell);
        }
        calendarBody.appendChild(row);
    }
}