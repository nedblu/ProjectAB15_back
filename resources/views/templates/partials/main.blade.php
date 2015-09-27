<!doctype html>
<html class="no-js" lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<title>@yield('title')</title>

		{!! Html::style('assets/css/normalize.css') !!}
		{!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
		{!! Html::style('https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css') !!}
		{!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}
		{!! Html::style('assets/css/app.css') !!}

		{!! Html::script('assets/js/vendor/modernizr.js') !!}
	</head>
	<body>

		@include('templates.partials.nav')

		<div class="container-fluid main-container">

		@include('templates.partials.sidebar')

			<div class="col-md-10 content">

				@yield('breadcrumbs')

				@yield('content')

			</div>

			<footer class="pull-left footer">
				<p class="col-md-12">
					<hr class="divider">
					Copyright &COPY; 2015 <a href="{{ env('SYSTEM_URL') }}">{{ env('SYSTEM_NAME') }}</a>
				</p>
			</footer>

		</div>

		@yield('extra-content')
		
		{!! Html::script('//code.jquery.com/jquery-1.11.3.min.js') !!}
		{!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}
		{!! Html::script('assets/js/vendor/jquery.cookie.js') !!}
		{!! Html::script('assets/js/vendor/fastclick.js') !!}
		{!! Html::script('assets/js/plugins.js') !!}
		{!! Html::script('assets/js/app.js') !!}
	</body>
</html>
