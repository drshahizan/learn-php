
$(function () {

  'use strict';
	
	
		var options = {
          series: [{
            name: "Store",
            data: [10, 15, 20, 15, 8, 21, 26, 33, 24, 38, 52, 45]
          },
          {
            name: "Online",
            data: [32, 35, 51, 36, 37, 18, 52, 65, 45, 70, 62, 82]
          },
          {
            name: 'Traffic',
            data: [47, 45, 56, 82, 47, 62, 60, 75, 99, 74, 65, 87]
          }
        ],
          chart: {
          height: 250,
          type: 'line',
          zoom: {
            enabled: false
          },
        },
		colors: ["#7047ee", "#3596f7", "#f2426d"],
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight',
        },
        legend: {
			show: false,
        },
        markers: {
          size: 0,
          hover: {
            sizeOffset: 6
          }
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
        grid: {
          borderColor: '#f1f1f1',
        }
        };

        var chart = new ApexCharts(document.querySelector("#flotChart"), options);
        chart.render();
	
	
	
	
	var options = {
	  chart: {
		  height: 310,
		  type: 'bar',
		  toolbar: {
			  show: false
		  }
	  },
	  plotOptions: {
		  bar: {
			  horizontal: false,
			  borderRadius: 3,
			  columnWidth: '50%',
		  },
	  },
	  dataLabels: {
		  enabled: false
	  },
	  stroke: {
		  show: true,
		  width: 2,
		  colors: ['transparent']
	  },
	  colors: ["#51ce8a", "#ffa800"],
	  series: [{
		  name: 'Subscribe',
		  data: [70, 45, 51, 58, 59, 58, 61, 65, 60, 69]
	  }, {
		  name: 'Upgrad',
		  data: [55, 71, 80, 100, 89, 98, 110, 95, 116, 90]
	  },],
	  xaxis: {
		  categories: ['Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
		  axisBorder: {
			show: true,
			color: '#bec7e0',
		  },  
		  axisTicks: {
			show: true,
			color: '#bec7e0',
		  },    
	  },
	  legend: {
          show: false,
        },
	  yaxis: {
		  title: {
			  text: 'Visitors'
		  }
	  },
	  fill: {
		  opacity: 1

	  },
	  grid: {
		  row: {
			  colors: ['transparent', 'transparent'], // takes an array which will be repeated on columns
			  opacity: 0.2
		  },
		  borderColor: '#f1f3fa'
	  },
	  tooltip: {
		  y: {
			  formatter: function (val) {
				  return "" + val + "k"
			  }
		  }
	  }
	}

	var chart = new ApexCharts(
	  document.querySelector("#yearly-comparison"),
	  options
	);

	chart.render();
	
	// bar chart
		$(".bar").peity("bar");	
	
	
	
	$('.example').DataTable();
	
}); // End of use strict
