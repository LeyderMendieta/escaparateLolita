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
							<h1 class="page-title">Progress</h1>
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
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Basic Progress</h3>
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
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-default w-1"></div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-primary w-20"></div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-primary w-40"></div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-primary w-60"></div>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar bg-primary w-80"></div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress1"><pre><code class="language-markup"><script type="html-demo/script"><div class="progress progress-md mb-3">
	<div class="progress-bar bg-default w-1"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-primary w-20"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-primary w-40"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-primary w-60"></div>
</div>
<div class="progress progress-md">
	<div class="progress-bar bg-primary w-80"></div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress1"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Contextual Progress</h3>
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
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-pink w-1"></div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-green w-20"></div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-yellow w-40"></div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-blue w-60"></div>
											</div>
											<div class="progress progress-md ">
												<div class="progress-bar bg-orange w-80"></div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress2"><pre><code class="language-markup"><script type="html-demo/script"><div class="progress progress-md mb-3">
	<div class="progress-bar bg-pink w-1"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-green w-20"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-yellow w-40"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-blue w-60"></div>
</div>
<div class="progress progress-md ">
	<div class="progress-bar bg-orange w-80"></div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress2"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Basic Progress with label</h3>
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
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-primary w-1">10%</div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-primary w-20"> 20%</div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-primary w-40"> 40%</div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-primary w-60"> 60%</div>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar bg-primary w-80"> 80%</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress3"><pre><code class="language-markup"><script type="html-demo/script"><div class="progress progress-md mb-3">
	<div class="progress-bar bg-primary w-1">10%</div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-primary w-20"> 20%</div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-primary w-40"> 40%</div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-primary w-60"> 60%</div>
</div>
<div class="progress progress-md">
	<div class="progress-bar bg-primary w-80"> 80%</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress3"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Contextual Progress with label</h3>
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
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-pink w-1"> 10%</div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-green w-20">20%</div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-yellow w-40">40%</div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-blue w-60">60%</div>
											</div>
											<div class="progress progress-md ">
												<div class="progress-bar bg-orange w-80"> 80%</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress4"><pre><code class="language-markup"><script type="html-demo/script"><div class="progress progress-md mb-3">
	<div class="progress-bar bg-pink w-1"> 10%</div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-green w-20">20%</div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-yellow w-40">40%</div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-blue w-60">60%</div>
</div>
<div class="progress progress-md ">
	<div class="progress-bar bg-orange w-80"> 80%</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress4"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Progress Sizes</h3>
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
											<div class="progress progress-xs mb-3">
												<div class="progress-bar bg-blue w-30"></div>
											</div>
											<div class="progress progress-sm mb-3">
												<div class="progress-bar bg-blue w-60">60%</div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-blue w-70">70%</div>
											</div>
											<div class="progress progress-lg">
												<div class="progress-bar bg-blue w-80">80%</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress5"><pre><code class="language-markup"><script type="html-demo/script"><div class="progress progress-xs mb-3">
	<div class="progress-bar bg-blue w-30"></div>
</div>
<div class="progress progress-sm mb-3">
	<div class="progress-bar bg-blue w-60">60%</div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-blue w-70">70%</div>
</div>
<div class="progress progress-lg">
	<div class="progress-bar bg-blue w-80">80%</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress5"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Mixed color Progress with Sizes</h3>
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
											<div class="progress progress-xs mb-3">
												<div class="progress-bar bg-orange w-1"></div>
												<div class="progress-bar bg-warning w-1"></div>
												<div class="progress-bar bg-info w-1"></div>
											</div>
											<div class="progress progress-sm mb-3">
												<div class="progress-bar bg-pink w-1"></div>
												<div class="progress-bar bg-yellow w-15"></div>
												<div class="progress-bar bg-teal w-15"></div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar bg-pink w-15"></div>
												<div class="progress-bar bg-blue w-20"></div>
												<div class="progress-bar bg-cyan w-30"></div>
											</div>
											<div class="progress progress-lg">
												<div class="progress-bar bg-green w-30"></div>
												<div class="progress-bar bg-pink w-20"></div>
												<div class="progress-bar bg-orange w-40"></div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress6"><pre><code class="language-markup"><script type="html-demo/script"><div class="progress progress-xs mb-3">
	<div class="progress-bar bg-orange w-1"></div>
	<div class="progress-bar bg-warning w-1"></div>
	<div class="progress-bar bg-info w-1"></div>
</div>
<div class="progress progress-sm mb-3">
	<div class="progress-bar bg-pink w-1"></div>
	<div class="progress-bar bg-yellow w-15"></div>
	<div class="progress-bar bg-teal w-15"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar bg-pink w-15"></div>
	<div class="progress-bar bg-blue w-20"></div>
	<div class="progress-bar bg-cyan w-30"></div>
</div>
<div class="progress progress-lg">
	<div class="progress-bar bg-green w-30"></div>
	<div class="progress-bar bg-pink w-20"></div>
	<div class="progress-bar bg-orange w-40"></div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress6"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Striped Progress</h3>
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
											<div class="progress progress-md mb-3">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-teal w-15"></div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-info w-25"></div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow w-50">50%</div>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-green w-70">70%</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress7"><pre><code class="language-markup"><script type="html-demo/script"><div class="progress progress-md mb-3">
	<div class="progress-bar progress-bar-striped progress-bar-animated bg-teal w-15"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar progress-bar-striped progress-bar-animated bg-info w-25"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar progress-bar-striped progress-bar-animated bg-yellow w-50">50%</div>
</div>
<div class="progress progress-md">
	<div class="progress-bar progress-bar-striped progress-bar-animated bg-green w-70">70%</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress7"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-xl-6 col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Animated Progress</h3>
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
											<div class="progress progress-md mb-3">
												<div class="progress-bar progress-bar-indeterminate bg-pink" ></div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar progress-bar-indeterminate bg-cyan"></div>
											</div>
											<div class="progress progress-md mb-3">
												<div class="progress-bar progress-bar-indeterminate bg-teal"></div>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar progress-bar-indeterminate bg-purple"></div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress8"><pre><code class="language-markup"><script type="html-demo/script"><div class="progress progress-md mb-3">
	<div class="progress-bar progress-bar-indeterminate bg-pink" ></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar progress-bar-indeterminate bg-cyan"></div>
</div>
<div class="progress progress-md mb-3">
	<div class="progress-bar progress-bar-indeterminate bg-teal"></div>
</div>
<div class="progress progress-md">
	<div class="progress-bar progress-bar-indeterminate bg-purple"></div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress8"><i class="ti-clipboard"></i></div>
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