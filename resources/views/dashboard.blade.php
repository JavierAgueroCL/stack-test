@extends('layouts.dashboard')

@section('title', 'Dashboard')

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

	<div class="row">
		<div class="col-xl-4">
			 <!--begin:: Wiget de Divisas -->
			<div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
				<div class="m-portlet__head">
					<div class="m-portlet__head-caption">
						<div class="m-portlet__head-title">
							<h3 class="m-portlet__head-text">
								Divisas de Hoy
							</h3>
						</div>
					</div>
				</div>
				<div class="m-portlet__body">
					<div class="m-widget4">
						<div class="m-widget4__item">
							<div class="m-widget4__img m-widget4__img--logo">
								<img src="{{ asset('assets/app/media/img/client-logos/logo5.png') }}" alt="">
							</div>
							<div class="m-widget4__info">
								<span class="m-widget4__title">
								Dolár
								</span><br>
								<span class="m-widget4__sub">
								Ayer: $560
								</span>
							</div>
							<span class="m-widget4__ext">
								<span class="m-widget4__number m--font-brand">$620</span>
							</span>
						</div>
						<div class="m-widget4__item">
							<div class="m-widget4__img m-widget4__img--logo">
								<img src="{{ asset('assets/app/media/img/client-logos/logo4.png') }}" alt="">
							</div>
							<div class="m-widget4__info">
								<span class="m-widget4__title">
								Euro
								</span><br>
								<span class="m-widget4__sub">
								Ayer: $750
								</span>
							</div>
							<span class="m-widget4__ext">
							    <span class="m-widget4__number m--font-brand">$840</span>
							</span>
						</div>
						<div class="m-widget4__item">
							<div class="m-widget4__img m-widget4__img--logo">
								<img src="{{ asset('assets/app/media/img/client-logos/logo3.png') }}" alt="">
							</div>
							<div class="m-widget4__info">
								<span class="m-widget4__title">
								IPC
								</span><br>
								<span class="m-widget4__sub">
								Ayer: 8.21%
								</span>
							</div>
							<span class="m-widget4__ext">
								<span class="m-widget4__number m--font-brand">8.33%</span>
							</span>
						</div>
						<div class="m-widget4__item">
							<div class="m-widget4__img m-widget4__img--logo">
								<img src="{{ asset('assets/app/media/img/client-logos/logo2.png') }}" alt="">
							</div>
							<div class="m-widget4__info">
								<span class="m-widget4__title">
								UF
								</span><br>
								<span class="m-widget4__sub">
								Ayer: $26.324
								</span>
							</div>
							<span class="m-widget4__ext">
							    <span class="m-widget4__number m--font-brand">$26.742</span>
							</span>
						</div>
						<div class="m-widget4__item">
							<div class="m-widget4__img m-widget4__img--logo">
								<img src="{{ asset('assets/app/media/img/client-logos/logo1.png') }}" alt="">
							</div>
							<div class="m-widget4__info">
								<span class="m-widget4__title">
								UTM
								</span><br>
								<span class="m-widget4__sub">
								Ayer: $42.234
								</span>
							</div>
							<span class="m-widget4__ext">
							    <span class="m-widget4__number m--font-brand">$41.238</span>
							</span>
						</div>
					</div>
				</div>
			</div>
			<!--end:: Widgets/Authors Profit-->
		</div>
		<div class="col-xl-8">
		</div>
	</div>


	@if (session('status'))
			<div class="alert alert-success">
					{{ session('status') }}
			</div>
	@endif
</div>

@endsection

@section('scripts')
<script src="{{ asset('assets/app/js/dashboard.js') }}" type="text/javascript"></script>
@endsection
