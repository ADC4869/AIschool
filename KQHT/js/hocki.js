// Open the semester modal
document.getElementById("openModalBtn").onclick = function() {
document.getElementById("myModal").style.display = "flex";
};

// Close the semester modal
document.querySelector(".cancelBtn").onclick = function() {
    document.getElementById("myModal").style.display = "none";
};

// Select a semester and save it to localStorage
const semesterOptions = document.querySelectorAll('.semester-option');
semesterOptions.forEach(option => {
    option.onclick = function() {
        document.getElementById("openModalBtn").innerHTML = this.innerHTML;
        localStorage.setItem('selectedSemester', this.innerHTML); // Save selected semester to localStorage
        document.getElementById("myModal").style.display = "none";
    };
});

// On page load, check if a semester was selected before and update the display
window.onload = function() {
    const savedSemester = localStorage.getItem('selectedSemester');
    if (savedSemester) {
        document.getElementById("openModalBtn").innerHTML = savedSemester;
    }
};