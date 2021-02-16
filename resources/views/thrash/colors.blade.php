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
							<h1 class="page-title">Colors</h1>
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
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Contextual colors</h3>
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
										<div class="text-wrap">
											<div class="example">
												<div class="row">
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3 bg-primary  mr-4"></div>
															<div>
																<strong>Primary</strong><br>
																<code>.bg-primary</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-info  mr-4"></div>
															<div>
																<strong>Info</strong><br>
																<code>.bg-info</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-secondary  mr-4"></div>
															<div>
																<strong>Secondary</strong><br>
																<code>.bg-secondary</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-warning  mr-4"></div>
															<div>
																<strong>Warning</strong><br>
																<code>.bg-warning</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-danger  mr-4"></div>
															<div>
																<strong>Danger</strong><br>
																<code>.bg-danger</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-success  mr-4"></div>
															<div>
																<strong>Success</strong><br>
																<code>.bg-success</code>
															</div>
														</div>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="color1"><pre><code class="language-markup"><script type="html-demo/script"><div class="row">
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3 bg-primary  mr-4"></div>
			<div>
				<strong>Primary</strong><br>
				<code>.bg-primary</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-info  mr-4"></div>
			<div>
				<strong>Info</strong><br>
				<code>.bg-info</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-secondary  mr-4"></div>
			<div>
				<strong>Secondary</strong><br>
				<code>.bg-secondary</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-warning  mr-4"></div>
			<div>
				<strong>Warning</strong><br>
				<code>.bg-warning</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-danger  mr-4"></div>
			<div>
				<strong>Danger</strong><br>
				<code>.bg-danger</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-success  mr-4"></div>
			<div>
				<strong>Success</strong><br>
				<code>.bg-success</code>
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#color1"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Gradient colors</h3>
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
										<div class="text-wrap">
											<div class="example">
												<div class="row">
													<div class="col-md-12 col-lg-6 col-sm-12 col-xl-4">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-gradient-primary  mr-4"></div>
															<div>
																<strong>Primary</strong><br>
																<code>.bg-gradient-primary</code>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-lg-6 col-sm-12 col-xl-4">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-gradient-secondary  mr-4"></div>
															<div>
																<strong>Secondary</strong><br>
																<code>.bg-gradient-secondary</code>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-lg-6 col-sm-12 col-xl-4">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3 bg-gradient-danger  mr-4"></div>
															<div>
																<strong>Danger</strong><br>
																<code>.bg-gradient-danger</code>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-lg-6 col-sm-12 col-xl-4">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-gradient-warning  mr-4"></div>
															<div>
																<strong>Warning</strong><br>
																<code>.bg-gradient-warning</code>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-lg-6 col-sm-12 col-xl-4">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-gradient-info  mr-4"></div>
															<div>
																<strong>info</strong><br>
																<code>.bg-gradient-info</code>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-lg-6 col-sm-12 col-xl-4">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-gradient-success  mr-4"></div>
															<div>
																<strong>Success</strong><br>
																<code>.bg-gradient-success</code>
															</div>
														</div>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="color2"><pre><code class="language-markup"><script type="html-demo/script"><div class="row">
	<div class="col-md-12 col-lg-6 col-sm-12 col-xl-4">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-gradient-primary  mr-4"></div>
			<div>
				<strong>Primary</strong><br>
				<code>.bg-gradient-primary</code>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-lg-6 col-sm-12 col-xl-4">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-gradient-secondary  mr-4"></div>
			<div>
				<strong>Secondary</strong><br>
				<code>.bg-gradient-secondary</code>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-lg-6 col-sm-12 col-xl-4">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3 bg-gradient-danger  mr-4"></div>
			<div>
				<strong>Danger</strong><br>
				<code>.bg-gradient-danger</code>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-lg-6 col-sm-12 col-xl-4">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-gradient-warning  mr-4"></div>
			<div>
				<strong>Warning</strong><br>
				<code>.bg-gradient-warning</code>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-lg-6 col-sm-12 col-xl-4">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-gradient-info  mr-4"></div>
			<div>
				<strong>info</strong><br>
				<code>.bg-gradient-info</code>
			</div>
		</div>
	</div>
	<div class="col-md-12 col-lg-6 col-sm-12 col-xl-4">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-gradient-success  mr-4"></div>
			<div>
				<strong>Success</strong><br>
				<code>.bg-gradient-success</code>
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#color2"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Other colors</h3>
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
										<div class="text-wrap">
											<div class="example">
											    <div class="row">
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-blue  mr-4"></div>
															<div>
																<strong>Blue</strong><br>
																<code>.bg-blue</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-red  mr-4"></div>
															<div>
																<strong>Red</strong><br>
																<code>.bg-red</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-teal  mr-4"></div>
															<div>
																<strong>Teal</strong><br>
																<code>.bg-teal</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-azure   mr-4"></div>
															<div>
																<strong>Azure</strong><br>
																<code>.bg-azure </code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-orange  mr-4"></div>
															<div>
																<strong>Orange</strong><br>
																<code>.bg-orange</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-cyan  mr-4"></div>
															<div>
																<strong>Cyan</strong><br>
																<code>.bg-cyan</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-indigo  mr-4"></div>
															<div>
																<strong>Indigo</strong><br>
																<code>.bg-indigo</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-yellow  mr-4"></div>
															<div>
																<strong>Yellow</strong><br>
																<code>.bg-yellow</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3 bg-gray  mr-4"></div>
															<div>
																<strong>Gray</strong><br>
																<code>.bg-gray</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-purple   mr-4"></div>
															<div>
																<strong>Purple</strong><br>
																<code>.bg-purple </code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-lime  mr-4"></div>
															<div>
																<strong>Lime</strong><br>
																<code>.bg-lime</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3 bg-gray-dark  mr-4"></div>
															<div>
																<strong>Dark Gray</strong><br>
																<code>.bg-gray-dark</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-pink   mr-4"></div>
															<div>
																<strong>Pink</strong><br>
																<code>.bg-pink </code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-green  mr-4"></div>
															<div>
																<strong>Green</strong><br>
																<code>.bg-green</code>
															</div>
														</div>
													</div>
													<div class="col-md-6 col-lg-4 col-sm-6">
														<div class="d-flex align-items-center mb-3 mt-3">
															<div class="w-8 h-8 br-3  bg-secondary  mr-4"></div>
															<div>
																<strong>secondary</strong><br>
																<code>.bg-secondary</code>
															</div>
														</div>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="color3"><pre><code class="language-markup"><script type="html-demo/script"><div class="row">
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-blue  mr-4"></div>
			<div>
				<strong>Blue</strong><br>
				<code>.bg-blue</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-red  mr-4"></div>
			<div>
				<strong>Red</strong><br>
				<code>.bg-red</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-teal  mr-4"></div>
			<div>
				<strong>Teal</strong><br>
				<code>.bg-teal</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-azure   mr-4"></div>
			<div>
				<strong>Azure</strong><br>
				<code>.bg-azure </code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-orange  mr-4"></div>
			<div>
				<strong>Orange</strong><br>
				<code>.bg-orange</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-cyan  mr-4"></div>
			<div>
				<strong>Cyan</strong><br>
				<code>.bg-cyan</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-indigo  mr-4"></div>
			<div>
				<strong>Indigo</strong><br>
				<code>.bg-indigo</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-yellow  mr-4"></div>
			<div>
				<strong>Yellow</strong><br>
				<code>.bg-yellow</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3 bg-gray  mr-4"></div>
			<div>
				<strong>Gray</strong><br>
				<code>.bg-gray</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-purple   mr-4"></div>
			<div>
				<strong>Purple</strong><br>
				<code>.bg-purple </code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-lime  mr-4"></div>
			<div>
				<strong>Lime</strong><br>
				<code>.bg-lime</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3 bg-gray-dark  mr-4"></div>
			<div>
				<strong>Dark Gray</strong><br>
				<code>.bg-gray-dark</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-pink   mr-4"></div>
			<div>
				<strong>Pink</strong><br>
				<code>.bg-pink </code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-green  mr-4"></div>
			<div>
				<strong>Green</strong><br>
				<code>.bg-green</code>
			</div>
		</div>
	</div>
	<div class="col-md-6 col-lg-4 col-sm-6">
		<div class="d-flex align-items-center mb-3 mt-3">
			<div class="w-8 h-8 br-3  bg-secondary  mr-4"></div>
			<div>
				<strong>secondary</strong><br>
				<code>.bg-secondary</code>
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#color3"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
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