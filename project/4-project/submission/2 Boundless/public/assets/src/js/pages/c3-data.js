//[c3 charts Javascript]

//Project:	edulearn - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function () {
    "use strict";
	
	
	
	
	 var n = c3.generate({
        bindto: "#column-oriented",
        size: { height: 350 },
        color: { pattern: ['#38649f', '#389f99', '#ee1044'] },
        data: {
            columns: [
                ['data1', 30, 20, 50, 40, 60, 50],
				['data2', 200, 130, 90, 240, 130, 220],
				['data3', 300, 200, 160, 400, 250, 250]
            ]
        },
        grid: { y: { show: !0 } }
    });
	
	
	
	
	var a = c3.generate({
        bindto: "#data-color",
        size: { height: 350 },
        data: {
            columns: [
                ['data1', 30, 20, 50, 40, 60, 50],
				['data2', 200, 130, 90, 240, 130, 220],
				['data3', 300, 200, 160, 400, 250, 250]
            ],
            type: "bar",
            colors: { data1: "#38649f", data2: "#389f99" },
            color: function(a, o) { return o.id && "data3" === o.id ? d3.rgb(a).darker(o.value / 150) : a }
        },
        grid: { y: { show: !0 } }
    });
	
	
	
	var a = c3.generate({
        bindto: "#data-order",
        size: { height: 350 },
        color: { pattern: ["#2196f3", "#7f21f3", "#00bfa5", "#f32184", "#e2e023"] },
        data: {
            columns: [
                ['data1', 130, 200, 320, 400, 530, 750],
				['data2', -130, 10, 130, 200, 150, 250],
				['data3', -130, -50, -10, -200, -250, -150]
            ],
            type: "bar",
            groups: [
                ["data1", "data2", "data3"]
            ],
            order: "desc"
        },
        grid: { x: { show: !0 } }
    });
    setTimeout(function() {
        a.load({
            columns: [
                ['data4', 1200, 1300, 1450, 1600, 1520, 1820],
            ]
        })
    }, 1e3), setTimeout(function() {
        a.load({
            columns: [
                ['data5', 200, 300, 450, 600, 520, 820],
            ]
        })
    }, 2e3), setTimeout(function() {
        a.groups([
            ["data1", "data2", "data3", "data4", "data5"]
        ])
    }, 3e3)
	
	
	
	var o = c3.generate({
        bindto: "#row-oriented",
        size: { height: 350 },
        color: { pattern: ['#38649f', '#389f99', '#ee1044'] },
        data: {
            rows: [
                ['data1', 'data2', 'data3'],
				[90, 120, 300],
				[40, 160, 240],
				[50, 200, 290],
				[120, 160, 230],
				[80, 130, 300],
				[90, 220, 320],
            ]
        },
        grid: { y: { show: !0 } }
    });
	
	
	
	
	var o = c3.generate({
        bindto: "#category-data",
        size: { height: 350 },
        color: { pattern: ['#389f99', '#ee1044'] },
        data: {
            x: "x",
            columns: [
                ['x', 'www.site1.com', 'www.site2.com', 'www.site3.com', 'www.site4.com'],
				['download', 30, 200, 100, 400],
				['loading', 90, 100, 140, 200],
            ],
            groups: [
                ["download", "loading"]
            ],
            type: "bar"
        },
        axis: { x: { type: "category" } },
        grid: { y: { show: !0 } }
    });
    setTimeout(function() {
        o.load({
            columns: [
                ['x', 'www.siteA.com', 'www.siteB.com', 'www.siteC.com', 'www.siteD.com'],
				['download', 130, 200, 150, 350],
				['loading', 190, 180, 190, 140],
            ]
        })
    }, 1e3), setTimeout(function() {
        o.load({
            columns: [
                ['x', 'www.siteE.com', 'www.siteF.com', 'www.siteG.com'],
				['download', 30, 300, 200],
				['loading', 90, 130, 240],
            ]
        })
    }, 2e3), setTimeout(function() {
        o.load({
            columns: [
                ['x', 'www.site1.com', 'www.site2.com', 'www.site3.com', 'www.site4.com'],
				['download', 130, 300, 200, 470],
				['loading', 190, 130, 240, 340],
            ]
        })
    }, 3e3), setTimeout(function() {
        o.load({
            columns: [
                ['download', 30, 30, 20, 170],
            	['loading', 90, 30, 40, 40],
            ]
        })
    }, 4e3), setTimeout(function() { o.load({ url: "../c3_string_x.csv" }) }, 5e3);
	
	
	
	
    
  });