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
							<h1 class="page-title">Alerts</h1>
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
											<h3 class="card-title">Default alerts</h3>
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
												<div class="alert alert-success" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													Success alert—At vero eos et accusamus praesentium!
												</div>
												<div class="alert alert-info" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													Info alert—At vero eos et accusamus praesentium!
												</div>
												<div class="alert alert-warning" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													Warning alert—At vero eos et accusamus praesentium!
												</div>
												<div class="alert alert-danger" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													Danger alert—At vero eos et accusamus praesentium!
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="alert1"><pre><code class="language-markup"><script type="html-demo/script"><div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	Success alert—At vero eos et accusamus praesentium!
</div>
<div class="alert alert-info" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	Info alert—At vero eos et accusamus praesentium!
</div>
<div class="alert alert-warning" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	Warning alert—At vero eos et accusamus praesentium!
</div>
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	Danger alert—At vero eos et accusamus praesentium!
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#alert1"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Alerts With Icons</h3>
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
												<div class="alert alert-default" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-download"></i></span>
													<span class="alert-inner--text"><strong>Default!</strong> This is a warning alert—check it out that has an icon too!</span>
												</div>
												<div class="alert alert-primary" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
													<span class="alert-inner--text"><strong>Primary!</strong> This is a warning alert—check it out that has an icon too!</span>
												</div>
												<div class="alert alert-success" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
													<span class="alert-inner--text"><strong>Success!</strong> This is a warning alert—check it out that has an icon too!</span>
												</div>
												<div class="alert alert-info" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-bell"></i></span>
													<span class="alert-inner--text"><strong>Info!</strong> This is a warning alert—check it out that has an icon too!</span>
												</div>
												<div class="alert alert-warning" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-info"></i></span>
													<span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out that has an icon too!</span>
												</div>
												<div class="alert alert-danger mb-0" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
													<span class="alert-inner--text"><strong>Danger!</strong> This is a warning alert—check it out that has an icon too!</span>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="alert2"><pre><code class="language-markup"><script type="html-demo/script"><div class="alert alert-default" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-download"></i></span>
	<span class="alert-inner--text"><strong>Default!</strong> This is a warning alert—check it out that has an icon too!</span>
</div>
<div class="alert alert-primary" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
	<span class="alert-inner--text"><strong>Primary!</strong> This is a warning alert—check it out that has an icon too!</span>
</div>
<div class="alert alert-success" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
	<span class="alert-inner--text"><strong>Success!</strong> This is a warning alert—check it out that has an icon too!</span>
</div>
<div class="alert alert-info" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-bell"></i></span>
	<span class="alert-inner--text"><strong>Info!</strong> This is a warning alert—check it out that has an icon too!</span>
</div>
<div class="alert alert-warning" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-info"></i></span>
	<span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out that has an icon too!</span>
</div>
<div class="alert alert-danger mb-0" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
	<span class="alert-inner--text"><strong>Danger!</strong> This is a warning alert—check it out that has an icon too!</span>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#alert2"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Alerts With Icons Dismissing</h3>
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
												<div class="alert alert-default alert-dismissible fade show" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-download"></i></span>
													<span class="alert-inner--text"><strong>Default!</strong> This is a default alert—check it out!</span>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-primary alert-dismissible fade show" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
													<span class="alert-inner--text"><strong>Primary!</strong> This is a primary alert—check it out!</span>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-success alert-dismissible fade show" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
													<span class="alert-inner--text"><strong>Success!</strong> This is a success alert—check it out!</span>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-warning alert-dismissible fade show" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-info"></i></span>
													<span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out!</span>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-info alert-dismissible fade show" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-bell"></i></span>
													<span class="alert-inner--text"><strong>Info!</strong> This is a info alert—check it out!</span>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
												<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
													<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
													<span class="alert-inner--text"><strong>Danger!</strong> This is a danger alert—check it out!</span>
													<button type="button" class="close" data-dismiss="alert" aria-label="Close">
														<span aria-hidden="true">×</span>
													</button>
												</div>
											</div>
											<!-- Prism Precode -->
<figure class="highlight clip-widget" id="alert3"><pre><code class="language-markup"><script type="html-demo/script"><div class="alert alert-default alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-download"></i></span>
	<span class="alert-inner--text"><strong>Default!</strong> This is a default alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div>
