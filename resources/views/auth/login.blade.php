@extends('auth.template')

@section('content-form')

  <form method="post" action="{{ route('Auth::login') }}" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" class="form-signin">
    
    <h1 class="form-signin-heading text-muted">{!! Html::image('img/' .env('SYSTEM_LOGO','SYSTEM_LOGO'), env('SYSTEM_NAME','SYSTEM_NAME'), ['id' => 'login-login']) !!}</h1>

    {!! csrf_field() !!}

    @if (Session::has('errors'))
      <div class="row">
        <div class="alert alert-danger alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong>Oops!</strong> Algo salió mal, por favor revisa los siguientes errores:<br>
          <ul class="list">
          @foreach ($errors->all() as $error)
            <li><small>{{ $error }}</small></li>
          @endforeach
          </ul>
        </div>
      </div>
    @endif

    <div class="row">
      @if(Input::get('email'))
      <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" class="form-control" name="email" value="{{ Input::get('email') }}" placeholder="Correo electrónico" required>
      </div>
      @else
      <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required>
      </div>
      @endif
    </div>

    <div class="row">
      <div class="form-group">
        <label for="password">Constraseña</label>
        <input type="password" name="password" class="form-control" placeholder="Constraseña" required>
      </div>
    </div>

    <div class="row">
      <div class="checkbox">
        <label>
          <input type="checkbox" name="remember"> Recordarme
        </label>
        | {!! Html::link(route('Password::index'),'Olvidé mi contraseña') !!}
      </div>
    </div>
    
    <div class="row text-center">

      <button type="submit" name="login" class="btn btn-default"><i class="fa fa-key"></i> Iniciar Sesión</button>

    </div>

  </form>

@stop