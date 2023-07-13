//[widget morris charts Javascript]

//Project:	edulearn - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function () {
    "use strict";

    Morris.Area({
        element: 'area-chart',
        data: [{
            period: '2010',
            data1: 525,
            data2: 852,
            data3: 225
        }, {
            period: '2011',
            data1: 635,
            data2: 505,
            data3: 185
        }, {
            period: '2012',
            data1: 385,
            data2: 465,
            data3: 375
        }, {
            period: '2013',
            data1: 575,
            data2: 205,
            data3: 545
        }, {
            period: '2014',
            data1: 785,
            data2: 355,
            data3: 545
        }, {
            period: '2015',
            data1: 810,
            data2: 405,
            data3: 285
        },
         {
            period: '2016',
            data1: 855,
            data2: 555,
            data3: 305
        }],
        xkey: 'period',
        ykeys: ['data1', 'data2', 'data3'],
        labels: ['Data 1', 'Data 2', 'Data 3'],
        pointSize: 3,
        fillOpacity: 0,
        pointStrokeColors:['#019ff8', '#51ce8a', '#733aeb'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 3,
        hideHover: 'auto',
        lineColors: ['#019ff8', '#51ce8a', '#733aeb'],
        resize: true
        
    });

Morris.Area({
        element: 'area-chart2',
        data: [{
            period: '2013',
            data1: 0,
            data2: 0,
            
        }, {
            period: '2014',
            data1: 435,
            data2: 185,
            
        }, {
            period: '2015',
            data1: 185,
            data2: 165,
            
        }, {
            period: '2016',
            data1: 275,
            data2: 205,
            
        }, {
            period: '2017',
            data1: 585,
            data2: 455,
            
        }, {
            period: '2018',
            data1: 310,
            data2: 295,
            
        },
         {
            period: '2019',
            data1: 355,
            data2: 255,
           
        }],
        xkey: 'period',
        ykeys: ['data1', 'data2'],
        labels: ['Data 1', 'Data 2'],
        pointSize: 0,
        fillOpacity: 0.4,
        pointStrokeColors:['#f2426d', '#019ff8'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 0,
        smooth: false,
        hideHover: 'auto',
        lineColors: ['#f2426d', '#019ff8'],
        resize: true
        
    });


// LINE CHART
        var line = new Morris.Line({
          element: 'line-chart',
          resize: true,
          data: [
            {y: '2016 Q1', data1: 1234},
            {y: '2016 Q2', data1: 4125},
            {y: '2016 Q3', data1: 3254},
            {y: '2016 Q4', data1: 5214},
            {y: '2017 Q1', data1: 1523},
            {y: '2017 Q2', data1: 8542},
            {y: '2017 Q3', data1: 4126},
            {y: '2017 Q4', data1: 7412},
            {y: '2018 Q1', data1: 9542},
            {y: '2018 Q2', data1: 6521}
          ],
          xkey: 'y',
          ykeys: ['data1'],
          labels: ['Data 1'],
          gridLineColor: '#eef0f2',
          lineColors: ['#019ff8'],
          lineWidth: 5,
          hideHover: 'auto'
        });
 // donut chart
        
    Morris.Donut({
        element: 'donut-chart',
        data: [{
            label: "Online Sales",
            value: 38,

        }, {
            label: "In-Store Sales",
            value: 32
        }, {
            label: "Retail Sales",
            value: 30
        }],
        resize: true,
        colors:['#51ce8a', '#019ff8', '#f2426d']
    });

// bar chart
    Morris.Bar({
        element: 'bar-chart',
        data: [{
            y: '2012',
            a: 405,
            b: 295,
            c: 265
        }, {
            y: '2013',
            a: 840,
            b: 720,
            c: 245
        }, {
            y: '2014',
            a: 455,
            b: 445,
            c: 235
        }, {
            y: '2015',
            a: 680,
            b: 750,
            c: 345
        }, {
            y: '2016',
            a: 585,
            b: 435,
            c: 235
        }, {
            y: '2017',
            a: 880,
            b: 730,
            c: 245
        }, {
            y: '2018',
            a: 905,
            b: 495,
            c: 245
        }],
        xkey: 'y',
        ykeys: ['a', 'b', 'c'],
        labels: ['A', 'B', 'C'],
        barColors:['#fec801', '#019ff8', '#51ce8a'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true
    });
// area chart
 Morris.Area({
        element: 'area-chart3',
        data: [{
                    period: '2013',
                    data1: 0,
                    data2: 0,
                    data3: 0
                }, {
                    period: '2014',
                    data1: 55,
                    data2: 20,
                    data3: 10
                }, {
                    period: '2015',
                    data1: 25,
                    data2: 55,
                    data3: 70
                }, {
                    period: '2016',
                    data1: 65,
                    data2: 17,
                    data3: 12
                }, {
                    period: '2017',
                    data1: 35,
                    data2: 25,
                    data3: 125
                }, {
                    period: '2018',
                    data1: 30,
                    data2: 85,
                    data3: 45
                }, {
                    period: '2019',
                    data1: 15,
                    data2: 15,
                    data3: 15
                }


                ],
                lineColors: ['#019ff8', '#f2426d', '#fec801'],
                xkey: 'period',
                ykeys: ['data1', 'data2', 'data3'],
                labels: ['Data 1', 'Data 2', 'Data 3'],
                pointSize: 0,
                lineWidth: 0,
                resize:true,
                fillOpacity: 0.8,
                behaveLikeLine: true,
                gridLineColor: '#e0e0e0',
                hideHover: 'auto'
        
    });
	
	
  });