<div class="alert alert-primary alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-check-square"></i></span>
	<span class="alert-inner--text"><strong>Primary!</strong> This is a primary alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div>
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-thumbs-up"></i></span>
	<span class="alert-inner--text"><strong>Success!</strong> This is a success alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-info"></i></span>
	<span class="alert-inner--text"><strong>Warning!</strong> This is a warning alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div>
<div class="alert alert-info alert-dismissible fade show" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-bell"></i></span>
	<span class="alert-inner--text"><strong>Info!</strong> This is a info alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div>
<div class="alert alert-danger alert-dismissible fade show mb-0" role="alert">
	<span class="alert-inner--icon"><i class="fe fe-slash"></i></span>
	<span class="alert-inner--text"><strong>Danger!</strong> This is a danger alert—check it out!</span>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">×</span>
	</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#alert3"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Links in alerts</h3>
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
												<div class="alert alert-success" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message.</a>
												</div>
												<div class="alert alert-info" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Heads up!</strong> This<a href="#" class="alert-link"> alert needs your attention,</a> but it's not super important.
												</div>
												<div class="alert alert-warning" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Warning! </strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good.</a>
												</div>
												<div class="alert alert-danger" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up </a>and try submitting again.
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="alert4"><pre><code class="language-markup"><script type="html-demo/script"><div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<strong>Well done!</strong> You successfully read <a href="#" class="alert-link">this important alert message.</a>
</div>
<div class="alert alert-info" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<strong>Heads up!</strong> This<a href="#" class="alert-link"> alert needs your attention,</a> but it's not super important.
</div>
<div class="alert alert-warning" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<strong>Warning! </strong> Better check yourself, you're <a href="#" class="alert-link">not looking too good.</a>
</div>
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<strong>Oh snap!</strong> <a href="#" class="alert-link">Change a few things up </a>and try submitting again.
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#alert4"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
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
											<h3 class="card-title">Tabs Alerts</h3>
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
											<ul class="nav nav-pills nav-with-alerts row">
												<li class="col-lg-3">
													<a href="#info" data-toggle="tab">
														<div class="alert alert-info">
															Informations
														</div>
													</a>
												</li>
												<li class="col-lg-3">
													<a href="#success" data-toggle="tab">
														<div class="alert alert-success">
															Success
														</div>
													</a>
												</li>
												<li class="col-lg-3">
													<a href="#warning" data-toggle="tab">
														<div class="alert alert-warning">
															Warnings
														</div>
													</a>
												</li>
												<li class="col-lg-3">
													<a href="#error" data-toggle="tab">
														<div class="alert alert-danger">
															Errors
														</div>
													</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade active show pb-0" id="info">
													<div class="alert alert-info m-0">
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula nec arcu at faucibus. Duis justo urna, adipiscing quis turpis non, dictum hendrerit ipsum. Fusce non viverra erat. Curabitur sit amet ante dui. Donec congue molestie mi a varius. Suspendisse potenti. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam ornare quam eu ultricies bibendum. Cras ante augue, pharetra eget ultricies eu, aliquam eu velit. Phasellus mattis vitae justo pretium tempus. Duis vitae felis et sem tristique suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
													</div>
												</div>
												<div class="tab-pane fade pb-0" id="success">
													<div class="alert alert-success mb-0">
														<p>Nulla magna sapien, ullamcorper nec dolor id, gravida venenatis velit. Aliquam et malesuada metus. Sed vitae turpis pharetra nunc dignissim ultricies et sit amet lacus. Cras gravida felis mauris, a pellentesque augue interdum ac. In varius facilisis ante, nec viverra libero commodo ac. Maecenas tempus, elit nec aliquet fermentum, tellus odio auctor sapien, eu scelerisque purus turpis quis eros. Morbi id ante diam. Phasellus aliquet purus id odio mollis dignissim. Proin sagittis, risus a ullamcorper dapibus, velit enim adipiscing nulla, vel facilisis ipsum dui quis diam. Aliquam ullamcorper accumsan felis id consequat. Nullam vehicula ut mi eget porta.</p>
													</div>
												</div>
												<div class="tab-pane fade pb-0" id="warning">
													<div class="alert alert-warning mb-0">
														<p>Curabitur varius euismod nisi ac lacinia. Curabitur nec urna adipiscing, fermentum augue id, commodo nisl. Quisque ut convallis est. Suspendisse tellus nisi, tempus eu nulla quis, laoreet imperdiet ante. Vivamus in lorem purus. Integer luctus elit et metus condimentum porta. Suspendisse viverra sit amet mauris vel elementum. Fusce lorem arcu, accumsan non odio vel, vestibulum pharetra odio. Sed non mollis mi, ac lacinia nunc. Cras eleifend massa velit, tincidunt tempor arcu sodales at. Nam sit amet erat enim. Mauris placerat suscipit odio, vitae gravida purus bibendum sed. Suspendisse a nunc quis libero rutrum mattis at ac metus. In ac risus eleifend, vestibulum mi eget, dapibus nulla. Nunc diam eros, convallis a sagittis non, rhoncus non nunc. Maecenas in eleifend quam.</p>
													</div>
												</div>
												<div class="tab-pane fade pb-0" id="error">
													<div class="alert alert-danger mb-0">
														<p>Sed quis dapibus nunc. Proin vestibulum libero elit, gravida tincidunt mauris tincidunt blandit. Donec non ultrices neque, nec sollicitudin elit. Curabitur volutpat nulla vel mauris vestibulum, tempor ultrices quam ullamcorper. Fusce ultricies elementum pretium. In vel consectetur leo, nec rutrum velit. Fusce fermentum pulvinar nibh. Ut posuere ante sed luctus egestas. Aenean ut suscipit tortor.</p>
													</div>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="alert5"><pre><code class="language-markup"><script type="html-demo/script"><ul class="nav nav-pills nav-with-alerts row">
