@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Invoice</h1>
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
								<div class="card">
									<div class="card-body">
										<div class="d-flex">
											<a class="header-brand" href="index.html">
												<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img main-logo" alt="IndoUi logo">
												<img src="{{URL::asset('assets/images/brand/logo-light.png')}}" class="header-brand-img dark-main-logo" alt="IndoUi logo">
											</a>
											<div class="text-right ml-auto">
												<h2 class="mb-1">Invoice #2976</h2>
												<p class="mb-1"><span class="font-weight-semibold">Invoice Date :</span> 01st October 2019</p>
												<p><span class="font-weight-semibold">Due Date :</span> 01 March  2020</p>
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-lg-6">
												<p class="h3">Invoice Form:</p>
												<address>
													Street Address<br>
													State, City<br>
													Region, Postal Code<br>
													yourdomain@example.com
												</address>
											</div>
											<div class="col-lg-6 text-right">
												<p class="h3">Invoice To:</p>
												<address>
													Street Address<br>
													State, City<br>
													Region, Postal Code<br>
													ypurdomain@example.com
												</address>
											</div>
										</div>
										<div class="table-responsive push">
											<table class="table table-bordered table-hover mb-0">
												<tbody><tr class=" ">
													<th class="text-center " style="width: 1%"></th>
													<th>Item</th>
													<th class="text-center" style="width: 1%">Quantity</th>
													<th class="text-right">Unit Price</th>
													<th class="text-right">Sub Total</th>
												</tr>
												<tr>
													<td class="text-center">1</td>
													<td>
														<p class="font-w600 mb-1">Logo Design</p>
														<div class="text-muted"><div class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</div></div>
													</td>
													<td class="text-center">2</td>
													<td class="text-right">$674</td>
													<td class="text-right">$1,308</td>
												</tr>
												<tr>
													<td class="text-center">2</td>
													<td>
														<p class="font-w600 mb-1">Website wireframe for 2 pages</p>
														<div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</div>
													</td>
													<td class="text-center">4</td>
													<td class="text-right">$1,500</td>
													<td class="text-right">$6,000</td>
												</tr>
												<tr>
													<td class="text-center">3</td>
													<td>
														<p class="font-w600 mb-1">PSD to HTML coding</p>
														<div class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</div>
													</td>
													<td class="text-center">3</td>
													<td class="text-right">$530</td>
													<td class="text-right">$1,690</td>
												</tr>
												<tr>
													<td class="text-center">4</td>
													<td>
														<p class="font-w600 mb-1">E-commerce Development</p>
														<div class="text-muted">When our power of choice is untrammelled and when nothing prevents our being able</div>
													</td>
													<td class="text-center">2</td>
													<td class="text-right">$800</td>
													<td class="text-right">$1,600</td>
												</tr>
												<tr>
													<td class="text-center">5</td>
													<td>
														<p class="font-w600 mb-1">Design and layout of 2 pages in Photoshop</p>
														<div class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
													</td>
													<td class="text-center">2</td>
													<td class="text-right">$720</td>
													<td class="text-right">$1,440</td>
												</tr>
												<tr>
													<td colspan="4" class="font-weight-bold text-uppercase text-right">Total</td>
													<td class="font-weight-bold text-right h4">$12,038</td>
												</tr>
											</tbody></table>
										</div>
									</div>
									<div class="card-footer text-right">
										<button type="button" class="btn btn-primary mb-1"><i class="icon icon-wallet"></i> Pay Invoice</button>
										<button type="button" class="btn btn-secondary mb-1"><i class="icon icon-action-redo"></i> Send Invoice</button>
										<button type="button" class="btn btn-success mb-1" onclick="javascript:window.print();"><i class="icon icon-printer"></i> Print Invoice</button>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
@endsection