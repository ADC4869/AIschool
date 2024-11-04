<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thống kê số học sinh</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="./css/thongkehocsinh2.css">
    <link rel="stylesheet" href="../fonts/themify-icons/themify-icons.css">
</head>

<body>
    <div class="container">
        <!-- HEADER -->
        <header>
            <div class="header">
                <i class="ti-angle-left" onclick="goBack()"></i>
                <p class="header__title">
                    Thống kê số học sinh
                </p>
            </div>
        </header>

        <main>
            <div class="main__title">
                <p class="title">
                    Danh sách học sinh lớp 9A1
                </p>
            </div>
            <div class="main__siso">
                <div class="tabs">
                    <div class="total tab_total active" id="total">
                        <p>Tổng số</p>
                    </div>

                    <div class="male tab_male" id="male">
                        <p>Nam: 28</p>
                    </div>

                    <div class="female tab_female" id="female">
                        <p>Nữ: 12</p>
                    </div>
                </div>

            </div>
            <div class="main_search">
                <input type="search" placeholder="Nhập tên, mã học sinh để tìm kiếm">
            </div>


            <div class="main__student">
                <div class="detail__student girl">
                    <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                        <div class="left__student">
                            <img src="../img/hs.jpg" alt="anh hoc sinh" class="img__student">
                        </div>
                        <div class="between__student">
                            <p class="name__student data_hovatenhocsinh">Nguyễn Thị Ánh Linh</p>
                            <p class="mshs data_mahocsinh">Mã học sinh: <span>HS0901</span></p>
                        </div>
                        <div class="right__class">
                            <button type="button" class="btn__detail"><i data-feather="alert-circle"
                                    style="color: gray"></i></button>
                        </div>
                    </a>
                </div>

                <div class="detail__student girl">
                    <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                        <div class="left__student">
                            <img src="../img/hs.jpg" alt="anh hoc sinh" class="img__student">
                        </div>
                        <div class="between__student">
                            <p class="name__student data_hovatenhocsinh">Nguyễn Kim Châu</p>
                            <p class="mshs data_mahocsinh">Mã học sinh: <span>HS0902</span></p>
                        </div>
                        <div class="right__class">
                            <button type="button" class="btn__detail"><i data-feather="alert-circle"
                                    style="color: gray"></i></button>
                        </div>
                    </a>
                </div>

                <div class="detail__student boy">
                    <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                        <div class="left__student">
                            <img src="../img/hs1.jpg" alt="anh hoc sinh" class="img__student">
                        </div>
                        <div class="between__student">
                            <p class="name__student data_hovatenhocsinh">Lâm Nhựt Nam</p>
                            <p class="mshs data_mahocsinh">Mã học sinh: <span>HS0903</span></p>
                        </div>
                        <div class="right__class">
                            <button type="button" class="btn__detail"><i data-feather="alert-circle"
                                    style="color: gray"></i></button>
                        </div>
                    </a>
                </div>

                <div class="detail__student girl">
                    <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                        <div class="left__student">
                            <img src="../img/hs.jpg" alt="anh hoc sinh" class="img__student">
                        </div>
                        <div class="between__student">
                            <p class="name__student data_hovatenhocsinh">Nguyễn Thị Mỹ Tiên</p>
                            <p class="mshs data_mahocsinh">Mã học sinh: <span>HS0904</span></p>
                        </div>
                        <div class="right__class">
                            <button type="button" class="btn__detail"><i data-feather="alert-circle"
                                    style="color: gray"></i></button>
                        </div>
                    </a>
                </div>

                <div class="detail__student boy">
                    <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                        <div class="left__student">
                            <img src="../img/hs1.jpg" alt="anh hoc sinh" class="img__student">
                        </div>
                        <div class="between__student">
                            <p class="name__student data_hovatenhocsinh">Nguyễn Minh Khoa</p>
                            <p class="mshs data_mahocsinh">Mã học sinh: <span>HS0905</span></p>
                        </div>
                        <div class="right__class">
                            <button type="button" class="btn__detail"><i data-feather="alert-circle"
                                    style="color: gray"></i></button>
                        </div>
                    </a>
                </div>

                <div class="detail__student girl">
                    <a href="../thongtingiaovienhocsinh/lylichhocsinh.php">
                        <div class="left__student">
                            <img src="../img/hs.jpg" alt="anh hoc sinh" class="img__student">
                        </div>
                        <div class="between__student">
                            <p class="name__student data_hovatenhocsinh">Nguyễn Thị Yến Loan</p>
                            <p class="mshs data_mahocsinh">Mã học sinh: <span>HS0906</span></p>
                        </div>
                        <div class="right__class">
                            <button type="button" class="btn__detail"><i data-feather="alert-circle"
                                    style="color: gray"></i></button>
                        </div>
                    </a>
                </div>
            </div>
        </main>
    </div>
</body>
<script src="../js/back.js"></script>
<script src="../node_modules/feather-icons/dist/feather.js"></script>
<script src="../node_modules/feather-icons/dist/feather.min.js"></script>
<script>
    feather.replace();
</script>
<script>
    // Lấy các phần tử "Tổng số", "Nam", và "Nữ"
    const totalBtn = document.getElementById("total");
    const maleBtn = document.getElementById("male");
    const femaleBtn = document.getElementById("female");

    // Lấy danh sách học sinh
    const allStudents = document.querySelectorAll(".detail__student");

    // Hàm hiển thị tất cả học sinh
    function showAllStudents() {
        allStudents.forEach(student => {
            student.style.display = "flex";
        });
    }

    // Hàm hiển thị học sinh nam
    function showMaleStudents() {
        allStudents.forEach(student => {
            if (student.classList.contains("boy")) {
                student.style.display = "flex";
            } else {
                student.style.display = "none";
            }
        });
    }

    // Hàm hiển thị học sinh nữ
    function showFemaleStudents() {
        allStudents.forEach(student => {
            if (student.classList.contains("girl")) {
                student.style.display = "flex";
            } else {
                student.style.display = "none";
            }
        });
    }

    // Gán sự kiện click cho các phần tử
    totalBtn.addEventListener("click", showAllStudents);
    maleBtn.addEventListener("click", showMaleStudents);
    femaleBtn.addEventListener("click", showFemaleStudents);

    document.getElementById('total').addEventListener('click', function () {
    // Thêm lớp 'active' cho tab "Sự kiện đang diễn ra" 
    document.getElementById('total').classList.add('active');
    document.getElementById('male').classList.remove('active');
    document.getElementById('female').classList.remove('active');
});

document.getElementById('male').addEventListener('click', function () {
    // Thêm lớp 'active' cho tab "Sự kiện đang diễn ra" 
    document.getElementById('total').classList.remove('active');
    document.getElementById('male').classList.add('active');
    document.getElementById('female').classList.remove('active');
});
document.getElementById('female').addEventListener('click', function () {
    // Thêm lớp 'active' cho tab "Sự kiện đang diễn ra" 
    document.getElementById('total').classList.remove('active');
    document.getElementById('male').classList.remove('active');
    document.getElementById('female').classList.add('active');
});
</script>

</html>