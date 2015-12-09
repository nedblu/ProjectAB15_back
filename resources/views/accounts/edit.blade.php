@extends('templates.main')

@section('title') {{ $account->first_name . " " . $account->last_name  }} @stop

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ route('Accounts::index' ) }}">Cuentas</a></li>
    <li class="active">Editar cuenta</li>
</ol>

@if($account->active)
    <h3>{{ $account->first_name . " " . $account->last_name  }} <small>edición</small></h3>
@else
    <h3>{{ $account->first_name . " " . $account->last_name  }} <small>Cuenta temporalmente desactivada</small></h3>
@endif

<hr class="divider">

@include('templates.partials.alerts')

<div class="alert alert-info alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>¡Atención!</strong> únicamente es posible editar el tipo de cuenta, los datos personales del usuario que se muestran sólo son de carácter informativo, la edición de los datos de usuario sólo se hace única y exclusivamente por el usuario dueño de la cuenta.
</div>

<div class="row col-md-12">

    <form class="row" action="{{ route('Accounts::update', $account->id) }}" accept-charset="UTF-8" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="off">
        {!! method_field('PUT') !!}
        <div class="col-md-6">
            <div class="form-group">
                <label for="first_name"><strong>Nombre</strong></label>
                <input type="text" class="form-control" id="name" name="first_name" placeholder="Nombre" value="{{ $account->first_name }}" disabled>
            </div>

            <div class="form-group">
                <label for="email"><strong>Correo Electrónico</strong></label>
                <input type="email" class="form-control" id="email"  name="email" placeholder="nombre@dominio.com" value="{{ $account->email }}" disabled>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="last_name"><strong>Apellido</strong></label>
                <input type="text" class="form-control" id="name" name="last_name" placeholder="Apellido" value="{{ $account->last_name }}" disabled>
            </div>
            <div class="form-group">
                <label for="type_account"><strong>Tipo de Cuenta</strong></label>

                <select class="form-control" name="type_account" required>
                    <option value="">-- Tipo de Cuenta --</option>
                    @foreach($rolesAvailables as $role)
                        @if( $role->id == $account->roles[0]->id)
                            <option value="{{ $role->id }}" selected>{{ $role->name }}</option>
                        @else
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            {!! csrf_field() !!}
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-animated"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Actualizar cuenta</button>
            <a href="{{ route('Accounts::index' ) }}" class="btn btn-danger btn-animated"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cancelar</a>
        </div>
    </form>

    <hr class="divider clearfix">

</div>

<div class="col-md-12 bg-custom-grey">
    <div class="page-header">
      <h4><i class="fa fa-exclamation-circle"></i> Activar o Desactivar cuenta</h4>
    </div>
    <p>
        Aquí es posible desactivar la cuenta del usuario, por lo cual, ya no podrá ingresar al sistema, y si se encuentra conectado su sesión se destruirá.<br>
        <form action="{{ route('Accounts::activation', $account->id) }}" accept-charset="UTF-8" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="off">
            {!! method_field('PUT') !!}
            {!! csrf_field() !!}
            @if($account->active)
                <button type="sumbit" class="btn btn-danger btn-animated"><i class="fa fa-lock"></i> Desactivar cuenta temporalmente</button>
            @else
                <button type="sumbit" class="btn btn-success btn-animated"><i class="fa fa-unlock"></i> Activar cuenta</button>
            @endif
        </form>
    </p>
</div>

<div class="col-md-12 bg-custom-grey">
    <div class="page-header">
      <h4><i class="fa fa-magic"></i> Restablecer Contraseña</h4>
    </div>
    <p>
        Use este botón si el usuario ha tenido problemas con el correo de activación de la cuenta que se envía automáticamente al crearlo.<br>La contraseña se restablecerá a: <strong>Password123@</strong><br>

        <form action="{{ route('Accounts::reset', $account->id) }}" accept-charset="UTF-8" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="off">
            {!! method_field('PUT') !!}
            {!! csrf_field() !!}

            <button type="sumbit" class="btn btn-primary btn-animated"><i class="fa fa-unlock-alt"></i> Restablecer contraseña</button>

        </form>
    </p>
</div>


@stop