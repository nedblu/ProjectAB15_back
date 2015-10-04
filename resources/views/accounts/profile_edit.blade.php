@extends('templates.main')

@section('title') Perfil @stop

@section('content')

<ol class="breadcrumb">
	<li><a href="{{ route('Accounts::index' ) }}">Cuentas</a></li>
	<li><a href="{{ route('Accounts::profile' ) }}">Perfil</a></li>
	<li class="active">Editar perfil</li>
</ol>

<h3>Editar perfil</h3>

<hr class="divider">

@include('templates.partials.alerts')

<div class="row col-md-12">

	<form class="row" action="{{ route('Accounts::profile_update') }}" accept-charset="UTF-8" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="off">
		
		{!! method_field('PUT') !!}
		
		<div class="col-md-6">

			<div class="form-group">
				<label for="first_name"><strong>Nombre</strong></label>
				<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nombre" value="{{ $profile->first_name }}" required>
			</div>

			<div class="form-group">
				<label for="last_name"><strong>Apellido</strong></label>
				<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos" value="{{ $profile->last_name }}" required>
			</div>

			<div class="form-group">
				<label for="email"><strong>Correo Electrónico</strong></label>
				<input type="email" class="form-control" id="email"  name="email" placeholder="nombre@dominio.com" value="{{ $profile->email }}" required>
			</div>
			
		</div>
		<div class="col-md-6">

			<h4>Cambio de contraseña</h4>

			<hr class="divider">

			<div class="form-group">
				<label for="password"><strong>Contraseña</strong></label>
				<input type="password" class="form-control" id="password"  name="password" placeholder="Cambiar contraseña" >
			</div>

			<div class="form-group">
				<label for="password_confirmation"><strong>Confirmar contraseña</strong></label>
				<input type="password" class="form-control" id="password_confirmation"  name="password_confirmation" placeholder="Confirmar contraseña" >
			</div>

			<div class="alert alert-info" role="alert">
				Escribe en los campos de contraseña, unicamente si deseas modificarla, de lo contrario sólo déjalos vacíos.
			</div>

			{!! csrf_field() !!}
			
		</div>

		<div class="col-md-12 text-center">
			<button type="submit" class="btn btn-primary btn-lg btn-animated"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Actualizar perfil</button>
			<a href="{{ route('Accounts::profile' ) }}" class="btn btn-danger btn-lg btn-animated"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cancelar</a>
		</div>
	</form>

</div>

@stop