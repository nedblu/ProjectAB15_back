<!doctype html>
<html class="no-js" lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<title>@yield('title')</title>
		<link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
		<link rel="icon" href="{{ asset('/favicon.ico') }}" type="image/x-icon">
		{!! Html::style('assets/css/normalize.css') !!}
		{!! Html::style('https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css') !!}
		{!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}
		{!! Html::style('assets/css/vendor/flexslider.css') !!}
		{!! Html::style('assets/js/vendor/fancybox/jquery.fancybox.css') !!}
		{!! Html::style('assets/css/app.css') !!}
		{!! Html::script('assets/js/vendor/modernizr.js') !!}
	</head>
	<body>
		@if ( DB::table('notices')->where('id',1)->where('published',1)->count() )
			<div class="alert alert-notice" role="alert">
				<span><i class="fa fa-bullhorn"></i>&nbsp;&nbsp;Aviso:</span> {{ DB::table('notices')->where('id',1)->where('published',1)->get()[0]->body }}
			</div>
		@endif

		@include('templates.partials.nav')
		
		<div class="container-fluid main-container">

		@include('templates.partials.sidebar')

			<div class="col-md-10 content">

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
		
		@section('scripts')
        {!! Html::script('//code.jquery.com/jquery-1.11.3.min.js') !!}
		{!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}
		{!! Html::script('assets/js/vendor/jquery.cookie.js') !!}
		{!! Html::script('assets/js/vendor/fastclick.js') !!}
		{!! Html::script('assets/js/vendor/jquery.flexslider.js') !!}
		{!! Html::script('assets/js/vendor/dropzone.js') !!}
		{!! Html::script('assets/js/vendor/moment.min.js') !!}
		{!! Html::script('assets/js/vendor/moment-with-locales.min.js') !!}
		{!! Html::script('//cdn.jsdelivr.net/sortable/latest/Sortable.min.js') !!}
		{!! Html::script('assets/js/vendor/fancybox/jquery.fancybox.pack.js') !!}
		{!! Html::script('//cdn.jsdelivr.net/jquery.dirtyforms/2.0.0-beta00005/jquery.dirtyforms.min.js') !!}
		{!! Html::script('assets/js/plugins.js') !!}
		{!! Html::script('assets/js/app.js') !!}
        @show
		
	</body>
</html>
