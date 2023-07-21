// peity

$(function () {
  'use strict';
	
	// pie chart
	$("span.pie").peity("pie");
	
	
	// line chart
	$("span.line1").peity("line", {
	  fill: ["#f3f5f6"],
	  stroke: ["#0bb2d4"],
	  height: 32,
	  width: 120,
	});
	
	$("span.line2").peity("line", {
	  fill: ["#17b3a3"],
	  stroke: ["#17b3a3"],
	  height: 64,
	  width: 250,
	});
	
	$("span.line3").peity("line", {
	  fill: ["transparent"],
	  stroke: ["#ff4c52"],
	  height: 96,
	  width: 250,
	});
	
	
	// donut chart
	$('.donut').peity('donut');
	
	
	// bar chart
	$(".bar").peity("bar");
	
	
	// updatingChart chart
	var updatingChart = $(".updating-chart").peity("line", { 
		height: 96,
	    width: 250, 
		fill: ["#eeeeee"],
	    stroke: ["#17b3a3"],
	});

	setInterval(function() {
	  var random = Math.round(Math.random() * 10);
	  var values = updatingChart.text().split(",");
	  values.shift();
	  values.push(random);

	  updatingChart
		.text(values.join(","))
		.change();
	}, 1000);
	
});// End of use strict
