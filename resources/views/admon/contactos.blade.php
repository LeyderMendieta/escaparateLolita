@extends('admon.layouts.principal')

@section('titulo')
<title>Contactos - Administración Escaparate</title>
@endsection

@section('css')
<!-- Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
						<div class="page-header">
							<h1 class="page-title">Contactos</h1>
						</div>
@endsection
@section('content')
						

						

					<!-- Row -->
					<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div id="App_admsolicitud_contactos">
											
										</div>
									</div>
								</div>
							</div>
						</div>
					<!-- End Row -->

@endsection
@section('js')
<!-- Data tables js-->
<script src="{{URL::asset('assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/datatable.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
@endsection