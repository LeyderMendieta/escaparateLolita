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
							<h1 class="page-title">Pagination</h1>
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
							<div class="col-md-12">
								<div class="card overflow-hidden">
									<div class="card-header">
										<div>
											<h3 class="card-title">Basic pagination</h3>
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
										<div class="pagination-wrapper">
											<nav aria-label="Page navigation">
												<ul class="pagination mb-0">
													<li class="page-item active">
														<a class="page-link" href="#">1</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">2</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">3</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">4</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">5</a>
													</li>
													<li class="page-item">
														<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
													</li>
												</ul>
											</nav>
										</div>
										<!-- pagination-wrapper -->
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Basic pagination</h3>
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
											<ul class="pagination">
												<li class="page-item page-prev disabled">
													<a class="page-link" href="#" tabindex="-1">Prev</a>
												</li>
												<li class="page-item active"><a class="page-link" href="#">1</a></li>
												<li class="page-item"><a class="page-link" href="#">2</a></li>
												<li class="page-item"><a class="page-link" href="#">3</a></li>
												<li class="page-item"><a class="page-link" href="#">4</a></li>
												<li class="page-item page-next">
													<a class="page-link" href="#">Next</a>
												</li>
											</ul>
											<!-- pagination-wrapper -->
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination1"><pre><code class="language-markup"><script type="html-demo/script"><ul class="pagination">
	<li class="page-item page-prev disabled">
		<a class="page-link" href="#" tabindex="-1">Prev</a>
	</li>
	<li class="page-item active"><a class="page-link" href="#">1</a></li>
	<li class="page-item"><a class="page-link" href="#">2</a></li>
	<li class="page-item"><a class="page-link" href="#">3</a></li>
	<li class="page-item"><a class="page-link" href="#">4</a></li>
	<li class="page-item page-next">
		<a class="page-link" href="#">Next</a>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination1"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Model pagination</h3>
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
									<div class="card-body ">
										<div class="example">
											<ul class="pagination mg-b-0 page-0">
												<li class="page-item">
													<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a>
												</li>
												<li class="page-item">
													<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
												</li>

												<li class="page-item">
													<a class="page-link" href="#">2</a>
												</li>
												<li class="page-item active">
													<a class="page-link" href="#">3</a>
												</li>
												<li class="page-item">
													<a class="page-link hidden-xs-down" href="#">4</a>
												</li>

												<li class="page-item">
													<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
												</li>
												<li class="page-item">
													<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
												</li>
											</ul>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination2"><pre><code class="language-markup"><script type="html-demo/script"><ul class="pagination mg-b-0 page-0">
	<li class="page-item">
		<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a>
	</li>
	<li class="page-item">
		<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
	</li>

	<li class="page-item">
		<a class="page-link" href="#">2</a>
	</li>
	<li class="page-item active">
		<a class="page-link" href="#">3</a>
	</li>
	<li class="page-item">
		<a class="page-link hidden-xs-down" href="#">4</a>
	</li>

	<li class="page-item">
		<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
	</li>
	<li class="page-item">
		<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination2"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
									<!-- pagination-wrapper -->
								</div>
								<!-- section-wrapper -->
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Model Pagination2</h3>
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
											<nav aria-label="Page navigation">
												<ul class="pagination pagination-success mb-0">
													<li class="page-item page-0">
														<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
													</li>
													<li class="page-item">
														<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a>
													</li>
													<li class="page-item active">
														<a class="page-link" href="#">4</a>
													</li>
													<li class="page-item disabled"><span class="page-link">...</span></li>
													<li class="page-item">
														<a class="page-link" href="#">10</a>
													</li>
													<li class="page-item page-0">
														<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
													</li>
													<li class="page-item">
														<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
													</li>
												</ul>
											</nav>
											<!-- pagination-wrapper -->
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination3"><pre><code class="language-markup"><script type="html-demo/script"><nav aria-label="Page navigation">
	<ul class="pagination pagination-success mb-0">
		<li class="page-item page-0">
			<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
		</li>
		<li class="page-item">
			<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a>
		</li>
		<li class="page-item active">
			<a class="page-link" href="#">4</a>
		</li>
		<li class="page-item disabled"><span class="page-link">...</span></li>
		<li class="page-item">
			<a class="page-link" href="#">10</a>
		</li>
		<li class="page-item page-0">
			<a aria-label="Next" class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
		</li>
		<li class="page-item">
			<a aria-label="Last" class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination3"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- Edn Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Model Pagination2</h3>
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
											<nav aria-label="Page navigation example">
												<ul class="pagination mb-0">
													<li class="page-item">
														<a class="page-link" href="#" aria-label="Previous">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#" aria-label="Next">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination4"><pre><code class="language-markup"><script type="html-demo/script"><nav aria-label="Page navigation example">
	<ul class="pagination mb-0">
		<li class="page-item">
			<a class="page-link" href="#" aria-label="Previous">
				<i class="fa fa-angle-left"></i>
				<span class="sr-only">Previous</span>
			</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#" aria-label="Next">
				<i class="fa fa-angle-right"></i>
				<span class="sr-only">Next</span>
			</a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination4"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Pagination left alignment</h3>
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
											<nav aria-label="Page navigation example">
												<ul class="pagination mb-0">
													<li class="page-item disabled">
														<a class="page-link" href="#" tabindex="-1">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item active"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination5"><pre><code class="language-markup"><script type="html-demo/script"><nav aria-label="Page navigation example">
	<ul class="pagination mb-0">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1">
				<i class="fa fa-angle-left"></i>
				<span class="sr-only">Previous</span>
			</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item active"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">
				<i class="fa fa-angle-right"></i>
				<span class="sr-only">Next</span>
			</a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination5"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Pagination Center alignment</h3>
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
											<nav aria-label="Page navigation example">
												<ul class="pagination justify-content-center mb-0">
													<li class="page-item disabled">
														<a class="page-link" href="#" tabindex="-1">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item active"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination6"><pre><code class="language-markup"><script type="html-demo/script"><nav aria-label="Page navigation example">
	<ul class="pagination justify-content-center mb-0">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1">
				<i class="fa fa-angle-left"></i>
				<span class="sr-only">Previous</span>
			</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item active"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">
				<i class="fa fa-angle-right"></i>
				<span class="sr-only">Next</span>
			</a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination6"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Pagination Right alignment</h3>
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
											<nav aria-label="Page navigation example">
												<ul class="pagination justify-content-end mb-0">
													<li class="page-item disabled">
														<a class="page-link" href="#" tabindex="-1">
															<i class="fa fa-angle-left"></i>
															<span class="sr-only">Previous</span>
														</a>
													</li>
													<li class="page-item"><a class="page-link" href="#">1</a></li>
													<li class="page-item active"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item">
														<a class="page-link" href="#">
															<i class="fa fa-angle-right"></i>
															<span class="sr-only">Next</span>
														</a>
													</li>
												</ul>
											</nav>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination7"><pre><code class="language-markup"><script type="html-demo/script"><nav aria-label="Page navigation example">
	<ul class="pagination justify-content-end mb-0">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1">
				<i class="fa fa-angle-left"></i>
				<span class="sr-only">Previous</span>
			</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item active"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">
				<i class="fa fa-angle-right"></i>
				<span class="sr-only">Next</span>
			</a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination7"><i class="ti-clipboard"></i></div>
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
<!--Time Counter js-->
<script src="{{URL::asset('assets/plugins/counters/jquery.missofis-countdown.js')}}"></script>
<script src="{{URL::asset('assets/plugins/counters/counter.js')}}"></script>
@endsection