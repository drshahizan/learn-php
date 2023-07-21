//[Javascript]



$(function () {
    "use strict";   

	var datepaginator = function() {
		return {
			init: function() {
				$("#paginator1").datepaginator(), 
				$("#paginator2").datepaginator({
					size: "large"
				}),
				$("#paginator3").datepaginator({
					size: "small"
				}), 
				$("#paginator4").datepaginator({
					onSelectedDateChanged: function(a, t) {
						alert("Selected date: " + moment(t).format("Do, MMM YYYY"))
					}
				})
			}
		}
	}();
	jQuery(document).ready(function() {
		datepaginator.init()
	}); 
	
  }); // End of use strict