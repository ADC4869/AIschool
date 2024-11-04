var ctx = document.getElementById('myDoughnutChart').getContext('2d');
var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Nữ', 'Nam'],
        datasets: [{
            data: [58, 67],
            backgroundColor: ['#b7e0eb', '#4f5d95'],
            hoverBackgroundColor: ['#9acfdc', '#3f4c75']
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false, // Cho phép tùy chỉnh chiều dài và chiều rộng
        cutout: '70%',
        plugins: {
            legend: {
                display: false
            }
        }
    }
});