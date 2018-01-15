<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Admin Template">
	<meta name="keywords" content="admin dashboard, admin, flat, flat ui, ui kit, app, web app, responsive">
	<link rel="shortcut icon" href="img/ico/favicon.png">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Base Styles -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style-responsive.css') }}" rel="stylesheet">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="{{ asset('js/html5shiv.min.js') }}"></script>
	<script src="{{ asset('js/respond.min.js') }}"></script>
	<![endif]-->


</head>

<body class="login-body">

	<div class="login-logo">
		<img src="{{ asset('img/login_logo.png') }}" alt=""/>
	</div>

	<h2 class="form-heading">Entrar</h2>
	<div class="container log-row">
	         <form class="form-horizontal form-signin" method="POST" action="{{ route('login') }}">
	           <div class="login-wrap">
	             {{ csrf_field() }}
	             <input type="text" class="form-control" placeholder="RUT Empresa" autofocus>
	             <input type="text" name="email" class="form-control" placeholder="Usuario" autofocus>
	             <div class="{{ $errors->has('password') ? ' has-error' : '' }}">
	             <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
	               @if ($errors->has('password'))
	                   <span class="help-block">
	                       <strong>{{ $errors->first('password') }}</strong>
	                   </span>
	               @endif
	             </div>

	           <button class="btn btn-lg btn-success btn-block" type="submit">ENTRAR</button>
				  <label class="checkbox-custom check-success">
	               <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="checkbox1"> <label for="checkbox1">Recordarme</label>
	               <a class="pull-right" data-toggle="modal" href="{{ route('password.request') }}">¿Olvidó la contraseña?</a>
	           </label>
	           </form>


	         <div class="registration">
	             	¿Aún no tiene cuenta?
	             <a class="" href="#">
	               Registrese
	             </a>
	         </div>

	     </div>
	</div>

	<!--jquery-1.10.2.min-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<!--Bootstrap Js-->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jrespond.min.js"></script>

	</body>
</html>
