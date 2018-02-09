<!DOCTYPE html>
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
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700","Asap+Condensed:500"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
        <!--begin::Page Vendors -->
		<!--end::Page Vendors -->
    <link href="{{ asset('assets/vendors/base/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/demo/demo8/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/app/css/custom.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="{{ asset('assets/demo/default/media/img/logo/favicon.ico') }}" />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body style="background-image: url({{ asset('assets/app/media/img/bg/bg-7.jpg') }}"  class="m-page--fluid m-page--loading-enabled m-page--loading m-header--fixed m-header--fixed-mobile m-footer--push m-aside--offcanvas-default"  >
		<!-- begin::Page loader -->
		<div class="m-page-loader m-page-loader--base">
			<div class="m-blockui">
				<span>
					Please wait...
				</span>
				<span>
					<div class="m-loader m-loader--brand"></div>
				</span>
			</div>
		</div>
		<!-- end::Page Loader -->
    	<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- begin::Header -->
			<header class="m-grid__item		m-header "  data-minimize="minimize" data-minimize-mobile="minimize" data-minimize-offset="10" data-minimize-mobile-offset="10" >
				<div class="m-header__top">
					<div class="m-container m-container--fluid m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<!-- begin::Brand -->
							@include('layouts.brand')
							<!-- end::Brand -->
              <!-- begin::Topbar -->
							<div class="m-stack__item m-stack__item--right m-header-head" id="m_header_nav">
								<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
									<div class="m-stack__item m-topbar__nav-wrapper">
										<ul class="m-topbar__nav m-nav m-nav--inline">
											<li class="m-nav__item m-topbar__notifications m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" data-dropdown-toggle="click" data-dropdown-persistent="true">
												@include('layouts.notificaciones')
											</li>
											<li class="m-nav__item m-topbar__quick-actions m-dropdown m-dropdown--skin-light m-dropdown--large m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  data-dropdown-toggle="click">
												@include('layouts.acciones-rapidas')
											</li>
											<li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
												<a href="#" class="m-nav__link m-dropdown__toggle">
													<span class="m-topbar__userpic">
														<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
													</span>
													<span class="m-nav__link-icon m-topbar__usericon  m--hide">
														<span class="m-nav__link-icon-wrapper">
															<i class="flaticon-user-ok"></i>
														</span>
													</span>
													<span class="m-topbar__username m--hide">
														Nick
													</span>
												</a>
												<div class="m-dropdown__wrapper">
													<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
													<div class="m-dropdown__inner">
														<div class="m-dropdown__header m--align-center">
															<div class="m-card-user m-card-user--skin-light">
																<div class="m-card-user__pic">
																	<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
																</div>
																<div class="m-card-user__details">
																	<span class="m-card-user__name m--font-weight-500">
																		Mark Andre
																	</span>
																	<a href="" class="m-card-user__email m--font-weight-300 m-link">
																		mark.andre@gmail.com
																	</a>
																</div>
															</div>
														</div>
														<div class="m-dropdown__body">
															<div class="m-dropdown__content">
																<ul class="m-nav m-nav--skin-light">
																	<li class="m-nav__section m--hide">
																		<span class="m-nav__section-text">
																			Section
																		</span>
																	</li>
																	<li class="m-nav__item">
																		<a href="profile.html" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-profile-1"></i>
																			<span class="m-nav__link-title">
																				<span class="m-nav__link-wrap">
																					<span class="m-nav__link-text">
																						My Profile
																					</span>
																					<span class="m-nav__link-badge">
																						<span class="m-badge m-badge--success">
																							2
																						</span>
																					</span>
																				</span>
																			</span>
																		</a>
																	</li>
																	<li class="m-nav__item">
																		<a href="profile.html" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-share"></i>
																			<span class="m-nav__link-text">
																				Activity
																			</span>
																		</a>
																	</li>
																	<li class="m-nav__item">
																		<a href="profile.html" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-chat-1"></i>
																			<span class="m-nav__link-text">
																				Messages
																			</span>
																		</a>
																	</li>
																	<li class="m-nav__separator m-nav__separator--fit"></li>
																	<li class="m-nav__item">
																		<a href="profile.html" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-info"></i>
																			<span class="m-nav__link-text">
																				FAQ
																			</span>
																		</a>
																	</li>
																	<li class="m-nav__item">
																		<a href="profile.html" class="m-nav__link">
																			<i class="m-nav__link-icon flaticon-lifebuoy"></i>
																			<span class="m-nav__link-text">
																				Support
																			</span>
																		</a>
																	</li>
																	<li class="m-nav__separator m-nav__separator--fit"></li>
																	<li class="m-nav__item">
																		<a href="snippets/pages/user/login-1.html" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
																			Logout
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</li>
											<li id="m_quick_sidebar_toggle" class="m-nav__item">
												<a href="#" class="m-nav__link m-dropdown__toggle">
													<span class="m-nav__link-icon m-nav__link-icon-alt">
														<span class="m-nav__link-icon-wrapper">
															<i class="flaticon-grid-menu"></i>
														</span>
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- end::Topbar -->
						</div>
					</div>
				</div>
				<div class="m-header__bottom">
					<div class="m-container m-container--fluid m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<!-- begin::Horizontal Menu -->
							<div class="m-stack__item m-stack__item--fluid m-header-menu-wrapper">
								<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
									<i class="la la-close"></i>
								</button>
								<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
									<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
										<li class="m-menu__item  m-menu__item--active  m-menu__item--active-tab  m-menu__item--submenu m-menu__item--tabs"  data-menu-submenu-toggle="tab" aria-haspopup="true">
											<a  href="index.html" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">
													Dashboard
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-support"></i>
															<span class="m-menu__link-text">
																Dashboard
															</span>
														</a>
													</li>
													<li class="m-menu__item  m-menu__item--active "  aria-haspopup="true">
														<a  href="index.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-file"></i>
															<span class="m-menu__link-text">
																Reports
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-coins"></i>
															<span class="m-menu__link-text">
																Finance
															</span>
														</a>
													</li>
													<li class="m-menu__item  m-menu__item--submenu m-menu__item--submenu-tabs"  data-menu-submenu-toggle="click" aria-haspopup="true">
														<a  href="#" class="m-menu__link m-menu__toggle">
															<i class="m-menu__link-icon flaticon-users"></i>
															<span class="m-menu__link-text">
																Customers
															</span>
															<i class="m-menu__hor-arrow la la-angle-down"></i>
															<i class="m-menu__ver-arrow la la-angle-right"></i>
														</a>
														<div class="m-menu__submenu  m-menu__submenu--fixed-xl m-menu__submenu--center" >
															<span class="m-menu__arrow m-menu__arrow--adjust"></span>
															<div class="m-menu__subnav">
																<ul class="m-menu__content">
																	<li class="m-menu__item">
																		<h3 class="m-menu__heading m-menu__toggle">
																			<span class="m-menu__link-text">
																				Finance Reports
																			</span>
																			<i class="m-menu__ver-arrow la la-angle-right"></i>
																		</h3>
																		<ul class="m-menu__inner">
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-map"></i>
																					<span class="m-menu__link-text">
																						Annual Reports
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-user"></i>
																					<span class="m-menu__link-text">
																						HR Reports
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-clipboard"></i>
																					<span class="m-menu__link-text">
																						IPO Reports
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-graphic-1"></i>
																					<span class="m-menu__link-text">
																						Finance Margins
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-graphic-2"></i>
																					<span class="m-menu__link-text">
																						Revenue Reports
																					</span>
																				</a>
																			</li>
																		</ul>
																	</li>
																	<li class="m-menu__item">
																		<h3 class="m-menu__heading m-menu__toggle">
																			<span class="m-menu__link-text">
																				Project Reports
																			</span>
																			<i class="m-menu__ver-arrow la la-angle-right"></i>
																		</h3>
																		<ul class="m-menu__inner">
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--line">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Coca Cola CRM
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--line">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Delta Airlines Booking Site
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--line">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Malibu Accounting
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--line">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Vineseed Website Rewamp
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--line">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Zircon Mobile App
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--line">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Mercury CMS
																					</span>
																				</a>
																			</li>
																		</ul>
																	</li>
																	<li class="m-menu__item">
																		<h3 class="m-menu__heading m-menu__toggle">
																			<span class="m-menu__link-text">
																				HR Reports
																			</span>
																			<i class="m-menu__ver-arrow la la-angle-right"></i>
																		</h3>
																		<ul class="m-menu__inner">
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Staff Directory
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Client Directory
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Salary Reports
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Staff Payslips
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Corporate Expenses
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--dot">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Project Expenses
																					</span>
																				</a>
																			</li>
																		</ul>
																	</li>
																	<li class="m-menu__item">
																		<h3 class="m-menu__heading m-menu__toggle">
																			<span class="m-menu__link-text">
																				Reporting Apps
																			</span>
																			<i class="m-menu__ver-arrow la la-angle-right"></i>
																		</h3>
																		<ul class="m-menu__inner">
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Report Adjusments
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Sources & Mediums
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Reporting Settings
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Conversions
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Report Flows
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Audit & Logs
																					</span>
																				</a>
																			</li>
																		</ul>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel m-menu__item--submenu-tabs"  data-menu-submenu-toggle="click" aria-haspopup="true">
														<a  href="#" class="m-menu__link m-menu__toggle">
															<i class="m-menu__link-icon flaticon-add"></i>
															<span class="m-menu__link-text">
																Actions
															</span>
															<i class="m-menu__hor-arrow la la-angle-down"></i>
															<i class="m-menu__ver-arrow la la-angle-right"></i>
														</a>
														<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
															<span class="m-menu__arrow m-menu__arrow--adjust"></span>
															<ul class="m-menu__subnav">
																<li class="m-menu__item "  aria-haspopup="true">
																	<a  href="inner2.html" class="m-menu__link ">
																		<i class="m-menu__link-icon flaticon-diagram"></i>
																		<span class="m-menu__link-title">
																			<span class="m-menu__link-wrap">
																				<span class="m-menu__link-text">
																					Generate Reports
																				</span>
																				<span class="m-menu__link-badge">
																					<span class="m-badge m-badge--success">
																						2
																					</span>
																				</span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
																	<a  href="#" class="m-menu__link m-menu__toggle">
																		<i class="m-menu__link-icon flaticon-business"></i>
																		<span class="m-menu__link-text">
																			Manage Orders
																		</span>
																		<i class="m-menu__hor-arrow la la-angle-right"></i>
																		<i class="m-menu__ver-arrow la la-angle-right"></i>
																	</a>
																	<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
																		<span class="m-menu__arrow "></span>
																		<ul class="m-menu__subnav">
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Latest Orders
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Pending Orders
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Processed Orders
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Delivery Reports
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Payments
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Customers
																					</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
																	<a  href="#" class="m-menu__link m-menu__toggle">
																		<i class="m-menu__link-icon flaticon-chat-1"></i>
																		<span class="m-menu__link-text">
																			Customer Feedbacks
																		</span>
																		<i class="m-menu__hor-arrow la la-angle-right"></i>
																		<i class="m-menu__ver-arrow la la-angle-right"></i>
																	</a>
																	<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
																		<span class="m-menu__arrow "></span>
																		<ul class="m-menu__subnav">
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Customer Feedbacks
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Supplier Feedbacks
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Reviewed Feedbacks
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Resolved Feedbacks
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<span class="m-menu__link-text">
																						Feedback Reports
																					</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																	<a  href="inner2.html" class="m-menu__link ">
																		<i class="m-menu__link-icon flaticon-users"></i>
																		<span class="m-menu__link-text">
																			Register Member
																		</span>
																	</a>
																</li>
															</ul>
														</div>
													</li>
													<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel m-menu__item--submenu-tabs"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
														<a  href="#" class="m-menu__link m-menu__toggle">
															<i class="m-menu__link-icon flaticon-line-graph"></i>
															<span class="m-menu__link-text">
																Reports
															</span>
															<i class="m-menu__hor-arrow la la-angle-down"></i>
															<i class="m-menu__ver-arrow la la-angle-right"></i>
														</a>
														<div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:600px">
															<span class="m-menu__arrow m-menu__arrow--adjust"></span>
															<div class="m-menu__subnav">
																<ul class="m-menu__content">
																	<li class="m-menu__item">
																		<h3 class="m-menu__heading m-menu__toggle">
																			<span class="m-menu__link-text">
																				Finance Reports
																			</span>
																			<i class="m-menu__ver-arrow la la-angle-right"></i>
																		</h3>
																		<ul class="m-menu__inner">
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-map"></i>
																					<span class="m-menu__link-text">
																						Annual Reports
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-user"></i>
																					<span class="m-menu__link-text">
																						HR Reports
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-clipboard"></i>
																					<span class="m-menu__link-text">
																						IPO Reports
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-graphic-1"></i>
																					<span class="m-menu__link-text">
																						Finance Margins
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-graphic-2"></i>
																					<span class="m-menu__link-text">
																						Revenue Reports
																					</span>
																				</a>
																			</li>
																		</ul>
																	</li>
																	<li class="m-menu__item">
																		<h3 class="m-menu__heading m-menu__toggle">
																			<span class="m-menu__link-text">
																				Project Reports
																			</span>
																			<i class="m-menu__ver-arrow la la-angle-right"></i>
																		</h3>
																		<ul class="m-menu__inner">
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--line">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Coca Cola CRM
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--line">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Delta Airlines Booking Site
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--line">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Malibu Accounting
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--line">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Vineseed Website Rewamp
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--line">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Zircon Mobile App
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-bullet m-menu__link-bullet--line">
																						<span></span>
																					</i>
																					<span class="m-menu__link-text">
																						Mercury CMS
																					</span>
																				</a>
																			</li>
																		</ul>
																	</li>
																</ul>
															</div>
														</div>
													</li>
													<li class="m-menu__item  m-menu__item--submenu m-menu__item--rel m-menu__item--more m-menu__item--submenu-tabs m-menu__item--icon-only"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
														<a  href="#" class="m-menu__link m-menu__toggle">
															<i class="m-menu__link-icon flaticon-more-v3"></i>
															<span class="m-menu__link-text"></span>
														</a>
														<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--pull">
															<span class="m-menu__arrow m-menu__arrow--adjust"></span>
															<ul class="m-menu__subnav">
																<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																	<a  href="inner2.html" class="m-menu__link ">
																		<i class="m-menu__link-icon flaticon-business"></i>
																		<span class="m-menu__link-text">
																			eCommerce
																		</span>
																	</a>
																</li>
																<li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
																	<a  href="crud/datatable_v1.html" class="m-menu__link m-menu__toggle">
																		<i class="m-menu__link-icon flaticon-computer"></i>
																		<span class="m-menu__link-text">
																			Audience
																		</span>
																		<i class="m-menu__hor-arrow la la-angle-right"></i>
																		<i class="m-menu__ver-arrow la la-angle-right"></i>
																	</a>
																	<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
																		<span class="m-menu__arrow "></span>
																		<ul class="m-menu__subnav">
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-users"></i>
																					<span class="m-menu__link-text">
																						Active Users
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-interface-1"></i>
																					<span class="m-menu__link-text">
																						User Explorer
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-lifebuoy"></i>
																					<span class="m-menu__link-text">
																						Users Flows
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-graphic-1"></i>
																					<span class="m-menu__link-text">
																						Market Segments
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-graphic"></i>
																					<span class="m-menu__link-text">
																						User Reports
																					</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
																<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																	<a  href="inner2.html" class="m-menu__link ">
																		<i class="m-menu__link-icon flaticon-map"></i>
																		<span class="m-menu__link-text">
																			Marketing
																		</span>
																	</a>
																</li>
																<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																	<a  href="inner2.html" class="m-menu__link ">
																		<i class="m-menu__link-icon flaticon-graphic-2"></i>
																		<span class="m-menu__link-title">
																			<span class="m-menu__link-wrap">
																				<span class="m-menu__link-text">
																					Campaigns
																				</span>
																				<span class="m-menu__link-badge">
																					<span class="m-badge m-badge--success">
																						3
																					</span>
																				</span>
																			</span>
																		</span>
																	</a>
																</li>
																<li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
																	<a  href="#" class="m-menu__link m-menu__toggle">
																		<i class="m-menu__link-icon flaticon-infinity"></i>
																		<span class="m-menu__link-text">
																			Cloud Manager
																		</span>
																		<i class="m-menu__hor-arrow la la-angle-right"></i>
																		<i class="m-menu__ver-arrow la la-angle-right"></i>
																	</a>
																	<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
																		<span class="m-menu__arrow "></span>
																		<ul class="m-menu__subnav">
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-add"></i>
																					<span class="m-menu__link-title">
																						<span class="m-menu__link-wrap">
																							<span class="m-menu__link-text">
																								File Upload
																							</span>
																							<span class="m-menu__link-badge">
																								<span class="m-badge m-badge--danger">
																									3
																								</span>
																							</span>
																						</span>
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-signs-1"></i>
																					<span class="m-menu__link-text">
																						File Attributes
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-folder"></i>
																					<span class="m-menu__link-text">
																						Folders
																					</span>
																				</a>
																			</li>
																			<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
																				<a  href="inner2.html" class="m-menu__link ">
																					<i class="m-menu__link-icon flaticon-cogwheel-2"></i>
																					<span class="m-menu__link-text">
																						System Settings
																					</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>
															</ul>
														</div>
													</li>
													<li class="m-menu__item  m-menu__item--actions"  aria-haspopup="true">
														<div class="m-menu__link m-menu__link--toggle-skip">
															<a href="#" class="btn btn-focus m-btn m-btn--icon m-btn--pill">
																<span>
																	<i class="la la-plus"></i>
																	<span>
																		New order
																	</span>
																</span>
															</a>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--tabs"  data-menu-submenu-toggle="tab" aria-haspopup="true">
											<a  href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">
													Accounting
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-graphic-2"></i>
															<span class="m-menu__link-text">
																Revenue
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-analytics"></i>
															<span class="m-menu__link-text">
																Bills
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-notes"></i>
															<span class="m-menu__link-text">
																IPO
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-clipboard"></i>
															<span class="m-menu__link-text">
																Tax Management
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-alarm-1"></i>
															<span class="m-menu__link-text">
																Invoices
															</span>
														</a>
													</li>
													<li class="m-menu__item  m-menu__item--actions"  aria-haspopup="true">
														<div class="m-menu__link m-menu__link--toggle-skip">
															<a href="#" class="btn btn-danger m-btn m-btn--icon m-btn--pill">
																<span>
																	<i class="la la-cloud-download"></i>
																	<span>
																		Generate report
																	</span>
																</span>
															</a>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--tabs"  data-menu-submenu-toggle="tab" aria-haspopup="true">
											<a  href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">
													Reports
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-graphic-2"></i>
															<span class="m-menu__link-text">
																Orders
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-analytics"></i>
															<span class="m-menu__link-text">
																Customers
															</span>
														</a>
													</li>
													<li class="m-menu__item "  aria-haspopup="true">
														<a  href="inner.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-notes"></i>
															<span class="m-menu__link-text">
																Revenue
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-clipboard"></i>
															<span class="m-menu__link-text">
																Invoices
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-alarm-1"></i>
															<span class="m-menu__link-text">
																Bills
															</span>
														</a>
													</li>
													<li class="m-menu__item  m-menu__item--actions"  aria-haspopup="true">
														<div class="m-menu__link m-menu__link--toggle-skip">
															<div class="dropdown">
																<a href="#" class="btn btn-primary m-btn m-btn--icon m-btn--pill m-btn--air   dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	<i class="la la-cloud-download"></i>
																	&nbsp;&nbsp;Export
																</a>
																<div class="dropdown-menu dropdown-menu-right">
																	<a class="dropdown-item" href="#">
																		<i class="flaticon-share"></i>
																		Action
																	</a>
																	<a class="dropdown-item" href="#">
																		<i class="flaticon-settings"></i>
																		Another action
																	</a>
																	<a class="dropdown-item" href="#">
																		<i class="flaticon-graphic-2"></i>
																		Something else
																	</a>
																</div>
															</div>
														</div>
													</li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--tabs"  data-menu-submenu-toggle="tab" aria-haspopup="true">
											<a  href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">
													Orders
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-graphic-2"></i>
															<span class="m-menu__link-text">
																Pending
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-analytics"></i>
															<span class="m-menu__link-text">
																Delivered
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-notes"></i>
															<span class="m-menu__link-text">
																Canceled
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-clipboard"></i>
															<span class="m-menu__link-text">
																Customer Care
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-alarm-1"></i>
															<span class="m-menu__link-text">
																Payments
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--tabs"  data-menu-submenu-toggle="tab" aria-haspopup="true">
											<a  href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">
													Customers
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="inner.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-settings-1"></i>
															<span class="m-menu__link-text">
																Orders
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="inner.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-imac"></i>
															<span class="m-menu__link-text">
																Feedbacks
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="inner.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-paper-plane"></i>
															<span class="m-menu__link-text">
																Customer Support
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="inner2.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-multimedia"></i>
															<span class="m-menu__link-text">
																Statistics
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--tabs"  data-menu-submenu-toggle="tab" aria-haspopup="true">
											<a  href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">
													Tools
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="inner.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-settings-1"></i>
															<span class="m-menu__link-text">
																Build Tools
															</span>
														</a>
													</li>
													<li class="m-menu__item "  aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-imac"></i>
															<span class="m-menu__link-text">
																Layout Builder
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="inner.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-paper-plane"></i>
															<span class="m-menu__link-text">
																Documentatiion
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="inner2.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-multimedia"></i>
															<span class="m-menu__link-text">
																Reviews
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- end::Horizontal Menu -->
						</div>
					</div>
				</div>
			</header>
			<!-- end::Header -->
		  <!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
          @yield('content')
				</div>
			</div>
			<!-- end::Body -->
      <!-- begin::Footer -->
			<footer class="m-grid__item m-footer ">
				<div class="m-container m-container--fluid m-container--full-height m-page__container">
					<div class="m-footer__wrapper">
						<div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
							<div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
								<span class="m-footer__copyright">
									2018 &copy; Desarrolado por
									<a href="https://railstack.cl" class="m-link">
										RailStack Digital Development
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
												Privacidad
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												Términos y condiciones
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="#" class="m-nav__link">
											<span class="m-nav__link-text">
												Subir plan
											</span>
										</a>
									</li>
									<li class="m-nav__item">
										<a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Centro de Ayuda" data-placement="left">
											<i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- end::Footer -->
		</div>
		<!-- end:: Page -->
    <!-- begin::Quick Sidebar -->
		<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
			@include('layouts.configuracion')
		</div>
		<!-- end::Quick Sidebar -->
	    <!-- begin::Scroll Top -->
		<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->
		<!-- begin::Quick Nav -->
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
				<a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">
					<i class="la la-cart-arrow-down"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
				<a href="https://keenthemes.com/metronic/documentation.html" target="_blank">
					<i class="la la-code-fork"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
				<a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank">
					<i class="la la-life-ring"></i>
				</a>
			</li>
		</ul>
		<!-- begin::Quick Nav -->
    <!--begin::Base Scripts -->
		<script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/demo/demo8/base/scripts.bundle.js') }}" type="text/javascript"></script>
		<!--end::Base Scripts -->
    <!--begin::Page Snippets -->
		@yield('scripts')
		<!--end::Page Snippets -->
    <!-- begin::Page Loader -->
		<script>
            $(window).on('load', function() {
                $('body').removeClass('m-page--loading');
            });
		</script>

		<!-- end::Page Loader -->
	</body>
	<!-- end::Body -->
</html>
