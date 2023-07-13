//[Dashboard Javascript]

//Project:	Joblly - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
		
	var options = {
	  series: [
		  {
			name: "Clicks",
			data: [3, 15, 12, 27, 40, 17, 8]
		  },
	  ],
	  chart: {
	  height: 200,
	  type: 'line',
	  zoom: {
		enabled: false
	  },			  
	  toolbar: {
		show: false,
	  }
	},
	dataLabels: {
	  enabled: false
	},
	stroke: {
	  curve: 'smooth'
	},
	colors: ['#ac5dd9'],
	grid: {			
		show: true,
	},

	 legend: {
		show: true,
		 position: 'top',
      	horizontalAlign: 'left', 
	 },
	xaxis: {
	  categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Set', 'Sun'],
		labels: {
			show: false,
		},
		axisBorder: {
			show: false,
		},
		axisTicks: {
			show: false,
		},
		},

	yaxis: {
	  labels: {
			show: true,
		}
	},
	};

	var chart = new ApexCharts(document.querySelector("#clicks_jobs"), options);
	chart.render();
	
	
}); // End of use strict
