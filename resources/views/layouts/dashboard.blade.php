<html lang="{{ app()->getLocale() }}">
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>{{ config('app.name') }} | @yield('title', 'Welcome')</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<!--begin::Web font -->
		<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js') }}"></script>
		<script>
					WebFont.load({
						google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
						active: function() {
								sessionStorage.fonts = true;
						}
					});
		</script>
		<!--end::Web font -->
				<!--begin::Base Styles -->
		<link href="{{ asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/demo/default/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/app/css/custom.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="{{ asset('assets/demo/default/media/img/logo/favicon.ico') }}" />
	</head>
	<!-- end::Head -->
	<!-- end::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
	<!-- BEGIN: Header -->
	<header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
		<div class="m-container m-container--fluid m-container--full-height">
			<div class="m-stack m-stack--ver m-stack--desktop">
				<!-- BEGIN: Brand -->
				@include('layouts.brand')
				<!-- END: Brand -->
				<div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
					<!-- BEGIN: Horizontal Menu -->
					<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
						<i class="la la-close"></i>
					</button>
					<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
						@include('layouts.header-menu')
					</div>
					<!-- END: Horizontal Menu -->
					<!-- BEGIN: Topbar -->
					<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
						@include('layouts.top-user-menu')
					</div>
					<!-- END: Topbar -->
				</div>
			</div>
		</div>
	</header>
	<!-- END: Header -->
	<!-- begin::Body -->
	<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
		<!-- BEGIN: Left Aside -->
		<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
			<i class="la la-close"></i>
		</button>
		<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
			<!-- BEGIN: Aside Menu -->
		<div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark" data-menu-vertical="true" data-menu-scrollable="false" data-menu-dropdown-timeout="500">
				@include('layouts.left-menu')
			</div>
			<!-- END: Aside Menu -->
		</div>
		<!-- END: Left Aside -->
		<div class="m-grid__item m-grid__item--fluid m-wrapper">
			@yield('content')
		</div>
	</div>
	<!-- END::Body -->
	<!-- begin::Footer -->
	<footer class="m-grid__item		m-footer ">
		<div class="m-container m-container--fluid m-container--full-height m-page__container">
			<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
				<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
					<span class="m-footer__copyright">
						2018 &copy; Desarrolado por
						<a href="#" class="m-link">
							Stack Inversiones SpA
						</a>
					</span>
				</div>
				<div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
					<ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
								<span class="m-nav__link-text">
									Acerca de
								</span>
							</a>
						</li>
						<li class="m-nav__item">
							<a href="#"  class="m-nav__link">
								<span class="m-nav__link-text">
									Política de uso
								</span>
							</a>
						</li>
						<li class="m-nav__item">
							<a href="#" class="m-nav__link">
								<span class="m-nav__link-text">
									<span class="m-badge m-badge--brand m-badge--wide">
										Subir Plan
									</span>
								</span>
							</a>
						</li>
						<li class="m-nav__item m-nav__item">
							<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Soporte" data-placement="left">
								<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- end::Footer -->
</div>
<!-- end:: Page -->
<!-- begin::Quick Sidebar -->
		<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
			@include('layouts.quick-sidebar')
		</div>
		<!-- end::Quick Sidebar -->
			<!-- begin::Scroll Top -->
		<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->
		<ul class="m-nav-sticky" style="margin-top: 30px;">
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
				<a href="">
					<i class="la la-eye"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
				<a href="" >
					<i class="la la-comments-o"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
				<a href="#" target="_blank">
					<i class="la la-cart-arrow-down"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
				<a href="#" target="_blank">
					<i class="la la-code-fork"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
				<a href="#" target="_blank">
					<i class="la la-life-ring"></i>
				</a>
			</li>
		</ul>
		<!-- begin::Quick Nav -->
			<!--begin::Base Scripts -->
		<script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
		<!--end::Base Scripts -->
		<!--begin::Page Vendors -->
		<script src="{{ asset('assets/vendors/custom/fullcalendar/fullcalendar.bundle.js') }}" type="text/javascript"></script>
		<!--end::Page Vendors -->
		<!--begin::Page Snippets -->
		<script src="{{ asset('assets/app/js/dashboard.js') }}" type="text/javascript"></script>
		@yield('scripts')
		<!--end::Page Snippets -->
	</body>
	<!-- end::Body -->
</html>
