@extends('layouts.master')
@section('css')
<!-- Gallery css -->
<link href="{{URL::asset('assets/plugins/gallery/gallery.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Gallery</h1>
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
						<div class="gallery row">
							<div class="col-sm-4 hover15">
								<div class="card shadow overflow-hidden">
									<a href="#" class="big"><img src="{{URL::asset('assets/images/photos/14.jpg')}}" alt="" title="Beautiful Image"></a>
								</div>
							</div>
							<div class="col-sm-4 hover15">
								<div class="card shadow overflow-hidden">
									<a href="#" class="big"><img src="{{URL::asset('assets/images/photos/19.jpg')}}" alt="" title="Beautiful Image"></a>
								</div>
							</div>
							<div class="col-sm-4 hover15">
								<div class="card shadow overflow-hidden">
									<a href="#" class="big"><img src="{{URL::asset('assets/images/photos/20.jpg')}}" alt="" title="Beautiful Image"></a>
								</div>
							</div>
							<div class="col-sm-4 hover15">
								<div class="card shadow overflow-hidden">
									<a href="#" class="big"><img src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="" title="Beautiful Image"></a>
								</div>
							</div>
							<div class="col-sm-4 hover15">
								<div class="card shadow overflow-hidden">
									<a href="#" class="big"><img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="" title="Beautiful Image"></a>
								</div>
							</div>
							<div class="col-sm-4 hover15">
								<div class="card shadow overflow-hidden">
									<a href="#" class="big"><img src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="" title="Beautiful Image"></a>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="demo-gallery card">
							<div class="card-header">
								<div class="card-title">Light Gallery</div>
							</div>
							<div class="card-body">
								<ul id="lightgallery" class="list-unstyled row">
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/1.jpg')}}" data-src="{{URL::asset('assets/images/photos/1.jpg')}}" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/2.jpg')}}" data-src="{{URL::asset('assets/images/photos/2.jpg')}}" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="Thumb-2">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/3.jpg')}}" data-src="{{URL::asset('assets/images/photos/3.jpg')}}" data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/4.jpg')}}" data-src="{{URL::asset('assets/images/photos/4.jpg')}}" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="Thumb-2">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/5.jpg')}}" data-src="{{URL::asset('assets/images/photos/5.jpg')}}" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/6.jpg')}}" data-src="{{URL::asset('assets/images/photos/6.jpg')}}" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="Thumb-2">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/7.jpg')}}" data-src="{{URL::asset('assets/images/photos/7.jpg')}}" data-sub-html="<h4>Gallery Image 7</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/7.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3" data-responsive="{{URL::asset('assets/images/photos/8.jpg')}}" data-src="{{URL::asset('assets/images/photos/8.jpg')}}" data-sub-html="<h4>Gallery Image 8</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive" src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="Thumb-2">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3 mb-0" data-responsive="{{URL::asset('assets/images/photos/9.jpg')}}" data-src="{{URL::asset('assets/images/photos/9.jpg')}}" data-sub-html="<h4>Gallery Image 9</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive mb-0" src="{{URL::asset('assets/images/photos/9.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3 mb-0" data-responsive="{{URL::asset('assets/images/photos/10.jpg')}}" data-src="{{URL::asset('assets/images/photos/10.jpg')}}" data-sub-html="<h4>Gallery Image 10</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive mb-0" src="{{URL::asset('assets/images/photos/10.jpg')}}" alt="Thumb-2">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3 mb-0" data-responsive="{{URL::asset('assets/images/photos/11.jpg')}}" data-src="{{URL::asset('assets/images/photos/11.jpg')}}" data-sub-html="<h4>Gallery Image 11</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive mb-0" src="{{URL::asset('assets/images/photos/11.jpg')}}" alt="Thumb-1">
										</a>
									</li>
									<li class="col-xs-6 col-sm-4 col-md-3 mb-0" data-responsive="{{URL::asset('assets/images/photos/12.jpg')}}" data-src="{{URL::asset('assets/images/photos/12.jpg')}}" data-sub-html="<h4>Gallery Image 12</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>" >
										<a href="">
											<img class="img-responsive mb-0" src="{{URL::asset('assets/images/photos/12.jpg')}}" alt="Thumb-2">
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
<!-- Gallery js -->
<script src="{{URL::asset('assets/plugins/gallery/picturefill.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/lightgallery.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/lg-pager.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/lg-autoplay.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/lg-fullscreen.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/lg-zoom.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/lg-hash.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/lg-share.js')}}"></script>
<script src="{{URL::asset('assets/plugins/gallery/gallery.js')}}"></script>
@endsection