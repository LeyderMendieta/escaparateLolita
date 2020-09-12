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
							<h1 class="page-title">Breadcrumbs</h1>
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
											<h3 class="card-title">Simple Breadcrumbs</h3>
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
											<ol class="breadcrumb1">
												<li class="breadcrumb-item1 active">Home</li>
												<li class="breadcrumb-item1 active">About</li>
											</ol>
											<ol class="breadcrumb1">
												<li class="breadcrumb-item1"><a href="#">Home</a></li>
												<li class="breadcrumb-item1 active">Library</li>
											</ol>
											<ol class="breadcrumb1">
												<li class="breadcrumb-item1"><a href="#">Home</a></li>
												<li class="breadcrumb-item1"><a href="#">Library</a></li>
												<li class="breadcrumb-item1 active">Data</li>
											</ol>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb1"><pre><code class="language-markup"><script type="html-demo/script"><ol class="breadcrumb1">
	<li class="breadcrumb-item1 active">Home</li>
	<li class="breadcrumb-item1 active">About</li>
</ol>
<ol class="breadcrumb1">
	<li class="breadcrumb-item1"><a href="#">Home</a></li>
	<li class="breadcrumb-item1 active">Library</li>
</ol>
<ol class="breadcrumb1">
	<li class="breadcrumb-item1"><a href="#">Home</a></li>
	<li class="breadcrumb-item1"><a href="#">Library</a></li>
	<li class="breadcrumb-item1 active">Data</li>
</ol></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#breadcrumb1"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Breadcrumbs-Center align</h3>
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
											<div class="breadcrumb-3">
												<ol class="breadcrumb1">
													<li class="breadcrumb-item1"><a href="#">Home</a></li>
													<li class="breadcrumb-item1 active">about</li>
												</ol>
											</div>
											<div class="breadcrumb-4">
												<ol class="breadcrumb1">
													<li class="breadcrumb-item1"><a href="#">Home</a></li>
													<li class="breadcrumb-item1 active">Library</li>
												</ol>
											</div>
											<div class="breadcrumb-5">
												<ol class="breadcrumb1 mb-0">
													<li class="breadcrumb-item1"><a href="#">Home</a></li>
													<li class="breadcrumb-item1"><a href="#">Library</a></li>
													<li class="breadcrumb-item1 active">Data</li>
												</ol>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb2"><pre><code class="language-markup"><script type="html-demo/script"><div class="breadcrumb-3">
	<ol class="breadcrumb1">
		<li class="breadcrumb-item1"><a href="#">Home</a></li>
		<li class="breadcrumb-item1 active">about</li>
	</ol>
</div>
<div class="breadcrumb-4">
	<ol class="breadcrumb1">
		<li class="breadcrumb-item1"><a href="#">Home</a></li>
		<li class="breadcrumb-item1 active">Library</li>
	</ol>
</div>
<div class="breadcrumb-5">
	<ol class="breadcrumb1 mb-0">
		<li class="breadcrumb-item1"><a href="#">Home</a></li>
		<li class="breadcrumb-item1"><a href="#">Library</a></li>
		<li class="breadcrumb-item1 active">Data</li>
	</ol>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#breadcrumb2"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Breadcrumbs-Right align</h3>
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
											<div class="breadcrumb-1">
												<ol class="breadcrumb1">
													<li class="breadcrumb-item1"><a href="#">Home</a></li>
													<li class="breadcrumb-item1 active">about</li>
												</ol>
											</div>
											<div class="breadcrumb-2">
												<ol class="breadcrumb1">
													<li class="breadcrumb-item1"><a href="#">Home</a></li>
													<li class="breadcrumb-item1"><a href="#">Library</a></li>
												</ol>
											</div>
											<div class="breadcrumb-6">
												<ol class="breadcrumb1 mb-0">
													<li class="breadcrumb-item1"><a href="#">Home</a></li>
													<li class="breadcrumb-item1"><a href="#">Library</a></li>
													<li class="breadcrumb-item1 active">Data</li>
												</ol>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb3"><pre><code class="language-markup"><script type="html-demo/script"><div class="breadcrumb-1">
	<ol class="breadcrumb1">
		<li class="breadcrumb-item1"><a href="#">Home</a></li>
		<li class="breadcrumb-item1 active">about</li>
	</ol>
