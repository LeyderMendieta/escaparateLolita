@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Pricing Tables</h1>
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
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="card-category">Free</div>
										<div class="display-5 my-4">$0</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>4</strong> Ads</li>
											<li><i class="fe fe-check text-success mr-2"></i> 30 days</li>
											<li><i class="fe fe-x text-danger mr-2"></i> Private Messages</li>
											<li><i class="fe fe-x text-danger mr-2"></i> Urgent Ads</li>
										</ul>
										<div class="text-center mt-6">
											<a href="#" class="btn btn-primary btn-block">Choose plan</a>
										</div>
									</div>
								</div>
							</div><!-- col-end -->
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-status bg-success"></div>
									<div class="card-body text-center">
										<div class="card-category">Premium</div>
										<div class="display-5 my-4">$65</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>50</strong> Ads</li>
											<li><i class="fe fe-check text-success mr-2"></i> 60 Days</li>
											<li><i class="fe fe-x text-danger mr-2"></i> Private Messages</li>
											<li><i class="fe fe-x text-danger mr-2"></i> Urgent ads</li>
										</ul>
										<div class="text-center mt-6">
											<a href="#" class="btn btn-success btn-block">Choose plan</a>
										</div>
									</div>
								</div>
							</div><!-- col-end -->
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="card-category">Enterprise</div>
										<div class="display-5 my-4">$100</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>100</strong> Ads</li>
											<li><i class="fe fe-check text-success mr-2"></i> 180 days</li>
											<li><i class="fe fe-check text-success mr-2"></i> Private Messages</li>
											<li><i class="fe fe-x text-danger mr-2"></i> Urgent ads</li>
										</ul>
										<div class="text-center mt-6">
											<a href="#" class="btn btn-danger btn-block">Choose plan</a>
										</div>
									</div>
								</div>
							</div><!-- col-end -->
							<div class="col-sm-6 col-lg-3">
								<div class="card">
									<div class="card-body text-center">
										<div class="card-category">Unlimited</div>
										<div class="display-5 my-4">$150</div>
										<ul class="list-unstyled leading-loose">
											<li><strong>Unlimited</strong> Ads</li>
											<li><i class="fe fe-check text-success mr-2"></i> 365 Days</li>
											<li><i class="fe fe-check text-success mr-2"></i> Private Messages</li>
											<li><i class="fe fe-check text-success mr-2"></i> Urgent ads</li>
										</ul>
										<div class="text-center mt-6">
											<a href="#" class="btn btn-info btn-block">Choose plan</a>
										</div>
									</div>
								</div>
							</div><!-- col-end -->
						</div>
						<!-- End Row -->

						<h4 class="mb-5">Pricing cards 4 colums</h4>
						<!-- Row -->
						<div class="row">
							<div class="col-sm-6 col-lg-6 col-xl-3">
								<div class="card card-pricing shadow text-center px-3 ">
									<span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white ">Professional</span>
									<div class="bg-transparent border-0">
										<h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">$<span class="price">49</span><span class="h6 text-muted ml-2">/ per month</span></h1>
									</div>
									<div class="card-body pt-0">
										<ul class="list-unstyled mb-4">
											<li>10 Free Domain Name</li>
											<li>15 One-Click Apps</li>
											<li>10 Databases</li>
											<li>Money BackGuarntee</li>
											<li>24/7 support</li>
										</ul>
										<a href="" target="_blank" class="btn btn-primary mb-3">Order Now</a>
									</div>
								</div>
							</div><!-- col-end -->
							<div class="col-sm-6 col-lg-6 col-xl-3">
								<div class="card card-pricing2 shadow text-center px-3">
									<span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-secondary text-white ">Professional</span>
									<div class="bg-transparent border-0">
										<h1 class="h1 font-weight-normal text-secondary text-center mb-0" data-pricing-value="30">$<span class="price">59</span><span class="h6 text-muted ml-2">/ per month</span></h1>
									</div>
									<div class="card-body pt-0">
										<ul class="list-unstyled mb-4">
											<li>12 Free Domain Name</li>
											<li>20 One-Click Apps</li>
											<li>15 Databases</li>
											<li>Money BackGuarntee</li>
											<li>24/7 support</li>
										</ul>
										<a href="" target="_blank" class="btn btn-secondary mb-3">Order Now</a>
									</div>
								</div>
							</div><!-- col-end -->
							<div class="col-sm-6 col-lg-6 col-xl-3">
								<div class="card card-pricing3 shadow text-center px-3">
									<span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-warning text-white ">Professional</span>
									<div class="bg-transparent border-0">
										<h1 class="h1 font-weight-normal text-warning text-center mb-0" data-pricing-value="30">$<span class="price">69</span><span class="h6 text-muted ml-2">/ per month</span></h1>
									</div>
									<div class="card-body pt-0">
										<ul class="list-unstyled mb-4">
											<li>15 Free Domain Name</li>
											<li>25 One-Click Apps</li>
											<li>20 Databases</li>
											<li>Money BackGuarntee</li>
											<li>24/7 support</li>
										</ul>
										<a href="" target="_blank" class="btn btn-warning mb-3">Order Now</a>
									</div>
								</div>
							</div><!-- col-end -->
							<div class="col-sm-6 col-lg-6 col-xl-3">
								<div class="card card-pricing4 shadow text-center px-3">
									<span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-success text-white ">Professional</span>
									<div class="bg-transparent border-0">
										<h1 class="h1 font-weight-normal text-success text-center mb-0" data-pricing-value="30">$<span class="price">79</span><span class="h6 text-muted ml-2">/ per month</span></h1>
									</div>
									<div class="card-body pt-0">
										<ul class="list-unstyled mb-4">
											<li>20 Free Domain Name</li>
											<li>30 One-Click Apps</li>
											<li>15 Databases</li>
											<li>Money BackGuarntee</li>
											<li>24/7 support</li>
										</ul>
										<a href="" target="_blank" class="btn btn-success mb-3">Order Now</a>
									</div>
								</div>
							</div><!-- col-end -->
						</div>
						<!-- End Row -->

						<h4 class="mb-5">Pricing cards 4 colums</h4>
					    <!-- Row -->
						<div class="row">
							<div class="col-lg-4">
								<div class="card pt-inner">
									<div class="card-body ">
										<div class="pti-header bg-primary">
											<h2 class="">$25 <small>/ mo</small></h2>
											<div class="ptih-title">Basic</div>
										</div>
										<div class="pti-body border border-top-0">
											<div class="ptib-item">
												<b>2</b> Free Domain Name
											</div>
											<div class="ptib-item">
												<b>3</b> One-Click Apps
											</div>
											<div class="ptib-item">
												<b>1</b> Databases
											</div>
											<div class="ptib-item">
												<b>Money</b> BackGuarntee
											</div>
											<div class="ptib-item">
												<b>24/7</b> support
											</div>
										</div>
										<div class="pti-footer border">
											<a href="" class="btn btn-primary">Buy Now</a>
										</div>
									</div>
								</div>
							</div><!-- col-end -->
							<div class="col-lg-4">
								<div class="card pt-inner">
									<div class="card-body ">
										<div class="pti-header bg-success">
											<h2>$50 <small>/ mo</small></h2>
											<div class="ptih-title">Premium</div>
										</div>
										<div class="pti-body border border-top-0">
											<div class="ptib-item">
												<b>5</b> Free Domain Name
											</div>
											<div class="ptib-item">
												<b>5</b> One-Click Apps
											</div>
											<div class="ptib-item">
												<b>3</b> Databases
											</div>
											<div class="ptib-item">
												<b>Money</b> BackGuarntee
											</div>
											<div class="ptib-item">
												<b>24/7</b> support
											</div>
										</div>
										<div class="pti-footer border">
											<a href="" class="btn btn-success">Buy Now</a>
										</div>
									</div>
								</div>
							</div><!-- col-end -->
							<div class="col-lg-4">
								<div class="card pt-inner">
									<div class="card-body">
										<div class="pti-header bg-secondary">
											<h2>$99 <small>/ mo</small></h2>
											<div class="ptih-title">Business</div>
										</div>
										<div class="pti-body border border-top-0">
											<div class="ptib-item">
												<b>12</b> Free Domain Name
											</div>
											<div class="ptib-item">
												<b>7</b> One-Click Apps
											</div>
											<div class="ptib-item">
												<b>5</b> Databases
											</div>
											<div class="ptib-item">
												<b>Money</b> BackGuarntee
											</div>
											<div class="ptib-item">
												<b>24/7</b> support
											</div>
										</div>
										<div class="pti-footer border">
											<a href="" class="btn btn-info">Buy Now</a>
										</div>
									</div>
								</div>
							</div><!-- col-end -->
						</div>
						<!-- End Row -->

						<h4 class="mb-5">Pricing cards 4 colums</h4>
						<!-- Row -->
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-lg-6 col-xl-3 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center">
										<svg x="0" y="0" viewBox="0 0 360 220">
											<g>
												<path fill="#5964ff " d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
													c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
													s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
													L0.732,193.75z"></path>
											</g>
											<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="50.4489">Personal</text>
										</svg>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>$15 /</strong>  month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 2 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>3 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 1 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center">
										<a class="btn btn-lg btn-primary btn-block" href="#">Purchase Now!</a>
									</div>
								</div>
							</div><!-- col-end -->
							<div class="col-xs-6 col-sm-6 col-lg-6 col-xl-3 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center">
										<svg x="0" y="0" viewBox="0 0 360 220">
											<g>
												<path fill="#fdb901" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
													c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
													s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
													L0.732,193.75z"></path>
											</g>
											<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="50.4489">Premium</text>
										</svg>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>$25 /</strong> month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 3 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>4 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center">
										<a class="btn btn-lg btn-warning btn-block" href="#">Purchase Now!</a>
									</div>
								</div>
							</div><!-- col-end -->
							<div class="col-xs-6 col-sm-6 col-lg-6 col-xl-3 mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center">
										<svg x="0" y="0" viewBox="0 0 360 220">
											<g>
												<path fill="#28afd0" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
													c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
													s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
													L0.732,193.75z"></path>
											</g>
											<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="50.4489">Corporate</text>
										</svg>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>$35 /</strong>  month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 4 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>6 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center">
										<a class="btn btn-lg btn-info btn-block" href="#">Purchase Now!</a>
									</div>
								</div>
							</div><!-- col-end -->
							<div class="col-xs-6 col-sm-6 col-lg-6 col-xl-3  mt-2">
								<div class="panel price  panel-color">
									<div class=" bg-white text-center">
										<svg x="0" y="0" viewBox="0 0 360 220">
											<g>
												<path fill="#ec2d38" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
													c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
													s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
													L0.732,193.75z"></path>
											</g>
											<text transform="matrix(1 0 0 1 69.7256 116.2686)" fill="#fff" font-size="50.4489">Business</text>
										</svg>
									</div>
									<div class="panel-body text-center">
										<p class="lead"><strong>$99 /</strong> month</p>
									</div>
									<ul class="list-group list-group-flush text-center">
										<li class="list-group-item"><strong> 5 Free</strong> Domain Name</li>
										<li class="list-group-item"><strong>8 </strong> One-Click Apps</li>
										<li class="list-group-item"><strong> 2 </strong> Databases</li>
										<li class="list-group-item"><strong> Money </strong> BackGuarntee</li>
										<li class="list-group-item"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer text-center">
										<a class="btn btn-lg btn-danger btn-block" href="#">Purchase Now!</a>
									</div>
								</div>
							</div><!-- col-end -->
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
@endsection