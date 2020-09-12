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
							<h1 class="page-title">List</h1>
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
							<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Default Active  Link List</h3>
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
											<div class="panel panel-Default">
												<div class="list-group">
													<a href="#" class="list-group-item">Cras justo odio</a>
													<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
													<a href="#" class="list-group-item">Morbi leo risus</a>
													<a href="#" class="list-group-item">Porta ac consectetur ac</a>
													<a href="#" class="list-group-item">Vestibulum at eros</a>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list1"><pre><code class="language-markup"><script type="html-demo/script"><div class="panel panel-Default">
	<div class="list-group">
		<a href="#" class="list-group-item">Cras justo odio</a>
		<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
		<a href="#" class="list-group-item">Morbi leo risus</a>
		<a href="#" class="list-group-item">Porta ac consectetur ac</a>
		<a href="#" class="list-group-item">Vestibulum at eros</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list1"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Primary Active  Link List</h3>
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
											<div class="panel panel-primary">
												<div class="list-group">
													<a href="#" class="list-group-item">Cras justo odio</a>
													<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
													<a href="#" class="list-group-item">Morbi leo risus</a>
													<a href="#" class="list-group-item">Porta ac consectetur ac</a>
													<a href="#" class="list-group-item">Vestibulum at eros</a>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list2"><pre><code class="language-markup"><script type="html-demo/script"><div class="panel panel-primary">
	<div class="list-group">
		<a href="#" class="list-group-item">Cras justo odio</a>
		<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
		<a href="#" class="list-group-item">Morbi leo risus</a>
		<a href="#" class="list-group-item">Porta ac consectetur ac</a>
		<a href="#" class="list-group-item">Vestibulum at eros</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list2"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Success Active  Link List</h3>
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
											<div class="panel panel-success">
												<div class="list-group">
													<a href="#" class="list-group-item">Cras justo odio</a>
													<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
													<a href="#" class="list-group-item">Morbi leo risus</a>
													<a href="#" class="list-group-item">Porta ac consectetur ac</a>
													<a href="#" class="list-group-item">Vestibulum at eros</a>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list3"><pre><code class="language-markup"><script type="html-demo/script"><div class="panel panel-success">
	<div class="list-group">
		<a href="#" class="list-group-item">Cras justo odio</a>
		<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
		<a href="#" class="list-group-item">Morbi leo risus</a>
		<a href="#" class="list-group-item">Porta ac consectetur ac</a>
		<a href="#" class="list-group-item">Vestibulum at eros</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list3"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Info Active  Link List</h3>
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
											<div class="panel panel-info">
												<div class="list-group">
													<a href="#" class="list-group-item">Cras justo odio</a>
													<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
													<a href="#" class="list-group-item">Morbi leo risus</a>
													<a href="#" class="list-group-item">Porta ac consectetur ac</a>
													<a href="#" class="list-group-item">Vestibulum at eros</a>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list4"><pre><code class="language-markup"><script type="html-demo/script"><div class="panel panel-info">
	<div class="list-group">
		<a href="#" class="list-group-item">Cras justo odio</a>
		<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
		<a href="#" class="list-group-item">Morbi leo risus</a>
		<a href="#" class="list-group-item">Porta ac consectetur ac</a>
		<a href="#" class="list-group-item">Vestibulum at eros</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list4"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Warning Active  Link List</h3>
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
											<div class="panel panel-warning">
												<div class="list-group">
													<a href="#" class="list-group-item">Cras justo odio</a>
													<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
													<a href="#" class="list-group-item">Morbi leo risus</a>
													<a href="#" class="list-group-item">Porta ac consectetur ac</a>
													<a href="#" class="list-group-item">Vestibulum at eros</a>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list5"><pre><code class="language-markup"><script type="html-demo/script"><div class="panel panel-warning">
	<div class="list-group">
		<a href="#" class="list-group-item">Cras justo odio</a>
		<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
		<a href="#" class="list-group-item">Morbi leo risus</a>
		<a href="#" class="list-group-item">Porta ac consectetur ac</a>
		<a href="#" class="list-group-item">Vestibulum at eros</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list5"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">List Styles</h3>
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
											<div class="panel panel-danger">
												<div class="list-group">
													<a href="#" class="list-group-item">Cras justo odio</a>
													<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
													<a href="#" class="list-group-item">Morbi leo risus</a>
													<a href="#" class="list-group-item">Porta ac consectetur ac</a>
													<a href="#" class="list-group-item">Vestibulum at eros</a>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list6"><pre><code class="language-markup"><script type="html-demo/script"><div class="panel panel-danger">
	<div class="list-group">
		<a href="#" class="list-group-item">Cras justo odio</a>
		<a href="#" class="list-group-item active">Dapibus ac facilisis in</a>
		<a href="#" class="list-group-item">Morbi leo risus</a>
		<a href="#" class="list-group-item">Porta ac consectetur ac</a>
		<a href="#" class="list-group-item">Vestibulum at eros</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list6"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Basic List Group</h3>
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
											<ul class="list-group">
												<li class="list-group-item">Cras justo odio</li>
												<li class="list-group-item">Dapibus ac facilisis in</li>
												<li class="list-group-item">Morbi leo risus</li>
												<li class="list-group-item">Porta ac consectetur ac</li>
												<li class="list-group-item">Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list7"><pre><code class="language-markup"><script type="html-demo/script"><ul class="list-group">
	<li class="list-group-item">Cras justo odio</li>
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list7"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Active List Item</h3>
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
											<ul class="list-group">
												<li class="list-group-item active">Cras justo odio</li>
												<li class="list-group-item">Dapibus ac facilisis in</li>
												<li class="list-group-item">Morbi leo risus</li>
												<li class="list-group-item">Porta ac consectetur ac</li>
												<li class="list-group-item">Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list8"><pre><code class="language-markup"><script type="html-demo/script"><ul class="list-group">
	<li class="list-group-item active">Cras justo odio</li>
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list8"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Order List</h3>
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
											<ul class="list-group">
												<li class="listorder">Cras justo odio</li>
												<li class="listorder">Dapibus ac facilisis in</li>
												<li class="listorder">Morbi leo risus</li>
												<li class="listorder">Porta ac consectetur ac</li>
												<li class="listorder">Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list9"><pre><code class="language-markup"><script type="html-demo/script"><ul class="list-group">
	<li class="listorder">Cras justo odio</li>
	<li class="listorder">Dapibus ac facilisis in</li>
	<li class="listorder">Morbi leo risus</li>
	<li class="listorder">Porta ac consectetur ac</li>
	<li class="listorder">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list9"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Unorder List</h3>
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
											<ul class="list-group">
												<li class="listunorder">Cras justo odio</li>
												<li class="listunorder">Dapibus ac facilisis in</li>
												<li class="listunorder">Morbi leo risus</li>
												<li class="listunorder">Porta ac consectetur ac</li>
												<li class="listunorder">Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list10"><pre><code class="language-markup"><script type="html-demo/script"><ul class="list-group">
	<li class="listunorder">Cras justo odio</li>
	<li class="listunorder">Dapibus ac facilisis in</li>
	<li class="listunorder">Morbi leo risus</li>
	<li class="listunorder">Porta ac consectetur ac</li>
	<li class="listunorder">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list10"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row -->

                        <!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Disabled List Item</h3>
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
											<ul class="list-group">
												<li class="list-group-item disabled">Cras justo odio</li>
												<li class="list-group-item">Dapibus ac facilisis in</li>
												<li class="list-group-item">Morbi leo risus</li>
												<li class="list-group-item">Porta ac consectetur ac</li>
												<li class="list-group-item">Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list11"><pre><code class="language-markup"><script type="html-demo/script"><ul class="list-group">
	<li class="list-group-item disabled">Cras justo odio</li>
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item">Morbi leo risus</li>
	<li class="list-group-item">Porta ac consectetur ac</li>
	<li class="list-group-item">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list11"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Contextual Classes With List Group</h3>
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
											<ul class="list-group">
												<li class="list-group-item">Dapibus ac facilisis in</li>
												<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
												<li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
												<li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
												<li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list12"><pre><code class="language-markup"><script type="html-demo/script"><ul class="list-group">
	<li class="list-group-item">Dapibus ac facilisis in</li>
	<li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
	<li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
	<li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
	<li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list12"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">List Group With Icons</h3>
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
											<ul class="list-group">
												<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Cras justo odio</li>
												<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Dapibus ac facilisis in</li>
												<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Morbi leo risus</li>
												<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Porta ac consectetur ac</li>
												<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list13"><pre><code class="language-markup"><script type="html-demo/script"><ul class="list-group">
	<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Cras justo odio</li>
	<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Dapibus ac facilisis in</li>
	<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Morbi leo risus</li>
	<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Porta ac consectetur ac</li>
	<li class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i> Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list13"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">List Group With Colored Icons</h3>
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
											<ul class="list-group">
												<li class="list-group-item"><i class="fa fa-cog text-primary" aria-hidden="true"></i> Dapibus ac facilisis in</li>
												<li class="list-group-item"><i class="fa fa-cog text-danger" aria-hidden="true"></i> Dapibus ac facilisis in</li>
												<li class="list-group-item"><i class="fa fa-cog text-success" aria-hidden="true"></i> Cras sit amet nibh libero</li>
												<li class="list-group-item"><i class="fa fa-cog text-warning" aria-hidden="true"></i> Porta ac consectetur ac</li>
												<li class="list-group-item"><i class="fa fa-cog text-info" aria-hidden="true"></i> Vestibulum at eros</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list14"><pre><code class="language-markup"><script type="html-demo/script"><ul class="list-group">
	<li class="list-group-item"><i class="fa fa-cog text-primary" aria-hidden="true"></i> Dapibus ac facilisis in</li>
	<li class="list-group-item"><i class="fa fa-cog text-danger" aria-hidden="true"></i> Dapibus ac facilisis in</li>
	<li class="list-group-item"><i class="fa fa-cog text-success" aria-hidden="true"></i> Cras sit amet nibh libero</li>
	<li class="list-group-item"><i class="fa fa-cog text-warning" aria-hidden="true"></i> Porta ac consectetur ac</li>
	<li class="list-group-item"><i class="fa fa-cog text-info" aria-hidden="true"></i> Vestibulum at eros</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list14"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row-->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">List Group With Default Badges</h3>
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
											<ul class="list-group">
												<li class="list-group-item">
												Cras justo odio
												<span class="badgetext badge badge-default badge-pill">14</span>
												</li>
												<li class="list-group-item">
												Dapibus ac facilisis in
												<span class=" badgetext badge badge-default badge-pill">2</span>
												</li>
												<li class="list-group-item">
												Morbi leo risus
												<span class=" badgetext badge badge-default badge-pill">1</span>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list15"><pre><code class="language-markup"><script type="html-demo/script"><ul class="list-group">
	<li class="list-group-item">
	Cras justo odio
	<span class="badgetext badge badge-default badge-pill">14</span>
	</li>
	<li class="list-group-item">
	Dapibus ac facilisis in
	<span class=" badgetext badge badge-default badge-pill">2</span>
	</li>
	<li class="list-group-item">
	Morbi leo risus
	<span class=" badgetext badge badge-default badge-pill">1</span>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list15"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">List Group With Color Badges</h3>
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
											<ul class="list-group">
												<li class="list-group-item justify-content-between">
												Cras justo odio
												<span class="badgetext badge badge-primary badge-pill">14</span>
												</li>
												<li class="list-group-item justify-content-between">
												Dapibus ac facilisis in
												<span class="badgetext badge badge-danger badge-pill">2</span>
												</li>
												<li class="list-group-item justify-content-between">
												Morbi leo risus
												<span class="badgetext badge badge-success badge-pill">1</span>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list16"><pre><code class="language-markup"><script type="html-demo/script"><ul class="list-group">
	<li class="list-group-item justify-content-between">
	Cras justo odio
	<span class="badgetext badge badge-primary badge-pill">14</span>
	</li>
	<li class="list-group-item justify-content-between">
	Dapibus ac facilisis in
	<span class="badgetext badge badge-danger badge-pill">2</span>
	</li>
	<li class="list-group-item justify-content-between">
	Morbi leo risus
	<span class="badgetext badge badge-success badge-pill">1</span>
	</li>
