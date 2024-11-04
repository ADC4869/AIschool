document.addEventListener('DOMContentLoaded', function() {
    const date = new Date();
    let currentMonth = date.getMonth(); // Current month (0-11)
    let currentYear = date.getFullYear(); // Current year
    let selectedDate = null; // Track the selected date

    const currentDateText = document.getElementById('current-date');
    const calendarTitle = document.getElementById('calendar-title');
    const calendarBody = document.getElementById('calendar-body');

    // Function to update the displayed month and year
    function updateCurrentDateText(month, year) {
        currentDateText.innerText = `Tháng ${month + 1} / ${year}`;
    }
    
    // Function to generate the calendar
    function generateCalendar(month, year) {
        // Clear existing calendar
        calendarBody.innerHTML = '';

        // Get first day and number of days in the current month
        const firstDay = new Date(year, month).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        // Adjust first day to match Monday as the first day (T2)
        const adjustedFirstDay = (firstDay === 0) ? 6 : firstDay - 1;

        // Fill calendar title
        calendarTitle.innerText = `Tháng ${month + 1} / ${year}`;

        // Generate empty cells before the first day of the month
        let date = 1;
        let row = document.createElement('tr');
        for (let i = 0; i < adjustedFirstDay; i++) {
            let cell = document.createElement('td');
            row.appendChild(cell);
        }

        // Generate the days of the month
        for (let i = adjustedFirstDay; i < 7; i++) {
            let cell = document.createElement('td');
            cell.innerText = date;
            cell.classList.add('clickable-date'); // Add class for clickable dates

            // Highlight today's date
            if (date === new Date().getDate() && year === new Date().getFullYear() && month === new Date().getMonth()) {
                cell.classList.add('selected-date');
            }

            // Handle click to select a date
            cell.addEventListener('click', function(event) {
                selectDate(date, month, year, event);
            });

            row.appendChild(cell);
            date++;
        }

        calendarBody.appendChild(row);

        // Continue generating the rest of the days
        while (date <= daysInMonth) {
            row = document.createElement('tr');
            for (let i = 0; i < 7 && date <= daysInMonth; i++) {
                let cell = document.createElement('td');
                cell.innerText = date;
                cell.classList.add('clickable-date'); // Add class for clickable dates

                // Highlight today's date
                if (date === new Date().getDate() && year === new Date().getFullYear() && month === new Date().getMonth()) {
                    cell.classList.add('selected-date');
                }

                // Handle click to select a date
                cell.addEventListener('click', function(event) {
                    selectDate(date, month, year, event);
                });

                row.appendChild(cell);
                date++;
            }
            calendarBody.appendChild(row);
        }
    }

    // Function to handle date selection
    function selectDate(day, month, year, event) {
        // Remove the 'selected-date' class from the previously selected date
        if (selectedDate) {
            selectedDate.classList.remove('selected-date');
        }

        // Update selected date with the clicked date
        selectedDate = event.target;
        selectedDate.classList.add('selected-date');

        // Update the current date text to only show month and year
        updateCurrentDateText(month, year);
    }

    // Initially generate calendar for the current month and year
    generateCalendar(currentMonth, currentYear);
    updateCurrentDateText(currentMonth, currentYear);

    // Handle previous and next month navigation
    document.getElementById('prev-month').addEventListener('click', function() {
        currentMonth = (currentMonth === 0) ? 11 : currentMonth - 1;
        currentYear = (currentMonth === 11) ? currentYear - 1 : currentYear;
        generateCalendar(currentMonth, currentYear);
        updateCurrentDateText(currentMonth, currentYear); // Update the displayed month/year
    });

    document.getElementById('next-month').addEventListener('click', function() {
        currentMonth = (currentMonth === 11) ? 0 : currentMonth + 1;
        currentYear = (currentMonth === 0) ? currentYear + 1 : currentYear;
        generateCalendar(currentMonth, currentYear);
        updateCurrentDateText(currentMonth, currentYear); // Update the displayed month/year
    });

    // Toggle calendar visibility
    document.getElementById('calendar-toggle').addEventListener('click', function() {
        const calendar = document.getElementById('calendar');
        if (calendar.style.display === 'none' || calendar.style.display === '') {
            calendar.style.display = 'block';
        } else {
            calendar.style.display = 'none';
        }
    });
});