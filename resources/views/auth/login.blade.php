@extends('auth.template')

@section('content-form')
  <form method="post" action="{{ route('Auth::login') }}" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off">

  {!! csrf_field() !!}

    <div class="row">
      <div class="large-12 columns">
        <input type="text" name="email" value="{{ old('email') }}" placeholder="Correo electrónico">
      </div>
    </div>
    <div class="row">
      <div class="large-12 columns">
        <input type="password" name="password" placeholder="Constraseña">
      </div>
    </div>
    <div class="row">
      <div class="large-6 columns">
        <input type="checkbox" name="remember" /> Recordarme
      </div>
      <div class="large-6 columns">
         {!! Html::link(route('Password::index'),'Olvidé mi contraseña') !!}
      </div>
    </div>

  @if ( Session::has('errors') )
    <div class="alert-box alert alert-dismissible alert-custom" role="alert">
      <h5>Oops! Algo salió mal</h5>
        <ul class="no-bullet">
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
        </ul>
      
    </div>
  @endif
    <div class="row">
      <div class="large-12 large-centered columns">
        <input type="submit" class="button expand" value="Iniciar Sesión"/>
      </div>
    </div>
  </form>
@stop