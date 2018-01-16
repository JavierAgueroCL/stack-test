@extends('layouts.app')

@section('content')
						<div class="m-login__signin">
							<div class="m-login__head">
								<h3 class="m-login__title">
									{{ config('app.name', 'Laravel') }} - {{ __('auth.entrar') }}
								</h3>
							</div>
							<form class="m-login__form m-form login-form" action="{{ route('login') }}" method="POST">
								{{ csrf_field() }}
								<div class="form-group m-form__group">
									<input class="form-control m-input rut" type="text" maxlength="12" minlength="11" placeholder="RUT Empresa" name="rut_empresa" value="76.573.764-8" autofocus>
								</div>
								<div class="form-group m-form__group">
									<input class="form-control m-input" type="text" placeholder="Email" name="email" value="admin@admin.com">
								</div>
								<div class="form-group m-form__group {{ $errors->has('password') ? ' has-error' : '' }}">
									<input class="form-control m-input m-login__form-input--last" type="password" placeholder="Contraseña" value="admin" name="password">
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
						<script>toastr.error('{{ $errors->first('email') }}', 'Error de autenticación!');</script>
						@endif
@endsection
