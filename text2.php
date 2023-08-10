<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Bar Chart with MDB and Chart.js</title>
    <!-- Link to Bootstrap CSS (MDB includes Bootstrap) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css">
</head>

<body>
<div class="container mt-5">
    <canvas id="barChart"></canvas>
</div>

<!-- Link to Chart.js library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>

<script>
    // JavaScript code for the Bar Chart with custom options
    document.addEventListener("DOMContentLoaded", function () {
        const data = {
            labels: ['Label 1', 'Label 2', 'Label 3', 'Label 4', 'Label 5'],
            datasets: [{
                label: 'Sample Data',
                data: [10, 20, 15, 30, 25],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                ],
                borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                ],
                borderWidth: 1
            }]
        };

        const options = {
            responsive: true,
            maintainAspectRatio: false, // Custom option: Prevent the chart from maintaining aspect ratio
            scales: {
                x: {
                    grid: {
                        display: false // Custom option: Hide the x-axis grid lines
                    },
                    ticks: {
                        color: 'blue' // Custom option: Change the color of the x-axis labels
                    }
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        stepSize: 5, // Custom option: Set the step size for y-axis ticks
                        font: {
                            size: 14 // Custom option: Set the font size for y-axis labels
                        }
                    }
                }
            },
            plugins: {
                title: {
                    display: true,
                    text: 'Custom Bar Chart', // Custom option: Set the chart title
                    font: {
                        size: 24 // Custom option: Set the font size for the chart title
                    }
                },
                legend: {
                    labels: {
                        color: 'red' // Custom option: Change the color of the legend labels
                    }
                }
            }
        };

        const ctx = document.getElementById('barChart').getContext('2d');
        const barChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });
    });
</script>
</body>

</html>
