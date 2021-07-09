@extends('admon.layouts.principal')

@section('titulo')
<title>Dashboard - Administración Escaparate</title>
@endsection

@section('css')
<!-- Owl-Carousel css -->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title"><span class="subpage-title">Bienvenido al </span> Dashboard</h1>
						</div>
						<!-- End page-header -->
@endsection
@section('content')
						<div class="w-100" id="App_admdashboards_sect1">							
						</div>

						<!-- Row -->
						<div class="row d-none">
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

					</div>
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