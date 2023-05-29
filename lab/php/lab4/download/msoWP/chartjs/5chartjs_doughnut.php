<!DOCTYPE html>
<html>
<head>
    <title>Chart.js: Doughnut Chart</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    
</head>
<body>
    
<h1>Chart.js: Doughnut Chart</h1>

<div class="chart-container" style="position: relative; height:30vh; width:40vw">
    <canvas id="doughnut-chart"></canvas>
</div>

<script>
new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
    data: {
      labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [2478,5267,734,784,433]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
</script>
</body>
</html>
