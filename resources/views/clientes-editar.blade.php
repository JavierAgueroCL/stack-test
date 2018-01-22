@extends('layouts.dashboard')

@section('title', 'Clientes y Proveedores')

@section('content')
<!-- BEGIN: Subheader -->
<div class="m-subheader ">
	<div class="d-flex align-items-center">
		<div class="mr-auto">
			<h3 class="m-subheader__title m-subheader__title--separator">
				Agregar/Editar Cliente
			</h3>
			<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
				<li class="m-nav__item m-nav__item--home">
					<a href="#" class="m-nav__link m-nav__link--icon">
						<i class="m-nav__link-icon la la-home"></i>
					</a>
				</li>
				<li class="m-nav__item">
					<a href="" class="m-nav__link">
						<span class="m-nav__link-text">
							Maestros
						</span>
					</a>
				</li>
				<li class="m-nav__separator">
					-
				</li>
				<li class="m-nav__item">
					<a href="" class="m-nav__link">
						<span class="m-nav__link-text">
							Clientes/Proveedores
						</span>
					</a>
				</li>
				<li class="m-nav__separator">
					-
				</li>
				<li class="m-nav__item">
					<a href="" class="m-nav__link">
						<span class="m-nav__link-text">
							Agregar/Editar
						</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
		<!-- END: Subheader -->
<div class="m-content">
	<div class="m-portlet">
		<div class="spacer spacer-20"></div>
		<!--begin::Form-->
		<form class="m-form m-form--fit m-form--label-align-right m-form--group-seperator-dashed">
				<div class="m-portlet__body">
					<div class="form-group m-form__group row">
						<label class="col-lg-1 col-form-label">RUT:</label>
						<div class="col-lg-3">
							<input type="email" class="form-control m-input" placeholder="Ingrese el RUT">
							<span class="m-form__help">Please enter your full name</span>
						</div>
						<label class="col-lg-1 col-form-label">Razon Social:</label>
						<div class="col-lg-3">
							<input type="email" class="form-control m-input" placeholder="Email">
							<span class="m-form__help">Please enter your email</span>
						</div>
						<label class="col-lg-1 col-form-label">Username:</label>
						<div class="col-lg-3">
							<div class="input-group m-input-group m-input-group--square">
							  	<div class="input-group-prepend"><span class="input-group-text"><i class="la la-user"></i></span></div>
								<input type="text" class="form-control m-input" placeholder="">
							</div>
							<span class="m-form__help">Please enter your username</span>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-1 col-form-label">Nombre Fantasia:</label>
						<div class="col-lg-3">
							<input type="email" class="form-control m-input" placeholder="Enter contact number">
							<span class="m-form__help">Please enter your contact</span>
						</div>
						<label class="col-lg-1 col-form-label">Giro:</label>
						<div class="col-lg-3">
							<div class="m-input-icon m-input-icon--right">
								<input type="text" class="form-control m-input" placeholder="Fax number">
								<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-info-circle"></i></span></span>
							</div>
							<span class="m-form__help">Please enter fax</span>
						</div>
						<label class="col-lg-1 col-form-label">Código Cliente:</label>
						<div class="col-lg-3">
							<div class="m-input-icon m-input-icon--right">
								<input type="text" class="form-control m-input" placeholder="Enter your address">
								<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
							</div>
							<span class="m-form__help">Please enter your address</span>
						</div>
					</div>
					<div class="form-group m-form__group row">
						<label class="col-lg-1 col-form-label">Teléfono:</label>
						<div class="col-lg-3">
							<div class="m-input-icon m-input-icon--right">
								<input type="text" class="form-control m-input" placeholder="Enter your postcode">
								<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-bookmark-o"></i></span></span>
							</div>
							<span class="m-form__help">Please enter your postcode</span>
						</div>
						<label class="col-lg-1 col-form-label">Correo Electrónico</label>
						<div class="col-lg-3">
							<div class="m-radio-inline">
								<label class="m-radio m-radio--solid">
	                                <input type="radio" name="example_2" checked="" value="2"> Sales Person
	                                <span></span>
	                            </label>
	                            <label class="m-radio m-radio--solid">
	                                <input type="radio" name="example_2" value="2"> Customer
	                                <span></span>
	                            </label>
	                        </div>
							<span class="m-form__help">Please select user group</span>
						</div>
					</div>
	            </div>
	            <div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
					<div class="m-form__actions m-form__actions--solid">
						<div class="row">
							<div class="col-lg-5"></div>
							<div class="col-lg-7">
								<button type="reset" class="btn btn-brand">Submit</button>
								<button type="reset" class="btn btn-secondary">Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		<!--end::Form-->
	</div>
</div>
@endsection

@section('scripts')

@endsection
