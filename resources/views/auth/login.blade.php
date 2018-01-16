<html lang="{{ app()->getLocale() }}">
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>{{ config('app.name') }}</title>
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
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="{{ asset('assets/demo/default/media/img/logo/favicon.ico') }}" />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url({{ asset('assets/app/media/img//bg/bg-1.jpg') }});">
				<div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
					<div class="m-login__container">
						<div class="m-login__logo">
							<a href="#">
								<img src="{{ asset('assets/app/media/img//logos/logo-1.png') }}">
							</a>
						</div>
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">
									{{ config('app.name', 'Laravel') }} - {{ __('auth.entrar') }}
								</h3>
							</div>
							<form class="m-login__form m-form" action="{{ route('login') }}" method="POST">
								{{ csrf_field() }}
								<div class="form-group m-form__group">
									<input class="form-control m-input"   type="text" placeholder="RUT Empresa" name="rut_empresa" autofocus>
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input"   type="text" placeholder="Email" name="email" >
								</div>
								<div class="form-group m-form__group {{ $errors->has('password') ? ' has-error' : '' }}">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Contraseña" name="password">
								</div>
								<div class="row m-login__form-sub">
									<div class="col m--align-left m-login__form-left">
										<label class="m-checkbox  m-checkbox--light">
											<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
											Recordarme
											<span></span>
										</label>
									</div>
									<div class="col m--align-right m-login__form-right">
										<a href="{{ route('password.request') }}"  class="m-link">
											¿Olvidó la contraseña?
										</a>
									</div>
								</div>
								<div class="m-login__form-action">
									<button id="m_login_signin_submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">
										{{ __('auth.entrar') }}
									</button>
								</div>
							</form>
						</div>
						<div class="m-login__account">
							<span class="m-login__account-msg">
								¿Aún no tiene cuenta?
							</span>
							&nbsp;&nbsp;
							<a href="#" class="m-link m-link--light m-login__account-link">
								Registrese
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end:: Page -->
    	<!--begin::Base Scripts -->
		<script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
		<!--end::Base Scripts -->
      <!--begin::Page Snippets -->
		<script src="{{ asset('assets/app/js/NinjaRut.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('assets/snippets/pages/user/login.js') }}" type="text/javascript"></script>
		<!--end::Page Snippets -->
		@if ($errors->has('email'))
			<script>toastr.error('{{ $errors->first('email') }}', 'Error de autenticación!')</script>
		@endif
	</body>
	<!-- end::Body -->
</html>
