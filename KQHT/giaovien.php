<!-- Giáo viên -->
<div class="container">
    

    <!-- Modal năm học -->
    <div id="yearDialog" class="dialog">
        <div class="dialog-content">
            <h3>Năm học</h3>
            <ul>
                <li onclick="selectYear('2024-2025')">2024-2025</li>
                <li onclick="selectYear('2023-2024')">2023-2024</li>
                <li onclick="selectYear('2022-2023')">2022-2023</li>
                <li onclick="selectYear('2021-2022')">2021-2022</li>
            </ul>
            <button onclick="closeDialog()" class="cancel-btn">Hủy</button>
        </div>
    </div>

    <!-- Modal học kì -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <h3>Học kì</h3>
            <ul>
                <li class="semester-option">Học kì: I</li>
                <li class="semester-option">Học kì: II</li>
                <li class="semester-option">Cả năm</li>
            </ul>
            <button class="cancelBtn">Hủy</button>
        </div>
    </div>

    <!-- Khối -->
    <div class="grade-buttons">
        <div class="grade-button" onclick="showClasses('grade6')">Khối 6</div>
        <div class="grade-button" onclick="showClasses('grade7')">Khối 7</div>
        <div class="grade-button" onclick="showClasses('grade8')">Khối 8</div>
        <div class="grade-button" onclick="showClasses('grade9')">Khối 9</div>
    </div>

<!-- Hiển thị danh sách lớp -->
<div id="grade6" class="class-list" style="display:none;">
        <div class="class-item">
            <div class="class-info">
                <p class="data_lophoc"><strong>Lớp 6A1</strong></p>
                <p class="data_hovatengiaovien">GVCN: Nguyễn Thị Ánh Xuân</p>
            </div>
            <button class="details-button" onclick="togglePopup(this)">Chọn tác vụ</button>
        </div>

        <div class="class-item">
            <div class="class-info">
                <p class="data_lophoc"><strong>Lớp 6A2</strong></p>
                <p class="data_hovatengiaovien">GVCN: Trần Nguyên Khôi</p>
            </div>
            <button class="details-button" onclick="togglePopup(this)">Chọn tác vụ</button>
        </div>

        <div class="class-item">
            <div class="class-info">
                <p class="data_lophoc"><strong>Lớp 6A3</strong></p>
                <p class="data_hovatengiaovien">GVCN: Chu Văn An</p>
            </div>
            <button class="details-button" onclick="togglePopup(this)">Chọn tác vụ</button>
        </div>
    </div>

    <!-- Lớp cho Khối 7 -->
    <div id="grade7" class="class-list" style="display:none;">
        <div class="class-item">
            <div class="class-info">
                <p class="data_lophoc"><strong>Lớp 7A1</strong></p>
                <p class="data_hovatengiaovien">GVCN: Lê Thị Lan</p>
            </div>
            <button class="details-button" onclick="togglePopup(this)">Chọn tác vụ</button>
        </div>

        <div class="class-item">
            <div class="class-info">
                <p class="data_lophoc"><strong>Lớp 7A2</strong></p>
                <p class="data_hovatengiaovien">GVCN: Nguyễn Văn Nam</p>
            </div>
            <button class="details-button" onclick="togglePopup(this)">Chọn tác vụ</button>
        </div>
    </div>

    <!-- Lớp cho Khối 8 -->
    <div id="grade8" class="class-list" style="display:none;">
        <div class="class-item">
            <div class="class-info">
                <p class="data_lophoc"><strong>Lớp 8A1</strong></p>
                <p class="data_hovatengiaovien">GVCN: Lê Thị Lan</p>
            </div>
            <button class="details-button" onclick="togglePopup(this)">Chọn tác vụ</button>
        </div>

        <div class="class-item">
            <div class="class-info">
                <p class="data_lophoc"><strong>Lớp 8A2</strong></p>
                <p class="data_hovatengiaovien">GVCN: Nguyễn Văn Nam</p>
            </div>
            <button class="details-button" onclick="togglePopup(this)">Chọn tác vụ</button>
        </div>

        <div class="class-item">
            <div class="class-info">
                <p class="data_lophoc"><strong>Lớp 8A3</strong></p>
                <p class="data_hovatengiaovien">GVCN: Chu Văn An</p>
            </div>
            <button class="details-button" onclick="togglePopup(this)">Chọn tác vụ</button>
        </div>
    </div>

    <!-- Lớp cho Khối 9 -->
    <div id="grade9" class="class-list" style="display:none;">
        <div class="class-item">
            <div class="class-info">
                <p class="data_lophoc"><strong>Lớp 9A1</strong></p>
                <p class="data_hovatengiaovien">GVCN: Lê Thị Lan</p>
            </div>
<button class="details-button" onclick="togglePopup(this)">Chọn tác vụ</button>
        </div>

        <div class="class-item">
            <div class="class-info">
                <p class="data_lophoc"><strong>Lớp 9A2</strong></p>
                <p class="data_hovatengiaovien">GVCN: Nguyễn Văn Nam</p>
            </div>
            <button class="details-button" onclick="togglePopup(this)">Chọn tác vụ</button>
        </div>
    </div>

<!-- Popup với nút X để tắt -->
<div id="popup" class="popup" style="display: none;">
    <div class="popup-content">
        <span class="close-btn" onclick="togglePopup()"><i class="fa-solid fa-x"></i></span>
        <a id="viewScoreLink" href="ketqua.php"><p>Xem điểm</p></a>
        <a href="nhapdiem.php"><p>Nhập điểm</p></a>
    </div>
</div>


<script src="./js/tacvu.js"></script>