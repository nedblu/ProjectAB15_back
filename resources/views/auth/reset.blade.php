@extends('auth.template')

@section('content-form')

    <form method="POST" action="{!! route('Password::reset') !!}">
        {!! csrf_field() !!}
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="row">
            <div class="large-12 columns">

                <label><strong>Ingrese su correo electrónico</strong>
                    <input type="text" name="email" value="{{ old('email') }}" placeholder="Correo electrónico" required>
                </label>

            </div>
        </div>

        <div class="row">
            <div class="large-12 columns">

                <label><strong>Nueva contraseña</strong>
                    <input type="password" name="password" required>
                </label>

            </div>
        </div>

        <div class="row">
            <div class="large-12 columns">

                <label><strong>Confirmar contraseña</strong>
                    <input type="password" name="password_confirmation" required>
                </label>

            </div>
        </div>

        <div class="row">
            <div class="large-12 large-centered columns">
                <input type="submit" class="button expand" value="Restablecer Contraseña"/>
            </div>
        </div>
    </form>
@stop