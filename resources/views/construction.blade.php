@extends('layouts.master2')
@section('css')
<!--Coutdown css-->
<link href="{{URL::asset('assets/plugins/jquery-countdown/countdown.css')}}" rel="stylesheet" />
@endsection
@section('content')
	    <!-- page -->
		<div class="page">

			<!-- page-content -->
			<div class="page-content">
				<div class="container text-center text-dark">
					<div class="construction1">
						<div class="text-dark">
							<div class="card-body ">
								<h2 class="mb-4 number-font display-4">Comming Soon</h2>
								<h4 class="mt-5 text-dark">Our Website is under construction, follows us for more updates !</h4>
								<div id="launch_date1"></div>
								<div class="mt-3 btn-list">
									<button type="button" class="btn btn-icon btn-facebook"><i class="fa fa-facebook"></i></button>
									<button type="button" class="btn btn-icon btn-google"><i class="fa fa-google"></i></button>
									<button type="button" class="btn btn-icon btn-twitter"><i class="fa fa-twitter"></i></button>
									<button type="button" class="btn btn-icon btn-dribbble"><i class="fa fa-dribbble"></i></button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- page End-->
@endsection
@section('js')
<!-- Coutdown js-->
<script src="{{URL::asset('assets/plugins/jquery-countdown/countdown.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-countdown/jquery.plugin.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery-countdown/jquery.countdown.js')}}"></script>
@endsection