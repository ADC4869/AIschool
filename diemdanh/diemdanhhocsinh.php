<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tình trạng chuyên cần</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">

    <!-- css -->
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="css/diemdanhhocsinh.css">
</head>
<style>
    .hidden {
        display: none;
    }
</style>

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
            <div class="title">Tình trạng chuyên cần</div>
        </div>
    </header>

    <main>
        <div class="main__calendar">
            <div class="calendar__from">
                <p>Từ: </p>
                <input type="date" name="" id="calendarfrom">
            </div>
            <div class="calendar__to">
                <p>Đến: </p>
                <input type="date" name="" id="calendarto">
            </div>
        </div>

        <div class="main__overview">
            <div class="overview">
                <div class="left__overview">
                    <div class="photostudent">
                        <img src="../img/gvn1.jpg" alt="Ảnh đại diện">
                    </div>
                    <div class="infostudent">
                        <p class="data_hovatenhocsinh">Họ và tên: <span>Nguyễn Ngọc Anh</span></p>
                        <p class="data_lophoc">Lớp: <span>9B</span></p>
                        <P class="data_mahocsinh">Mã học sinh: <span>20016741</span></P>
                    </div>
                </div>

                <div class="right__overview">
                    <div class="top">
                        <div class="circle__hiendien">
                            <div class="title">
                                <p class="title__tongso">Hiện diện</p>
                                <p class="title__tongso">36</p>
                            </div>
                        </div>
                    </div>

                    <div class="bottom">
                        <div class="circle__vang">
                            <div class="title">
                                <p class="title__vang">Vắng</p>
                                <p class="title__vang">4</p>
                            </div>
                        </div>
                        <div class="circle__tre">
                            <div class="title">
                                <p class="title__tre">Trễ</p>
                                <p class="title__tre">2</p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>

        <div class="main__title">
            <p>Chi tiết tình trạng chuyên cần:</p>
        </div>

        <div class="main__diligence">
            <div class="detail__diligence hiendien">
                <div class="photo__diligence">
                    <div class="circle hiendien">
                        <p>Hiện diện</p>
                    </div>
                </div>

                <div class="info__diligence">
                    <p class="day">Thứ 6: 16/08/2024 (Hôm nay)</p>
                    <p class="time">Thời gian đến lớp: 10:25</p>
                </div>

                <div class="note__diligence">
                    <i data-feather="edit-3" style="color: #5B6998"></i>
                </div>
            </div>

            <div class="detail__diligence hiendien">
                <div class="photo__diligence">
                    <div class="circle hiendien">
                        <p>Hiện diện</p>
                    </div>
                </div>

                <div class="info__diligence">
                    <p class="day">Thứ 5: 15/08/2024</p>
                    <p class="time">Thời gian đến lớp: 10:25
                    </p>
                </div>

                <div class="note__diligence">
                    <i data-feather="edit-3" style="color: #5B6998"></i>
                </div>
            </div>

            <div class="detail__diligence vang">
                <div class="photo__diligence">
                    <div class="circle vang">
                        <p>Vắng</p>
                    </div>
                </div>

                <div class="info__diligence">
                    <p class="day">Thứ 4: 14/08/2024</p>
                    <p class="time">Thời gian đến lớp: 10:25</p>
                </div>

                <div class="note__diligence">
                    <i data-feather="edit-3" style="color: #5B6998"></i>
                </div>
            </div>

            <div class="detail__diligence tre">
                <div class="photo__diligence">
                    <div class="circle tre">
                        <p>Vắng</p>
                    </div>
                </div>

                <div class="info__diligence">
                    <p class="day">Thứ 3: 13/08/2024</p>
                    <p class="time">Thời gian đến lớp: 10:25</p>
                </div>

                <div class="note__diligence">
                    <i data-feather="edit-3" style="color: #5B6998"></i>
                </div>
            </div>
            <div class="detail__diligence tre">
                <div class="photo__diligence">
                    <div class="circle tre">
                        <p>Vắng</p>
                    </div>
                </div>

                <div class="info__diligence" id="note1">
                    <p class="day">Thứ 2: 12/08/2024</p>
                    <p class="time">Thời gian đến lớp: 10:25</p>
                </div>

                <div class="note__diligence">
                    <i data-feather="edit-3" style="color: #5B6998"></i>
                </div>
            </div>

        </div>

        <div class="modal fade hidden" id="detailModal">
            <div class="modal-dialog modal__ghichu">
                <div class="modal-content">
                    <div class="modal-header modal__header">
                        <h3 class="header__title">Ghi chú</h3>
                    </div>
                    <div class="modal-body modal__body">
                        <!-- Chỉnh lại class ở đây nếu cần -->
                        <textarea class="note__input" placeholder="Nhập ghi chú..."></textarea>
                    </div>
                    <div class="modal-footer modal__footer">
                        <button type="button" class="btn__save" onclick="saveNote()">Lưu</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
<script src="../js/back.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>
<script>
    // Hàm mở modal
    function openModal() {
        document.getElementById('detailModal').classList.remove('hidden');
    }

    // Hàm đóng modal
    function closeModal() {
        document.getElementById('detailModal').classList.add('hidden');
    }

    // Gán sự kiện click cho biểu tượng ghi chú
    document.getElementById('note1').onclick = openModal;

    // Nếu bạn có nhiều ghi chú, hãy sử dụng vòng lặp để gán sự kiện cho tất cả
    document.querySelectorAll('.note__diligence').forEach(function (element) {
        element.onclick = openModal;
    });

    // Xử lý sự kiện click cho nút Lưu
    document.querySelector('.btn__save').addEventListener('click', function () {
        alert('Lưu thành công!');

        // Đóng modal
        closeModal();

        // Xóa nội dung trong ô ghi chú
        document.querySelector('.note__input').value = '';
    });
</script>


</html>