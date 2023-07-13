	
	@extends('template')
	
	@section('main')
	
	<link rel="stylesheet" media="screen, print" href="{{ asset('assets/src/css/font-awesome.min.css') }}">
	<link rel="stylesheet" media="screen, print" href="{{ asset('assets/src/css/mdb.css') }}">
	<link rel="stylesheet" media="screen, print" href="{{ asset('assets/src/css/notifications/toastr/toastr.css') }}">
	
	<style>
		#Modal_User
		{
			z-index: 9999999 !important;
		}
		#Modal_Usertype
		{
			z-index: 9999999 !important;
		}
		#Modal_Userstatus
		{
			z-index: 9999999 !important;
		}
	</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	<div class="container-full">
	  <!-- Content Header (Page header) -->	  
	  <div class="content-header">
		  <div class="d-flex align-items-center">
			  <div class="me-auto">
				  <h4 class="page-title">Institutions</h4>
				  <div class="d-inline-block align-items-center">
					  <nav>
						  <ol class="breadcrumb">
							  <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
							  <li class="breadcrumb-item active" aria-current="page">Institutions</li>
						  </ol>
					  </nav>
				  </div>
			  </div>
			  
		  </div>
	  </div>

	  <!-- Main content -->
	  <section class="content">
		<div class="row">
			<div class="col-xl-12">
				<div id="panel-1" class="panel" data-panel-close="" data-panel-locked="" data-panel-refresh="" data-panel-reset="" data-panel-custombutton="" data-panel-color="">
					<div class="panel-hdr bg-info-700 bg-success-gradient">
						<h2>
							User Setting
						</h2>
					</div>
					<div class="panel-container show">
						<div class="panel-content">
							<div class="row">
								<div class="col-auto">
									<div class="nav flex-column nav-pills" id="myTab" role="tablist" aria-orientation="vertical">
										<a class="nav-link {{ $data['sub']  == 'user' ? 'active' : 'active' }}" id="v-pills-user-tab" controller="getuser" table-data="table_user" data-toggle="pill" href="#v-pills-user" role="tab" aria-controls="v-pills-user" aria-selected="true">
											<i class="fal fa-users"></i>
											<span class="hidden-sm-down ml-1"> User Account</span>
										</a>
										<a class="nav-link {{ $data['sub']  == 'usertype' ? 'active' : '' }}" id="v-pills-usertype-tab" controller="getusertype" table-data="table_usertype" data-toggle="pill" href="#v-pills-usertype" role="tab" aria-controls="v-pills-usertype" aria-selected="false">
											<i class="fal fa-users-cog"></i>
											<span class="hidden-sm-down ml-1"> User Type</span>
										</a>
										<a class="nav-link {{ $data['sub']  == 'userstatus' ? 'active' : '' }}" id="v-pills-userstatus-tab" controller="getuserstatus" table-data="table_userstatus" data-toggle="pill" href="#v-pills-userstatus" role="tab" aria-controls="v-pills-userstatus" aria-selected="false">
											<i class="fal fa-user-check"></i>
											<span class="hidden-sm-down ml-1"> User Status</span>
										</a>
									</div>
								</div>
								<div class="col">
									<div class="tab-content" id="v-pills-tabContent">
										<div class="tab-pane fade {{ $data['sub']  == 'user' ? 'active show' : '' }}" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
											
										</div>
										<div class="tab-pane fade {{ $data['sub']  == 'usertype' ? 'active show' : '' }}" id="v-pills-usertype" role="tabpanel" aria-labelledby="v-pills-usertype-tab">
											
										</div>
										<div class="tab-pane fade {{ $data['sub']  == 'userstatus' ? 'active show' : '' }}" id="v-pills-userstatus" role="tabpanel" aria-labelledby="v-pills-userstatus-tab">
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Modal User Data-->
	<div class="modal fade" id="Modal_User" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog  modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-success-600 bg-success-gradient white-text text-center">
					<h4 class="modal-title w-100" style="font-size: 25px;" id="modaljudul_user">
						Add User
					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><i class="fal fa-times"></i></span>
					</button>
				</div>
				<form id="myform_user" action="{{ url('admin/useradd') }}" method="POST" enctype="multipart/form-data" oninput='confirm_password.setCustomValidity(confirm_password.value != password.value ? "Passwords do not match." : "")'>
                    <div class="modal-body">
                        <input type="hidden" id="typeform" class="typeform" name="typeform" value="new">	 
                        <input type="hidden" id="idrecord" class="idrecord" name="ID" value="">		
                        @csrf
                        <div class="panel-content">
							<div class="form-row">
								<div class="col mb-3">
									<label class="form-label">Login Name</label>
									<input type="text" class="form-control" name="loginid" value="" maxlength="100" required>
								</div>
								<div class="col mb-3">
									<label class="form-label">Email</label>
									<input type="email" class="form-control" name="email" value="" maxlength="100" required>
								</div>
								
							</div>
							<div class="form-row">
								<div class="col mb-3">
									<label class="form-label">User Access Level</label>
									<select class="select2 form-control w-100" id="optionlevel" name="usertypeid">
									@foreach($data['accesslevel'] as $row)
										<option accesslevelcode="{{ $row->usertypecode }}" value="{{ $row->id }}">{{ $row->usertypename }}</option>
									@endforeach	
									</select>
								</div>
								<div class="col mb-3">
									<label class="form-label">Status</label>
									<select class="select2 form-control w-100" id="optionstatus" name="status">
									@foreach($data['userstatus'] as $row)
										<option value="{{ $row->id }}">{{ $row->statusname }}</option>
									@endforeach	
									</select>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-3 mb-3">
									<label class="form-label">Password</label>
									<input type="password" class="form-control" name="password" value="" maxlength="200" required>
								</div>
								<div class="col-md-3 mb-3">
									<label class="form-label">Confirm Password</label>
									<input type="password" class="form-control" name="confirm_password" value="" maxlength="200" required>
								</div>
								<div class="col-md-3 mb-3">
									<label for="img">Select Profile Image:</label>
									 <div class="input-group">
									  <div class="custom-file">
										<input type="file" class="custom-file-input" name="fileupload"  id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
										<label class="custom-file-label" for="inputGroupFile01" id="labelfile">Choose file</label>
									  </div>
									</div>
								</div>
								<div class="col mt-2 ml-5 mb-3">
									<div class="pos-relative d-inline-block">
										<div class="avatar avatar-xxl"><img src="{{ asset('assets/upload/profile/nopic.png') }}" id="blah" class="profile-image rounded-circle" alt=""></div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal User Type Data-->
	<div class="modal fade" id="Modal_Usertype" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-success-600 bg-success-gradient white-text text-center">
					<h4 class="modal-title w-100" style="font-size: 25px;" id="modaljudul_usertype">
						Add User Type
					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><i class="fal fa-times"></i></span>
					</button>
				</div>
				<form id="myform_usertype" action="{{ url('admin/usertypeadd') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" id="typeform" class="typeform" name="typeform" value="new">	 
                        <input type="hidden" id="idrecord" class="idrecord" name="ID" value="">		
                        @csrf
                        <div class="panel-content">
							<div class="form-row">
								<div class="col mb-3">
									<label class="form-label">User Type Code</label>
									<input type="text" class="form-control" name="usertypecode" value="" maxlength="10" required>
								</div>
							</div>
							<div class="form-row">
								<div class="col mb-3">
									<label class="form-label">User Type Name</label>
									<input type="text" class="form-control" name="usertypename" value="" maxlength="50" required>
								</div>
							</div>
						</div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal User Status Data-->
	<div class="modal fade" id="Modal_Userstatus" tabindex="-1" role="dialog" aria-hidden="true" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-success-600 bg-success-gradient white-text text-center">
					<h4 class="modal-title w-100" style="font-size: 25px;" id="modaljudul_userstatus">
						Add User Status
					</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true"><i class="fal fa-times"></i></span>
					</button>
				</div>
				<form id="myform_userstatus" action="{{ url('admin/userstatusadd') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input type="hidden" id="typeform" class="typeform" name="typeform" value="new">	 
                        <input type="hidden" id="idrecord" class="idrecord" name="ID" value="">		
                        @csrf
                        <div class="panel-content">
							<div class="form-row">
								<div class="col mb-3">
									<label class="form-label">User Status Code</label>
									<input type="text" class="form-control" name="statuscode" value="" maxlength="10" required>
								</div>
							</div>
							<div class="form-row">
								<div class="col mb-3">
									<label class="form-label">User Status Name</label>
									<input type="text" class="form-control" name="statusname" value="" maxlength="50" required>
								</div>
							</div>
						</div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
				</form>
			</div>
		</div>
	</div>

	<script src="{{ asset('assets/src/js/dependency/moment/moment.js') }}"></script>
	<script src="{{ asset('assets/src/js/loadingoverlay.min.js') }}"></script>

	
	<script src="{{ asset('assets/src/js/notifications/toastr/toastr.js') }}"></script>

	<script type = "text/javascript">
	
