@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">About</h1>
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
						<div class="card card-aside">
							<a href="#" class="card-aside-column cover-image" data-image-src="{{URL::asset('assets/images/photos/1.jpg')}}"></a>
							<div class="card-body d-flex flex-column">
								<h1 class="mb-2 font-weight-semibold">Why Choose US?</h1>
								<h4 class="leading-normal">majority have suffered alteration in some form, by injected</h4>
								<p class="leading-normal text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered  by injected humour, or randomised words which don't look even slightly believable.
								If you are going to use a passage of Lorem Ipsum, you need to as  necessary All the Lorem Ipsum generators on the Internet tend to repeat Various versions have evolved over the years, sometimes by accident,
								sometimes on purpose (injected humour and the like).</p>
							</div>
						</div>
						<!-- End Card -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
								<div class="card text-center">
									<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="img">
									<div class="card-body">
										<h4 class="font-weight-semibold mb-3">Company history</h4>
										<p class="text-muted">I must explain to you how all this mistaken idea of denouncing pleasure and you a complete account of the system</p>
										<a href="#" class=" mt-3 btn btn-primary">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
								<div class="card text-center">
									<img src="{{URL::asset('assets/images/photos/10.jpg')}}" alt="img">
									<div class="card-body">
										<h4 class="font-weight-semibold mb-3">About Team</h4>
										<p class="text-muted">I must explain to you how all this mistaken idea of denouncing pleasure and you a complete account of the system</p>
										<a href="#" class=" mt-3 btn btn-secondary">Read More</a>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
								<div class="card text-center">
									<img src="{{URL::asset('assets/images/photos/21.jpg')}}" alt="img">
									<div class="card-body">
										<h4 class="font-weight-semibold mb-3">Company growth</h4>
										<p class="text-muted">I must explain to you how all this mistaken idea of denouncing pleasure and you a complete account of the system</p>
										<a href="#" class=" mt-3 btn btn-success">Read More</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="abouts text-center">
											<h4 class="font-weight-semibold">IT strategy</h4>
											<p class="mb-3 text-muted">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and by desire.</p>
											<a href="#" class="btn btn-primary">View More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="abouts text-center">
											<h4 class="font-weight-semibold">Development</h4>
											<p class="mb-3 text-muted">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and by desire.</p>
											<a href="#" class="btn btn-secondary">View More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="abouts text-center">
											<h4 class="font-weight-semibold">Products</h4>
											<p class="mb-3 text-muted">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and by desire.</p>
											<a href="#" class="btn btn-success">View More</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-6 col-md-12">
								<div class="card">
									<div class="card-body">
										<div class="abouts text-center">
											<h4 class="font-weight-semibold">Quality</h4>
											<p class="mb-3 text-muted">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and by desire.</p>
											<a href="#" class="btn btn-warning">View More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
					</div>
					<!--End side app-->
@endsection
@section('js')
@endsection