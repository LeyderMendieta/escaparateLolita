<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="Administración del Escaparate de Lolita" name="description">
		<meta content="Leyder Mendieta Paez" name="author">
		<meta name="keywords" content="admin, admin dashboard template, admin panel template, admin template, best bootstrap admin template, bootstrap 4 admin template, bootstrap 4 dashboard template, bootstrap admin template, bootstrap dashboard template, html admin template, html5 dashboard template, html5 admin template, modern admin template, simple admin template, template admin bootstrap 4"/>
		@include('admon.layouts.head')
	</head>

	<body class="dark-mode">
		<!--Global-Loader-->
		<div id="global-loader">
			<img src="{{URL::asset('assets/images/loader.svg')}}" alt="loader">
		</div>
		<div class="page">
			<div class="page-main">
				@include('admon.layouts.header')
				@include('admon.layouts.horizontal-menu')
                <!-- app-content-->
				<div class="container content-area">
					<div class="">
						@yield('page-header')
						@yield('content')
						@include('admon.layouts.right-sidebar')
				</div><!-- End app-content-->
            			@include('admon.layouts.footer')
				
			</div><!-- End page-main-->
		</div><!-- End Page -->
			@include('admon.layouts.footer-scripts')
	</body>
</html>