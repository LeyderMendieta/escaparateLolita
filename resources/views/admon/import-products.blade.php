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
                        @if(isset($data_response))
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Estado</th>
                                <th scope="col" colspan='2'>Resultado</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data_response ?? [] as $fila)
                                <tr>
                                    <th scope="row">{{$fila["product"]}}</th>
                                    <td class="bg-{{$fila['class']}} text-center" style="border: 1px solid black;vertical-align:middle">{{$fila["status"]}}</td>
                                    <td colspan='2'>{!! $fila["response"] !!}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="col-12 text-center p-5">
							<a href="{{ url('/' . $page='admon/import/products') }}"><button class="btn btn-success mx-auto"><i class="fe fe-upload"></i> Importar Más</button></a>
                        </div>
                        @endif

                        @if(empty($data_response))
                        <table class="table table-bordered">
                            <tr>
                                <td colspan="5" class="text-center">Orden del archivo plano como se debe cargar, debe ser igual para que cargue sin problemas <a href="{{ url('/' . $page='docs/plantilla_importar_productos.csv') }}"><span class="fe fe-download"></span> Descargar Plantilla</a></td>
                            </tr>
                            <tr>
                                <td>Nombre (Texto)</td>
                                <td>Descripción (Texto)</td>
                                <td>Precio Antes (Numero, acepta Decimales)</td>
                                <td>Precio Ahora (Numero, acepta Decimales)</td>
                                <td>Stock (Numero sin decimales)</td>
                            </tr>
                        </table>
                        <form class="form-horizontal" method="POST" action="{{ route('import_parse') }}" enctype="multipart/form-data">
                            @csrf
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
                                                        </div>
                                                        <div class="card-body">
                                                            <input type="file" class="dropify" accept=".csv" name="csv_file" required/>
                                                        </div>
                                                    </div>
                                                </div>                                            
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-12 col-md-12 mx-auto">
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            Tiene Encabezado el CSV
                                                            <div class="material-switch pull-right">
                                                                <input id="permite-header" name="header" type="checkbox" />
                                                                <label for="permite-header" class="label-success"></label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row text-center">
                                                <div class="col-md-12 pt-5">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary mx-auto">
                                                            Cargar Data CSV
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                
                        </form>
                        @endif

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

