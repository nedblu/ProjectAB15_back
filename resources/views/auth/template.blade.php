<!doctype html>
<html class="no-js" lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>{{ env('SYSTEM_NAME','SYSTEM_NAME') }}  | Inicio de Sesión</title>

    {!! Html::style('assets/css/normalize.css') !!}
    {!! Html::style('assets/css/foundation.min.css') !!}
    {!! Html::style('assets/css/font-awesome.min.css') !!}
    {!! Html::style('assets/css/app-login.css') !!}
    {!! Html::script('js/vendor/modernizr.js') !!}

  </head>
  <body>
    
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="{{ url('auth/login') }}">{!! Html::image('img/small-' . env('SYSTEM_LOGO','SYSTEM_LOGO'), env('SYSTEM_NAME','SYSTEM_NAME')) !!} {{ env('SYSTEM_NAME','SYSTEM_NAME') }}</a></h1>
        </li>
      </ul>
    </nav>

    <div class="row">
      <div class="large-5 large-centered columns">
        <div class="login-box">
          <div class="row">
            <div class="large-12 columns">
              <div class="row logo-area">
                {!! Html::image('img/' .env('SYSTEM_LOGO','SYSTEM_LOGO'), env('SYSTEM_NAME','SYSTEM_NAME'), ['id' => 'login-login']) !!}
              </div>
              
              @yield('content-form')

            </div>
          </div>
        </div>
      </div>
    </div>

    {!! Html::script('assets/js/vendor/jquery.js') !!}
    {!! Html::script('assets/js/vendor/jquery.cookie.js') !!}
    {!! Html::script('assets/js/vendor/fastclick.js') !!}
    {!! Html::script('assets/js/foundation.min.js') !!}
    {!! Html::script('assets/js/plugins.js') !!}
    {!! Html::script('assets/js/app.js') !!}

  </body>
</html>
