@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Pie Charts</h1>
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
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Pie Chart</h3>
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
									<div class="text-center">
										<div class="row">
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#5964ff", "rgba(119, 119, 142, 0.2)"]}'>1/5</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#ff5964", "rgba(119, 119, 142, 0.2)"]}'>226/360</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#17d092", "rgba(119, 119, 142, 0.2)"]}'>0.52/1.561</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#fda008", "rgba(119, 119, 142, 0.2)"]}'>1,4</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#3ec7e8", "rgba(119, 119, 142, 0.2)"]}'>226,134</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="pie" data-peity='{ "fill": ["#f5474b", "rgba(119, 119, 142, 0.2)"]}'>0.52,1.041</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Donut Charts</h3>
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
									<div class="text-center">
										<div class="row">
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#5964ff", "rgba(119, 119, 142, 0.2)"]}'>1/5</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#ff5964", "rgba(119, 119, 142, 0.2)"]}'>226/360</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#17d092", "rgba(119, 119, 142, 0.2)"]}'>0.52/1.561</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#fda008", "rgba(119, 119, 142, 0.2)"]}'>1,4</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#3ec7e8", "rgba(119, 119, 142, 0.2)"]}'>226,134</span>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<span class="donut" data-peity='{ "fill": ["#f5474b", "rgba(119, 119, 142, 0.2)"]}'>0.52,1.041</span>
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
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Line Charts</h3>
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
									<div class="text-center">
										<div class="row">
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="peity-line" data-peity='{ "fill": ["#5964ff "],"stroke":["#5964ff"]}' data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="peity-line" data-peity='{ "fill": ["#ff5964"],"stroke":["#ff5964"]}' data-width="100%">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="peity-line" data-peity='{ "fill": ["#17d092"],"stroke":["#17d092"]}' data-width="100%">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Bar Charts</h3>
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
									<div class="text-center">
										<div class="row">
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="bar" data-peity='{ "fill": ["#ff5964", "#5964ff"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="bar" data-peity='{ "fill": ["#17d092", "#fda008"]}'>6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="card-body ">
													<span class="bar" data-peity='{ "fill": ["#3ec7e8", "#f5474b"]}'>6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
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
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Data attributes</h3>
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
									<div class="text-center">
										<div class="row">
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#5964ff", "rgba(119, 119, 142, 0.2)"],    "innerRadius": 10, "radius": 40 }'>1/7</span>
													</p>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#ff5964", "rgba(119, 119, 142, 0.2)"], "innerRadius": 14, "radius": 36 }'>2/7</span>
													</p>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#17d092", "rgba(119, 119, 142, 0.2)"], "innerRadius": 16, "radius": 32 }'>3/7</span>
													</p>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#fda008", "rgba(119, 119, 142, 0.2)"],  "innerRadius": 18, "radius": 28 }'>4/7</span>
													</p>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#3ec7e8", "rgba(119, 119, 142, 0.2)"],   "innerRadius": 20, "radius": 24 }'>5/7</span>
													</p>
												</div>
											</div>
											<div class="col-lg-2 col-md-4">
												<div class="card-body ">
													<p class="data-attributes">
														<span data-peity='{ "fill": ["#f5474b", "rgba(119, 119, 142, 0.2)"], "innerRadius": 18, "radius": 20 }'>6/7</span>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Setting Colours Dynamically</h3>
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
									<div class="text-center">
										<div class="row">
											<div class="col-lg-3">
												<div class="card-body ">
													<span class="bar-colours-1">5,3,9,6,5,9,7,3,5,2</span>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="card-body ">
													<span class="bar-colours-2">5,3,2,-1,-3,-2,2,3,5,2</span>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="card-body ">
													<span class="bar-colours-3">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span>
												</div>
											</div>
											<div class="col-lg-3">
												<div class="card-body ">
													<span class="pie-colours-2">5,3,9,6,5</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Updating Charts</h3>
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
									<div class="card-body text-center">
										<span class="updating-chart" data-peity='{ "fill": ["#5964ff "],"stroke":["#5964ff "]}'>5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->

					</div>
@endsection
@section('js')
<!--Peitychart js -->
<script src="{{URL::asset('assets/plugins/peitychart/jquery.peity.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/peitychart/peitychart.init.js')}}"></script>
@endsection