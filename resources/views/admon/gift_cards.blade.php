@extends('admon.layouts.principal')

@section('titulo')
<title>Gift Cards - Administración Escaparate</title>
@endsection

@section('css')
<!-- Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Tarjetas de Regalo</h1>							
							<p class="mx-5">Maximo 3 Tarjetas de Regalo</p>
							<div class="ml-auto">
								<div class="input-group">
									<a id="add_new_cardbtn" href="{{ url('/' . $page='admon/add/gift_card') }}" class="btn btn-info btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Agregar Nuevo">
										<span>
											<i class="fe fe-plus"></i>
										</span>
									</a>
									<a href="#" class="btn btn-danger btn-icon" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="¿Necesitas Ayuda?">
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
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div id="App_Admon_GiftCards">
											
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