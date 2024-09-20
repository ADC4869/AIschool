function toggleDialog(dialogId) {
    const dialogBox = document.getElementById(dialogId);
    if (dialogBox.style.display === "none" || dialogBox.style.display === "") {
        dialogBox.style.display = "block";
    } else {
        dialogBox.style.display = "none";
    }
}