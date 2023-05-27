<!DOCTYPE html>
<html lang="en-US">

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Work', 8],
      ['Eat', 2],
      ['Online learning', 4],
      ['Gym', 2],
      ['Sleep', 8]
    ]);

      // Optional; add a title and set the width and height of the chart
      var options = {'title':'My Activities', 'width':550, 'height':400};

      // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
    </script>
</head>
    
<body>
    <h1>Google Charts: Pie Chart</h1>

    <h2>Activities During Movement Control Order</h2>

    <div id="piechart"></div>
</body>
</html>