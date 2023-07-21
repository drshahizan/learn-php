//[editor Javascript]

//Project:	edulearn - Responsive Admin Template
//Primary use:   Used only for the wysihtml5 Editor 


//Add text editor
    $(function () {
    "use strict";
    // Replace the <textarea id="editor1"> with a CKEditor
	// instance, using default configuration.
	CKEDITOR.replace('editor1')
	//bootstrap WYSIHTML5 - text editor
	$('.textarea').wysihtml5();		
	
  });

// Class definition

ClassicEditor
.create( document.querySelector( '#editor' ) )
.catch( error => {
	console.error( error );
} );