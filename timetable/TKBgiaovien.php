<!-- Học sinh -->
<div class="container">
    <main>
        <div class="main__title">
            <p>Lịch học, lịch thi</p>
        </div>

        <div class="main__radio">
            <label>
                <input type="radio" name="options" value="all" checked>
                Tất cả
            </label>
            <label>
                <input type="radio" name="options" value="schedule">
                Lịch học
            </label>
            <label>
                <input type="radio" name="options" value="exam">
                Lịch thi
            </label>
        </div>

        <div class="main__schedule">
            <button id="filterButton" class="btn"><i class="fa-solid fa-sort-down"></i></button>
            <div id="filterModal" class="modal">
                <div class="modal-content">
                    <div class="button-close">
                        <span class="close">&times;</span>
                    </div>

                    <p>Lọc thời khóa biểu</p>
                    <div class="modal-body">
                        <div class="filter_group">
                            <label for="">Thứ:</label>
                            <input list="days" id="day" name="day">
                            <datalist id="days">
                                <option value="Thứ 2">
                                <option value="Thứ 3">
                                <option value="Thứ 4">
                                <option value="Thứ 5">
                                <option value="Thứ 6">
                                <option value="Thứ 7">
                            </datalist>
                        </div>
                        <div class="filter_group">
                            <label for="">Lớp học:</label>
                            <input list="classes" id="class" name="class">
                            <datalist id="classes">
                                <option value="6A1">
                                <option value="6A2">
                                <option value="6A3">
                                <option value="7A1">
                                <option value="7A2">
                                <option value="7A3">
                            </datalist>
                        </div>
                        <div class="filter_group">
                            <label for="">Tiết học:</label>
                            <input list="lessons" id="lesson" name="lesson">
                            <datalist id="lessons">
                                <option value="1">
                                <option value="2">
                                <option value="3">
                                <option value="4">
                                <option value="5">
                            </datalist>
                        </div>
                        <div class="filter_group">
                            <label for="">Ca học:</label>
                            <input list="sessions" id="session" name="session">
                            <datalist id="sessions">
                                <option value="Sáng">
                                <option value="Chiều">
                            </datalist>
                        </div>

                        <div class="filter_group">
                            <label for="">Giáo viên:</label>
                            <input list="teachers" id="teacher" name="teacher">
                            <datalist id="teachers">
                                <option value="Minh">
                                <option value="Lam">
                                <option value="Hòa">
                                <option value="Nam">
                                <option value="Đức">
                                <option value="Hùng">
                                <option value="Hạnh">
                                <option value="Thảo">
                            </datalist>
                        </div>

                        <div class="filter_group">
                            <label for="">Môn học:</label>
                            <input list="subjects" id="subject" name="subject">
                            <datalist id="subjects">
                                <option value="Văn">
                                <option value="Toán">
                                <option value="Lí">
                                <option value="Hóa">
                                <option value="Sử">
                                <option value="Địa">
                                <option value="GDCD">
                                <option value="Tiếng Anh">
                            </datalist>
                        </div>
                    </div>
                    <div class="modal-button">
                        <button onclick="applyFilter()">Lọc</button>
                    </div>
                </div>
            </div>
            <table class="schedule">
                <thead>
                    <tr>
                        <th rowspan="2" class="day" style="background-color: rgb(168, 245, 168);">Thứ</th>
                        <th rowspan="2" class="session" style="background-color: rgb(168, 245, 168);">Tiết</th>
                        <th colspan="4" class="class">Lớp 6A1</th>
                        <th colspan="4" class="class">Lớp 6A2</th>
                        <th colspan="4" class="class">Lớp 6A3</th>
                        <th colspan="4" class="class">Lớp 6A4</th>
                    </tr>
                    <tr>
                        <th colspan="2" class="title">Sáng</th>
                        <th colspan="2" class="title">Chiều</th>
                        <th colspan="2" class="title">Sáng</th>
                        <th colspan="2" class="title">Chiều</th>
                        <th colspan="2" class="title">Sáng</th>
                        <th colspan="2" class="title">Chiều</th>
                        <th colspan="2" class="title">Sáng</th>
                        <th colspan="2" class="title">Chiều</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="5" class="day">2</td>
                        <td class="session">1</td>
                        <td>Chào cờ</td>
                        <td class="teacher-cell" data-name="Thanh">Thanh</td>
                        <td>Toán</td>
                        <td class="teacher-cell" data-name="Thanh">Thanh</td>
                        <td>Chào cờ</td>
                        <td class="teacher-cell" data-name="Hùng">Hùng</td>
                        <td>Ngữ Văn</td>
                        <td class="teacher-cell" data-name="Hùng">Hùng</td>
                        <td>Chào cờ</td>
                        <td class="teacher-cell" data-name="Diễm">Diễm</td>
                        <td>Lịch sử</td>
                        <td class="teacher-cell" data-name="Diễm">Diễm</td>
                        <td>Chào cờ</td>
                        <td class="teacher-cell" data-name="Mai">Mai</td>
                        <td>Địa lí</td>
                        <td class="teacher-cell" data-name="Mai">Mai</td>
                    </tr>
                    <tr>
                        <td class="session">2</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">3</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">4</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td></td>
                        <td></td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">5</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td></td>
                        <td></td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td></td>
                        <td></td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td></td>
                        <td></td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td></td>
                        <td></td>
                    </tr>

                    <!-- thứ 3 -->
                    <tr>
                        <td rowspan="5" class="day">3</td>
                        <td class="session">1</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">2</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">3</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">4</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td></td>
                        <td></td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">5</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td></td>
                        <td></td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td></td>
                        <td></td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td></td>
                        <td></td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <!-- Thứ 4 -->
                    <tr>
                        <td rowspan="5" class="day">4</td>
                        <td class="session">1</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">2</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">3</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">4</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td></td>
                        <td></td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">5</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td></td>
                        <td></td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td></td>
                        <td></td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td></td>
                        <td></td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td></td>
                        <td></td>
                    </tr>

                    <!-- thứ 5 -->
                    <tr>
                        <td rowspan="5" class="day">5</td>
                        <td class="session">1</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">2</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">3</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">4</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td></td>
                        <td></td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">5</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td></td>
                        <td></td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td></td>
                        <td></td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td></td>
                        <td></td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td></td>
                        <td></td>
                    </tr>

                    <!-- thứ 6 -->
                    <tr>
                        <td rowspan="5" class="day">6</td>
                        <td class="session">1</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">2</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">3</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">4</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td></td>
                        <td></td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">5</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td></td>
                        <td></td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td></td>
                        <td></td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td></td>
                        <td></td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td></td>
                        <td></td>
                    </tr>

                    <!-- thứ 7 -->
                    <tr>
                        <td rowspan="5" class="day">7</td>
                        <td class="session">1</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">2</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">3</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">4</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td>Toán</td>
                        <td>Thanh</td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td>Ngữ Văn</td>
                        <td>Hùng</td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td>Lịch sử</td>
                        <td>Diễm</td>
                        <td></td>
                        <td></td>
                        <td>Địa lí</td>
                        <td>Mai</td>
                    </tr>
                    <tr>
                        <td class="session">5</td>
                        <td>Lịch sử</td>
                        <td>Nhật</td>
                        <td></td>
                        <td></td>
                        <td>Tiếng Anh</td>
                        <td>Nhung</td>
                        <td></td>
                        <td></td>
                        <td>Tin học</td>
                        <td>Nam</td>
                        <td></td>
                        <td></td>
                        <td>Vật lí</td>
                        <td>Yến</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- Hộp thoại thông tin giáo viên -->
        <div id="teacherModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <div class="modal-content">
                <img id="teacherImage" src="" alt="Ảnh giáo viên">
                <h3 id="teacherName"></h3>
                <div class="modal-content-infor">
                    <p id="teacherAge"></p>
                    <p id="teacherAddress"></p>
                    <p id="teacherSubject"></p>
                    <p id="teacherAchievement"></p>
                </div>

            </div>
            <div class="modal-footer">
                <a href="../call/index.php">
                    <i data-feather="phone" style="color: #5B6998; width: 40px; height: 40px"></i>
                </a>
                <a href="../chat/chatgiaovien.php">
                    <i data-feather="message-square" style="color: #5B6998; width: 40px; height: 40px"></i>
                </a>
            </div>
        </div>
    </main>
