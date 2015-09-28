@extends('templates.main')

@section('title') No autorizado @stop

@section('content')

<h3 class="text-danger"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Acceso restringido <small>[Error 403]</small></h3>

<hr class="divider">

<div class="panel panel-default">
	<div class="panel-body">
		<span class="lead"><strong>No tienes permisos o nivel suficiente para acceder aquí</strong></span><br>

		Para poder acceder a este recurso es necesario que pidas a tu administrador que te otorgue los permisos suficientes.
		
	</div>
</div>


@stop