@extends('layouts.master')
@section('css')
<!-- Morris  Charts css-->
<link href="{{URL::asset('assets/plugins/morris/morris.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title"><span class="subpage-title">Welcome To</span> Analytics Dashboard</h1>
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
							<div class="col-xl-7 col-lg-12 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header cards-tabs-option">
										<div>
											<h3 class="card-title">Session By Devices</h3>
										</div>
										<div class="card-options">
											<div class="tab-menu-heading card-tabs-heading">
												<div class="tabs-menu card-tabs-menu">
													<ul class="nav card-navs">
														<li><a href="#tab-session1" class="active" data-toggle="tab">Today</a></li>
														<li><a href="#tab-session2" data-toggle="tab">Week</a></li>
														<li><a href="#tab-session3" data-toggle="tab">Month</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="tabs-menu-body card-tabs-menu-body">
											<div class="tab-content">
												<div class="tab-pane active" id="tab-session1">
													<div class="row">
														<div class="col-sm-4 text-center mb-4 mb-md-0">
															<span class="avatar br-3 avatar-md bg-primary-transparent text-primary mb-3">
																<i class="fe fe-airplay"></i>
															</span>
															<h3 class="mb-0 number-font1">17.8%</h3>
															<p class="text-muted">Desktop</p>
														</div>
														<div class="col-sm-4 text-center mb-4 mb-md-0">
															<span class="avatar br-3 avatar-md bg-secondary-transparent text-secondary mb-3">
																<i class="fe fe-tablet"></i>
															</span>
															<h3 class="mb-0 number-font1">15.5%</h3>
															<p class="text-muted">Tablet</p>
														</div>
														<div class="col-sm-4 text-center mb-4 mb-md-0">
															<span class="avatar br-3 avatar-md bg-success-transparent text-success mb-3">
																<i class="fe fe-smartphone"></i>
															</span>
															<h3 class="mb-0 number-font1">18.9%</h3>
															<p class="text-muted">Mobile</p>
														</div>
													</div>
													<div class="mt-3">
														<canvas id="today-sessions" class="h-200"></canvas>
													</div>
												</div>
												<div class="tab-pane" id="tab-session2">
													<div class="row">
														<div class="col-md-4 text-center mb-4 mb-md-0">
															<span class="avatar br-3 avatar-md bg-primary-transparent text-primary mb-3">
																<i class="fe fe-airplay"></i>
															</span>
															<h3 class="mb-0 number-font1">35.91%</h3>
															<p class="text-muted">Desktop</p>
														</div>
														<div class="col-md-4 text-center mb-4 mb-md-0">
															<span class="avatar br-3 avatar-md bg-secondary-transparent text-secondary mb-3">
																<i class="fe fe-tablet"></i>
															</span>
															<h3 class="mb-0 number-font1">24.8%</h3>
															<p class="text-muted">Tablet</p>
														</div>
														<div class="col-md-4 text-center mb-4 mb-md-0">
															<span class="avatar br-3 avatar-md bg-success-transparent text-success mb-3">
																<i class="fe fe-smartphone"></i>
															</span>
															<h3 class="mb-0 number-font1">48.5%</h3>
															<p class="text-muted">Mobile</p>
														</div>
													</div>
													<div class="mt-3">
														<canvas id="week-session" class="h-200"></canvas>
													</div>
												</div>
												<div class="tab-pane" id="tab-session3">
													<div class="row">
														<div class="col-md-4 text-center mb-4 mb-md-0">
															<span class="avatar br-3 avatar-md bg-primary-transparent text-primary mb-3">
																<i class="fe fe-airplay"></i>
															</span>
															<h3 class="mb-0 number-font1">83.9%</h3>
															<p class="text-muted">Desktop</p>
														</div>
														<div class="col-md-4 text-center mb-4 mb-md-0">
															<span class="avatar br-3 avatar-md bg-secondary-transparent text-secondary mb-3">
																<i class="fe fe-tablet"></i>
															</span>
															<h3 class="mb-0 number-font1">76.5%</h3>
															<p class="text-muted">Tablet</p>
														</div>
														<div class="col-md-4 text-center mb-4 mb-md-0">
															<span class="avatar br-3 avatar-md bg-success-transparent text-success mb-3">
																<i class="fe fe-smartphone"></i>
															</span>
															<h3 class="mb-0 number-font1">95.4%</h3>
															<p class="text-muted">Mobile</p>
														</div>
													</div>
													<div class="mt-3">
														<canvas id="monthly-session" class="h-200"></canvas>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-5 col-lg-12 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-body">
										<div class="row d-flex">
											<div class="col-6">
												<span>Impressions</span>
												<h2 class="mb-1 mt-1 number-font">68,976</h2>
												<p class="card-text text-muted mb-0">
													<span class="text-success mr-1"><i class="ion-arrow-up-c"></i> 0.22%</span>
													for Last month
												</p>
											</div>
											<div class="col-6 text-center mb-0 ml-auto">
												<div class="impressions"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6 col-lg-6 col-sm-6">
										<div class="card text-center">
											<div class="card-body">
												<span>Sessions</span>
												<h2 class="mb-2 mt-1 number-font">56,897</h2>
												<p class="card-text text-muted mb-0">
													<span class="text-success mr-1"><i class="ion-arrow-up-b"></i> 1.67%</span>
													for Last month
												</p>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-sm-6">
										<div class="card text-center">
											<div class="card-body">
												<span>Bounce Rate</span>
												<h2 class="mb-2 mt-1 number-font">78.8%</h2>
												<p class="card-text text-muted mb-0">
													<span class="text-danger mr-1"><i class="ion-arrow-down-b"></i> 0.15%</span>
													for Last month
												</p>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-sm-6">
										<div class="card text-center">
											<div class="card-body">
												<span>Pageviews</span>
												<h2 class="mb-2 mt-1 number-font">12,789</h2>
												<p class="card-text text-muted mb-0">
													<span class="text-danger mr-1"><i class="ion-arrow-down-b"></i> 2.78%</span>
													for Last month
												</p>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-sm-6">
										<div class="card text-center">
											<div class="card-body">
												<span>Session Duration</span>
												<h2 class="mb-2 mt-1 number-font">5m : 34s</h2>
												<p class="card-text text-muted mb-0">
													<span class="text-success mr-1"><i class="ion-arrow-down-b text-success"></i> 1.56%</span>
													for Last month
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-9 col-lg-12 col-md-12">
								<div class="card overflow-hidden">
									<div class="chart-box mb-0">
										<div class="card-header py-5">
											<div>
												<h3 class="card-title">Total Revenue Of This Year</h3>
												<span class="d-block">Online and Offline Revenue Of Sales Performance</span>
											</div>
											<div class="card-options">
												<div class="chart-label">
													<div>
														<span>Online Revenue</span> <span class="bg-primary"></span>
													</div>
													<div>
														<span>Offline Revenue</span> <span class="bg-success"></span>
													</div>
												</div>
											</div>
										</div>
										<div class="card-body">
											<div class="ht-200 ht-lg-250 wd-100p" id="morrisBar1"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-12 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Sessions by Channel</h3>
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
											<h5 class="mb-2 d-block">
												<span class="fs-12">Organic Search</span>
												<span class="float-right fs-12"><b>1,234</b><span class="text-muted ml-1">(40%)</span></span>
											</h5>
											<div class="progress progress-md h-2">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-40"></div>
											</div>
										</div>
										<div class="mb-5">
											<h5 class="mb-2 d-block">
												<span class="fs-12">Email</span>
												<span class="float-right fs-12"><b>876</b><span class="text-muted ml-1">(70%)</span></span>
											</h5>
											<div class="progress progress-md h-2">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-70"></div>
											</div>
										</div>
										<div class="mb-5">
											<h5 class="mb-2 d-block">
												<span class="fs-12">Referral</span>
												<span class="float-right fs-12"><b>976</b><span class="text-muted ml-1">(60%)</span></span>
											</h5>
											<div class="progress progress-md h-2">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-60"></div>
											</div>
										</div>
										<div class="mb-5">
											<h5 class="mb-2 d-block">
												<span class="fs-12">Social</span>
												<span class="float-right fs-12"><b>927</b><span class="text-muted ml-1">(80%)</span></span>
											</h5>
											<div class="progress progress-md h-2">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning w-80"></div>
											</div>
										</div>
										<div class="mb-5">
											<h5 class="mb-2 d-block">
												<span class="fs-12">Paid Search</span>
												<span class="float-right fs-12"><b>2,189</b><span class="text-muted ml-1">(60%)</span></span>
											</h5>
											<div class="progress progress-md h-2">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-info w-60"></div>
											</div>
										</div>
										<div class="mb-5">
											<h5 class="mb-2 d-block">
												<span class="fs-12">Direct</span>
												<span class="float-right fs-12"><b>539</b><span class="text-muted ml-1">(30%)</span></span>
											</h5>
											<div class="progress progress-md h-2">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger w-30"></div>
											</div>
										</div>
										<div class="mb-0">
											<h5 class="mb-2 d-block">
												<span class="fs-12">Other</span>
												<span class="float-right fs-12"><b>289</b><span class="text-muted ml-1">(50%)</span></span>
											</h5>
											<div class="progress progress-md h-2">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-pink w-50"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-5 col-lg-12 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">To Visiting Regions</h3>
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
										<div class="table-responsive">
											<table class="table border table-vcenter text-nowrap  mb-0">
												<thead class="">
													<tr>
														<th>Regions</th>
														<th>Users</th>
														<th>Sessions</th>
														<th>Trend</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><img src="{{URL::asset('assets/images/flags/in.svg')}}" class="w-5 h-5 mr-2" alt="">India</td>
														<td>8,785</td>
														<td>45,897</td>
														<td><span class="spark1"></span></td>
													</tr>
													<tr>
														<td><img src="{{URL::asset('assets/images/flags/af.svg')}}" class="w-5 h-5 mr-2" alt="">Afghanistan</td>
														<td>2,786</td>
														<td>78,865</td>
														<td><span class="spark2"></span></td>
													</tr>
													<tr>
														<td><img src="{{URL::asset('assets/images/flags/ge.svg')}}" class="w-5 h-5 mr-2" alt="">Germany</td>
														<td>1,266</td>
														<td>39,768</td>
														<td><span class="spark3"></span></td>
													</tr>
													<tr>
														<td><img src="{{URL::asset('assets/images/flags/us.svg')}}" class="w-5 h-5 mr-2" alt="">United State</td>
														<td>2,786</td>
														<td>37,987</td>
														<td><span class="spark4"></span></td>
													</tr>
													<tr>
														<td><img src="{{URL::asset('assets/images/flags/au.svg')}}" class="w-5 h-5 mr-2" alt="">Australia</td>
														<td>3,786</td>
														<td>89,765</td>
														<td><span class="spark5"></span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-lg-12 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Visiting Customers</h3>
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
									<div class="card-body p-0 ">
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
							<div class="col-xl-3 col-lg-12 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Subscribers</h3>
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
									<div class="card-body pb-0">
										<div class="row">
											<div class="col text-center">
												<div class="mb-2 text-secondary">
													<i class="icon icon-user-female fs-30"></i>
												</div>
												<h3 class="number-font1 mb-0">50%</h3>
												<p class="mb-0">Female</p>
											</div>
											<div class="col border-left text-center">
												<div class="mb-2 text-success">
													<i class="icon icon-user fs-30"></i>
												</div>
												<h3 class="number-font1 mb-0">68%</h3>
												<p class="mb-0"> Male</p>
											</div>
										</div>
									</div>
									<div class="">
										<canvas id="subscribers" class="overflow-hidden"></canvas>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Google Analytics Traffic Channels & Goals</h3>
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
										<div class="table-responsive mb-0">
											<table class="table table-bordered text-nowrap mb-0">
												<thead>
													<tr>
														<th>Channel & Goals</th>
														<th>Sessions</th>
														<th>Bounce Rate</th>
														<th>Traffic</th>
														<th>Change</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Organic Search</td>
														<td>123,879</td>
														<td>45.9%</td>
														<td>7.5%</td>
														<td><span><i class="fa fa-arrow-up text-success mr-1"></i>56%</span></td>
													</tr>
													<tr>
														<td>Direct</td>
														<td>45,789</td>
														<td>32.1%</td>
														<td>3.5%</td>
														<td><span><i class="fa fa-arrow-up text-success mr-1"></i>12%</span></td>
													</tr>
													<tr>
														<td>Email</td>
														<td>67,892</td>
														<td>26.3%</td>
														<td>8.1%</td>
														<td><span><i class="fa fa-arrow-down text-danger mr-1"></i>33%</span></td>
													</tr>
													<tr>
														<td>Paid Search</td>
														<td>628,567</td>
														<td>9.3%</td>
														<td>6.0%</td>
														<td><span><i class="fa fa-arrow-up text-success mr-1"></i>45%</span></td>
													</tr>
													<tr>
														<td>Referral</td>
														<td>123,879</td>
														<td>78.6%</td>
														<td>6.8%</td>
														<td><span><i class="fa fa-arrow-down text-danger mr-1"></i>76%</span></td>
													</tr>
													<tr>
														<td>Call In</td>
														<td>89,298</td>
														<td>49.2%</td>
														<td>1.5%</td>
														<td><span><i class="fa fa-arrow-up text-success mr-1"></i>29%</span></td>
													</tr>
													<tr>
														<td>Contact Us</td>
														<td>397,268</td>
														<td>85.4%</td>
														<td>8.3%</td>
														<td><span><i class="fa fa-arrow-down text-danger mr-1"></i>12%</span></td>
													</tr>
													<tr>
														<td>Proposal</td>
														<td>924,179</td>
														<td>48.2%</td>
														<td>4.2%</td>
														<td><span><i class="fa fa-arrow-up text-success mr-1"></i>56%</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

					</div><!--End side app-->
@endsection
@section('js')
<!--Peitychart js -->
<script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>
<!-- Charts js-->
<script src="{{URL::asset('assets/plugins/chart/chart.bundle.js')}}"></script>
<script src="{{URL::asset('assets/plugins/chart/utils.js')}}"></script>
<!--Morris  Charts js-->
<script src="{{URL::asset('assets/plugins/morris/raphael-min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/morris/morris.js')}}"></script>
<!-- Custom-charts js-->
<script src="{{URL::asset('assets/js/index1.js')}}"></script>
@endsection