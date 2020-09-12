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
							<h1 class="page-title">Panels</h1>
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
											<h3 class="card-title">Simple Panels</h3>
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
											<div class="expanel expanel-default mt-4">
												<div class="expanel-body">
													Basic panel example
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="panels1"><pre><code class="language-markup"><script type="html-demo/script"><div class="expanel expanel-default">
	<div class="expanel-body">
		Basic panel example
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#panels1"><i class="ti-clipboard"></i></div>
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
											<h3 class="card-title">Panel with heading</h3>
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
												<div class="col-md-6">
													<div class="expanel expanel-default">
														<div class="expanel-heading">Panel heading without title</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="expanel expanel-default">
														<div class="expanel-heading">
															<div class="expanel-title">Panel title</div>
														</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="panels2"><pre><code class="language-markup"><script type="html-demo/script"><div class="row">
	<div class="col-md-6">
		<div class="expanel expanel-default">
			<div class="expanel-heading">Panel heading without title</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="expanel expanel-default">
			<div class="expanel-heading">
				<div class="expanel-title">Panel title</div>
			</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#panels2"><i class="ti-clipboard"></i></div>
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
											<h3 class="card-title">Panel with footer</h3>
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
											<div class="expanel expanel-default mt-4">
												<div class="expanel-body">
													Panel content
												</div>
												<div class="expanel-footer">Panel footer</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="panels3"><pre><code class="language-markup"><script type="html-demo/script"><div class="expanel expanel-default">
	<div class="expanel-body">
		Panel content
	</div>
	<div class="expanel-footer">Panel footer</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#panels3"><i class="ti-clipboard"></i></div>
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
											<h3 class="card-title">Panel with color header</h3>
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
												<div class="col-md-6">
													<div class="expanel expanel-primary">
														<div class="expanel-heading">
															<h3 class="expanel-title">Panel title</h3>
														</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="expanel expanel-secondary">
														<div class="expanel-heading">
															<h3 class="expanel-title">Panel title</h3>
														</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-md-6">
													<div class="expanel expanel-success">
														<div class="expanel-heading">
															<h3 class="expanel-title">Panel title</h3>
														</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="expanel expanel-danger">
														<div class="expanel-heading">
															<h3 class="expanel-title">Panel title</h3>
														</div>
														<div class="expanel-body">
															Panel content
														</div>
													</div>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="panels4"><pre><code class="language-markup"><script type="html-demo/script"><div class="row mt-4">
	<div class="col-md-6">
		<div class="expanel expanel-primary">
			<div class="expanel-heading">
				<h3 class="expanel-title">Panel title</h3>
			</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="expanel expanel-secondary">
			<div class="expanel-heading">
				<h3 class="expanel-title">Panel title</h3>
			</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		<div class="expanel expanel-success">
			<div class="expanel-heading">
				<h3 class="expanel-title">Panel title</h3>
			</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="expanel expanel-danger">
			<div class="expanel-heading">
				<h3 class="expanel-title">Panel title</h3>
			</div>
			<div class="expanel-body">
				Panel content
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#panels4"><i class="ti-clipboard"></i></div>
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
											<h3 class="card-title">Panel tabs</h3>
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
												<div class="col-md-6">
													<div class="expanel expanel-primary">
														<div class="expanel-heading clearfix align-items-center">Panel title (with paragraphs inside)
															<div class="float-right">
																<button class="btn btn-sm btn-primary" type="button" data-toggle="collapse" data-target="#collapse01"
																	aria-expanded="false" aria-controls="collapse01"><i class="fa fa-bars"></i></button>
															</div>
														</div>
														<div class="expanel-body collapse" id="collapse01">
															<p>Paragraphs</p>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
																Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
																Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
																Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
														</div>
													</div>
													<div class="expanel expanel-info">
														<div class="expanel-heading clearfix">Panel title (with list-group inside)
															<div class="float-right">
																<button class="btn btn-sm btn-light" type="button" data-toggle="collapse" data-target="#collapse02"
																	aria-expanded="false" aria-controls="collapse02"><i class="fa fa-bars"></i></button>
															</div>
														</div>
														<div class="expanel-body collapse" id="collapse02">
															<p>Notice the padding inside.</p>
															<ul class="list-group">
																<li class="list-group-item"><a href="#" role="button" class="btn btn-default btn-block">Some action</a></li>
																<li class="list-group-item"><a href="#" role="button" class="btn btn-default btn-block">Another action</a></li>
															</ul>
														</div>
													</div>
													<div class="expanel expanel-default">
														<div class="expanel-heading clearfix">Panel title (with paragraphs)
															<div class="float-right">
																<button class="btn btn-sm btn-info" type="button" data-toggle="collapse" data-target="#collapse06"
																	aria-expanded="false" aria-controls="collapse06"><i class="fa fa-bars"></i></button>
															</div>
														</div>
														<div class="expanel-body collapse" id="collapse06">
															<p>Paragraphs</p>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
																Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
																Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
																Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
														</div>
													</div>
												</div>
												<div class="col-md-6">
													<div class="expanel expanel-success">
														<div class="expanel-heading clearfix">Panel title (with table inside)
															<div class="float-right">
																<button class="btn btn-sm btn-success" type="button" data-toggle="collapse" data-target="#collapse03"
																	aria-expanded="false" aria-controls="collapse03"><i class="fa fa-bars"></i></button>
															</div>
														</div>
														<div class="expanel-body collapse table-responsive" id="collapse03">
															<table class="table">
																<thead>
																  <tr>
																	<th>#</th>
																	<th>First Name</th>
																	<th>Last Name</th>
																	<th>Username</th>
																  </tr>
																</thead>
																<tbody>
																  <tr>
																	<th scope="row" class="border-0">1</th>
																	<td>Mark</td>
																	<td>Otto</td>
																	<td>@mdo</td>
																  </tr>
																  <tr>
																	<th scope="row">2</th>
																	<td>Jacob</td>
																	<td>Thornton</td>
																	<td>@fat</td>
																  </tr>
																  <tr>
																	<th scope="row">3</th>
																	<td>Larry</td>
																	<td>the Bird</td>
																	<td>@twitter</td>
																  </tr>
																</tbody>
															</table>
														</div>
													</div>
													<div class="expanel expanel-warning">
														<div class="expanel-heading clearfix">Panel title (with paragraphs)
															<div class="float-right">
																<button class="btn btn-sm btn-warning" type="button" data-toggle="collapse" data-target="#collapse04"
																	aria-expanded="false" aria-controls="collapse04"><i class="fa fa-bars"></i></button>
															</div>
														</div>
														<div class="expanel-body collapse" id="collapse04">
															<p>Paragraphs</p>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
																Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
																Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
																Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
														</div>
													</div>
													<div class="expanel expanel-danger">
														<div class="expanel-heading clearfix">Panel title (with paragraphs)
															<div class="float-right">
																<button class="btn btn-sm btn-danger" type="button" data-toggle="collapse" data-target="#collapse05"
																	aria-expanded="false" aria-controls="collapse05"><i class="fa fa-bars"></i></button>
															</div>
														</div>
														<div class="expanel-body collapse" id="collapse05">
															<p>Paragraphs</p>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
																Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
																Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
																Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
														</div>
													</div>
												</div>
											</div><!-- row end -->
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="panels5"><pre><code class="language-markup"><script type="html-demo/script"><div class="row">
	<div class="col-md-6">
		<div class="expanel expanel-primary">
			<div class="expanel-heading clearfix align-items-center">Panel title (with paragraphs inside)
				<div class="float-right">
					<button class="btn btn-sm btn-primary" type="button" data-toggle="collapse" data-target="#collapse01"
						aria-expanded="false" aria-controls="collapse01"><i class="fa fa-bars"></i></button>
				</div>
			</div>
			<div class="expanel-body collapse" id="collapse01">
				<p>Paragraphs</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
					Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
					Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
					Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
			</div>
		</div>
		<div class="expanel expanel-info">
			<div class="expanel-heading clearfix">Panel title (with list-group inside)
				<div class="float-right">
					<button class="btn btn-sm btn-light" type="button" data-toggle="collapse" data-target="#collapse02"
						aria-expanded="false" aria-controls="collapse02"><i class="fa fa-bars"></i></button>
				</div>
			</div>
			<div class="expanel-body collapse" id="collapse02">
				<p>Notice the padding inside.</p>
				<ul class="list-group">
					<li class="list-group-item"><a href="#" role="button" class="btn btn-default btn-block">Some action</a></li>
					<li class="list-group-item"><a href="#" role="button" class="btn btn-default btn-block">Another action</a></li>
				</ul>
			</div>
		</div>
		<div class="expanel expanel-default">
			<div class="expanel-heading clearfix">Panel title (with paragraphs)
				<div class="float-right">
					<button class="btn btn-sm btn-info" type="button" data-toggle="collapse" data-target="#collapse06"
						aria-expanded="false" aria-controls="collapse06"><i class="fa fa-bars"></i></button>
				</div>
			</div>
			<div class="expanel-body collapse" id="collapse06">
				<p>Paragraphs</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
					Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
					Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
					Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
			</div>
		</div>
	</div>
	<div class="col-md-6">
		<div class="expanel expanel-success">
			<div class="expanel-heading clearfix">Panel title (with table inside)
				<div class="float-right">
					<button class="btn btn-sm btn-success" type="button" data-toggle="collapse" data-target="#collapse03"
						aria-expanded="false" aria-controls="collapse03"><i class="fa fa-bars"></i></button>
				</div>
			</div>
			<div class="expanel-body collapse" id="collapse03">
				<table class="table">
					<thead>
					  <tr>
						<th>#</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Username</th>
					  </tr>
					</thead>
					<tbody>
					  <tr>
						<th scope="row" class="border-0">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
					  </tr>
					  <tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
					  </tr>
					  <tr>
						<th scope="row">3</th>
						<td>Larry</td>
						<td>the Bird</td>
						<td>@twitter</td>
					  </tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="expanel expanel-warning">
			<div class="expanel-heading clearfix">Panel title (with paragraphs)
				<div class="float-right">
					<button class="btn btn-sm btn-warning" type="button" data-toggle="collapse" data-target="#collapse04"
						aria-expanded="false" aria-controls="collapse04"><i class="fa fa-bars"></i></button>
				</div>
			</div>
			<div class="expanel-body collapse" id="collapse04">
				<p>Paragraphs</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
					Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
					Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
					Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
			</div>
		</div>
		<div class="expanel expanel-danger">
			<div class="expanel-heading clearfix">Panel title (with paragraphs)
				<div class="float-right">
					<button class="btn btn-sm btn-danger" type="button" data-toggle="collapse" data-target="#collapse05"
						aria-expanded="false" aria-controls="collapse05"><i class="fa fa-bars"></i></button>
				</div>
			</div>
			<div class="expanel-body collapse" id="collapse05">
				<p>Paragraphs</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus.
					Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
					Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue.
					Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#panels5"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row-->

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