</div>
<div class="breadcrumb-2">
	<ol class="breadcrumb1">
		<li class="breadcrumb-item1"><a href="#">Home</a></li>
		<li class="breadcrumb-item1"><a href="#">Library</a></li>
	</ol>
</div>
<div class="breadcrumb-6">
	<ol class="breadcrumb1 mb-0">
		<li class="breadcrumb-item1"><a href="#">Home</a></li>
		<li class="breadcrumb-item1"><a href="#">Library</a></li>
		<li class="breadcrumb-item1 active">Data</li>
	</ol>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#breadcrumb3"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Color Breadcrumbs</h3>
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
											<ol class="breadcrumb1 bg-blue">
												<li class="breadcrumb-item1 active text-white">Home</li>
												<li class="breadcrumb-item1 active text-white">About</li>
											</ol>
											<ol class="breadcrumb1 bg-purple">
												<li class="breadcrumb-item1"><a href="#" class="text-white">Home</a></li>
												<li class="breadcrumb-item1 active text-white">Library</li>
											</ol>
											<ol class="breadcrumb1 bg-orange">
												<li class="breadcrumb-item1"><a href="#" class="text-white">Home</a></li>
												<li class="breadcrumb-item1"><a href="#" class="text-white">Library</a></li>
												<li class="breadcrumb-item1 active text-white">Data</li>
											</ol>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb4"><pre><code class="language-markup"><script type="html-demo/script"><ol class="breadcrumb1 bg-blue">
	<li class="breadcrumb-item1 active text-white">Home</li>
	<li class="breadcrumb-item1 active text-white">About</li>
</ol>
<ol class="breadcrumb1 bg-purple">
	<li class="breadcrumb-item1"><a href="#" class="text-white">Home</a></li>
	<li class="breadcrumb-item1 active text-white">Library</li>
</ol>
<ol class="breadcrumb1 bg-orange">
	<li class="breadcrumb-item1"><a href="#" class="text-white">Home</a></li>
	<li class="breadcrumb-item1"><a href="#" class="text-white">Library</a></li>
	<li class="breadcrumb-item1 active text-white">Data</li>
</ol></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#breadcrumb4"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Color Breadcrumbs</h3>
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
											<ol class="breadcrumb breadcrumb-arrow mt-3">
												<li><a href="#">Home</a></li>
												<li class="active"><span>Data</span></li>
											</ol>
											<ol class="breadcrumb breadcrumb-arrow mt-3">
												<li><a href="#">Home</a></li>
												<li><a href="#">Library</a></li>
												<li class="active"><span>Data</span></li>
											</ol>
											<ol class="breadcrumb breadcrumb-arrow mt-3">
												<li><a href="#">Home</a></li>
												<li><a href="#">Library</a></li>
												<li><a href="#">Elements</a></li>
												<li class="active"><span>Data</span></li>
											</ol>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="breadcrumb5"><pre><code class="language-markup"><script type="html-demo/script"><ol class="breadcrumb breadcrumb-arrow mt-3">
	<li><a href="#">Home</a></li>
	<li class="active"><span>Data</span></li>
</ol>
<ol class="breadcrumb breadcrumb-arrow mt-3">
	<li><a href="#">Home</a></li>
	<li><a href="#">Library</a></li>
	<li class="active"><span>Data</span></li>
</ol>
<ol class="breadcrumb breadcrumb-arrow mt-3">
	<li><a href="#">Home</a></li>
	<li><a href="#">Library</a></li>
	<li><a href="#">Elements</a></li>
	<li class="active"><span>Data</span></li>
</ol></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#breadcrumb5"><i class="ti-clipboard"></i></div>
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