<li class="col-lg-3">
	<a href="#info" data-toggle="tab">
		<div class="alert alert-info">
			Informations
		</div>
	</a>
</li>
<li class="col-lg-3">
	<a href="#success" data-toggle="tab">
		<div class="alert alert-success">
			Success
		</div>
	</a>
</li>
<li class="col-lg-3">
	<a href="#warning" data-toggle="tab">
		<div class="alert alert-warning">
			Warnings
		</div>
	</a>
</li>
<li class="col-lg-3">
	<a href="#error" data-toggle="tab">
		<div class="alert alert-danger">
			Errors
		</div>
	</a>
</li>
</ul>
<div class="tab-content">
<div class="tab-pane fade active show pb-0" id="info">
	<div class="alert alert-info m-0">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula nec arcu at faucibus. Duis justo urna, adipiscing quis turpis non, dictum hendrerit ipsum. Fusce non viverra erat. Curabitur sit amet ante dui. Donec congue molestie mi a varius. Suspendisse potenti. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam ornare quam eu ultricies bibendum. Cras ante augue, pharetra eget ultricies eu, aliquam eu velit. Phasellus mattis vitae justo pretium tempus. Duis vitae felis et sem tristique suscipit. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
	</div>
</div>
<div class="tab-pane fade pb-0" id="success">
	<div class="alert alert-success mb-0">
		<p>Nulla magna sapien, ullamcorper nec dolor id, gravida venenatis velit. Aliquam et malesuada metus. Sed vitae turpis pharetra nunc dignissim ultricies et sit amet lacus. Cras gravida felis mauris, a pellentesque augue interdum ac. In varius facilisis ante, nec viverra libero commodo ac. Maecenas tempus, elit nec aliquet fermentum, tellus odio auctor sapien, eu scelerisque purus turpis quis eros. Morbi id ante diam. Phasellus aliquet purus id odio mollis dignissim. Proin sagittis, risus a ullamcorper dapibus, velit enim adipiscing nulla, vel facilisis ipsum dui quis diam. Aliquam ullamcorper accumsan felis id consequat. Nullam vehicula ut mi eget porta.</p>
	</div>
</div>
<div class="tab-pane fade pb-0" id="warning">
	<div class="alert alert-warning mb-0">
		<p>Curabitur varius euismod nisi ac lacinia. Curabitur nec urna adipiscing, fermentum augue id, commodo nisl. Quisque ut convallis est. Suspendisse tellus nisi, tempus eu nulla quis, laoreet imperdiet ante. Vivamus in lorem purus. Integer luctus elit et metus condimentum porta. Suspendisse viverra sit amet mauris vel elementum. Fusce lorem arcu, accumsan non odio vel, vestibulum pharetra odio. Sed non mollis mi, ac lacinia nunc. Cras eleifend massa velit, tincidunt tempor arcu sodales at. Nam sit amet erat enim. Mauris placerat suscipit odio, vitae gravida purus bibendum sed. Suspendisse a nunc quis libero rutrum mattis at ac metus. In ac risus eleifend, vestibulum mi eget, dapibus nulla. Nunc diam eros, convallis a sagittis non, rhoncus non nunc. Maecenas in eleifend quam.</p>
	</div>
