@extends('templates.main')

@section('title') Administrador de Categorías @stop

@section('content')

<ol class="breadcrumb">
  <li class="active">Administrador de Categorías</li>
</ol>

<h3>Administrador de Categorías</h3>

<hr class="divider">

<div class="panel panel-default">
	<div class="panel-body">
		<strong>Descripción:</strong> Crea y administra las categorías para los productos.
	</div>
</div>

@include('templates.partials.alerts')

<div class="btn-group" role="group" aria-label="ad">
	<a href="{{ route('Categories::create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agrega nueva categoría</a> 
</div>

<div class="table-responsive">
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Slug</th>
				<th>Imagen</th>
				<th>Acciones</th>
				<th>Creación</th>
			</tr>
		</thead>
		<tbody>
		@foreach($categories as $category)
			<tr>
				<td><a href="{{ route('Categories::show', $category->id) }}"><i class="fa fa-tag"></i> {{ $category->name }}</a></td>
				<td>{{ $category->description }}</td>
				<td>{{ $category->slug }}</td>
				<td>
				@if($category->image !== null)
					<span class="label label-success">SI</span>
				@else
					<span class="label label-danger">NO</span>
				@endif
				</td>
				<td>
					@if($category->id === 1)
					<a href="{{ route('Categories::edit',  $category->id) }}" class="btn btn-primary btn-xs disabled"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
					@else
					<a href="{{ route('Categories::edit',  $category->id) }}" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
					@endif
				</td>
				<td><time datetime="{{ $category->created_at }}" title="{{ $category->created_at }}" class="updated_at">{{ $category->created_at }}</time></td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>

@stop