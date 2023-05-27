<!DOCTYPE html>
<html>
<head>
    <title>Chart.js: Mixed Chart</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    
</head>
<body>
    
<h1>Chart.js: Mixed Chart</h1>

<div class="chart-container" style="position: relative; height:40vh; width:50vw">
    <canvas id="mixed-chart"></canvas>
</div>

<script>
new Chart(document.getElementById("mixed-chart"), {
    type: 'bar',
    data: {
      labels: ["1900", "1950", "1999", "2050"],
      datasets: [{
          label: "Europe",
          type: "line",
          borderColor: "#8e5ea2",
          data: [408,547,675,734],
          fill: false
        }, {
          label: "Africa",
          type: "line",
          borderColor: "#3e95cd",
          data: [133,221,783,2478],
          fill: false
        }, {
          label: "Europe",
          type: "bar",
          backgroundColor: "rgba(0,0,0,0.2)",
          data: [408,547,675,734],
        }, {
          label: "Africa",
          type: "bar",
          backgroundColor: "rgba(0,0,0,0.2)",
          backgroundColorHover: "#3e95cd",
          data: [133,221,783,2478]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Population growth (millions): Europe & Africa'
      },
      legend: { display: false }
    }
});
</script>
</body>
</html>
