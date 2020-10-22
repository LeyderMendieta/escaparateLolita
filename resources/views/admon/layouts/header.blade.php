<!--Header-->
				<div class="hor-header header d-flex navbar-collapse">
					<div class="container">
						<div class="d-flex">
							<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
							<a class="header-brand" href="{{ url('/' . $page='admon/index') }}">
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
								<div class="dropdown d-md-flex header-message">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-bell"></i>
										<span class="nav-unread badge badge-danger badge-pill">4</span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a class="dropdown-item text-center" href="#">Notifications</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item d-flex pb-4" href="#">
											<span class="avatar mr-3 br-3 align-self-center avatar-md cover-image bg-primary-transparent text-primary"><i class="fe fe-mail"></i></span>
											<div>
												<span class="font-weight-bold"> Commented on your post </span>
												<div class="small text-muted d-flex">
													3 hours ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-4" href="#">
											<span class="avatar avatar-md br-3 mr-3 align-self-center cover-image bg-secondary-transparent text-secondary"><i class="fe fe-download"></i>
											</span>
											<div>
												<span class="font-weight-bold"> New file has been Uploaded </span>
												<div class="small text-muted d-flex">
													5 hour ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-4" href="#">
											<span class="avatar avatar-md br-3 mr-3 align-self-center cover-image bg-warning-transparent text-warning"><i class="fe fe-user"></i>
											</span>
											<div>
												<span class="font-weight-bold"> User account has Updated</span>
												<div class="small text-muted d-flex">
													20 mins ago
												</div>
											</div>
										</a>
										<a class="dropdown-item d-flex pb-4" href="#">
											<span class="avatar avatar-md br-3 mr-3 align-self-center cover-image bg-info-transparent text-info"><i class="fe fe-shopping-cart"></i>
											</span>
											<div>
												<span class="font-weight-bold"> New Order Recevied</span>
												<div class="small text-muted d-flex">
													1 hour ago

												</div>
											</div>
										</a>
										<div class="dropdown-divider"></div>
										<div class="text-center dropdown-btn pb-3">
											<div class="btn-list">
												<a href="#" class=" btn btn-secondary btn-sm"><i class="fe fe-eye mr-1"></i>View All</a>
											</div>
										</div>
									</div>
								</div>
								<!--Navbar -->
								<div class="dropdown header-profile">
									<a class="nav-link pr-0 leading-none d-flex pt-1" data-toggle="dropdown" href="#">
										<span class="avatar avatar-md brround cover-image" data-image-src="{{URL::asset('assets/images/users/female/2.jpg')}}"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<div class="drop-heading">
											<div class="text-center">
												<h5 class="text-dark mb-1">Leyder Mendieta</h5>
												<small class="text-muted">Web Developer</small>
											</div>
										</div>
										<div class="dropdown-divider m-0"></div>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-user"></i>Profile</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-edit"></i>Schedule</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-mail"></i> Inbox</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-unlock"></i> Look Screen</a>
										<a class="dropdown-item" href="#"><i class="dropdown-icon fe fe-power"></i> Log Out</a>
										<div class="dropdown-divider"></div>
										<div class="text-center dropdown-btn pb-3">
											<div class="btn-list">
												<a href="#" class="btn btn-icon btn-facebook btn-sm"><i class="icon icon-social-facebook"></i></a>
												<a href="#" class="btn btn-icon btn-twitter btn-sm"><i class="icon icon-social-twitter"></i></a>
												<a href="#" class="btn btn-icon btn-instagram btn-sm"><i class="icon icon-social-instagram"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<!--Header end-->
