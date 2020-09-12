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
							<h1 class="page-title">Badge</h1>
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
								<div class="card shadow">
									<div class="card-header">
										<div>
											<h3 class="card-title">Badges</h3>
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
											<span class="badge badge-default mr-1 mb-1 mt-1">Default</span>
											<span class="badge badge-primary  mr-1 mb-1 mt-1">Primary</span>
											<span class="badge badge-success  mr-1 mb-1 mt-1">Success</span>
											<span class="badge badge-danger  mr-1 mb-1 mt-1">Danger</span>
											<span class="badge badge-info  mr-1 mb-1 mt-1">Info</span>
											<span class="badge badge-warning  mr-1 mb-1 mt-1">Warning</span>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge1"><pre><code class="language-markup"><script type="html-demo/script"><span class="badge badge-default mr-1 mb-1 mt-1">Default</span>
<span class="badge badge-primary  mr-1 mb-1 mt-1">Primary</span>
<span class="badge badge-success  mr-1 mb-1 mt-1">Success</span>
<span class="badge badge-danger  mr-1 mb-1 mt-1">Danger</span>
<span class="badge badge-info  mr-1 mb-1 mt-1">Info</span>
<span class="badge badge-warning  mr-1 mb-1 mt-1">Warning</span></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge1"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card shadow">
									<div class="card-header">
										<div>
											<h3 class="card-title">Pill Badges</h3>
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
											<span class="badge badge-pill badge-default mr-1 mb-1 mt-1">Default</span>
											<span class="badge badge-pill badge-primary mr-1 mb-1 mt-1">Primary</span>
											<span class="badge badge-pill badge-success mr-1 mb-1 mt-1">Success</span>
											<span class="badge badge-pill badge-danger mr-1 mb-1 mt-1">Danger</span>
											<span class="badge badge-pill badge-info mr-1 mb-1 mt-1">Info</span>
											<span class="badge badge-pill badge-warning mr-1 mb-1 mt-1">Warning</span>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge2"><pre><code class="language-markup"><script type="html-demo/script"><span class="badge badge-pill badge-default mr-1 mb-1 mt-1">Default</span>
<span class="badge badge-pill badge-primary mr-1 mb-1 mt-1">Primary</span>
<span class="badge badge-pill badge-success mr-1 mb-1 mt-1">Success</span>
<span class="badge badge-pill badge-danger mr-1 mb-1 mt-1">Danger</span>
<span class="badge badge-pill badge-info mr-1 mb-1 mt-1">Info</span>
<span class="badge badge-pill badge-warning mr-1 mb-1 mt-1">Warning</span></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge2"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-12">
								<div class="card shadow">
									<div class="card-header">
										<div>
											<h3 class="card-title">Buttons with Badges</h3>
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
											<button type="button" class="btn btn-primary mt-1 mb-1 mr-3">
												<span>Notifications</span>
												<span class="badge badge-white">2</span>
											</button>
											<button type="button" class="btn btn-secondary  mt-1 mb-1 mr-3">
												<span>Notifications</span>
												<span class="badge badge-dark">2</span>
											</button>
											<button type="button" class="btn btn-success  mt-1 mb-1 mr-3">
												<span>Notifications</span>
												<span class="badge badge-info">2</span>
											</button>
											<button type="button" class="btn btn-info  mt-1 mb-1 mr-3">
												<span>Notifications</span>
												<span class="badge badge-danger">2</span>
											</button>
											<button type="button" class="btn btn-warning mt-1 mb-1 mr-3">
												<span>Notifications</span>
												<span class="badge badge-primary">2</span>
											</button>
											<button type="button" class="btn btn-danger  mt-1 mb-1 mr-3">
												<span>Notifications</span>
												<span class="badge badge-info">2</span>
											</button>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge3"><pre><code class="language-markup"><script type="html-demo/script"><button type="button" class="btn btn-primary mt-1 mb-1 mr-3">
	<span>Notifications</span>
	<span class="badge badge-white">2</span>
</button>
<button type="button" class="btn btn-secondary  mt-1 mb-1 mr-3">
	<span>Notifications</span>
	<span class="badge badge-dark">2</span>
</button>
<button type="button" class="btn btn-success  mt-1 mb-1 mr-3">
	<span>Notifications</span>
	<span class="badge badge-info">2</span>
</button>
<button type="button" class="btn btn-info  mt-1 mb-1 mr-3">
	<span>Notifications</span>
	<span class="badge badge-danger">2</span>
</button>
<button type="button" class="btn btn-warning mt-1 mb-1 mr-3">
	<span>Notifications</span>
	<span class="badge badge-primary">2</span>
</button>
<button type="button" class="btn btn-danger  mt-1 mb-1 mr-3">
	<span>Notifications</span>
	<span class="badge badge-info">2</span>
</button></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge3"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Simple Badges</h3>
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
											<h1>Heading 01 <span class="badge badge-default">New</span></h1>
											<h2>Heading 02 <span class="badge badge-default">New</span></h2>
											<h3>Heading 03 <span class="badge badge-default">New</span></h3>
											<h4>Heading 04 <span class="badge badge-default">New</span></h4>
											<h5>Heading 05 <span class="badge badge-default">New</span></h5>
											<h6>Heading 06 <span class="badge badge-default">New</span></h6>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge4"><pre><code class="language-markup"><script type="html-demo/script"><h1>Heading 01 <span class="badge badge-default">New</span></h1>
