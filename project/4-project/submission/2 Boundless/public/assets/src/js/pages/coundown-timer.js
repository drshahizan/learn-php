//[timer contact Javascript]

//Project:	edulearn - Responsive Admin Template

$(function () {
    "use strict";

    
		// set the date we're counting down to
		var target_date = new Date('Jan, 31, 2022').getTime();

		// variables for time units
		var days, hours, minutes, seconds;

		// get tag element
		var countdown = document.getElementById('countdown');

		// update the tag with id "countdown" every 1 second
		setInterval(function () {

			// find the amount of "seconds" between now and target
			var current_date = new Date().getTime();
			var seconds_left = (target_date - current_date) / 1000;

			// do some time calculations
			days = parseInt(seconds_left / 86400);
			seconds_left = seconds_left % 86400;

			hours = parseInt(seconds_left / 3600);
			seconds_left = seconds_left % 3600;

			minutes = parseInt(seconds_left / 60);
			seconds = parseInt(seconds_left % 60);

			// format countdown string + set tag value
			countdown.innerHTML = '<div class="days timer col mb-30"> <div class="bg-gray-300 p-15 rounded">' + days +  ' <div class="text">Days</div></div></div> <div class="hours timer col mb-30"> <div class="bg-gray-300 p-15 rounded">' + hours + ' <div class="text">Hours</div></div></div> <div class="minutes timer col mb-30"> <div class="bg-gray-300 p-15 rounded">' + minutes + ' <div class="text">Minutes</div></div></div> <div class="seconds timer col mb-30"> <div class="bg-gray-300 p-15 rounded">' + seconds + ' <div class="text">Seconds</div></div></div>';  

		}, 1000);
	
  }); // End of use strict


$(function () {
    "use strict";

    
		// set the date we're counting down to
		var target_date = new Date('Jan, 31, 2022').getTime();

		// variables for time units
		var days, hours, minutes, seconds;

		// get tag element
		var countdown = document.getElementById('countdown-dark');

		// update the tag with id "countdown" every 1 second
		setInterval(function () {

			// find the amount of "seconds" between now and target
			var current_date = new Date().getTime();
			var seconds_left = (target_date - current_date) / 1000;

			// do some time calculations
			days = parseInt(seconds_left / 86400);
			seconds_left = seconds_left % 86400;

			hours = parseInt(seconds_left / 3600);
			seconds_left = seconds_left % 3600;

			minutes = parseInt(seconds_left / 60);
			seconds = parseInt(seconds_left % 60);

			// format countdown string + set tag value
			countdown.innerHTML = '<div class="days timer col mb-30"> <div class="bg-gray-800 p-15 rounded">' + days +  ' <div class="text">Days</div></div></div> <div class="hours timer col mb-30"> <div class="bg-gray-800 p-15 rounded">' + hours + ' <div class="text">Hours</div></div></div> <div class="minutes timer col mb-30"> <div class="bg-gray-800 p-15 rounded">' + minutes + ' <div class="text">Minutes</div></div></div> <div class="seconds timer col mb-30"> <div class="bg-gray-800 p-15 rounded">' + seconds + ' <div class="text">Seconds</div></div></div>';  

		}, 1000);
	
  }); // End of use strict