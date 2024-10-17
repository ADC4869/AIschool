<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ý kiến đóng góp</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- Css -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/ykien.css">
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
            <div class="title">Ý kiến đóng góp</div>
        </div>
    </header>

    <main>
        <div class="main_tab">
            <div class="button">
                <button type="button" class="received">Đã tiếp nhận</button>
                <button type="button" class="add" onclick="openModal()">Thêm ý kiến</button>
            </div>
        </div>

        <div class="main_content">
            <div class="opinion">
                <div class="opinion_item">
                    <a href="">
                        <div class="opinion_photo">
                            <img src="../img/hs.jpg" alt="">
                        </div>

                        <div class="opinion_info">
                            <span class="title data_tieudegopy">Góp ý về vấn đề Họp phụ huynh</span>
                            <span class="content data_noidunggopy">Kính gửi ban giám hiệu nhà trường, tôi tên ABCD ...</span>
                        </div>

                        <div class="opinion_icon">
                            <i data-feather="chevron-right" style="color: #5B6998"></i>
                        </div>
                    </a>
                </div>

                <div class="opinion_item">
                    <a href="">
                        <div class="opinion_photo">
                            <img src="../img/hs.jpg" alt="">
                        </div>

                        <div class="opinion_info">
                            <span class="title data_tieudegopy">Góp ý về vấn đề phiếu liên lạc mỗi tháng</span>
                            <span class="content data_noidunggopy">Kính gửi ban giám hiệu nhà trường, tôi tên ABCD ...</span>
                        </div>

                        <div class="opinion_icon">
                            <i data-feather="chevron-right" style="color: #5B6998"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal_header">
                    <span>Ý kiến đóng góp mới</span>
                </div>

                <div class="modal_body">
                    <input class="input_tieudegopy" type="text" placeholder="Tiêu đề">
                    <span>Nhập nội dung vào ô bên dưới</span>
                    <textarea class="input_noidunggopy" name="" id="" ></textarea>
                </div>

                <div class="modal_footer">
                    <button type="button" class="btn_send">Gửi</button>
                    <button type="button" class="close" onclick="closeModal()">Đóng</button>
                </div>



            </div>
        </div>

    </main>

    <?php include '../footer/footer.php' ?>


</body>
<script src="../js/back.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>

<script>
function openModal() {
    document.getElementById("myModal").style.display = "block";
}

function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

window.onclick = function(event) {
    var modal = document.getElementById("myModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</html>