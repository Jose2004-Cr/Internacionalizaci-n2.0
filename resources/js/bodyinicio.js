
const data = {
    2023: {
        barDataOut: [[20, 40, 60, 30, 50, 70, 40, 50, 70, 30, 50, 60], [10, 30, 20, 40, 30, 20, 50, 40, 50, 40, 30, 10]],
        lineDataIn: [[30, 60, 90, 70, 60, 80, 90, 70, 80, 60, 50, 30], [20, 40, 30, 60, 50, 40, 60, 50, 60, 40, 30, 20]],
        pieData: [30, 20, 15, 10]
    },
    2024: {
        barDataOut: [[30, 70, 80, 50, 90, 60, 100, 40, 60, 120, 90, 40], [20, 50, 40, 60, 70, 30, 110, 60, 80, 100, 50, 20]],
        lineDataIn: [[10, 40, 70, 90, 120, 100, 60, 80, 90, 40, 50, 30], [30, 60, 50, 80, 70, 40, 90, 70, 60, 50, 40, 20]],
        pieData: [52, 15, 8, 5]
    }
};

let barChartOut, lineChartIn, pieChart;

function initCharts() {
    // Config for the bar chart (Outgoing)
    const barConfigOut = {
        type: 'bar',
        data: {
            labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            datasets: [
                {
                    label: 'Saliente Presencial',
                    backgroundColor: 'rgb(255, 99, 132)',
                    data: data[2024].barDataOut[0]
                },
                {
                    label: 'Saliente Virtual',
                    backgroundColor: 'rgb(75, 192, 192)',
                    data: data[2024].barDataOut[1]
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    // Config for the line chart (Incoming)
    const lineConfigIn = {
        type: 'line',
        data: {
            labels: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
            datasets: [
                {
                    label: 'Entrante Presencial',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: data[2024].lineDataIn[0],
                    fill: true
                },
                {
                    label: 'Entrante Virtual',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgb(75, 192, 192)',
                    data: data[2024].lineDataIn[1],
                    fill: true
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };

    // Config for the pie chart
    const pieConfig = {
        type: 'pie',
        data: {
            labels: ['Entrante virtual', 'Entrante presencial', 'Saliente virtual', 'Saliente presencial'],
            datasets: [{
                data: data[2024].pieData,
                backgroundColor: [
                    'rgb(255, 99, 132)',
                    'rgb(54, 162, 235)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)'
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Total de movilidades'
                }
            }
        }
    };

    // Render the charts
    const ctxBarOut = document.getElementById('barChartOut').getContext('2d');
    barChartOut = new Chart(ctxBarOut, barConfigOut);

    const ctxLineIn = document.getElementById('lineChartIn').getContext('2d');
    lineChartIn = new Chart(ctxLineIn, lineConfigIn);

    const ctxPie = document.getElementById('pieChart').getContext('2d');
    pieChart = new Chart(ctxPie, pieConfig);
}

function updateCharts(year) {
    barChartOut.data.datasets[0].data = data[year].barDataOut[0];
    barChartOut.data.datasets[1].data = data[year].barDataOut[1];
    barChartOut.update();

    lineChartIn.data.datasets[0].data = data[year].lineDataIn[0];
    lineChartIn.data.datasets[1].data = data[year].lineDataIn[1];
    lineChartIn.update();

    pieChart.data.datasets[0].data = data[year].pieData;
    pieChart.update();
}

window.onload = initCharts;
