@extends('auth.template')

@section('content-form')

    <form method="post" action="{!! route('Password::reset') !!}" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" class="form-password-remainder">

        <h1 class="form-signin-heading text-muted">{!! Html::image('img/' .env('SYSTEM_LOGO','SYSTEM_LOGO'), env('SYSTEM_NAME','SYSTEM_NAME'), ['id' => 'login-login']) !!}</h1>

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

        <input type="hidden" name="token" value="{{ $token }}">

        {!! csrf_field() !!}

        <div class="row">
            <div class="form-group">
              <label for="email">Ingrese su correo electrónico</label>
              <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="password">Nueva contraseña</label>
                <input type="password" name="password" class="form-control" placeholder="Nueva contraseña" required>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <label for="password">Confirmar contraseña</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña" required>
            </div>
        </div>
        
        <div class="row">
            <button type="submit" class="btn btn-primary"><i class="fa fa-key"></i> Restablecer Contraseña</button>
        </div>
    </form>
@stop