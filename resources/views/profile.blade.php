@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Profile</h1>
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
								<div class="card card-profile  overflow-hidden">
									<div class="card-body text-center profile-bg">
										<div class=" card-profile">
											<div class="row justify-content-center">
												<div class="">
													<div class="">
														<a href="#">
															<img src="{{URL::asset('assets/images/users/female/2.jpg')}}" class="avatar-xxl rounded-circle" alt="profile">
														</a>
													</div>
												</div>
											</div>
										</div>
										<h3 class="mt-3 text-white mb-0">Vanessa Dyer</h3>
										<p class="mb-2 text-white">Web Developer</p>
										<div class="text-center mb-4">
											<span><i class="fa fa-star text-warning"></i></span>
											<span><i class="fa fa-star text-warning"></i></span>
											<span><i class="fa fa-star text-warning"></i></span>
											<span><i class="fa fa-star-half-o text-warning"></i></span>
											<span><i class="fa fa-star-o text-warning"></i></span>
										</div>
										<button class="btn btn-orange btn-sm">
											<span class="fa fa-twitter"></span> Follow
										</button>
										<a href="#" class="btn btn-info btn-sm"><i class="fa fa-pencil-alt" aria-hidden="true"></i> Edit profile</a>
									</div>
									<div class="card-body">
										<div class="nav-wrapper p-0">
											<ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
												<li class="nav-item">
													<a class="nav-link mb-sm-3 mb-md-0 mt-md-2 mt-0 mt-lg-0 active show" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fa fa-home mr-2"></i>About</a>
												</li>
												<li class="nav-item">
													<a class="nav-link mb-sm-3 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fa fa-user mr-2"></i>Friends</a>
												</li>
												<li class="nav-item">
													<a class="nav-link mb-sm-3 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fa fa-picture-o mr-2"></i>Photos</a>
												</li>
												<li class="nav-item">
													<a class="nav-link mb-sm-3 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-4" aria-selected="false"><i class="fa fa-newspaper-o mr-2 mt-1"></i>Timeline</a>
												</li>
												<li class="nav-item">
													<a class="nav-link mb-sm-0 mb-md-0 mt-md-2 mt-0 mt-lg-0" id="tabs-icons-text-5-tab" data-toggle="tab" href="#tabs-icons-text-5" role="tab" aria-controls="tabs-icons-text-5" aria-selected="false"><i class="fa fa-cog mr-2"></i>More</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-body pb-0">
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade active show" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
												<div class="table-responsive mb-3">
													<table class="table row table-borderless w-100 m-0">
														<tbody class="col-lg-6 p-0">
															<tr>
																<td><strong>Full Name :</strong> Vanessa Dyer</td>
															</tr>
															<tr>
																<td><strong>Location :</strong> Uk</td>
															</tr>
															<tr>
																<td><strong>Languages :</strong> English, German, Spanish.</td>
															</tr>
															<tr>
																<td><strong>DOB :</strong> 21/05/1991</td>
															</tr>
														</tbody>
														<tbody class="col-lg-6 p-0">
															<tr>
																<td><strong>Occupation :</strong> Web Developer</td>
															</tr>
															<tr>
																<td><strong>Website :</strong> abaic.com</td>
															</tr>
															<tr>
																<td><strong>Email :</strong> amnhjygrkj@abaic.com</td>
															</tr>
															<tr>
																<td><strong>Phone :</strong> +222-6652-6325</td>
															</tr>
														</tbody>
													</table>
												</div>
												<h4><strong>About Me</strong></h4>
												<p class="description">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
												<div class="media-heading mt-3">
													<h4><strong>Biography</strong></h4>
												</div>
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus</p>
												<p class="mb-4">because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
											</div>
											<div aria-labelledby="tabs-icons-text-2-tab" class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel">
												<div class="row">
													<div class="col-md-12">
														<div class="content content-full-width" id="content">
															<!-- begin profile-content -->
															<div class="profile-content">
																<!-- begin tab-content -->
																<div class="tab-content p-0">
																	<!-- begin #profile-friends tab -->
																	<div class="tab-pane fade in active show" id="profile-friends">
																		<h4 class="mt-0 mb-4">Friend List (14)</h4><!-- begin row -->
																		<div class="row row-space-2">
																			<!-- end col-6 -->
																			<div class="col-xl-6">
																				<div class="mb-2 border shadow">
																					<div class="media overflow-visible">
																						<a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/female/2.jpg')}}"></a>
																						<div class="media-body valign-middle">
																							<b class="text-inverse">Latoya Laver</b>
																						</div>
																						<div class="media-body valign-middle text-right overflow-visible">
																							<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																								Friends
																							</button>
																							<ul class="dropdown-menu dropdown-menu-right" role="menu">
																								<li><a href="#">View profile</a></li>
																								<li><a href="#">Follow</a></li>
																								<li><a href="#">Message</a></li>
																								<li><a href="#">Suggestion</a></li>
																								<li><a href="#">Un friend</a></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- end col-6 -->
																			<div class="col-xl-6">
																				<div class="mb-2 border shadow">
																					<div class="media  media-xs overflow-visible">
																						<a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/female/4.jpg')}}"></a>
																						<div class="media-body valign-middle">
																							<b class="text-inverse">Polly Amon</b>
																						</div>
																						<div class="media-body valign-middle text-right overflow-visible">
																							<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																								Friends
																							</button>
																							<ul class="dropdown-menu dropdown-menu-right" role="menu">
																								<li><a href="#">View profile</a></li>
																								<li><a href="#">Follow</a></li>
																								<li><a href="#">Message</a></li>
																								<li><a href="#">Suggestion</a></li>
																								<li><a href="#">Un friend</a></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- end col-6 -->
																			<div class="col-xl-6">
																				<div class="mb-2 border shadow">
																					<div class="media  media-xs overflow-visible">
																						<a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/male/2.jpg')}}"></a>
																						<div class="media-body valign-middle ">
																							<b class="text-inverse">Paul Molive</b>
																						</div>
																						<div class="media-body valign-middle text-right overflow-visible">
																							<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																								Friends
																							</button>
																							<ul class="dropdown-menu dropdown-menu-right" role="menu">
																								<li><a href="#">View profile</a></li>
																								<li><a href="#">Follow</a></li>
																								<li><a href="#">Message</a></li>
																								<li><a href="#">Suggestion</a></li>
																								<li><a href="#">Un friend</a></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- end col-6 -->
																			<div class="col-xl-6">
																				<div class="mb-2 border shadow">
																					<div class="media  media-xs overflow-visible">
																						<a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/female/1.jpg')}}"></a>
																						<div class="media-body valign-middle ">
																							<b class="text-inverse">Corinna Eifert</b>
																						</div>
																						<div class="media-body valign-middle text-right overflow-visible">
																							<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																								Friends
																							</button>
																							<ul class="dropdown-menu dropdown-menu-right" role="menu">
																								<li><a href="#">View profile</a></li>
																								<li><a href="#">Follow</a></li>
																								<li><a href="#">Message</a></li>
																								<li><a href="#">Suggestion</a></li>
																								<li><a href="#">Un friend</a></li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- end col-6 -->
																			<div class="col-xl-6">
																				<div class="mb-2 border shadow">
																					<div class="media  media-xs overflow-visible">
																						<a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/female/3.jpg')}}"></a>
																						<div class="media-body valign-middle ">
																							<b class="text-inverse">Kenna Pride</b>
																						</div>
																						<div class="media-body valign-middle text-right overflow-visible">
																							<div class="btn-group">
																								<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																								Friends
																								</button>
																								<ul class="dropdown-menu dropdown-menu-right" role="menu">
																									<li><a href="#">View profile</a></li>
																									<li><a href="#">Follow</a></li>
																									<li><a href="#">Message</a></li>
																									<li><a href="#">Suggestion</a></li>
																									<li><a href="#">Un friend</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- end col-6 -->
																			<div class="col-xl-6">
																				<div class="mb-2 border shadow">
																					<div class="media  media-xs overflow-visible">
																						<a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/male/3.jpg')}}"></a>
																						<div class="media-body valign-middle">
																							<b class="text-inverse">Mark Sunseri</b>
																						</div>
																						<div class="media-body valign-middle text-right overflow-visible">
																							<div class="btn-group">
																								<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																								Friends
																								</button>
																								<ul class="dropdown-menu dropdown-menu-right" role="menu">
																									<li><a href="#">View profile</a></li>
																									<li><a href="#">Follow</a></li>
																									<li><a href="#">Message</a></li>
																									<li><a href="#">Suggestion</a></li>
																									<li><a href="#">Un friend</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- end col-6 -->
																			<div class="col-xl-6">
																				<div class="mb-2 border shadow">
																					<div class="media  media-xs overflow-visible">
																						<a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/female/5.jpg')}}"></a>
																						<div class="media-body valign-middle">
																							<b class="text-inverse">Kenna Pride</b>
																						</div>
																						<div class="media-body valign-middle text-right overflow-visible">
																							<div class="btn-group">
																								<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																								Friends
																								</button>
																								<ul class="dropdown-menu dropdown-menu-right" role="menu">
																									<li><a href="#">View profile</a></li>
																									<li><a href="#">Follow</a></li>
																									<li><a href="#">Message</a></li>
																									<li><a href="#">Suggestion</a></li>
																									<li><a href="#">Un friend</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- end col-6 -->
																			<div class="col-xl-6">
																				<div class="mb-2 border shadow">
																					<div class="media  media-xs overflow-visible">
																						<a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/female/6.jpg')}}"></a>
																						<div class="media-body valign-middle">
																							<b class="text-inverse">Anna Sthesia</b>
																						</div>
																						<div class="media-body valign-middle text-right overflow-visible">
																							<div class="btn-group">
																								<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																								Friends
																								</button>
																								<ul class="dropdown-menu dropdown-menu-right" role="menu">
																									<li><a href="#">View profile</a></li>
																									<li><a href="#">Follow</a></li>
																									<li><a href="#">Message</a></li>
																									<li><a href="#">Suggestion</a></li>
																									<li><a href="#">Un friend</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- end col-6 -->
																			<div class="col-xl-6">
																				<div class="mb-2 border shadow">
																					<div class="media media-xs overflow-visible">
																						<a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/male/5.jpg')}}"></a>
																						<div class="media-body valign-middle">
																							<b class="text-inverse">Trenton Tookes</b>
																						</div>
																						<div class="media-body valign-middle text-right overflow-visible">
																							<div class="btn-group">
																								<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																								Friends
																								</button>
																								<ul class="dropdown-menu dropdown-menu-right" role="menu">
																									<li><a href="#">View profile</a></li>
																									<li><a href="#">Follow</a></li>
																									<li><a href="#">Message</a></li>
																									<li><a href="#">Suggestion</a></li>
																									<li><a href="#">Un friend</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- end col-6 -->
																			<div class="col-xl-6">
																				<div class=" mb-2 border shadow">
																					<div class="media  media-xs overflow-visible">
																						<a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/male/6.jpg')}}"></a>
																						<div class="media-body valign-middle">
																							<b class="text-inverse">Elias Arboleda</b>
																						</div>
																						<div class="media-body valign-middle text-right overflow-visible">
																							<div class="btn-group">
																								<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																									Friends
																								</button>
																								<ul class="dropdown-menu dropdown-menu-right" role="menu">
																									<li><a href="#">View profile</a></li>
																									<li><a href="#">Follow</a></li>
																									<li><a href="#">Message</a></li>
																									<li><a href="#">Suggestion</a></li>
																									<li><a href="#">Un friend</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- end col-6 -->
																			<div class="col-xl-6">
																				<div class="mb-2 border shadow">
																					<div class="media  media-xs overflow-visible">
																						<a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/female/7.jpg')}}"></a>
																						<div class="media-body valign-middle">
																							<b class="text-inverse">Sarah Yevo</b>
																						</div>
																						<div class="media-body valign-middle text-right overflow-visible">
																							<div class="btn-group">
																								<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																									Friends
																								</button>
																								<ul class="dropdown-menu dropdown-menu-right" role="menu">
																									<li><a href="#">View profile</a></li>
																									<li><a href="#">Follow</a></li>
																									<li><a href="#">Message</a></li>
																									<li><a href="#">Suggestion</a></li>
																									<li><a href="#">Un friend</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- end col-6 -->
																			<div class="col-xl-6">
																				<div class="mb-2 border shadow">
																					<div class="media  media-xs overflow-visible">
																						<a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/male/7.jpg')}}"></a>
																						<div class="media-body valign-middle">
																							<b class="text-inverse">Sergio Silverio</b>
																						</div>
																						<div class="media-body valign-middle text-right overflow-visible">
																							<div class="btn-group">
																								<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																									Friends
																								</button>
																								<ul class="dropdown-menu dropdown-menu-right" role="menu">
																									<li><a href="#">View profile</a></li>
																									<li><a href="#">Follow</a></li>
																									<li><a href="#">Message</a></li>
																									<li><a href="#">Suggestion</a></li>
																									<li><a href="#">Un friend</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- end col-6 -->
																			<div class="col-xl-6">
																				<div class="mb-2 border shadow">
																					<div class="media  media-xs overflow-visible">
																						<a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/female/9.jpg')}}"></a>
																						<div class="media-body valign-middle">
																							<b class="text-inverse">Kathern Risner</b>
																						</div>
																						<div class="media-body valign-middle text-right overflow-visible">
																							<div class="btn-group">
																								<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																									Friends
																								</button>
																								<ul class="dropdown-menu dropdown-menu-right" role="menu">
																									<li><a href="#">View profile</a></li>
																									<li><a href="#">Follow</a></li>
																									<li><a href="#">Message</a></li>
																									<li><a href="#">Suggestion</a></li>
																									<li><a href="#">Un friend</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			<!-- end col-6 -->
																			<div class="col-xl-6">
																				<div class="mb-2 border shadow">
																					<div class="media  media-xs overflow-visible">
																						<a class="media-left" href="javascript:;"><img alt="" class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/female/8.jpg')}}"></a>
																						<div class="media-body valign-middle">
																							<b class="text-inverse">Honey Maloney</b>
																						</div>
																						<div class="media-body valign-middle text-right overflow-visible">
																							<div class="btn-group">
																								<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
																									Friends
																								</button>
																								<ul class="dropdown-menu dropdown-menu-right" role="menu">
																									<li><a href="#">View profile</a></li>
																									<li><a href="#">Follow</a></li>
																									<li><a href="#">Message</a></li>
																									<li><a href="#">Suggestion</a></li>
																									<li><a href="#">Un friend</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div><!-- end col-6 -->
																		</div><!-- end row -->
																	</div><!-- end #profile-friends tab -->
																</div><!-- end tab-content -->
															</div><!-- end profile-content -->
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
												<div class="row">
													<div class="col-lg-4 profile-image">
														<div class="card shadow">
															<img src="{{URL::asset('assets/images/photos/14.jpg')}}" alt="gallery">
														</div>
													</div>
													<div class="col-lg-4 profile-image">
														<div class="card shadow">
															<img src="{{URL::asset('assets/images/photos/19.jpg')}}" alt="gallery">
														</div>
													</div>
													<div class="col-lg-4 profile-image">
														<div class="card shadow">
															<img src="{{URL::asset('assets/images/photos/20.jpg')}}" alt="gallery">
														</div>
													</div>
													<div class="col-lg-4 profile-image">
														<div class="card shadow">
															<img src="{{URL::asset('assets/images/photos/4.jpg')}}" alt="gallery">
														</div>
													</div>
													<div class="col-lg-4 profile-image">
														<div class="card shadow">
															<img src="{{URL::asset('assets/images/photos/5.jpg')}}" alt="gallery">
														</div>
													</div>
													<div class="col-lg-4 profile-image">
														<div class="card shadow">
															<img src="{{URL::asset('assets/images/photos/6.jpg')}}" alt="gallery">
														</div>
													</div>
													<div class="col-lg-4 profile-image">
														<div class="card shadow">
															<img src="{{URL::asset('assets/images/photos/10.jpg')}}" alt="gallery">
														</div>
													</div>
													<div class="col-lg-4 profile-image">
														<div class="card shadow">
															<img src="{{URL::asset('assets/images/photos/8.jpg')}}" alt="gallery">
														</div>
													</div>
													<div class="col-lg-4 profile-image">
														<div class="card shadow">
															<img src="{{URL::asset('assets/images/photos/9.jpg')}}" alt="gallery">
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
												<div class="row profile ng-scope">
													<div class="col-md-12">
														<div class="card">
															<form class="mt ng-pristine ng-valid" action="#">
																<div class="form-group mb-0">
																	<label class="sr-only" for="new-event">New event</label>
																	<textarea class="form-control " id="new-event" placeholder="Post something..." rows="3"></textarea>
																</div>
																<div class="btn-toolbar">
																	<div class=""><a href="#" class="btn btn-sm btn-primary mr-2"><i class="fa fa-camera fa-lg"></i></a> <a href="#" class="btn btn-sm btn-info"><i class="fa fa-map-marker fa-lg"></i></a>
																	</div>
																	<button type="submit" class="btn btn-danger btn-sm ml-3">Post</button>
																</div>
															</form>
														</div>
														<div class="activities">
															<section class="event card border">
																<div class="d-flex">
																	<span class="thumb-sm  pull-left mr-sm"><img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/female/8.jpg')}}" alt="..."></span>
																	<div>
																		<h4 class="event-heading"><a href="#">John doe</a><span><small class="text-muted"><a href="#">@nils</a></small></span></h4>
																		<p class="text-xs text-muted">February 22, 2014 at 01:59 PM</p>
																	</div>
																</div>
																<p class="text-sm ">There is no such thing as maturity. There is instead an ever-evolving process of maturing. Because when there is a maturity, there is ...</p>
																<div class="border-top post-comments">
																	<ul class="post-links mb-0 pt-2 pl-2 pr-2">
																		<li><a href="#">1 hour</a>
																		</li>
																		<li><a href="#"><span class="text-danger"><i class="fa fa-heart"></i> Like</span></a>
																		</li>
																		<li><a href="#">Comment</a>
																		</li>
																	</ul>
																</div>
															</section>
															<section class="event card border">
															<div class="d-flex">
																<span class="thumb-sm  pull-left mr-sm"><img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/male/7.jpg')}}" alt="..."></span>
																<div>
																	<h4 class="event-heading"><a href="#">john doe</a><span><small class="text-muted"><a href="#">@jess</a></small></span></h4>
																	<p class="text-xs text-muted">February 22, 2014 at 01:59 PM</p>
																</div>
																</div>
																<p class="text-sm mb-0">Check out this awesome photo I made in Italy last summer. Seems it was lost somewhere deep inside my brand new HDD 40TB. Thanks god I found it!</p>
																<div>
																	<div class="clearfix border-top post-comments">
																		<ul class="post-links mt-sm pull-left p-2">
																			<li><a href="#">1 hour</a>
																			</li>
																			<li><a href="#"><span class="text-danger"><i class="fa fa-heart-o"></i> Like</span></a>
																			</li>
																			<li><a href="#">Comment</a>
																			</li>
																		</ul>
																	</div>
																	<ul class="post-comments mt-sm mb-0">
																		<li class="d-flex"><span class="thumb-sm  float-left mr-sm"><img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/female/5.jpg')}}" alt="..."></span>
																			<div class="comment-body">
																				<h6 class="author fw-semi-bold">Ignacio Abad <small>6 mins ago</small></h6>
																				<p class="text-xs">Hey, have you heard anything about that?</p>
																			</div>
																		</li>
																		<li><span class="thumb-sm float-left mr-sm mr-4" ><img class="avatar avatar-md brround" src="{{URL::asset('assets/images/users/male/3.jpg')}}" alt="..."></span>
																			<div class="msb-reply d-flex">
																				<textarea placeholder="Write your comment..."></textarea>
																				<button><i class="fa fa-paper-plane-o"></i></button>
																			</div>
																		</li>
																	</ul>
																</div>
															</section>

														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="tabs-icons-text-5" role="tabpanel" aria-labelledby="tabs-icons-text-5-tab">
												<p>Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus</p>
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus</p>
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus</p>
												<p class="mb-4">because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.</p>
											</div>
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