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
											<h3>Forgot password</h3>
											<div class="input-group  mr-auto ml-auto mb-4">
												<span class="input-group-addon bg-white"><i class="fa fa-envelope"></i></span>
												<input type="password" class="form-control" placeholder="Email address">
											</div>
											<div class="text-center">
												<button type="button" class="btn btn-primary btn-block">Send</button>
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