</div>
<div class="tab-pane fade pb-0" id="error">
	<div class="alert alert-danger mb-0">
		<p>Sed quis dapibus nunc. Proin vestibulum libero elit, gravida tincidunt mauris tincidunt blandit. Donec non ultrices neque, nec sollicitudin elit. Curabitur volutpat nulla vel mauris vestibulum, tempor ultrices quam ullamcorper. Fusce ultricies elementum pretium. In vel consectetur leo, nec rutrum velit. Fusce fermentum pulvinar nibh. Ut posuere ante sed luctus egestas. Aenean ut suscipit tortor.</p>
	</div>
</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#alert5"><i class="ti-clipboard"></i></div>
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
											<h3 class="card-title">Alerts Style</h3>
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
												<div class="col-sm-6 col-md-6">
													<div class="alert alert-success">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														 <strong>Success Message</strong>
														<hr class="message-inner-separator">
														<p>You successfully read this important alert message.</p>
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="alert alert-info">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														<strong>Info Message</strong>
														<hr class="message-inner-separator">
														<p>This alert needs your attention, but it's not super important.</p>
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="alert alert-warning">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														<strong>Warning Message</strong>
														<hr class="message-inner-separator">
														<p>Best check yo self, you're not looking too good.</p>
													</div>
												</div>
												<div class="col-sm-6 col-md-6">
													<div class="alert alert-danger">
														<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
														<strong>Danger Message</strong>
														<hr class="message-inner-separator">
														<p>Change a few things up and try submitting again.</p>
													</div>
												</div>
											</div>
										</div>
										<!-- Prism Precode -->
<figure class="highlight clip-widget" id="alert6"><pre><code class="language-markup"><script type="html-demo/script"><div class="row">
<div class="col-sm-6 col-md-6">
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		 <strong>Success Message</strong>
		<hr class="message-inner-separator">
		<p>You successfully read this important alert message.</p>
	</div>
</div>
<div class="col-sm-6 col-md-6">
	<div class="alert alert-info">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<strong>Info Message</strong>
		<hr class="message-inner-separator">
		<p>This alert needs your attention, but it's not super important.</p>
	</div>
</div>
<div class="col-sm-6 col-md-6">
	<div class="alert alert-warning">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<strong>Warning Message</strong>
		<hr class="message-inner-separator">
		<p>Best check yo self, you're not looking too good.</p>
	</div>
</div>
<div class="col-sm-6 col-md-6">
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<strong>Danger Message</strong>
		<hr class="message-inner-separator">
		<p>Change a few things up and try submitting again.</p>
	</div>
</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#alert6"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Alert With Icon</h3>
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
												<div class="alert alert-success" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.
												</div>
												<div class="alert alert-info" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<i class="fa fa-bell-o mr-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.
												</div>
												<div class="alert alert-warning" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<i class="fa fa-exclamation mr-2" aria-hidden="true"></i> Warning! Better check yourself, you're not looking too good.
												</div>
												<div class="alert alert-danger" role="alert">
													<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
													<i class="fa fa-frown-o mr-2" aria-hidden="true"></i>Oh snap!Change a few things up and try submitting again.
												</div>
											</div>
											<!-- Prism Precode -->
<figure class="highlight clip-widget" id="alert7"><pre><code class="language-markup"><script type="html-demo/script"><div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<i class="fa fa-check-circle-o mr-2" aria-hidden="true"></i> Well done! You successfully read this important alert message.
</div>
<div class="alert alert-info" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<i class="fa fa-bell-o mr-2" aria-hidden="true"></i>Heads up! This alert needs your attention, but it's not super important.
</div>
<div class="alert alert-warning" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<i class="fa fa-exclamation mr-2" aria-hidden="true"></i> Warning! Better check yourself, you're not looking too good.
</div>
<div class="alert alert-danger" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<i class="fa fa-frown-o mr-2" aria-hidden="true"></i>Oh snap!Change a few things up and try submitting again.
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#alert7"><i class="ti-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

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