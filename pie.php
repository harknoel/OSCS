<!DOCTYPE html>
<html>
<head>
  <title>Pie Chart Example</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <canvas id="myChart"></canvas>

  <script>
    // Sample Data
    const data = {
      labels: ['United States', 'Germany', 'Brazil', 'Japan'],
      datasets: [{
        data: [40, 20, 15, 25],
        backgroundColor: ['#007bff', '#ff4d4d', '#ffa64d', '#66cc66'],
      }]
    };

    // Chart Configuration
    const config = {
      type: 'pie',
      data: data,
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {
          display: true,
          position: 'bottom',
        }
      },
    };

    // Create Chart
    const myChart = new Chart(document.getElementById('myChart'), config);
  </script>
</body>
</html>
