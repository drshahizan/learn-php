//[Dashboard Javascript]

//Project:	edulearn - Responsive Admin Template
//Primary use:   Used only for the main dashboard (index.html)


$(function () {

  'use strict';
	
	
	var options = {
          series: [{
          name: 'Completed',
          data: [55, 45, 15, 71]
        }, {
          name: 'Remaining',
          data: [45, 55, 75, 49]
        }, {
          name: 'Overdue',
          data: [10, 15, 5, 10]
        }],
          chart: {
          type: 'bar',
          height: 255,
          zoom: {
            enabled: false
          },
		  toolbar: {
			  show: false
		  },
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '80%',
            endingShape: 'rounded'
          },
        },
		states: {
			hover: {
				filter: {
					type: 'none',
				}
			},
		},
        legend: {
		    show: false,
        },
        dataLabels: {
          enabled: false
        },
		colors:['#d6caff', '#ffb7c5', '#afd6ff'],
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: ['Proj. 1', 'Proj. 2', 'Proj. 3', 'Proj. 4'],
        },
        fill: {
          opacity: 1
        },
        };

        var chart = new ApexCharts(document.querySelector("#project_progress"), options);
        chart.render();
	
	
	
	
		var options = {
          series: [64],
          chart: {
          height: 220,
          type: 'radialBar',
        },
		colors:['#d6caff'],
		stroke: {
          lineCap: 'round'
        },
		states: {
			hover: {
				filter: {
					type: 'none',
				}
			},
		},
        plotOptions: {
          radialBar: {
            hollow: {
              size: '50%',
            },		
			 dataLabels: {
			  name: {
				offsetY: -10,
                color: '#111',
			  },
			  value: {
                color: '#111',
                fontSize: '18px',
                show: true,
              }
			 },
          },
        },
        labels: ['Design'],
        };

        var chart = new ApexCharts(document.querySelector("#project_spend1"), options);
        chart.render();
	
	
		var options = {
          series: [54],
          chart: {
          height: 220,
          type: 'radialBar',
        },
		colors:['#afd6ff'],
		stroke: {
          lineCap: 'round'
        },
		states: {
			hover: {
				filter: {
					type: 'none',
				}
			},
		},
        plotOptions: {
          radialBar: {
            hollow: {
              size: '50%',
            },		
			 dataLabels: {
			  name: {
				offsetY: -10,
                color: '#111',
			  },
			  value: {
                color: '#111',
                fontSize: '18px',
                show: true,
              }
			 },
          },
        },
        labels: ['Develop'],
        };

        var chart = new ApexCharts(document.querySelector("#project_spend2"), options);
        chart.render();
	
	
		var options = {
          series: [24],
          chart: {
          height: 220,
          type: 'radialBar',
        },
		colors:['#ffb7c5'],
		stroke: {
          lineCap: 'round'
        },
		states: {
			hover: {
				filter: {
					type: 'none',
				}
			},
		},
        plotOptions: {
          radialBar: {
            hollow: {
              size: '50%',
            },		
			 dataLabels: {
			  name: {
				offsetY: -10,
                color: '#111',
			  },
			  value: {
                color: '#111',
                fontSize: '18px',
                show: true,
              }
			 },
          },
        },
        labels: ['Testing'],
        };

        var chart = new ApexCharts(document.querySelector("#project_spend3"), options);
        chart.render();
		
	
	
	
		var options = {
          series: [{
          name: 'Total Budget',
          data: [200, 210, 400, 190]
        }, {
          name: 'Target Amoutn Used',
          data: [150, 300, 430, 250]
        }, {
          name: 'Budget Amount Used',
          data: [300, 320, 290, 300]
        }],
          chart: {
          height: 240,
          type: 'bar',
          zoom: {
            enabled: false
          },
		  toolbar: {
			  show: false
		  },
        },
		colors:['#afd6ff', '#ffb7c5', '#bcf5e5'],
		plotOptions: {
			bar: {
				columnWidth: '70%',
			}
		},
        legend: {
		  show: false
        },
        dataLabels: {
          enabled: false,
        },
		xaxis: {
		  labels: {
			  show: false,
		  },
		},
        labels: ['Project 1', 'Project 2', 'Project 3', 'Project 4'],		 
		  tooltip: {
			  y: {
				  formatter: function (val) {
					  return "$" + val + "k"
				  }
			  }
		  },						
        };

        var chart = new ApexCharts(document.querySelector("#project_budget"), options);
        chart.render();
	
	
	
		var options = {
          series: [{
          name: 'Total Budget',
          data: [350]
        }, {
          name: 'Target Amoutn Used',
          data: [300]
        }, {
          name: 'Budget Amount Used',
          data: [400]
        }],
          chart: {
          height: 250,
          type: 'bar',
          zoom: {
            enabled: false
          },
		  toolbar: {
			  show: false
		  },
        },
		colors:['#afd6ff', '#ffb7c5', '#bcf5e5'],
		plotOptions: {
			bar: {
				columnWidth: '80%',
			}
		},
        legend: {
		  show: false
        },
        dataLabels: {
          enabled: false,
        },
		xaxis: {
		  labels: {
			  show: false,
		  },
		},
        labels: ['Project 1'],		 
		  tooltip: {
			  y: {
				  formatter: function (val) {
					  return "$" + val + "k"
				  }
			  }
		  },						
        };

        var chart = new ApexCharts(document.querySelector("#total_budget"), options);
        chart.render();
	
	
	
		var options = {
          series: [{
          data: [400, 430, 448, 470, 540]
        }],
          chart: {
          type: 'bar',
          height: 250,
          zoom: {
            enabled: false
          },
		  toolbar: {
			  show: false
		  },
        },
		colors:['#bcf5e5'],
        plotOptions: {
          bar: {
            borderRadius: 4,
            horizontal: true,
          }
        },
        dataLabels: {
          enabled: false
        },
        xaxis: {
          categories: ['Project 1', 'Project 2', 'Project 3', 'Project 4', 'Project 5'],
        }
        };

        var chart = new ApexCharts(document.querySelector("#workload"), options);
        chart.render();
		
	
	
	
		var options = {
          series: [76],
          chart: {
		  height: 300,
          type: 'radialBar',
          sparkline: {
            enabled: true
          }
        },
		colors:['#fff0d2'],
		states: {
			hover: {
				filter: {
					type: 'none',
				}
			},
		},
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
	
}); // End of use strict


