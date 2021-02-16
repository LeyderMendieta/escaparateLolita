@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Chat</h1>
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
							<div class="col-md-12 col-lg-5 col-xl-4">
								<div class="card">
									<div class="card-header pt-4 pb-4">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="">
											<div class="input-group-append ">
												<button type="button" class="btn btn-primary ">
													<i class="fa fa-search" aria-hidden="true"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="chat">
										<div></div>
										<ul class="contacts mb-0">
											<li class="active">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="{{URL::asset('assets/images/users/male/3.jpg')}}" class="rounded-circle user_img" alt="img">
														<span class="online_icon"></span>
													</div>
													<div class="user_info">
														<h6 class="mt-1 mb-0 ">Maryam Naz</h6>
														<small class="text-muted">Maryam is online</small>
													</div>
													<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-09-2019</small></div>
												</div>
											</li>
											<li>
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="{{URL::asset('assets/images/users/female/1.jpg')}}" class="rounded-circle user_img" alt="img">

													</div>
													<div class="user_info">
														<h6 class="mt-1 mb-0 ">Sahar Darya</h6>
														<small class="text-muted">Sahar left 7 mins ago</small>
													</div>
													<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-09-2019</small></div>
												</div>
											</li>
											<li>
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="{{URL::asset('assets/images/users/female/9.jpg')}}" class="rounded-circle user_img" alt="img">
														<span class="online_icon"></span>
													</div>
													<div class="user_info">
														<h6 class="mt-1 mb-0 ">Maryam Naz</h6>
														<small class="text-muted">Maryam is online</small>
													</div>
													<div class="float-right text-right ml-auto mt-auto mb-auto"><small>01-09-2019</small></div>
												</div>
											</li>
											<li>
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="{{URL::asset('assets/images/users/female/1.jpg')}}" class="rounded-circle user_img" alt="img">

													</div>
													<div class="user_info">
														<h6 class="mt-1 mb-0 ">Yolduz Rafi</h6>
														<small class="text-muted">Yolduz is online</small>
													</div>
													<div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-09-2019</small></div>
												</div>
											</li>
											<li>
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="{{URL::asset('assets/images/users/male/5.jpg')}}" class="rounded-circle user_img" alt="img">
														<span class="online_icon"></span>
													</div>
													<div class="user_info">
														<h6 class="mt-1 mb-0 ">Nargis Hawa</h6>
														<small class="text-muted">Nargis left 30 mins ago</small>
													</div>
													<div class="float-right text-right ml-auto mt-auto mb-auto"><small>02-09-2019</small></div>
												</div>
											</li>
											<li>
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="{{URL::asset('assets/images/users/male/7.jpg')}}" class="rounded-circle user_img" alt="img">
														<span class="online_icon"></span>
													</div>
													<div class="user_info">
														<h6 class="mt-1 mb-0 ">Khadija Mehr</h6>
														<small class="text-muted">Khadija left 50 mins ago</small>
													</div>
													<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-09-2019</small></div>
												</div>
											</li>
											<li class="mb-0 border-bottom-0">
												<div class="d-flex bd-highlight">
													<div class="img_cont">
														<img src="{{URL::asset('assets/images/users/female/8.jpg')}}" class="rounded-circle user_img" alt="img">
													</div>
													<div class="user_info">
														<h6 class="mt-1 mb-0 ">Khadija Mehr</h6>
														<small class="text-muted">Khadija left 50 mins ago</small>
													</div>
													<div class="float-right text-right ml-auto mt-auto mb-auto"><small>03-09-2019</small></div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-lg-7 col-xl-8  chat">
								<div class="card ">
									<!-- action-header -->
									<div class="action-header clearfix">
										<div class="float-left hidden-xs d-flex ml-2">
											<div class="img_cont mr-3">
												<img src="{{URL::asset('assets/images/users/female/2.jpg')}}" class="rounded-circle user_img" alt="img">
											</div>
											<div class="align-items-center mt-2">
												<h4 class="text-white mb-0 font-weight-semibold">Vanessa Dyer</h4>
												<span class="dot-label bg-success"></span><span class="mr-3 text-white">online</span>
											</div>
										</div>
										<ul class="ah-actions actions align-items-center">
											<li class="call-icon">
												<a href="" class="d-done d-md-flex">
													<i class="si si-phone"></i>
												</a>
											</li>
											<li class="video-icon">
												<a href="" class="d-done d-md-flex">
													<i class="si si-camrecorder"></i>
												</a>
											</li>
											<li class="dropdown">
												<a href="" data-toggle="dropdown" aria-expanded="true">
													<i class="si si-options-vertical"></i>
												</a>
												<ul class="dropdown-menu dropdown-menu-right">
													<li><i class="fa fa-user-circle"></i> View profile</li>
													<li><i class="fa fa-users"></i> Add to close friends</li>
													<li><i class="fa fa-plus"></i> Add to group</li>
													<li><i class="fa fa-ban"></i> Block</li>
												</ul>
											</li>
										</ul>
									</div>
									<!-- action-header end -->

									<!-- msg_card_body -->
									<div class="card-body msg_card_body">
										<div class="chat-box-single-line">
											<abbr class="timestamp">October 1st, 2019</abbr>
										</div>
										<div class="d-flex justify-content-start">
											<div class="img_cont_msg">
												<img src="{{URL::asset('assets/images/users/male/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
											</div>
											<div class="msg_cotainer">
												Hi, how are you Vanessa Dyer?
												<span class="msg_time">8:40 AM, Today</span>
											</div>
										</div>
										<div class="d-flex justify-content-end ">
											<div class="msg_cotainer_send">
												Hi Connor Paige i am good tnx how about you?
												<span class="msg_time_send">8:55 AM, Today</span>
											</div>
											<div class="img_cont_msg">
												<img src="{{URL::asset('assets/images/users/female/2.jpg')}}" class="rounded-circle user_img_msg" alt="img">
											</div>
										</div>
										<div class="d-flex justify-content-start ">
											<div class="img_cont_msg">
												<img src="{{URL::asset('assets/images/users/male/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
											</div>
											<div class="msg_cotainer">
												I am good too, thank you for your chat template
												<span class="msg_time">9:00 AM, Today</span>
											</div>
										</div>
										<div class="d-flex justify-content-end ">
											<div class="msg_cotainer_send">
												You welcome Connor Paige
												<span class="msg_time_send">9:05 AM, Today</span>
											</div>
											<div class="img_cont_msg">
												<img src="{{URL::asset('assets/images/users/female/2.jpg')}}" class="rounded-circle user_img_msg" alt="img">
											</div>
										</div>
										<div class="d-flex justify-content-start ">
											<div class="img_cont_msg">
												<img src="{{URL::asset('assets/images/users/male/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
											</div>
											<div class="msg_cotainer">
												Yo, Can you update Views?
												<span class="msg_time">9:07 AM, Today</span>
											</div>
										</div>
										<div class="d-flex justify-content-end mb-4">
											<div class="msg_cotainer_send">
												But I must explain to you how all this mistaken  born and I will give
												<span class="msg_time_send">9:10 AM, Today</span>
											</div>
											<div class="img_cont_msg">
												<img src="{{URL::asset('assets/images/users/female/2.jpg')}}" class="rounded-circle user_img_msg" alt="img">
											</div>
										</div>
										<div class="d-flex justify-content-start ">
											<div class="img_cont_msg">
												<img src="{{URL::asset('assets/images/users/male/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
											</div>
											<div class="msg_cotainer">
												Yo, Can you update Views?
												<span class="msg_time">9:07 AM, Today</span>
											</div>
										</div>
										<div class="d-flex justify-content-end mb-4">
											<div class="msg_cotainer_send">
												But I must explain to you how all this mistaken  born and I will give
												<span class="msg_time_send">9:10 AM, Today</span>
											</div>
											<div class="img_cont_msg">
												<img src="{{URL::asset('assets/images/users/female/2.jpg')}}" class="rounded-circle user_img_msg" alt="img">
											</div>
										</div>
										<div class="d-flex justify-content-start ">
											<div class="img_cont_msg">
												<img src="{{URL::asset('assets/images/users/male/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
											</div>
											<div class="msg_cotainer">
												Yo, Can you update Views?
												<span class="msg_time">9:07 AM, Today</span>
											</div>
										</div>
										<div class="d-flex justify-content-end mb-4">
											<div class="msg_cotainer_send">
												But I must explain to you how all this mistaken  born and I will give
												<span class="msg_time_send">9:10 AM, Today</span>
											</div>
											<div class="img_cont_msg">
												<img src="{{URL::asset('assets/images/users/female/2.jpg')}}" class="rounded-circle user_img_msg" alt="img">
											</div>
										</div>
										<div class="d-flex justify-content-start">
											<div class="img_cont_msg">
												<img src="{{URL::asset('assets/images/users/male/9.jpg')}}" class="rounded-circle user_img_msg" alt="img">
											</div>
											<div class="msg_cotainer">
												Okay Bye, text you later..
												<span class="msg_time">9:12 AM, Today</span>
											</div>
										</div>
									</div>
									<!-- msg_card_body end -->
									<!-- card-footer -->
									<div class="card-footer">
										<div class="msb-reply d-flex">
											<div class="input-group">
												<input type="text" class="form-control" placeholder="Typing....">
												<div class="input-group-append ">
													<button type="button" class="btn btn-primary ">
														<i class="fa fa-search" aria-hidden="true"></i>
													</button>
												</div>
											</div>
										</div>
									</div><!-- card-footer end -->
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
@endsection