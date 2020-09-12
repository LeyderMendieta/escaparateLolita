@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Default Tables</h1>
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
							<div class="col-12">
								<div class="card shadow">
									<div class="card-header bg-transparent border-0">
										<div>
											<h3 class="card-title mb-0">Default Table</h3>
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
									<div class="">
										<div class="grid-margin">
											<div class="">
												<div class="table-responsive">
													<table class="table card-table table-vcenter text-nowrap  align-items-center">
														<thead class="thead-light">
															<tr>
																<th>Id</th>
																<th>Project Name</th>
																<th>Team</th>
																<th>Feedback</th>
																<th>Date</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>2345</td>
																<td class="text-sm font-weight-600">Megan Peters</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/9.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/10.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/1.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/2.jpg')}}"></a>
																	</div>
																</td>
																<td>please check pricing Info </td>
																<td class="text-nowrap">July 13, 2018</td>
															</tr>
															<tr>
																<td>4562</td>
																<td class="text-sm font-weight-600">Phil Vance</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/3.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/4.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/5.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/6.jpg')}}"></a>
																	</div>
																</td>
																<td>New stock</td>
																<td class="text-nowrap">June 15, 2018</td>
															</tr>
															<tr>
																<td>8765</td>
																<td class="text-sm font-weight-600">Adam Sharp</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/8.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/9.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/10.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/10.jpg')}}"></a>
																	</div>
																</td>
																<td>Daily updates</td>
																<td class="text-nowrap">July 8, 2018</td>
															</tr>
															<tr>
																<td>2665</td>
																<td class="text-sm font-weight-600">Samantha Slater</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/2.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/1.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/8.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/1.jpg')}}"></a>
																	</div>
																</td>
																<td>available item list</td>
																<td class="text-nowrap">June 28, 2018</td>
															</tr>
															<tr>
																<td>1245</td>
																<td class="text-sm font-weight-600">Joanne Nash</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/5.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/6.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/7.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/8.jpg')}}"></a>
																	</div>
																</td>
																<td>Provide Best Services</td>
																<td class="text-nowrap">July 2, 2018</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-12">
								<div class="card ">
									<div class="card-header table-primary border-0">
										<div>
											<h3 class="card-title">Primary Table</h3>
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
									<div class="">
										<div class="grid-margin">
											<div class="">
												<div class="table-responsive">
													<table class="table card-table  table-primary table-vcenter text-nowrap  align-items-center">
														<thead class="thead-light">
															<tr>
																<th>Id</th>
																<th>Project Name</th>
																<th>Team</th>
																<th>Feedback</th>
																<th>Date</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>2345</td>
																<td class="text-sm font-weight-600">Megan Peters</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/9.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/10.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/1.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/2.jpg')}}"></a>
																	</div>
																</td>
																<td>please check pricing Info </td>
																<td class="text-nowrap">July 13, 2018</td>
															</tr>
															<tr>
																<td>4562</td>
																<td class="text-sm font-weight-600">Phil Vance</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/3.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/4.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/5.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/6.jpg')}}"></a>
																	</div>
																</td>
																<td>New stock</td>
																<td class="text-nowrap">June 15, 2018</td>
															</tr>
															<tr>
																<td>8765</td>
																<td class="text-sm font-weight-600">Adam Sharp</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/8.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/9.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/10.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/10.jpg')}}"></a>
																	</div>
																</td>
																<td>Daily updates</td>
																<td class="text-nowrap">July 8, 2018</td>
															</tr>
															<tr>
																<td>2665</td>
																<td class="text-sm font-weight-600">Samantha Slater</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/2.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/1.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/8.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/10.jpg')}}"></a>
																	</div>
																</td>
																<td>available item list</td>
																<td class="text-nowrap">June 28, 2018</td>
															</tr>
															<tr class="border-bottom-0">
																<td>1245</td>
																<td class="text-sm font-weight-600">Joanne Nash</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/5.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/6.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/7.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/8.jpg')}}"></a>
																	</div>
																</td>
																<td>Provide Best Services</td>
																<td class="text-nowrap">July 2, 2018</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="card">
									<div class="card-header table-success  border-0">
										<div>
											<h3 class="card-title">Success Table</h3>
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
									<div class="">
										<div class="grid-margin">
											<div class="">
												<div class="table-responsive">
													<table class="table card-table  table-success table-vcenter text-nowrap  align-items-center">
														<thead class="thead-light">
															<tr>
																<th>Id</th>
																<th>Project Name</th>
																<th>Team</th>
																<th>Feedback</th>
																<th>Date</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>2345</td>
																<td class="text-sm font-weight-600">Megan Peters</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/9.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/10.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/2.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/2.jpg')}}"></a>
																	</div>
																</td>
																<td>please check pricing Info </td>
																<td class="text-nowrap">July 13, 2018</td>
															</tr>
															<tr>
																<td>4562</td>
																<td class="text-sm font-weight-600">Phil Vance</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/3.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/4.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/5.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/6.jpg')}}"></a>
																	</div>
																</td>
																<td>New stock</td>
																<td class="text-nowrap">June 15, 2018</td>
															</tr>
															<tr>
																<td>8765</td>
																<td class="text-sm font-weight-600">Adam Sharp</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/8.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/9.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/10.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/1.jpg')}}"></a>
																	</div>
																</td>
																<td>Daily updates</td>
																<td class="text-nowrap">July 8, 2018</td>
															</tr>
															<tr>
																<td>2665</td>
																<td class="text-sm font-weight-600">Samantha Slater</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/2.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/1.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/8.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/10.jpg')}}"></a>
																	</div>
																</td>
																<td>available item list</td>
																<td class="text-nowrap">June 28, 2018</td>
															</tr>
															<tr class="border-bottom-0">
																<td>1245</td>
																<td class="text-sm font-weight-600">Joanne Nash</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/5.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/6.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/7.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/8.jpg')}}"></a>
																	</div>
																</td>
																<td>Provide Best Services</td>
																<td class="text-nowrap">July 2, 2018</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-12">
								<div class="card">
									<div class="card-header table-danger border-0">
										<div>
											<h3 class="card-title">Danger Table</h3>
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
									<div class="">
										<div class="grid-margin">
											<div class="">
												<div class="table-responsive">
													<table class="table card-table  table-danger table-vcenter text-nowrap  align-items-center">
														<thead class="thead-light">
															<tr>
																<th>Id</th>
																<th>Project Name</th>
																<th>Team</th>
																<th>Feedback</th>
																<th>Date</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>2345</td>
																<td class="text-sm font-weight-600">Megan Peters</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/9.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/10.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/1.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/2.jpg')}}"></a>
																	</div>
																</td>
																<td>please check pricing Info </td>
																<td class="text-nowrap">July 13, 2018</td>
															</tr>
															<tr>
																<td>4562</td>
																<td class="text-sm font-weight-600">Phil Vance</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/3.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/4.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/5.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/6.jpg')}}"></a>
																	</div>
																</td>
																<td>New stock</td>
																<td class="text-nowrap">June 15, 2018</td>
															</tr>
															<tr>
																<td>8765</td>
																<td class="text-sm font-weight-600">Adam Sharp</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/8.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/9.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/10.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/1.jpg')}}"></a>
																	</div>
																</td>
																<td>Daily updates</td>
																<td class="text-nowrap">July 8, 2018</td>
															</tr>
															<tr>
																<td>2665</td>
																<td class="text-sm font-weight-600">Samantha Slater</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/2.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/1.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/8.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/10.jpg')}}"></a>
																	</div>
																</td>
																<td>available item list</td>
																<td class="text-nowrap">June 28, 2018</td>
															</tr>
															<tr class="border-bottom-0">
																<td>1245</td>
																<td class="text-sm font-weight-600">Joanne Nash</td>
																<td><div class="avatar-group">
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/5.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/6.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/female/7.jpg')}}"></a>
																		<a class="avatar avatar-sm" data-toggle="tooltip" href="#" data-original-title="" title=""><img alt="Image placeholder" class="rounded-circle" src="{{URL::asset('assets/images/users/male/8.jpg')}}"></a>
																	</div>
																</td>
																<td>Provide Best Services</td>
																<td class="text-nowrap">July 2, 2018</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="card">
									<div class="card-header border-0">
										<div>
											<h3 class="card-title">Basic Table</h3>
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
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap">
											<thead >
												<tr>
													<th>ID</th>
													<th>Name</th>
													<th>Position</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
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
											<h3 class="card-title">Full color variations</h3>
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
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-nowrap" >
											<thead  class="bg-primary text-white">
												<tr >
													<th class="text-white">ID</th>
													<th class="text-white">Name</th>
													<th class="text-white">Position</th>
													<th class="text-white">Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
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
											<h3 class="card-title">Full color variations2</h3>
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
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap table-nowrap" >
											<thead  class="bg-blue text-white">
												<tr>
													<th class="text-white">ID</th>
													<th class="text-white">Name</th>
													<th class="text-white">Position</th>
													<th class="text-white">Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Joan Powell</td>
													<td>Associate Developer</td>
													<td>$450,870</td>
												</tr>
												<tr>
													<th scope="row">2</th>
													<td>Gavin Gibson</td>
													<td>Account manager</td>
													<td>$230,540</td>
												</tr>
												<tr>
													<th scope="row">3</th>
													<td>Julian Kerr</td>
													<td>Senior Javascript Developer</td>
													<td>$55,300</td>
												</tr>
												<tr>
													<th scope="row">4</th>
													<td>Cedric Kelly</td>
													<td>Accountant</td>
													<td>$234,100</td>
												</tr>
												<tr>
													<th scope="row">5</th>
													<td>Samantha May</td>
													<td>Junior Technical Author</td>
													<td>$43,198</td>
												</tr>
											</tbody>
										</table>
									</div>
									<!-- table-responsive -->
								</div>
							</div><!-- col end -->
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
@endsection