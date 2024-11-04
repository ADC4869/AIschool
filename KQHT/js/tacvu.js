function togglePopup(button, classId) {
    var popup = document.getElementById("popup");
    popup.style.display = popup.style.display === "block" ? "none" : "block";
    
    // Cập nhật liên kết "Xem điểm" trong popup với class_id nếu có classId
    if (classId) {
        document.getElementById("viewScoreLink").href = "KQhs.php?class_id=" + classId;
    }
}
