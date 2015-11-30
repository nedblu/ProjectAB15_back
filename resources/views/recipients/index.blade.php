@extends('templates.main')

@section('title') Destinatarios @stop

@section('extra-content')

	@include('templates.partials.modals-delete')

@stop

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
</div>

@role('admin|owner|moderator|editor')
    <div class="alert alert-warning" role="alert">
		Esta aplicación tiene un máximo de <strong>{{ $max }} correos</strong> para reenvío. (Recomendable)<br>
		<p class="lead"><strong>Usados:</strong> {{ $used }} | <strong>Restan:</strong> {{ $max - $used }}</p>
	</div>
@endrole

@if(count($recipients) > 0)
<div class="btn-group" role="group" aria-label="ad">
	<a href="{{ route('Recipients::create') }}" class="btn btn-primary {{ ($used == $max ) ? 'disabled' : null }}"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Nuevo Destinatario</a> 
</div>

<div class="table-responsive">
	<table class="table table-bordered table-hover table-striped">

		<thead>
			<tr>
				<th>Nombre</th>
				<th>Correo Electrónico</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
		@forelse ($recipients as $recipient)
			<tr>
				<td>{{ $recipient->name }}</td>
				<td>{{ $recipient->email }}</td>
				<td>

				<form action="{{ route('Recipients::destroy', $recipient->id) }}" accept-charset="UTF-8" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="off">
                    
                    {!! method_field('DELETE') !!}
                    {!! csrf_field() !!}

                    <button type="button" class="btn btn-danger btn-xs btn-animated" data-toggle="modal" data-target="#confirmDelete" data-title="Eliminar Destinatario" data-message="¿<strong>{{ Auth::user()->first_name }}</strong> estás seguro de eliminar a <strong>{{ $recipient->email }}</strong>?"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>

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

@else

<div class="col-md-12 row">
    <div class="text-center">
        <h3>Upsss! <i class="fa fa-frown-o"></i></h3>
        <p>Parece que no has agregado productos hasta el momento, ¿Te gustaría comenzar añadiendo uno?</p>
        <a href="{{ route('Recipients::create') }}" class="btn btn-primary btn-lg" role="button"><i class="fa fa-plane"></i> Empezar aquí</a>
    </div>
</div>
@endif

@stop