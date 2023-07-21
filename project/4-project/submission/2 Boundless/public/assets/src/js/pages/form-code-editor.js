//[Javascript]



$(function () {
    "use strict";   

		var editor = ace.edit("editorJS");
		editor.setTheme("ace/theme/iplastic");
		editor.getSession().setMode("ace/mode/javascript");

		var editor = ace.edit("editorHTML");
		editor.setTheme("ace/theme/kuroir");
		editor.getSession().setMode("ace/mode/html");

		var editor = ace.edit("editorCSS");
		editor.setTheme("ace/theme/sqlserver");
		editor.getSession().setMode("ace/mode/css");
	
  }); // End of use strict