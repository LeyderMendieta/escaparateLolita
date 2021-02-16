@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Users List</h1>
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
								<div class="e-panel card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Users</h3>
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
										<div class="e-table">
											<div class="table-responsive table-lg">
												<table class="table table-bordered">
													<thead>
														<tr>
															<th  class="text-center">

															</th>
															<th class="text-center">Photo</th>
															<th >Name</th>
															<th>Date</th>
															<th class="text-center">Actions</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="align-middle text-center">
																<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																	<input class="custom-control-input" id="item-1" type="checkbox"> <label class="custom-control-label" for="item-1"></label>
																</div>
															</td>
															<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/female/6.jpg')}}"></td>
															<td class="text-nowrap align-middle">Adam Cotter</td>
															<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>

															<td class="text-center align-middle">
																<div class="btn-group align-top">
																	<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle text-center">
																<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																	<input class="custom-control-input" id="item-2" type="checkbox"> <label class="custom-control-label" for="item-2"></label>
																</div>
															</td>
															<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/female/5.jpg')}}"></td>
															<td class="text-nowrap align-middle">Pauline Noble</td>
															<td class="text-nowrap align-middle"><span>26 Jan 2018</span></td>

															<td class="text-center align-middle">
																<div class="btn-group align-top">
																	<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle text-center">
																<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																	<input class="custom-control-input" id="item-3" type="checkbox"> <label class="custom-control-label" for="item-3"></label>
																</div>
															</td>
															<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/male/2.jpg')}}"></td>
															<td class="text-nowrap align-middle">Sherilyn Metzel</td>
															<td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>

															<td class="text-center align-middle">
																<div class="btn-group align-top">
																	<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle text-center">
																<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																	<input class="custom-control-input" id="item-4" type="checkbox"> <label class="custom-control-label" for="item-4"></label>
																</div>
															</td>
															<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/male/8.jpg')}}"></td>
															<td class="text-nowrap align-middle">Terrie Boaler</td>
															<td class="text-nowrap align-middle"><span>20 Jan 2018</span></td>

															<td class="text-center align-middle">
																<div class="btn-group align-top">
																	<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle text-center">
																<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																	<input class="custom-control-input" id="item-5" type="checkbox"> <label class="custom-control-label" for="item-5"></label>
																</div>
															</td>
															<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/female/9.jpg')}}"></td>
															<td class="text-nowrap align-middle">Rutter Pude</td>
															<td class="text-nowrap align-middle"><span>13 Jan 2018</span></td>

															<td class="text-center align-middle">
																<div class="btn-group align-top">
																	<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary  badge" type="button"><i class="fa fa-trash"></i></button>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle text-center">
																<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																	<input class="custom-control-input" id="item-6" type="checkbox"> <label class="custom-control-label" for="item-6"></label>
																</div>
															</td>
															<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/male/8.jpg')}}"></td>
															<td class="text-nowrap align-middle">Clifford Benjamin</td>
															<td class="text-nowrap align-middle"><span>25 Jan 2018</span></td>

															<td class="text-center align-middle">
																<div class="btn-group align-top">
																	<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle text-center">
																<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																	<input class="custom-control-input" id="item-7" type="checkbox"> <label class="custom-control-label" for="item-7"></label>
																</div>
															</td>
															<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/female/1.jpg')}}"></td>
															<td class="text-nowrap align-middle">Thedric Romans</td>
															<td class="text-nowrap align-middle"><span>12 Jan 2018</span></td>

															<td class="text-center align-middle">
																<div class="btn-group align-top">
																	<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle text-center">
																<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																	<input class="custom-control-input" id="item-8" type="checkbox"> <label class="custom-control-label" for="item-8"></label>
																</div>
															</td>
															<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/female/3.jpg')}}"></td>
															<td class="text-nowrap align-middle">Haily Carthew</td>
															<td class="text-nowrap align-middle"><span>27 Jan 2018</span></td>

															<td class="text-center align-middle">
																<div class="btn-group align-top">
																	<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle text-center">
																<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																	<input class="custom-control-input" id="item-9" type="checkbox"> <label class="custom-control-label" for="item-9"></label>
																</div>
															</td>
															<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/male/2.jpg')}}"></td>
															<td class="text-nowrap align-middle">Dorothea Joicey</td>
															<td class="text-nowrap align-middle"><span>12 Dec 2017</span></td>

															<td class="text-center align-middle">
																<div class="btn-group align-top">
																	<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle text-center">
																<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																	<input class="custom-control-input" id="item-10" type="checkbox"> <label class="custom-control-label" for="item-10"></label>
																</div>
															</td>
															<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/female/5.jpg')}}"></td>
															<td class="text-nowrap align-middle">Mikaela Pinel</td>
															<td class="text-nowrap align-middle"><span>10 Dec 2017</span></td>

															<td class="text-center align-middle">
																<div class="btn-group align-top">
																	<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle text-center">
																<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																	<input class="custom-control-input" id="item-11" type="checkbox"> <label class="custom-control-label" for="item-11"></label>
																</div>
															</td>
															<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/female/10.jpg')}}"></td>
															<td class="text-nowrap align-middle">Donnell Farries</td>
															<td class="text-nowrap align-middle"><span>03 Dec 2017</span></td>

															<td class="text-center align-middle">
																<div class="btn-group align-top">
																	<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
																</div>
															</td>
														</tr>
														<tr>
															<td class="align-middle text-center">
																<div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
																	<input class="custom-control-input" id="item-12" type="checkbox"> <label class="custom-control-label" for="item-12"></label>
																</div>
															</td>
															<td class="align-middle text-center"><img alt="image" class="avatar avatar-md rounded-circle" src="{{URL::asset('assets/images/users/male/9.jpg')}}"></td>
															<td class="text-nowrap align-middle">Letizia Puncher</td>
															<td class="text-nowrap align-middle"><span>09 Dec 2017</span></td>

															<td class="text-center align-middle">
																<div class="btn-group align-top">
																	<button class="btn btn-sm btn-primary badge" data-target="#user-form-modal" data-toggle="modal" type="button">Edit</button> <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
																</div>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="d-flex justify-content-center">
												<ul class="pagination mt-3 mb-0">
													<li class="disabled page-item">
														<a class="page-link" href="#">‹</a>
													</li>
													<li class="active page-item">
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
														<a class="page-link" href="#">›</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">»</a>
													</li>
												</ul>
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