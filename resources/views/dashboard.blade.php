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
<div class="m-content">
	asdas
	@if (session('status'))
			<div class="alert alert-success">
					{{ session('status') }}
			</div>
	@endif
</div>

@endsection
