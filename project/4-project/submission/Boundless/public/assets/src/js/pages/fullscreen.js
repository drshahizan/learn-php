//[custom Javascript]

//Project:	edulearn - Responsive Admin Template
//Primary use:	edulearn - Responsive Admin Template

//should be included in all pages. It controls some layout



// Fullscreen
$(function () {
	'use strict'
		$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

		if (!screenfull.enabled) {
			return false;
		}

		$('#request').on('click', function () {
			screenfull.request($('#container')[0]);
			// Does not require jQuery. Can be used like this too:
			// screenfull.request(document.getElementById('container'));
		});

		$('#exit').on('click', function () {
			screenfull.exit();
		});

		$('#toggle').on('click', function () {
			screenfull.toggle($('#container')[0]);
		});

		$('#request2').on('click', function () {
			screenfull.request();
		});

		$('#demo-img').on('click', function () {
			screenfull.toggle(this);
		});

		$('[data-provide~="boxfull"]').on('click', function () {
			screenfull.toggle($('.box')[0]);
		});
		
		$('[data-provide~="fullscreen"]').on('click', function () {
			screenfull.toggle($('#container')[0]);
		});
	
		var selector = '[data-provide~="boxfull"]';
		var selector = '[data-provide~="fullscreen"]';

		$(selector).each(function(){
		  $(this).data('fullscreen-default-html', $(this).html());
		});

		document.addEventListener(screenfull.raw.fullscreenchange, function() {
		  if (screenfull.isFullscreen) {
			$(selector).each(function(){
			  $(this).addClass('is-fullscreen')
			});
		  }
		  else {
			$(selector).each(function(){
			  $(this).removeClass('is-fullscreen')
			});
		  }
		});

	
		function fullscreenchange() {
			var elem = screenfull.element;

			$('#status').text('Is fullscreen: ' + screenfull.isFullscreen);

			if (elem) {
				$('#element').text('Element: ' + elem.localName + (elem.id ? '#' + elem.id : ''));
			}

			if (!screenfull.isFullscreen) {
				$('#external-iframe').remove();
				document.body.style.overflow = 'auto';
			}
		}

		screenfull.on('change', fullscreenchange);

		// Set the initial values
		fullscreenchange();
}); // End of use strict