//[c3 charts Javascript]

//Project:	edulearn - Responsive Admin Template
//Primary use:   Used only for the morris charts


$(function() {
    var t = c3.generate({
        bindto: "#step-chart",
        size: { height: 350 },
        color: { pattern: ["#2962FF", "#4fc3f7"] },
        data: {
            columns: [
                ['data1', 300, 350, 300, 0, 0, 100],
            	['data2', 130, 100, 140, 200, 150, 50]
            ],
            types: { data1: "step", data2: "area-step" }
        },
        grid: { y: { show: !0 } }
    });
});