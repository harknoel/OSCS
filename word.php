<!DOCTYPE html>
<html>
<head>
  <title>Line Chart: Guest Users by Country over Time</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div style="width: 600px; height: 400px; border: 1px solid #ccc; margin: 20px auto; padding: 10px;">
    <h2 style="text-align: center;">Guest Users by Country over Time</h2>
    <canvas id="lineChart" style="width: 100%; height: 100%;"></canvas>
  </div>

  <script>
    // Sample Data for Line Chart
    const lineData = {
      labels: ['January', 'February', 'March', 'April', 'May', 'June'],
      datasets: [
        {
          label: 'United States',
          data: [50, 75, 80, 60, 70, 90],
          borderColor: 'rgba(75, 192, 192, 1)',
          fill: false
        },
        {
          label: 'United Kingdom',
          data: [60, 55, 70, 80, 65, 75],
          borderColor: 'rgba(255, 99, 132, 1)',
          fill: false
        },
        {
          label: 'Germany',
          data: [70, 80, 60, 70, 85, 65],
          borderColor: 'rgba(54, 162, 235, 1)',
          fill: false
        }
      ]
    };

    // Line Chart Configuration
    const lineConfig = {
      type: 'line',
      data: lineData,
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          title: {
            display: true,
            text: 'Guest Users by Country over Time'
          }
        },
        scales: {
          x: {
            display: true,
            title: {
              display: true,
              text: 'Month'
            }
          },
          y: {
            display: true,
            title: {
              display: true,
              text: 'Number of Guest Users'
            },
            suggestedMin: 0,
            suggestedMax: 100
          }
        }
      }
    };

    // Create Line Chart
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    new Chart(lineCtx, lineConfig);
  </script>
</body>
</html>
