$(function() {
    "use strict";
    // ------------------------------
    // Basic bar chart
    // ------------------------------
    // based on prepared DOM, initialize echarts instance
        var myChart = echarts.init(document.getElementById('basic-bar'));

        // specify chart configuration item and data
        var option = {
                // Setup grid
                grid: {
                    left: '1%',
                    right: '2%',
                    bottom: '3%',
                    containLabel: true
                },

                // Add Tooltip
                tooltip : {
                    trigger: 'axis'
                },

                legend: {
                    data:['Site A','Site B']
                },
                toolbox: {
                    show : true,
                    feature : {

                        magicType : {show: true, type: ['line', 'bar']},
                        restore : {show: true},
                        saveAsImage : {show: true}
                    }
                },
                color: ["#38649f", "#389f99"],
                calculable : true,
                xAxis : [
                    {
                        type : 'category',
                        data : ['Jan','Feb','Mar','Apr','May','Jun','July','Aug','Sept','Oct','Nov','Dec']
                    }
                ],
                yAxis : [
                    {
                        type : 'value'
                    }
                ],
                series : [
                    {
                        name:'Site A',
                        type:'bar',
                        data:[7.2, 5.3, 6.1, 32.1, 23.1, 89.2, 158.4, 178.1, 36.4, 22.7, 7.1, 9.4],
                        markPoint : {
                            data : [
                                {type : 'max', name: 'Max'},
                                {type : 'min', name: 'Min'}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name: 'Average'}
                            ]
                        }
                    },
                    {
                        name:'Site B',
                        type:'bar',
                        data:[19.4, 7.9, 8.9, 27.9, 24.8, 88.1, 167.8, 197.5, 47.1, 16.7, 7.1, 1.5],
                        markPoint : {
                            data : [
                                {name : 'The highest year', value : 182.2, xAxis: 7, yAxis: 183, symbolSize:18},
                                {name : 'Year minimum', value : 2.3, xAxis: 11, yAxis: 3}
                            ]
                        },
                        markLine : {
                            data : [
                                {type : 'average', name : 'Average'}
                            ]
                        }
                    }
                ]
            };
        // use configuration item and data specified to show chart
        myChart.setOption(option);
    
    
    // ------------------------------
    // Stacked bar chart
    // ------------------------------
    // based on prepared DOM, initialize echarts instance
        var stackedChart = echarts.init(document.getElementById('stacked-bar'));

        // specify chart configuration item and data
        var option = {
                // Setup grid
                grid: {
                    x: 40,
                    x2: 40,
                    y: 45,
                    y2: 25
                },

                // Add tooltip
                tooltip : {
                    trigger: 'axis',
                    axisPointer : {            // Axis indicator axis trigger effective
                        type : 'shadow'        // The default is a straight line, optionally: 'line' | 'shadow'
                    }
                },

                // Add legend
                legend: {
                    data: ['Data1', 'Data2', 'Data3', 'Data4', 'Data5']
                },

                // Add custom colors
                color: ['#689f38', '#38649f', '#389f99', '#ff8f00', '#ee1044'],

                // Horizontal axis
                xAxis: [{
                    type: 'value',
                }],

                // Vertical axis
                yAxis: [{
                    type: 'category',
                    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                }],

                // Add series
                series : [
                    {
                        name:'Data1',
                        type:'bar',
                        stack: 'Total',
                        itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                        data:[321, 269, 358, 369, 348, 312, 299]
                    },
                    {
                        name:'Data2',
                        type:'bar',
                        stack: 'Total',
                        itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                        data:[159, 147, 123, 136, 87, 199, 248]
                    },
                    {
                        name:'Data3',
                        type:'bar',
                        stack: 'Total',
                        itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                        data:[269, 248, 158, 325, 248, 279, 357]
                    },
                    {
                        name:'Data4',
                        type:'bar',
                        stack: 'Total',
                        itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                        data:[101, 198, 247, 136, 178, 388, 499]
                    },
                    {
                        name:'Data5',
                        type:'bar',
                        stack: 'Total',
                        itemStyle : { normal: {label : {show: true, position: 'insideRight'}}},
                        data:[869, 965, 975, 752, 1254, 1458, 875]
                    }
                ]
            };
        // use configuration item and data specified to show chart
        stackedChart.setOption(option);
       
    
        //***************************
       // Stacked chart
       //***************************
        
        
        //***************************
       // Stacked Area chart
       //***************************
        var stackedbarcolumnChart = echarts.init(document.getElementById('stacked-column'));
        var option = {
            
             // Setup grid
                grid: {
                    x: 40,
                    x2: 40,
                    y: 45,
                    y2: 25
                },

                // Add tooltip
                tooltip : {
                    trigger: 'axis',
                    axisPointer : {            // Axis indicator axis trigger effective
                        type : 'shadow'        // The default is a straight line, optionally: 'line' | 'shadow'
                    }
                },

                // Add legend
                legend: {
                    data: [  'Data1', 'Data2', 'Data3', 'Data4', 'Data5', 'Data7']
                },

                // Add custom colors
                color: ['#689f38', '#38649f', '#389f99', '#ff8f00', '#ee1044'],

                // Enable drag recalculate
                calculable: true,

                // Horizontal axis
                xAxis: [{
                    type: 'category',
                    data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
                }],

                // Vertical axis
                yAxis: [{
                    type: 'value',
                }],

                // Add series
                series : [
                    
                    {
                        name:'Data1',
                        type:'bar',
                        stack: 'data1',
                        data:[178, 241, 210, 147, 299, 358, 487]
                    },
                    {
                        name:'Data2',
                        type:'bar',
                        data:[875, 845, 985, 1254, 1425, 1235, 1425],
                        markLine : {
                            itemStyle:{
                                normal:{
                                    lineStyle:{
                                        type: 'dashed'
                                    }
                                }
                            },
                            data : [
                                [{type : 'min'}, {type : 'max'}]
                            ]
                        }
                    },
                    {
                        name:'Data3',
                        type:'bar',
                        barWidth : 12,
                        stack: 'data',
                        data:[654, 758, 754, 854, 1245, 1100, 1140]
                    },
                    {
                        name:'Data4',
                        type:'bar',
                        stack: 'data',
                        data:[104, 134, 125, 158, 245, 236, 278]
                    },
                    {
                        name:'Data5',
                        type:'bar',
                        stack: 'data',
                        data:[54, 123, 147, 85, 165, 158, 123]
                    },
                    {
                        name:'Data6',
                        type:'bar',
                        stack: 'data',
                        data:[21, 84, 79, 86, 135, 158, 210]
                    }
                ]
                // Add series
                
        };
        stackedbarcolumnChart.setOption(option);
        
    // ------------------------------
    // Basic line chart
    // ------------------------------
    // based on prepared DOM, initialize echarts instance
        var barbasicChart = echarts.init(document.getElementById('bar-basic'));

        var option = {

             // Setup grid
                grid: {
                    x: 60,
                    x2: 40,
                    y: 45,
                    y2: 25
                },

                // Add tooltip
                tooltip: {
                    trigger: 'axis'
                },

                // Add legend
                legend: {
                    data: ['2018', '2019']
                },

                // Add custom colors
                color: ['#ee1044', '#389f99'],

                // Horizontal axis
                xAxis: [{
                    type: 'value',
                    boundaryGap: [0, 0.01]
                }],

                // Vertical axis
                yAxis: [{
                    type: 'category',
                    data: ['Data1', 'Data2', 'Data3', 'Data4', 'Data5', 'Data6']
                }],

                // Add series
                series : [
                    {
                        name:'2018',
                        type:'bar',
                        data:[845, 542, 348, 298, 548, 398]
                    },
                    {
                        name:'2019',
                        type:'bar',
                        data:[689, 754, 498, 123, 489, 598]
                    }
                ]
        };
        // use configuration item and data specified to show chart
        barbasicChart.setOption(option);
    
    
       //------------------------------------------------------
       // Resize chart on menu width change and window resize
       //------------------------------------------------------
        $(function () {

                // Resize chart on menu width change and window resize
                $(window).on('resize', resize);
                $(".sidebartoggler").on('click', resize);

                // Resize function
                function resize() {
                    setTimeout(function() {

                        // Resize chart
                        myChart.resize();
                        stackedChart.resize();
                        stackedbarcolumnChart.resize();
                        barbasicChart.resize();
                    }, 200);
                }
            });
});