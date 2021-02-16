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
							<h1 class="page-title">Dropdowns</h1>
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
											<h3 class="card-title">Single button dropdowns</h3>
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
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="drops1"><pre><code class="language-markup"><script type="html-demo/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#drops1"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Rounded button dropdowns</h3>
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
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-default btn-pill dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-primary btn-pill dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-success btn-pill dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-info btn-pill dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-danger btn-pill dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="drops2"><pre><code class="language-markup"><script type="html-demo/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-default btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-primary btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-success btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-info btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-danger btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#drops2"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Split button dropdowns</h3>
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
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-default">Action</button>
												<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-primary">Action</button>
												<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-success">Action</button>
												<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class=" fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-info">Action</button>
												<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-warning">Action</button>
												<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-danger">Action</button>
												<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class=" fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="drops3"><pre><code class="language-markup"><script type="html-demo/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-default">Action</button>
	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-primary">Action</button>
	<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-success">Action</button>
	<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class=" fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-info">Action</button>
	<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-warning">Action</button>
	<button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-danger">Action</button>
	<button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class=" fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#drops3"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Rounded Split button dropdowns</h3>
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
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-pill btn-default">Action</button>
												<button type="button" class="btn btn-pill btn-default dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-pill btn-primary">Action</button>
												<button type="button" class="btn btn-pill btn-primary dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-pill btn-success">Action</button>
												<button type="button" class="btn btn-pill btn-success dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-pill btn-info">Action</button>
												<button type="button" class="btn btn-pill btn-info dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-pill btn-warning">Action</button>
												<button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class=" fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-pill btn-danger">Action</button>
												<button type="button" class="btn btn-pill btn-danger dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="drops4"><pre><code class="language-markup"><script type="html-demo/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-default">Action</button>
	<button type="button" class="btn btn-pill btn-default dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-primary">Action</button>
	<button type="button" class="btn btn-pill btn-primary dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-success">Action</button>
	<button type="button" class="btn btn-pill btn-success dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-info">Action</button>
	<button type="button" class="btn btn-pill btn-info dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-warning">Action</button>
	<button type="button" class="btn btn-warning btn-pill dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class=" fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-danger">Action</button>
	<button type="button" class="btn btn-pill btn-danger dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#drops4"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Single Square outline button dropdowns</h3>
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
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="drops5"><pre><code class="language-markup"><script type="html-demo/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#drops5"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Rounded button dropdowns</h3>
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
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-outline-primary btn-pill dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-outline-success btn-pill dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-outline-info btn-pill dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-toggle="dropdown">
													Action <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="drops6"><pre><code class="language-markup"><script type="html-demo/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-primary btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-success btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-info btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#drops6"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Split button dropdowns</h3>
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
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-outline-primary">Action</button>
												<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-outline-success">Action</button>
												<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-outline-info">Action</button>
												<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-outline-warning">Action</button>
												<button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-outline-danger">Action</button>
												<button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="drops7"><pre><code class="language-markup"><script type="html-demo/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-primary">Action</button>
	<button type="button" class="btn btn-outline-primary dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-success">Action</button>
	<button type="button" class="btn btn-outline-success dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-info">Action</button>
	<button type="button" class="btn btn-outline-info dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-warning">Action</button>
	<button type="button" class="btn btn-outline-warning dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-outline-danger">Action</button>
	<button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#drops7"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Rounded Split button dropdowns</h3>
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
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-pill btn-outline-primary">Action</button>
												<button type="button" class="btn btn-pill btn-outline-primary dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class=" fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-pill btn-outline-success">Action</button>
												<button type="button" class="btn btn-pill btn-outline-success dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-pill btn-outline-info">Action</button>
												<button type="button" class="btn btn-pill btn-outline-info dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-pill btn-outline-warning">Action</button>
												<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-pill btn-outline-danger">Action</button>
												<button type="button" class="btn btn-pill btn-outline-danger dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="drops8"><pre><code class="language-markup"><script type="html-demo/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-outline-primary">Action</button>
	<button type="button" class="btn btn-pill btn-outline-primary dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class=" fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-outline-success">Action</button>
	<button type="button" class="btn btn-pill btn-outline-success dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-outline-info">Action</button>
	<button type="button" class="btn btn-pill btn-outline-info dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-outline-warning">Action</button>
	<button type="button" class="btn btn-outline-warning btn-pill dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-pill btn-outline-danger">Action</button>
	<button type="button" class="btn btn-pill btn-outline-danger dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#drops8"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card shadow">
									<div class="card-header">
										<div>
											<h3 class="mb-0 card-title">Icons with drop-down</h3>
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
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-facebook">facebbok <i class="fe fe-facebook"></i></button>
												<button type="button" class="btn btn-facebook dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-twitter">twitter <i class="fe fe-twitter"></i></button>
												<button type="button" class="btn btn-twitter dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-youtube">youtube <i class="fe fe-play"></i></button>
												<button type="button" class="btn btn-youtube dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-github">github <i class="fe fe-github"></i></button>
												<button type="button" class="btn btn-github dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-instagram">instagram <i class="fe fe-instagram"></i></button>
												<button type="button" class="btn btn-instagram dropdown-toggle" data-toggle="dropdown">
													<span class="caret"></span>
													<span class="sr-only">Toggle Dropdown</span>
												</button>
												<div class="dropdown-menu">
													<a class="dropdown-item" href="#">Action</a>
													<a class="dropdown-item" href="#">Another action</a>
													<a class="dropdown-item" href="#">Something else here</a>
													<div class="dropdown-divider"></div>
													<a class="dropdown-item" href="#">Separated link</a>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="drops9"><pre><code class="language-markup"><script type="html-demo/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-facebook">facebbok <i class="fe fe-facebook"></i></button>
	<button type="button" class="btn btn-facebook dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<div class="dropdown-menu">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
		<div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">Separated link</a>
	</div>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-twitter">twitter <i class="fe fe-twitter"></i></button>
	<button type="button" class="btn btn-twitter dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<div class="dropdown-menu">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
		<div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">Separated link</a>
	</div>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-youtube">youtube <i class="fe fe-play"></i></button>
	<button type="button" class="btn btn-youtube dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<div class="dropdown-menu">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
		<div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">Separated link</a>
	</div>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-github">github <i class="fe fe-github"></i></button>
	<button type="button" class="btn btn-github dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<div class="dropdown-menu">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
		<div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">Separated link</a>
	</div>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-instagram">instagram <i class="fe fe-instagram"></i></button>
	<button type="button" class="btn btn-instagram dropdown-toggle" data-toggle="dropdown">
		<span class="caret"></span>
		<span class="sr-only">Toggle Dropdown</span>
	</button>
	<div class="dropdown-menu">
		<a class="dropdown-item" href="#">Action</a>
		<a class="dropdown-item" href="#">Another action</a>
		<a class="dropdown-item" href="#">Something else here</a>
		<div class="dropdown-divider"></div>
		<a class="dropdown-item" href="#">Separated link</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#drops9"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Dropup variation</h3>
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
											<!-- Split dropup button -->
											<div class="dropright btn-group mt-2 mb-2">
												<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Dropup2
													<span class="caret"></span></button>
												<ul class="dropdown-menu">
													<li><a href="#">HTML</a></li>
													<li><a href="#">CSS</a></li>
													<li><a href="#">JavaScript</a></li>
													<li class="divider"></li>
													<li><a href="#">About Us</a></li>
												</ul>
											</div>
											<div class="dropup btn-group mt-2 mb-2">
												<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropup1
													<span class="caret"></span></button>
												<ul class="dropdown-menu">
													<li><a href="#">HTML</a></li>
													<li><a href="#">CSS</a></li>
													<li><a href="#">JavaScript</a></li>
													<li class="divider"></li>
													<li><a href="#">About Us</a></li>
												</ul>
											</div>
											<!-- Split dropup button -->
											<div class="dropleft btn-group mt-2 mb-2">
												<button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Dropup2
													<span class="caret"></span></button>
												<ul class="dropdown-menu">
													<li><a href="#">HTML</a></li>
													<li><a href="#">CSS</a></li>
													<li><a href="#">JavaScript</a></li>
													<li class="divider"></li>
													<li><a href="#">About Us</a></li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="drops10"><pre><code class="language-markup"><script type="html-demo/script"><!-- Split dropup button -->
