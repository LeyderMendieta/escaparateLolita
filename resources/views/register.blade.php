@extends('layouts.master2')
@section('css')
@endsection
@section('content')
	    <!-- page -->
		<div class="page">

			<!-- page-content -->
			<div class="page-content">
				<div class="container text-center text-dark">
					<div class="row">
						<div class="col-lg-4 d-block mx-auto">
							<div class="row">
								<div class="col-xl-12 col-md-12 col-md-12">
									<div class="card">
										<div class="card-body">
											<div class="text-center mb-6">
												<img src="{{URL::asset('assets/images/brand/logo.png')}}" class="header-brand-img main-logo" alt="IndoUi logo">
												<img src="{{URL::asset('assets/images/brand/logo-light.png')}}" class="header-brand-img dark-main-logo" alt="IndoUi logo">
											</div>
											<h3>Register</h3>
											<p class="text-muted">Create New Account</p>
											<div class="input-group mb-3">
												<span class="input-group-addon bg-white"><i class="fa fa-user w-4"></i></span>
												<input type="text" class="form-control" placeholder="Entername">
											</div>
											<div class="input-group mb-4">
												<span class="input-group-addon bg-white"><i class="fa fa-envelope  w-4"></i></span>
												<input type="text" class="form-control" placeholder="Enter Email">
											</div>
											<div class="input-group mb-4">
												<span class="input-group-addon bg-white"><i class="fa fa-unlock-alt  w-4"></i></span>
												<input type="password" class="form-control" placeholder="Password">
											</div>
											<div class="form-group">
												<label class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" />
													<span class="custom-control-label">Agree the <a href="{{ url('/' . $page='terms') }}">terms and policy</a></span>
												</label>
											</div>
											<div class="row">
												<div class="col-12">
													<button type="button" class="btn btn-primary btn-block px-4">Create a new account</button>
												</div>
											</div>
											<div class="mt-6 btn-list">
												<button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
												<button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
												<button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
												<button type="button" class="btn btn-icon btn-dribbble"><i class="fa fa-dribbble"></i></button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- page-content end -->

		</div>
		<!-- page End-->
@endsection
@section('js')
@endsection