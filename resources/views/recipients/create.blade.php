@extends('templates.main')

@section('title') Crear nuevo destinatario @stop

@section('content')

<ol class="breadcrumb">
	<li><a href="{{ route('Recipients::index' ) }}">Destinatarios</a></li>
	<li class="active">Nuevo</li>
</ol>

<h3>Nuevo destinatario</h3>

<hr class="divider">

@include('templates.partials.alerts')

<form class="row col-md-6" method="post" action="{{ route('Recipients::store' ) }}" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off">
	
	<div class="form-group">
		<label for="name"><strong>Nombre</strong></label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}" required>
	</div>
	
	<div class="form-group">
		<label for="email"><strong>Correo Electrónico</strong></label>
		<input type="email" class="form-control" id="email"  name="email" placeholder="nombre@dominio.com" value="{{ old('email') }}" required>
	</div>

	{!! csrf_field() !!}

	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</button>
	<a href="{{ route('Recipients::index' ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cancelar</a>

</form>

@stop