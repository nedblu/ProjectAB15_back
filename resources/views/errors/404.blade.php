@extends('templates.partials.main')

@section('title') Not Found @stop

@section('content')

<h3 class="text-danger"><span class="glyphicon glyphicon-warning-sign" aria-hidden="true"></span> Página no encontrada <small>[Error 404]</small></h3>

<hr class="divider">

<div class="panel panel-default">
	<div class="panel-body">
		<span class="lead"><strong>Descripción</strong></span><br>
		Lo sentimos el recurso no ha sido encontrado en el servidor. Existen posibles causas de este error que pudieran ser el origen de ello:
		<ul>
			<li>La <strong>URL</strong> ha cambiado</li>
			<li>La <strong>URL</strong> no está escrita correctamente</li>
			<li>El <strong>recurso</strong> ha sido movido</li>
			<li>La <strong>URL</strong> se ha deshabilitado automáticamente *</li>
		</ul>
		Si crees que esto no es un problema descrito ateriormente, entonces no dudes en ponerte en contacto con los desarrolladores explicando el problema, explicando la <strong>acción</strong> que provocó este error.<br><br>

		<div class="well well-sm">
			<em>* Al entregar el sistema se le han asignado los parámetros correspondientes, cuando estos parámetros son sobrepasados, el sistema automáticamente protege los recursos y desactiva las rutas correspondientes.</em>
		</div>

		
	</div>
</div>


@stop