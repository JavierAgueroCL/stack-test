@extends('layouts.app')

@section('content')
	<div class="m-login__forget-password" style="display:block;">
		<div class="m-login__head">
			<h3 class="m-login__title">
				¿Olvidó su contraseña?
			</h3>
			<div class="m-login__desc">
				Ingrese su email para recuperarla.
			</div>
			@if (session('status'))
				 <div class="alert alert-success" style="margin-top: 12px; margin-bottom: -28px;">
					  {{ session('status') }}
				 </div>
			@endif
		</div>
		<form class="m-login__form m-form recuperar-contrasena" method="POST"  action="{{ route('password.email') }}">
			{{ csrf_field() }}
			<div class="form-group m-form__group {{ $errors->has('email') ? ' has-error' : '' }}">
				<input class="form-control m-input" type="email" placeholder="Email" name="email" id="m_email" autocomplete="off" value="admin@admin.com" valuex="{{ old('email') }}">
			</div>
			<div class="m-login__form-action">
				<button type="submit" id="m_login_forget_password_submit" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn m-login__btn--primary">
					Solicitar
				</button>
				&nbsp;&nbsp;
				<a href="../../" class="btn m-btn m-btn--pill m-btn--custom m-btn--air m-login__btn">
					Cancelar
				</a>
			</div>
		</form>
	</div>
	<!-- end:: Page -->
	<!--begin::Base Scripts -->
	<script src="{{ asset('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
	<!--end::Base Scripts -->
	<!--begin::Page Snippets -->
	<script src="{{ asset('assets/app/js/NinjaRut.min.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/snippets/pages/user/login.js') }}" type="text/javascript"></script>
	@if ($errors->has('email'))
		<script>toastr.error('{{ $errors->first('email') }}', 'Error de recuperación!');</script>
	@endif
@endsection
