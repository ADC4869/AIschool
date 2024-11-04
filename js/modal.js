// Open modal when the button is clicked
document.getElementById("openModalBtn").onclick = function() {
    document.getElementById("myModal").style.display = "flex";
};

// Close modal only when the "Hủy" button is clicked
document.querySelector(".cancelBtn").onclick = function() {
    document.getElementById("myModal").style.display = "none";
};

// Change the button text when a semester is selected
const semesterOptions = document.querySelectorAll('.semester-option');
semesterOptions.forEach(option => {
    option.onclick = function() {
        document.getElementById("openModalBtn").innerHTML = `${this.innerHTML}`;
        document.getElementById("myModal").style.display = "none"; // Close the modal after selection
    };
});