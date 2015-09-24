@extends('auth.template')

@section('content-form')
<form method="POST" action="{!! route('Password::email') !!}">
    {!! csrf_field() !!}

    <div class="row">
      <div class="large-12 columns">
        
        <label><strong>Ingrese su correo electrónico</strong>
            <input type="text" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required>
        </label>

      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        
        <p>Te haremos llegar un mensaje a tu correo con un enlace para restablecer tu contraseña. Si no lo ves en tu bandeja revisa en SPAM.</p>

      </div>
    </div>

    <div class="row">
        <div class="large-12 large-centered columns">
            <input type="submit" class="button expand" value="Enviarme el enlace"/>
        </div>
    </div>

</form>
@stop