</ul>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list16"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">List Group With Custom Content</h3>
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
											<div class="list-group">
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
													<div class="d-flex w-100 justify-content-between">
														<h5 class="mb-1">List group item heading</h5>
														<small>3 days ago</small>
													</div>
													<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
													<small>Donec id elit non mi porta.</small>
												</a>
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
													<div class="d-flex w-100 justify-content-between">
														<h5 class="mb-1">List group item heading</h5>
														<small class="text-muted">3 days ago</small>
													</div>
													<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
													<small class="text-muted">Donec id elit non mi porta.</small>
												</a>
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
													<div class="d-flex w-100 justify-content-between">
														<h5 class="mb-1">List group item heading</h5>
														<small class="text-muted">3 days ago</small>
													</div>
													<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
													<small class="text-muted">Donec id elit non mi porta.</small>
												</a>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list17"><pre><code class="language-markup"><script type="html-demo/script"><div class="list-group">
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">List group item heading</h5>
			<small>3 days ago</small>
		</div>
		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small>Donec id elit non mi porta.</small>
	</a>
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">List group item heading</h5>
			<small class="text-muted">3 days ago</small>
		</div>
		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small class="text-muted">Donec id elit non mi porta.</small>
	</a>
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">List group item heading</h5>
			<small class="text-muted">3 days ago</small>
		</div>
		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small class="text-muted">Donec id elit non mi porta.</small>
	</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list17"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-sm-12 col-md-12 col-lg-6  col-xl-6">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">List Group With Disabled Custom Content</h3>
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
											<div class="list-group">
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
													<div class="d-flex w-100 justify-content-between">
														<h5 class="mb-1">List group item heading</h5>
														<small>3 days ago</small>
													</div>
													<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
													<small>Donec id elit non mi porta.</small>
												</a>
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
													<div class="d-flex w-100 justify-content-between">
														<h5 class="mb-1">List group item heading</h5>
														<small class="text-muted">3 days ago</small>
													</div>
													<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
													<small class="text-muted">Donec id elit non mi porta.</small>
												</a>
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
													<div class="d-flex w-100 justify-content-between">
														<h5 class="mb-1">List group item heading</h5>
														<small class="text-muted">3 days ago</small>
													</div>
													<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
													<small class="text-muted">Donec id elit non mi porta.</small>
												</a>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="list18"><pre><code class="language-markup"><script type="html-demo/script"><div class="list-group">
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start disabled">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">List group item heading</h5>
			<small>3 days ago</small>
		</div>
		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small>Donec id elit non mi porta.</small>
	</a>
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">List group item heading</h5>
			<small class="text-muted">3 days ago</small>
		</div>
		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small class="text-muted">Donec id elit non mi porta.</small>
	</a>
	<a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
		<div class="d-flex w-100 justify-content-between">
			<h5 class="mb-1">List group item heading</h5>
			<small class="text-muted">3 days ago</small>
		</div>
		<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
		<small class="text-muted">Donec id elit non mi porta.</small>
	</a>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#list18"><i class="ti-clipboard"></i></div>
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