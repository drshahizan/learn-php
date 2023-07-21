

$(function () {

  'use strict';
	
	
		var options = {
          series: [76],
          chart: {
		  height: 280,
          type: 'radialBar',
          sparkline: {
            enabled: true
          }
        },
		colors:['#ffa800'],
        plotOptions: {
          radialBar: {
            startAngle: -90,
            endAngle: 90,
            track: {
              background: "#e7e7e7",
              strokeWidth: '97%',
              margin: 5, // margin is in pixels
            },
            dataLabels: {
              name: {
                show: false
              },
              value: {
                offsetY: -20,
                fontSize: '22px'
              }
            }
          }
        },
        grid: {
          padding: {
            top: -0
          }
        },
        labels: ['Average Results'],
        };

        var chart = new ApexCharts(document.querySelector("#overall_progress2"), options);
        chart.render();
	
		
		var options = {
          series: [67],		 
          chart: {
          height: 130,
          type: 'radialBar',
        },
		colors:['#7047ee'],
        plotOptions: {
          radialBar: {
            hollow: {
              size: '50%',
            },
		  dataLabels: {
			name: {
				show: false,
			 },
			  value: {
                offsetY: 0,
              }
			},
          },
        },        
        };

        var chart = new ApexCharts(document.querySelector("#development_progress"), options);
        chart.render();
	
	
	
	
	
	
	var options = {
          series: [{
          name: 'Clark',
          data: [11, 0, 8, 8, 11]
        }, {
          name: 'Tom',
          data: [15, 8, 11, 8, 9]
        }, {
          name: 'Tanya',
          data: [0, 8, 15, 0, 0]
        }, {
          name: 'Matt',
          data: [12, 11, 8, 7, 8]
        }, {
          name: 'Mark',
          data: [5, 9, 5, 9, 6]
        }, {
          name: 'Mandy',
          data: [0, 0, 0, 4, 8]
        }, {
          name: 'Katrina',
          data: [5, 4, 4, 5, 4]
        }, {
          name: 'John',
          data: [7, 2, 3, 12, 4]
        }, {
          name: 'Jane',
          data: [6, 3, 15, 9, 12]
        }],
          chart: {
          type: 'bar',
          height: 300,
          stacked: true,
          toolbar: {
            show: true
          },
          zoom: {
            enabled: true
          }
        },
        dataLabels: {
          enabled: false,
        },
		grid: {
			show: true,			
		},
        plotOptions: {
          bar: {
			  columnWidth: '30%',
            horizontal: false,
            borderRadius: 10
          },
        },
		colors:['#7047ee', '#2d5be3', '#3596f7', '#51ce8a', '#ffa800', '#f2426d', '#bcc2c8', '#f26522', '#6cc644'],
        xaxis: {
          categories: ['Project 1', 'Project 2', 'Project 3', 'Project 4', 'Project 5'],
        },
        legend: {
		  show: false,	
          position: 'bottom',
      	  horizontalAlign: 'center',
        },
        fill: {
          opacity: 1
        }
        };

        var chart = new ApexCharts(document.querySelector("#contribution_employee"), options);
        chart.render();
	
	
	
	
	 var options = {
          series: [{
            name: "Earned",
            data: [0, 10, 5, 15, 10, 20, 15, 25, 20, 30, 25, 40]
        }],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          },
		  toolbar: {
			  show: false
		  },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
		 
		  tooltip: {
			  y: {
				  formatter: function (val) {
					  return "$" + val
				  }
			  }
		  }
        };

        var chart = new ApexCharts(document.querySelector("#chart1"), options);
        chart.render();
	
	
		var options = {
          series: [{
            name: "Hours Worked",
            data: [7, 35, 12, 27, 34, 17, 19, 30, 28, 32, 24, 39]
        }],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          },
		  toolbar: {
			  show: false
		  },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        grid: {
          row: {
            colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
            opacity: 0.5
          },
        },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        },
		 
		  tooltip: {
			  y: {
				  formatter: function (val) {
					  return val + "h" 
				  }
			  }
		  }
        };

        var chart = new ApexCharts(document.querySelector("#chart2"), options);
        chart.render();
	
}); // End of use strict
