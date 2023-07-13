//[mailbox Javascript]

//Project:	edulearn - Responsive Admin Template
//Primary use:   Used only for the  mailbox


$(function () {
    "use strict";

    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".ion", this).removeClass("ion-android-checkbox-outline").addClass('ion-android-checkbox-outline-blank');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".ion", this).removeClass("ion-android-checkbox-outline-blank").addClass('ion-android-checkbox-outline');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
	
  }); // End of use strict


	
  $('.read-mail-bx').slimScroll({
    height: '350'
  });	
	
  $('.inbox-bx').slimScroll({
    height: '540'
  });	
	
  $('.contact-bx').slimScroll({
    height: '280'
  });