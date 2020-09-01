var ctx = document.getElementById('sellChart');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Tuần 1', 'Tuần 2', 'Tuần 3', 'Tuần 4'],
        datasets: [{
            label: 'Doanh thu (triệu đồng)',
            data: [20, 22, 17, 19, 50],
            pointHoverBackgroundColor: [
                'rgba(0, 184, 148,1.0)',
                'rgba(0, 184, 148,1.0)',
                'rgba(0, 184, 148,1.0)',
                'rgba(0, 184, 148,1.0)',
                'rgba(0, 184, 148,1.0)'
            ],
            backgroundColor: 'rgba(0, 168, 255,.5)',
            borderColor: [
                'rgba(0, 168, 255,1.0)'
            ],
            pointHoverRadius: 10,
            pointHoverBorderColor: 'rgba(255, 195, 18,1.0)',
            pointHoverBorderWidth : 3,
            pointRadius: 4,
            pointBackgroundColor: 'rgba(0, 168, 255,1.0)'

        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});