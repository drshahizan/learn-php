//[custom Javascript]



// Fullscreen
$(function () {
	'use strict'
	
	var options = {
          series: [{
          data: [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46]
        }],
          chart: {
          type: 'area',
          height: 160,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'straight',
			width: 2,
        },
        fill: {
          opacity: 1,
        },
        yaxis: {
          min: 0
        },
        colors: ['#019ff8'],
        title: {
          text: '$424,652',
          offsetX: 20, offsetY: 20,
          style: {
            fontSize: '24px',
          }
        },
        subtitle: {
          text: 'Sales',
          offsetX: 20, offsetY: 55,
          style: {
            fontSize: '14px',
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#sales-spark"), options);
        chart.render();
	
	
	var options = {
          series: [{
          data: [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46]
        }],
          chart: {
          type: 'bar',
          height: 160,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'straight'
        },
        fill: {
          opacity: 1,
        },
        colors: ['#51ce8a'],
        xaxis: {
          crosshairs: {
            width: 1
          },
        },
        yaxis: {
          min: 0
        },
        title: {
          text: '$135,965',
          offsetX: 20, offsetY: 20,
          style: {
            fontSize: '24px',
          }
        },
        subtitle: {
          text: 'Profits',
          offsetX: 20, offsetY: 55,
          style: {
            fontSize: '14px',
          }
        }
        };
		var chart = new ApexCharts(document.querySelector("#profit-spark"), options);
        chart.render();
	
	
	var options = {
          series: [{
          data: [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46]
        }],
          chart: {
          type: 'line',
          height: 160,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'smooth',
			width: 2,
        },
        fill: {
          opacity: 1,
        },
        colors: ['#f2426d'],
        xaxis: {
          crosshairs: {
            width: 1
          },
        },
        yaxis: {
          min: 0
        },
        title: {
          text: '$235,312',
          offsetX: 20, offsetY: 20,
          style: {
            fontSize: '24px',
          }
        },
        subtitle: {
          text: 'Expenses',
          offsetX: 20, offsetY: 55,
          style: {
            fontSize: '14px',
          }
        }
        };
		var chart = new ApexCharts(document.querySelector("#expenses-spark"), options);
        chart.render();
	
	
	
	var options = {
          series: [{
          name: 'PRODUCT A',
          data: [24, 65, 31, 37, 39, 62]
        }, {
          name: 'PRODUCT B',
          data: [-24, -65, -31, -37, -39, -62]
        }],
          chart: {
		  foreColor:"#bac0c7",
          type: 'bar',
          height: 350,
          stacked: true,
          toolbar: {
            show: false
          },
          zoom: {
            enabled: true
          }
        },		
		grid: {
			show: true,
			borderColor: '#f7f7f7',      
		},
		colors:['#f2426d', '#019ff8'],
        plotOptions: {
          bar: {
            horizontal: false,
            columnWidth: '15%',
            borderRadius: 3
          },
        },
        dataLabels: {
          enabled: false
        },
 
        xaxis: {
          type: 'datetime',
          categories: ['01/01/2011 GMT', '01/02/2011 GMT', '01/03/2011 GMT', '01/04/2011 GMT',
            '01/05/2011 GMT', '01/06/2011 GMT'
          ],
        },
		yaxis: {
			axisBorder: {
				show: false
			},
		},
        legend: {
          show: false,
        },
        fill: {
          opacity: 1
        }
        };

        var chart = new ApexCharts(document.querySelector("#charts_widget_1_chart"), options);
        chart.render();
	
	
	var options = {
        series: [{
            name: "Profit",
            data: [0, 31, 54, 38, 56, 24, 65, 45, 37, 39]
        }],
        chart: {
			foreColor:"#bac0c7",
          height: 350,
          type: 'area',
          zoom: {
            enabled: false
          }
        },
		colors:['#51ce8a'],
        dataLabels: {
          enabled: false,
        },
        stroke: {
          	show: true,
			curve: 'smooth',
			lineCap: 'butt',
			width: 3,
			dashArray: 0, 
        },		
		markers: {
			size: 5,
			colors: '#51ce8a',
			strokeColors: '#ffffff',
			strokeWidth: 3,
			strokeOpacity: 0.9,
			strokeDashArray: 0,
			fillOpacity: 1,
			discrete: [],
			shape: "circle",
			radius: 5,
			offsetX: 0,
			offsetY: 0,
			onClick: undefined,
			onDblClick: undefined,
			hover: {
			  size: undefined,
			  sizeOffset: 3
			}
		},	
        grid: {
			borderColor: '#f7f7f7', 
          row: {
            colors: ['transparent'], // takes an array which will be repeated on columns
            opacity: 0
          },			
		  yaxis: {
			lines: {
			  show: true,
			},
		  },
        },
		fill: {
			type: "gradient",
			gradient: {
			  shadeIntensity: 1,
			  opacityFrom: 0.01,
			  opacityTo: 1,
			  stops: [0, 90, 100]
			}
		  },
        xaxis: {
          categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
		  labels: {
			show: true,        
          },
          axisBorder: {
            show: true
          },
          axisTicks: {
            show: true
          },
          tooltip: {
            enabled: true,        
          },
        },
        yaxis: {
          labels: {
            show: true,
            formatter: function (val) {
              return val + "K";
            }
          }
        
        },
      };
      var chart = new ApexCharts(document.querySelector("#charts_widget_2_chart"), options);
      chart.render();
	
	
		var options5 = {
          series: [{
          data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
        }],
          chart: {
          type: 'bar',
          width: 100,
          height: 70,
          sparkline: {
            enabled: true
          }
        },
        plotOptions: {
          bar: {
            columnWidth: '80%'
          }
        },
        labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11],
        xaxis: {
          crosshairs: {
            width: 1
          },
        },
		colors:['#019ff8'],
        tooltip: {
          fixed: {
            enabled: false
          },
          x: {
            show: false
          },
          y: {
            title: {
              formatter: function (seriesName) {
                return ''
              }
            }
          },
          marker: {
            show: false
          }
        }
        };

        var chart5 = new ApexCharts(document.querySelector("#campaign-sent-chart"), options5);
        chart5.render();
	
	
		var options1 = {
          series: [{
          data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54]
        }],
          chart: {
          type: 'line',
          width: 100,
          height: 70,
          sparkline: {
            enabled: true
          }
        },		
        stroke: {
          curve: 'smooth',
			width: 2,
        },
		colors:['#51ce8a'],
        tooltip: {
          fixed: {
            enabled: false
          },
          x: {
            show: false
          },
          y: {
            title: {
              formatter: function (seriesName) {
                return ''
              }
            }
          },
          marker: {
            show: false
          }
        }
        };

        var chart1 = new ApexCharts(document.querySelector("#new-leads-chart"), options1);
        chart1.render();
	
	
	
		var options3 = {
          series: [43, 32, 12, 9],
          chart: {
          type: 'pie',
          width: 80,
          height: 80,
          sparkline: {
            enabled: true
          }
        },
		colors:['#019ff8','#51ce8a','#733aeb','#f2426d'],
        stroke: {
          width: 1
        },
        tooltip: {
          fixed: {
            enabled: false
          },
        }
        };

        var chart3 = new ApexCharts(document.querySelector("#deals-chart"), options3);
        chart3.render();
	
	
	
		var options7 = {
          series: [45],
          chart: {
          type: 'radialBar',
          width: 80,
          height: 80,
          sparkline: {
            enabled: true
          }
        },
        dataLabels: {
          enabled: false
        },
		colors:['#019ff8'],
        plotOptions: {
          radialBar: {
            hollow: {
              margin: 0,
              size: '50%'
            },
            track: {
              margin: 0
            },
            dataLabels: {
              show: false
            }
          }
        }
        };

        var chart7 = new ApexCharts(document.querySelector("#booked-revenue-chart"), options7);
        chart7.render();
	
	
	var options = {
          series: [{
          data: [25, 66, 41, 59, 25, 44, 12, 36, 9, 21]
        }],
          chart: {
          type: 'line',
          height: 100,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'smooth',
			width: 4,
        },
        fill: {
          opacity: 1,
        },
        colors: ['#019ff8'],
        };

        var chart = new ApexCharts(document.querySelector("#spark1"), options);
        chart.render();
	
	
	var options = {
          series: [{
          data: [12, 14, 2, 47, 32, 44, 14, 55, 41, 69]
        }],
          chart: {
          type: 'bar',
          height: 100,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'smooth',
			width: 3,
        },
        fill: {
          opacity: 1,
        },
        colors: ['#733aeb'],
        };

        var chart = new ApexCharts(document.querySelector("#spark2"), options);
        chart.render();
	
	
	var options = {
          series: [{
          data: [47, 45, 74, 32, 56, 31, 44, 33, 45, 19]
        }],
          chart: {
          type: 'line',
          height: 100,
          sparkline: {
            enabled: true
          },
        },
        stroke: {
          curve: 'smooth',
			width: 4,
        },
        fill: {
          opacity: 1,
        },
        colors: ['#f2426d'],
        };

        var chart = new ApexCharts(document.querySelector("#spark3"), options);
        chart.render();
	
		var options8 = {
          series: [53, 67],
          chart: {
          type: 'radialBar',
          width: 100,
          height: 100,
          sparkline: {
            enabled: true
          }
        },
		colors: ['#fec801', '#733aeb'],
        dataLabels: {
          enabled: false
        },
        plotOptions: {
          radialBar: {
            hollow: {
              margin: 0,
              size: '50%'
            },
            track: {
              margin: 1
            },
            dataLabels: {
              show: false
            }
          }
        }
        };

        var chart8 = new ApexCharts(document.querySelector("#spark4"), options8);
        chart8.render();
	
	
	
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
		 theme: 'dark',
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
	new ApexCharts(document.querySelector("#spark5"), spark1).render();
	
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
		 theme: 'dark',
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
	new ApexCharts(document.querySelector("#spark6"), spark2).render();
	
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
		xaxis: {
			axisBorder: {
			  show: false,
		  },
		},
	  tooltip: {
		 theme: 'dark',
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
	new ApexCharts(document.querySelector("#spark7"), spark3).render();
	
	
	
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
          height: 245,
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
                offsetY: -20,
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
		 theme: 'dark',
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
		 theme: 'dark',
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
		 theme: 'dark',
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
	
	
}); // End of use strict
		
