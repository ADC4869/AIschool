// Initialize calendar
document.addEventListener("DOMContentLoaded", function() {
    const currentDateSpan = document.getElementById("current-date");
    const calendarToggle = document.getElementById("calendar-toggle");
    const calendar = document.getElementById("calendar");
    const calendarTitle = document.getElementById("calendar-title");
    const prevMonthBtn = document.getElementById("prev-month");
    const nextMonthBtn = document.getElementById("next-month");
    const calendarBody = document.getElementById("calendar-body");
    
    let currentYear, currentMonth;

    function initCalendar(date) {
        currentYear = date.getFullYear();
        currentMonth = date.getMonth();
        generateCalendar(currentYear, currentMonth);
    }

    function generateCalendar(year, month) {
        const firstDayOfMonth = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
        const daysInLastMonth = new Date(year, month, 0).getDate();
        
        calendarTitle.textContent = `Tháng ${month + 1} / ${year}`;

        calendarBody.innerHTML = "";

        let row = document.createElement("tr");
        let dayCounter = 1;

        for (let i = 1; i <= 42; i++) {
            const cell = document.createElement("td");

            if (i <= firstDayOfMonth || dayCounter > daysInMonth) {
                const day = i <= firstDayOfMonth ? daysInLastMonth - firstDayOfMonth + i : dayCounter++ - daysInMonth;
                cell.textContent = day;
                cell.classList.add("inactive");
            } else {
                cell.textContent = dayCounter++;
            }

            // Highlight specific date range
            const selectedStart = new Date(2024, 8, 5); // 5th September 2024
            const selectedEnd = new Date(2024, 8, 11); // 11th September 2024
            const cellDate = new Date(year, month, cell.textContent);

            if (cellDate >= selectedStart && cellDate <= selectedEnd) {
                cell.classList.add("highlighted");
            }

            row.appendChild(cell);

            if (i % 7 === 0) {
                calendarBody.appendChild(row);
                row = document.createElement("tr");
            }
        }
    }

    calendarToggle.addEventListener("click", () => {
        calendar.style.display = calendar.style.display === "block" ? "none" : "block";
    });

    prevMonthBtn.addEventListener("click", () => {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentYear, currentMonth);
    });

    nextMonthBtn.addEventListener("click", () => {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentYear, currentMonth);
    });

    initCalendar(new Date()); // Initialize with the current date
});