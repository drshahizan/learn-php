//[ Javascript]

$(function () {
    "use strict";
    
		
			dragula([
				document.querySelector("#tasks-upcoming"),
				document.querySelector("#tasks-progress"),
				document.querySelector("#tasks-hold"),
				document.querySelector("#tasks-completed")
			]);
	
  }); // End of use strict