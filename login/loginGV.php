<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký giáo viên</title>
    <link rel="stylesheet" href="./css/signin.css">
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
            <!-- Giáo viên -->
            <div class="main__content">
                <img src="../img/intro4.jpg" alt="anh dang nhap">
                <p class="title">Chào mừng đến SchoolAI App</p>
                <!-- Thêm method POST và action trỏ đến file xử lý đăng ký -->
                <form method="POST" action="register_gv.php">
                    <div class="main__input">
                        <div class="main__input1">
                            <label for="">Họ và tên</label>
                            <input type="text" name="fullname" placeholder="Họ và tên" required>
                            <label for="">CCCD / Định danh</label>
                            <input type="text" name="cccd" placeholder="CCCD / Định danh" required>
                            <label for="">Ngày sinh</label>
                            <input type="date" name="dob" placeholder="Ngày sinh" required>

                        </div>
                        <div class="main__input2">
                            <input type="text" name="gender" placeholder="Giới tính" required>
                            <input type="text" name="nationality" placeholder="Quốc tịch" required>
                            <input type="text" name="ethnic" placeholder="Dân tộc" required>
                            <input type="text" name="religion" placeholder="Tôn giáo" required>
                        </div>
                        <div class="main__input1">
                        <label for="">Địa chỉ</label>
                            <input type="text" name="address" placeholder="Địa chỉ" required>
                            <label for="">Số điện thoại</label>
                            <input type="text" name="phone" placeholder="Số điện thoại" required>
                            <label for="">Mã giáo viên</label>
                            <input type="text" name="teacher_code" placeholder="Mã giáo viên" required>
                            <label for="">Lớp chủ nhiệm</label>
                            <select name="class_supervised" required>
                                <option value="0">Lớp chủ nhiệm</option>
                                <option value="1">Lớp 9A1</option>
                                <option value="2">Lớp 9A2</option>
                                <option value="3">Lớp 9A3</option>
                                <option value="4">Lớp 9A4</option>
                                <option value="5">Lớp 9A5</option>
                                <option value="6">Lớp 8A1</option>
                                <option value="7">Lớp 8A2</option>
                                <option value="8">Lớp 8A3</option>
                                <option value="9">Lớp 8A4</option>
                            </select>
                            <label for="">Môn dạy</label>
                            <select name="subjects" required>
                                <option value="">Môn dạy</option>
                                <option value="Văn">Văn</option>
                                <option value="Toán">Toán</option>
                                <option value="Lý">Lý</option>
                                <option value="Sinh">Sinh</option>
                                <option value="Sử">Sử</option>
                                <option value="Anh">Anh</option>
                                <option value="Địa">Địa</option>
                                <option value="Hóa">Hóa</option>
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