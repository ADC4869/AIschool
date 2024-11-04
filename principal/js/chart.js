const ctx = document.getElementById('myChart').getContext('2d');
        const data = {
            type: 'doughnut',
            labels: ['Nữ', 'Nam'],
            datasets: [{
                data: [800, 1000],
                backgroundColor: ['#5a678e', '#cce7f0'],
                borderColor: ['#ffffff'],
                borderWidth: 2,
                cutout: '80%',
            }]
        };

        const options = {
            responsive: true,
            plugins: {
                legend: {
                    display: false,
                },
                tooltip: {
                    enabled: false,
                },
                annotation: {
                    annotations: {
                        centerText: {
                            type: 'label',
                            content: '1800',
                            color: '#333',
                            font: {
                                size: 24,
                                weight: 'bold'
                            },
                            position: 'center'
                        }
                    }
                }
            }
        };
        

        new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options
        });