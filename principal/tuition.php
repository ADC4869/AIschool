<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tình trạng học phí</title>
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
    <link rel="stylesheet" href="css/tuition.css">
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
            <div class="title" id="headerTitle">Tình trạng học phí</div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="infor_total">
                <span class="title-fee">Tổng quan học phí</span>
                <div class="fee-summary">
                    <span><strong>Tổng</strong> 1.000.000.000</span>
                    <span><strong>Đã thu:</strong> 800.000.000</span>
                    <span><strong>Chưa thu:</strong> 200.000.000</span>
                </div>

            </div>
            <canvas id="tuitionChart"></canvas>
        </div>

        <div class="container1">
            <span class="title-fee-detail">Danh sách tình trạng các khối</span>
            <div class="status-list">
                <div class="status-item" id="khoi6-btn">
                    <div class="circle" onclick="toggleClassList('khoi6', this)">Khối 6</div>
                    <button class="status-button">Đủ</button>
                </div>
                <div class="status-item" id="khoi7-btn">
                    <div class="circle" onclick="toggleClassList('khoi7', this)">Khối 7</div>
                    <button class="status-button">Đủ</button>
                </div>
                <div class="status-item" id="khoi8-btn">
                    <div class="circle" onclick="toggleClassList('khoi8', this)">Khối 8</div>
                    <button class="status-button">Đủ</button>
                </div>
                <div class="status-item" id="khoi9-btn">
                    <div class="circle" onclick="toggleClassList('khoi9', this)">Khối 9</div>
                    <button class="status-button thieu">Thiếu</button>
                </div>
            </div>

            <!-- Class List Section -->
            <div id="khoi9" class="class-list" style="display: none;">
                <h2>Danh sách lớp khối 9</h2>
                <a href="list.php">
                    <div class="class-item red-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 9A1</span>
                            <span class="data_hovatengiaovien">GVCN: Nguyễn Thị Ánh Xuân</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 40</span>
                                <span>Đã đóng: 28</span>
                                <span>Chưa đóng: 2</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
                <a href="list.php">
                    <div class="class-item blue-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 9A2</span>
                            <span class="data_hovatengiaovien">GVCN: Trần Nguyên Khởi</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 40</span>
                                <span>Đã đóng: 40</span>
                                <span>Chưa đóng: 0</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
                <a href="list.php">
                    <div class="class-item red-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 9A3</span>
                            <span class="data_hovatengiaovien">GVCN: Lâm Nhựt Trường</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 34</span>
                                <span>Đã đóng: 34</span>
                                <span>Chưa đóng: 0</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
                <a href="list.php">
                    <div class="class-item red-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 9A4</span>
                            <span class="data_hovatengiaovien">GVCN: Lê Phúc Thiên Vy</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 36</span>
                                <span>Đã đóng: 36</span>
                                <span>Chưa đóng: 0</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
            </div>

            <div id="khoi8" class="class-list" style="display: none;">
                <h2>Danh sách lớp khối 8</h2>
                <a href="list.php">
                    <div class="class-item blue-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 8A1</span>
                            <span class="data_hovatengiaovien">GVCN: Nguyễn Xuân Dương</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 40</span>
                                <span>Đã đóng: 40</span>
                                <span>Chưa đóng: 0</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
                <a href="list.php">
                    <div class="class-item blue-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 8A2</span>
                            <span class="data_hovatengiaovien">GVCN: Lê Thị Xuân</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 40</span>
                                <span>Đã đóng: 40</span>
                                <span>Chưa đóng: 0</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
                <a href="list.php">
                    <div class="class-item blue-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 8A3</span>
                            <span class="data_hovatengiaovien">GVCN: Trần Bích Ngọc</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 40</span>
                                <span>Đã đóng: 40</span>
                                <span>Chưa đóng: 0</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
                <a href="list.php">
                    <div class="class-item blue-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 8A4</span>
                            <span class="data_hovatengiaovien">GVCN: Nguyễn Xuân Tiền</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 40</span>
                                <span>Đã đóng: 40</span>
                                <span>Chưa đóng: 0</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
            </div>

            <div id="khoi7" class="class-list" style="display: none;">
                <h2>Danh sách lớp khối 7</h2>
                <a href="list.php">
                    <div class="class-item blue-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 7A1</span>
                            <span class="data_hovatengiaovien">GVCN: Phạm Thiên Phúc</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 40</span>
                                <span>Đã đóng: 40</span>
                                <span>Chưa đóng: 0</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
                <a href="list.php">
                    <div class="class-item blue-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 7A2</span>
                            <span class="data_hovatengiaovien">GVCN: Châu Kim Khánh</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 40</span>
                                <span>Đã đóng: 40</span>
                                <span>Chưa đóng: 0</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
                <a href="list.php">
                    <div class="class-item blue-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 7A3</span>
                            <span class="data_hovatengiaovien">GVCN: Đặng Ánh Dương</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 40</span>
                                <span>Đã đóng: 40</span>
                                <span>Chưa đóng: 0</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
                <a href="list.php">
                    <div class="class-item blue-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 7A4</span>
                            <span class="data_hovatengiaovien">GVCN: Bùi Công Khanh</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 40</span>
                                <span>Đã đóng: 40</span>
                                <span>Chưa đóng: 0</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
            </div>

            <div id="khoi6" class="class-list" style="display: none;">
                <h2>Danh sách lớp khối 6</h2>
                <a href="list.php">
                    <div class="class-item blue-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 6A1</span>
                            <span class="data_hovatengiaovien">GVCN: Nguyễn Thiên Kim</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 40</span>
                                <span>Đã đóng: 40</span>
                                <span>Chưa đóng: 0</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
                <a href="list.php">
                    <div class="class-item blue-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 6A2</span>
                            <span class="data_hovatengiaovien">GVCN: Trần Anh Thư</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 40</span>
                                <span>Đã đóng: 40</span>
                                <span>Chưa đóng: 0</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
                <a href="list.php">
                    <div class="class-item blue-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 6A3</span>
                            <span class="data_hovatengiaovien">GVCN: Nguyễn Ngọc Ngà</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 40</span>
                                <span>Đã đóng: 40</span>
                                <span>Chưa đóng: 0</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
                <a href="list.php">
                    <div class="class-item blue-bg">
                        <div class="class-item-content">
                            <span class="data_lophoc">Lớp 6A4</span>
                            <span class="data_hovatengiaovien">GVCN: Lương Tuấn Vỹ</span>
                            <div class="statistical">
                                <span class="data_siso">Sỉ số: 40</span>
                                <span>Đã đóng: 40</span>
                                <span>Chưa đóng: 0</span>
                            </div>
                        </div>
                        <div class="icon_detail">
                            <i data-feather="alert-circle" style="color: #5B6998"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="../js/back.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>
