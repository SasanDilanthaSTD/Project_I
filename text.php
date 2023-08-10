<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polar Chart with MDB and Chart.js</title>
    <!-- Link to Bootstrap CSS (MDB includes Bootstrap) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css">
</head>

<body>
<div class="container mt-5">
    <canvas id="polarChart"></canvas>
</div>

<div class="container mt-5">
    <canvas id="radarChart"></canvas>
</div>

<div class="container mt-5">
    <canvas id="barChart"></canvas>
</div>

<div style="width: 80%; margin: auto;">
    <canvas id="myChart"></canvas>
</div>


<!-- Link to Chart.js library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>

<script>
    // JavaScript code for the Polar Chart
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
            scale: {
                ticks: {
                    beginAtZero: true
                }
            }
        };

        const ctx = document.getElementById('polarChart').getContext('2d');
        const polarChart = new Chart(ctx, {
            type: 'polarArea',
            data: data,
            options: options
        });
    });

    // JavaScript code for the Radar Chart
    document.addEventListener("DOMContentLoaded", function () {
        const data = {
            labels: ['Label 1', 'Label 2', 'Label 3', 'Label 4', 'Label 5'],
            datasets: [{
                label: 'Sample Data',
                data: [10, 20, 15, 30, 25],
                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        };

        const options = {
            responsive: true,
            scale: {
                ticks: {
                    beginAtZero: true
                }
            }
        };

        const ctx = document.getElementById('radarChart').getContext('2d');
        const radarChart = new Chart(ctx, {
            type: 'radar',
            data: data,
            options: options
        });
    });

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

    document.addEventListener("DOMContentLoaded", function () {
        const data = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [
                {
                    label: 'Data Set 1',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    data: [10, 30, 20, 25, 35, 30],
                    tension: 0.3,
                },
                // Add more datasets if needed
                {
                    label: 'Data Set 2',
                    borderColor: 'rgb(75,102,192)',
                    backgroundColor: 'rgba(75,122,192,0.2)',
                    data: [45, 12, 15, 52, 25, 26],
                    tension: 0.3,
                },
            ],
        };




// Create the chart with the prepared data
        const myChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                interaction: {
                    mode: 'index',
                    intersect: false,
                },
                scales: {
                    x: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Month',
                        },
                        grid: {
                            color: 'rgba(255, 0, 0, 0.2)', // Change this color to your desired grid color for the x-axis
                        },
                    },
                    y: {
                        display: true,
                        title: {
                            display: true,
                            text: 'Value',
                        },
                    },
                },
            },
        });

    });
</script>
</body>