</div>

<script>
    // Lấy các phần tử modal và button
    const modal = document.getElementById("filterModal");
    const btn = document.getElementById("filterButton");
    const closeBtn = document.querySelector(".close");

    // Hiển thị modal khi nhấn nút lọc
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // Đóng modal khi nhấn vào nút close (x)
    closeBtn.onclick = function () {
        modal.style.display = "none";
    }

    // Đóng modal khi nhấn ngoài modal
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<script>
    const teacherData = {
        "Thanh": {
            image: "../img/ph1.jpg",
            name: "Thanh",
            age: "35",
            address: "123 Nguyễn Huệ, Hà Nội",
            subject: "Toán",
            achievement: "Đạt giải giáo viên xuất sắc 2023"
        },
        "Hùng": {
            image: "../img/ph1.jpg",
            name: "Hùng",
            age: "40",
            address: "456 Trần Hưng Đạo, TP HCM",
            subject: "Ngữ Văn",
            achievement: "Đạt giải giáo viên giỏi cấp quốc gia"
        },
        "Diễm": {
            image: "../img/ph2.jpg",
            name: "Diễm",
            age: "30",
            address: "789 Lê Lợi, Đà Nẵng",
            subject: "Lịch sử",
            achievement: "Thành viên hội đồng giáo dục lịch sử"
        },
        "Mai": {
            image: "../img/ph2.jpg",
            name: "Mai",
            age: "29",
            address: "321 Hai Bà Trưng, Cần Thơ",
            subject: "Địa lí",
            achievement: "Giải nhất cuộc thi Địa lí năm 2022"
        }
    };

    document.querySelectorAll('.teacher-cell').forEach(cell => {
        cell.addEventListener('click', () => {
            const teacherName = cell.getAttribute('data-name');
            showTeacherInfo(teacherName);
        });
    });

    function showTeacherInfo(teacherName) {
        const teacher = teacherData[teacherName];
        if (teacher) {
            document.getElementById("teacherImage").src = teacher.image;
            document.getElementById("teacherName").innerText = "Tên: " + teacher.name;
            document.getElementById("teacherAge").innerText = "Tuổi: " + teacher.age;
            document.getElementById("teacherAddress").innerText = "Địa chỉ: " + teacher.address;
            document.getElementById("teacherSubject").innerText = "Môn dạy: " + teacher.subject;
            document.getElementById("teacherAchievement").innerText = "Thành tích: " + teacher.achievement;
            document.getElementById("teacherModal").style.display = "block";
        }
    }

    function closeModal() {
        document.getElementById("teacherModal").style.display = "none";
    }
</script>