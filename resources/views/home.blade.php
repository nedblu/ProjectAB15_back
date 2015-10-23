@extends('templates.main')

@section('title') 
Bienvenido
@stop


@section('content')
<div class="page-header">
  <h1>Bienvenido {{ Auth::user()->first_name }}</h1>
</div>
<p>
	Hola {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}, bienvenido a <strong>{{ env('SYSTEM_NAME', 'SYSTEM_NAME') }}</strong>, sistema adquirido por <strong>{{ env('SYSTEM_COMPANY','SYSTEM_COMPANY') }}</strong> donde encontrarás todas las funciones relacionadas con la gestión del <a href="{{ env('SYSTEM_URL') }}" class="link">sitio web</a>, se cuidadoso con cada cambio que realices.
</p>
<div class="panel panel-primary">
	
	<div class="panel-heading">
		<strong>Perfil</strong> <span class="pull-right"><a class="btn btn-default btn-xs" href="{{ route('Profile::edit') }}" role="button"><i class="fa fa-pencil-square-o"></i> Editar perfil</a></span>
	</div>

	<div class="table-responsive">
		<table class="table table-hover table-bordered">
			<tbody>
				<tr>
					<td class="col-md-2"><strong><i class="fa fa-user"></i> Nombre completo</strong></td>
					<td>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}</td>
				</tr>
				<tr>
					<td class="col-md-2"><strong><i class="fa fa-at"></i> Username</strong></td>
					<td>{{ Auth::user()->username }}</td>
				</tr>
				<tr>
					<td class="col-md-2"><strong><i class="fa fa-envelope"></i> Correo Electrónico</strong></td>
					<td>{{ Auth::user()->email }}</td>
				</tr>
				<tr>
					<td class="col-md-2"><strong><i class="fa fa-shield"></i> Tipo de Cuenta</strong></td>
					<td>
						<a tabindex="0" role="button" data-toggle="popover" data-placement="top" data-trigger="focus" title="{{ Auth::user()->roles[0]->name }}" data-content="{{ Auth::user()->roles[0]->description }}">{{ Auth::user()->roles[0]->name }} <i class="fa fa-question-circle"></i></a>
					</td>
				</tr>
				<tr>
					<td class="col-md-2"><strong><i class="fa fa-power-off"></i> Última sesión</strong></td>
					<td>
						@if(Auth::user()->last_login)
							@datetime(Auth::user()->last_login)
						@else
							<span class="label label-warning">No dispnible</span>
						@endif
					</td>
				</tr>
				<tr>
					<td class="col-md-2"><strong><i class="fa fa-pencil-square-o"></i> Última modificación</strong></td>
					<td>
						@if(Auth::user()->updated_at)
							@datetime(Auth::user()->updated_at)
						@else
							<span class="label label-warning">No dispnible</span>
						@endif
					</td>
				</tr>
				<tr>
					<td class="col-md-2"><strong><i class="fa fa-desktop"></i> Dirección IP</strong></td>
					<td>
						@if(Auth::user()->ip_address !== null)
							@ip(Auth::user()->ip_address)
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
