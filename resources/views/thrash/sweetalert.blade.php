@extends('layouts.master')
@section('css')
<!---Sweetalert Css-->
<link href="{{URL::asset('assets/plugins/sweet-alert/jquery.sweet-modal.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/sweet-alert/sweetalert.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Sweet-Alerts</h1>
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
							<div class="col-sm-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Forms Sweet-alert</h3>
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
										<table class="table card-table">
											<tr >
												<td class="border-top-0">Title</td>
												<td class="border-top-0"><input type='text' class="form-control" placeholder='Title text' id='title'></td>
											</tr>
											<tr>
												<td class="border-top-0">Message</td>
												<td class="border-top-0"><input type='text' class="form-control" placeholder='Your message' id='message'></td>
											</tr>
											<tr>
												<td colspan='2' class="mt-5 text-center border-top-0">
													<input type='button' class="btn btn-primary mt-2" value='Simple alert' id='but1'>&nbsp;
													<input type='button' class="btn btn-secondary mt-2" value='Alert with title' id='but2'>&nbsp;
													<input type='button' class="btn btn-warning mt-2" value='Alert with image' id='but3'>&nbsp;
													<input type='button' class="btn btn-success mt-2" value='With timer' id='but4'>
												</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="card text-center">
									<div class="card-header">
										<div>
											<h3 class="card-title">Alert Types</h3>
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
										<p>You can show following types of message box &#8211; You need to specify this in <code>type</code> property as value.</p>

										<input type='button' class="btn btn-success mt-2" value='success alert' id='click'>
										<input type='button' class="btn btn-warning mt-2" value='Warning alert' id='click1'>
										<input type='button' class="btn btn-danger mt-2" value='Danger alert' id='click2'>
									</div>
								</div>
							</div>
						</div>
						<!-- Edn Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-12 ">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Prompt and confirm box Demo</h3>
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
										<table class="table card-table border">
											<tr>
												<td><input type='button' class="btn btn-warning btn-block "  value='Prompt' id='prompt'></td>
												<td><input type='button' class="btn btn-primary btn-block" value='Confirm' id='confirm'></td>
											</tr>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
<!-- Sweet alert js-->
<script src="{{URL::asset('assets/plugins/sweet-alert/jquery.sweet-modal.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
<script src="{{URL::asset('assets/js/sweet-alert.js')}}"></script>
@endsection