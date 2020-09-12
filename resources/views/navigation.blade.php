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
							<h1 class="page-title">Navigation</h1>
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
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Basic Nav</h3>
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
											<ul class="nav1">
												<li class="nav-item1">
													<a class="nav-link active" href="#">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled" href="#">Disabled</a>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav1"><pre><code class="language-markup"><script type="html-demo/script"><ul class="nav1">
	<li class="nav-item1">
		<a class="nav-link active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled" href="#">Disabled</a>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav1"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Nav Vertical</h3>
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
											<ul class="nav1 flex-column">
												<li class="nav-item1">
													<a class="nav-link active" href="#">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled" href="#">Disabled</a>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav2"><pre><code class="language-markup"><script type="html-demo/script"><ul class="nav1 flex-column">
	<li class="nav-item1">
		<a class="nav-link active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled" href="#">Disabled</a>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav2"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Color Nav</h3>
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
											<ul class="nav nav-pills">
												<li class="nav-item m-2">
													<a class="nav-link active" href="#">Active</a>
												</li>
												<li class="nav-item dropdown m-2">
													<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="#">Separated link</a>
													</div>
												</li>
												<li class="nav-item m-2">
													<a class="nav-link" href="#">Link</a>
												</li>
												<li class="nav-item m-2">
													<a class="nav-link disabled" href="#">Disabled</a>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav3"><pre><code class="language-markup"><script type="html-demo/script"><ul class="nav nav-pills">
	<li class="nav-item m-2">
		<a class="nav-link active" href="#">Active</a>
	</li>
	<li class="nav-item dropdown m-2">
		<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
		<div class="dropdown-menu">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" href="#">Separated link</a>
		</div>
	</li>
	<li class="nav-item m-2">
		<a class="nav-link" href="#">Link</a>
	</li>
	<li class="nav-item m-2">
		<a class="nav-link disabled" href="#">Disabled</a>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav3"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Nav Tabs</h3>
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
											<ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="tabs-text" role="tablist">
												<li class="nav-item">
													<a class="nav-link mt-2 m-lg-0 border p-3" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab"  aria-selected="false">UI/UX Design</a>
												</li>
												<li class="nav-item">
													<a class="nav-link mt-2 m-lg-0 border p-3" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-selected="false">Programming</a>
												</li>
												<li class="nav-item">
													<a class="nav-link mt-2 m-lg-0 border active show p-3" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab"  aria-selected="true">Graphic</a>
												</li>
												<li class="nav-item">
													<a class="nav-link mt-2 m-lg-0 border p-3" id="tabs-text-4-tab" data-toggle="tab" href="#tabs-text-4" role="tab" aria-selected="false">Developing</a>
												</li>
												<li class="nav-item">
													<a class="nav-link mt-2 m-lg-0 border p-3" id="tabs-text-5-tab" data-toggle="tab" href="#tabs-text-5" role="tab" aria-selected="false">Photoshop</a>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav4"><pre><code class="language-markup"><script type="html-demo/script"><ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="tabs-text" role="tablist">
	<li class="nav-item">
		<a class="nav-link mt-2 m-lg-0 border p-3" id="tabs-text-1-tab" data-toggle="tab" href="#tabs-text-1" role="tab"  aria-selected="false">UI/UX Design</a>
	</li>
	<li class="nav-item">
		<a class="nav-link mt-2 m-lg-0 border p-3" id="tabs-text-2-tab" data-toggle="tab" href="#tabs-text-2" role="tab" aria-selected="false">Programming</a>
	</li>
	<li class="nav-item">
		<a class="nav-link mt-2 m-lg-0 border active show p-3" id="tabs-text-3-tab" data-toggle="tab" href="#tabs-text-3" role="tab"  aria-selected="true">Graphic</a>
	</li>
	<li class="nav-item">
		<a class="nav-link mt-2 m-lg-0 border p-3" id="tabs-text-4-tab" data-toggle="tab" href="#tabs-text-4" role="tab" aria-selected="false">Developing</a>
	</li>
	<li class="nav-item">
		<a class="nav-link mt-2 m-lg-0 border p-3" id="tabs-text-5-tab" data-toggle="tab" href="#tabs-text-5" role="tab" aria-selected="false">Photoshop</a>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav4"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Icon With Title</h3>
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
											<ul class="nav nav-pills nav-pills-circle" id="tabs-3" role="tablist">
												<li class="nav-item">
													<a class="nav-link border p-3 m-2" id="tab31" data-toggle="tab" href="#tabs31" role="tab" aria-selected="false">
														<span class="nav-link-icon d-block"><i class="fe fe-home"></i> Home</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border p-3 m-2" id="tab32" data-toggle="tab" href="#tabs32" role="tab"  aria-selected="false">
														<span class="nav-link-icon d-block"><i class="fe fe-unlock"></i> Lock </span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link p-3 border active show m-2" id="tab33" data-toggle="tab" href="#tabs33" role="tab" aria-selected="true">
														<span class="nav-link-icon d-block"><i class="fe fe-play"></i> Videos</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border p-3 m-2" id="tab34" data-toggle="tab" href="#tabs34" role="tab" aria-selected="false">
														<span class="nav-link-icon d-block"><i class="fe fe-layers"></i> Severs</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border p-3 m-2" id="tab35" data-toggle="tab" href="#tabs35" role="tab" aria-selected="false">
														<span class="nav-link-icon d-block"><i class="fe fe-image"></i> Gallery </span>
													</a>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav5"><pre><code class="language-markup"><script type="html-demo/script"><ul class="nav nav-pills nav-pills-circle" id="tabs-3" role="tablist">
	<li class="nav-item">
		<a class="nav-link border p-3 m-2" id="tab31" data-toggle="tab" href="#tabs31" role="tab" aria-selected="false">
			<span class="nav-link-icon d-block"><i class="fe fe-home"></i> Home</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link border p-3 m-2" id="tab32" data-toggle="tab" href="#tabs32" role="tab"  aria-selected="false">
			<span class="nav-link-icon d-block"><i class="fe fe-unlock"></i> Lock </span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link p-3 border active show m-2" id="tab33" data-toggle="tab" href="#tabs33" role="tab" aria-selected="true">
			<span class="nav-link-icon d-block"><i class="fe fe-play"></i> Videos</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link border p-3 m-2" id="tab34" data-toggle="tab" href="#tabs34" role="tab" aria-selected="false">
			<span class="nav-link-icon d-block"><i class="fe fe-layers"></i> Severs</span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link border p-3 m-2" id="tab35" data-toggle="tab" href="#tabs35" role="tab" aria-selected="false">
			<span class="nav-link-icon d-block"><i class="fe fe-image"></i> Gallery </span>
		</a>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav5"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Icon Nav Bar</h3>
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
											<ul class="nav nav-pills nav-pills-circle" id="tabs-2" role="tablist">
												<li class="nav-item">
													<a class="nav-link border w-8 h-8 text-center br-100 m-2" id="tab21" data-toggle="tab" href="#tabs21" role="tab" aria-controls="tab21" aria-selected="false">
														<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-home"></i></span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border w-8 h-8 br-100 m-2" id="tab22" data-toggle="tab" href="#tabs22" role="tab" aria-controls="tab22" aria-selected="false">
														<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-unlock"></i></span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border active show w-8 h-8 br-100 m-2" id="tab23" data-toggle="tab" href="#tabs23" role="tab" aria-controls="tab23" aria-selected="true">
														<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-play"></i></span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border w-8 h-8 br-100 m-2" id="tab24" data-toggle="tab" href="#tabs23" role="tab" aria-controls="tab24" aria-selected="false">
														<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-layers"></i></span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link border  w-8 h-8 br-100 m-2" id="tab25" data-toggle="tab" href="#tabs24" role="tab" aria-controls="tab25" aria-selected="false">
														<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-image"></i> </span>
													</a>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav6"><pre><code class="language-markup"><script type="html-demo/script"><ul class="nav nav-pills nav-pills-circle" id="tabs-2" role="tablist">
	<li class="nav-item">
		<a class="nav-link border w-8 h-8 text-center br-100 m-2" id="tab21" data-toggle="tab" href="#tabs21" role="tab" aria-controls="tab21" aria-selected="false">
			<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-home"></i></span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link border w-8 h-8 br-100 m-2" id="tab22" data-toggle="tab" href="#tabs22" role="tab" aria-controls="tab22" aria-selected="false">
			<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-unlock"></i></span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link border active show w-8 h-8 br-100 m-2" id="tab23" data-toggle="tab" href="#tabs23" role="tab" aria-controls="tab23" aria-selected="true">
			<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-play"></i></span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link border w-8 h-8 br-100 m-2" id="tab24" data-toggle="tab" href="#tabs23" role="tab" aria-controls="tab24" aria-selected="false">
			<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-layers"></i></span>
		</a>
	</li>
	<li class="nav-item">
		<a class="nav-link border  w-8 h-8 br-100 m-2" id="tab25" data-toggle="tab" href="#tabs24" role="tab" aria-controls="tab25" aria-selected="false">
			<span class="nav-link-icon d-block text-center mx-auto"><i class="fe fe-image"></i> </span>
		</a>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav6"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Color Nav</h3>
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
											<ul class="nav1 bg-primary">
												<li class="nav-item1">
													<a class="nav-link text-white active" href="#">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled text-white-50" href="#">Disabled</a>
												</li>
											</ul>
											<ul class="nav1 bg-info mt-4">
												<li class="nav-item1">
													<a class="nav-link text-white active" href="#">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled text-white-50" href="#">Disabled</a>
												</li>
											</ul>
											<ul class="nav1 bg-success mt-4">
												<li class="nav-item1">
													<a class="nav-link text-white active" href="#">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled text-white-50" href="#">Disabled</a>
												</li>
											</ul>
											<ul class="nav1 bg-danger mt-4">
												<li class="nav-item1">
													<a class="nav-link text-white active" href="#">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled text-white-50" href="#">Disabled</a>
												</li>
											</ul>
											<ul class="nav1 bg-secondary mt-4">
												<li class="nav-item1">
													<a class="nav-link text-white active" href="#">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled text-white-50" href="#">Disabled</a>
												</li>
											</ul>
											<ul class="nav1 bg-yellow mt-4">
												<li class="nav-item1">
													<a class="nav-link text-white active" href="#">Active</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link text-white" href="#">Link</a>
												</li>
												<li class="nav-item1">
													<a class="nav-link disabled text-white-50" href="#">Disabled</a>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav7"><pre><code class="language-markup"><script type="html-demo/script"><ul class="nav1 bg-primary">
	<li class="nav-item1">
		<a class="nav-link text-white active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled text-white-50" href="#">Disabled</a>
	</li>
</ul>
<ul class="nav1 bg-info mt-4">
	<li class="nav-item1">
		<a class="nav-link text-white active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled text-white-50" href="#">Disabled</a>
	</li>
</ul>
<ul class="nav1 bg-success mt-4">
	<li class="nav-item1">
		<a class="nav-link text-white active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled text-white-50" href="#">Disabled</a>
	</li>
</ul>
<ul class="nav1 bg-danger mt-4">
	<li class="nav-item1">
		<a class="nav-link text-white active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled text-white-50" href="#">Disabled</a>
	</li>
</ul>
<ul class="nav1 bg-secondary mt-4">
	<li class="nav-item1">
		<a class="nav-link text-white active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled text-white-50" href="#">Disabled</a>
	</li>
</ul>
<ul class="nav1 bg-yellow mt-4">
	<li class="nav-item1">
		<a class="nav-link text-white active" href="#">Active</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link text-white" href="#">Link</a>
	</li>
	<li class="nav-item1">
		<a class="nav-link disabled text-white-50" href="#">Disabled</a>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav7"><i class="ti-clipboard"></i></div>
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