@extends('layouts.master2')
@section('css')
@endsection
@section('content')
	    <!-- page -->
		<div class="page" style="display:none">

			<!-- page-content -->
			<div class="page-content">
				<div class="container text-center text-dark">
					<div class="display-2 mb-5"><span class=""><i class="{{$logo}}"></i></span> {{$titulo}}</div>
					<h1 class="h2  mb-5">{{$message}}</h1>
					<a class="btn btn-gradient-success mb-0" href="{{ url('/' . $page='home') }}">
						Regresar al Inicio
					</a>
				</div>
			</div>
			<!-- page-content end -->

		</div>
		<!-- page End-->
@endsection
@section('js')
@endsection

<script>
window.addEventListener("load",function(){
	var element = document.querySelector("body");
	element.classList.remove("dark-mode");

	var element2 = document.querySelector(".page");
	element2.style.display = "flex";
});


</script>