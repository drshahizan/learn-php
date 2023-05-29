<!DOCTYPE html>
<html lang="en-US">

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawAnnotations);

        function drawAnnotations() {
            var data = new google.visualization.DataTable();
            data.addColumn('timeofday', 'Time of Day');
            data.addColumn('number', 'Motivation Level');
            data.addColumn({type: 'string', role: 'annotation'});
            data.addColumn('number', 'Energy Level');
            data.addColumn({type: 'string', role: 'annotation'});

            data.addRows([
                [{v: [8, 0, 0], f: '8 am'},   1, '1',  .25, '.2'],
                [{v: [9, 0, 0], f: '9 am'},   2, '2',   .5, '.5'],
                [{v: [10, 0, 0], f:'10 am'},  3, '3',    1,  '1'],
                [{v: [11, 0, 0], f: '11 am'}, 4, '4', 2.25,  '2'],
                [{v: [12, 0, 0], f: '12 pm'}, 5, '5', 2.25,  '2'],
                [{v: [13, 0, 0], f: '1 pm'},  6, '6',    3,  '3'],
                [{v: [14, 0, 0], f: '2 pm'},  7, '7', 3.25,  '3'],
                [{v: [15, 0, 0], f: '3 pm'},  8, '8',    5,  '5'],
                [{v: [16, 0, 0], f: '4 pm'},  9, '9',  6.5,  '6'],
                [{v: [17, 0, 0], f: '5 pm'}, 10, '10',  10, '10'],
            ]);

            var options = {
            title: 'Motivation and Energy Level Throughout the Day',
            annotations: {
                alwaysOutside: true,
            textStyle: {
                fontSize: 14,
                color: '#000',
                auraColor: 'none'
                }
            },
            hAxis: {
                title: 'Time of Day',
                format: 'h:mm a',
            viewWindow: {
                min: [7, 30, 0],
                max: [17, 30, 0]
              }
            },
            vAxis: {
              title: 'Rating (scale of 1-10)'
            }
          };

          var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
          chart.draw(data, options);
        }
    </script>
</head>
    
<body>
    <h1 style="text-align:center">Google Charts: Column Chart</h1>
    <div id="chart_div" style="width: 800px; height: 500px;"></div>
</body>
</html>
