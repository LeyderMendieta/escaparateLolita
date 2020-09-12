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
											<div class="text-center mb-4 ">
												<img src="{{URL::asset('assets/images/users/female/2.jpg')}}" alt="user-img" class="avatar avatar-xl brround mCS_img_loaded">
											</div>
											<span class="m-4 d-none d-lg-block text-center">
												<span class="h4"><strong>Vanessa Dyer</strong></span>
											</span>
											<div class="form-group">
												<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
											</div>
											<a href="{{ url('/' . $page='index') }}" class="btn btn-primary btn-block">Unlock</a>
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