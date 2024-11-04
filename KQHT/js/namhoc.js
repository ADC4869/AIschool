// Open the year modal
function openDialog() {
    document.getElementById('yearDialog').style.display = 'flex';
}

// Close the year modal
function closeDialog() {
    document.getElementById('yearDialog').style.display = 'none';
}

// Select a year and save it to localStorage
function selectYear(year) {
    document.getElementById('yearDisplay').innerText = 'Năm học: ' + year;
    localStorage.setItem('selectedYear', year); // Save selected year to localStorage
    closeDialog();
}

// On page load, check if a year was selected before and update the display
window.onload = function() {
    const savedYear = localStorage.getItem('selectedYear');
    if (savedYear) {
        document.getElementById('yearDisplay').innerText = 'Năm học: ' + savedYear;
    }
};