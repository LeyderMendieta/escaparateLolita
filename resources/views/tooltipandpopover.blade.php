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
							<h1 class="page-title">Tooltip and Popover</h1>
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
						<!--Row-->
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Static Tooltip</h3>
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
										<div class="bd-example bd-example-tooltip-static">
											<div class="tooltip tooltip-top" role="tooltip">
												<div class="tooltip-inner">
												  Tooltip on the top
												</div>
											</div>
											<div class="tooltip tooltip-right" role="tooltip">
												<div class="tooltip-inner">
												  Tooltip on the right
												</div>
											</div>
											<div class="tooltip tooltip-bottom" role="tooltip">
												<div class="tooltip-inner">
												  Tooltip on the bottom
												</div>
											</div>
											<div class="tooltip tooltip-left" role="tooltip">
												<div class="tooltip-inner">
												  Tooltip on the left
												</div>
											</div>
										</div>
									</div>
									<div class="card-body">
										<h3 class="card-title">Interactive Demo Tooltip</h3>
										<div class="example">
											<div class="row text-center">
												<div class="col-md-6 col-xl-3 mt-2 mb-2">
													<button type="button" class="btn btn-purple" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
												</div>
												<div class="col-md-6 col-xl-3 mt-2 mb-2">
													<button type="button" class="btn btn-cyan" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
												</div>
												<div class="col-md-6 col-xl-3 mt-2 mb-2">
													<button type="button" class="btn btn-pink" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
												</div>
												<div class="col-md-6 col-xl-3 mt-2 mb-2">
													<button type="button" class="btn btn-teal" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toolpop1"><pre><code class="language-markup"><script type="html-demo/script"><div class="row text-center">
	<div class="col-md-6 col-xl-3 mt-2 mb-2">
		<button type="button" class="btn btn-purple" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
	</div>
	<div class="col-md-6 col-xl-3 mt-2 mb-2">
		<button type="button" class="btn btn-cyan" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
	</div>
	<div class="col-md-6 col-xl-3 mt-2 mb-2">
		<button type="button" class="btn btn-pink" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
	</div>
	<div class="col-md-6 col-xl-3 mt-2 mb-2">
		<button type="button" class="btn btn-teal" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#toolpop1"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!--col end-->
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Basic Popover</h3>
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
											<div class="row text-center">
												<div class="col-sm-6 col-lg-3 mt-2 mb-2">
													<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="top" title="Popover top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
														Popover top
													</button>
												</div><!-- col-3 -->
												<div class="col-sm-6 col-lg-3 mt-2 mb-2 ">
													<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="bottom" title="Popover bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
														Popover bottom
													</button>
												</div><!-- col-3 -->
												<div class="col-sm-6 col-lg-3 mt-2 mb-2">
													<button type="button" class="btn btn-success" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="left" title="Popover left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
														Popover left
													</button>
												</div><!-- col-3 -->
												<div class="col-sm-6 col-lg-3 mt-2 mb-2">
													<button type="button" class="btn btn-danger" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="right" title="Popover right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
														Popover right
													</button>
												</div><!-- col-3 -->
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="toolpop2"><pre><code class="language-markup"><script type="html-demo/script"><div class="row text-center">
	<div class="col-sm-6 col-lg-3 mt-2 mb-2">
		<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="top" title="Popover top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
			Popover top
		</button>
	</div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mt-2 mb-2 ">
		<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="bottom" title="Popover bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
			Popover bottom
		</button>
	</div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mt-2 mb-2">
		<button type="button" class="btn btn-success" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="left" title="Popover left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
			Popover left
		</button>
	</div><!-- col-3 -->
	<div class="col-sm-6 col-lg-3 mt-2 mb-2">
		<button type="button" class="btn btn-danger" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="right" title="Popover right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
			Popover right
		</button>
	</div><!-- col-3 -->
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#toolpop2"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!--col end-->
						</div>
						<!--End Row-->

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