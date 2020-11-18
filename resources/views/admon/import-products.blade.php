@extends('admon.layouts.principal')

@section('titulo')
<title>Importar Productos - Administración Escaparate</title>
@endsection

@section('css')
<!--Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />
<!-- Time picker css-->
<link href="{{URL::asset('assets/plugins/time-picker/jquery.timepicker.css')}}" rel="stylesheet" />
<!-- Date Picker css-->
<link href="{{URL::asset('assets/plugins/date-picker/date-picker.css')}}" rel="stylesheet" />
<!-- File Uploads css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileuploads.css')}}" rel="stylesheet" type="text/css" />
<!--Mutipleselect css-->
<link rel="stylesheet" href="{{URL::asset('assets/plugins/multipleselect/multiple-select.css')}}">
@endsection
@section('page-header')
					    <!-- page-header -->
						<div class="page-header">
							<h1 class="page-title">Importar Productos</h1>
						</div>
						<!-- End page-header -->
@endsection
@section('content')
                        <!-- Row -->
                        <form class="form-horizontal" method="POST" action="{{ route('import_parse') }}" enctype="multipart/form-data">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header">
										<div>
											<h3 class="card-title">Cargar Archivo para importar</h3>
										</div>
									</div>
									<div class="card-body">
                                        
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-12 col-md-12 mx-auto">
                                                <div class="card shadow">
                                                    <div class="card-header">
                                                        <div>
                                                            <h3 class="card-title">Carga aqui el archivo plano</h3>
                                                        </div>
                                                        <div class="card-options">
                                                            <a href="" class="mr-4 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                                                <span class="fe fe-more-horizontal fs-20"></span>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                                <li><a href="#"><i class="fe fe-eye mr-2"></i>View</a></li>
                                                                <li><a href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a></li>
                                                                <li><a href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a></li>
                                                                <li><a href="#"><i class="fe fe-download-cloud mr-2"></i>Download</a></li>
                                                                <li><a href="#"><i class="fe fe-settings mr-2"></i>More</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <input type="file" class="dropify" accept=".csv" name="csv_file"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
                        </div>
                        <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Parse CSV
                                    </button>
                                </div>
                            </div>
                    </form>
						<!-- End Row -->

@endsection
@section('js')
<!-- File uploads js -->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileuploads.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileuploads-demo.js')}}"></script>
<!--Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
<!-- Timepicker js -->
<script src="{{URL::asset('assets/plugins/time-picker/jquery.timepicker.js')}}"></script>
<script src="{{URL::asset('assets/plugins/time-picker/toggles.min.js')}}"></script>
<!-- Datepicker js -->
<script src="{{URL::asset('assets/plugins/date-picker/date-picker.js')}}"></script>
<script src="{{URL::asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>
<script src="{{URL::asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>
<!--MutipleSelect js-->
<script src="{{URL::asset('assets/plugins/multipleselect/multiple-select.js')}}"></script>
<script src="{{URL::asset('assets/plugins/multipleselect/multi-select.js')}}"></script>
<!-- Elements js-->
<script src="{{URL::asset('assets/js/elements.js')}}"></script>
@endsection

