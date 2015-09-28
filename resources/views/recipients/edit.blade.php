@extends('templates.main')

@section('title') Editar destinatario @stop

@section('content')

<ol class="breadcrumb">
	<li><a href="{{ route('Recipients::index' ) }}">Destinatarios</a></li>
	<li class="active">Edición</li>
</ol>

<h3>Editando destinatario</h3>

<hr class="divider">

@include('templates.partials.alerts')

<form class="row col-md-6" action="{{ route('Recipients::update', $recipient->id) }}" accept-charset="UTF-8" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="off">

	{!! method_field('PUT') !!}
	
	<div class="form-group">
		<label for="name"><strong>Nombre</strong></label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ $recipient->name }}" required>
	</div>
	
	<div class="form-group">
		<label for="email"><strong>Correo Electrónico</strong></label>
		<input type="email" class="form-control" id="email"  name="email" placeholder="nombre@dominio.com" value="{{ $recipient->email }}" required>
	</div>

	{!! csrf_field() !!}

	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Finalizar edición</button>
	<a href="{{ route('Recipients::index' ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Regresar</a>

</form>

@stop