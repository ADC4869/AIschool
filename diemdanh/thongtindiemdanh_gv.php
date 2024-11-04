<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin học sinh</title>
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/thongtingiaovien.css">
    <link rel="stylesheet" href="../css/global.css">
</head>

<body>
    <div class="main">
        <div class="header">
            <div class="header">
                <div class="content-header">
                    <div class="icon-header" onclick="goBack()">
                        <i class="ti-angle-left"></i>
                    </div>
                    <div class="title-header">
                        <h5>Thông tin giáo viên</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-info">
            <div class="teacher-photo">
                <img src="../IMG/avtteacher.png" alt="Ảnh giáo viên" class="img-teacher">
            </div>
            <div class="info-detail">
                <h5>Nguyễn Thị Mai</h5>
                <p>Môn: <span>Toán</span></p>
                <p>Mã giáo viên: <span>123</span></p>
                <p>Email: <span>nguyenthimai@gmail.com</span></p>
                <p>Số điện thoại: <span>0327348580</span></p>
                <p>Địa chỉ: <span>Bến Tre</span></p>
            </div>
        </div>
        <div class="table-time">
            <table>
                <thead>
                    <th>STT</th>
                    <th>Thứ</th>
                    <th>Ngày</th>
                    <th>Thời gian đến trường</th>
                    <th>Trạng thái</th>
                </thead>
                <tbody>
                    <tr class="good">
                        <td>01</td>
                        <td>Thứ 6</td>
                        <td>16/08/2024</td>
                        <td>06:45</td>
                        <td>Tốt</td>
                    </tr>
                    <tr class="late">
                        <td>02</td>
                        <td>Thứ 5</td>
                        <td>15/08/2024</td>
                        <td>07:05</td>
                        <td>trễ</td>
                    </tr>
                    <tr class="miss">
                        <td>03</td>
                        <td>Thứ 4</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Vắng</td>
                    </tr>
                </tbody>


            </table>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
</body>
<script src="../js/back.js"></script>
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>

</html>