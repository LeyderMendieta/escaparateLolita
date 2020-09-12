@extends('layouts.master')
@section('css')
<!-- Notifications  css -->
<link href="{{URL::asset('assets/plugins/notify/css/jquery.growl.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Notifications</h1>
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
							<div class="col-md-12 col-xl-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Alerts Styles Notifications</h3>
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
									<div class="card-body text-center">
										<div class="example">
											<div class="btn-list">
												<button onclick="not1()" class="btn btn-success">success</button>
												<button onclick="not2()" class="btn btn-danger">Center</button>
												<button onclick="not3()" class="btn btn-warning">Left</button>
												<button onclick="not4()" class="btn btn-info">Center Info</button>
												<button onclick="not5()" class="btn btn-danger">Center Error</button>
												<button onclick="not6()" class="btn btn-warning">Center Warning</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Side Alerts Notifications</h3>
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
									<div class="card-body text-center">
										<div class="example">
											<div class="btn-list">
												<a href="#" class="btn btn-success notice">success</a>
												<a href="#" class="btn btn-warning warning">Warning</a>
												<a href="#" class="btn btn-danger error">Danger</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-12 col-lg-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Alerts Popovers</h3>
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
										<div class="row">
											<div class="col-md-4 mt-2 mb-2">
												<button type="button" class="btn btn-success btn-block " data-container="body" data-toggle="popover" data-popover-color="popsuccess" data-placement="bottom" title="alert sucess" data-content="Well done! You successfully read this important alert message..">
													Show success
												</button>
											</div>
											<div class="col-md-4 mt-2 mb-2">
												<button type="button" class="btn btn-info btn-block" data-container="body" data-toggle="popover" data-popover-color="popinfo" data-placement="top" title="alert info" data-content="Heads up! This alert needs your attention, but it's not super important...">
													Show info
												</button>
											</div>
											<div class="col-md-4 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-warning " data-container="body" data-toggle="popover" data-popover-color="popwarning" data-placement="bottom" title="alert warning" data-content="Warning! Best check yo self, you're not looking too good..">
													Show warning
												</button>
											</div>
											<div class="col-md-4 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-secondary" data-container="body" data-toggle="popover" data-popover-color="popsecondary" data-placement="top" title="alert secondary" data-content="Error! Please Check u r emial id..">
													Show secondary
												</button>
											</div>
											<div class="col-md-4 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-danger" data-container="body" data-toggle="popover" data-popover-color="popdanger" data-placement="bottom" title="alert danger" data-content="Oh snap! Change a few things up and try submitting again.">
												Show danger
												</button>
											</div>
											<div class="col-md-4 mt-2 mb-2">
												<button type="button" class="btn btn-block btn-primary" data-container="body"  data-toggle="popover" data-popover-color="pop-primary" data-placement="top" title="alert primary" data-content="Cool! This alert will close in 3 seconds. The data-delay attribute is in milliseconds.">
													Show primary
												</button>
											</div>
										</div>
									</div>
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
<!-- Popover js -->
<script src="{{URL::asset('assets/js/popover.js')}}"></script>
<!-- Notifications js -->
<script src="{{URL::asset('assets/plugins/notify/js/rainbow.js')}}"></script>
<script src="{{URL::asset('assets/plugins/notify/js/sample.js')}}"></script>
<script src="{{URL::asset('assets/plugins/notify/js/jquery.growl.js')}}"></script>
<script src="{{URL::asset('assets/plugins/notify/js/notifIt.js')}}"></script>
@endsection