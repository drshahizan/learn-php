//[c3 charts Javascript]

//Project:	edulearn - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function () {
    "use strict";
	
	var t = c3.generate({
        bindto: "#bar-chart",
        size: { height: 350 },
        color: { pattern: ["#689f38"] },
        data: {
            columns: [
                ["option1", 30, 200, 100, 400, 150, 250]
            ],
            type: "bar"
        },
        axis: { rotated: !0 },
        grid: { y: { show: !0 } }
    });
	
	// Callback that creates and populates a data table, instantiates the column chart, passes in the data and draws it.
    var columnChart = c3.generate({
        bindto: '#column-chart',
        size: { height: 350 },
        color: {
            pattern: ['#38649f', '#389f99', '#ee1044']
        },


        // Create the data table.
        data: {
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
            	['data2', 130, 100, 140, 200, 150, 50]
            ],
            type: 'bar'
        },
        bar: {
            width: {
                ratio: 0.9 // this makes bar width 50% of length between ticks
            }
            // or
            //width: 100 // this makes bar width 100px
        },
        grid: {
            y: {
                show: true
            }
        }
    });

    // Instantiate and draw our chart, passing in some options.
    setTimeout(function() {
        columnChart.load({
            columns: [
                ['data3', 130, -150, 200, 300, -200, 100]
            ]
        });
    }, 1000);
	
	var o = c3.generate({
        bindto: "#donut-chart",
        color: { pattern: ["#673ab7", "#4974e0", "#3db76b"] },
        data: {
            columns: [
                ['data1', 200],
            	['data2', 100],
                ['data3', 50]
            ],
            type: "donut",
            onclick: function(o, n) { console.log("onclick", o, n) },
            onmouseover: function(o, n) { console.log("onmouseover", o, n) },
            onmouseout: function(o, n) { console.log("onmouseout", o, n) }
        },
        donut: { title: "Total Data" }
    });
    setTimeout(function() {
            o.load({
                columns: [
                    ["setosa_x", 3.5, 3.0, 3.2, 3.1, 3.6, 3.9, 3.4, 3.4, 2.9, 3.1, 3.7, 3.4, 3.0, 3.0, 4.0, 4.4, 3.9, 3.5, 3.8, 3.8, 3.4, 3.7, 3.6, 3.3, 3.4, 3.0, 3.4, 3.5, 3.4, 3.2, 3.1, 3.4, 4.1, 4.2, 3.1, 3.2, 3.5, 3.6, 3.0, 3.4, 3.5, 2.3, 3.2, 3.5, 3.8, 3.0, 3.8, 3.2, 3.7, 3.3],
					["versicolor_x", 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2.0, 3.0, 2.2, 2.9, 2.9, 3.1, 3.0, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3.0, 2.8, 3.0, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3.0, 3.4, 3.1, 2.3, 3.0, 2.5, 2.6, 3.0, 2.6, 2.3, 2.7, 3.0, 2.9, 2.9, 2.5, 2.8],
					["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2]
                ]
            })
        }, 1500),
        setTimeout(function() { o.unload({ ids: "data1" }), o.unload({ ids: "data2" }), o.unload({ ids: "data3" })}, 2500)
	
	var o = c3.generate({
        bindto: "#pie-chart",
        color: { pattern: ['#38649f', '#389f99', '#ee1044'] },
        data: {
            columns: [
                ['data1', 30],
            	['data2', 130],
                ['data3', 10]
            ],
            type: "pie",
            onclick: function(o, n) { console.log("onclick", o, n) },
            onmouseover: function(o, n) { console.log("onmouseover", o, n) },
            onmouseout: function(o, n) { console.log("onmouseout", o, n) }
        }
    });
    setTimeout(function() {
        o.load({
            columns: [
                ["setosa_x", 3.5, 3.0, 3.2, 3.1, 3.6, 3.9, 3.4, 3.4, 2.9, 3.1, 3.7, 3.4, 3.0, 3.0, 4.0, 4.4, 3.9, 3.5, 3.8, 3.8, 3.4, 3.7, 3.6, 3.3, 3.4, 3.0, 3.4, 3.5, 3.4, 3.2, 3.1, 3.4, 4.1, 4.2, 3.1, 3.2, 3.5, 3.6, 3.0, 3.4, 3.5, 2.3, 3.2, 3.5, 3.8, 3.0, 3.8, 3.2, 3.7, 3.3],
				["versicolor_x", 3.2, 3.2, 3.1, 2.3, 2.8, 2.8, 3.3, 2.4, 2.9, 2.7, 2.0, 3.0, 2.2, 2.9, 2.9, 3.1, 3.0, 2.7, 2.2, 2.5, 3.2, 2.8, 2.5, 2.8, 2.9, 3.0, 2.8, 3.0, 2.9, 2.6, 2.4, 2.4, 2.7, 2.7, 3.0, 3.4, 3.1, 2.3, 3.0, 2.5, 2.6, 3.0, 2.6, 2.3, 2.7, 3.0, 2.9, 2.9, 2.5, 2.8],
				["setosa", 0.2, 0.2, 0.2, 0.2, 0.2, 0.4, 0.3, 0.2, 0.2, 0.1, 0.2, 0.2, 0.1, 0.1, 0.2, 0.4, 0.4, 0.3, 0.3, 0.3, 0.2, 0.4, 0.2, 0.5, 0.2, 0.2, 0.4, 0.2, 0.2, 0.2, 0.2, 0.4, 0.1, 0.2, 0.2, 0.2, 0.2, 0.1, 0.2, 0.2, 0.3, 0.3, 0.2, 0.6, 0.4, 0.3, 0.2, 0.2, 0.2, 0.2]
            ]
        })
    }, 1500), setTimeout(function() { o.unload({ ids: "data1" }), o.unload({ ids: "data2" }), o.unload({ ids: "data3" }) }, 2500)
	
	
	var a = c3.generate({
        bindto: "#stacked-bar",
        size: { height: 400 },
        color: { pattern: ["#689f38", "#38649f", "#389f99", "#ee1044"] },
        data: {
            columns: [
                ['data1', -30, 200, 200, 400, -150, 250],
				['data2', 130, 100, -100, 200, -150, 50],
				['data3', -230, 200, 200, -300, 250, 250]
            ],
            type: "bar",
            groups: [
                ["data1", "data2"]
            ]
        },
        grid: { y: { show: !0 } },
        axis: { rotated: !0 }
    });
    setTimeout(function() {
        a.groups([
            ["data1", "data2", "data3"]
        ])
    }, 1e3), setTimeout(function() {
        a.load({
            columns: [
                ['data4', 100, -50, 150, 200, -300, -100]
            ]
        })
    }, 1500), setTimeout(function() {
        a.groups([
            ["data1", "data2", "data3", "data4"]
        ])
    }, 2e3)
	
	
	// Callback that creates and populates a data table, instantiates the stacked column chart, passes in the data and draws it.
    var stackedColumnChart = c3.generate({
        bindto: '#stacked-column',
        size: { height: 400 },
        color: {
            pattern: ['#673ab7', '#4974e0', '#3db76b', '#ec407a']
        },

        // Create the data table.
        data: {
            columns: [
                ['data1', -30, 200, 200, 400, -150, 250],
				['data2', 130, 100, -100, 200, -150, 50],
				['data3', -230, 200, 200, -300, 250, 250]
            ],
            type: 'bar',
            groups: [
                ["data1", "data2"]
            ]
        },
        grid: {
            y: {
                show: true
            }
        },
    });

    // Instantiate and draw our chart, passing in some options.
    setTimeout(function() {
        stackedColumnChart.groups([
            ["data1", "data2", "data3"]
        ]);
    }, 1000);

    setTimeout(function() {
        stackedColumnChart.load({
            columns: [
                ['data4', 100, -50, 150, 200, -300, -100]
            ]
        });
    }, 1500);

    setTimeout(function() {
        stackedColumnChart.groups([
            ["data1", "data2", "data3", "data4"]
        ]);
    }, 2000);
	
    
  });