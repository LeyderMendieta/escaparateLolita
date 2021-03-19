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
												<img src="{{URL::asset('assets/store/images/logo.svg')}}" class="header-brand-img main-logo" alt="El escaparate de Lolita">
												<img src="{{URL::asset('assets/store/images/logo.svg')}}" class="header-brand-img dark-main-logo" alt="El escaparate de Lolita">
											</div>
											<h3>Recuperar Contraseña</h3>
											<div class="input-group  mr-auto ml-auto mb-4">
												<span class="input-group-addon bg-white"><i class="fa fa-envelope"></i></span>
												<input type="email" class="form-control" placeholder="Correo Electronico">
											</div>
											<div class="text-center">
												<button type="button" class="btn btn-primary btn-block">Enviar</button>
											</div>
                                            <div class="col-12">
													<a href="{{ url('/' . $page='admin/login/oauth') }}" class="btn btn-link box-shadow-0 px-0">Ingresar a mi cuenta</a>
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