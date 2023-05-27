<?php
$connect = mysqli_connect("localhost","root","","demo1");
$query = "SELECT count(Name) as People, Country FROM `tbl_people_country` GROUP by Country";
$result = mysqli_query($connect , $query);

$resultCount=$result->num_rows;

$color = ['#dc7877','#9cbb73','#9ee2d9','#9f9ee2','#e29eba'];
$country = array();
$people = array();
foreach ($result as $peopleData) {
    $country[] = $peopleData['Country'];
    $people[] = $peopleData['People'];
}
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
      
    google.charts.setOnLoadCallback(drawPieChart);
      
    function drawPieChart() {

      var data = new google.visualization.arrayToDataTable([
        ["Country","People"],
        <?php
        for($i=0;$i<$resultCount;$i++){
          ?>[<?php echo "'".$country[$i]."', ".$people[$i] ?>],
        <?php } 
        ?>
        ]);

      var options = {
          title: "Percentage of Population",
          width: '100%',
          height: '200px',
          colors: [
            <?php
            for($i=0;$i<$resultCount;$i++) {
              echo "'".$color[$i]."',";
            } 
            ?>
          ]
        };
      var chart = new google.visualization.PieChart(document.getElementById('pie-chart'));
      chart.draw(data, options);
    }


    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawBarBasic);

    function drawBarBasic() {

      var data = new google.visualization.arrayToDataTable([
         ['Country', 'Population', { role: 'style' }, { role: 'annotation' }],
        <?php
        for($i=0;$i<$resultCount;$i++){
          ?>[<?php echo "'".$country[$i]."', ".$people[$i].", '".$color[$i]."' , "."'".$people[$i]."'" ?>],
        <?php } 
        ?>
        ]);

      var options = {
    	    title: "Number of People per Country",
        chartArea: {width: '100%'},
        hAxis: {
          title: 'Total Population',
          minValue: 0
        },
        vAxis: {
          title: 'City'
        },
        legend: { position: "none" }
      };

      var chart = new google.visualization.BarChart(document.getElementById('bar-chart'));

      chart.draw(data, options);
    }


  google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawColumnChart);
    function drawColumnChart() {
      var data = google.visualization.arrayToDataTable([
        ['Country', 'Population', { role: 'style' }, { role: 'annotation' }],
        <?php
        for($i=0;$i<$resultCount;$i++){
          ?>[<?php echo "'".$country[$i]."', ".$people[$i].", '".$color[$i]."' , "."'".$people[$i]."'" ?>],
        <?php } 
        ?>
        ]);


      var options = {
        title: "Number of People per Country",
        chartArea: {width: '100%'},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("column-chart"));
      chart.draw(data, options);
  }
  </script>
  
  <style>
    body{
        max-width: 550px;
    }
    #chart_container{
        position: relative;
        padding-bottom: 684px;
        height: 0 ;
    }
    
    .chart-div{
        margin-bottom: 20px;
    }
</style>

  </head>
  
  <body>
    <h1>Google Charts: Dynamic Pie, Bar and Column Chart</h1>
    <div id="chart_container">
      <div id="pie-chart" class="chart-div"></div>

      <div id="bar-chart" class="chart-div"></div>

      <div id="column-chart" class="chart-div"></div>
    </div>
  </body>
</html>
