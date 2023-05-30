<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
          [{'v':'Atiqah', 'f':'Atiqah<div style="color:red; font-style:italic">President</div>'},
           '', 'The President'],
          [{'v':'Aldika', 'f':'Aldika<div style="color:red; font-style:italic">Vice President</div>'},
           'Atiqah', 'VP'],
          ['Tanvir', 'Atiqah', ''],
          ['Arsalan', 'Aldika', 'Thilak'],
          ['Fatin', 'Arsalan', '']
        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {'allowHtml':true});
      }
   </script>
    </head>
  <body>
    <h1 style="text-align:center">Google Charts: Organization Chart</h1>
    <div id="chart_div"></div>
  </body>
</html>
