// Biểu đồ 1 - Biểu đồ chuyên cần
const attendanceCtx = document.getElementById('attendanceChart').getContext('2d');
const attendanceCanvas = document.getElementById('attendanceChart');
attendanceCanvas.height = 200; // Điều chỉnh chiều cao của biểu đồ
const attendanceChart = new Chart(attendanceCtx, {
    type: 'bar',
    data: {
        labels: ['Ngày 10/09/2024'],
        datasets: [
            {
                label: 'Hiện diện',
                data: [36],
                backgroundColor: 'rgba(173, 216, 230, 1)',
            },
            {
                label: 'Trễ',
                data: [2],
                backgroundColor: 'rgba(255, 255, 102, 1)',
            },
            {
                label: 'Vắng',
                data: [2],
                backgroundColor: 'rgba(255, 99, 132, 1)',
            }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            x: {
                beginAtZero: true
            },
            y: {
                beginAtZero: true,
                ticks: {
                    stepSize: 5
                }
            }
        },
        plugins: {
            legend: {
                display: true,
                position: 'right',
            }
        }
    }
});

// Biểu đồ 2 - Biểu đồ kết quả học tập
const pieCtx = document.getElementById('myPieChart').getContext('2d');
const data = {
    labels: ['Xuất sắc', 'Giỏi', 'Khá', 'Trung bình', 'Yếu'],
    datasets: [{
        data: [2, 30, 6, 2, 0],
        backgroundColor: ['#6A9CFD', '#B0DEFF', '#76C4AA', '#FFF48F', '#E18786'],
        hoverOffset: 4
    }]
};

const config = {
    type: 'pie',
    data: data,
    options: {
        responsive: true,
        plugins: {
            legend: {
                display: false
            }
        }
    }
};
const myPieChart = new Chart(pieCtx, config);