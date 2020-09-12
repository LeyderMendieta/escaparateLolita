@extends('layouts.master')
@section('css')
<!-- Rating css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/css/examples.css')}}">
<!-- RatingThemes css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/dist/themes/bars-1to10.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/dist/themes/bars-movie.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/dist/themes/bars-square.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/dist/themes/bars-pill.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/dist/themes/bars-reversed.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/dist/themes/bars-horizontal.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/dist/themes/fontawesome-stars.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/dist/themes/css-stars.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/dist/themes/bootstrap-stars.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/rating/dist/themes/fontawesome-stars-o.css')}}">
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Rating</h1>
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
						<div class="row row-cards">
							<div class="col-md-12 col-lg-6 col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Star Rating</h3>
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
										<div class="rating-stars block" id="rating">
											<input type="number" readonly="readonly" class="rating-value" name="rating-stars-value" id="rating-stars-value" value="1">
											<div class="rating-stars-container">
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-star"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-md-12 col-lg-6 col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Heart Rating</h3>
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
										<div class="rating-stars block" id="another-rating">
											<input type="number" readonly="readonly" class="rating-value" name="another-rating-stars-value" id="another-rating-stars-value" value="2">
											<div class="rating-stars-container">
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
												<div class="rating-star">
													<i class="fa fa-heart"></i>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-md-12 col-lg-6 col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Fractional Star rating</h3>
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
										<div class="star-ratings">
											<div class="stars stars-example-fontawesome-o">
												<select id="example-fontawesome-o" name="rating" data-current-rating="3.6" autocomplete="off">
												  <option value="1">1</option>
												  <option value="2">2</option>
												  <option value="3">3</option>
												  <option value="4">4</option>
												  <option value="5">5</option>
												  <option value="6">6</option>
												  <option value="7">7</option>
												  <option value="8">8</option>
												  <option value="9">9</option>
												  <option value="10">10</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Font Awesome Star Rating</h3>
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
										<div class="star-ratings start-ratings-main clearfix">
										  <div class="stars stars-example-fontawesome">
											<select id="example-fontawesome" name="rating" autocomplete="off">
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											</select>
										  </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Bar 1/10 Rating</h3>
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
										<div class="box  box-example-1to10">
										  <div class="box-body">
											<select id="example-1to10" name="rating" autocomplete="off">
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											  <option value="6">6</option>
											  <option value="7" selected="selected">7</option>
											  <option value="8">8</option>
											  <option value="9">9</option>
											  <option value="10">10</option>
											</select>
										  </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Opinion rating</h3>
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
										<div class="box box-example-movie">
										  <div class="box-body">
											<select id="example-movie" name="rating" autocomplete="off">
											  <option value="Bad">Bad</option>
											  <option value="Mediocre">Mediocre</option>
											  <option value="Good" selected="selected">Good</option>
											  <option value="Awesome">Awesome</option>
											</select>
										  </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Square Rating</h3>
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
										<div class="box box-example-square">
										  <div class="box-body">
											<select id="example-square" name="rating" autocomplete="off">
											  <option value="1">1</option>
											  <option value="2">2</option>
											  <option value="3">3</option>
											  <option value="4">4</option>
											  <option value="5">5</option>
											</select>
										  </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6 col-sm-12 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Grade Rating</h3>
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
										<div class="box  box-example-pill">
										  <div class="box-body">
											<select id="example-pill" name="rating" autocomplete="off">
											  <option value="A">A</option>
											  <option value="B">B</option>
											  <option value="C">C</option>
											  <option value="D">D</option>
											  <option value="E">E</option>
											  <option value="F">F</option>
											</select>
										  </div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-sm-12 col-xl-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Horizontal Bar Rating</h3>
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
										<div class="box box-large box-example-horizontal">
										  <div class="box-body">
											<select id="example-horizontal" name="rating" autocomplete="off">
											  <option value="10">10</option>
											  <option value="9">9</option>
											  <option value="8">8</option>
											  <option value="7">7</option>
											  <option value="6">6</option>
											  <option value="5">5</option>
											  <option value="4">4</option>
											  <option value="3">3</option>
											  <option value="2">2</option>
											  <option value="1" selected="selected">1</option>
											</select>
										  </div>
										</div>
									</div>
								</div>
							</div>
							<!-- col end -->
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
<!--Rating js-->
<script src="{{URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
<script src="{{URL::asset('assets/plugins/rating/jquery.barrating.js')}}"></script>
<script src="{{URL::asset('assets/plugins/rating/js/examples.js')}}"></script>
@endsection