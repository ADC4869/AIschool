<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Học tập</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- css -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/teacher.css">
    <link rel="stylesheet" href="../css/footer.css">
</head>

<body>
    <header>
        <div class="header">
            <span class="back-arrow" onclick="goBack()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-chevron-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                </svg>
            </span>
            <div class="title">Kết Quả Học Tập</div>
        </div>
    </header>

    <main>
        <?php
            $role = isset($_GET['role']) ? $_GET['role'] : 'hocsinh';
            if ($role == 'giaovien') {
                include 'giaovien.php';
            } else {
                include 'hocsinh.php';
            }
        ?>
    </main>

    <?php include '../footer/footer.php' ?>
</body>
<script src="../js/back.js"></script>
<script src="./js/khoi.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
feather.replace();
</script>
<script>
function showClasses(grade) {
    var gradeElement = document.getElementById(grade);

    // Kiểm tra trạng thái hiện tại của danh sách lớp
    if (gradeElement.style.display === 'none' || gradeElement.style.display === '') {
        // Ẩn tất cả các danh sách lớp khác
        var classLists = document.querySelectorAll('.class-list');
        classLists.forEach(function(list) {
            list.style.display = 'none';
        });
        // Hiển thị danh sách lớp được chọn
        gradeElement.style.display = 'block';
    } else {
        // Ẩn danh sách lớp nếu nó đang hiển thị
        gradeElement.style.display = 'none';
    }
}
</script>
</html>