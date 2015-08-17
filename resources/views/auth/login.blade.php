
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AlphaBeta  | Iniciar Sesión</title>
    {!! Html::style('css/normalize.css') !!}
    {!! Html::style('css/foundation.css') !!}
    {!! Html::style('css/font-awesome.css') !!}
    {!! Html::style('css/alertboxes.css') !!}
    {!! Html::style('css/custom-login.css') !!}
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
              <form method="POST" action="">
              {!! csrf_field() !!}
                <div class="row">
                  <div class="large-12 columns">
                    <input type="text" name="email" value="{{ old('email') }}" placeholder="Username o correo electrónico" />
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <input type="password" name="password" placeholder="Constraseña" />
                  </div>
                </div>
                <div class="row">
                  <div class="large-12 columns">
                    <input type="checkbox" name="remember" /> Recordarme
                  </div>
                </div>
                
              @if (Session::has('errors'))
                <div class="alert-box alert alert-dismissible" role="alert">
                  <h4>Oops! Algo salió mal</h4>

                  @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                  @endforeach
                </div>
              @endif
              @if (Session::has('status'))
                 <div class="alert-box info alert-dismissible" role="alert">
                  <a href="#" class="close">⊗</a>

                  <h4>Algo anda mal</h4>
                  <p>{{ Session::get('status') }}</p>
                </div>
              @endif  

                <div class="row">
                  <div class="large-12 large-centered columns">
                    <input type="submit" class="button expand" value="Iniciar Sesión"/>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    {!! Html::script('js/vendor/jquery.js') !!}
    {!! Html::script('js/foundation.min.js') !!}
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
