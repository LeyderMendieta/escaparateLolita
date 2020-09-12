<!doctype html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="IndoUi – Bootstrap 4 Admin Dashboard HTML Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="admin, admin dashboard template, admin panel template, admin template, best bootstrap admin template, bootstrap 4 admin template, bootstrap 4 dashboard template, bootstrap admin template, bootstrap dashboard template, html admin template, html5 dashboard template, html5 admin template, modern admin template, simple admin template, template admin bootstrap 4"/>
		@include('layouts.head')
	</head>

	<body class="dark-mode">
		<!--Global-Loader-->
		<div id="global-loader">
			<img src="{{URL::asset('assets/images/loader.svg')}}" alt="loader">
		</div>
		<div class="page">
			<div class="page-main">
				@include('layouts.header')
				@include('layouts.horizontal-menu')
                <!-- app-content-->
				<div class="container content-area">
					<div class="">
						@yield('page-header')
						@yield('content')
						@include('layouts.right-sidebar')
				</div><!-- End app-content-->
            			@include('layouts.footer')
				
			</div><!-- End page-main-->
		</div><!-- End Page -->
			@include('layouts.footer-scripts')	
	</body>
</html>