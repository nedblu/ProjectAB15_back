@extends('templates.partials.main')

@section('title') Destinatarios @stop

@section('content')

<ol class="breadcrumb">
  <li class="active">Destinatarios</li>
</ol>

<h3>Destinatarios</h3>

<hr class="divider">

<div class="panel panel-default">
	<div class="panel-body">
		<strong>Descripción:</strong> Aplicación para el direccionamiento de los mensajes que provienen del formulario de contacto.
	</div>
	<div class="alert alert-warning" role="alert">
		Esta aplicación tiene un máximo de <strong>{{ $max }} correos</strong> para reenvío. (Recomendable)<br>
		<p class="lead"><strong>Usados:</strong> {{ $used }} | <strong>Restan:</strong> {{ $max - $used }}</p>
	</div>
</div>

<div class="btn-group" role="group" aria-label="ad">
	<a href="{{ route('Recipients::create') }}" class="btn btn-primary {{ ($used == $max ) ? 'disabled' : null }}"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Nuevo Destinatario</a> 
</div>

<div class="table-responsive">
	<table class="table  table-bordered table-hover table-condensed">

		<thead>
			<tr>
				<th class="col-md-5">Nombre</th>
				<th class="col-md-5">Correo Electrónico</th>
				<th class="col-md-2">Acciones</th>
			</tr>
		</thead>
		<tbody>
		@forelse ($recipients as $recipient)
			<tr>
				<td>{{ $recipient->name }}</td>
				<td>{{ $recipient->email }}</td>
				<td>

				<form class="row col-md-6" action="{{ route('Recipients::destroy', $recipient->id) }}" accept-charset="UTF-8" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="off">
                    
                    {!! method_field('DELETE') !!}
                    {!! csrf_field() !!}

                    <button type="submit" class="btn btn-danger btn-xs btn-animated"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>

                    <a href="{{ route('Recipients::edit', $recipient->id) }}" class="btn btn-primary btn-xs btn-animated"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
                    
                </form>

				</td>
			</tr>
		@empty
			<tr>
				<td class="text-center" colspan="3">Ningún destinatario ha sido agregado.</td>
			</tr>
		@endforelse
		</tbody>

	</table>
</div>

@stop