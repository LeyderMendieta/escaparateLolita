@extends('layouts.master')
@section('css')
<!-- Owl-Carousel css -->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title"><span class="subpage-title">Welcome To</span> E-Commerce Dashboard</h1>
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
									<a href="#" class="btn btn-danger btn-icon" data-toggle="tooltip" title="" data-placement="top" data-original-title="Support">
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
							<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-header">
										<div class="d-flex">
											<span class="avatar mr-3 br-3 align-self-center avatar-sm cover-image bg-primary-transparent text-primary">
												<i class="fe fe-briefcase"></i>
											</span>
											<h3 class="card-title mt-1">Orders</h3>
										</div>
									</div>
									<div class="card-body">
										<div>
											<p class="card-text text-muted mb-1">Total Orders</p>
											<h2 class="mb-2 number-font">78,765</h2>
											<div class="progress progress-md h-1 mb-1">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-60"></div>
											</div>
											<small class="text-muted"><span class="text-success font-weight-semibold"><i class="fe fe-arrow-up mr-1"></i>1.87%</span> this month</small>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-header">
										<div class="d-flex">
											<span class="avatar mr-3 br-3 align-self-center avatar-sm cover-image bg-secondary-transparent text-secondary">
												<i class="fe fe-shopping-cart"></i>
											</span>
											<h3 class="card-title mt-1">Products</h3>
										</div>
									</div>
									<div class="card-body">
										<div>
											<p class="card-text text-muted mb-1">Total Orders</p>
											<h2 class="mb-2 number-font">1,256,789</h2>
											<div class="progress progress-md h-1 mb-1">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-40"></div>
											</div>
											<small class="text-muted"><span class="text-danger font-weight-semibold"><i class="fe fe-arrow-down mr-1"></i>0.67%</span> this month</small>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-header">
										<div class="d-flex">
											<span class="avatar mr-3 br-3 align-self-center avatar-sm cover-image bg-success-transparent text-success">
												<i class="fe fe-dollar-sign"></i>
											</span>
											<h3 class="card-title mt-1">Returns</h3>
										</div>
									</div>
									<div class="card-body">
										<div>
											<p class="card-text text-muted mb-1">Total Returns</p>
											<h2 class="mb-2 number-font">5,789</h2>
											<div class="progress progress-md h-1 mb-1">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-20"></div>
											</div>
											<small class="text-muted"><span class="text-danger font-weight-semibold"><i class="fe fe-arrow-down mr-1"></i>0.12%</span> this month</small>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
								<div class="card">
									<div class="card-header">
										<div class="d-flex">
											<span class="avatar mr-3 br-3 align-self-center avatar-sm cover-image bg-warning-transparent text-warning">
												<i class="fe fe-eye"></i>
											</span>
											<h3 class="card-title mt-1">Visitors</h3>
										</div>
									</div>
									<div class="card-body">
										<div>
											<p class="card-text text-muted mb-1">Total Visitors</p>
											<h2 class="mb-2 number-font">23,678</h2>
											<div class="progress progress-md h-1 mb-1">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning w-70"></div>
											</div>
											<small class="text-muted"><span class="text-success font-weight-semibold"><i class="fe fe-arrow-up mr-1"></i>1.67%</span> this month</small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
								<div class="card overflow-hidden">
									<div class="card-header cards-tabs-option">
										<div>
											<h3 class="card-title">Order Summary</h3>
										</div>
										<div class="card-options">
											<div class="tab-menu-heading card-tabs-heading">
												<div class="tabs-menu card-tabs-menu">
													<ul class="nav card-navs">
														<li><a href="#tab-session1" class="active" data-toggle="tab">Month</a></li>
														<li><a href="#tab-session2" data-toggle="tab">Year</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div>
											<canvas id="order-summary" class="chartwidget"></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Order Activity</h3>
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
										<div class="list-group projects-list pt-0 pb-0 pl-0 pr-0">
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-0">
												<div class="d-flex w-100 justify-content-between">
													<h6 class="mb-1 font-weight-semibold ">Order Picking</h6>
													<h6 class="mb-0 font-weight-semibold text-dark">3,876</h6>
												</div>
												<div class="d-flex w-100 justify-content-between">
													<span class="text-muted"><i class="fe fe-arrow-down text-success "></i> 03% last month</span>
													<span class="text-muted">5 days ago</span>
												</div>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-left-0 border-right-0 border-top">
												<div class="d-flex w-100 justify-content-between">
													<h6 class="mb-1 font-weight-semibold ">Storage</h6>
													<h6 class="mb-0 font-weight-semibold text-dark">2,178</h6>
												</div>
												<div class="d-flex w-100 justify-content-between">
													<span class="text-muted"><i class="fe fe-arrow-down text-danger "></i> 16% last month</span>
													<span class="text-muted">2 days ago</span>
												</div>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-left-0 border-right-0 border-top">
												<div class="d-flex w-100 justify-content-between"> <h6 class="mb-1 font-weight-semibold ">Shipping</h6>
													<h6 class="mb-0 font-weight-semibold text-dark">1,367</h6>
												</div>
												<div class="d-flex w-100 justify-content-between">
													<span class="text-muted"><i class="fe fe-arrow-up text-success"></i> 06% last month</span>
													<span class="text-muted">1 days ago</span>
												</div>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-left-0 border-right-0 border-top">
												<div class="d-flex w-100 justify-content-between">
													<h6 class="mb-1 font-weight-semibold ">Receiving</h6>
													<h6 class="mb-0 font-weight-semibold text-dark">678</h6>
												</div>
												<div class="d-flex w-100 justify-content-between">
													<span class="text-muted"><i class="fe fe-arrow-down text-danger "></i> 25% last month</span>
													<span class="text-muted">10 days ago</span>
												</div>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-left-0 border-right-0 border-top">
												<div class="d-flex w-100 justify-content-between">
													<h6 class="mb-1 font-weight-semibold ">Other</h6>
													<h6 class="mb-0 font-weight-semibold text-dark">5,678</h6>
												</div>
												<div class="d-flex w-100 justify-content-between">
													<span class="text-muted"><i class="fe fe-arrow-up text-success "></i> 16% last month</span>
													<span class="text-muted">5 days ago</span>
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
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Recently Viewed</h3>
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
										<div id="myCarousel1" class="owl-carousel owl-carousel-icons">
											<div class="item">
												<div class="memberblock mb-0">
													<a href="" class="member"> <img src="{{URL::asset('assets/images/products/2.png')}}" alt="">
														<div class="memmbername">Mens Wear
															<p class="text-warning mb-0">
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star-half-full"> </i>
															</p>
														</div>
													</a>
												</div>
											</div>
											<div class="item">
												<div class="memberblock mb-0">
													<a href="" class="member"> <img src="{{URL::asset('assets/images/products/9.png')}}" alt="">
														<div class="memmbername">Electronics
															<p class="text-warning mb-0">
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star-o"> </i>
															</p>
														</div>
													</a>
												</div>
											</div>
											<div class="item">
												<div class="memberblock mb-0">
													<a href="" class="member"> <img src="{{URL::asset('assets/images/products/3.png')}}" alt="">
														<div class="memmbername">Accessories
															<p class="text-warning mb-0">
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star-half-full"> </i>
																<i class="fa fa-star-o"> </i>
															</p>
														</div>
													</a>
												</div>
											</div>
											<div class="item">
												<div class="memberblock mb-0">
													<a href="" class="member"> <img src="{{URL::asset('assets/images/products/5.png')}}" alt="">
														<div class="memmbername">Kids Wear
															<p class="text-warning mb-0">
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star-o"> </i>
															</p>
														</div>
													</a>
												</div>
											</div>
											<div class="item">
												<div class="memberblock mb-0">
													<a href="" class="member"> <img src="{{URL::asset('assets/images/products/4.png')}}" alt="">
														<div class="memmbername">Hand Bags
															<p class="text-warning mb-0">
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star-half-full"> </i>
															</p>
														</div>
													</a>
												</div>
											</div>
											<div class="item">
												<div class="memberblock mb-0">
													<a href="" class="member"> <img src="{{URL::asset('assets/images/products/1.png')}}" alt="">
														<div class="memmbername">Office Chair
															<p class="text-warning mb-0">
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star"> </i>
																<i class="fa fa-star-o"> </i>
																<i class="fa fa-star-o"> </i>
															</p>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Products Categories</h3>
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
											<div class="col-xl-6 col-lg-12">
												<div id="categroies" class="h-200"></div>
											</div>
											<div class="col-xl-6 col-lg-12">
												<div class="mb-3">
													<h5 class="mb-2 d-block">
														<span class="fs-12">Mens</span>
														<span class="float-right fs-12"><b>1,234</b><span class="text-muted ml-1">(40%)</span></span>
													</h5>
													<div class="progress progress-md h-1">
														<div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-40"></div>
													</div>
												</div>
												<div class="mb-3">
													<h5 class="mb-2 d-block">
														<span class="fs-12">Womens</span>
														<span class="float-right fs-12"><b>1,234</b><span class="text-muted ml-1">(40%)</span></span>
													</h5>
													<div class="progress progress-md h-1">
														<div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-40"></div>
													</div>
												</div>
												<div class="mb-3">
													<h5 class="mb-2 d-block">
														<span class="fs-12">Electronics</span>
														<span class="float-right fs-12"><b>1,234</b><span class="text-muted ml-1">(40%)</span></span>
													</h5>
													<div class="progress progress-md h-1">
														<div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-40"></div>
													</div>
												</div>
												<div class="mb-3">
													<h5 class="mb-2 d-block">
														<span class="fs-12">Baby& Kids </span>
														<span class="float-right fs-12"><b>1,234</b><span class="text-muted ml-1">(40%)</span></span>
													</h5>
													<div class="progress progress-md h-1">
														<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning w-40"></div>
													</div>
												</div>
												<div class="mb-0">
													<h5 class="mb-2 d-block">
														<span class="fs-12">Home & Furniture </span>
														<span class="float-right fs-12"><b>1,234</b><span class="text-muted ml-1">(40%)</span></span>
													</h5>
													<div class="progress progress-md h-1">
														<div class="progress-bar progress-bar-striped progress-bar-animated bg-info w-40"></div>
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
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
								<div class="card overflow-hidden">
									<div class="card-header cards-tabs-option">
										<div>
											<h3 class="card-title">Return Item Reasons</h3>
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
										<div class="row text-center">
											<div class=" col-xl-3 col-sm-6 mb-5 mb-xl-0">
												<p class="data-attributes mb-3">
													<span data-peity='{ "fill": ["#ff5964", "rgba(119, 119, 142, 0.2)"],   "innerRadius": 18, "radius": 28 }'>2/7</span>
												</p>
												<h3 class="mb-0 number-font1">37</h3>
												<p class="text-muted mb-0">Defective Items</p>
											</div>
											<div class=" col-xl-3 col-sm-6  mb-5 mb-xl-0">
												<p class="data-attributes mb-3">
													<span data-peity='{ "fill": ["#17d092", "rgba(119, 119, 142, 0.2)"],   "innerRadius": 18, "radius": 28 }'>5/7</span>
												</p>
												<h3 class="mb-0 number-font1">55</h3>
												<p class="text-muted mb-0">Damaged Items</p>
											</div>
											<div class=" col-xl-3 col-sm-6 mb-5 mb-xl-0 mb-md-0">
												<p class="data-attributes mb-3">
													<span data-peity='{ "fill": ["#fda008", "rgba(119, 119, 142, 0.2)"],   "innerRadius": 18, "radius": 28 }'>4/9</span>
												</p>
												<h3 class="mb-0 number-font1">45</h3>
												<p class="text-muted mb-0">Late Delivery</p>
											</div>
											<div class=" col-xl-3 col-sm-6  mb-5 mb-xl-0 mb-md-0 mb-sm-0">
												<p class="data-attributes mb-3">
													<span data-peity='{ "fill": ["#3ec7e8", "rgba(119, 119, 142, 0.2)"],   "innerRadius": 18, "radius": 28 }'>6/7</span>
												</p>
												<h3 class="mb-0 number-font1">60</h3>
												<p class="text-muted mb-0">Item Does Not Fit</p>
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
											<h3 class="card-title">Products Details</h3>
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
											<table class="table table-vcenter border mb-0 text-nowrap">
												<thead>
													<tr>
														<th>Product ID</th>
														<th>Product</th>
														<th>Product Cost</th>
														<th>Total</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>C234</td>
														<td>Mi LED Smart TV 4A 80</td>
														<td><b>$14,500</b></td>
														<td>2,977</td>
														<td><span class="badge badge-success">Available</span></td>
													</tr>
													<tr>
														<td>C389</td>
														<td>Thomson R9 122cm (48 inch) Full HD LED TV </td>
														<td><b>$30,000</b></td>
														<td>678</td>
														<td><span class="badge badge-primary">Limited</span></td>
													</tr>
													<tr>
														<td>C936</td>
														<td>Vu 80cm (32 inch) HD Ready LED TV</td>
														<td><b>$13,200</b></td>
														<td>4,922</td>
														<td><span class="badge badge-warning">Avilable</span></td>
													</tr>
													<tr>
														<td>C493</td>
														<td>Micromax 81cm (32 inch) HD Ready LED TV</td>
														<td><b>$15,100</b></td>
														<td>1,234</td>
														<td><span class="badge badge-secondary">Limited</span></td>
													</tr>
													<tr>
														<td>C729</td>
														<td>HP 200 Mouse &amp; Wireless Laptop Keyboard </td>
														<td><b>$5,987</b></td>
														<td>4,789</td>
														<td><span class="badge badge-danger">No Stock</span></td>
													</tr>
													<tr>
														<td>C529</td>
														<td>Digisol DG-HR3400 Router </td>
														<td><b>$11,987</b></td>
														<td>938</td>
														<td><span class="badge badge-success">Limited</span></td>
													</tr>
													<tr>
														<td>C367</td>
														<td>Dell WM118 Wireless Optical Mouse</td>
														<td><b>$4,700</b></td>
														<td>5,876</td>
														<td><span class="badge badge-secondary">Available</span></td>
													</tr>
													<tr>
														<td>C529</td>
														<td>Digisol DG-HR3400 Router </td>
														<td><b>$11,987</b></td>
														<td>938</td>
														<td><span class="badge badge-success">Limited</span></td>
													</tr>
													<tr>
														<td>C367</td>
														<td>Dell WM118 Wireless Optical Mouse</td>
														<td><b>$4,700</b></td>
														<td>5,876</td>
														<td><span class="badge badge-secondary">Available</span></td>
													</tr>
													<tr>
														<td>C298</td>
														<td>Dell 16 inch Laptop Backpack </td>
														<td><b>$678</b></td>
														<td>2,539</td>
														<td><span class="badge badge-cyan">Available</span></td>
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
<!-- Owl-Carousel js-->
<script src="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{URL::asset('assets/plugins/owl-carousel/owl.js')}}"></script>
<!--Morris  Charts js-->
<script src="{{URL::asset('assets/plugins/morris/raphael-min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/morris/morris.js')}}"></script>
<!--Peitychart js -->
<script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>
<!-- Custom-charts js-->
<script src="{{URL::asset('assets/js/index2.js')}}"></script>
@endsection