/*
	function EditData_User(id) {

		$("#modaljudul_user").text("Update User");
		$('#myform_user')[0].reset();
		$("#v-pills-tabContent").LoadingOverlay("show");
		
		$.ajax({
				url      : '{{ url('admin/userview') }}/' + id,
				type     : 'get',
				dataType : 'json',
				success  : function(data)
                {
				    $.each(data, function(i, row){
						
							 $('.typeform').val('edit');
							 $('.idrecord').val(row.id);
							 
							 $('#blah').attr("src", "{{ asset('assets/upload/profile') }}/" + row.ImageStore);
							 
							 $("#optionlevel").val(row.usertypeid).find("option[value=" + row.usertypeid +"]").attr('selected', 'selected');
							 $('#optionlevel').trigger('change');
							 
							 $("#optionstatus").val(row.status).find("option[value=" + row.status +"]").attr('selected', 'selected');
							 $('#optionstatus').trigger('change');
							 
							 $('input[name="loginid"]').val(row.loginid);
							 $('input[name="email"]').val(row.email);

							 $('input[name="password"]').val(row.password);
							 $('input[name="confirm_password"]').val(row.password);
							 
							 $("#v-pills-tabContent").LoadingOverlay("hide");
							 
							 $('#Modal_User').modal('show');
				    });	
			    }
			}
		);
	}

	function EditData_Usertype(id) {

		$("#modaljudul_usertype").text("Update User Type");
		$('#myform_usertype')[0].reset();
		$("#v-pills-tabContent").LoadingOverlay("show");
		
		$.ajax({
				url      : '{{ url('admin/usertypeview') }}/' + id,
				type     : 'get',
				dataType : 'json',
				success  : function(data){
					$.each(data, function(i, row){
						
						$('.typeform').val('edit');
						$('.idrecord').val(row.id);
						 
						$('input[name="usertypecode"]').val(row.usertypecode);
						$('input[name="usertypename"]').val(row.usertypename);

						$("#v-pills-tabContent").LoadingOverlay("hide");
							 
						$('#Modal_Usertype').modal('show');
					});
						
				}
			}
		);
	}


	function EditData_Userstatus(id) {
		
		$("#modaljudul_userstatus").text("Update User Status");
		$('#myform_userstatus')[0].reset();
		$("#v-pills-tabContent").LoadingOverlay("show");
		
		$.ajax({
				url      : '{{ url('admin/userstatusview') }}/' + id,
				type     : 'get',
				dataType : 'json',
				success  : function(data){
					
					$.each(data, function(i, row){
						
						$('.typeform').val('edit');
						$('.idrecord').val(row.id);
							 
						$('input[name="statuscode"]').val(row.statuscode);
						$('input[name="statusname"]').val(row.statusname);

						$("#v-pills-tabContent").LoadingOverlay("hide");
							 
						$('#Modal_Userstatus').modal('show');
						});
						
					}
				}
		);
	}


	function DeleteData(id, controller, redirectpage) 
    {
		
		var url = '{{ url('admin') }}' + '/' + controller + '/' + id;
		var urlredirect = '{{ url('admin/user') }}' + '/' + redirectpage;
		
		Swal.fire(
		{
			title: "Are you sure?",
			text: "You won't be able to revert this!",
			type: "warning",
			showCancelButton: true,
			confirmButtonText: "Yes, delete it!"
		}).then(function(result)
		{
			if (result.value)
			{
				$.ajax(
                {
					url      : url,
					type     : 'get',
					dataType : 'json',
					success  : function(data){
						window.location.href = urlredirect;
					}
				});
			}
		});
	}
*/
	function CreateTable(divid) {
		
		if ( divid == 'table_user' ) {
			var w_table 		= [0,8];
			var export_table 	= [ 0,2,3,4,5,6,7 ];
		} else {
			var w_table 		= [0,3];
			var export_table 	= [ 0,1,2 ];
		}
		
		if ( $.fn.DataTable.isDataTable( '#' + divid ) ) {
			return false;
		}

		/* init datatables */
		
		$('#' + divid).dataTable(
		{
			responsive: true,
			columnDefs: [
				{ "width": "8%", "targets": w_table }
			  ],
			dom:
				/* --- Layout Structure 
					--- Options
					l	-	length changing input control
					f	-	filtering input
					t	-	The table!
					i	-	Table information summary
					p	-	pagination control
					r	-	processing display element
					B	-	buttons
					R	-	ColReorder
					S	-	Select

					--- Markup
					< and >				- div element
					<"class" and >		- div with a class
					<"#id" and >		- div with an ID
					<"#id.class" and >	- div with an ID and a class

					--- Further reading
					https://datatables.net/reference/option/dom
					--------------------------------------
				*/
				"<'row mb-3'<'col-sm-6 col-md-3 d-flex align-items-center justify-content-start'f><'col-sm-12 col-md-3 d-flex align-items-center justify-content-start'l><'col-sm-12 col-md-6 d-flex align-items-center justify-content-end'B>>" +
				"<'row'<'col-sm-12'tr>>" +
				"<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
			buttons: [
				{
					text: '<i class="fal fa-plus mr-1"></i> Add New',
					attr:  {
						title: 'addrecord',
						id: 'addrecord_' + divid
					},
					name: 'add',
					className: 'btn-success btn-sm mr-1'
				},
				{
					extend: 'excelHtml5',
					text: 'Excel',
					titleAttr: 'Generate Excel',
					className: 'btn-outline-success btn-sm mr-1',
					exportOptions: {
						columns: export_table
					}
				}
			]
		});
		
		$('#' + divid).on( 'page.dt', function () {
			var table = $('#' + divid).DataTable();
			table.responsive.recalc();
		});
		
		$('[data-toggle="tooltip"]').tooltip();
		
	}

	function GetData(controller,divtable,divtab) {
		console.log("ASD");
		if ( $.fn.DataTable.isDataTable( '#' + divtable ) ) {
			$('#' + divtable).DataTable().responsive.recalc();
			return false;
		}
		
		$("#v-pills-tabContent").LoadingOverlay("show");
		$('#' + divtab).html('');
		
		var url = '{{ url('admin') }}' + '/' + controller;
		
		$.ajax({
			url      : url,
			type     : 'get',
			success  : function(data){
				$('#' + divtab).html(data);
				CreateTable(divtable);
				$("#v-pills-tabContent").LoadingOverlay("hide");
				console.log(data);
			}
		});
		
	}
	
	
	'use strict';

	/*
	;( function ( document, window, index )
	{
		var inputs = document.querySelectorAll( '.custom-file-input' );
		Array.prototype.forEach.call( inputs, function( input )
		{
			var label	 = input.nextElementSibling,
				labelVal = label.innerHTML;

			input.addEventListener( 'change', function( e )
			{
				var fileName = '';
				if( this.files && this.files.length > 1 )
					fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
				else
					fileName = e.target.value.split( '\\' ).pop();

				if( fileName )
					label.innerHTML = fileName;
				else
					label.innerHTML = labelVal;
			});

			// Firefox bug fix
			input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
			input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
		});
	}( document, window, 0 ));

	
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			
			reader.onload = function (e) {
				$('#blah').attr('src', e.target.result);
			}
			
			reader.readAsDataURL(input.files[0]);
		}
	}
	
	$("#inputGroupFile01").change(function(){
		readURL(this);
	});
	*/

	$(document).ready(function() {
		console.log("start");
		toastr.options = {
			"success" : "ASD",
			"closeButton": true,
			"debug": false,
			"newestOnTop": true,
			"progressBar": true,
			"positionClass": "toast-top-right",
			"preventDuplicates": true,
			"onclick": null,
			"showDuration": 300,
			"hideDuration": 100,
			"timeOut": 3000,
			"extendedTimeOut": 1000,
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		};
		
		@if ($message = Session::get('success'))
			toastr.success('{{ $message }}');
		@endif
		
		@if ($message = Session::get('error'))
			toastr.error('{{ $message }}');
		@endif
		
		$('.select2').select2({
			dropdownParent: $('#Modal_User')
		});	
		
		$('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
			var controller 	= $(e.target).attr('controller');
			var table_data 	= $(e.target).attr('table-data');
			var divtab 		= $(e.target).attr('href');
			divtab			= divtab.substring(1);
			GetData(controller,table_data,divtab);
		});

		@if ($data['sub']  == 'user')
			GetData('getuser','table_user','v-pills-user');
		@elseif ($data['sub']  == 'usertype')
			GetData('getusertype','table_usertype','v-pills-usertype');
		@elseif ($data['sub']  == 'userstatus')
			GetData('getuserstatus','table_userstatus','v-pills-userstatus');
		@else
			GetData('getuser','table_user','v-pills-user');
		@endif

		/*
		$(document).on('click', '#addrecord_table_user', function(){
			$("#modaljudul_user").text("Add User");
			$('#myform_user')[0].reset();
			$('.typeform').val('new');
			$('#Modal_User').modal('show');
			
		});
		$(document).on('click', '#addrecord_table_usertype', function(){
			$("#modaljudul_usertype").text("Add User Type");
			$('#myform_usertype')[0].reset();
			$('.typeform').val('new');
			$('#Modal_Usertype').modal('show');
		});
		$(document).on('click', '#addrecord_table_userstatus', function(){
			$("#modaljudul_userstatus").text("Add User Status");
			$('#myform_userstatus')[0].reset();
			$('.typeform').val('new');
			$('#Modal_Userstatus').modal('show');
		});
		*/
	});
	
</script>	

	
@stop