<script>
    const ctx = document.getElementById('tuitionChart').getContext('2d');
    const tuitionChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Học phí đã thu', 'Học phí chưa thu'],
            datasets: [{
                label: 'Học phí',
                data: [800000000, 200000000],
                backgroundColor: ['#b3e5fc', '#ffcdd2'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom',
                },
                tooltip: {
                    callbacks: {
                        label: function (tooltipItem) {
                            const value = tooltipItem.raw;
                            return value.toLocaleString() + ' VND';
                        }
                    }
                }
            }
        }
    });
</script>

<script>
    function toggleClassList(id, element) {
        // Lấy danh sách lớp đã chọn
        var selectedList = document.getElementById(id);

        // Kiểm tra nếu danh sách lớp được chọn đã hiển thị, không làm gì thêm
        if (selectedList.style.display === 'block') {
            return;
        } else {
            // Ẩn tất cả danh sách lớp khác trước
            var classLists = document.querySelectorAll('.class-list');
            classLists.forEach(function (list) {
                list.style.display = 'none';
            });

            // Loại bỏ lớp 'active' khỏi tất cả các hình tròn
            var circles = document.querySelectorAll('.circle');
            circles.forEach(function (circle) {
                circle.classList.remove('active');
            });

            // Hiển thị danh sách lớp đã chọn
            selectedList.style.display = 'block';

            // Thêm lớp 'active' vào hình tròn của phần tử được nhấn
            var clickedCircle = element.querySelector('.circle');
            clickedCircle.classList.add('active');
        }
    }
</script>

</html>