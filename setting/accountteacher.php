
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin tài khoản</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- Css -->
    <link rel="stylesheet" href="./css/accountgv.css">
    <link rel="stylesheet" href="../css/global.css">
</head>

<body>
    <header>
        <div class="header">
            <p class="header__title">Cài đặt tài khoản</p>
            <div class="back-arrow">
                <span class="back-arrow" onclick="goBack()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                    </svg>
                </span>
            </div>
            <div class="teacher-info">
                <img src="../img/hs1.jpg" alt="Teacher Photo" class="teacher-photo data_anhdaidien">
                <div class="teacher-details">
                    <p class="data_hovatenhocsinh">Từ Văn Tú</p>
                    <p class="data_mahocsinh">HS001</p>
                </div>
            </div>
        </div>
    </header>

    <main>
        <?php
        $role = isset($_SESSION['role']) ? $_SESSION['role'] : 'hocsinh'; // Mặc định là học sinh nếu không có vai trò
        ?>

        <?php
            $role = isset($_GET['role']) ? $_GET['role'] : 'hocsinh';
            $accountInfo = '';
            if ($role === 'giaovien') {
                $accountInfo = 'Tài khoản : Giáo viên';
                $msLabel = 'MSGV';
            } elseif ($role === 'hieutruong') {
                $accountInfo = 'Tài khoản : Hiệu trưởng';
                $msLabel = 'MSHT';
            } else {
                $accountInfo = 'Tài khoản : Học sinh';
                $msLabel = 'MSHS';
            }
        ?>
        <div class="main__title">
            <h5>Thông tin cá nhân</h5>
        </div>
        <div class="main__content">
            <?php
                $role = isset($_GET['role']) ? $_GET['role'] : 'hocsinh';
                if ($role === 'giaovien' || $role === 'hieutruong') {
                    // Hiển thị nội dung cho giáo viên hoặc hiệu trưởng
                    echo '<div class="short__row">
                            <div>
                                <p class="small__title data_monhoc">Phụ trách môn</p>
                                <div class="info">
                                    <p>Văn</p>
                                </div>
                            </div>
                            <div>
                                <p class="small__title data_lophoc">Chủ nhiệm lớp</p>
                                <div class="info">
                                    <p>9A1</p>
                                </div>
                            </div>
                        </div>';
                } elseif ($role === 'phuhuynh') {
                    // Hiển thị nội dung cho phụ huynh
                    echo '<div class="short__row">
                            <div>
                                <p class="small__title data_hovatenhocsinh">Tên học sinh</p> 
                                <div class="info">
                                    <p>Từ Văn Tú</p> 
                                </div>
                            </div>
                            <div>
                                <p class="small__title data_lophoc">Lớp</p>
                                <div class="info">
                                    <p>9A1</p> 
                                </div>
                            </div>
                        </div>';
                } else {
                    // Hiển thị nội dung cho học sinh (hoặc nếu không có role)
                    echo '<div>
                            <p class="small__title data_lophoc">Lớp</p>
                            <div class="info">
                                <p>9A1</p>
                                <i data-feather="edit-2" style="color: #000000"></i>
                            </div>
                        </div>';
                }
            ?>

            <div>
                <p class="small__title">CCCD / Định danh</p>
                <div class="info">
                    <p class="data_cccd">079202099288</p>
                    <i data-feather="edit-2" style="color: #000000"></i>
                </div>
            </div>

            <div>
                <p class="small__title">Ngày sinh</p>
                <div class="info data_ngaysinh">
                    <p>2007-11-12</p>
                    <i data-feather="edit-2" style="color: #000000"></i>
                </div>
            </div>

            <div class="short__row">
                <div>
                    <p class="small__title">Giới tính</p>
                    <div class="info data_gioitinh">
                        <p>Nam</p>
                        <i data-feather="edit-2" style="color: #000000"></i>
                    </div>
                </div>
                <div>
                    <p class="small__title">Tôn giáo </p>
                    <div class="info">
                        <p class="data_tongiao">Không</p>
                        <i data-feather="edit-2" style="color: #000000"></i>
                    </div>
                </div>
            </div>

            <div class="short__row">
                <div>
                    <p class="small__title">Quốc tịch</p>
                    <div class="info">
                        <p class="data_quoctich">Việt Nam</p>
                        <i data-feather="edit-2" style="color: #000000"></i>
                    </div>
                </div>
                <div>
                    <p class="small__title">Dân tộc</p>
                    <div class="info">
                        <p class="data_dantoc">Kinh</p>
                        <i data-feather="edit-2" style="color: #000000"></i>
                    </div>
                </div>
            </div>

            <div>
                <p class="small__title">Số điện thoại</p>
                <div class="info">
                    <p>0907889677</p>
                    <i data-feather="edit-2" style="color: #000000"></i>
                </div>
            </div>

            <div>
                <p class="small__title">Email</p>
                <div class="info">
                    <p class="data_email">thanhdat300595@gmail.com</p>
                    <i data-feather="edit-2" style="color: #000000"></i>
                </div>
            </div>

            <div class="data-diachi">
                <p class="small__title">Địa chỉ</p>
                <div class="info__address">
                    <p class="data_diachi">123/23 HCM</p>
                    <i data-feather="edit-2" style="color: #000000"></i>
                </div>
            </div>
        </div>

        <?php
            // Giả sử biến role được lấy từ session hoặc cơ sở dữ liệu sau khi đăng nhập
            $role = $_GET['role'] ?? 'hocsinh'; // Nếu không có role, mặc định là 'hocsinh'

            if ($role == 'giaovien' || $role == 'hieutruong') {
            ?>
                    <div class="main__title">
                        <h5>Trình độ học vấn</h5>
                    </div>

                    <div class="main__content">
                        <div>
                            <p class="small__title">Bằng cấp chuyên môn</p>
                            <div class="info data_bangcapchuyenmon">
                                <p>Cử nhân Sư phạm Ngữ văn</p>
                            </div>
                        </div>

                        <div>
                            <p class="small__title">Chứng chỉ</p>
                            <div class="info data_chungchi">
                                <p >Chứng chỉ Sư phạm Trung học Cơ sở</p>
                            </div>
                            <div class="info data_chungchi">
                                <p>Chứng chỉ Tiếng Anh B2 - Hội đồng Anh</p>
                            </div>
                            <div class="info_long data_chungchi">
                                <p class="long__info">Khóa học Phát triển Kỹ năng Sư phạm - Viện Nghiên cứu Giáo dục</p>
                            </div>
                        </div>
                    </div>

                    <div class="main__title">
                        <h5>Kinh nghiệm giảng dạy</h5>
                    </div>

                    <div class="main__content">
                        <div>
                            <p class="small__title">Số năm kinh nghiệm</p>
                            <div class="info data_sonamkinhnghiem">
                                <p>10 năm</p>
                            </div>
                        </div>

                        <div>
                            <p class="small__title">Các trường đã từng giảng dạy</p>
                            <div class="info data_truonggiangday">
                                <p>Trường Trung học Cơ sở Lê Quý Đôn</p>
                            </div>
                            <div class="info data_truonggiangday">
                                <p>Trường Trung học Cơ sở Tam Nông</p>
                            </div>
                            <div class="info data_truonggiangday">
                                <p>Trường Trung học Cơ sở Nguyễn An Ninh</p>
                            </div>
                        </div>

                        <div>
                            <p class="small__title">Môn học và cấp độ giảng dạy</p>
                            <div class="info_long data_monhocvacapdo">
                                <p class="long__info">Ngữ văn - Trung học Cơ sở và Trung học Phổ thông</p>
                            </div>
                            <div class="info data_monhocvacapdo">
                                <p>Tiếng Anh - Trung học Cơ sở</p>
                            </div>
                        </div>
                    </div>
                    <?php
            }
        ?>

        <?php
            // Giả sử biến role được lấy từ session hoặc cơ sở dữ liệu sau khi đăng nhập
            $role = $_GET['role'] ?? 'hocsinh'; // Nếu không có role, mặc định là 'phuhuynh'

            if ($role == '') {
            ?>
                <div class="main__title">
                    <h5>Thông tin học tập</h5>
                </div>

                <div class="main__content">
                    <div>
                        <p class="small__title">Giáo viên chủ nhiệm</p>
                        <div class="info data_hovatengiaovien">
                            <p>Nguyễn Thị Ánh Xuân</p>
                        </div>
                    </div>

                    <div class="short__row">
                        <div>
                            <p class="small__title">Học lực</p>
                            <div class="info data_hocluc">
                                <p>Giỏi</p>
                            </div>
                        </div>
                        <div>
                            <p class="small__title">Hạnh kiểm</p>
                            <div class="info data_hanhkiem">
                                <p>Tốt</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="main__title">
                    <h5>Sơ yếu lí lịch</h5>
                </div>

                <div class="main__content">
                    <div>
                        <p class="small__title">Họ và tên Cha</p>
                        <div class="info data_hovatenphuhuynh">
                            <p>Trương Huỳnh Anh</p>
                        </div>
                    </div>

                    <div>
                        <p class="small__title">CCCD</p>
                        <div class="info data_cccd">
                            <p>08730201569</p>
                        </div>
                    </div>

                    <div class="short__row">
                        <div>
                            <p class="small__title">Ngày sinh</p>
                            <div class="info data_ngaysinh">
                                <p>01/01/1978</p>
                                <i data-feather="edit-2" style="color: #000000"></i>
                            </div>
                        </div>
                        <div>
                            <p class="small__title">Quốc tịch</p>
                            <div class="info data_quoctich">
                                <p>Việt Nam</p>
                                <i data-feather="edit-2" style="color: #000000"></i>
                            </div>
                        </div>
                    </div>

                    <div class="short__row">
                        <div>
                            <p class="small__title">Dân tộc</p>
                            <div class="info data_dantoc">
                                <p>Kinh</p>
                                <i data-feather="edit-2" style="color: #000000"></i>
                            </div>
                        </div>
                        <div>
                            <p class="small__title">Tôn giáo</p>
                            <div class="info data_tongiao">
                                <p>Không</p>
                                <i data-feather="edit-2" style="color: #000000"></i>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="small__title">Nghề nghiệp</p>
                        <div class="info data_nghenghiep">
                            <p>Kỹ sư</p>
                        </div>
                    </div>

                    <div>
                        <p class="small__title">Địa chỉ</p>
                        <div class="info_long data_diachi">
                            <p class="long__info">12 Nguyễn Văn Bảo, phường 6, Gò Vấp, Hồ Chí Minh</p>
                            <i data-feather="edit-2" style="color: #000000"></i>
                        </div>
                    </div>

                    <div>
                        <p class="small__title">Số điện hoại</p>
                        <div class="info data_sodienthoai">
                            <p>0894567978</p>
                            <i data-feather="edit-2" style="color: #000000"></i>
                        </div>
                    </div>

                    <div>
                        <p class="small__title">Họ và tên Mẹ</p>
                        <div class="info data_hovatenphuhuynh">
                            <p>Lâm Thị Bảo Ngọc</p>
                            <i data-feather="edit-2" style="color: #000000"></i>
                        </div>
                    </div>

                    <div>
                        <p class="small__title">CCCD</p>
                        <div class="info data_cccd">
                            <p>08736578941</p>
                        </div>
                    </div>

                    <div class="short__row">
                        <div>
                            <p class="small__title">Ngày sinh</p>
                            <div class="info data_ngaysinh">
                                <p>03/10/1975</p>
                                <i data-feather="edit-2" style="color: #000000"></i>
                            </div>
                        </div>
                        <div>
                            <p class="small__title">Quốc tịch</p>
                            <div class="info data_quoctich">
                                <p>Việt Nam</p>
                                <i data-feather="edit-2" style="color: #000000"></i>
                            </div>
                        </div>
                    </div>

                    <div class="short__row">
                        <div>
                            <p class="small__title">Dân tộc</p>
                            <div class="info data_dantoc">
                                <p>Kinh</p>
                                <i data-feather="edit-2" style="color: #000000"></i>
                            </div>
                        </div>
                        <div>
                            <p class="small__title">Tôn giáo</p>
                            <div class="info data_tongiao">
                                <p>Không</p>
                                <i data-feather="edit-2" style="color: #000000"></i>
                            </div>
                        </div>
                    </div>
                    <div>
                        <p class="small__title">Nghề nghiệp</p>
                        <div class="info data_nghenghiep">
                            <p>Nhân viên văn phòng</p>
                        </div>
                    </div>

                    <div>
                        <p class="small__title">Địa chỉ</p>
                        <div class="info_long data_diachi">
                            <p class="long__info">12 Nguyễn Văn Bảo, phường 6, Gò Vấp, Hồ Chí Minh</p>
                            <i data-feather="edit-2" style="color: #000000"></i>
                        </div>
                    </div>

                    <div>
                        <p class="small__title">Số điện hoại</p>
                        <div class="info data_sodienthoai">
                            <p>0897888799</p>
                            <i data-feather="edit-2" style="color: #000000"></i>
                        </div>
                    </div>
                </div>
            <?php
            }
        ?>
        </div>

    </main>
</body>
<script src="../js/back.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
feather.replace();
</script>

</html>