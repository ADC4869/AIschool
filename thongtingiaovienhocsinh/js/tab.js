function openTab(evt, tabName) {
    var i, tabcontent, tabbuttons;

    // Hide all tab content
    tabcontent = document.getElementsByClassName("tab-content");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
        tabcontent[i].classList.remove("active");
    }

    // Remove the active class from all buttons
    tabbuttons = document.getElementsByClassName("tab-button");
    for (i = 0; i < tabbuttons.length; i++) {
        tabbuttons[i].classList.remove("active");
    }

    // Show the current tab content and add "active" class to the button
    document.getElementById(tabName).style.display = "block";
    document.getElementById(tabName).classList.add("active");
    evt.currentTarget.classList.add("active");
}

// Default open tab
document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelector('.tab-button').click();
});