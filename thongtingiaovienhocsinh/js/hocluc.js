function showContent(categoryId) {
    // Hide the class list
    document.getElementById('class-list').style.display = 'none';

    // Hide all content sections
    var contents = document.querySelectorAll('.hidden-content');
    contents.forEach(function(content) {
        content.style.display = 'none';
    });

    // Show the selected content section
    var selectedContent = document.getElementById(categoryId);
    if (selectedContent) {
        selectedContent.style.display = 'block';
    }
}