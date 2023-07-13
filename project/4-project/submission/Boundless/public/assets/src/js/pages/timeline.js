//[Javascript]



$(function () {
    "use strict";   
		
	/**********************Scroll Animation "START"************************************/
		$(document).ready(function(){
		var $animation_elements = $('.anim');
		var $window = $(window);

		function check_if_in_view() {
		var window_height = $window.height();
		var window_top_position = $window.scrollTop();
		var window_bottom_position = (window_top_position + window_height);

		$.each($animation_elements, function() {
		var $element = $(this);
		var element_height = $element.outerHeight();
		var element_top_position = $element.offset().top;
		var element_bottom_position = (element_top_position + element_height);

		//check to see if this current container is within viewport
		if ((element_bottom_position >= window_top_position) &&
		(element_top_position <= window_bottom_position)) {
		$element.addClass('animated');
		} else {
		$element.removeClass('animated');
		}
		});
		}

		$window.on('scroll resize', check_if_in_view);
		$window.trigger('scroll');
		});
		/**********************Scroll Animation "END"************************************/

		/**********************Change color of center aligned animated content small Circle  "START"************************************/
		$(document).ready(function(){
			$(" .debits").hover(function(){
				$(" .center-right").css("background-color", "#4997cd");
				}, function(){
				$(" .center-right").css("background-color", "#fff");
			}); 
		});
		$(document).ready(function(){
			$(".credits").hover(function(){
				$(".center-left").css("background-color", "#4997cd");
				}, function(){
				$(".center-left").css("background-color", "#fff");
			}); 
		});
		/**********************Change color of center aligned animated content small Circle  "END"************************************/
	
  }); // End of use strict