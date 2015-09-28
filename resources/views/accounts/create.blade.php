@extends('templates.main')

@section('title') Nueva cuenta @stop

@section('content')

<ol class="breadcrumb">
	<li><a href="{{ route('Accounts::index' ) }}">Cuentas</a></li>
	<li class="active">Nueva cuenta</li>
</ol>

<h3>Crear nueva cuenta</h3>

<hr class="divider">

@include('templates.partials.alerts')

<div class="row col-md-12">

	<form  class="row" method="post" action="{{ route('Accounts::store' ) }}" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off">
		<div class="col-md-6">
			<div class="form-group">
				<label for="first_name"><strong>Nombre</strong></label>
				<input tabindex="1" type="text" class="form-control" id="first_name" name="first_name" placeholder="Nombre" value="{{ old('first_name') }}" required>
			</div>
			<div class="form-group">
				<label for="email"><strong>Correo Electrónico</strong></label>
				<input tabindex="3" type="email" class="form-control" id="email"  name="email" placeholder="nombre@dominio.com" value="{{ old('email') }}" required>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="last_name"><strong>Apellidos</strong></label>
				<input tabindex="2" type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellidos" value="{{ old('last_name') }}" required>
			</div>
			<div class="form-group">
				<label for="type_account"><strong>Tipo de Cuenta</strong></label>

				<select tabindex="4" class="form-control" name="type_account" required>
					<option value="">-- Tipo de Cuenta --</option>
					@foreach($rolesAvailables as $role)
						<option value="{{ $role->id }}">{{ $role->name }}</option>
					@endforeach
				</select>
			</div>
			{!! csrf_field() !!}
		</div>
		<div class="col-md-12">
			<button tabindex="5" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Crear</button>
			<a href="{{ route('Accounts::index' ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cancelar</a>
		</div>
	</form>
</div>

<div class="col-md-12 bg-custom-grey">
	<p>
		<span class="lead">Tipos de Cuenta Disponibles</span><br>
		Las cuentas disponible para administrar el sistema se listan en el siguiente esquema:
		<dl class="dl-horizontal">
		@foreach($rolesAvailables as $role)
			<dt class="text-primary">{{ $role->name }}</dt> 
			<dd>{{ $role->description }}</dd>
		@endforeach
		</ul>
	</p>
</div>

@stop