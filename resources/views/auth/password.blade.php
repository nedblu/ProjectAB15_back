@extends('auth.template')

@section('content-form')

<form method="post" action="{!! route('Password::email') !!}" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" class="form-password-remainder">
  
  <h1 class="form-signin-heading text-muted">{!! Html::image('img/' .env('SYSTEM_LOGO','SYSTEM_LOGO'), env('SYSTEM_NAME','SYSTEM_NAME'), ['id' => 'login-login']) !!}</h1>

  {!! csrf_field() !!}

  <div class="row">
    <div class="form-group">
      <label for="email">Ingrese su correo electrónico</label>
      <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required>
    </div>
  </div>

  <div class="row">
    <p class="bg bg-primary">Te haremos llegar un mensaje a tu correo con un enlace para restablecer tu contraseña. Si no lo ves en tu bandeja revisa en SPAM.</p>
  </div>

  <div class="row text-center">
      <button type="submit" class="btn btn-default"><i class="fa fa-paper-plane"></i> Enviarme el enlace</button>
  </div>

</form>
@stop