
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<title>@yield('title')</title>

		{!! Html::style('assets/css/normalize.css') !!}
		{!! Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
		{!! Html::style('https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/paper/bootstrap.min.css') !!}
		{!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}
		{!! Html::style('assets/css/app.css') !!}

		{!! Html::script('js/vendor/modernizr.js') !!}
	</head>
	<body>

		@include('templates.partials.nav')

		<div class="container-fluid main-container">

		@include('templates.partials.sidebar')

			<div class="col-md-10 content">

				@yield('content')

			</div>

			<footer class="pull-left footer">
				<p class="col-md-12">
					<hr class="divider">
					Copyright &COPY; 2015 <a href="http://www.pingpong-labs.com">AlphaBeta CMS</a>
				</p>
			</footer>

		</div>
		
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script>
			$(function () {
				$('.navbar-toggle-sidebar').click(function () {
					$('.navbar-nav').toggleClass('slide-in');
					$('.side-body').toggleClass('body-slide-in');
					$('#search').removeClass('in').addClass('collapse').slideUp(200);
				});

				$('#search-trigger').click(function () {
					$('.navbar-nav').removeClass('slide-in');
					$('.side-body').removeClass('body-slide-in');
					$('.search-input').focus();
				});
			});
		</script>
	</body>
</html>
