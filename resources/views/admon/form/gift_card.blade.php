@extends('admon.layouts.principal')

@section('titulo')
<title>{{($token_editing) == "" ? "Nueva" : "Actualizar"}} Gift Card - Administración Escaparate</title>
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
							<h1 class="page-title">{{($token_editing) == "" ? "Nueva" : "Actualizar"}}  Tarjeta de Regalo</h1>
						</div>
						<!-- End page-header -->
@endsection
@section('content')
						
							<input type="hidden" id="tokenEditing" value="{{$token_editing}}">
							<div class="row" id="App_Admon_Form_Gift_Card">
								
							</div>
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