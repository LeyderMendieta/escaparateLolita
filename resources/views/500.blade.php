@extends('layouts.master2')
@section('css')
@endsection
@section('content')
		<!-- page -->
		<div class="page">

			<!-- page-content -->
			<div class="page-content">
				<div class="container text-center text-dark">
					<div class="display-2 mb-5"><span class=""><i class="fa fa-frown-o mr-1"></i></span>ops!</div>
					<h1 class="h2  mb-5">Error 500: Internal Server Error</h1>
					<a class="btn btn-primary mb-0" href="{{ url('/' . $page='index') }}">
						Back To Home
					</a>
				</div>
			</div>
			<!-- page-content end -->

		</div>
		<!-- page End-->
@endsection
@section('js')
@endsection