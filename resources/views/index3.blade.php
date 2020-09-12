@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title"><span class="subpage-title">Welcome To</span> Sales Dashboard</h1>
							<div class="ml-auto">
								<div class="input-group">
									<a  class="btn btn-primary btn-icon text-white mr-2"  id="daterange-btn" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Calendar">
										<span>
											<i class="fe fe-calendar"></i>
										</span>
									</a>
									<a href="#" class="btn btn-secondary btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Rating">
										<span>
											<i class="fe fe-star"></i>
										</span>
									</a>
									<a href="#" class="btn btn-success btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Email">
										<span>
											<i class="fe fe-mail"></i>
										</span>
									</a>
									<a href="#" class="btn btn-warning btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Chat">
										<span>
											<i class="fe fe-message-square"></i>
										</span>
									</a>
									<a href="#" class="btn btn-info btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Add New">
										<span>
											<i class="fe fe-plus"></i>
										</span>
									</a>
									<a href="#" class="btn btn-danger btn-icon" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Support">
										<span>
											<i class="fe fe-help-circle"></i>
										</span>
									</a>
								</div>
							</div>
						</div>
						<!-- End page-header -->
@endsection
@section('content')
						<!-- Row -->
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="d-flex">
											<div class="">
												<div class="feature">
													<div class="icon-service2 bg-primary br-3">
														<i class="fe fe-users text-white fs-30"></i>
													</div>
												</div>
											</div>
											<div class="ml-auto text-right">
												<p class="text-muted mb-1">
													Total Customers
												</p>
												<h2 class="mt-2 mb-0 number-font">56,897</h2>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="float-left">
											<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-down ml-1 text-danger"></i> 0.78%</span>  last week</p>
										</div>
										<div class="float-right">
											<i class="fa fa-line-chart text-muted"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="d-flex">
											<div class="">
												<div class="feature">
													<div class="icon-service2  bg-secondary br-3">
														<i class="fe fe-bar-chart-2 text-white fs-30"></i>
													</div>
												</div>
											</div>
											<div class="ml-auto text-right">
												<p class="text-muted mb-1">
													Total Sales
												</p>
												<h2 class="mt-2 mb-0 number-font">78,962</h2>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="float-left">
											<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-up ml-1 text-success"></i> 1.5%</span>  last week</p>
										</div>
										<div class="float-right">
											<i class="fa fa-line-chart text-muted"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="d-flex">
											<div class="">
												<div class="feature">
													<div class="icon-service2 bg-success br-3">
														<i class="fe fe-dollar-sign text-white fs-30"></i>
													</div>
												</div>
											</div>
											<div class="ml-auto text-right">
												<p class="text-muted mb-1">
													Total Profits
												</p>
												<h2 class="mt-2 mb-0 number-font">$54,890</h2>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="float-left">
											<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-down ml-1 text-danger"></i> 0.5%</span>  last week</p>
										</div>
										<div class="float-right">
											<i class="fa fa-line-chart text-muted"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="d-flex">
											<div class="">
												<div class="feature">
													<div class="icon-service2 bg-warning br-3">
														<i class="fe fe-shopping-cart text-white fs-30"></i>
													</div>
												</div>
											</div>
											<div class="ml-auto text-right">
												<p class="text-muted mb-1">
													Total Orders
												</p>
												<h2 class="mt-2 mb-0 number-font">78,965</h2>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="float-left">
											<p class="mb-0"><span class=""><i class="fa fa-arrow-circle-o-up ml-1 text-success"></i> 1.87%</span>  last week </p>
										</div>
										<div class="float-right">
											<i class="fa fa-line-chart text-muted"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Sales Report</h3>
										</div>
										<div class="card-options">
											<a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												<span class="fe fe-more-horizontal fs-20"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="#"><i class="fe fe-eye mr-2"></i>View</a></li>
												<li><a href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a></li>
												<li><a href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a></li>
												<li><a href="#"><i class="fe fe-download-cloud mr-2"></i>Download</a></li>
												<li><a href="#"><i class="fe fe-settings mr-2"></i>More</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
												<div class="mb-5 mb-xl-0">
													<canvas id="sales" class="chartwidget"></canvas>
												</div>
											</div>
											<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
												<div class="row pt-0">
													<div class="card card-img-holder box-shadow-0 border p-0 mb-3">
														<div class="card-body p-3">
															<div class="clearfix">
																<div class="float-left">
																	<p class="text-muted mb-1">Total Purchase</p>
																	<h2 class="mb-0 text-dark mainvalue">$7,483</h2>
																</div>
																<div class="float-right text-right mt-2">
																	<span class="pie" data-peity="{ &quot;fill&quot;: [&quot;#12d093&quot;, &quot;rgba(119, 119, 142, 0.2)&quot;]}" style="display: none;">0.52/1.561</span><svg class="peity" height="50" width="50"><path d="M 25 0 A 25 25 0 0 1 46.667386863494265 37.47094008115171 L 25 25" fill="#12d093"></path><path d="M 46.667386863494265 37.47094008115171 A 25 25 0 1 1 24.999999999999996 0 L 25 25" fill="rgba(119, 119, 142, 0.2)"></path></svg>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row pt-3 pt-sm-1 mt-2 mt-sm-0">
													<div class="card card-img-holder box-shadow-0 border p-0 mb-3">
														<div class="card-body p-3">
															<div class="clearfix">
																<div class="float-left">
																	<p class="text-muted mb-1">Total Sales</p>
																	<h2 class="mb-0 text-dark mainvalue">$7,483</h2>
																</div>
																<div class="float-right text-right mt-2">
																	<span class="pie" data-peity="{ &quot;fill&quot;: [&quot;#fda008&quot;, &quot;rgba(119, 119, 142, 0.2)&quot;]}" style="display: none;">0.52/1.561</span><svg class="peity" height="50" width="50"><path d="M 25 0 A 25 25 0 0 1 46.667386863494265 37.47094008115171 L 25 25" fill="#fda008"></path><path d="M 46.667386863494265 37.47094008115171 A 25 25 0 1 1 24.999999999999996 0 L 25 25" fill="rgba(119, 119, 142, 0.2)"></path></svg>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="row pt-3 pt-sm-1 mt-2 mt-sm-0">
													<div class="card card-img-holder box-shadow-0 border mb-1 p-0">
														<div class="card-body p-3">
															<div class="clearfix">
																<div class="float-left">
																	<p class="text-muted mb-1">Total Profits</p>
																	<h2 class="mb-0 text-dark mainvalue">$4,774</h2>
																</div>
																<div class="float-right text-right mt-2">
																	<span class="pie" data-peity="{ &quot;fill&quot;: [&quot;#ff5964&quot;, &quot;rgba(119, 119, 142, 0.2)&quot;]}" style="display: none;">226/360</span><svg class="peity" height="50" width="50"><path d="M 25 0 A 25 25 0 1 1 7.016504991533726 42.36645926147494 L 25 25" fill="#ff5964"></path><path d="M 7.016504991533726 42.36645926147494 A 25 25 0 0 1 24.999999999999996 0 L 25 25" fill="rgba(119, 119, 142, 0.2)"></path></svg>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Cost BreakDown</h3>
										</div>
										<div class="card-options">
											<a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												<span class="fe fe-more-horizontal fs-20"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="#"><i class="fe fe-eye mr-2"></i>View</a></li>
												<li><a href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a></li>
												<li><a href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a></li>
												<li><a href="#"><i class="fe fe-download-cloud mr-2"></i>Download</a></li>
												<li><a href="#"><i class="fe fe-settings mr-2"></i>More</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<div class="mb-5">
											<canvas id="cost" class="h-220"></canvas>
										</div>
										<div class="row">
											<div class="col-6">
												<div class="d-flex"><div class="w-2 h-2 brround bg-secondary mr-2 mt-1 mb-1"></div><p class="mb-1">Sales Cost</p></div>
												<h3 class="">$48,593</h3>
											</div>
											<div class="col-6">
												<div class="d-flex"><div class="w-2 h-2 brround bg-primary mr-2 mt-1 mb-1"></div><p class="mb-1">Marketing Cost</p></div>
												<h3 class="">$25,067</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Product Ratings</h3>
										</div>
										<div class="card-options">
											<a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												<span class="fe fe-more-horizontal fs-20"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="#"><i class="fe fe-eye mr-2"></i>View</a></li>
												<li><a href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a></li>
												<li><a href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a></li>
												<li><a href="#"><i class="fe fe-download-cloud mr-2"></i>Download</a></li>
												<li><a href="#"><i class="fe fe-settings mr-2"></i>More</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<div class="mb-5">
											<h5 class="mb-1 d-block">
												<span class="fs-14 text-warning">
													<i class="fa fa-star mr-2"></i>
													<i class="fa fa-star mr-2"></i>
													<i class="fa fa-star mr-2"></i>
													<i class="fa fa-star mr-2"></i>
													<i class="fa fa-star"></i>
												</span>
												<span class="float-right fs-12">89%</span>
											</h5>
											<div class="progress progress-md mb-4 h-2">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-80"></div>
											</div>
										</div>
										<div class="mb-5">
											<h5 class="mb-1 d-block">
												<span class="fs-14 text-warning">
													<i class="fa fa-star mr-2"></i>
													<i class="fa fa-star mr-2"></i>
													<i class="fa fa-star mr-2"></i>
													<i class="fa fa-star mr-2"></i>
													<i class="fa fa-star-o"></i>
												</span>
												<span class="float-right fs-12">65%</span>
											</h5>
											<div class="progress progress-md mb-4 h-2">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-60"></div>
											</div>
										</div>
										<div class="mb-5">
											<h5 class="mb-1 d-block">
												<span class="fs-14 text-warning">
													<i class="fa fa-star mr-2"></i>
													<i class="fa fa-star mr-2"></i>
													<i class="fa fa-star mr-2"></i>
													<i class="fa fa-star-o mr-2"></i>
													<i class="fa fa-star-o"></i>
												</span>
												<span class="float-right fs-12">52%</span>
											</h5>
											<div class="progress progress-md mb-4 h-2">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-50"></div>
											</div>
										</div>
										<div class="mb-5">
											<h5 class="mb-1 d-block">
												<span class="fs-14 text-warning">
													<i class="fa fa-star mr-2"></i>
													<i class="fa fa-star mr-2"></i>
													<i class="fa fa-star-o mr-2"></i>
													<i class="fa fa-star-o mr-2"></i>
													<i class="fa fa-star-o"></i>
												</span>
												<span class="float-right fs-12">43%</span>
											</h5>
											<div class="progress progress-md mb-4 h-2">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-info w-40"></div>
											</div>
										</div>
										<div class="mb-5">
											<h5 class="mb-1 d-block">
												<span class="fs-14 text-warning">
													<i class="fa fa-star mr-2"></i>
													<i class="fa fa-star-o mr-2"></i>
													<i class="fa fa-star-o mr-2"></i>
													<i class="fa fa-star-o mr-2"></i>
													<i class="fa fa-star-o"></i>
												</span>
												<span class="float-right fs-12">32%</span>
											</h5>
											<div class="progress progress-md mb-4 h-2">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger w-30"></div>
											</div>
										</div>
										<div class="mb-0">
											<h5 class="mb-1 d-block">
												<span class="fs-14 text-warning">
													<i class="fa fa-star-o mr-2"></i>
													<i class="fa fa-star-o mr-2"></i>
													<i class="fa fa-star-o mr-2"></i>
													<i class="fa fa-star-o mr-2"></i>
													<i class="fa fa-star-o"></i>
												</span>
												<span class="float-right fs-12">10%</span>
											</h5>
											<div class="progress progress-md mb-0 h-2">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning w-1"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Customer Feedback</h3>
										</div>
										<div class="card-options">
											<a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												<span class="fe fe-more-horizontal fs-20"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="#"><i class="fe fe-eye mr-2"></i>View</a></li>
												<li><a href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a></li>
												<li><a href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a></li>
												<li><a href="#"><i class="fe fe-download-cloud mr-2"></i>Download</a></li>
												<li><a href="#"><i class="fe fe-settings mr-2"></i>More</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body p-0">
										<div class="list-group list-lg-group list-group-flush">
											<a class="list-group-item list-group-item-action border-left-0 border-right-0" href="#">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/female/2.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<h4 class="mb-1">
																Lisa Marshall
															</h4>
															<small class="text-muted ml-md-auto"><i class="fe fe-calendar mr-1"></i> 28 Oct 2019</small>
														</div>

														<p class="mb-0"> Web Desiner via Facebook</p>
													</div>
												</div>
											</a>
											<a class="list-group-item list-group-item-action border-left-0 border-right-0" href="#">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/male/2.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<h4 class="mb-1">
																John Chapman
															</h4>
															<small class="text-muted ml-md-auto"><i class="fe fe-calendar mr-1"></i> 16 Oct 2019</small>
														</div>
														<p class="mb-0">App Developer via Linkedlin</p>
													</div>
												</div>
											</a>
											<a class="list-group-item list-group-item-action border-left-0 border-right-0" href="#">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/male/8.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<h4 class="mb-1">
																Joseph	Abraham
															</h4>
															<small class="text-muted ml-md-auto"><i class="fe fe-calendar mr-1"></i> 26 Oct 2019</small>
														</div>
														<p class="mb-0">Project Manager via Dribble</p>
													</div>
												</div>
											</a>
											<a class="list-group-item list-group-item-action border-left-0 border-right-0" href="#">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/female/10.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<h4 class="mb-1">
																Sonia Smith
															</h4>
															<small class="text-muted ml-md-auto"><i class="fe fe-calendar mr-1"></i> 05 Oct 2019</small>
														</div>
														<p class="mb-0">FrontEnd Developer via Gmail</p>
													</div>
												</div>
											</a>
											<a class="list-group-item list-group-item-action border-left-0 border-right-0" href="#">
												<div class="media mt-0">
													<img class="avatar-lg rounded-circle mr-3" src="{{URL::asset('assets/images/users/female/5.jpg')}}" alt="Image description">
													<div class="media-body">
														<div class="d-md-flex align-items-center">
															<h4 class="mb-1">
																Ruth Robertson
															</h4>
															<small class="text-muted ml-md-auto"><i class="fe fe-calendar mr-1"></i> 12 Oct 2019</small>
														</div>
														<p class="mb-0">Sale Manger via Instagram</p>
													</div>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Country Wise Sales</h3>
										</div>
										<div class="card-options">
											<a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
												<span class="fe fe-more-horizontal fs-20"></span>
											</a>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="#"><i class="fe fe-eye mr-2"></i>View</a></li>
												<li><a href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a></li>
												<li><a href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a></li>
												<li><a href="#"><i class="fe fe-download-cloud mr-2"></i>Download</a></li>
												<li><a href="#"><i class="fe fe-settings mr-2"></i>More</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-xl-5 col-md-12">
												<div id="world-map-markers" class="worldh h-250"></div>
											</div>
											<div class="col-xl-7 col-md-12">
												<div class="table-responsive"> <table class="table border table-bordered text-nowrap mb-0"> <thead><tr><th>Country</th><th>2019</th><th>2018</th><th>2017</th><th>2016</th><th>2015</th><th>2014</th></tr> </thead> <tbody><tr><td><img src="{{URL::asset('assets/images/flags/us.svg')}}" class="w-5 h-5 mr-2" alt="">United State</td><td>44K <i class="fe fe-arrow-up text-success"></i> </td><td>55K <i class="fe fe-arrow-up text-success"></i> </td><td>41K <i class="fe fe-arrow-up text-success"></i> </td><td>37K <i class="fe fe-arrow-up text-success"></i> </td><td>22K <i class="fe fe-arrow-down text-danger"></i> </td><td>43K <i class="fe fe-arrow-up text-success"></i> </td></tr><tr><td><img src="{{URL::asset('assets/images/flags/in.svg')}}" class="w-5 h-5 mr-2" alt="">India</td><td>53K <i class="fe fe-arrow-up text-success"></i> </td><td>32K <i class="fe fe-arrow-down text-danger"></i> </td><td>33K <i class="fe fe-arrow-down text-danger"></i> </td><td>52K <i class="fe fe-arrow-up text-success"></i> </td><td>13K <i class="fe fe-arrow-down text-danger"></i> </td><td>43K <i class="fe fe-arrow-up text-success"></i> </td></tr><tr><td><img src="{{URL::asset('assets/images/flags/ru.svg')}}" class="w-5 h-5 mr-2" alt="">Russia</td><td>12K <i class="fe fe-arrow-down text-danger"></i> </td><td>17K <i class="fe fe-arrow-up text-success"></i> </td><td>11K <i class="fe fe-arrow-down text-danger"></i> </td><td>9K <i class="fe fe-arrow-down text-danger"></i> </td><td>15K <i class="fe fe-arrow-down text-danger"></i> </td><td>11K <i class="fe fe-arrow-down text-danger"></i> </td></tr><tr><td><img src="{{URL::asset('assets/images/flags/ca.svg')}}" class="w-5 h-5 mr-2" alt="">Canada</td><td>9K <i class="fe fe-arrow-down text-danger"></i> </td><td>7K <i class="fe fe-arrow-down text-danger"></i> </td><td>5K <i class="fe fe-arrow-down text-danger"></i> </td><td>8K <i class="fe fe-arrow-down text-danger"></i> </td><td>6K <i class="fe fe-arrow-down text-danger"></i> </td><td>9K <i class="fe fe-arrow-down text-danger"></i> </td></tr><tr><td><img src="{{URL::asset('assets/images/flags/ge.svg')}}" class="w-5 h-5 mr-2" alt="">Germany</td><td>25K <i class="fe fe-arrow-up text-success"></i> </td><td>12K <i class="fe fe-arrow-down text-danger"></i> </td><td>19K <i class="fe fe-arrow-down text-danger"></i> </td><td>32K <i class="fe fe-arrow-up text-success"></i> </td><td>25K <i class="fe fe-arrow-up text-success"></i> </td><td>24K <i class="fe fe-arrow-up text-success"></i> </td></tr> </tbody></table> </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
								<div class="card">
									<div class="card-body text-center">
										<p class="mt-3 ml-3 mb-0">Total Profits</p>
										<h2 class="number-font mb-2 mt-2">$15,2654</h2>
										<p><span class="text-success"><i class="fa fa-arrow-up text-success"></i> 16%</span> this Week</p>
										<div class="d-flex">
											<div class="w-5 h-5 bg-primary mr-4 br-3"></div>
											<div class="w-5 h-5 bg-primary mr-4 br-3"></div>
											<div class="w-5 h-5 bg-primary mr-4 br-3"></div>
											<div class="w-5 h-5 bg-primary mr-4 br-3"></div>
											<div class="w-5 h-5 bg-light mr-4 br-3"></div>
											<div class="w-5 h-5 bg-light mr-4 br-3"></div>
											<div class="w-5 h-5 bg-light mr-4 br-3"></div>
											<div class="w-5 h-5 bg-light br-3"></div>
										</div>
										<p class="mb-0 mt-2"><span class="float-left">Oct 01</span> <span class="float-right">Oct 31</span></p>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
								<div class="card">
									<div class="card-body text-center">
										<p class="mt-3 ml-3 mb-0">Total Sales</p>
										<h2 class="number-font mb-2 mt-2">23,2654</h2>
										<p><span class="text-danger"><i class="fa fa-arrow-down text-danger"></i> 19%</span> this Week</p>
										<div class="d-flex">
											<div class="w-5 h-5 bg-secondary mr-4 br-3"></div>
											<div class="w-5 h-5 bg-secondary mr-4 br-3"></div>
											<div class="w-5 h-5 bg-secondary mr-4 br-3"></div>
											<div class="w-5 h-5 bg-light mr-4 br-3"></div>
											<div class="w-5 h-5 bg-light mr-4 br-3"></div>
											<div class="w-5 h-5 bg-light mr-4 br-3"></div>
											<div class="w-5 h-5 bg-light mr-4 br-3"></div>
											<div class="w-5 h-5 bg-light br-3"></div>
										</div>
										<p class="mb-0 mt-2"><span class="float-left">Oct 01</span> <span class="float-right">Oct 31</span></p>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-md-4col-lg-4 col-xl-4">
								<div class="card">
									<div class="card-body text-center">
										<p class="mt-3 ml-3 mb-0">Total Orders</p>
										<h2 class="number-font mb-2 mt-2">56,897</h2>
										<p><span class="text-success"><i class="fa fa-arrow-up text-success"></i> 12%</span> this Week</p>
										<div class="d-flex">
											<div class="w-5 h-5 bg-success mr-4 br-3"></div>
											<div class="w-5 h-5 bg-success mr-4 br-3"></div>
											<div class="w-5 h-5 bg-success mr-4 br-3"></div>
											<div class="w-5 h-5 bg-success mr-4 br-3"></div>
											<div class="w-5 h-5 bg-success mr-4 br-3"></div>
											<div class="w-5 h-5 bg-light mr-4 br-3"></div>
											<div class="w-5 h-5 bg-light mr-4 br-3"></div>
											<div class="w-5 h-5 bg-light br-3"></div>
										</div>
										<p class="mb-0 mt-2"><span class="float-left">Oct 01</span> <span class="float-right">Oct 31</span></p>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div><!--End side app-->
@endsection
@section('js')
<!-- Charts js-->
<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>
<!-- JVectormap js-->
<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jvectormap/gdp-data.js')}}"></script>
<!-- Custom-charts js-->
<script src="{{URL::asset('assets/js/index3.js')}}"></script>
@endsection