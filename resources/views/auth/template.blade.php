
<!doctype html>
<html class="no-js" lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <title>AlphaBeta  | Iniciar Sesión</title>

    {!! Html::style('assets/css/normalize.css') !!}
    {!! Html::style('assets/css/foundation.min.css') !!}
    {!! Html::style('assets/css/font-awesome.min.css') !!}
    
    {!! Html::style( elixir('assets/css/app-login.css') ) !!}

    {!! Html::script('js/vendor/modernizr.js') !!}

  </head>
  <body>
    
    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="#">{!! Html::image('img/small-logo.png','AlphaBeta CMS') !!} AlphaBeta CMS</a></h1>
        </li>
      </ul>
    </nav>

    <div class="row">
      <div class="large-5 large-centered columns">
        <div class="login-box">
          <div class="row">
            <div class="large-12 columns">
              <div class="row logo-area">
                {!! Html::image('img/logo.png','AlphaBeta CMS', ['id' => 'login-login']) !!}
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
    {!! Html::script( elixir('assets/js/plugins.js') ) !!}
    {!! Html::script( elixir('assets/js/app.js') ) !!}

  </body>
</html>
