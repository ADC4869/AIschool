    // Xử lý sự kiện khi người dùng nhấn nút "Nhập điểm"
    document.querySelectorAll('.enter-grade-button').forEach(button => {
        button.addEventListener('click', function() {
            const td = this.parentElement;
            const input = td.querySelector('.grade-input');
    
            // Hiển thị input và ẩn nút "Nhập điểm"
            input.style.display = 'inline';
            this.style.display = 'none';
        });
    });
    
    // Xử lý sự kiện khi người dùng nhập điểm
    document.querySelectorAll('.grade-input').forEach(input => {
        input.addEventListener('change', function() {
            const td = this.parentElement;
            const gradesWrapper = td.querySelector('.grades-wrapper');
            const editButton = td.querySelector('.edit-button');
    
            // Lấy giá trị từ input
            const score = parseFloat(this.value);
            
            if (isNaN(score) || score < 0 || score > 10) {
                alert('Vui lòng nhập điểm từ 0 đến 10');
                return;
            }
    
            // Tạo hình tròn chứa điểm nếu số điểm hợp lệ
            const gradeCircle = document.createElement('div');
            gradeCircle.classList.add('grade-circle');
            gradeCircle.textContent = score;
    
            // Áp dụng màu cho điểm
            if (score >= 9 && score <= 10) {
                gradeCircle.classList.add('grade-green');
            } else if (score >= 6 && score < 9) {
                gradeCircle.classList.add('grade-yellow');
            } else if (score >= 3 && score < 6) {
                gradeCircle.classList.add('grade-orange');
            } else if (score >= 0 && score < 3) {
                gradeCircle.classList.add('grade-red');
            }
    
            // Chỉ cho phép nhập tối đa 3 điểm
            if (gradesWrapper.children.length < 3) {
                gradesWrapper.appendChild(gradeCircle);
            } else {
                alert("Bạn chỉ có thể nhập tối đa 3 điểm!");
                return;
            }
    
             // Điều chỉnh căn giữa hoặc sắp xếp các điểm
             if (gradesWrapper.children.length === 1) {
                gradesWrapper.style.justifyContent = 'center'; // Nếu có 1 điểm, căn giữa
            } else {
                gradesWrapper.style.justifyContent = 'flex-start'; // Nếu có từ 2 điểm trở lên, sắp xếp từ trái sang phải
            }
    
            // Nếu đã đủ 3 điểm, ẩn input và hiển thị nút "Chỉnh sửa"
            if (gradesWrapper.children.length === 3) {
                this.style.display = 'none';  // Ẩn input
            }
    
            // Reset input sau khi nhập
            this.value = '';
        });
    });