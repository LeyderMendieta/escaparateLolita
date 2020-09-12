@extends('layouts.master')
@section('css')
<!--Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Product Details</h1>
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
							<div class="col-lg-12 col-xl-9">
								<div class="card">
									<div class="card-body single-productslide">
										<div class="product-gallery border">
											<div class="product-item text-center">
												<img src="{{URL::asset('assets/images/products/2.png')}}" alt="img">
											</div>
										</div>
										<div class="product-gallery-data mb-0">
											<h3 class="mb-3 font-weight-semibold">Mens T-Shirt</h3>
											<div class="mb-3">
												<span class="font-weight-semibold h1 text-dark">$5678</span>
												<span class="text-primary ml-2"><i class="fa fa-info-circle"></i> 20% off</span>
											</div>
											<h6 class="font-weight-semibold mt-3">DESCRIPTION</h6>
											<p class="text-muted">labore et dolore magna  enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
											<dl class="product-gallery-data1">
												<dt>Color</dt>
												<dd>Sky blue</dd>
											</dl>
											<dl class="product-gallery-data1">
												<dt>Delivery</dt>
												<dd>Russia, USA, and Europe</dd>
											</dl>
											<div class="product-gallery-rats">
												<ul class="product-gallery-rating">
													<li>
														<a href="#"><i class="fa fa-star text-warning"></i></a>
														<a href="#"><i class="fa fa-star text-warning"></i></a>
														<a href="#"><i class="fa fa-star text-warning"></i></a>
														<a href="#"><i class="fa fa-star text-warning"></i></a>
														<a href="#"><i class="fa fa-star-o text-warning"></i></a>
													</li>
												</ul>
												<div class="label-rating ml-2">793 reviews</div>
											</div>
											<div class="row">
												<div class="col-12 mb-0">
													<dl class="product-gallery-quty mt-2 mb-0">
														<dt class="mb-2">Quantity :</dt>
														<dd>
															<div class="form-group mb-0">
																<select name="quantity" id="select-countries17" class="form-control select-sm  w-8 custom-select">
																	<option value="1" selected="">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																</select>
															</div>
														</dd>
													</dl>
												</div>
												<div class="col-12">
													<dl class="product-gallery-size mt-0">
														<dt>Size:</dt>
														<dd>
															<div class="product-gallery-checks custom-controls-stacked mt-1">
																<label class="custom-control custom-checkbox ml-0">
																	<input type="checkbox" class="custom-control-input" name="scheckbox" value="option1">
																	<span class="custom-control-label">SM</span>
																</label>
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="scheckbox" value="option1">
																	<span class="custom-control-label">MD</span>
																</label>
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="scheckbox" value="option1">
																	<span class="custom-control-label">XL</span>
																</label>
																<label class="custom-control custom-checkbox">
																	<input type="checkbox" class="custom-control-input" name="scheckbox" value="option1">
																	<span class="custom-control-label">XXL</span>
																</label>
															</div>
														</dd>
													</dl>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer text-right">
										<a href="#" class="btn  btn-info"> Buy now </a>
										<a href="#" class="btn  btn-success"> <i class="fa fa-shopping-cart"></i> Add to cart </a>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-3">
								<div class="card">
									<div class="row card-body p-2">
										<div class="col-sm-12 p-0">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Search ...">
												<span class="input-group-append">
													<button class="btn btn-primary" type="button">Search</button>
												</span>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-lg-12">
										<form class="shop__filter card">
											<div class="card-header">
												<h3 class="card-title">
													Colors
												</h3>
											</div>
											<div class="card-body">
												<div class="row gutters-xs">
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="azure" class="colorinput-input" checked="">
															<span class="colorinput-color bg-azure"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="indigo" class="colorinput-input">
															<span class="colorinput-color bg-indigo"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="purple" class="colorinput-input">
															<span class="colorinput-color bg-purple"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="pink" class="colorinput-input">
															<span class="colorinput-color bg-pink"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="red" class="colorinput-input">
															<span class="colorinput-color bg-red"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="orange" class="colorinput-input">
															<span class="colorinput-color bg-orange"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="yellow" class="colorinput-input">
															<span class="colorinput-color bg-yellow"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="lime" class="colorinput-input">
															<span class="colorinput-color bg-lime"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="green" class="colorinput-input">
															<span class="colorinput-color bg-green"></span>
														</label>
													</div>
													<div class="col-auto">
														<label class="colorinput">
															<input name="color" type="radio" value="teal" class="colorinput-input">
															<span class="colorinput-color bg-teal"></span>
														</label>
													</div>
												</div>
											</div>
										</form>
										<div class="card">
											<div class="card-header">
												<div class="card-title"> Categories</div>
											</div>
											<div class="card-body">
												<div class="form-group">
													<label class="form-label">Mens</label>
													<select name="beast" id="select-beast" class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Foot wear</option>
														<option value="2">Top wear</option>
														<option value="3">Bootom wear</option>
														<option value="4">Men's Groming</option>
														<option value="5">Accessories</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Women</label>
													<select name="beast" id="select-beast1" class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Western wear</option>
														<option value="2">Foot wear</option>
														<option value="3">Top wear</option>
														<option value="4">Bootom wear</option>
														<option value="5">Beuty Groming</option>
														<option value="6">Accessories</option>
														<option value="7">jewellery</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Baby & Kids</label>
													<select name="beast" id="select-beast2" class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Boys clothing</option>
														<option value="2">girls Clothing</option>
														<option value="3">Toys</option>
														<option value="4">Baby Care</option>
														<option value="5">Kids footwear</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Electronics</label>
													<select name="beast" id="select-beast3" class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Mobiles</option>
														<option value="2">Laptops</option>
														<option value="3">Gaming & Accessories</option>
														<option value="4">Health care Appliances</option>
													</select>
												</div>
												<div class="form-group">
													<label class="form-label">Sport,Books & More </label>
													<select name="beast" id="select-beast4" class="form-control custom-select select2">
														<option value="0">--Select--</option>
														<option value="1">Stationery</option>
														<option value="2">Books</option>
														<option value="3">Gaming</option>
														<option value="4">Music</option>
														<option value="5">Exercise & fitness</option>
													</select>
												</div>
											</div>
										</div>
										<!-- Filter -->
										<form class="shop__filter card">
											<div class="card-header">
												<h3 class="card-title">
													Price
												</h3>
											</div>
											<div class="card-body">
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
													<span class="custom-control-label">Under $25</span>
												</label>
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios" value="option2">
													<span class="custom-control-label">$25 to $50</span>
												</label>
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios" value="option2">
													<span class="custom-control-label">$50 to $100</span>
														</label>
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="example-radios" value="option2">
													<span class="custom-control-label">Other (specify)</span>
												</label>
											</div>
										</form>
									</div>
								</div><!-- row end -->
							</div><!-- col end -->
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
<!--Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection