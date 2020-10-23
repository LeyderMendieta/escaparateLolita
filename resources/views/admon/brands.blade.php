@extends('admon.layouts.principal')

@section('titulo')
<title>Brands - Administración Escaparate</title>
@endsection

@section('css')
<!-- Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/responsivebootstrap4.min.css')}}" rel="stylesheet" />
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Brands</h1>
							<div class="ml-auto">
								<div class="input-group">
									<a href="#" class="btn btn-info btn-icon mr-2" data-toggle="tooltip" title="" data-placement="bottom" data-original-title="Agregar Nuevo">
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
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
@endsection
@section('js')
<!-- Data tables js-->
<script src="{{URL::asset('assets/plugins/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/datatable.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
@endsection