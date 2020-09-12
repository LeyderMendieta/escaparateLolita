@extends('layouts.master')
@section('css')
<!-- Custom scroll bar css-->
<link href="{{URL::asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />
<!-- Prism css -->
<link href="{{URL::asset('assets/plugins/prism/prism.css')}}" rel="stylesheet">
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title"> Avatars </h1>
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
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h4  class="card-title">Simple Square Avatar</h4>
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
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/male/1.jpg')}}" alt="img"></span>
													<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/male/2.jpg')}}" alt="img"></span>
													<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/female/1.jpg')}}" alt="img"></span>
													<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/female/2.jpg')}}" alt="img"></span>
													<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/male/3.jpg')}}" alt="img"></span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar1"><pre><code class="language-markup"><script type="html-demo/script"><div class="avatar-list">
	<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/male/1.jpg')}}" alt="img"></span>
	<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/male/2.jpg')}}" alt="img"></span>
	<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/female/1.jpg')}}" alt="img"></span>
	<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/female/2.jpg')}}" alt="img"></span>
	<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/male/3.jpg')}}" alt="img"></span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatar1"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h4 class="card-title">Simple Round Avatar</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span><img class="avatar brround mr-2" src="{{URL::asset('assets/images/users/male/4.jpg')}}" alt="img"></span>
													<span><img class="avatar brround mr-2" src="{{URL::asset('assets/images/users/male/5.jpg')}}" alt="img"></span>
													<span><img class="avatar brround mr-2" src="{{URL::asset('assets/images/users/female/3.jpg')}}" alt="img"></span>
													<span><img class="avatar brround mr-2" src="{{URL::asset('assets/images/users/female/4.jpg')}}" alt="img"></span>
													<span><img class="avatar brround mr-2" src="{{URL::asset('assets/images/users/male/6.jpg')}}" alt="img"></span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar2"><pre><code class="language-markup"><script type="html-demo/script"><div class="avatar-list">
	<span><img class="avatar brround mr-2" src="{{URL::asset('assets/images/users/male/4.jpg')}}" alt="img"></span>
	<span><img class="avatar brround mr-2" src="{{URL::asset('assets/images/users/male/5.jpg')}}" alt="img"></span>
	<span><img class="avatar brround mr-2" src="{{URL::asset('assets/images/users/female/3.jpg')}}" alt="img"></span>
	<span><img class="avatar brround mr-2" src="{{URL::asset('assets/images/users/female/4.jpg')}}" alt="img"></span>
	<span><img class="avatar brround mr-2" src="{{URL::asset('assets/images/users/male/6.jpg')}}" alt="img"></span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatar2"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

                        <!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h4  class="card-title">Avatar Size</h4>
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
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span><img class="avatar avatar-sm mr-2" src="{{URL::asset('assets/images/users/male/4.jpg')}}" alt="img"></span>
													<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/female/3.jpg')}}" alt="img"></span>
													<span><img class="avatar avatar-md mr-2" src="{{URL::asset('assets/images/users/male/5.jpg')}}" alt="img"></span>
													<span><img class="avatar avatar-lg mr-2" src="{{URL::asset('assets/images/users/male/6.jpg')}}" alt="img"></span>
													<span><img class="avatar avatar-xl mr-2" src="{{URL::asset('assets/images/users/female/4.jpg')}}" alt="img"></span>
													<span><img class="avatar avatar-xxl mr-2" src="{{URL::asset('assets/images/users/male/7.jpg')}}" alt="img"></span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar3"><pre><code class="language-markup"><script type="html-demo/script"><div class="avatar-list">
	<span><img class="avatar avatar-sm mr-2" src="{{URL::asset('assets/images/users/male/4.jpg')}}" alt="img"></span>
	<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/female/3.jpg')}}" alt="img"></span>
	<span><img class="avatar avatar-md mr-2" src="{{URL::asset('assets/images/users/male/5.jpg')}}" alt="img"></span>
	<span><img class="avatar avatar-lg mr-2" src="{{URL::asset('assets/images/users/male/6.jpg')}}" alt="img"></span>
	<span><img class="avatar avatar-xl mr-2" src="{{URL::asset('assets/images/users/female/4.jpg')}}" alt="img"></span>
	<span><img class="avatar avatar-xxl mr-2" src="{{URL::asset('assets/images/users/male/7.jpg')}}" alt="img"></span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatar3"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h4 class="card-title">Rounded Avatar Size</h4>
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
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span><img class="avatar avatar-sm brround mr-2" src="{{URL::asset('assets/images/users/male/7.jpg')}}" alt="img"></span>
													<span><img class="avatar brround mr-2" src="{{URL::asset('assets/images/users/female/5.jpg')}}" alt="img"></span>
													<span><img class="avatar avatar-md brround mr-2" src="{{URL::asset('assets/images/users/male/8.jpg')}}" alt="img"></span>
													<span><img class="avatar avatar-lg brround mr-2" src="{{URL::asset('assets/images/users/male/9.jpg')}}" alt="img"></span>
													<span><img class="avatar avatar-xl brround mr-2" src="{{URL::asset('assets/images/users/female/6.jpg')}}" alt="img"></span>
													<span><img class="avatar avatar-xxl brround mr-2" src="{{URL::asset('assets/images/users/male/10.jpg')}}" alt="img"></span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar4"><pre><code class="language-markup"><script type="html-demo/script"><div class="avatar-list">
	<span><img class="avatar avatar-sm brround mr-2" src="{{URL::asset('assets/images/users/male/7.jpg')}}" alt="img"></span>
	<span><img class="avatar brround mr-2" src="{{URL::asset('assets/images/users/female/5.jpg')}}" alt="img"></span>
	<span><img class="avatar avatar-md brround mr-2" src="{{URL::asset('assets/images/users/male/8.jpg')}}" alt="img"></span>
	<span><img class="avatar avatar-lg brround mr-2" src="{{URL::asset('assets/images/users/male/9.jpg')}}" alt="img"></span>
	<span><img class="avatar avatar-xl brround mr-2" src="{{URL::asset('assets/images/users/female/6.jpg')}}" alt="img"></span>
	<span><img class="avatar avatar-xxl brround mr-2" src="{{URL::asset('assets/images/users/male/10.jpg')}}" alt="img"></span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatar4"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h4  class="card-title">Avatar Status</h4>
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
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar  cover-image" data-image-src="{{URL::asset('assets/images/users/male/1.jpg')}}"></span>
													<span class="avatar  cover-image" data-image-src="{{URL::asset('assets/images/users/female/7.jpg')}}">
														<span class="avatar-status"></span>
													</span>
													<span class="avatar cover-image" data-image-src="{{URL::asset('assets/images/users/male/2.jpg')}}">
														<span class="avatar-status bg-red"></span>
													</span>
													<span class="avatar cover-image" data-image-src="{{URL::asset('assets/images/users/female/8.jpg')}}">
														<span class="avatar-status bg-green"></span>
													</span>
													<span class="avatar cover-image" data-image-src="{{URL::asset('assets/images/users/female/9.jpg')}}">
														<span class="avatar-status bg-yellow"></span>
													</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar5"><pre><code class="language-markup"><script type="html-demo/script"><div class="avatar-list">
	<span class="avatar  cover-image" data-image-src="{{URL::asset('assets/images/users/male/1.jpg')}}"></span>
	<span class="avatar  cover-image" data-image-src="{{URL::asset('assets/images/users/female/7.jpg')}}">
		<span class="avatar-status"></span>
	</span>
	<span class="avatar cover-image" data-image-src="{{URL::asset('assets/images/users/male/2.jpg')}}">
		<span class="avatar-status bg-red"></span>
	</span>
	<span class="avatar cover-image" data-image-src="{{URL::asset('assets/images/users/female/8.jpg')}}">
		<span class="avatar-status bg-green"></span>
	</span>
	<span class="avatar cover-image" data-image-src="{{URL::asset('assets/images/users/female/9.jpg')}}">
		<span class="avatar-status bg-yellow"></span>
	</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatar5"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h4 class="card-title">Rounded Avatar Status</h4>
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
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/male/3.jpg')}}"></span>
													<span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/female/10.jpg')}}">
														<span class="avatar-status"></span>
													</span>
													<span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/male/4.jpg')}}">
														<span class="avatar-status bg-red"></span>
													</span>
													<span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/female/1.jpg')}}">
														<span class="avatar-status bg-green"></span>
													</span>
													<span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/female/2.jpg')}}">
														<span class="avatar-status bg-yellow"></span>
													</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar6"><pre><code class="language-markup"><script type="html-demo/script"><div class="avatar-list">
	<span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/male/3.jpg')}}"></span>
	<span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/female/10.jpg')}}">
		<span class="avatar-status"></span>
	</span>
	<span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/male/4.jpg')}}">
		<span class="avatar-status bg-red"></span>
	</span>
	<span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/female/1.jpg')}}">
		<span class="avatar-status bg-green"></span>
	</span>
	<span class="avatar brround cover-image" data-image-src="{{URL::asset('assets/images/users/female/2.jpg')}}">
		<span class="avatar-status bg-yellow"></span>
	</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatar6"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

                        <!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h4  class="card-title">Avatars List</h4>
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
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list avatar-list-stacked">
													<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/male/5.jpg')}}" alt="img"></span>
													<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/female/3.jpg')}}" alt="img"></span>
													<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/female/4.jpg')}}" alt="img"></span>
													<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/female/5.jpg')}}" alt="img"></span>
													<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/male/6.jpg')}}" alt="img"></span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar7"><pre><code class="language-markup"><script type="html-demo/script"><div class="avatar-list avatar-list-stacked">
	<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/male/5.jpg')}}" alt="img"></span>
	<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/female/3.jpg')}}" alt="img"></span>
	<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/female/4.jpg')}}" alt="img"></span>
	<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/female/5.jpg')}}" alt="img"></span>
	<span><img class="avatar mr-2" src="{{URL::asset('assets/images/users/male/6.jpg')}}" alt="img"></span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatar7"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h4 class="card-title">Rounded Avatars List</h4>
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
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list avatar-list-stacked">
													<span><img class="avatar brround" src="{{URL::asset('assets/images/users/female/6.jpg')}}" alt="img"></span>
													<span><img class="avatar brround" src="{{URL::asset('assets/images/users/female/7.jpg')}}" alt="img"></span>
													<span><img class="avatar brround" src="{{URL::asset('assets/images/users/female/8.jpg')}}" alt="img"></span>
													<span><img class="avatar brround" src="{{URL::asset('assets/images/users/female/9.jpg')}}" alt="img"></span>
													<span><img class="avatar brround" src="{{URL::asset('assets/images/users/male/7.jpg')}}" alt="img"></span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar8"><pre><code class="language-markup"><script type="html-demo/script"><div class="avatar-list avatar-list-stacked">
	<span><img class="avatar brround" src="{{URL::asset('assets/images/users/female/6.jpg')}}" alt="img"></span>
	<span><img class="avatar brround" src="{{URL::asset('assets/images/users/female/7.jpg')}}" alt="img"></span>
	<span><img class="avatar brround" src="{{URL::asset('assets/images/users/female/8.jpg')}}" alt="img"></span>
	<span><img class="avatar brround" src="{{URL::asset('assets/images/users/female/9.jpg')}}" alt="img"></span>
	<span><img class="avatar brround" src="{{URL::asset('assets/images/users/male/7.jpg')}}" alt="img"></span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatar8"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h4 class="card-title">Simple Radius Avatar</h4>
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
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span><img class="avatar bradius mr-2" src="{{URL::asset('assets/images/users/male/8.jpg')}}" alt="img"></span>
													<span><img class="avatar bradius mr-2" src="{{URL::asset('assets/images/users/male/9.jpg')}}" alt="img"></span>
													<span><img class="avatar bradius mr-2" src="{{URL::asset('assets/images/users/female/10.jpg')}}" alt="img"></span>
													<span><img class="avatar bradius mr-2" src="{{URL::asset('assets/images/users/female/1.jpg')}}" alt="img"></span>
													<span><img class="avatar bradius mr-2" src="{{URL::asset('assets/images/users/male/10.jpg')}}" alt="img"></span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar9"><pre><code class="language-markup"><script type="html-demo/script"><div class="avatar-list">
	<span><img class="avatar bradius mr-2" src="{{URL::asset('assets/images/users/male/8.jpg')}}" alt="img"></span>
	<span><img class="avatar bradius mr-2" src="{{URL::asset('assets/images/users/male/9.jpg')}}" alt="img"></span>
	<span><img class="avatar bradius mr-2" src="{{URL::asset('assets/images/users/female/10.jpg')}}" alt="img"></span>
	<span><img class="avatar bradius mr-2" src="{{URL::asset('assets/images/users/female/1.jpg')}}" alt="img"></span>
	<span><img class="avatar bradius mr-2" src="{{URL::asset('assets/images/users/male/10.jpg')}}" alt="img"></span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatar9"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h4 class="card-title">Radius Avatar Size</h4>
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
										<div class="text-wrap">
											<div class="example">
												<div class="avatar-list">
													<span><img class="avatar bradius avatar-sm mr-2" src="{{URL::asset('assets/images/users/male/4.jpg')}}" alt="img"></span>
													<span><img class="avatar bradius mr-2" src="{{URL::asset('assets/images/users/female/3.jpg')}}" alt="img"></span>
													<span><img class="avatar  bradius avatar-md mr-2" src="{{URL::asset('assets/images/users/male/5.jpg')}}" alt="img"></span>
													<span><img class="avatar bradius avatar-lg mr-2" src="{{URL::asset('assets/images/users/male/6.jpg')}}" alt="img"></span>
													<span><img class="avatar  bradius avatar-xl mr-2" src="{{URL::asset('assets/images/users/female/4.jpg')}}" alt="img"></span>
													<span><img class="avatar  bradius avatar-xxl mr-2" src="{{URL::asset('assets/images/users/male/7.jpg')}}" alt="img"></span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="avatar10"><pre><code class="language-markup"><script type="html-demo/script"><div class="avatar-list">
	<span><img class="avatar bradius avatar-sm mr-2" src="{{URL::asset('assets/images/users/male/4.jpg')}}" alt="img"></span>
	<span><img class="avatar bradius mr-2" src="{{URL::asset('assets/images/users/female/3.jpg')}}" alt="img"></span>
	<span><img class="avatar  bradius avatar-md mr-2" src="{{URL::asset('assets/images/users/male/5.jpg')}}" alt="img"></span>
	<span><img class="avatar bradius avatar-lg mr-2" src="{{URL::asset('assets/images/users/male/6.jpg')}}" alt="img"></span>
	<span><img class="avatar  bradius avatar-xl mr-2" src="{{URL::asset('assets/images/users/female/4.jpg')}}" alt="img"></span>
	<span><img class="avatar  bradius avatar-xxl mr-2" src="{{URL::asset('assets/images/users/male/7.jpg')}}" alt="img"></span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#avatar10"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
<!-- Custom scroll bar js-->
<script src="{{URL::asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- Clipboard js -->
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/clipboard/clipboard.js')}}"></script>
<!-- Prism js -->
<script src="{{URL::asset('assets/plugins/prism/prism.js')}}"></script>
@endsection