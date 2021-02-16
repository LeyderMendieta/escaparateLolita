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
							<h1 class="page-title">Thumbnails</h1>
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
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Basic Thumbnails</h3>
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
										<div class="example">
											<div class="row mt-4">
												<div class="col-6 col-md-3">
													<a href="#" class="thumbnail">
														<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
												</div>
												<div class="col-6 col-md-3">
													<a href="#" class="thumbnail">
														<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
												</div>
												<div class="col-6 col-md-3">
													<a href="#" class="thumbnail">
														<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
												</div>
												<div class="col-6 col-md-3">
													<a href="#" class="thumbnail">
														<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="thumb1" class="thumbimg">
													</a>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="thumb1"><pre><code class="language-markup"><script type="html-demo/script"><div class="row">
	<div class="col-6 col-md-3">
		<a href="#" class="thumbnail">
			<img src="{{URL::asset('assets/images/photos/1.jpg')}}" alt="thumb1" class="thumbimg">
		</a>
	</div>
	<div class="col-6 col-md-3">
		<a href="#" class="thumbnail">
			<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="thumb1" class="thumbimg">
		</a>
	</div>
	<div class="col-6 col-md-3">
		<a href="#" class="thumbnail">
			<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="thumb1" class="thumbimg">
		</a>
	</div>
	<div class="col-6 col-md-3">
		<a href="#" class="thumbnail">
			<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="thumb1" class="thumbimg">
		</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#thumb1"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Basic Thumbnails</h3>
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
										<div class="example">
											<div class="row">
												<div class="col-lg-4 col-md-4">
													<div class="thumbnail mb-md-0">
														<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="ALT NAME" class="img-responsive" />
														<div class="caption">
															<h4>Thumbnail label</h4>
															<p>Description</p>
															<p><a href="" class="btn btn-primary btn-block">Open</a>
															</p>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4">
													<div class="thumbnail mb-md-0">
														<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="ALT NAME" class="img-responsive" />
														<div class="caption">
															<h4>Thumbnail label</h4>
															<p>Description</p>
															<p><a href="" class="btn btn-primary btn-block">Open</a>
															</p>
														</div>
													</div>
												</div>
												<div class="col-lg-4 col-md-4">
													<div class="thumbnail mb-0">
														<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="ALT NAME" class="img-responsive" />
														<div class="caption">
															<h4>Thumbnail label</h4>
															<p>Description</p>
															<p><a href="" class="btn btn-primary btn-block">Open</a>
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="thumb2"><pre><code class="language-markup"><script type="html-demo/script"><div class="row">
	<div class="col-lg-4 col-md-4">
		<div class="thumbnail mb-md-0">
			<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="ALT NAME" class="img-responsive" />
			<div class="caption">
				<h4>Thumbnail label</h4>
				<p>Description</p>
				<p><a href="" class="btn btn-primary btn-block">Open</a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4">
		<div class="thumbnail mb-md-0">
			<img src="{{URL::asset('assets/images/photos/2.jpg')}}" alt="ALT NAME" class="img-responsive" />
			<div class="caption">
				<h4>Thumbnail label</h4>
				<p>Description</p>
				<p><a href="" class="btn btn-primary btn-block">Open</a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4">
		<div class="thumbnail mb-0">
			<img src="{{URL::asset('assets/images/photos/3.jpg')}}" alt="ALT NAME" class="img-responsive" />
			<div class="caption">
				<h4>Thumbnail label</h4>
				<p>Description</p>
				<p><a href="" class="btn btn-primary btn-block">Open</a>
				</p>
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#thumb2"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Custom content Thumbnails</h3>
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
										<div class="example">
											<div class="row mt-4">
												<div class="col-md-12 col-lg-4">
													<div class="thumbnail">
														<a href="#">
															<img src="{{URL::asset('assets/images/photos/19.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
														<div class="caption">
															<h4><strong>Thumbnail label</strong></h4>
															<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
															<p>
																<a href="#" class="btn btn-primary mt-1 mb-1" role="button">Button</a>
																<a href="#" class="btn btn-success mt-1 mb-1" role="button">Button</a>
															</p>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-4">
													<div class="thumbnail">
														<a href="#">
															<img src="{{URL::asset('assets/images/photos/20.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
														<div class="caption">
															<h4><strong>Thumbnail label</strong></h4>
															<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
															<p>
																<a href="#" class="btn btn-primary mt-1 mb-1" role="button">Button</a>
																<a href="#" class="btn btn-success mt-1 mb-1" role="button">Button</a>
															</p>
														</div>
													</div>
												</div>
												<div class="col-md-12 col-lg-4">
													<div class="thumbnail">
														<a href="#">
															<img src="{{URL::asset('assets/images/photos/21.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
														<div class="caption">
															<h4><strong>Thumbnail label</strong></h4>
															<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
															<p>
																<a href="#" class="btn btn-primary mt-1 mb-1" role="button">Button</a>
																<a href="#" class="btn btn-success mt-1 mb-1" role="button">Button</a>
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="thumb3"><pre><code class="language-markup"><script type="html-demo/script"><div class="row">
	<div class="col-md-12 col-lg-4">
		<div class="thumbnail">
			<a href="#">
				<img src="{{URL::asset('assets/images/photos/19.jpg')}}" alt="thumb1" class="thumbimg">
			</a>
			<div class="caption">
				<h4><strong>Thumbnail label</strong></h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
				<p>
					<a href="#" class="btn btn-primary mt-1 mb-1" role="button">Button</a>
					<a href="#" class="btn btn-success mt-1 mb-1" role="button">Button</a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-lg-4">
		<div class="thumbnail">
			<a href="#">
				<img src="{{URL::asset('assets/images/photos/20.jpg')}}" alt="thumb1" class="thumbimg">
			</a>
			<div class="caption">
				<h4><strong>Thumbnail label</strong></h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
				<p>
					<a href="#" class="btn btn-primary mt-1 mb-1" role="button">Button</a>
					<a href="#" class="btn btn-success mt-1 mb-1" role="button">Button</a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-lg-4">
		<div class="thumbnail">
			<a href="#">
				<img src="{{URL::asset('assets/images/photos/21.jpg')}}" alt="thumb1" class="thumbimg">
			</a>
			<div class="caption">
				<h4><strong>Thumbnail label</strong></h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
				<p>
					<a href="#" class="btn btn-primary mt-1 mb-1" role="button">Button</a>
					<a href="#" class="btn btn-success mt-1 mb-1" role="button">Button</a>
				</p>
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#thumb3"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Custom content Thumbnails</h3>
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
										<div class="example">
											<div class="row mt-4">
												<div class="col-sm-6 col-lg-6 col-xl-3">
													<div class="thumbnail">
														<a href="#">
															<img src="{{URL::asset('assets/images/photos/22.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
														<div class="caption">
															<h4><strong>Thumbnail label</strong></h4>
															<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-6 col-xl-3">
													<div class="thumbnail">
														<a href="#">
															<img src="{{URL::asset('assets/images/photos/23.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
														<div class="caption">
															<h4><strong>Thumbnail label</strong></h4>
															<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-6 col-xl-3">
													<div class="thumbnail">
														<div class="caption">
															<h4><strong>Thumbnail label</strong></h4>
															<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
														</div>
														<a href="#">
															<img src="{{URL::asset('assets/images/photos/24.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
													</div>
												</div>
												<div class="col-sm-6 col-lg-6 col-xl-3">
													<div class="thumbnail">
														<div class="caption">
															<h4><strong>Thumbnail label</strong></h4>
															<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
														</div>
														<a href="#">
															<img src="{{URL::asset('assets/images/photos/25.jpg')}}" alt="thumb1" class="thumbimg">
														</a>
													</div>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="thumb4"><pre><code class="language-markup"><script type="html-demo/script"><div class="row">
	<div class="col-md-12 col-lg-6 col-xl-3">
		<div class="thumbnail">
			<a href="#">
				<img src="{{URL::asset('assets/images/photos/22.jpg')}}" alt="thumb1" class="thumbimg">
			</a>
			<div class="caption">
				<h4><strong>Thumbnail label</strong></h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-lg-6 col-xl-3">
		<div class="thumbnail">
			<a href="#">
				<img src="{{URL::asset('assets/images/photos/23.jpg')}}" alt="thumb1" class="thumbimg">
			</a>
			<div class="caption">
				<h4><strong>Thumbnail label</strong></h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-lg-6 col-xl-3">
		<div class="thumbnail">
			<div class="caption">
				<h4><strong>Thumbnail label</strong></h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
			</div>
			<a href="#">
				<img src="{{URL::asset('assets/images/photos/24.jpg')}}" alt="thumb1" class="thumbimg">
			</a>
		</div>
	</div>
	<div class="col-md-12 col-lg-6 col-xl-3">
		<div class="thumbnail">
			<div class="caption">
				<h4><strong>Thumbnail label</strong></h4>
				<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia.</p>
			</div>
			<a href="#">
				<img src="{{URL::asset('assets/images/photos/25.jpg')}}" alt="thumb1" class="thumbimg">
			</a>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#thumb4"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Video List Thumbnail</h3>
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
										<div class="example">
											<ul class="list-unstyled video-list-thumbs row mb-0 mt-4">
												<li class="col-sm-6 col-lg-3 col-md-6 border-0">
													<a href="https://www.youtube.com/embed/f3NWvUV8MD8" title="sed do eiusmod tempor incidi dunt ut labore et dolore magna">
														<img src="{{URL::asset('assets/images/photos/24.jpg')}}" alt="Barca" class="img-responsive"/>

														<span class="fa fa-play-circle-o"></span>
														<span class="duration">06:28</span>
													</a>
												</li>
												<li class="col-sm-6 col-lg-3 col-md-6 border-0">
													<a href="https://www.youtube.com/embed/f3NWvUV8MD8" title="sed do eiusmod tempor incidi dunt ut labore et dolore magna">
														<img src="{{URL::asset('assets/images/photos/25.jpg')}}" alt="Barca" class="img-responsive" />
														<span class="fa fa-play-circle-o"></span>
														<span class="duration">06:28</span>
													</a>
												</li>
												<li class="col-sm-6 col-lg-3 col-md-6 border-0">
													<a href="https://www.youtube.com/embed/f3NWvUV8MD8" title="sed do eiusmod tempor incidi dunt ut labore et dolore magna">
														<img src="{{URL::asset('assets/images/photos/20.jpg')}}" alt="Barca" class="img-responsive"  />
														<span class="fa fa-play-circle-o"></span>
														<span class="duration">06:28</span>
													</a>
												</li>
												<li class="col-sm-6 col-lg-3 col-md-6 border-0">
													<a href="https://www.youtube.com/embed/f3NWvUV8MD8" title="sed do eiusmod tempor incidi dunt ut labore et dolore magna">
														<img src="{{URL::asset('assets/images/photos/22.jpg')}}" alt="Barca" class="img-responsive" />
														<span class="fa fa-play-circle-o"></span>
														<span class="duration">06:28</span>
													</a>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="thumb5"><pre><code class="language-markup"><script type="html-demo/script"><ul class="list-unstyled video-list-thumbs row mb-0">
	<li class="col-sm-12 col-lg-3 col-md-6 border-0">
		<a href="https://www.youtube.com/embed/f3NWvUV8MD8" title="sed do eiusmod tempor incidi dunt ut labore et dolore magna">
			<img src="{{URL::asset('assets/images/photos/24.jpg')}}" alt="Barca" class="img-responsive"/>

			<span class="fa fa-play-circle-o"></span>
			<span class="duration">06:28</span>
		</a>
	</li>
	<li class="col-sm-12 col-lg-3 col-md-6 border-0">
		<a href="https://www.youtube.com/embed/f3NWvUV8MD8" title="sed do eiusmod tempor incidi dunt ut labore et dolore magna">
			<img src="{{URL::asset('assets/images/photos/25.jpg')}}" alt="Barca" class="img-responsive" />
			<span class="fa fa-play-circle-o"></span>
			<span class="duration">06:28</span>
		</a>
	</li>
	<li class="ccol-sm-12 col-lg-3 col-md-6 border-0">
		<a href="https://www.youtube.com/embed/f3NWvUV8MD8" title="sed do eiusmod tempor incidi dunt ut labore et dolore magna">
			<img src="{{URL::asset('assets/images/photos/20.jpg')}}" alt="Barca" class="img-responsive"  />
			<span class="fa fa-play-circle-o"></span>
			<span class="duration">06:28</span>
		</a>
	</li>
	<li class="col-sm-12 col-lg-3 col-md-6 border-0">
		<a href="https://www.youtube.com/embed/f3NWvUV8MD8" title="sed do eiusmod tempor incidi dunt ut labore et dolore magna">
			<img src="{{URL::asset('assets/images/photos/22.jpg')}}" alt="Barca" class="img-responsive" />
			<span class="fa fa-play-circle-o"></span>
			<span class="duration">06:28</span>
		</a>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#thumb5"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
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