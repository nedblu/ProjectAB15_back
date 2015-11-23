@extends('templates.main')

@section('title') Recursos de Colores @stop

@section('extra-content')

	@include('templates.partials.modals-delete')

@stop

@section('content')

<ol class="breadcrumb">
  <li class="active">Recursos de Colores</li>
</ol>

<h3>Recursos de Colores</h3>

<hr class="divider">

@include('templates.partials.alerts')

<div class="panel panel-default">
	<div class="panel-body">
		<strong>Descripción:</strong> Administre los recursos de colores para asignar a cada producto.
	</div>
</div>

<div class="btn-group" role="group" aria-label="ad">
	<a href="{{ route('Colors::create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar un nuevo recurso</a> 
</div>

<div class="table-responsive">
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr>
				<th class="col-md-1">Color</th>
				<th>Nombre</th>
				<th>Código</th>
				<th>Acciones</th>
				<th>Creación</th>
			</tr>
		</thead>
		<tbody>
		@foreach($colors as $color)
			<tr>
				<td>{!! Html::image('assets/content_application/colors/' . $color->image, $color->name, ['class' => 'img-responsive img-circle','width' => 30, 'height' => 30, 'title' => $color->name]) !!}</td>
				<td>{{ $color->name }}</td>
				<td>{{ $color->code }}</td>
				<td>
				<form action="{{ route('Colors::destroy', $color->id) }}" class="pull-right" accept-charset="UTF-8" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="off">                        
			        {!! method_field('DELETE') !!}
			        {!! csrf_field() !!}
			        <button type="button" class="btn btn-danger btn-xs btn-animated" data-toggle="modal" data-target="#confirmDelete" data-title="Eliminación de Color" data-message="¿<strong>{{ Auth::user()->first_name }}</strong> estás seguro de eliminar el color <strong>{{ $color->name }}</strong>?"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
			        <a href="{{ route('Colors::edit',  $color->id) }}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
			    </form>
				</td>
				<td><time datetime="{{ $color->created_at }}" title="{{ $color->created_at }}" class="created_at">{{ $color->created_at }}</time></td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>

@stop