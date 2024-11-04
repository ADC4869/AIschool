
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết ý kiến đóng góp</title>
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
    <link rel="stylesheet" href="./css/gopychitiet.css">
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
            <div class="title">Chi tiết ý kiến đóng góp</div>
        </div>
    </header>

    <main>
        <div class="main__date">
            <p class="date">04/09/2024</p>
        </div>

        <div class="main__text">
            <div class="notification">
                <div class="text__title">
                    <p class="data_tieudegopy">Góp ý về vấn đề Họp phụ huynh</p>
                </div>
                <div class="text__content data_noidunggopy">
                    <p>Kính gửi Ban Giám Hiệu Trường [Tên Trường],
                        Tôi là [Tên của bạn], phụ huynh của em [Tên học sinh], học sinh lớp [Lớp của học sinh]. Tôi viết
                        email này để gửi đến Ban Giám Hiệu một số góp ý về thời gian tổ chức họp phụ huynh.
                        Trước tiên, tôi xin cảm ơn nhà trường đã luôn quan tâm và tổ chức các buổi họp phụ huynh để
                        chúng tôi có cơ hội nắm bắt tình hình học tập và rèn luyện của con em mình. Tuy nhiên, tôi nhận
                        thấy thời gian tổ chức họp phụ huynh hiện tại chưa thực sự phù hợp với lịch trình của nhiều phụ
                        huynh, đặc biệt là những người làm việc giờ hành chính.
                        Vì vậy, tôi xin đề xuất nhà trường xem xét tổ chức họp phụ huynh vào các buổi tối hoặc cuối
                        tuần. Điều này sẽ tạo điều kiện thuận lợi hơn cho các phụ huynh có thể tham gia đầy đủ và đóng
                        góp ý kiến xây dựng cho nhà trường.
                        Rất mong Ban Giám Hiệu xem xét và điều chỉnh thời gian họp phụ huynh để phù hợp hơn với đa số
                        phụ huynh. Tôi xin chân thành cảm ơn và mong nhận được phản hồi từ nhà trường.
                        Trân trọng,
                    </p>
                </div>
            </div>
        </div>


        <div class="main__button">
            <div class="button">
                <button type="button" id="openModal">Ghi nhận</button>
            </div>
        </div>

        

        </main>

        <!-- Modal -->
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal_header">
                    <span>Thông báo</span>
                </div>
                <div class="modal_body">
                    <textarea name="" id="" class="input_noidungphanhoi"></textarea>
                    <div class="signature">
                        <div class="signature_content">
                            <span>Hiệu trưởng</span>
                            <span>Kí tên</span>
                        </div>
                    </div>
                    <div class="modal_button">
                        <button type="button" class="close">Gửi</button>
                    </div>
                </div>

            </div>
        </div>

    </main>

</body>
<script src="../js/back.js"></script>
<script>
    // Lấy phần modal
    var modal = document.getElementById("myModal");

    // Lấy icon mở modal
    var icon = document.getElementById("openModal");

    // Lấy phần nút đóng modal
    var closeBtn = document.getElementsByClassName("close")[0];

    // Khi nhấn vào icon, mở modal
    icon.onclick = function () {
        modal.style.display = "block";
    }

    // Khi nhấn vào nút đóng, ẩn modal
    closeBtn.onclick = function () {
        modal.style.display = "none";
    }

    // Khi nhấn ngoài modal, ẩn modal
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

</script>

</html>