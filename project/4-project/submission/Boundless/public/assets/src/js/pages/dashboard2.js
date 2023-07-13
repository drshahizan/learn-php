//[Dashboard Javascript]

//Project:	edulearn - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	
	
	var options = {
          series: [50, 40, 10],
		  labels: ['Progress', 'Complates', 'Not Started'],
          chart: {
          type: 'donut',
			  height: 180,
        },
		colors:['#d6caff', '#bcf5e5', '#ffb7c5'],
		dataLabels: {
		  style: {
			  colors:['#000000']
		  },
			dropShadow: {
			  enabled: false,
		  },
		},
		states: {
			hover: {
				filter: {
					type: 'none',
				}
			},
		},
		tooltip: {
		  style: {
			color:['#000000']
		  },
		},
		plotOptions: {
			pie: {
			  donut: {
				size: '45%'
			  }
			},
		  },
        responsive: [{
          breakpoint: 1500,
          options: {
            chart: {
              height: 250
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#project_status"), options);
        chart.render();
	
		
	var options = {
          series: [1, 2, 3],
		  labels: ['Plan', 'Design', 'Procurement'],
          chart: {
          type: 'donut',
			  height: 180,
        },		
		colors:['#afd6ff', '#bcf5e5', '#ffb7c5'],
		dataLabels: {
		  style: {
			  colors:['#000000']
		  },
			dropShadow: {
			  enabled: false,
		  },
		},
		plotOptions: {
			pie: {
			  donut: {
				size: '5%'
			  }
			},
		  },
        responsive: [{
          breakpoint: 1500,
          options: {
            chart: {
              height: 250
            },
            legend: {
              position: 'bottom'
            }
          }
        }]
        };

        var chart = new ApexCharts(document.querySelector("#project_stage"), options);
        chart.render();
	
	
	
	var options = {
          series: [76],
          chart: {
          type: 'radialBar',
          sparkline: {
            enabled: true
          }
        },
	  colors:['#afd6ff'],
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
                offsetY: -22,
                fontSize: '22px'
              }
            }
          }
        },
        responsive: [{
          breakpoint: 1500,
          options: {
            chart: {
              height: 300
            }
          }
        }],
        grid: {
          padding: {
            top: 0
          }
        },
        };

        var chart = new ApexCharts(document.querySelector("#project_completion"), options);
        chart.render();

	
	
	
	
	var options = {
          series: [87],
          chart: {
          type: 'radialBar',
          sparkline: {
            enabled: true
          }
        },
	  colors:['#ffb7c5'],
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
                offsetY: -22,
                fontSize: '22px'
              }
            }
          }
        },
        responsive: [{
          breakpoint: 1500,
          options: {
            chart: {
              height: 300
            }
          }
        }],
        grid: {
          padding: {
            top: 0
          }
        },
        labels: ['Average Results'],
        };

        var chart = new ApexCharts(document.querySelector("#utilized_duration"), options);
        chart.render();
	
	
		var options = {
          series: [{
          name: 'Actual Budget',
          type: 'column',
          data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160, 505, 414, 671, 227, 413, 201, 413, 201, 352, 752, 320, 257, 160,]
        }, {
          name: 'Planned Budget',
          type: 'line',
          data: [400, 485, 514, 601, 187, 363, 241, 452, 702, 420, 207, 140, 485, 514, 601, 187, 363, 241, 241, 452, 702, 420, 207, 140, 485,]
        }],
          chart: {
          height: 355,
          type: 'line',
          zoom: {
            enabled: false
          },
		  toolbar: {
			  show: false
		  },
        },
		colors:['#afd6ff', '#f2426d'],
        stroke: {
          width: [0, 4],
			curve: 'smooth'
        },
		plotOptions: {
			bar: {
				columnWidth: '40%',
			}
		},
        legend: {
		  show: false
        },
        dataLabels: {
          enabled: false,
        },
        labels: ['Project 1', 'Project 2', 'Project 3', 'Project 4', 'Project 5', 'Project 6', 'Project 7', 'Project 8', 'Project 9', 'Project 10', 'Project 11', 'Project 12', 'Project 13', 'Project 14', 'Project 15', 'Project 16', 'Project 17', 'Project 18', 'Project 19', 'Project 20', 'Project 21', 'Project 22', 'Project 23', 'Project 24', 'Project 25'],		 
		  tooltip: {
			  y: {
				  formatter: function (val) {
					  return "$" + val + "k"
				  }
			  }
		  },						
        };

        var chart = new ApexCharts(document.querySelector("#budget_variance"), options);
        chart.render();
	
	
	
		
		var options = {
          series: [{
          name: 'Actual Resource',
          data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 671, 227, 413]
        }, {
          name: 'Planned Resource',
          data: [400, 485, 514, 601, 187, 363, 241, 452, 702, 420, 207, 140, 485, 514, 601, 187, 363, 241, 452, 702, 420, 207, 601, 187, 363]
        }],
          chart: {
          height: 370,
          type: 'bar',
          zoom: {
            enabled: false
          },
		  toolbar: {
			  show: false
		  },
        },
		colors:['#afd6ff', '#ffb7c5'],
		plotOptions: {
			bar: {
				columnWidth: '40%',
			}
		},
        legend: {
		    show: true,
			position: 'top',
      		horizontalAlign: 'center',
        },
        dataLabels: {
          enabled: false,
        },
        labels: ['Project 1', 'Project 2', 'Project 3', 'Project 4', 'Project 5', 'Project 6', 'Project 7', 'Project 8', 'Project 9', 'Project 10', 'Project 11', 'Project 12', 'Project 13', 'Project 14', 'Project 15', 'Project 16', 'Project 17', 'Project 18', 'Project 19', 'Project 20', 'Project 21', 'Project 22', 'Project 23', 'Project 24', 'Project 25'],
		  tooltip: {
			  y: {
				  formatter: function (val) {
					  return val + " Resource (s)"
				  }
			  }
		  },
        };

        var chart = new ApexCharts(document.querySelector("#resources_variance"), options);
        chart.render();
	
		
		
	
		
		var options = {
          series: [{
          name: 'Completed',
          data: [55, 45, 15, 71, 27, 13, 21, 52, 75, 32, 57, 60]
        }, {
          name: 'Remaining',
          data: [45, 55, 75, 49, 63, 87, 79, 38, 25, 78, 43, 20]
        }, {
          name: 'Overdue',
          data: [10, 15, 5, 10, 17, 3, 1, 5, 21, 20, 5, 10]
        }],
          chart: {
          height: 370,
          type: 'bar',
		  stacked: true,
          zoom: {
            enabled: false
          },
		  toolbar: {
			  show: false
		  },
        },
		colors:['#d6caff', '#ffb7c5', '#afd6ff'],
		plotOptions: {
			bar: {
				barHeight: '40%',
				horizontal: true,
			}
		},
        legend: {
		    show: true,
			position: 'top',
      		horizontalAlign: 'center',
        },
        dataLabels: {
          enabled: false,
        },
        labels: ['Project 1', 'Project 2', 'Project 3', 'Project 4', 'Project 5', 'Project 6', 'Project 7', 'Project 8', 'Project 9', 'Project 10', 'Project 11', 'Project 12'],
		  tooltip: {
			  y: {
				  formatter: function (val) {
					  return val + " Resource (s)"
				  }
			  }
		  },
        };

        var chart = new ApexCharts(document.querySelector("#workload"), options);
        chart.render();
		
	
}); // End of use strict
