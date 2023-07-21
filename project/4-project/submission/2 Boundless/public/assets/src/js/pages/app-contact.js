//[app contact Javascript]

//Project:	edulearn - Responsive Admin Template
//Primary use:   Used only for the Data Table

$(function () {
    "use strict";
	
		$('#example2').DataTable({
		  'paging'      : true,
		  'lengthChange': false,
		  'searching'   : false,
		  'ordering'    : true,
		  'info'        : true,
		  'autoWidth'   : false
		});
	
		$('.activity-div').slimScroll({
			height: '310px'
		});
	
		
	
  }); // End of use strict