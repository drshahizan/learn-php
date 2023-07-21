//[custom Javascript]

//Project:	edulearn - Responsive Admin Template
//Primary use:	edulearn - Responsive Admin Template

//should be included in all pages. It controls some layout



+function ($) {
  'use strict'

  // Click to select
    $(document).on('click', '.media[data-provide~="selectable"], .media-list[data-provide~="selectable"] .media:not(.media-list-header):not(.media-list-footer)', function(){
      var input = $(this).find('input');
      input.prop('checked', !input.prop("checked"));

      if ( input.prop("checked") ) {
        $(this).addClass('active');
      }
      else {
        $(this).removeClass('active');
      }
    });  
  
}(jQuery) // End of use strict


