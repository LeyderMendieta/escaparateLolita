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
												<img src="{{URL::asset('assets/store/images/logo.svg')}}" class="header-brand-img main-logo" alt="IndoUi logo">
												<img src="{{URL::asset('assets/store/images/logo.svg')}}" class="header-brand-img dark-main-logo" alt="IndoUi logo">
											</div>
											<h3>Login</h3>
											<p class="text-muted">Ingresa a tu cuenta</p>
											<div class="input-group mb-3">
												<span class="input-group-addon bg-white"><i class="fa fa-user"></i></span>
												<input type="text" class="form-control" placeholder="Usuario">
											</div>
											<div class="input-group mb-4">
												<span class="input-group-addon bg-white"><i class="fa fa-unlock-alt"></i></span>
												<input type="password" class="form-control" placeholder="Contraseña">
											</div>
											<div class="row">
												<div class="col-12">
													<button type="button" class="btn btn-primary btn-block">Ingresar</button>
												</div>
												<div class="col-12">
													<a href="{{ url('/' . $page='admin/forgotPassword/reset') }}" class="btn btn-link box-shadow-0 px-0">¿Olvidaste tu contraseña?</a>
												</div>
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
@endsection
@section('js')
@endsection