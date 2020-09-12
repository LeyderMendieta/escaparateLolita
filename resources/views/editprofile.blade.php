@extends('layouts.master')
@section('css')
<!--Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Edit Profile</h1>
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
							<div class="col-lg-12 col-xl-4 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">My Profile</h3>
										<div class="card-options">
											<a href="profile.html" class="btn btn-primary btn-sm"><i class="si si-eye mr-1"></i>View Profile</a>
										</div>
									</div>
									<div class="card-body">
										<div class="text-center">
											<div class="userprofile ">
												<div class="userpic  brround"> <img src="{{URL::asset('assets/images/users/female/2.jpg')}}" alt="" class="userpicimg"> </div>
												<h3 class="username mb-2">Vanessa Dyer</h3>
												<p class="mb-1">Web Developer, Uk</p>
												<div class="text-center mb-4">
													<span><i class="fa fa-star text-warning"></i></span>
													<span><i class="fa fa-star text-warning"></i></span>
													<span><i class="fa fa-star text-warning"></i></span>
													<span><i class="fa fa-star-half-o text-warning"></i></span>
													<span><i class="fa fa-star-o text-warning"></i></span>
												</div>
												<div class="socials text-center mt-3">
													<a href="" class="btn btn-circle btn-primary ">
													<i class="fa fa-facebook"></i></a> <a href="" class="btn btn-circle btn-danger ">
													<i class="fa fa-google-plus"></i></a> <a href="" class="btn btn-circle btn-info ">
													<i class="fa fa-twitter"></i></a> <a href="" class="btn btn-circle btn-warning "><i class="fa fa-envelope"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<ul class="row text-center clearfix mb-0">
											<li class="col-sm-4">
												<span class="text-dark font-weight-bold">1,345</span>
												<p class="text-muted mb-0">
													<small>Following</small>
												</p>
											</li>
											<li class="col-sm-4">
												<span class="text-dark font-weight-bold">23,456</span>
												<p class="text-muted mb-0">
													<small>Followers</small>
												</p>
											</li>
											<li class="col-sm-4">
												<span class="text-dark font-weight-bold">52,678</span>
												<p class="text-muted mb-0">
													<small>Likes</small>
												</p>
											</li>
										</ul>
									</div>
								</div>
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Followers</h3>
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
									<div class="card-body pt-3 pb-3">
										<div class="memberblock mb-0">
											<div class="row ">
												<div class="col-lg-4 col-md-4 col-sm-4 mb-2  pl-1 pr-1">
													<a href="" class="member"> <img src="{{URL::asset('assets/images/users/male/2.jpg')}}" alt="">
														<div class="memmbername">Ajay Sriram</div>
													</a>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4 mb-2  pl-1 pr-1">
													<a href="" class="member"> <img src="{{URL::asset('assets/images/users/female/1.jpg')}}" alt="">
														<div class="memmbername">Rajesh Sriram</div>
													</a>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4 mb-2  pl-1 pr-1">
													<a href="" class="member"> <img src="{{URL::asset('assets/images/users/male/9.jpg')}}" alt="">
														<div class="memmbername">Manish Sriram</div>
													</a>
												</div>
											</div>
											<div class="row ">
												<div class="col-lg-4 col-md-4 col-sm-4 mb-2 mb-md-0  pl-1 pr-1">
													<a href="" class="member"> <img src="{{URL::asset('assets/images/users/female/6.jpg')}}" alt="">
														<div class="memmbername">John Sriram</div>
													</a>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4 mb-2 mb-md-0  pl-1 pr-1">
													<a href="" class="member"> <img src="{{URL::asset('assets/images/users/male/3.jpg')}}" alt="">
														<div class="memmbername">Chandra Amin</div>
													</a>
												</div>
												<div class="col-lg-4 col-md-4 col-sm-4 mb-2 mb-md-0  pl-1 pr-1">
													<a href="" class="member"> <img src="{{URL::asset('assets/images/users/female/8.jpg')}}" alt="">
														<div class="memmbername">Julian	Knox</div>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-8 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Edit Profile</h3>
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
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label for="exampleInputname">First Name</label>
													<input type="text" class="form-control" id="exampleInputname" placeholder="First Name">
												</div>
											</div>
											<div class="col-lg-6 col-md-12">
												<div class="form-group">
													<label for="exampleInputname1">Last Name</label>
													<input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Last Name">
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="exampleInputEmail1">Email address</label>
											<input type="email" class="form-control" id="exampleInputEmail1" placeholder="email address">
										</div>
										<div class="form-group">
											<label for="exampleInputnumber">Conatct Number</label>
											<input type="number" class="form-control" id="exampleInputnumber" placeholder="ph number">
										</div>
										<div class="form-group">
											<label class="form-label">About Me</label>
											<textarea class="form-control" rows="6">My bio.........</textarea>
										</div>
										<div class="form-group">
											<label class="form-label">Website</label>
											<input class="form-control" placeholder="http://IndoUi.com">
										</div>
										<div class="form-group">
											<label class="form-label">Date Of Birth</label>
											<div class="row">
												<div class="col-md-4">
													<select class="form-control select2">
														<option value="0">Date</option>
														<option value="1">01</option>
														<option value="2">02</option>
														<option value="3">03</option>
														<option value="4">04</option>
														<option value="5">05</option>
														<option value="6">06</option>
														<option value="7">07</option>
														<option value="8">08</option>
														<option value="9">09</option>
														<option value="10">10</option>
														<option value="11">11</option>
														<option value="12">12</option>
														<option value="13">13</option>
														<option value="14">14</option>
														<option value="15">15</option>
														<option value="16">16</option>
														<option value="17">17</option>
														<option value="18">18</option>
														<option value="19">19</option>
														<option value="20">20</option>
														<option value="21">21</option>
														<option value="22">22</option>
														<option value="23">23</option>
														<option value="24">24</option>
														<option value="25">25</option>
														<option value="26">26</option>
														<option value="27">27</option>
														<option value="28">28</option>
														<option value="29">29</option>
														<option value="30">30</option>
														<option value="31">31</option>
													</select>
												</div>
												<div class="col-md-4">
													<select class="form-control select2">
														<option value="0">Mon</option>
														<option value="1">Jan</option>
														<option value="2">Feb</option>
														<option value="3">Mar</option>
														<option value="4">Apr</option>
														<option value="5">May</option>
														<option value="6">June</option>
														<option value="7">July</option>
														<option value="8">Aug</option>
														<option value="9">Sep</option>
														<option value="10">Oct</option>
														<option value="11">Nov</option>
														<option value="12">Dec</option>
													</select>
												</div>
												<div class="col-md-4">
													<select class="form-control select2">
														<option value="0">Year</option>
														<option value="1">2018</option>
														<option value="2">2017</option>
														<option value="3">2016</option>
														<option value="4">2015</option>
														<option value="5">2014</option>
														<option value="6">2013</option>
														<option value="7">2102</option>
														<option value="8">2012</option>
														<option value="9">2011</option>
														<option value="10">2010</option>
														<option value="11">2009</option>
														<option value="12">2008</option>
														<option value="13">2007</option>
														<option value="14">2006</option>
														<option value="15">2005</option>
														<option value="16">2004</option>
														<option value="17">2003</option>
														<option value="18">2002</option>
														<option value="19">2001</option>
														<option value="20">1999</option>
														<option value="21">1998</option>
														<option value="22">1997</option>
														<option value="23">1996</option>
														<option value="24">1995</option>
														<option value="25">1994</option>
														<option value="26">1993</option>
														<option value="27">1992</option>
														<option value="28">1991</option>
														<option value="29">1990</option>
														<option value="30">1989</option>
														<option value="31">1988</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group mb-0 mt-5">
											<div class="row">
												<div class="col-xl-6 col-lg-12 col-md-12 userprofile">
													<div class="userpic mb-2">
														<img src="{{URL::asset('assets/images/users/female/2.jpg')}}" alt="" class="userpicimg">
													</div>
													<p class="text-center">Web Developer, USA</p>
													<div class="text-center">
														<a href="#" class="btn btn-primary mt-1"><i class="fe fe-camera  mr-1"></i>Change Photo</a><br>
														<a href="#" class="btn btn-info mt-1 mb-3 mb-xl-0"><i class="fe fe-camera-off mr-1 mb-2"></i>Remove Photo</a>
													</div>
												</div>
												<div class="col-xl-6 col-lg-12 col-md-12">
													<div class="form-group">
														<label>Change Password</label>
														<input type="password" class="form-control" value="password">
													</div>
													<div class="form-group">
														<label>New Password</label>
														<input type="password" class="form-control" value="password">
													</div>
													<div class="form-group mb-0">
														<label>Confirm Password</label>
														<input type="password" class="form-control" value="password">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer text-right">
										<a href="#" class="btn btn-success mt-1">Save</a>
										<a href="#" class="btn btn-warning mt-1">Cancel</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
<!--Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection