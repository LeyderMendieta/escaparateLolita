@extends('layouts.master')
@section('css')
<!-- Countdown css-->
<link href="{{URL::asset('assets/plugins/jquery-countdown/countdown.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title"><span class="subpage-title">Welcome To</span> IT Dashboard</h1>
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
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Project Report</h3>
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
											<div class="col-xl-7 mb-5 mb-xl-0">
												<p class="card-text text-muted mb-1 number-font">Project Compilation Ratio</p>
												<h2 class="number-font mb-1">85%</h2>
												<div class="progress progress-md mb-5">
													<div class="progress-bar bg-primary w-25"></div>
													<div class="progress-bar bg-secondary w-25"></div>
													<div class="progress-bar bg-success w-20"></div>
													<div class="progress-bar bg-warning w-15"></div>
												</div>
												<div class="row">
													<div class="col-xl-6 col-sm-6 mb-5 mb-xl-0">
														<div class="list d-flex align-items-center  mb-5">
															<div class="w-5 h-5 bg-primary mr-4 mb-2"></div>
															<div class="wrapper w-90">
																<h5 class="mb-0">Project Planning</h5>
																<div class="d-flex justify-content-between align-items-center">
																	<div class="d-flex align-items-center">
																		<p class="mb-0 text-muted">100% Completed</p>
																	</div>
																</div>
															</div>
														</div>
														<div class="list d-flex align-items-center  mb-5">
															<div class="w-5 h-5 bg-secondary mr-4 mb-2"></div>
															<div class="wrapper w-90">
																<h5 class="mb-0">Project Designing</h5>
																<div class="d-flex justify-content-between align-items-center">
																	<div class="d-flex align-items-center">
																		<p class="mb-0 text-muted">100% Completed</p>
																	</div>
																</div>
															</div>
														</div>
														<div class="list d-flex align-items-center  mb-5">
															<div class="w-5 h-5 bg-success mr-4 mb-2"></div>
															<div class="wrapper w-90">
																<h5 class="mb-0">Project Development</h5>
																<div class="d-flex justify-content-between align-items-center">
																	<div class="d-flex align-items-center">
																		<p class="mb-0 text-muted">67% In progress</p>
																	</div>
																</div>
															</div>
														</div>
														<div class="list d-flex align-items-center  mb-0">
															<div class="w-5 h-5 bg-warning mr-4 mb-2"></div>
															<div class="wrapper w-90">
																<h5 class="mb-0">Project Testing</h5>
																<div class="d-flex justify-content-between align-items-center">
																	<div class="d-flex align-items-center">
																		<p class="mb-0 text-muted">Waiting</p>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-xl-6 col-sm-6">
														<div class="d-flex clearfix mb-5">
															<div class="">
																<p class="text-muted mb-1">Assigned Projects</p>
																<h2 class="number-font mb-0">6,893<span class="card-text text-muted mb-0 fs-12">
																	<span class="text-success ml-1"><i class="ion-arrow-up-b"></i> 87%</span>
																	Project Ratio
																</span></h2>
															</div>
															<div class="ml-auto text-right">
																<span class="avatar br-3 avatar-lg bg-primary-transparent text-primary mb-3">
																	<i class="fe fe-package"></i>
																</span>
															</div>
														</div>
														<div class="clearfix mb-5">
															<div class="float-left">
																<p class="mb-1">Started Projects</p>
																<h2 class="number-font mb-0">5,437<span class="card-text text-muted mb-0 fs-12">
																	<span class="text-success ml-1"><i class="ion-arrow-up-b"></i> 75%</span>
																	Project Ratio
																</span></h2>
															</div>
															<div class="ml-auto text-right">
																<span class="avatar br-3 avatar-lg bg-secondary-transparent text-secondary mb-3">
																	<i class="fe fe-navigation"></i>
																</span>
															</div>
														</div>
														<div class="d-flex clearfix mb-0">
															<div class="">
																<p class="mb-1">Completed Projects</p>
																<h2 class="number-font mb-0">1,456<span class="card-text text-muted mb-0 fs-12">
																	<span class="text-success ml-1"><i class="ion-arrow-up-b"></i> 92%</span>
																	Project Ratio
																</span></h2>
															</div>
															<div class="ml-auto text-right">
																<span class="avatar br-3 avatar-lg bg-success-transparent text-success mb-3">
																	<i class="fe fe-target"></i>
																</span>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-xl-5">
												<div class="card text-white project-countdown mb-0">
													<div class="card-body">
														<h5 class="mb-1">Project Launch Date</h5>
														<h2 class="mt-2 number-font fs-30">162 days
															<span class="ml-1 mr-1 fs-20"></span>
															<span class="fs-12">12 March 2010</span>
														</h2>
														<p class="text-white-transparent">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it take a trivial example ...</p>
														<p>Countdown Start Now:</p>
														<div id="launch_date"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Project Budget</h3>
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
											<div class="col-6 mb-5">
												<div class="d-flex"><div class="w-2 h-2 bg-secondary mr-2 mt-1 mb-1"></div><p class="mb-1">Total Budget</p></div>
												<h3 class="mb-0 number-font1">$4,59,871 <span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down"></i>0.9%</span>last project</span></h3>
											</div>
											<div class="col-6 mb-5">
												<div class="d-flex"><div class="w-2 h-2 bg-success mr-2 mt-1 mb-1"></div><p class="mb-1">Remaining</p></div>
												<h3 class="mb-0 number-font1">$12,567 <span class="fs-12 text-muted"><span class="text-danger mr-1"><i class="fe fe-arrow-down"></i>0.9%</span>last project</span></h3>
											</div>
										</div>
										<div>
											<canvas id="budget" class="h-250"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Project Activity</h3>
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
										<div class="activity">
											<img src="{{URL::asset('assets/images/users/male/5.jpg')}}" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0"><b>Adam	Berry</b> Add a new projects <b> AngularJS Template</b></p>
													<small class="text-muted ">30 mins ago</small>
												</div>
											</div>
											<img src="{{URL::asset('assets/images/users/female/6.jpg')}}" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0"><b>Irene Hunter</b> Add a new projects <b>Free HTML Template</b></p>
													<small class="text-muted ">1 days ago</small>
												</div>
											</div>
											<img src="{{URL::asset('assets/images/users/male/7.jpg')}}" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity">
													<p class="mb-0"><b>John	Payne</b> Add a new projects <b>Free PSD Template</b></p>
													<small class="text-muted ">3 days ago</small>
												</div>
											</div>
											<img src="{{URL::asset('assets/images/users/female/8.jpg')}}" alt="" class="img-activity">
											<div class="time-activity">
												<div class="item-activity mb-0">
													<p class="mb-0"><b>Julia Hardacre</b> Add a new projects <b>Free UI Template</b></p>
													<small class="text-muted ">5 days ago</small>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="d-flex mb-4">
											<span class="avatar align-self-center avatar-lg br-3 cover-image bg-primary-transparent">
												<i class="fe fe-file text-primary"></i>
											</span>
											<div class="svg-icons text-right ml-auto">
												<p class="text-muted mb-2">Total Projects</p>
												<h2 class="mb-0 number-font1">25,356</h2>
											</div>
										</div>
										<div class="progress progress-md h-2">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-70"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="d-flex mb-4">
											<span class="avatar align-self-center avatar-lg br-3 cover-image bg-secondary-transparent">
												<i class="fe fe-users text-secondary"></i>
											</span>
											<div class="svg-icons text-right ml-auto">
												<p class="text-muted">Total Employees</p>
												<h2 class="mb-0 number-font">26,536</h2>
											</div>
										</div>
										<div class="progress progress-md h-2">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-50"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="d-flex mb-4">
											<span class="avatar align-self-center avatar-lg br-3 cover-image bg-success-transparent">
												<i class="fe fe-compass text-success"></i>
											</span>
											<div class="svg-icons text-right ml-auto">
												<p class="text-muted">Total Tasks</p>
												<h2 class="mb-0 number-font">17,356</h2>
											</div>
										</div>
										<div class="progress progress-md h-2">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-80"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="d-flex mb-4">
											<span class="avatar align-self-center avatar-lg br-3 cover-image bg-warning-transparent">
												<i class="fe fe-shield text-warning"></i>
											</span>
											<div class="svg-icons text-right ml-auto">
												<p class="text-muted">Total awards</p>
												<h2 class="mb-0 number-font">65,458</h2>
											</div>
										</div>
										<div class="progress progress-md h-2">
											<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning w-70"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-6 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Project Summary</h3>
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
										<div class="text-center mb-4">
											<span class="avatar avatar-xxl brround cover-image" data-image-src="{{URL::asset('assets/images/users/male/2.jpg')}}"></span>
											<h5 class="text-uppercase mt-3 mb-0 font-weight-semibold">Roseann Graig</h5>
											<p class="text-muted">Project Leader</p>
										</div>
										<div class="table-responsive">
											<table class="table border table-vcenter text-nowrap mb-0">
												<tbody>
													<tr>
														<th>Project</th>
														<td>Aajko</td>
													</tr>
													<tr>
														<th>Start Date</th>
														<td>20-09-2019</td>
													</tr>
													<tr>
														<th>End Date</th>
														<td>1-12-2019</td>
													</tr>
													<tr>
														<th>Team menbers</th>
														<td>5</td>
													</tr>
													<tr>
														<th>Project Status</th>
														<td>On Time</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="card-footer">
										<div class="product-filter-desc">
											<div class="product-filter-icons text-center">
												<a href="#" class="border text-primary p-0"><i class="fa fa-facebook"></i></a>
												<a href="#" class="border text-primary p-0"><i class="fa fa-twitter"></i></a>
												<a href="#" class="border text-primary p-0"><i class="fa fa-google"></i></a>
												<a href="#" class="border text-primary p-0"><i class="fa fa-dribbble"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Project Log</h3>
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
										<div class="activity1">
											<div class="activity-blog">
												<div class="activity-img br-3 bg-primary-transparent text-primary">
													<i class="fe fe-message-square fs-20"></i>
												</div>
												<div class="activity-details">
													<p class="mb-0"> Adam Berry <b>New Comments</b></p>
													<small class="text-muted ">30 mins ago</small>
												</div>
											</div>
											<div class="activity-blog">
												<div class="activity-img br-3 bg-secondary-transparent text-secondary">
													<i class="fe fe-check fs-20"></i>
												</div>
												<div class="activity-details">
													<p class="mb-0"> Adam Berry <b>Task Finished</b></p>
													<small class="text-muted ">30 mins ago</small>
												</div>
											</div>
											<div class="activity-blog">
												<div class="activity-img br-3 bg-success-transparent text-success">
													<i class="fe fe-alert-triangle fs-20"></i>
												</div>
												<div class="activity-details">
													<p class="mb-0"> Adam Berry <b>Task Overdue</b></p>
													<small class="text-muted ">30 mins ago</small>
												</div>
											</div>
											<div class="activity-blog">
												<div class="activity-img br-3 bg-warning-transparent text-warning">
													<i class="fe fe-activity fs-20"></i>
												</div>
												<div class="activity-details">
													<p class="mb-0"> Adam Berry <b>Task Activitied</b></p>
													<small class="text-muted ">30 mins ago</small>
												</div>
											</div>
											<div class="activity-blog">
												<div class="activity-img br-3 bg-danger-transparent text-danger">
													<i class="fe fe-paperclip fs-20"></i>
												</div>
												<div class="activity-details">
													<p class="mb-0"> Adam Berry <b>Fix the bug report</b></p>
													<small class="text-muted ">30 mins ago</small>
												</div>
											</div>
											<div class="activity-blog">
												<div class="activity-img br-3 bg-pink-transparent text-pink">
													<i class="fe fe-layers fs-20"></i>
												</div>
												<div class="activity-details">
													<p class="mb-0"> Adam Berry <b>Task Completed</b></p>
													<small class="text-muted ">30 mins ago</small>
												</div>
											</div>
										</div>
										<a class="text-center btn btn-primary" href="#">View Details</a>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Work Activity</h3>
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
										<div class="p-5 border-bottom">
											<p class=" mb-0 ">Complete Projects</p>
											<h3 class="mb-0 number-font">789<span class="fs-12 text-muted">
												<span class="text-success mr-1"><i class="fe fe-arrow-up ml-1"></i>0.15%</span>last year</span>
											</h3>
											<div class="row mt-3">
												<div class="col-sm-4 border-right mb-4 mb-md-0">
													<p class="mb-0 text-muted">This Week</p><h5 class="mb-0">234</h5>
												</div>
												<div class="col-sm-4 border-right mb-4 mb-md-0">
													<p class="mb-0 text-muted">Last Week</p><h5 class="mb-0">346</h5>
												</div>
												<div class="col-sm-4">
													<p class="mb-0 text-muted">Total</p><h5 class="mb-0">580</h5>
												</div>
											</div>
											<div class="progress progress-md h-1 mt-3">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-80"></div>
											</div>
										</div>
										<div class="p-5 border-bottom">
											<p class=" mb-0 ">Pending Projects</p>
											<h3 class="mb-0 number-font">388<span class="fs-12 text-muted">
												<span class="text-danger mr-1"><i class="fe fe-arrow-down ml-1"></i>0.5%</span>last year</span>
											</h3>
											<div class="row mt-3">
												<div class="col-sm-4 border-right mb-4 mb-md-0">
													<p class="mb-0 text-muted">This Week</p><h5 class="mb-0">156</h5>
												</div>
												<div class="col-sm-4 border-right mb-4 mb-md-0">
													<p class="mb-0 text-muted">Last Week</p><h5 class="mb-0">223</h5>
												</div>
												<div class="col-sm-4">
													<p class="mb-0 text-muted">Total</p><h5 class="mb-0">379</h5>
												</div>
											</div>
											<div class="progress progress-md h-1 mt-3">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-60"></div>
											</div>
										</div>
										<div class="p-5">
											<p class=" mb-0">Future Projects</p>
											<h3 class="mb-0 number-font">419<span class="fs-12 text-muted">
												<span class="text-success mr-1"><i class="fe fe-arrow-up ml-1"></i>1.25%</span>last year</span>
											</h3>
											<div class="row mt-3">
												<div class="col-sm-4 border-right mb-4 mb-md-0">
													<p class="mb-0 text-muted">This Week</p><h5 class="mb-0">89</h5>
												</div>
												<div class="col-sm-4 border-right mb-4 mb-md-0">
													<p class="mb-0 text-muted">Last Week</p><h5 class="mb-0">167</h5>
												</div>
												<div class="col-sm-4">
													<p class="mb-0 text-muted">Total</p><h5 class="mb-0">256</h5>
												</div>
											</div>
											<div class="progress progress-md h-1 mt-3">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-90"></div>
											</div>
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
											<h3 class="card-title">Project Details</h3>
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
											<table class="table border table-bordered mb-0 text-nowrap">
												<thead>
													<tr>
														<th>Project</th>
														<th>Team Lead</th>
														<th>Team Members</th>
														<th>Category</th>
														<th>Budget</th>
														<th>Project Status</th>
														<th>Deadline</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Project 01</td>
														<td><img src="{{URL::asset('assets/images/users/female/4.jpg')}}" class="w-5 h-5 avatar brround" alt=""> Harriett Lauver</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/2.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/1.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/9.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/2.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/4.jpg')}}" alt="img"></span>
															</div>
														</td>
														<td>Web Design</td>
														<td><b>$10513.00</b></td>
														<td>
															<div class="row mb-1">
																<div class="col"> Status </div> <div class="col col-auto"> 70% </div>
															</div>
															<div class="progress progress-sm h-1">
																<div class="progress-bar bg-secondary w-70" role="progressbar"></div>
															</div>
														</td>
														<td>10 Dec 2019</td>
													</tr>
													<tr>
														<td>Project 02</td>
														<td><img src="{{URL::asset('assets/images/users/female/5.jpg')}}" class="w-5 h-5 avatar brround" alt=""> Vashti Riccio</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/2.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/1.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/9.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/10.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/3.jpg')}}" alt="img"></span>
															</div>
														</td>
														<td>Web Developement</td>
														<td><b>$96584.00</b></td>
														<td>
															<div class="row mb-1">
																<div class="col"> Status </div>
																<div class="col col-auto"> 60% </div>
															</div>
															<div class="progress progress-sm h-1">
																<div class="progress-bar bg-primary w-60" role="progressbar"></div>
															</div>
														</td>
														<td>10 Nov 2019</td>
													</tr>
													<tr>
														<td>Project 03</td>
														<td><img src="{{URL::asset('assets/images/users/male/4.jpg')}}" class="w-5 h-5 avatar brround" alt=""> Darci Faw</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/2.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/2.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/9.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/2.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/4.jpg')}}" alt="img"></span>
															</div>
														</td>
														<td>Wordpress</td>
														<td><b>$45879.00</b></td>
														<td>
															<div class="row mb-1">
																<div class="col"> Status </div>
																<div class="col col-auto"> 40% </div>
															</div>
															<div class="progress progress-sm h-1">
																<div class="progress-bar bg-info w-40" role="progressbar"></div>
															</div>
														</td>
														<td>10 Dec 2019</td>
													</tr>
													<tr>
														<td>Project 04</td>
														<td><img src="{{URL::asset('assets/images/users/female/1.jpg')}}" class="w-5 h-5 avatar brround" alt=""> Corene Hirschman</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/1.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/2.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/9.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/8.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/6.jpg')}}" alt="img"></span>
															</div>
														</td>
														<td>Angular</td>
														<td><b>$68547.00</b></td>
														<td>
															<div class="row mb-1">
																<div class="col"> Status </div>
																<div class="col col-auto"> 70% </div>
															</div>
															<div class="progress progress-sm h-1">
																<div class="progress-bar bg-secondary w-70" role="progressbar"></div>
															</div>
														</td>
														<td>21 Feb 2020</td>
													</tr>
													<tr>
														<td>Project 05</td>
														<td><img src="{{URL::asset('assets/images/users/male/3.jpg')}}" class="w-5 h-5 avatar brround" alt=""> Jamie Norville</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/3.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/4.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/5.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/1.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/2.jpg')}}" alt="img"></span>
															</div>
														</td>
														<td>Web Design</td>
														<td><b>$47854.00</b></td>
														<td>
															<div class="row mb-1">
																<div class="col"> Status </div>
																<div class="col col-auto"> 50% </div>
															</div>
															<div class="progress progress-sm h-1">
																<div class="progress-bar bg-primary w-50" role="progressbar"></div>
															</div>
														</td>
														<td>21 Apr 2020</td>
													</tr>
													<tr>
														<td>Project 06</td>
														<td><img src="{{URL::asset('assets/images/users/female/3.jpg')}}" class="w-5 h-5 avatar brround" alt=""> Danae Kaba</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/6.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/7.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/8.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/3.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/4.jpg')}}" alt="img"></span>
															</div>
														</td>
														<td>Web Developemnt</td>
														<td><b>$69587.00</b></td>
														<td>
															<div class="row mb-1">
																<div class="col"> Status </div>
																<div class="col col-auto"> 60% </div>
															</div>
															<div class="progress progress-sm h-1">
																<div class="progress-bar bg-info w-60" role="progressbar"></div>
															</div>
														</td>
														<td>16 May 2020</td>
													</tr>
													<tr>
														<td>Project 07</td>
														<td><img src="{{URL::asset('assets/images/users/female/7.jpg')}}" class="w-5 h-5 avatar brround" alt=""> Harriett Lauver</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/9.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/10.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/5.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/6.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/7.jpg')}}" alt="img"></span>
															</div>
														</td>
														<td>Wordpress</td>
														<td><b>$78549.00</b></td>
														<td>
															<div class="row mb-1">
																<div class="col"> Status </div>
																<div class="col col-auto"> 80% </div>
															</div>
															<div class="progress progress-sm h-1">
																<div class="progress-bar bg-success w-80" role="progressbar"></div>
															</div>
														</td>
														<td>16 Feb 2020</td>
													</tr>
													<tr>
														<td>Project 08</td>
														<td><img src="{{URL::asset('assets/images/users/male/4.jpg')}}" class="w-5 h-5 avatar brround" alt=""> Jeromy Tricarico</td>
														<td>
															<div class="avatar-list avatar-list-stacked">
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/2.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/2.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/8.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/female/9.jpg')}}" alt="img"></span>
																<span><img class="avatar brround mr-2 mCS_img_loaded" src="{{URL::asset('assets/images/users/male/10.jpg')}}" alt="img"></span>
															</div>
														</td>
														<td>Angular</td>
														<td><b>$96587.00</b></td>
														<td>
															<div class="row mb-1">
																<div class="col"> Status </div>
																<div class="col col-auto"> 20% </div>
															</div>
															<div class="progress progress-sm h-1">
																<div class="progress-bar bg-danger w-20" role="progressbar"></div>
															</div>
														</td>
														<td>18 Jan 2020</td>
													</tr>
												</tbody>
											</table>
										</div>
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
<!--Count-down -->
<script src="{{URL::asset('assets/plugins/jquery-countdown/countdown.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-countdown/jquery.plugin.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-countdown/jquery.countdown.js')}}"></script>
<!-- Custom-charts js-->
<script src="{{URL::asset('assets/js/index4.js')}}"></script>
@endsection