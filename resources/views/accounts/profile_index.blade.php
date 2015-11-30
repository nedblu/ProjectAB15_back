@extends('templates.main')

@section('title') Perfil @stop

@section('content')

<ol class="breadcrumb">
	@role('support|owner|admin')
    <li><a href="{{ route('Accounts::index' ) }}">Cuentas</a></li>
	@endrole
	
	@if($flag)
		<li class="active">Perfil de {{ $profile->first_name . ' ' . $profile->last_name }}</li>
	@else
		<li class="active">Mi Perfil</li>
	@endif
</ol>

@if($flag)
	<h3>Perfil de {{ $profile->first_name . ' ' . $profile->last_name }}</h3>
@else
	<h3>Mi perfil</h3>
@endif

<hr class="divider">

@include('templates.partials.alerts')

<div class="panel panel-primary">
	
	<div class="panel-heading">
		<strong>Perfil</strong>
		@if($flag)
			<span class="pull-right"><a class="btn btn-default btn-xs" href="{{ route('Accounts::edit',$profile->id) }}" role="button"><i class="fa fa-pencil-square-o"></i> Cambiar tipo cuenta</a></span>
		@else
			<span class="pull-right"><a class="btn btn-default btn-xs" href="{{ route('Profile::edit') }}" role="button"><i class="fa fa-pencil-square-o"></i> Editar perfil</a></span>
		@endif
	</div>

	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<tbody>
				<tr>
					<td class="col-md-2"><strong><i class="fa fa-user"></i> Nombre completo</strong></td>
					<td>{{ $profile->first_name . ' ' . $profile->last_name }}</td>
				</tr>
				<tr>
					<td class="col-md-2"><strong><i class="fa fa-at"></i> Usuario</strong></td>
					<td>{{ $profile->username }}</td>
				</tr>
				<tr>
					<td class="col-md-2"><strong><i class="fa fa-envelope"></i> Correo Electrónico</strong></td>
					<td>{{ $profile->email }}</td>
				</tr>
				<tr>
					<td class="col-md-2"><strong><i class="fa fa-shield"></i> Tipo de Cuenta</strong></td>
					<td>
						<a tabindex="0" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="{{ $profile->roles[0]->name }}" data-content="{{ $profile->roles[0]->description }}">{{ $profile->roles[0]->name }} <i class="fa fa-question-circle"></i></a>
					</td>
				</tr>
				<tr>
					<td class="col-md-2"><strong><i class="fa fa-power-off"></i> Última sesión</strong></td>
					<td>
						@if($profile->last_login)
							<time datetime="{{ $profile->last_login }}" title="{{ $profile->last_login }}" class="updated_at">{{ $profile->last_login }}</time>
						@else
							<span class="label label-warning">No dispnible</span>
						@endif
					</td>
				</tr>
				<tr>
					<td class="col-md-2"><strong><i class="fa fa-pencil-square-o"></i> Última modificación</strong></td>
					<td>
						@if($profile->updated_at)
							<time datetime="{{ $profile->updated_at }}" title="{{ $profile->updated_at }}" class="updated_at">{{ $profile->updated_at }}</time>
						@else
							<span class="label label-warning">No dispnible</span>
						@endif
					</td>
				</tr>
				<tr>
					<td class="col-md-2"><strong><i class="fa fa-desktop"></i> Dirección IP</strong></td>
					<td>
						@if($profile->ip_address !== null)
							@ip($profile->ip_address)
						@else
							<span class="label label-warning">No disponible</span>
						@endif
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<div class="panel-footer">{{ env('SYSTEM_COMPANY','SYSTEM_COMPANY') }}</div>
	
</div>


@stop