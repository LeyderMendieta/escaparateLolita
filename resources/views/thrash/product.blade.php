@extends('layouts.master')
@section('css')
<!--Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Products</h1>
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
								<div class="row">
									<div class="col-sm-4 col-xl-4">
										<div class="card item-card ">
										     <div class="ribbone">
												<span class="ribbon1">
													<span>25%</span>
												</span>
											</div>
											<div class="card-body">
												<div class="product">
													<div class="text-center product-img">
														<img src="{{URL::asset('assets/images//products/7.png')}}" alt="img" class="img-fluid">
													</div>
													<div class="text-center mt-4">
														<div class="text-center text-warning">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<a href="#"><h5 class="mb-0 mt-2">Fashion shoes</h5></a>
														<div class="price mt-3 h4 mb-0 ">
															<s class="h4 text-muted mr-4">$999.00</s>$799.00
														</div>
													</div>
													<div class="product-info">
														<a href="#" class="btn  btn-info btn-sm mt-1 mb-1 text-sm  text-white">
															<i class="fe fe-heart"></i>
														</a>
														<a href="#" class="btn btn-icon btn-sm btn-danger mt-1 text-sm  mb-1 text-white">
															<i class="fe fe-share-2"></i>
														</a>
														<a href="#" class="btn btn-icon btn-sm btn-warning mt-1 text-sm  mb-1 text-white">
															<i class="fe fe-shopping-cart"></i>
														</a>
													</div>
												</div>
											</div>
									    </div>
									</div>
									<div class="col-sm-4 col-xl-4">
										<div class="card item-card">
											<div class="card-body">
												<div class="product">
													<div class="text-center product-img">
														<img src="{{URL::asset('assets/images//products/1.png')}}" alt="img" class="img-fluid">
													</div>
													<div class=" text-center mt-4">
														<div class="text-center text-warning">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<a href="#"><h5 class="mb-0 mt-2">Watch</h5></a>
														<div class="price mt-3 h4 mb-0">
															<s class="h4 text-muted mr-4">$80.00</s>$59.00
														</div>
													</div>
													<div class="product-info">
														<a href="#" class="btn  btn-info btn-sm mt-1 mb-1 text-sm  text-white">
															<i class="fe fe-heart"></i>
														</a>
														<a href="#" class="btn btn-icon btn-sm btn-danger mt-1 text-sm  mb-1 text-white">
															<i class="fe fe-share-2"></i>
														</a>
														<a href="#" class="btn btn-icon btn-sm btn-warning mt-1 text-sm  mb-1 text-white">
															<i class="fe fe-shopping-cart"></i>
														</a>
													</div>
												</div>
											</div>
									    </div>
									</div>
									<div class="col-sm-4 col-xl-4">
										<div class="card item-card">
											<div class="card-body">
												<div class="product">
													<div class="text-center product-img">
														<img src="{{URL::asset('assets/images//products/9.png')}}" alt="img" class="img-fluid">
													</div>
													<div class=" text-center mt-4">
														<div class="text-center text-warning">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
														</div>
														<a href="#"><h5 class="mb-0 mt-2">Mens Shoes</h5></a>
														<div class="price mt-3 h4 mb-0">
															<s class="h4 text-muted mr-4">$56.00</s>$38.00
														</div>
													</div>
													<div class="product-info">
														<a href="#" class="btn  btn-info btn-sm mt-1 mb-1 text-sm  text-white">
															<i class="fe fe-heart"></i>
														</a>
														<a href="#" class="btn btn-icon btn-sm btn-danger mt-1 text-sm  mb-1 text-white">
															<i class="fe fe-share-2"></i>
														</a>
														<a href="#" class="btn btn-icon btn-sm btn-warning mt-1 text-sm  mb-1 text-white">
															<i class="fe fe-shopping-cart"></i>
														</a>
													</div>
												</div>
											</div>
									    </div>
									</div>
									<div class="col-sm-4 col-xl-4">
										<div class="card item-card">
											<div class="product">
												<div class="card-body">
													<div class="text-center product-img">
														<img src="{{URL::asset('assets/images//products/2.png')}}" alt="img" class="img-fluid">
													</div>
													<div class=" text-center mt-4">
														<div class="text-center text-warning">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<a href="#"><h5 class="mb-0 mt-2">Leather Watch</h5></a>
														<div class="price mt-3 h4 mb-0">
															<s class="h4 text-muted mr-4">$76.00</s>$58.00
														</div>
													</div>
												</div>
												<div class="product-info">
													<a href="#" class="btn  btn-info btn-sm mt-1 mb-1 text-sm  text-white">
														<i class="fe fe-heart"></i>
													</a>
													<a href="#" class="btn btn-icon btn-sm btn-danger mt-1 text-sm  mb-1 text-white">
														<i class="fe fe-share-2"></i>
													</a>
													<a href="#" class="btn btn-icon btn-sm btn-warning mt-1 text-sm  mb-1 text-white">
														<i class="fe fe-shopping-cart"></i>
													</a>
												</div>
											</div>
									    </div>
									</div>
									<div class="col-sm-4 col-xl-4">
										<div class="card item-card">
										    <div class="ribbone">
												<span class="ribbon1">
													<span>15%</span>
												</span>
											</div>
											<div class="product">
												<div class="card-body">
													<div class="text-center product-img">
														<img src="{{URL::asset('assets/images//products/4.png')}}" alt="img" class="img-fluid">
													</div>
													<div class=" text-center mt-4">
														<div class="text-center text-warning">
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<a href="#"><h5 class="mb-0 mt-2">Digital Watch</h5></a>
														<div class="price mt-3 h4 mb-0">
															<s class="h4 text-muted mr-4">$99.00</s>$74.00
														</div>
													</div>
												</div>
												<div class="product-info">
													<a href="#" class="btn  btn-info btn-sm mt-1 mb-1 text-sm  text-white">
														<i class="fe fe-heart"></i>
													</a>
													<a href="#" class="btn btn-icon btn-sm btn-danger mt-1 text-sm  mb-1 text-white">
														<i class="fe fe-share-2"></i>
													</a>
													<a href="#" class="btn btn-icon btn-sm btn-warning mt-1 text-sm  mb-1 text-white">
														<i class="fe fe-shopping-cart"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4 col-xl-4">
										<div class="card item-card">
											<div class="product">
												<div class="card-body">
													<div class="text-center product-img">
														<img src="{{URL::asset('assets/images//products/8.png')}}" alt="img" class="img-fluid">
													</div>
													<div class=" text-center mt-4">
														<div class="text-center text-warning">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
														</div>
														<a href="#"><h5 class="mb-0 mt-2">Ladies shoes</h5></a>
														<div class="price mt-3 h4 mb-0">
															<s class="h4 text-muted mr-4">$45.00</s>$23.00
														</div>
													</div>
												</div>
											</div>
											<div class="product-info">
												<a href="#" class="btn  btn-info btn-sm mt-1 mb-1 text-sm  text-white">
													<i class="fe fe-heart"></i>
												</a>
												<a href="#" class="btn btn-icon btn-sm btn-danger mt-1 text-sm  mb-1 text-white">
													<i class="fe fe-share-2"></i>
												</a>
												<a href="#" class="btn btn-icon btn-sm btn-warning mt-1 text-sm  mb-1 text-white">
													<i class="fe fe-shopping-cart"></i>
												</a>
											</div>
									    </div>
									</div>
									<div class="col-sm-4 col-xl-4">
										<div class="card item-card">
											<div class="product">
												<div class="card-body">
													<div class="text-center product-img">
														<img src="{{URL::asset('assets/images//products/3.png')}}" alt="img" class="img-fluid">
													</div>
													<div class=" text-center mt-4">
														<div class="text-center text-warning">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
															<i class="fa fa-star-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<a href="#"><h5 class="mb-0 mt-2">Leather Watch</h5></a>
														<div class="price mt-3 h4 mb-0">
															<s class="h4 text-muted mr-4">$25.00</s>$15.00
														</div>
													</div>
												</div>
												<div class="product-info">
													<a href="#" class="btn  btn-info btn-sm mt-1 mb-1 text-sm  text-white">
														<i class="fe fe-heart"></i>
													</a>
													<a href="#" class="btn btn-icon btn-sm btn-danger mt-1 text-sm  mb-1 text-white">
														<i class="fe fe-share-2"></i>
													</a>
													<a href="#" class="btn btn-icon btn-sm btn-warning mt-1 text-sm  mb-1 text-white">
														<i class="fe fe-shopping-cart"></i>
													</a>
												</div>
											</div>
									    </div>
									</div>
									<div class="col-sm-4 col-xl-4">
										<div class="card item-card">
											<div class="product">
												<div class="card-body">
													<div class="text-center product-img">
														<img src="{{URL::asset('assets/images//products/5.png')}}" alt="img" class="img-fluid">
													</div>
													<div class=" text-center mt-4">
														<div class="text-center text-warning">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
															<i class="fa fa-star-o"></i>
														</div>
														<a href="#"><h5 class="mb-0 mt-2">Gold Watch</h5></a>
														<div class="price mt-3 h4 mb-0">
															<s class="h4 text-muted mr-4">$56.00</s>$39.00
														</div>
													</div>
												</div>
												<div class="product-info">
													<a href="#" class="btn  btn-info btn-sm mt-1 mb-1 text-sm  text-white">
														<i class="fe fe-heart"></i>
													</a>
													<a href="#" class="btn btn-icon btn-sm btn-danger mt-1 text-sm  mb-1 text-white">
														<i class="fe fe-share-2"></i>
													</a>
													<a href="#" class="btn btn-icon btn-sm btn-warning mt-1 text-sm  mb-1 text-white">
														<i class="fe fe-shopping-cart"></i>
													</a>
												</div>
											</div>
									    </div>
									</div>
									<div class="col-sm-4 col-xl-4">
										<div class="card item-card">
										    <div class="ribbone">
												<span class="ribbon1">
													<span>30%</span>
												</span>
											</div>
											<div class="product">
												<div class="card-body">
													<div class="text-center product-img">
														<img src="{{URL::asset('assets/images//products/6.png')}}" alt="img" class="img-fluid">
													</div>
													<div class=" text-center mt-4">
														<div class="text-center text-warning">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-o"></i>
														</div>
														<a href="#"><h5 class="mb-0 mt-2">Sport shoes</h5></a>
														<div class="price mt-3 h4 mb-0">
															<s class="h4 text-muted mr-4">$28.00</s>$15.00
														</div>
													</div>
												</div>
												<div class="product-info">
													<a href="#" class="btn  btn-info btn-sm mt-1 mb-1 text-sm  text-white">
														<i class="fe fe-heart"></i>
													</a>
													<a href="#" class="btn btn-icon btn-sm btn-danger mt-1 text-sm  mb-1 text-white">
														<i class="fe fe-share-2"></i>
													</a>
													<a href="#" class="btn btn-icon btn-sm btn-warning mt-1 text-sm  mb-1 text-white">
														<i class="fe fe-shopping-cart"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6 col-sm-12 mb-3 shop-count">
										<p>1 - 10 of 234 photos</p>
									</div>
									<div class="col-md-6 mb-3 col-sm-12">
										<div class="float-right shop-pagination">
											<ul class="pagination">
												<li class="page-item page-prev disabled">
													<a class="page-link" href="#" tabindex="-1">Prev</a>
												</li>
												<li class="page-item active"><a class="page-link" href="#">1</a></li>
												<li class="page-item"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item"><a class="page-link" href="#">4</a></li>
												<li class="page-item"><a class="page-link" href="#">5</a></li>
												<li class="page-item page-next">
													<a class="page-link" href="#">Next</a>
												</li>
											</ul>
										</div>
									</div>
								</div><!-- row end -->
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
							</div>
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
<!--Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection