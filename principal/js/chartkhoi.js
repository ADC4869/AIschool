const ctx = document.getElementById('myChart').getContext('2d');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Khối 1', 'Khối 2', 'Khối 3', 'Khối 4', 'Khối 5'],
        datasets: [
            {
                label: 'Đúng giờ',
                data: [350, 360, 340, 320, 355],
                backgroundColor: '#029766',
                stack: 'Stack 0'
            },
            {
                label: 'Trễ',
                data: [5, 0, 20, 10, 3],
                backgroundColor: '#F8800F',
                stack: 'Stack 1'
            },
            {
                label: 'Vắng',
                data: [5, 0, 10, 10, 2],
                backgroundColor: '#EC5011',
                stack: 'Stack 2'
            }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            x: {
                stacked: true,
            },
            y: {
                stacked: true,
                beginAtZero: true
            }
        },
        plugins: {
            legend: {
                display: true,
                position: 'bottom',
            },
            tooltip: {
                enabled: true,
            }
        }
    }
});