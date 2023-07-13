<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!-- Favicons -->
		<link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
		<link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
		<title>Be Boundless</title>
		<!-- Vendors Style-->
		<link rel="stylesheet" href="{{ asset('assets/src/css/vendors_css.css') }}">
		<!-- Style-->
		<link rel="stylesheet" href="{{ asset('assets/src/css/style.css') }}">
		<link rel="stylesheet" href="{{ asset('assets/src/css/skin_color.css') }}">
		<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://unpkg.com/css-skeletons@1.0.3/css/css-skeletons.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	</head>

	<style>
		.unity {
			max-width: 170%;
			margin-left: -9px;
			margin-right: -5px;
		}

		.eduhub {
			margin-left: 15px;
		}

		.treeview menu-open {
			display: none;
		}

		.light-skin .sidebar-menu>li>.treeview-menu {
			padding-left: 6%;
		}

		#treeview-menu-visible {
			margin-left: 14px;
		}

		.main-sidebar .sidebar-menu .active {
			color: #019ff8 !important;
			/* color:blue !important; */
		}

		/* custom progres bar */
		.custom-progress {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 0.3em !important;
			z-index: 9999;
			background-color: #F2F2F2;
		}

		.custom-progress-bar {
			background-color: #819FF7;
			background-color: blue;
			width: 0%;
			height: 0.3em;
			border-radius: 3px;
		}

		.custom-percent {
			position: absolute;
			display: inline-block;
			top: 3px;
			left: 48%;
		}

		/* bootstrap select */
		.bootstrap-select .hidden {
			display: none;
		}

		.bootstrap-select div.dropdown-menu.open {
			overflow: hidden;
		}

		.bootstrap-select ul.dropdown-menu.inner {
			max-height: 20em !important;
			overflow-y: auto;
		}

		/* cke editor */
		.ck-editor__editable_inline {
			min-height: 20em;
		}
	</style>

	<div class='custom-progress'>
		<div class='custom-progress-bar' id='custom-progress-bar1'></div>
		<div class='custom-percent' id='custom-percent1'></div>
		<input type="hidden" id="custom_progress_width" value="0">
	</div>

	<body class="hold-transition light-skin sidebar-mini theme-primary fixed sidebar-collapse">

		<div class="wrapper">
			<div id="loader"></div>

			<header class="main-header">
				<div class="d-flex align-items-center logo-box justify-content-start">
					<!-- Logo -->
					<a href="{{ route('admin.users') }}" class="logo">
						<!-- logo-->
						<div class="logo-mini w-30">
							<span class="light-logo"><img src="{{ asset('assets/img/apple-touch-icon.png') }}" alt="logo"
									class="unity"></span>
						</div>
					</a>
				</div>
				<!-- Header Navbar -->
				<nav class="navbar navbar-static-top">
					<!-- Sidebar toggle button-->
					<div class="app-menu">
						<ul class="header-megamenu nav">
							<li class="btn-group nav-item">
								<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light ms-0"
									data-toggle-status="true" data-toggle="push-menu" role="button">
									<i data-feather="menu"></i>
								</a>
							</li>
						</ul>
					</div>

					<div class="navbar-custom-menu r-side">
                        <ul class="nav navbar-nav">
                            <!-- User Account-->
                            <li class="dropdown user user-menu">
                                <a href="#"
                                    class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent p-0 no-shadow"
                                    title="User" data-bs-toggle="modal" data-bs-target="#quick_user_toggle">
                                    <div class="d-flex pt-1 align-items-center">
                                        <div class="text-end me-10">
                                            <p class="pt-5 fs-14 mb-0 fw-700"></p>
                                            <small class="fs-10 mb-0 text-uppercase text-mute"></small>
                                        </div>
                                        <img src="{{ asset('assets/images/avatar/avatar-13.png') }}"
                                            class="avatar rounded-circle bg-primary-light h-40 w-40" alt="" />
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
				</nav>
			</header>

			<aside class="main-sidebar">
				<!-- sidebar-->
				<section class="sidebar position-relative">
					<div class="multinav">
						<div class="multinav-scroll" style="height: 97%;">
							<!-- sidebar menu-->
							<ul class="sidebar-menu" data-widget="tree">
								<li class="{{ Route::currentRouteNamed('admin.users') ? 'active' : '' }}">
									<a href="{{ route('admin.users') }}"><i data-feather="users"></i><span>User List</span></a>
								</li>
								<li class="{{ Route::currentRouteNamed('admin.culture') ? 'active' : '' }}">
									<a href="/admin/culture"><i data-feather="zap"></i><span>Cultures</span></a>
								</li>
								<li class="{{ Route::currentRouteNamed('admin.festivals') ? 'active' : '' }}">
									<a href="{{ route('admin.festivals') }}"><i data-feather="activity"></i><span>Festival And Celebrations</span></a>
								</li>
							</ul>
						</div>
					</div>
				</section>
			</aside>

			<!-- BEGIN Page Content -->
			@yield('main')
			<!-- Side panel -->
			<!-- quick_user_toggle -->
			<div class="modal modal-right fade" id="quick_user_toggle" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content slim-scroll3">
                        <div class="modal-body p-30 bg-white">
                            <div class="d-flex align-items-center justify-content-between pb-30">
                                <h4 class="m-0">User Profile
                                    <small class="text-fade fs-12 ms-5"></small>
                                </h4>
                                <a href="#" class="btn btn-icon btn-danger-light btn-sm no-shadow" data-bs-dismiss="modal">
                                    <span class="fa fa-close"></span>
                                </a>
                            </div>
                            <div>
                                <div class="d-flex flex-row">
                                    <div class=""><img src="{{ asset('assets/images/avatar/avatar-13.png') }}" alt="user"
                                            class="rounded bg-danger-light w-150" width="100"></div>
                                </div>
                            </div>
                            <div class="dropdown-divider my-30"></div>
                            <div>
                                <div class="col-sm-12 d-flex justify-content-center">
                                    <a href="" type="button"
                                        class="waves-effect waves-light btn btn-secondary btn-rounded mb-5" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        <i class="mdi mdi-logout"></i>{{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                            <div class="dropdown-divider my-30"></div>
                        </div>
                    </div>
                </div>
            </div>
			<!-- /quick_user_toggle -->

			<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
			<div class="control-sidebar-bg"></div>

		</div>
		<!-- ./wrapper -->
		<!-- Page Content overlay -->
		<!-- Vendor JS -->
		<script src="{{ asset('assets/src/js/vendors.min.js') }}"></script>
		<script src="{{ asset('assets/src/js/pages/chat-popup.js') }}"></script>
		<script src="{{ asset('assets/assets/icons/feather-icons/feather.min.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_components/moment/min/moment.min.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_components/full-calendar/moment.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_components/full-calendar/fullcalendar.min.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_components/OwlCarousel2/dist/owl.carousel.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_components/nestable/jquery.nestable.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_components/select2/dist/js/select2.full.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_plugins/input-mask/jquery.inputmask.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_plugins/iCheck/icheck.min.js') }}"></script>
		<script src="{{ asset('assets/src/js/demo.js') }}"></script>
		<script src="{{ asset('assets/src/js/template.js') }}"></script>
		<script src="{{ asset('assets/src/js/pages/owl-slider.js') }}"></script>
		<script src="{{ asset('assets/src/js/pages/advanced-form-element.js') }}"></script>
		<script src="{{ asset('assets/assets/vendor_components/datatable/datatables.min.js') }}"></script>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.7/dist/loadingoverlay.min.js"></script>
		<script src="http://spp3.intds.com.my/assets/js/formplugins/select2/select2.bundle.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="{{ asset('assets/src/js/pages/component-animations-css3.js')}}"></script>
		<script>
			function clickFn(event) {
				var theme = event;
				return $.ajax({
						headers: {'X-CSRF-TOKEN':  $('meta[name="csrf-token"]').attr('content')},
						url      : "{{ url('lecturer/update/theme') }}",
						method   : 'POST',
						data 	 : {theme: theme},
						error:function(err){
							alert("Error");
							console.log(err);
						},
						success  : function(data){
						}
					});
			}
		</script>
		@yield('content')
	</body>
</html>