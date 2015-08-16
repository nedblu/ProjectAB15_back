
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AlphaBeta  | Iniciar Sesión</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/custom-login.css" />
    <script src="js/vendor/modernizr.js"></script>
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
              <form>
                <div class="row">
                  <div class="large-12 columns">
                    <input type="text" name="username" placeholder="Username o correo electrónico" />
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

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
