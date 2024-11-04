<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký học sinh</title>
    <link rel="stylesheet" href="./css/signinbyrole.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../css/global.css">
</head>
<body>
    <div class="container">
        <header>
            <div class="header__icon">
                <i class="ti-angle-left" onclick="goBack()"></i>
            </div>
        </header>

        <main>
            <!-- Học sinh -->
            <div class="main__content">
                <img src="../img/intro4.jpg" alt="anh dang nhap">
                <p class="title">Chào mừng đến AISchool</p>

                <!-- Thêm method POST và action trỏ đến file xử lý đăng ký -->
                <form method="POST" action="../forgot/loginpassword.php">
                    <div class="main__input">
                        <div class="main__input1">
                            <label for="">Họ và tên</label>
                            <input class="input_hovaten" type="text" name="fullname" placeholder="Họ và tên" required>
                            <label for="">CCCD / Định danh</label>
                            <input class="input_cccd" type="text" name="cccd" placeholder="CCCD / Định danh" required>
                            <label for="">Ngày sinh</label>
                            <input class="input_ngaysinh" type="date" name="dob" placeholder="Ngày sinh" required>
                        </div>
                        <div class="main__input2">
                            <div class="main_label">
                                <label for="">Giới tính</label>
                                <label for="">Quốc tịch</label>
                            </div>
                            <input class="input_gioitinh" type="text" name="gender" placeholder="Giới tính" required>
                            <input class="input_quoctich" type="text" name="nationality" placeholder="Quốc tịch" required>
                            <div class="main_label">
                                <label for="">Dân tộc</label>
                                <label for="">Tôn giáo</label>
                            </div>
                            <input class="input_dantoc" type="text" name="ethnic" placeholder="Dân tộc" required>
                            <input class="input_tongiao" type="text" name="religion" placeholder="Tôn giáo" required>
                        </div>
                        <div class="main__input1">
                            <label for="">Địa chỉ</label>
                            <input class="input_diachi" type="text" name="address" placeholder="Địa chỉ" required>
                            <label for="">Số điện thoại</label>
                            <input class="input_sodienthoai" type="text" name="phone" placeholder="Số điện thoại" required>
                            <label for="">Mã học sinh</label>
                            <input class="input_mahocsinh" type="text" name="student_code" placeholder="Mã học sinh" required>
                            <label for="">Mã phụ huynh</label>
                            <input class="input_maphuhuynh" type="text" name="student_code" placeholder="Mã phụ huynh" required>
                            <label for="">Lớp</label>
                            <select class="select_lophoc" name="classes" required>
                                <option value="">Lớp</option>
                                <option value="1">Lớp 9A1</option>
                                <option value="2">Lớp 9A2</option>
                                <option value="3">Lớp 9A3</option>
                                <option value="4">Lớp 9A4</option>
                                <option value="5">Lớp 9A5</option>
                                <option value="6">Lớp 8A1</option>
                                <option value="7">Lớp 8A2</option>
                                <option value="8">Lớp 8A3</option>
                                <option value="9">Lớp 8A4</option>
                                <option value="10">Lớp 8A5</option>
                            </select>
                        </div>
                    </div>

                    <div class="main__button">
                        <button type="submit" class="btn__signin">Tiếp theo</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
<script src="../js/back.js"></script>

</html>