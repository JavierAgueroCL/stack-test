<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
	<li class="m-menu__item  {{ Request::is( '/') ? 'm-menu__item--active' : '' }}" aria-haspopup="true" >
		<a  href="/" class="m-menu__link ">
			<i class="m-menu__link-icon flaticon-line-graph"></i>
			<span class="m-menu__link-title">
				<span class="m-menu__link-wrap">
					<span class="m-menu__link-text">
						Dashboard
					</span>
					<span class="m-menu__link-badge">
						<span class="m-badge m-badge--danger">
							2
						</span>
					</span>
				</span>
			</span>
		</a>
	</li>
	<li class="m-menu__section">
		<h4 class="m-menu__section-text">ERP - Facturación</h4></li>
			<li class="m-menu__item m-menu__item--submenu {{ MenuHelper::prefix('maestros') }}" aria-haspopup="true" data-menu-submenu-toggle="hover">
				<a href="#" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon flaticon-interface-3"></i>
					<span class="m-menu__link-text">
						Maestros
					</span>
					<i class="m-menu__ver-arrow la la-angle-right"></i>
				</a>
				<div class="m-menu__submenu " style="">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<li class="m-menu__item  m-menu__item--submenu {{ MenuHelper::submenu('clientes') }}" aria-haspopup="true" data-menu-submenu-toggle="hover">
							<a href="{{ route('maestros.clientes') }}" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Cliente/Proveedor
								</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
						</li>
						<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
							<a href="#" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Productos/Servicios
								</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
						</li>
						<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
							<a href="#" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Personal
								</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
						</li>
						<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
							<a href="#" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Formas de Pago
								</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="m-menu__item m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
				<a href="#" class="m-menu__link m-menu__toggle">
					<i class="m-menu__link-icon flaticon-network"></i>
					<span class="m-menu__link-text">
						Remuneraciones
					</span>
					<i class="m-menu__ver-arrow la la-angle-right"></i>
				</a>
				<div class="m-menu__submenu " style="">
					<span class="m-menu__arrow"></span>
					<ul class="m-menu__subnav">
						<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
							<a href="#" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Maestros
								</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
							<div class="m-menu__submenu " style="">
								<span class="m-menu__arrow"></span>
								<ul class="m-menu__subnav">
									<li class="m-menu__item " aria-haspopup="true">
										<a href="components/forms/controls/base.html" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Personal
											</span>
										</a>
									</li>
									<li class="m-menu__item " aria-haspopup="true">
										<a href="components/forms/controls/checkbox-radio.html" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Isapre
											</span>
										</a>
									</li>
									<li class="m-menu__item " aria-haspopup="true">
										<a href="components/forms/controls/input-group.html" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												AFP
											</span>
										</a>
									</li>
									<li class="m-menu__item " aria-haspopup="true">
										<a href="components/forms/controls/switch.html" class="m-menu__link ">
											<i class="m-menu__link-bullet m-menu__link-bullet--dot">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Haber/Descuento
											</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
							<a href="#" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Operación
								</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
						</li>
						<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
							<a href="#" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Parámetros Generales
								</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
						</li>
						<li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true" data-menu-submenu-toggle="hover">
							<a href="#" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-bullet m-menu__link-bullet--dot">
									<span></span>
								</i>
								<span class="m-menu__link-text">
									Reportes
								</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
						</li>
					</ul>
				</div>
			</li>
</ul>
