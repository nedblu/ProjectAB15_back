<!doctype html>
<html class="no-js" lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>{{ env('SYSTEM_NAME','SYSTEM_NAME') }}  | Inicio de Sesión</title>

    {!! Html::style('assets/css/normalize.css') !!}
    {!! Html::style('https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css') !!}
    {!! Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css') !!}
    {!! Html::style('assets/css/app-login.css') !!}
    {!! Html::script('js/vendor/modernizr.js') !!}

  </head>
  <body>
  
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{ url('auth/login') }}">
            {!! Html::image('img/small-' . env('SYSTEM_LOGO','SYSTEM_LOGO'), env('SYSTEM_NAME','SYSTEM_NAME'), ['width' => 30, 'height' => 'auto']) !!}
          </a>
          <p class="navbar-text">{{ env('SYSTEM_NAME','SYSTEM_NAME') }}</p>
        </div>
      </div>
    </nav>

    <div class="row">
      @yield('content-form')
    </div>

    {!! Html::script('assets/js/vendor/jquery.js') !!}
    {!! Html::script('assets/js/vendor/jquery.cookie.js') !!}
    {!! Html::script('assets/js/vendor/fastclick.js') !!}
    {!! Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js') !!}

  </body>
</html>
