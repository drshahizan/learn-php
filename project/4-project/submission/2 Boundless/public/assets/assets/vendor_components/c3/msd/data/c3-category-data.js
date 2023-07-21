/*************************************************************************************/
// -->Template Name: Bootstrap Press Admin
// -->Author: Themedesigner
// -->Email: niravjoshi87@gmail.com
// -->File: c3_chart_JS
/*************************************************************************************/
$(function() {
    var o = c3.generate({
        bindto: "#category-data",
        size: { height: 400 },
        color: { pattern: ["#4fc3f7", "#2962FF"] },
        data: {
            x: "x",
            columns: [
                ["x", "www.site1.com", "www.site2.com", "www.site3.com", "www.site4.com"],
                ["complete", 400, 200, 100, 40],
                ["remaining", 190, 100, 140, 90]
            ],
            groups: [
                ["complete", "remaining"]
            ],
            type: "bar"
        },
        axis: { x: { type: "category" } },
        grid: { y: { show: !0 } }
    });
    setTimeout(function() {
        o.load({
            columns: [
                ["x", "www.siteA.com", "www.siteB.com", "www.siteC.com", "www.siteD.com"],
                ["complete", 350, 200, 150, 150],
                ["remaining", 190, 150, 290, 140]
            ]
        })
    }, 1e3), setTimeout(function() {
        o.load({
            columns: [
                ["x", "www.siteE.com", "www.siteF.com", "www.siteG.com"],
                ["complete", 30, 300, 290],
                ["remaining", 90, 230, 240]
            ]
        })
    }, 2e3), setTimeout(function() {
        o.load({
            columns: [
                ["x", "www.site1.com", "www.site2.com", "www.site3.com", "www.site4.com"],
                ["complete", 130, 350, 200, 470],
                ["remaining", 190, 130, 140, 340]
            ]
        })
    }, 3e3), setTimeout(function() {
        o.load({
            columns: [
                ["complete", 30, 130, 100, 170],
                ["remaining", 190, 30, 140, 40]
            ]
        })
    }, 4e3), setTimeout(function() { o.load({ url: "../c3_string_x.csv" }) }, 5e3)
});