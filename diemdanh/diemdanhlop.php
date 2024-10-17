<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Điểm danh lớp</title>
    <link rel="stylesheet" href="./css/diemdanhtunglop.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- HEADER -->
        <header>
            <div class="header">
                <i class="ti-angle-left" onclick="goBack()"></i>
                <p class="header__title">
                    Điểm danh lớp 1A
                </p>
            </div>
        </header>
        <!-- MAIN -->
        <main>
            <div class="main__infoclass">
                <div class="top__infoclass">
                    <div class="teacher__photo">
                        <img src="../img/avtteacher.png" alt="anh giao vien" class="img__teacher">
                    </div>
                    <div class="teacher__name">
                        <div class="teacher__name1">
                            <p class="data_hovatengiaovien">GVCN: <span>Nguyễn Thị Mai</span></p>
                        </div>
                        <div class="teacher__name2">
                            <p>Ngày: <span>15/08/2024</span></p>
                            <p>Thời gian: <span>10:30</span></p>
                        </div>
                    </div>
                </div>

                <div class="bottom__infoclass">
                    <button class="btn btn__tongso" type="button" onclick="showSection('siso')">SS:
                        <span>40</span></button>
                    <button class="btn btn__hiendien" type="button" onclick="showSection('hiendien')">HD:
                        <span>36</span></button>
                    <button class="btn btn__tre" type="button" onclick="showSection('tre')">Trễ: <span>2</span></button>
                    <button class="btn btn__vang" type="button" onclick="showSection('vang')">Vắng:
                        <span>4</span></button>
                </div>
            </div>

            <!-- SỈ SỐ -->
            <div id="siso" class="main__infodetail">
                <div class="infodetail">
                    <div class="detail detail__siso">
                        <div class="left__detail">
                            <a href="../diemdanh/thongtinhocsinhfix.php">
                                <img src="../img/avtteacher.png" alt="anh hoc sinh" class="img__student">
                            </a>
                        </div>
                        <div class="between__detail">
                            <a href="../diemdanh/thongtinhocsinhfix.php">

                                <p class="name__student data_hovatenhocsinh"><span>Từ Văn Tú</span></p>
                                <p class="time__student">Thời gian đến trường: <span>06:05</span></p>
                            </a>
                        </div>
                        <div class="right__detail">
                            <button type="button" class="btn__tinhtrang">Tình trạng</button>
                            <button type="button" class="btn__chitiet btn__siso"><i class="ti-pencil-alt"></i></button>
                        </div>
                    </div>
                </div>

                <div class="infodetail">
                    <div class="detail detail__siso">
                        <div class="left__detail">
                            <a href="../diemdanh/thongtinhocsinhfix.php">
                                <img src="../img/avtteacher.png" alt="anh hoc sinh" class="img__student">
                            </a>
                        </div>
                        <div class="between__detail">
                            <a href="../diemdanh/thongtinhocsinhfix.php">

                                <p class="name__student data_hovatenhocsinh"><span>Từ Văn Tú</span></p>
                                <p class="time__student">Thời gian đến trường: <span>06:05</span></p>
                            </a>
                        </div>
                        <div class="right__detail">
                            <button type="button" class="btn__tinhtrang">Tình trạng</button>
                            <button type="button" class="btn__chitiet btn__siso"><i class="ti-pencil-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- HIỆN DIỆN -->
            <div id="hiendien" class="main__infodetail hidden">
                <div class="infodetail">
                    <div class="detail detail__hiendien">
                        <div class="left__detail">
                            <a href="../diemdanh/thongtinhocsinhfix.php">
                                <img src="../img/avtteacher.png" alt="anh hoc sinh" class="img__student">
                            </a>
                        </div>
                        <div class="between__detail">
                            <a href="../diemdanh/thongtinhocsinhfix.php">

                                <p class="name__student data_hovatenhocsinh"><span>Từ Văn Tú</span></p>
                                <p class="time__student">Thời gian đến trường: <span>06:05</span></p>
                            </a>
                        </div>
                        <div class="right__detail">
                            <button type="button" class="btn__tinhtrang">Tình trạng</button>
                            <button type="button" class="btn__chitiet btn__hiendien"><i
                                    class="ti-pencil-alt"></i></button>
                        </div>
                    </div>
                </div>
                <div class="infodetail">
                    <div class="detail detail__hiendien">
                        <div class="left__detail">
                            <a href="../diemdanh/thongtinhocsinhfix.php">
                                <img src="../img/avtteacher.png" alt="anh hoc sinh" class="img__student">
                            </a>
                        </div>
                        <div class="between__detail">
                            <a href="../diemdanh/thongtinhocsinhfix.php">

                                <p class="name__student data_hovatenhocsinh"><span>Từ Văn Tú</span></p>
                                <p class="time__student">Thời gian đến trường: <span>06:05</span></p>
                            </a>
                        </div>
                        <div class="right__detail">
                            <button type="button" class="btn__tinhtrang">Tình trạng</button>
                            <button type="button" class="btn__chitiet btn__hiendien"><i
                                    class="ti-pencil-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TRỄ -->
            <div id="tre" class="main__infodetail hidden">
                <div class="infodetail">
                    <div class="detail detail__tre">
                        <div class="left__detail">
                            <a href="../diemdanh/thongtinhocsinhfix.php">
                                <img src="../img/avtteacher.png" alt="anh hoc sinh" class="img__student">
                            </a>
                        </div>
                        <div class="between__detail">
                            <a href="../diemdanh/thongtinhocsinhfix.php">

                                <p class="name__student data_hovatenhocsinh"><span>Từ Văn Tú</span></p>
                                <p class="time__student">Thời gian đến trường: <span>06:05</span></p>
                            </a>
                        </div>
                        <div class="right__detail">
                            <button type="button" class="btn__tinhtrang">Tình trạng</button>
                            <button type="button" class="btn__chitiet btn__tre"><i class="ti-pencil-alt"></i></button>
                        </div>
                    </div>
                </div>

                <div class="infodetail">
                    <div class="detail detail__tre">
                        <div class="left__detail">
                            <a href="../diemdanh/thongtinhocsinhfix.php">
                                <img src="../img/avtteacher.png" alt="anh hoc sinh" class="img__student">
                            </a>
                        </div>
                        <div class="between__detail">
                            <a href="../diemdanh/thongtinhocsinhfix.php">

                                <p class="name__student data_hovatenhocsinh"><span>Từ Văn Tú</span></p>
                                <p class="time__student">Thời gian đến trường: <span>06:05</span></p>
                            </a>
                        </div>
                        <div class="right__detail">
                            <button type="button" class="btn__tinhtrang">Tình trạng</button>
                            <button type="button" class="btn__chitiet btn__tre"><i class="ti-pencil-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- VẮNG -->
            <div id="vang" class="main__infodetail hidden">
                <div class="infodetail">
                    <div class="detail detail__vang">
                        <div class="left__detail">
                            <a href="../diemdanh/thongtinhocsinhfix.php">
                                <img src="../img/avtteacher.png" alt="anh hoc sinh" class="img__student">
                            </a>
                        </div>
                        <div class="between__detail">
                            <a href="../diemdanh/thongtinhocsinhfix.php">

                                <p class="name__student data_hovatenhocsinh"><span>Từ Văn Tú</span></p>
                                <p class="time__student">Thời gian đến trường: <span>06:05</span></p>
                            </a>
                        </div>
                        <div class="right__detail">
                            <button type="button" class="btn__tinhtrang">Tình trạng</button>
                            <button type="button" class="btn__chitiet btn__vang"><i class="ti-pencil-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL BÁO CÁO TÍNH HÌNH SỨC KHỎE -->
            <div class="modal fade hidden" id="statusModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="title">Báo cáo tình hình học sinh</div>
                        </div>
                        <div class="modal-body">
                            <!-- XÁC NHẬN ĐÃ ĐẾN LỚP -->
                            <div class="check-denlop">
                                <label for="checkClass" class="form-label">Học sinh đã đến lớp:</label>
                                <select id="checkClass" class="form-select">
                                    <option value="yes">Đã đến lớp</option>
                                    <option value="no">Chưa đến lớp</option>
                                </select>
                            </div>

                            <!-- Phần báo cáo tình hình sức khỏe -->
                            <div class="check-suckhoe">
                                <div class="form-suckhoe-group">
                                    <div class="from-check-suckhoe">
                                        <label class="form-label">Tình trạng sức khỏe:</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="trangthai" id="normal"
                                                value="normal" checked>
                                            <label class="form-check-label" for="normal">
                                                Bình thường
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="trangthai"
                                                id="canquantam" value="canquantam">
                                            <label class="form-check-label" for="canquantam">
                                                Cần quan tâm
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-photo"></div>
                                </div>

                                <textarea class="form-control" id="canquantam-detail" rows="3"
                                    placeholder="Nhập chi tiết tình trạng sức khỏe"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn-send" id="send">Gửi</button>
                            <button type="button" class="btn-camera">
                                <i class="ti-camera"></i>
                            </button>
                            <button type="button" class="btn-exit" onclick="closeModal()">Đóng</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MODAL GHI CHÚ -->
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
    </div>

    <script>
        function showSection(section) {
            // Ẩn tất cả các phần
            document.getElementById('siso').classList.add('hidden');
            document.getElementById('hiendien').classList.add('hidden');
            document.getElementById('tre').classList.add('hidden');
            document.getElementById('vang').classList.add('hidden');

            // Hiện phần được chọn
            document.getElementById(section).classList.remove('hidden');
        }

        function openModal() {
            document.getElementById('statusModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('statusModal').classList.add('hidden');
        }
        function openDetailModal() {
            document.getElementById('detailModal').classList.remove('hidden');
        }

        function closeDetailModal() {
            document.getElementById('detailModal').classList.add('hidden');
        }

        // Thêm sự kiện click cho các nút "Tình trạng"
        document.querySelectorAll('.btn__tinhtrang').forEach(button => {
            button.addEventListener('click', openModal);
        });

        // Thêm sự kiện click cho các nút "Ghu chú"
        document.querySelectorAll('.btn__chitiet').forEach(button => {
            button.addEventListener('click', openDetailModal);
        });

        function saveNote() {
            console.log('Nút Lưu đã được nhấn');
            const noteInput = document.querySelector('.note__input');
            const note = noteInput.value;
            console.log('Ghi chú đã lưu:', note);

            // Đóng modal
            closeDetailModal();

            // Xóa nội dung trong textarea
            noteInput.value = '';
        }


    </script>

</body>
<script src="../js/back.js"></script>

</html>