<div class="dropright btn-group mt-2 mb-2">
	<button class="btn btn-info dropdown-toggle" type="button" data-toggle="dropdown">Dropup2
		<span class="caret"></span></button>
	<ul class="dropdown-menu">
		<li><a href="#">HTML</a></li>
		<li><a href="#">CSS</a></li>
		<li><a href="#">JavaScript</a></li>
		<li class="divider"></li>
		<li><a href="#">About Us</a></li>
	</ul>
</div>
<div class="dropup btn-group mt-2 mb-2">
	<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Dropup1
		<span class="caret"></span></button>
	<ul class="dropdown-menu">
		<li><a href="#">HTML</a></li>
		<li><a href="#">CSS</a></li>
		<li><a href="#">JavaScript</a></li>
		<li class="divider"></li>
		<li><a href="#">About Us</a></li>
	</ul>
</div>
<!-- Split dropup button -->
<div class="dropleft btn-group mt-2 mb-2">
	<button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown">Dropup2
		<span class="caret"></span></button>
	<ul class="dropdown-menu">
		<li><a href="#">HTML</a></li>
		<li><a href="#">CSS</a></li>
		<li><a href="#">JavaScript</a></li>
		<li class="divider"></li>
		<li><a href="#">About Us</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#drops10"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="col-md-12 ">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Icon Drop Downs dropdowns</h3>
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
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-facebook btn-pill dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-facebook"></i> <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-twitter btn-pill dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-twitter"></i> <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-google btn-pill dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-google"></i> <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-youtube btn-pill dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-youtube "></i><span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-vimeo btn-pill dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-vimeo"></i><span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
											<div class="btn-group mt-2 mb-2">
												<button type="button" class="btn btn-github btn-pill dropdown-toggle" data-toggle="dropdown">
													<i class="fa fa-github"></i> <span class="caret"></span>
												</button>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-plus-title">
														Dropdown
														<b class="fa fa-angle-up" aria-hidden="true"></b>
													</li>
													<li><a href="#">Action</a></li>
													<li><a href="#">Another action</a></li>
													<li><a href="#">Something else here</a></li>
													<li class="divider"></li>
													<li><a href="#">Separated link</a></li>
												</ul>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="drops11"><pre><code class="language-markup"><script type="html-demo/script"><div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-facebook btn-pill dropdown-toggle" data-toggle="dropdown">
		<i class="fa fa-facebook"></i> <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-twitter btn-pill dropdown-toggle" data-toggle="dropdown">
		<i class="fa fa-twitter"></i> <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-google btn-pill dropdown-toggle" data-toggle="dropdown">
		<i class="fa fa-google"></i> <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-youtube btn-pill dropdown-toggle" data-toggle="dropdown">
		<i class="fa fa-youtube "></i><span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-vimeo btn-pill dropdown-toggle" data-toggle="dropdown">
		<i class="fa fa-vimeo"></i><span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div>
<div class="btn-group mt-2 mb-2">
	<button type="button" class="btn btn-github btn-pill dropdown-toggle" data-toggle="dropdown">
		<i class="fa fa-github"></i> <span class="caret"></span>
	</button>
	<ul class="dropdown-menu" role="menu">
		<li class="dropdown-plus-title">
			Dropdown
			<b class="fa fa-angle-up" aria-hidden="true"></b>
		</li>
		<li><a href="#">Action</a></li>
		<li><a href="#">Another action</a></li>
		<li><a href="#">Something else here</a></li>
		<li class="divider"></li>
		<li><a href="#">Separated link</a></li>
	</ul>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#drops11"><i class="ti-clipboard"></i></div>
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