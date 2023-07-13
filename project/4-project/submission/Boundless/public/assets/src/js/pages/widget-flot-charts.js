//[widget flot charts Javascript]

//Project:	edulearn - Responsive Admin Template
//Primary use:   Used only for the  widget flot charts


$(function () {

    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data = [], totalPoints = 1000

    function getRandomData() {

      if (data.length > 0)
        data = data.slice(1)

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 200) {
          y = 200
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [getRandomData()], {
      grid: {
            color: "#AFAFAF"
            , hoverable: true
            , borderWidth: 0
            , backgroundColor: 'rgba(255, 255, 255, 0)'
        },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#019ff8'
      },
	  tooltip: true,
      lines : {
        fill : false, //Converts the line chart to area chart
        color: '#019ff8'
      },
	  tooltipOpts: {
            content: "Visit: %y"
            , defaultTheme: false
        },
      yaxis : {
        min : 0,
        max : 200,
        show: true
      },
      xaxis : {
        show: true
      }
    })

    var updateInterval = 30 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on')
        setTimeout(update, updateInterval)
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */
	
	
	

    /*
     * LINE CHART
     * ----------
     */
    //LINE randomly generated data

    var sin = [], cos = []
    for (var i = -0.1; i < 8; i += 0.5) {
      sin.push([i, Math.sin(i)])
      cos.push([i, Math.cos(i)])
    }
    var line_data1 = {
      data : sin,
      color: '#f2426d'
    }
    var line_data2 = {
      data : cos,
      color: '#51ce8a'
    }
    $.plot('#line-chart', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#51ce8a', '#f2426d']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(2),
            y = item.datapoint[1].toFixed(2)

        $('#line-chart-tooltip').html(item.series.label + ' of ' + x + ' = ' + y)
          .css({ top: item.pageY + 5, left: item.pageX + 5 })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */

    /*
     * FULL WIDTH STATIC AREA CHART
     * -----------------
     */
    var areaData = [[3.5, 58.0], [4.5, 93.4], [5.5, 122.4], [6.5, 128.4], [7.5, 135.7], [8.5, 139.7],
      [9.5, 134.6], [10.5, 120.3], [11.5, 155.3], [12.5, 165.4], [13.5, 166.5], [14.5, 161.7], [15.5, 179.9],
      [16.5, 195.4], [17.5, 157.8], [18.5, 158.2], [19.5, 199.5], [20.5, 200.0]]
    $.plot('#area-chart', [areaData], {
      grid  : {
        borderWidth: 0
      },
      series: {
        shadowSize: 0, // Drawing is faster without shadows
        color     : '#fec801'
      },
      lines : {
        fill: true //Converts the line chart to area chart
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })

    /* END AREA CHART */

    /*
     * BAR CHART
     * ---------
     */

    var bar_data = {
      data : [['Jan', 19], ['Feb', 25], ['Mar', 27], ['Apr', 28], ['May', 15], ['Jun', 6], ['Jul', 17], ['Aug', 7], ['Sep', 14], ['Oct', 24], ['Nov', 16], ['Dec', 2]],
      color: '#019ff8', borderWidth:'0.5'
    }
    $.plot('#bar-chart', [bar_data], {
      grid  : {
        borderWidth: 1,
        borderColor: '#f3f3f3',
        tickColor  : '#f3f3f3'
      },
      series: {
        bars: {
          show    : true,
          barWidth: 0.5,
		  lineWidth: 0,
		  fillColor:'#019ff8',
          align   : 'center',
        }
      },
      xaxis : {
        mode      : 'categories',
        tickLength: 0
      }
    })
    /* END BAR CHART */

    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      { label: 'Jan-Apr', data: 85, color: '#51ce8a' },
      { label: 'May-Aug', data: 68, color: '#733aeb' },
      { label: 'Sep-Dec', data: 42, color: '#f2426d' }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.3,
          label      : {
          show       : true,
          radius     : 1,
          formatter  : labelFormatter,
          threshold  : 0.1,
		  background : {opacity: 0.5,color: '#000'}
          }
        }
      },
      legend: {
        show: true
      },
	  grid: {
        hoverable: true,
        clickable: true
      }
    })
    /*
     * END DONUT CHART
     */

  })

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }


