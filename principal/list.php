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
    <link rel="stylesheet" href="css/list.css">
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
        <div class="class-info">
            <p><strong>Lớp 9A1</strong><br>GVCN: Nguyễn Thị Ánh Xuân<br>Sĩ số: 40</p>
        </div>

        <div class="tabs">
            <div class="total tab_total active" id="total">
                <p>Tổng số: 40</p>
            </div>

            <div class="paid tab_paid" id="paid">
                <p>Đã đóng: 38</p>
            </div>

            <div class="unpaid tab_unpaid" id="unpaid">
                <p>Chưa đóng: 2</p>
            </div>
        </div>


        <div class="student-list">
            <div class="student-item paid">
                <img src="../img/gv.jpg" alt="Đào Ngọc Hoa">
                <div class="info">
                    <p class="name data_hovatenhocsinh">Đào Ngọc Hoa</p>
                    <p class="status data_trangthai">Đã đóng học phí</p>
                </div>
                <div class="icons">
                    <a href="../call/index.php">
                        <button class="call"><i data-feather="phone" style="color: #5B6998"></i></button>
                    </a>
                    <a href="../chat/chathocsinh.php">
                        <button class="message"><i data-feather="message-square" style="color: #5B6998"></i></button>
                    </a>
                </div>
            </div>

            <div class="student-item unpaid">
                <img src="../img/gv.jpg" alt="Nguyễn Ngọc Ánh">
                <div class="info">
                    <p class="name data_hovatenhocsinh">Nguyễn Ngọc Ánh</p>
                    <p class="status data_trangthai">Chưa đóng học phí</p>
                    <p class="note data_ghichu">Ghi chú: Khó khăn</p>
                </div>
                <div class="icons">
                    <a href="../call/index.php">
                        <button class="call"><i data-feather="phone" style="color: #5B6998"></i></button>
                    </a>
                    <button class="message"><i data-feather="message-square" style="color: #5B6998"></i></button>
                </div>
            </div>

            <div class="student-item paid">
                <img src="../img/gv.jpg" alt="Hoa Thanh Sơn">
                <div class="info">
                    <p class="name data_hovatenhocsinh">Hoa Thanh Sơn</p>
                    <p class="status data_trangthai">Đã đóng học phí</p>
                </div>
                <div class="icons">
                    <button class="call"><i data-feather="phone" style="color: #5B6998"></i></button>
                    <button class="message"><i data-feather="message-square" style="color: #5B6998"></i></button>
                </div>
            </div>

            <!-- Add more student-item divs similarly -->
            <div class="student-item unpaid">
                <img src="../img/gv.jpg" alt="Nguyễn Ngọc Ánh">
                <div class="info">
                    <p class="name data_hovatenhocsinh">Nguyễn Ngọc Ánh</p>
                    <p class="status data_trangthai">Chưa đóng học phí</p>
                    <p class="note data_ghichu">Ghi chú: Khó khăn</p>
                </div>
                <div class="icons">
                    <a href="../call/index.php">
                        <button class="call"><i data-feather="phone" style="color: #5B6998"></i></button>
                    </a>
                    <button class="message"><i data-feather="message-square" style="color: #5B6998"></i></button>
                </div>
            </div>
        </div>

        <div id="studentModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <div class="modal-header">
                    <p class="data_hovatenhocsinh">Nguyễn Ngọc Ánh</p>
                    <p class="data_mahocsinh">HS20015847</p>
                </div>
                <div class="contact-info">
                    <!-- Teacher Section -->
                    <h5>Giáo viên chủ nhiệm</h5>
                    <div class="section teacher">
                        <div class="contact-details">
                            <img src="../img/gvn1.jpg" alt="Teacher">
                            <div class="info">
                                <p class="data_hovatengiaovien">Nguyễn Thị Ánh Xuân</p>
                                <small class="data_magiaovien">GV24861875</small>
                            </div>
                        </div>
                        <div class="icons">
                            <button class="call"><i class="fa-solid fa-phone"></i></button>
                            <button class="message"><i class="fa-solid fa-message"></i></button>
                        </div>
                    </div>
                    <!-- Parent Section -->
                    <h5>Phụ huynh học sinh</h5>
                    <div class="section parent">
                        <div class="contact-details">
                            <img src="../img/ph2.jpg" alt="Parent">
                            <div class="info">
                                <p class="data_hovatenphuhuynh">Nguyễn Ngọc Hoa</p>
                                <small class="data_maphuhuynh">PH20015847</small>
                            </div>
                        </div>
                        <div class="icons">
                            <button class="call"><i class="fa-solid fa-phone"></i></button>
                            <button class="message"><i class="fa-solid fa-message"></i></button>
                        </div>
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
    // Get the modal element
    var modal = document.getElementById("studentModal");

    // Get the close button element
    var closeButton = document.getElementsByClassName("close")[0];

    // Get all student items
    var studentItems = document.querySelectorAll(".student-item");

    // Add click event listener to each student item to open the modal
    studentItems.forEach(function (item) {
        item.addEventListener("click", function () {
            // Get the relevant student information from the clicked item
            var studentName = this.querySelector(".name").innerText;
            var studentStatus = this.querySelector(".status").innerText;

            // Update modal content with student information
            var modalHeader = modal.querySelector(".modal-header p:first-child");
            var modalSubHeader = modal.querySelector(".modal-header p:last-child");

            modalHeader.innerText = studentName;
            modalSubHeader.innerText = studentStatus; // Adjust this for student ID if needed

            // Show the modal
            modal.style.display = "block";
        });
    });

    // Close modal when the close button is clicked
    closeButton.onclick = function () {
        modal.style.display = "none";
    }

    // Prevent closing modal when clicking outside the modal content
    modal.addEventListener("click", function (event) {
        // Prevent the modal from closing if the click is inside the modal content
        if (event.target === modal) {
            event.stopPropagation();
        }
    });

    // Add functionality to call and message buttons
    document.querySelectorAll('.call').forEach(function (button) {
        button.addEventListener('click', function () {
            // Simulate a phone call by opening the dialer (replace with real phone number)
            alert("Calling the teacher or parent...");
            // You can use `window.location.href = "tel:+84912345678";` for mobile functionality
        });
    });

    document.querySelectorAll('.message').forEach(function (button) {
        button.addEventListener('click', function () {
            // Simulate sending a message (replace with real message app functionality)
            alert("Sending a message...");
            // You can use `window.location.href = "sms:+84912345678";` for mobile functionality
        });
    });

    // LỌC DANH SÁCH HỌC SINH ĐÓNG HỌC PHÍ
    // Lấy các phần tử "Đã đóng", 'chưa đóng'
    const totalBtn = document.getElementById("total");
    const maleBtn = document.getElementById("paid");
    const femaleBtn = document.getElementById("unpaid");

    // Lấy danh sách học sinh
    const allStudents = document.querySelectorAll(".student-item");

    // Hàm hiển thị tất cả học sinh
    function showAllStudents() {
        allStudents.forEach(student => {
            student.style.display = "flex";
        });
    }

    // Hàm hiển thị học sinh nam
    function showMaleStudents() {
        allStudents.forEach(student => {
            if (student.classList.contains("paid")) {
                student.style.display = "flex";
            } else {
                student.style.display = "none";
            }
        });
    }

    // Hàm hiển thị học sinh nữ
    function showFemaleStudents() {
        allStudents.forEach(student => {
            if (student.classList.contains("unpaid")) {
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
        document.getElementById('paid').classList.remove('active');
        document.getElementById('unpaid').classList.remove('active');
    });

    document.getElementById('paid').addEventListener('click', function () {
        // Thêm lớp 'active' cho tab "Sự kiện đang diễn ra" 
        document.getElementById('total').classList.remove('active');
        document.getElementById('paid').classList.add('active');
        document.getElementById('unpaid').classList.remove('active');
    });
    document.getElementById('unpaid').addEventListener('click', function () {
        // Thêm lớp 'active' cho tab "Sự kiện đang diễn ra" 
        document.getElementById('total').classList.remove('active');
        document.getElementById('paid').classList.remove('active');
        document.getElementById('unpaid').classList.add('active');
    });
</script>

</html>