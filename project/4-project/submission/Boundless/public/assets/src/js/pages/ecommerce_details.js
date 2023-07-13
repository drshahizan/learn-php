//[app Javascript]


$(function () {
    "use strict";    
		
	 $('.icolors li').on("click", function() {
            $('.icolors li').removeClass('active');
            $(this).addClass('active');
        });

        $('.photos-item').on("click", function() {
            var src = $(this).children().attr('src');
            $('#product-image').attr('src', src);
            $('.photos-item').removeClass('item-active');
            $(this).addClass('item-active');
        });	
	
  }); // End of use strict