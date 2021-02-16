@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Email</h1>
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
							<div class="col-xl-12">
								<div class="card">
									<div class="email-app">
										<nav class="p-0">
											<div class="card-body">
												<a href="#" class="btn btn-primary btn-block mb-0">New Email</a>
											</div>
											<ul class="nav">
												<li class="nav-item">
													<a class="nav-link mr-0 border-top" href="#"><i class="fa fa-inbox"></i> Inbox <span class="badge badge-primary">4</span></a>
												</li>
												<li class="nav-item">
													<a class="nav-link mr-0" href="#"><i class="fa fa-star-o"></i> Stared</a>
												</li>
												<li class="nav-item">
													<a class="nav-link mr-0" href="#"><i class="fa fa-rocket"></i> Sent</a>
												</li>
												<li class="nav-item">
													<a class="nav-link mr-0" href="#"><i class="fa fa-trash-o"></i> Trash</a>
												</li>
												<li class="nav-item">
													<a class="nav-link mr-0" href="#"><i class="fa fa-bookmark-o"></i> Important</a>
												</li>
												<li class="nav-item">
													<a class="nav-link mr-0" href="#"><i class="fa fa-inbox"></i> Settings <span class="badge badge-danger">4</span></a>
												</li>
											</ul>
											<h4 class="pt-4 pl-5">Labels</h4>
											<ul class="label-inbox mb-3 border-bottom">
												<li> <a href="#"> <i class=" fa fa-stop text-primary"></i> Work </a> </li>
												<li> <a href="#"> <i class=" fa fa-stop text-secondary"></i> Design </a> </li>
												<li> <a href="#"> <i class=" fa fa-stop text-info "></i> Family </a></li>
												<li> <a href="#"> <i class=" fa fa-stop text-warning "></i> Friends </a></li>
												<li class="mb-3"> <a href="#"> <i class=" fa fa-stop text-success "></i> Office </a></li>
											</ul>
										</nav>
										<div class="inbox p-0">
											<div class="card-body">
												<div class="mailsearch">
													<input class="form-control" type="search" placeholder="Search" aria-label="Search">
													<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
												</div>
												<div class="toolbar d-none d-lg-block">
													<div class="btn-group mt-3 ">
														<button type="button" class="btn btn-light">
															<span class="fa fa-envelope"></span>
														</button>
														<button type="button" class="btn btn-light">
															<span class="fa fa-star"></span>
														</button>
														<button type="button" class="btn btn-light">
															<span class="fa fa-star-o"></span>
														</button>
														<button type="button" class="btn btn-light">
															<span class="fa fa-bookmark-o"></span>
														</button>
													</div>
													<div class="btn-group mt-3 ">
														<button type="button" class="btn btn-light">
															<span class="fa fa-mail-reply"></span>
														</button>
														<button type="button" class="btn btn-light">
															<span class="fa fa-mail-reply-all"></span>
														</button>
														<button type="button" class="btn btn-light">
															<span class="fa fa-mail-forward"></span>
														</button>
													</div>
													<button type="button" class="mt-3 btn btn-light">
														<span class="fa fa-trash-o"></span>
													</button>
													<div class="btn-group mt-3">
														<button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown">
															<span class="fa fa-tags"></span>
															<span class="caret"></span>
														</button>
														<div class="dropdown-menu">
															<a class="dropdown-item" href="#">add label <span class="badge badge-danger"> Home</span></a>
															<a class="dropdown-item" href="#">add label <span class="badge badge-info"> Job</span></a>
															<a class="dropdown-item" href="#">add label <span class="badge badge-success"> Clients</span></a>
															<a class="dropdown-item" href="#">add label <span class="badge badge-warning"> News</span></a>
														</div>
													</div>
													<div class="btn-group float-right mt-3">
														<button type="button" class="btn btn-sm btn-light">
															<span class="fa fa-chevron-left"></span>
														</button>
														<button type="button" class="btn btn-sm btn-light">
															<span class="fa fa-chevron-right"></span>
														</button>
													</div>
												</div>
											</div>
											 <ul class="mail_list list-group list-unstyled">
												<li class="list-group-item">
													<div class="media">
														<div class="pull-left">
															<div class="controls">
																<div class="custom-checkbox custom-control">
																	<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
																	<label for="checkbox-1" class="custom-control-label"></label>
																</div>
																<a href="javascript:void(0);" class="favourite text-muted hidden-sm-down" data-toggle="active"><i class="fa fa-star mt-2"></i></a>
															</div>
														</div>
														<div class="media-body">
															<div class="media-heading">
																<a href="#" class="mr-2">Velit a labore</a>
																<small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017">12:35 AM</time><i class="fa fa-paperclip ml-2"></i> </small>
															</div>
															<p class="msg">Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry. </p>
														</div>
													</div>
												</li>
												<li class="list-group-item unread">
													<div class="media">
														<div class="pull-left">
															<div class="controls">
																<div class="custom-checkbox custom-control">
																	<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
																	<label for="checkbox-2" class="custom-control-label"></label>
																</div>
																<a href="javascript:void(0);" class="favourite col-amber hidden-sm-down" data-toggle="active"><i class="zmdi zmdi-star mt-2"></i></a>
															</div>
														</div>
														<div class="media-body">
															<div class="media-heading">
																<a href="#" class="mr-2">Simply dummy text</a>
																<small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017">12:35 AM</time><i class="fa fa-paperclip ml-2"></i> </small>
															</div>
															<p class="msg">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
														</div>
													</div>
												</li>
												<li class="list-group-item">
													<div class="media">
														<div class="pull-left">
															<div class="controls">
																<div class="custom-checkbox custom-control">
																	<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
																	<label for="checkbox-3" class="custom-control-label"></label>
																</div>
																<a href="javascript:void(0);" class="favourite text-muted hidden-sm-down" data-toggle="active"><i class="fa fa-star mt-2"></i></a>
															</div>
														</div>
														<div class="media-body">
															<div class="media-heading">
																<a href="#" class="mr-2">Velit a labore</a>
																<span class="badge bg-danger text-white">Google</span>
																<small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017">12:35 AM</time><i class="fa fa-paperclip ml-2"></i> </small>
															</div>
															<p class="msg"> If you are going to use a passage of Lorem Ipsum, you need to be sure</p>
														</div>
													</div>
												</li>
												<li class="list-group-item unread">
													<div class="media">
														<div class="pull-left">
															<div class="controls">
																<div class="custom-checkbox custom-control">
																	<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
																	<label for="checkbox-4" class="custom-control-label"></label>
																</div>
																<a href="javascript:void(0);" class="favourite text-muted hidden-sm-down" data-toggle="active"><i class="fa fa-star mt-2"></i></a>
															</div>
														</div>
														<div class="media-body">
															<div class="media-heading">
																<a href="#" class="mr-2">Variations of passages</a>
																<span class="badge bg-primary text-white">Themeforest</span>
																<small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017">12:35 AM</time><i class="fa fa-paperclip ml-2"></i> </small>
															</div>
															<p class="msg">There are many variations of passages of Lorem Ipsum available, but the majority </p>
														</div>
													</div>
												</li>
												<li class="list-group-item">
													<div class="media">
														<div class="pull-left">
															<div class="controls">
																<div class="custom-checkbox custom-control">
																	<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-5">
																	<label for="checkbox-5" class="custom-control-label"></label>
																</div>
																<a href="javascript:void(0);" class="favourite text-muted hidden-sm-down" data-toggle="active"><i class="fa fa-star mt-2"></i></a>
															</div>
														</div>
														<div class="media-body">
															<div class="media-heading">
																<a href="#" class="mr-2">Generators on the Internet</a>
																<span class="badge bg-danger text-white">Work</span>
																<small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017">12:35 AM</time><i class="fa fa-paperclip ml-2"></i> </small>
															</div>
															<p class="msg">LAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
														</div>
													</div>
												</li>
												<li class="list-group-item">
													<div class="media">
														<div class="pull-left">
															<div class="controls">
																<div class="custom-checkbox custom-control">
																	<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6">
																	<label for="checkbox-6" class="custom-control-label"></label>
																</div>
																<a href="javascript:void(0);" class="favourite col-amber hidden-sm-down" data-toggle="active"><i class="fa fa-star mt-2"></i></a>
															</div>
														</div>
														<div class="media-body">
															<div class="media-heading">
																<a href="#" class="mr-2">Contrary to popular</a>
																<span class="badge bg-info text-white">Themeforest</span>
																<small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017">12:35 AM</time><i class="fa fa-paperclip ml-2"></i> </small>
															</div>
															<p class="msg">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical</p>
														</div>
													</div>
												</li>
												<li class="list-group-item">
													<div class="media">
														<div class="pull-left">
															<div class="controls">
																<div class="custom-checkbox custom-control">
																	<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-7">
																	<label for="checkbox-7" class="custom-control-label"></label>
																</div>
																<a href="javascript:void(0);" class="favourite col-amber hidden-sm-down" data-toggle="active"><i class="fa fa-star mt-2"></i></a>
															</div>
														</div>
														<div class="media-body">
															<div class="media-heading">
																<a href="#" class="mr-2">Velit a labore</a>
																<span class="badge bg-success text-white">Work</span>
																<small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017">12:35 AM</time><i class="fa fa-paperclip ml-2"></i> </small>
															</div>
															<p class="msg">Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry. </p>
														</div>
													</div>
												</li>
												<li class="list-group-item">
													<div class="media">
														<div class="pull-left">
															<div class="controls">
																<div class="custom-checkbox custom-control">
																	<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-8">
																	<label for="checkbox-8" class="custom-control-label"></label>
																</div>
																<a href="javascript:void(0);" class="favourite col-amber hidden-sm-down" data-toggle="active"><i class="fa fa-star mt-2"></i></a>
															</div>
														</div>
														<div class="media-body">
															<div class="media-heading">
																<a href="#" class="mr-2">Variations of passages</a>
																<span class="badge bg-purple text-white">Themeforest</span>
																<small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017">12:35 AM</time><i class="fa fa-paperclip ml-2"></i> </small>
															</div>
															<p class="msg">There are many variations of passages of Lorem Ipsum available, but the majority </p>
														</div>
													</div>
												</li>
												<li class="list-group-item">
													<div class="media">
														<div class="pull-left">
															<div class="controls">
																<div class="custom-checkbox custom-control">
																	<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-9">
																	<label for="checkbox-9" class="custom-control-label"></label>
																</div>
																<a href="javascript:void(0);" class="favourite text-muted hidden-sm-down" data-toggle="active"><i class="fa fa-star mt-2"></i></a>
															</div>
														</div>
														<div class="media-body">
															<div class="media-heading">
																<a href="#" class="mr-2">Generators on the Internet</a>
																<span class="badge bg-pink text-white">Work</span>
																<small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017">12:35 AM</time><i class="fa fa-paperclip ml-2"></i> </small>
															</div>
															<p class="msg">LAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>
														</div>
													</div>
												</li>
												<li class="list-group-item">
													<div class="media">
														<div class="pull-left">
															<div class="controls">
																<div class="custom-checkbox custom-control">
																	<input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-10">
																	<label for="checkbox-10" class="custom-control-label"></label>
																</div>
																<a href="javascript:void(0);" class="favourite text-muted hidden-sm-down" data-toggle="active"><i class="fa fa-star mt-2"></i></a>
															</div>
														</div>
														<div class="media-body">
															<div class="media-heading">
																<a href="#" class="mr-2">Velit a labore</a>
																<span class="badge bg-info text-white">Family</span>
																<small class="float-right text-muted"><time class="hidden-sm-down" datetime="2017">12:35 AM</time><i class="fa fa-paperclip ml-2"></i> </small>
															</div>
															<p class="msg">Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry. </p>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
@endsection