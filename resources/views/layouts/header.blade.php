<!--Header-->
				<div class="hor-header header d-flex navbar-collapse">
					<div class="container">
						<div class="d-flex">
							<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
							<a class="header-brand" href="{{ url('/' . $page='index') }}">
								<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img main-logo" alt="IndoUi logo">
								<img src="{{URL::asset('assets/images/brand/logo-light.png')}}" class="header-brand-img dark-main-logo" alt="IndoUi logo">
								<img src="{{URL::asset('assets/images/brand/icon-light.png')}}" class="header-brand-img dark-icon-logo" alt="IndoUi logo">
								<img src="{{URL::asset('assets/images/brand/icon.png')}}" class="header-brand-img icon-logo" alt="IndoUi logo">
							</a><!-- logo-->
							<div class="d-none dropdown d-md-flex header-settings">
								<a class="nav-link icon" data-toggle="dropdown">
									<i class="fe fe-grid mr-2"></i><span class="lay-outstyle mt-1">Settings</span>
									<span class="pulse2 bg-warning" aria-hidden="true"></span>
								</a>
								<div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">
									<a class="dropdown-item" href="#">Option 1</a>
									<a class="dropdown-item" href="#">Option 2</a>
									<a class="dropdown-item" href="#">Option 3</a>
									<a class="dropdown-item" href="#">Option 4</a>
									<a class="dropdown-item" href="#">Option 5</a>
								</div>
							</div>
							<div class="d-flex order-lg-2 ml-auto header-right">
								<div class="d-md-flex header-search" id="bs-example-navbar-collapse-1">
									<form class="navbar-form" role="search">
										<div class="input-group ">
											<input type="text" class="form-control" placeholder="Search...">
											<span class="input-group-btn">
												<button type="reset" class="btn btn-default">
													<i class="fe fe-x"></i>
												</button>
												<button type="submit" class="btn btn-default">
													<i class="fe fe-search"></i>
												</button>
											</span>
										</div>
									</form>
								</div><!-- Search -->
								<div class="d-md-flex">
									<a href="#" class="nav-link icon full-screen-link">
										<i class="fe fe-minimize fullscreen-button"></i>
									</a>
								</div>
								<div class="dropdown d-md-flex header-message">
									<a class="nav-link icon" data-toggle="dropdown">
										<i class="fe fe-bell"></i>
										<span class="nav-unread badge badge-danger badge-pill">3</span>
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
												<a href="#" class="btn btn-primary btn-sm"><i class="fe fe-plus mr-1"></i>Add New</a>
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
												<h5 class="text-dark mb-1">Vanessa Dyer</h5>
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
								<div class="dropdown d-md-flex Sidebar-setting">
									<a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
										<i class="fe fe-more-horizontal"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
<!--Header end-->
