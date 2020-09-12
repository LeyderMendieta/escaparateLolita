@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title"> Image Cards </h1>
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
							<div class="col-md-12 col-lg-4 col-md-4 col-xl-4">
								<div class="card overflow-hidden">
									<img  src="{{URL::asset('assets/images/photos/12.jpg')}}" alt="image">
									<div class="card-body">
										<h5 class="card-title mb-2">Card title</h5>
										<p class="card-text text-muted">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>
										<a href="javascript:void(0);" class="btn btn-primary">View More</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4 col-md-4 col-xl-4">
								<div class="card overflow-hidden">
									<img  src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="image">
									<div class="card-body">
										<h5 class="card-title mb-2">Card title</h5>
										<p class="card-text text-muted">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>
										<a href="javascript:void(0);" class="btn btn-primary">View More</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4 col-md-4 col-xl-4">
								<div class="card overflow-hidden">
									<img  src="{{URL::asset('assets/images/photos/18.jpg')}}" alt="image">
									<div class="card-body">
										<h5 class="card-title mb-2">Card title</h5>
										<p class="card-text text-muted">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>
										<a href="javascript:void(0);" class="btn btn-primary">View More</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4 col-md-4 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-body">
										<h5 class="card-title mb-2">Card title</h5>
										<p class="card-text text-muted">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>
										<a href="javascript:void(0);" class="btn btn-primary">View More</a>
									</div>
									<img  src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="image">
								</div>
							</div>
							<div class="col-md-12 col-lg-4 col-md-4 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-body">
										<h5 class="card-title mb-2">Card title</h5>
										<p class="card-text text-muted">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>
										<a href="javascript:void(0);" class="btn btn-primary">View More</a>
									</div>
									<img  src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="image">
								</div>
							</div>
							<div class="col-md-12 col-lg-4 col-md-4 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-body">
										<h5 class="card-title mb-2">Card title</h5>
										<p class="card-text text-muted">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>
										<a href="javascript:void(0);" class="btn btn-primary">View More</a>
									</div>
									<img  src="{{URL::asset('assets/images/photos/11.jpg')}}" alt="image">
								</div>
							</div>
							<div class="col-md-12 col-lg-4 col-md-4 col-xl-4">
								<div class="card overflow-hidden">
									<img  src="{{URL::asset('assets/images/photos/15.jpg')}}" alt="image">
									<div class="card-body">
										<h5 class="card-title mb-2">Card title</h5>
										<p class="card-text text-muted">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>
										<a href="javascript:void(0);" class="btn btn-primary">View More</a>
									</div>
									<div class="card-footer">card footer</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4 col-md-4 col-xl-4">
								<div class="card">
									<div class="card-header"><div class="card-title">card header</div></div>
									<img  src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="image">
									<div class="card-body">
										<h5 class="card-title mb-2">Card title</h5>
										<p class="card-text text-muted">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>
										<a href="javascript:void(0);" class="btn btn-primary">View More</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4 col-md-4 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div class="card-title">card header</div>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up "></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<img  src="{{URL::asset('assets/images/photos/7.jpg')}}" alt="image">
									<div class="card-body">
										<h5 class="card-title mb-2">Card title</h5>
										<p class="card-text text-muted">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</p>
										<a href="javascript:void(0);" class="btn btn-primary">View More</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-4 col-md-12 col-12 col-sm-12">
								<div class="card">
									<img class="card-img-top" src="{{URL::asset('assets/images/photos/16.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<p class="card-text text-muted">To take a trivial example, which of us ever undertakes laborious physical exercise.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12 col-12 col-sm-12">
								<div class="card">
									<img class="card-img-top" src="{{URL::asset('assets/images/photos/17.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<p class="card-text text-muted"> To take a trivial example, which of us ever undertakes laborious physical exercise.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 col-md-12 col-12 col-sm-12">
								<div class="card">
									<img class="card-img-top" src="{{URL::asset('assets/images/photos/18.jpg')}}" alt="Card image cap">
									<div class="card-body">
										<p class="card-text text-muted"> To take a trivial example, which of us ever undertakes laborious physical exercise.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-4 col-md-4 col-xl-4">
								<div class="card card-blog-overlay1 br-3">
									<div class="card-body  text-white br-3">
										<h3 class="card-title text-white">card-with image</h3>
                                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful.</div>
									<div class="card-footer  text-white z-index-10">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4 col-md-4 col-xl-4">
								<div class="card card-blog-overlay2">
									<div class="card-body  text-white">
										<h3 class="card-title text-white">card-with image</h3>
                                            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful.</div>
									<div class="card-footer text-white z-index-10">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-4 col-md-4 col-xl-46">
								<div class="card card-blog-overlay ">
									<div class="card-header z-index-10">
										<h3 class="card-title text-white">card-with image</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up text-white"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x text-white"></i></a>
										</div>
									</div>
									<div class="card-body  text-white">
                                        All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful 									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-12 col-md-12 col-xl-6">
								<div class="card ">
									<div class="card-header ">
										<h3 class="card-title ">card-with image</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up "></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<div class="card-body  text-white card-blog-overlay1 h-9 w-100">
									</div>
									<div class="card-body p-4">
										Duis aute irure dolor
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-6">
								<div class="card card-aside">
									<div class="card-body d-flex flex-column">
										<h4><a href="#">Play Music</a></h4>
										<div class="text-muted">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others.</div>
										<div class="d-flex align-items-center pt-5 mt-auto text-center ">
											<div class="text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-step-backward"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-play "></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-step-forward"></i></a>
											</div>
										</div>
									</div>
									<a href="#" class="card-aside-column w-50 cover-image" data-image-src="{{URL::asset('assets/images/photos/2.jpg')}}"></a>
								</div>
							</div>
							<div class="col-md-12 col-xl-12">
								<div class="card card-aside bg-primary">
									<div class="card-body d-flex flex-column">
										<h4><a href="#" class="text-white">Play Music</a></h4>
										<div class="text-white">One disadvantage of Lorum Ipsum is that in Latin certain letters appear more frequently than others. </div>
										<div class="d-flex align-items-center pt-5 mt-auto text-center ">
											<div class="text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-step-backward text-white"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-play text-white "></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="fa fa-step-forward text-white"></i></a>
											</div>
										</div>
									</div>
									<a href="#" class="card-aside-column  w-50 cover-image" data-image-src="{{URL::asset('assets/images/photos/20.jpg')}}"></a>
								</div>
							</div>
							<div class="col-md-12 col-xl-4 col-lg-4">
								<div class="card ">
									<div class="card-header ">
										<h3 class="card-title ">User card</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<div class="card-body text-center">
										<span class="avatar avatar-xxl brround cover-image" data-image-src="{{URL::asset('assets/images/users/male/8.jpg')}}"></span>
										<h4 class="h4 mb-0 mt-3">Paige Turner.</h4>
										<p class="card-text text-muted">Web designer</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4 col-lg-4">
								<div class="card ">
									<div class="card-header ">
										<h3 class="card-title">User card</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<div class="card-body text-center">
										<span class="avatar avatar-xxl brround cover-image" data-image-src="{{URL::asset('assets/images/users/female/8.jpg')}}"></span>
										<h4 class="h4 mb-0 mt-3">Gail Forcewind</h4>
										<p class="card-text text-muted">Web designer</p>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4 col-lg-4">
								<div class="card ">
									<div class="card-header ">
										<h3 class="card-title ">User card</h3>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x "></i></a>
										</div>
									</div>
									<div class="card-body text-center">
										<span class="avatar avatar-xxl brround cover-image" data-image-src="{{URL::asset('assets/images/users/male/9.jpg')}}"></span>
										<h4 class="h4 mb-0 mt-3"> Petey Cruiser</h4>
										<p class="card-text text-muted">Web designer</p>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

					</div>
@endsection
@section('js')
@endsection