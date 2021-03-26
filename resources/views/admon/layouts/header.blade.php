<!--Header-->
				<div class="hor-header header d-flex navbar-collapse">
					<div class="container">
						<div class="d-flex">
							<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
							<a class="header-brand" href="{{ url('/' . $page='admon/') }}">
								<img src="{{URL::asset('assets/store/images/logo.svg')}}" class="header-brand-img main-logo" alt="IndoUi logo">
								<img src="{{URL::asset('assets/store/images/logo.svg')}}" class="header-brand-img dark-main-logo" alt="IndoUi logo">
								<img src="{{URL::asset('assets/store/images/logo.svg')}}" class="header-brand-img dark-icon-logo" alt="IndoUi logo">
								<img src="{{URL::asset('assets/store/images/logo.svg')}}" class="header-brand-img icon-logo" alt="IndoUi logo">
							</a><!-- logo-->
							<div class="d-none dropdown d-md-flex header-settings">
								
							</div>
							<div class="d-flex order-lg-2 ml-auto header-right">
								
								<div class="d-md-flex">
									<a href="#" class="nav-link icon full-screen-link">
										<i class="fe fe-minimize fullscreen-button"></i>
									</a>
								</div>
								<div class="dropdown d-md-flex header-message" id="AppFeatureNotifications">
									
								</div>
								<!--Navbar -->
								<div class="dropdown header-profile">
									<a class="nav-custom-leyder nav-link pr-0 leading-none d-flex pt-1" data-toggle="dropdown" href="#">
										<span class="avatar avatar-md brround cover-image" data-image-src="https://www.spruko.com/demo/indoui/indoui/indoui/assets/images/users/male/1.jpg"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-1">El escaparate de Lolita</h5>
												<small class="text-muted">Administrador</small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-user"></i>Mi Perfil</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-unlock"></i> Look Screen</a>
										<a class="dropdown-item" href="{{ url('/' . $page='admin/logout/oauth') }}"><i class="dropdown-icon fe fe-power"></i> Salir</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<!--Header end-->
