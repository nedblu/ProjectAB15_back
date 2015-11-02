<!doctype html>
<html class="no-js" lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<title>@yield('title')</title>
		<link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
		<link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
		{!! Html::style('https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css') !!}
		{!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}

		<style>

			/* Layout */
			.error-box {
				margin-top: 20px;
			  font-size: 21px;
			  font-weight: 200;
			  line-height: 2.1428571435;
			  color: inherit;
			  padding: 10px 0px;
			  text-align: center;
			  background-color: transparent;
			}
		</style>
	</head>
	<body>

		<div class="container-fluid main-container">
			
			@yield('content')

			<footer class="pull-left footer">
				<p class="col-md-12">
					<hr class="divider">
					Copyright &COPY; 2015 <a href="{{ env('SYSTEM_URL') }}">{{ env('SYSTEM_NAME') }}</a>
				</p>
			</footer>

		</div>

		@yield('extra-content')
		
		@section('scripts')
        {!! Html::script('//code.jquery.com/jquery-1.11.3.min.js') !!}
		{!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}
        @show

        <script>
    		function getCurrentUrl() {
    			return document.location.href;
    		}
    </script>
		
	</body>
</html>