<h2>Heading 02 <span class="badge badge-default">New</span></h2>
<h3>Heading 03 <span class="badge badge-default">New</span></h3>
<h4>Heading 04 <span class="badge badge-default">New</span></h4>
<h5>Heading 05 <span class="badge badge-default">New</span></h5>
<h6>Heading 06 <span class="badge badge-default">New</span></h6></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge4"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="col-md-12  col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Colored Badges</h3>
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
											<h1 class="text-blue">Heading 01 <span class="badge badge-primary">New</span></h1>
											<h2  class="text-red">Heading 02  <span class="badge badge-danger">New</span></h2>
											<h3  class="text-yellow">Heading 03 <span class="badge badge-warning">New</span></h3>
											<h4  class="text-green">Heading 04 <span class="badge badge-success">New</span></h4>
											<h5  class="text-info">Heading 05  <span class="badge badge-info">New</span></h5>
											<h6  class="text-secondary">Heading 06 <span class="badge badge-secondary">New</span></h6>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge5"><pre><code class="language-markup"><script type="html-demo/script"><h1 class="text-blue">Heading 01 <span class="badge badge-primary">New</span></h1>
<h2  class="text-red">Heading 02  <span class="badge badge-danger">New</span></h2>
<h3  class="text-yellow">Heading 03 <span class="badge badge-warning">New</span></h3>
<h4  class="text-green">Heading 04 <span class="badge badge-success">New</span></h4>
<h5  class="text-info">Heading 05  <span class="badge badge-info">New</span></h5>
<h6  class="text-secondary">Heading 06 <span class="badge badge-secondary">New</span></h6></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge5"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12  col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Card Model Badges</h3>
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
												<div class="col-xs-12 col-sm-6 col-lg-4">
													<div class="offer offer-default">
														<div class="shape">
															<div class="shape-text">
																top
															</div>
														</div>
														<div class="offer-content">
															<h3 class="lead">
																Default badge
															</h3>
															<p class="mb-0">
																And a little description.
																<br> and so one
															</p>
														</div>
													</div>
												</div>
												<div class="col-xs-12 col-sm-6 col-lg-4">
													<div class="offer offer-success">
														<div class="shape">
															<div class="shape-text">
																top
															</div>
														</div>
														<div class="offer-content">
															<h3 class="lead">
																Success badge
															</h3>
															<p class="mb-0">
																And a little description.
																<br> and so one
															</p>
														</div>
													</div>
												</div>
												<div class="col-xs-12 col-sm-6 col-lg-4">
													<div class="offer offer-radius offer-primary">
														<div class="shape">
															<div class="shape-text">
																top
															</div>
														</div>
														<div class="offer-content">
															<h3 class="lead">
																Primary badge
															</h3>
															<p class="mb-0">
																And a little description.
																<br> and so one
															</p>
														</div>
													</div>
												</div>
												<div class="col-xs-12 col-sm-6 col-lg-4">
													<div class="offer offer-info">
														<div class="shape">
															<div class="shape-text">
																top
															</div>
														</div>
														<div class="offer-content">
															<h3 class="lead">
																Info Badge
															</h3>
															<p class="mb-0">
																And a little description.
																<br> and so one
															</p>
														</div>
													</div>
												</div>
												<div class="col-xs-12 col-sm-6 col-lg-4">
													<div class="offer offer-warning">
														<div class="shape">
															<div class="shape-text">
																top
															</div>
														</div>
														<div class="offer-content">
															<h3 class="lead">
																Warning badge
															</h3>
															<p class="mb-0">
																And a little description.
																<br> and so one
															</p>
														</div>
													</div>
												</div>
												<div class="col-xs-12 col-sm-6 col-lg-4">
													<div class="offer offer-radius offer-danger">
														<div class="shape">
															<div class="shape-text">
																top
															</div>
														</div>
														<div class="offer-content">
															<h3 class="lead">
																Danger Badge
															</h3>
															<p class="mb-0">
																And a little description.
																<br> and so one
															</p>
														</div>
													</div>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="badge6"><pre><code class="language-markup"><script type="html-demo/script"><div class="row">
	<div class="col-xs-12 col-sm-6 col-lg-4">
		<div class="offer offer-default">
			<div class="shape">
				<div class="shape-text">
					top
				</div>
			</div>
			<div class="offer-content">
				<h3 class="lead">
					Default badge
				</h3>
				<p class="mb-0">
					And a little description.
					<br> and so one
				</p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-4">
		<div class="offer offer-success">
			<div class="shape">
				<div class="shape-text">
					top
				</div>
			</div>
			<div class="offer-content">
				<h3 class="lead">
					Success badge
				</h3>
				<p class="mb-0">
					And a little description.
					<br> and so one
				</p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-4">
		<div class="offer offer-radius offer-primary">
			<div class="shape">
				<div class="shape-text">
					top
				</div>
			</div>
			<div class="offer-content">
				<h3 class="lead">
					Primary badge
				</h3>
				<p class="mb-0">
					And a little description.
					<br> and so one
				</p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-4">
		<div class="offer offer-info">
			<div class="shape">
				<div class="shape-text">
					top
				</div>
			</div>
			<div class="offer-content">
				<h3 class="lead">
					Info Badge
				</h3>
				<p class="mb-0">
					And a little description.
					<br> and so one
				</p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-4">
		<div class="offer offer-warning">
			<div class="shape">
				<div class="shape-text">
					top
				</div>
			</div>
			<div class="offer-content">
				<h3 class="lead">
					Warning badge
				</h3>
				<p class="mb-0">
					And a little description.
					<br> and so one
				</p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-lg-4">
		<div class="offer offer-radius offer-danger">
			<div class="shape">
				<div class="shape-text">
					top
				</div>
			</div>
			<div class="offer-content">
				<h3 class="lead">
					Danger Badge
				</h3>
				<p class="mb-0">
					And a little description.
					<br> and so one
				</p>
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#badge6"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
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