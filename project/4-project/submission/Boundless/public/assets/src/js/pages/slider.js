//[Javascript]



$(function () {
    "use strict";   
		
	/* BOOTSTRAP SLIDER */
		$('.slider').slider()
	
	
	/* flexslider SLIDER */
		$('.flexslider').flexslider({
			animation: "slide"
		  });
		  $('.flexslider2').flexslider({
			animation: "slide",
			controlNav: "thumbnails"
		  });
	/* owl-carousel SLIDER */
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			autoplay: true,
			responsive: {
			  0: {
				items: 1,
				nav: false
			  },
			  600: {
				items: 3,
				nav: false
			  },
			  1000: {
				items: 4,
				nav: true,
				margin: 20
			  }
			}
		});
	
  }); // End of use strict