<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title', 'Default')</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/chosen/chosen.css') }}">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">


</head>
<body>
	<div class="container">
		<!--NAVEGACION PARTIAL-->
		@include('layout._navbar')
		
	

			<!--CONTENIDO-->
			<div class="panel panel-primary">
	  			<div class="panel-heading">
	    			<h3 class="panel-title">@yield('title')</h3>
	  			</div>
	  			<div class="panel-body">
	  				@include('flash::message')
	  				@include('layout._errors')
	    			@yield('content')
	  			</div>
			</div>
		</div>

	

<script src="{{ asset('plugins/jquery/js/jquery.js') }}"></script>
<script src="{{ asset('plugins/datepicker/js/jquery-ui.js') }}"></script>
<script src="{{ asset('plugins/datepicker/js/ui.datepicker-es-MX.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('plugins/chosen/chosen.jquery.js') }}"></script>


@yield('js')

</body>
</html>