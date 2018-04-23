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
		<div class="m-accordion m-accordion--bordered" id="m_accordion_6" role="tablist" aria-expanded="true">
        <!--begin::Item-->
        <div class="m-accordion__item m-accordion__item--focus">
            <div class="m-accordion__item-head" role="tab" id="m_accordion_6_item_1_head" data-toggle="collapse" href="#m_accordion_6_item_1_body" aria-expanded="false">
                <span class="m-accordion__item-icon"><i class="fa flaticon-user-ok"></i></span>
                <span class="m-accordion__item-title">Información comercial</span>
                <span class="m-accordion__item-mode"></span>
            </div>

            <div class="m-accordion__item-body collapse" id="m_accordion_6_item_1_body" role="tabpanel" aria-labelledby="m_accordion_6_item_1_head" data-parent="#m_accordion_6">
                <div class="m-accordion__item-content">
									<!--begin::Form-->
									<form class="m-form m-form--Ffit m-form--label-align-right m-form--group-seperator-dashed">
											<div class="m-portlet__body">
												<div class="form-group m-form__group row">
													<div class="col-lg-4">
														<div class="m-input-icon m-input-icon--right">
															<input type="text" class="form-control m-input" placeholder="R.U.T.">
															<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-registered"></i></span></span>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="m-input-icon m-input-icon--right">
															<input type="text" class="form-control m-input" placeholder="Razón Social">
															<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-object-group"></i></span></span>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="m-radio-inline">
															<label class="m-checkbox m-checkbox--solid m-checkbox--state-success">
																		<input type="checkbox" name="example_2" checked="" value="2"> Cliente
																		<span></span>
																</label>
																<label class="m-checkbox m-checkbox--solid m-checkbox--state-brand">
																		<input type="checkbox" name="example_2" value="2"> Proveedor
																		<span></span>
																</label>
														</div>
													</div>
												</div>
												<div class="form-group m-form__group row">
													<div class="col-lg-4">
														<div class="m-input-icon m-input-icon--right">
															<input type="text" class="form-control m-input" placeholder="Nombre de fantasía">
															<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-gratipay"></i></span></span>
														</div>
													</div>
													<div class="col-lg-4">
														<select class="form-control m-select2 giro" id="m_select2_4" name="param">
															<option></option>
																<option value="AK">
																	Alaska
																</option>
														</select>
													</div>
													<div class="col-lg-4">
														<div class="m-input-icon m-input-icon--right">
															<input type="text" class="form-control m-input" placeholder="Código Cliente">
															<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
														</div>
													</div>
												</div>
														</div>
														<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
												<div class="m-form__actions m-form__actions--solid">
													<div class="row">
														<div class="col-lg-4"></div>
														<div class="col-lg-8">
															<button type="reset" class="btn btn-primary">Guardar</button>
															<button type="reset" class="btn btn-secondary">Volver</button>
														</div>
													</div>
												</div>
											</div>
										</form>
									<!--end::Form-->
                </div>
            </div>
        </div>
        <!--end::Item-->

        <!--begin::Item-->
        <div class="m-accordion__item m-accordion__item--success">
            <div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_6_item_2_head" data-toggle="collapse" href="#m_accordion_6_item_2_body" aria-expanded="false">
                <span class="m-accordion__item-icon"><i class="fa  flaticon-placeholder"></i></span>
                <span class="m-accordion__item-title">Direcciones</span>

                <span class="m-accordion__item-mode"></span>
            </div>

            <div class="m-accordion__item-body collapse show" id="m_accordion_6_item_2_body" role="tabpanel" aria-labelledby="m_accordion_6_item_2_head" data-parent="#m_accordion_6">
                <div class="m-accordion__item-content">
									<div class="repetidor">
										<div class="form-group  m-form__group row">
											<div data-repeater-list="" class="col-lg-12">
												<div data-repeater-item class="row m--margin-bottom-10">
													<div class="col-lg-3">
														<div class="m-input-icon m-input-icon--right">
															<input type="text" class="form-control m-input" placeholder="Sucursal" disabled>
															<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la	la-briefcase"></i></span></span>
														</div>
													</div>
													<div class="col-lg-4">
														<div class="m-input-icon m-input-icon--right">
															<input type="text" class="form-control m-input" placeholder="Dirección" disabled>
															<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
														</div>
													</div>
													<div class="col-lg-3">
														<div class="m-input-icon m-input-icon--right">
															<input type="text" class="form-control m-input" placeholder="Ciudad" disabled>
															<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-car"></i></span></span>
														</div>
													</div>
													<div class="col-lg-2">
														<button type="button" class="btn btn-warning delete-button" data-toggle="modal" data-target="#editar_direccion" >
															<i class="la la-edit"></i>
														</button>
														<a data-repeater-delete="" class="btn hand btn-danger m-btn delete-button">
															<i class="la la-remove"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col">

												<div data-toggle="modal" data-target="#editar_direccion" class="btn btn btn-primary m-btn m-btn--icon">
													<span>
														<i class="la la-plus rotating"></i>
														<span>
															Agregar dirección
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
                </div>
            </div>
        </div>
        <!--end::Item-->

        <!--begin::Item-->
        <!--div class="m-accordion__item m-accordion__item--primary">
            <div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_8_item_3_head" data-toggle="collapse" href="#m_accordion_6_item_3_body" aria-expanded="false">
                <span class="m-accordion__item-icon"><i class="fa  flaticon-alert-2"></i></span>
                <span class="m-accordion__item-title">Datos comerciales</span>

                <span class="m-accordion__item-mode"></span>
            </div>

            <div class="m-accordion__item-body collapse" id="m_accordion_6_item_3_body" role="tabpanel" aria-labelledby="m_accordion_6_item_3_head" data-parent="#m_accordion_6">
                <div class="m-accordion__item-content">
                    <p>
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
                    </p>
                </div>
            </div>
        </div-->
        <!--end::Item-->
    </div>
	</div>
</div>

@endsection

@section('scripts')
<script src="{{ asset('assets/app/js/select2.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/app/js/repeater.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/app/js/sweetalert.js') }}" type="text/javascript"></script>
@endsection

<!-- Modal para agregar/editar direccion -->
<div class="modal fade" style="display: none;" id="editar_direccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">
					Editar/Agregar dirección
				</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group  m-form__group row">
						<div class="col-lg-4">
							<div class="m-input-icon m-input-icon--right">
								<input type="text" class="form-control m-input" placeholder="Sucursal"d>
								<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la	la-briefcase"></i></span></span>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="m-input-icon m-input-icon--right">
								<input type="text" class="form-control m-input" placeholder="Región">
								<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-map-marker"></i></span></span>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="m-input-icon m-input-icon--right">
								<input type="text" class="form-control m-input" placeholder="Ciudad">
								<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-car"></i></span></span>
							</div>
						</div>
						<div class="spacer-20 spacer width-100"></div>
						<div class="col-lg-4">
							<div class="m-input-icon m-input-icon--right">
								<input type="email" class="form-control m-input" placeholder="alguien@algo.com">
								<span class="m-input-icon__icon m-input-icon__icon--right"><span><i class="la la-car"></i></span></span>
							</div>
						</div>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">
					Cancelar
				</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal" data-repeater-create="repetidor" >
					Guardar dirección
				</button>
			</div>
		</div>
	</div>
</div>
<!-- FIN Modal para agregar/editar direccion -->
