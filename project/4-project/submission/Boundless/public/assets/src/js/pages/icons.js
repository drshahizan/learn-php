//[Javascript]



$(function () {
    "use strict";   

			$('.code-preview').hide();
			$('.show-code').click(function (e) {
				$(this).children('.name').toggle();
				$(this).children('.code-preview').toggle();
				e.stopPropagation();
				return false;
			});	
	
  }); // End of use strict