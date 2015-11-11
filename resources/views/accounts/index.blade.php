@extends('templates.main')

@section('title') Cuentas @stop

@section('extra-content')
	@include('templates.partials.modals-delete')
@stop

@section('content')

<ol class="breadcrumb">
  <li class="active">Cuentas</li>
</ol>

<h3>Administración de Cuentas</h3>

<hr class="divider">

@if (Auth::user()->is('admin'))

	<div class="panel panel-default">
		<div class="panel-body">
			<strong>Descripción:</strong> Aplicación para el direccionamiento de los mensajes que provienen del formulario de contacto.
		</div>
	</div>

	<div class="alert alert-warning" role="alert">
		El sistema tiene un máximo de <strong>{{ $max }} usuarios</strong> para agregar. (Recomendable)<br>
		<p class="lead"><strong>Usados:</strong> {{ $used }} | <strong>Restan:</strong> {{ $max - $used }}</p>
	</div>

	<div class="btn-group" role="group" aria-label="ad">
		<a href="{{ route('Accounts::create') }}" class="btn btn-primary {{ ($used == $max ) ? 'disabled' : null }}"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Nueva cuenta</a> 
	</div>

@elseif (Auth::user()->is('support'))
	<div class="btn-group" role="group" aria-label="ad">
		<a href="{{ route('Accounts::create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Nueva cuenta</a> 
	</div>
@endif

	<div class="table-responsive">
		<table class="table table-bordered table-hover table-condensed">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>UserName</th>
					<th>Tipo</th>
					<th>Correo Electrónico</th>
					<th>Activado</th>
					<th>IP</th>
					<th>Última Sesión</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
			@forelse ($accounts as $account)
				<tr>
					<td><a href="{{ route('Profile::index',$account->id) }}" title="{{ $account->first_name . ' ' . $account->last_name }}">{{ $account->first_name . ' ' . $account->last_name }}</a></td>
					<td>{{ $account->username }}</td>
					<td>{{ $account->role }}</td>
					<td>{{ $account->email }}</td>
					<td>
						@if($account->active)
							<span class="label label-success">Si</span>
						@else
							<span class="label label-danger">No</span>
						@endif
					</td>
					<td>
						@if($account->ip_address !== null)
							@ip($account->ip_address)
						@else
							<span class="label label-warning">No disponible</span>
						@endif
					</td>
					<td>
						@if($account->last_login)
							@datetime($account->last_login)
						@else
							<span class="label label-warning">No ha iniciado sesión</span>
						@endif
					</td>
					<td>
						<form action="{{ route('Accounts::destroy', $account->id) }}" accept-charset="UTF-8" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="off">
		                    
		                    {!! method_field('DELETE') !!}
		                    {!! csrf_field() !!}

		                    <button type="button" class="btn btn-danger btn-xs btn-animated" data-toggle="modal" data-target="#confirmDelete" data-title="Eliminar Destinatario" data-message="¿<strong>{{ Auth::user()->first_name }}</strong> estás seguro de eliminar a <strong>{{ $account->email }}</strong>?"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>

		                    <a href="{{ route('Accounts::edit', $account->id) }}" class="btn btn-primary btn-xs btn-animated"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
		            
		                </form>
					</td>
				</tr>
			@empty
				<tr>
					<td class="text-center" colspan="3">Ningún usuario ha sido agregado.</td>
				</tr>
			@endforelse
			</tbody>

		</table>
	</div>

@stop