//[c3 charts Javascript]

//Project:	edulearn - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function () {
    "use strict";
	
	
	var t = c3.generate({
        bindto: "#line-chart",
        size: { height: 350 },
        point: { r: 4 },
        color: { pattern: ["#0bb2d4", "#17b3a3"] },
        data: {
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
            	['data2', 50, 20, 10, 40, 15, 25]
            ]
        },
        grid: { y: { show: !0, stroke: "#faa700" } }
    });
    setTimeout(function() {
        t.load({
            columns: [
                ['data1', 230, 190, 300, 500, 300, 400]
            ]
        })
    }, 1e3), setTimeout(function() {
        t.load({
            columns: [
                ['data3', 130, 150, 200, 300, 200, 100]
            ]
        })
    }, 1500), setTimeout(function() { t.unload({ ids: "data1" }) }, 2e3)
	
	 
	
    var a = c3.generate({
        bindto: "#area-chart",
        size: { height: 350 },
        point: { r: 4 },
        color: { pattern: ["#3e8ef7", "#ff4c52"] },
        data: {
            columns: [
                ['data1', 300, 350, 300, 0, 0, 0],
            	['data2', 130, 100, 140, 200, 150, 50]

            ],
            types: { data1: "area", data2: "area-spline" }
        },
        grid: { y: { show: !0 } }
    });
	
	
	
	
	var n = c3.generate({
        bindto: "#spline-chart",
        size: { height: 350 },
        point: { r: 4 },
        color: { pattern: ["#17b3a3", "#3e8ef7"] },
        data: {
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
            	['data2', 130, 100, 140, 200, 150, 50]
            ],
            type: "spline"
        },
        grid: { y: { show: !0 } }
    });
	
	

    // Callback that creates and populates a data table, instantiates the line region chart, passes in the data and draws it.
    var lineRegionChart = c3.generate({
        bindto: '#line-region',
        size: { height: 350 },
        point: {
            r: 4
        },
        color: {
            pattern: ['#0bb2d4', '#3e8ef7']
        },

        // Create the data table.
        data: {
            columns: [
                ['data1', 30, 200, 100, 400, 150, 250],
            	['data2', 50, 20, 10, 40, 15, 25]
            ],
            regions: {
                'data1': [{ 'start': 1, 'end': 2, 'style': 'dashed' }, { 'start': 3 }], // currently 'dashed' style only
                'data2': [{ 'end': 3 }]
            }
        },
        grid: {
            y: {
                show: true
            }
        }
    });
	
	
	
	
	
	
	var o = c3.generate({
        bindto: "#simple-xy",
        size: { height: 350 },
        point: { r: 4 },
        color: { pattern: ["#0bb2d4", "#17b3a3"] },
        data: {
            x: "x",
            columns: [
                ['x', 30, 50, 100, 230, 300, 310],
				['data1', 30, 200, 100, 400, 150, 250],
				['data2', 130, 300, 200, 300, 250, 450]
            ]
        },
        grid: { y: { show: !0 } }
    });
    setTimeout(function() {
        o.load({
            columns: [
                ['data1', 100, 250, 150, 200, 100, 350]
            ]
        })
    }, 1e3), setTimeout(function() {
        o.load({
            columns: [
                ['data3', 80, 150, 100, 180, 80, 150]
            ]
        })
    }, 1500), setTimeout(function() { o.unload({ ids: "data2" }) }, 2e3)
	
	
	
	
	
	
	
	
    
  });