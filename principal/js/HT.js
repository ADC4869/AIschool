let openIndex = null;

const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Khối 1', 'Khối 2', 'Khối 3', 'Khối 4', 'Khối 5'],
        datasets: [
            {
                label: 'Giỏi',
                data: [80, 200, 20, 150, 60],
                backgroundColor: '#007bff'
            },
            {
                label: 'Khá',
                data: [138, 125, 257, 167, 300],
                backgroundColor: '#28a745'
            },
            {
                label: 'Trung bình',
                data: [10, 9, 8, 7, 5],
                backgroundColor: '#ffc107'
            },
            {
                label: 'Yếu',
                data: [0, 1, 2, 2, 1],
                backgroundColor: '#dc3545'
            }
        ]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                max: 300
            }
        },
        plugins: {
            legend: {
                position: 'bottom'
            }
        },
        onClick: (e) => {
            const activePoints = myChart.getElementsAtEventForMode(e, 'nearest', { intersect: true }, true);

            if (activePoints.length) {
                const index = activePoints[0].index;

                if (openIndex === index) {
                    // Đóng nếu đang mở
                    document.querySelectorAll('#detailContent > div').forEach(div => {
                        div.style.display = 'none';
                    });
                    document.getElementById('detailContent').style.display = 'none';
                    openIndex = null;
                } else {
                    // Ẩn tất cả nội dung trước
                    document.querySelectorAll('#detailContent > div').forEach(div => {
                        div.style.display = 'none';
                    });

                    // Hiển thị nội dung tương ứng với từng khối
                    document.getElementById('detailContent').style.display = 'block';
                    if (index === 0) {
                        document.getElementById('content-1').style.display = 'block';
                    } else if (index === 1) {
                        document.getElementById('content-2').style.display = 'block';
                    } else if (index === 2) {
                        document.getElementById('content-3').style.display = 'block';
                    } else if (index === 3) {
                        document.getElementById('content-4').style.display = 'block';
                    } else if (index === 4) {
                        document.getElementById('content-5').style.display = 'block';
                    }
                    openIndex = index;
                }
            }
        }
    }
});