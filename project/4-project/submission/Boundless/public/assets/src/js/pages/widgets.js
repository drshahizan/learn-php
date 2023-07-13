//[widget charts Javascript]


$( document ).ready(function() {
    "use strict";
	
	
	var spark1 = {
	  chart: {
		id: 'spark1',
		group: 'sparks',
		type: 'line',
		height: 200,
		sparkline: {
		  enabled: true
		},
		dropShadow: {
		  enabled: true,
		  top: 5,
		  left: 1,
		  blur: 5,
		  opacity: 0.1,
		}
	  },
	  series: [{
		data: [25, 66, 41, 59, 25, 44, 12, 36, 9, 21]
	  }],
	  stroke: {
		curve: 'smooth'
	  },
	  markers: {
		size: 0
	  },
	  grid: {
		padding: {
		  top: 50,
		  bottom: 50,
		  right: 6,
		  left: 0
		}
	  },
	  colors: ['#ffffff'],
	  tooltip: {
		x: {
		  show: false
		},
		y: {
		  title: {
			formatter: function formatter(val) {
			  return '';
			}
		  }
		}
	  }
	}
	new ApexCharts(document.querySelector("#spark1"), spark1).render();
	
	var spark2 = {
	  chart: {
		id: 'spark2',
		group: 'sparks',
		type: 'line',
		height: 200,
		sparkline: {
		  enabled: true
		},
		dropShadow: {
		  enabled: true,
		  top: 5,
		  left: 1,
		  blur: 5,
		  opacity: 0.1,
		}
	  },
	  series: [{
		data: [25, 66, 41, 59, 25, 44, 12, 36, 9, 21]
	  }],
	  stroke: {
		curve: 'smooth'
	  },
	  markers: {
		size: 0
	  },
	  grid: {
		padding: {
		  top: 50,
		  bottom: 50,
		  right: 6,
		  left: 0
		}
	  },
	  colors: ['#ffffff'],
	  tooltip: {
		x: {
		  show: false
		},
		y: {
		  title: {
			formatter: function formatter(val) {
			  return '';
			}
		  }
		}
	  }
	}
	new ApexCharts(document.querySelector("#spark2"), spark2).render();
	
	var spark3 = {
	  chart: {
		id: 'spark3',
		group: 'sparks',
		type: 'line',
		height: 200,
		sparkline: {
		  enabled: true
		},
		dropShadow: {
		  enabled: true,
		  top: 5,
		  left: 1,
		  blur: 5,
		  opacity: 0.1,
		}
	  },
	  series: [{
		data: [25, 66, 41, 59, 25, 44, 12, 36, 9, 21]
	  }],
	  stroke: {
		curve: 'smooth'
	  },
	  markers: {
		size: 0
	  },
	  grid: {
		padding: {
		  top: 50,
		  bottom: 50,
		  right: 6,
		  left: 0
		}
	  },
	  colors: ['#ffffff'],
	  tooltip: {
		x: {
		  show: false
		},
		y: {
		  title: {
			formatter: function formatter(val) {
			  return '';
			}
		  }
		}
	  }
	}
	new ApexCharts(document.querySelector("#spark3"), spark3).render();
	
	
	var options = {
          series: [{
          name: 'Net Profit',
          data: [44, 55, 57, 56, 61, 58, 63]
        }, {
          name: 'Revenue',
          data: [76, 85, 101, 98, 87, 105, 91]
        }],
          chart: {
          type: 'bar',
          height: 250,
			  toolbar: {
        		show: false,
			  }
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '30%',
            borderRadius: 3
          },
        },
        dataLabels: {
          enabled: false,
        },
		grid: {
			show: false,
			padding: {
			  top: 0,
			  bottom: 0,
			  right: 30,
			  left: 20
			}
		},
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
		colors: ['rgba(255, 255, 255, 0.25)', '#f7f7f7'],
        xaxis: {
          categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
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
          		show: false,
			}
        },
		 legend: {
      		show: false,
		 },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          },
			marker: {
			  show: false,
		  },
        }
        };

        var chart = new ApexCharts(document.querySelector("#revenue1"), options);
        chart.render();
	
	var options = {
          series: [{
          name: 'Net Profit',
          data: [44, 55, 57, 56, 61, 58, 63]
        }, {
          name: 'Revenue',
          data: [76, 85, 101, 98, 87, 105, 91]
        }],
          chart: {
          type: 'bar',
          height: 250,
			  toolbar: {
        		show: false,
			  }
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '30%',
            borderRadius: 3
          },
        },
        dataLabels: {
          enabled: false,
        },
		grid: {
			show: false,
			padding: {
			  top: 0,
			  bottom: 0,
			  right: 30,
			  left: 20
			}
		},
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
		colors: ['rgba(255, 255, 255, 0.25)', '#f7f7f7'],
        xaxis: {
          categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
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
          		show: false,
			}
        },
		 legend: {
      		show: false,
		 },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          },
			marker: {
			  show: false,
		  },
        }
        };

        var chart = new ApexCharts(document.querySelector("#revenue2"), options);
        chart.render();
	
	var options = {
          series: [{
          name: 'Net Profit',
          data: [44, 55, 57, 56, 61, 58, 63]
        }, {
          name: 'Revenue',
          data: [76, 85, 101, 98, 87, 105, 91]
        }],
          chart: {
          type: 'bar',
          height: 250,
			  toolbar: {
        		show: false,
			  }
        },
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '30%',
            borderRadius: 3
          },
        },
        dataLabels: {
          enabled: false,
        },
		grid: {
			show: false,
			padding: {
			  top: 0,
			  bottom: 0,
			  right: 30,
			  left: 20
			}
		},
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
		colors: ['rgba(255, 255, 255, 0.25)', '#f7f7f7'],
        xaxis: {
          categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
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
          		show: false,
			}
        },
		 legend: {
      		show: false,
		 },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return "$ " + val + " thousands"
            }
          },
			marker: {
			  show: false,
		  },
        }
        };

        var chart = new ApexCharts(document.querySelector("#revenue3"), options);
        chart.render();
	
	
	var options = {
          series: [{
            name: "Revenue",
            data: [90, 71, 65, 91, 40, 112, 99, 51, 128]
        }],
          chart: {
          height: 275,
          type: 'area',
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
		colors: ['#f2426d'],
        grid: {			
			show: false,
			padding: {
			  top: 0,
			  bottom: -20,
			  right: 6,
			  left: -10
			},
        },
		
		 legend: {
      		show: false,
		 },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
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
          		show: false,
			}
        },
        };

        var chart = new ApexCharts(document.querySelector("#revenue4"), options);
        chart.render();
	
	
	
		var options = {
		  chart: {
			height: 245,
			type: "radialBar"
		  },

		  series: [67],
			colors: ["#733aeb"],
		  plotOptions: {
			radialBar: {
			  hollow: {
				margin: 15,
				size: "70%"
			  },

			  dataLabels: {
				showOn: "always",
				name: {
				  offsetY: -10,
				  show: false,
				  color: "#888",
				  fontSize: "13px"
				},
				value: {
				  color: "#111",
				  fontSize: "30px",
				  show: true
				}
			  }
			}
		  },

		  stroke: {
			lineCap: "round",
		  },
		  labels: ["Progress"]
		};

		var chart = new ApexCharts(document.querySelector("#revenue5"), options);

		chart.render();
	
	
	var options = {
          series: [{
            name: "Revenue",
            data: [90, 71, 65, 91, 40, 112, 99, 51, 128]
        }],
          chart: {
          height: 200,
          type: 'area',
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
		colors: ['#51ce8a'],
        grid: {			
			show: false,
			padding: {
			  top: 0,
			  bottom: 10,
			  right: 10,
			  left: -8
			},
        },
		
		 legend: {
      		show: false,
		 },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
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
          		show: false,
			}
        },
        };

        var chart = new ApexCharts(document.querySelector("#revenue6"), options);
        chart.render();
	
		
		 var options = {
          series: [44, 55, 67, 83],
          chart: {
          height: 325,
          type: 'radialBar',
        },
		colors: ["#733aeb", "#f2426d", "#51ce8a", "#019ff8"],	 
        stroke: {
			lineCap: "round",
		  },
        plotOptions: {
          radialBar: {
            dataLabels: {
              name: {
				show: false,
              },
              value: {
                fontSize: '30px',
              },
              total: {
                show: true,
                label: 'Total',
                formatter: function (w) {
                  // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                  return 249
                }
              }
            }
          }
        },
        labels: ['Apples', 'Oranges', 'Bananas', 'Berries'],
        };

        var chart = new ApexCharts(document.querySelector("#revenue7"), options);
        chart.render();
	
	var options = {
          series: [{
            name: "Revenue",
            data: [90, 71, 65, 91, 40, 112, 99, 51, 128]
        }],
          chart: {
          height: 275,
          type: 'area',
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
		colors: ['#f2426d'],
        grid: {			
			show: false,
			padding: {
			  top: 0,
			  bottom: -20,
			  right: 6,
			  left: -10
			},
        },
		
		 legend: {
      		show: false,
		 },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
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
          		show: false,
			}
        },
        };

        var chart = new ApexCharts(document.querySelector("#revenue8"), options);
        chart.render();
	
	
	var options = {
          series: [76],
          chart: {
          type: 'radialBar',
          offsetY: -20,
          sparkline: {
            enabled: true
          }
        },
		
        stroke: {
			lineCap: "round"
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
                offsetY: -2,
                fontSize: '30px'
              }
            }
          }
        },
        grid: {
          padding: {
            top: -10
          }
        },
        labels: ['Average Results'],
        };

        var chart = new ApexCharts(document.querySelector("#revenue9"), options);
        chart.render();
	
}); // End of use strict
