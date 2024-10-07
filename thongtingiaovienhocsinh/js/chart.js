// Biểu đồ 1 - Biểu đồ kết quả học tập
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

// Biểu đồ 2: Tình trạng chuyên cần
// Biểu đồ chuyên cần theo ngày
const dailyCtx = document.getElementById('dailyChart').getContext('2d');
const dailyData = {
    labels: ['Hiện diện', 'Trễ', 'Vắng'],
    datasets: [{
        label: 'Tổng số học sinh',
        data: [36, 2, 2],
        backgroundColor: ['#ADD8E6', '#FFF48F', '#F08080'],
        borderWidth: 1
    }]
};
const dailyConfig = {
    type: 'bar',
    data: dailyData,
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                max: 40
            }
        },
        plugins: {
            legend: {
                display: true,
                position: 'right',
            }
        }
    }
};
const dailyChart = new Chart(dailyCtx, dailyConfig);

// Biểu đồ chuyên cần theo tuần
const weeklyCtx = document.getElementById('weeklyChart').getContext('2d');
const weeklyData = {
    labels: ['8/9', '9/9', '10/9', '11/9', '12/9', '13/9', '14/9'],
    datasets: [{
        label: 'Hiện diện',
        data: [30, 35, 36, 40, 37, 35, 35],
        backgroundColor: '#ADD8E6',
        stack: 'Stack 0'
    }, {
        label: 'Trễ',
        data: [7, 5, 2, 3, 2, 3, 4],
        backgroundColor: '#FFF48F',
        stack: 'Stack 0'
    }, {
        label: 'Vắng',
        data: [3, 2, 2, 1, 1, 1, 1],
        backgroundColor: '#F08080',
        stack: 'Stack 0'
    }]
};
const weeklyConfig = {
    type: 'bar',
    data: weeklyData,
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
                max: 40
            }
        },
        plugins: {
            legend: {
                display: true,
                position: 'right',
            }
        }
    }
};
const weeklyChart = new Chart(weeklyCtx, weeklyConfig);

// Lấy ngày hiện tại dưới dạng 'yyyy-mm-dd'
function getCurrentDate() {
    const today = new Date();
    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, '0');
    const day = String(today.getDate()).padStart(2, '0');
    return `${year}-${month}-${day}`;
}

// Lấy ngày bắt đầu tuần hiện tại (thứ Hai)
function getCurrentWeekStartDate() {
    const today = new Date();
    const dayOfWeek = today.getDay(); // 0 (Sunday) to 6 (Saturday)
    const differenceToMonday = dayOfWeek === 0 ? 6 : dayOfWeek - 1; // Calculate days to Monday
    const mondayDate = new Date(today.setDate(today.getDate() - differenceToMonday));
    const year = mondayDate.getFullYear();
    const month = String(mondayDate.getMonth() + 1).padStart(2, '0');
    const day = String(mondayDate.getDate()).padStart(2, '0');
    return `${year}-${month}-${day}`;
}

// Gán ngày hiện tại cho input theo ngày
document.getElementById('dailyDate').value = getCurrentDate();

// Gán ngày đầu tuần cho input theo tuần
document.getElementById('weeklyDate').value = getCurrentWeekStartDate();