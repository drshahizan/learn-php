//[c3 charts Javascript]

//Project:	edulearn - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function () {
    "use strict";
	
	var a = c3.generate({
        bindto: "#axis-rotated",
        size: { height: 350 },
        color: { pattern: ["#689f38", "#38649f"] },
        data: {
            columns: [
                ["data1", 150, 350, 190, 500, 400, 240],
                ["data2", 60, 160, 45, 60, 45, 65]
            ],
            types: { data1: "bar" }
        },
        axis: { rotated: !0 },
        grid: { y: { show: !0 } }
    });
	
	 var t = c3.generate({
        bindto: "#axis-category",
        size: { height: 350 },
        color: { pattern: ["#38649f", "#689f38"] },
        data: {
            columns: [
                ["data", 120, 350, 185, 450, 90, 158, 90, 150, 302]
            ]
        },
        axis: { x: { type: "data", categories: ["2010", "2011", "2012", "2013", "2014", "2015", "2016", "2017", "2018"] } },
        grid: { y: { show: !0 } }
    });
	
	var i = c3.generate({
        bindto: "#axis-tick-culling",
        size: { height: 350 },
        color: { pattern: ["#389f99", "#ee1044"] },
        data: {
            columns: [
                ["data", 10, 252, 125, 421, 131, 269, 45, 352, 142, 425, 125, 248, 41, 212, 154, 424, 136]
            ]
        },
        axis: { x: { type: "category", tick: { culling: { max: 10 } } } },
        grid: { y: { show: !0 } }
    });
	
	var i = c3.generate({
        bindto: "#axis-tick-fitting",
        size: { height: 350 },
        color: { pattern: ["#ff8f00", "#689f38"] },
        data: {
            x: "x",
            columns: [
                ["x", "2018-04-21", "2018-03-21", "2018-02-21", "2018-01-21", "2017-12-21", "2017-11-21", "2017-10-21"],
                ["data", 254, 512, 158, 41, 154, 548, 215]

            ]
        },
        axis: { x: { type: "timeseries", tick: { fit: !0, format: "%e %b %y" } } },
        grid: { y: { show: !0 } }
    });
	
	var t = c3.generate({
        bindto: "#axis-timezone",
        size: { height: 350 },
        color: { pattern: ["#673ab7", "#4974e0"] },
        data: {
            x: "x",
            xFormat: "%Y",
            columns: [
                	['x', '2010-12-22', '2011-12-24', '2012-12-28', '2013-12-31', '2014-01-01', '2015-01-02', '2016-01-03', '2017-01-04', '2018-01-05'],
					['x', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018'],
					['data1', 50, 250, 125, 452, 189, 269, 548, 125, 65],
					['data2', 142, 324, 245, 562, 268, 345, 412, 214, 32]

            ]
        },
        axis: { x: { type: "timeseries", localtime: !1, tick: { format: "%Y-%m-%d %H:%M:%S" } } },
        grid: { y: { show: !0 } }
    });
	
	 var o = c3.generate({
        bindto: "#y-axis",
        size: { height: 350 },
        color: { pattern: ["#2196f3", "#ef0065"] },
        data: {
            columns: [
                ["sample", 30, 200, 100, 400, 150, 2500]
            ]
        },
        axis: { y: { tick: { format: d3.format("$,") } } },
        grid: { y: { show: !0 } }
    });
	
	var n = c3.generate({
        bindto: "#range-y-axis",
        size: { height: 350 },
        color: { pattern: ["#3f51b5", "#faa700"] },
        data: {
            columns: [
                ["sample", 30, -200, 100, 300, 150, -250, 350, 150, 400, -50]
            ]
        },
        axis: { y: { max: 400, min: -400 } },
        grid: { y: { show: !0 } }
    });
	
    
  });