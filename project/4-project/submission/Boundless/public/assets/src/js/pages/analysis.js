

$(function () {

  'use strict';
	
	
	  var analyticsBarChartOptions = {
		chart: {
		  height: 260,
		  type: 'bar',
		  toolbar: {
			show: false
		  }
		},
		plotOptions: {
		  bar: {
			horizontal: false,
			columnWidth: '20%',
			borderRadius: 3
		  },
		},
		legend: {
		  horizontalAlign: 'right',
		  offsetY: -10,
		  markers: {
			radius: 50,
			height: 8,
			width: 8
		  }
		},
		dataLabels: {
		  enabled: false
		},
		colors: ['#7047ee', '#f2426d'],
		fill: {
		  type: 'gradient',
		  gradient: {
			shade: 'light',
			type: "vertical",
			inverseColors: true,
			opacityFrom: 1,
			opacityTo: 1,
			stops: [0, 70, 100]
		  },
		},
		series: [{
		  name: '2019',
		  data: [80, 95, 150, 210, 140, 230, 300, 280, 130]
		}, {
		  name: '2018',
		  data: [50, 70, 130, 180, 90, 180, 270, 220, 110]
		}],
		xaxis: {
		  categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
		  axisBorder: {
			show: false
		  },
		  axisTicks: {
			show: false
		  },
		  labels: {
			style: {
			  colors: '#333333'
			}
		  }
		},
		yaxis: {
		  min: 0,
		  max: 300,
		  tickAmount: 3,
		  labels: {
			style: {
			  color: '#333333'
			}
		  }
		},
		legend: {
		  show: false
		},
		tooltip: {
		  y: {
			formatter: function (val) {
			  return "$ " + val + " thousands"
			}
		  }
		}
	  }

	  var analyticsBarChart = new ApexCharts(
		document.querySelector("#analytics-bar-chart"),
		analyticsBarChartOptions
	  );

	  analyticsBarChart.render();	
	
	
	
	var options = {
          series: [{
          name: 'Sales',
			  data: [31, 40, 28, 51, 42, 109, 100]
			}],
          chart: {
          height: 330,
          type: 'area'
        },
        dataLabels: {
          enabled: false
        },
		 colors: ["#f2426d"],
        stroke: {
          curve: 'smooth'
        },
        xaxis: {
          categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"]
        },
        };

        var chart = new ApexCharts(document.querySelector("#balancehistory"), options);
        chart.render();
      
	
	
	
	
	// Apex  start
  if($('#apexChart2').length) {
    var options2 = {
      chart: {
        type: "bar",
        height: 150,
        sparkline: {
          enabled: !0
        }
      },
      plotOptions: {
        bar: {
          columnWidth: "25%"
        }
      },
      colors: ["#ffffff"],
      series: [{
        data: [36, 77, 52, 90, 74, 35, 55, 23, 47, 10, 63, 36, 77, 52, 90, 74, 35, 55, 23, 47]
      }],
      labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
      xaxis: {
        crosshairs: {
          width: 2
        }
      },
      tooltip: {
        fixed: {
          enabled: !1
        },
        x: {
          show: !1
        },
        y: {
          title: {
            formatter: function(e) {
              return ""
            }
          }
        },
        marker: {
          show: !1
        }
      }
    };
    new ApexCharts(document.querySelector("#apexChart2"),options2).render();
  }
  // Apex  end
	
	
	
	// Apex  start
  if($('#apexChart3').length) {
    var options2 = {
      chart: {
        type: "bar",
        height: 150,
        sparkline: {
          enabled: !0
        }
      },
      plotOptions: {
        bar: {
          columnWidth: "25%"
        }
      },
      colors: ["#ffffff"],
      series: [{
        data: [36, 77, 52, 90, 74, 35, 55, 23, 47, 10, 63, 36, 77, 52, 90, 74, 35, 55, 23, 47]
      }],
      labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20],
      xaxis: {
        crosshairs: {
          width: 2
        }
      },
      tooltip: {
        fixed: {
          enabled: !1
        },
        x: {
          show: !1
        },
        y: {
          title: {
            formatter: function(e) {
              return ""
            }
          }
        },
        marker: {
          show: !1
        }
      }
    };
    new ApexCharts(document.querySelector("#apexChart3"),options2).render();
  }
	
}); // End of use strict
