@extends('layouts.dashboard')

@section('content')
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
	<div class="d-flex align-items-center">
		<div class="mr-auto">
			<h3 class="m-subheader__title ">
				Dashboard
			</h3>
		</div>
	</div>
</div>
<!-- END: Subheader -->
<div class="container">
		<div class="row">
				<div class="col-md-8 col-md-offset-2">
						<div class="panel panel-default">
								<div class="panel-heading">Dashboard </div>

								<div class="panel-body">
										@if (session('status'))
												<div class="alert alert-success">
														{{ session('status') }}
												</div>
										@endif
										You are logged in!
							[<a href="{{ route('logout') }}"
								onclick="event.preventDefault();
											document.getElementById('logout-form').submit();">
								Logout
							</a>]
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
								</div>
						</div>
				</div>
		</div>
</div>
@endsection
