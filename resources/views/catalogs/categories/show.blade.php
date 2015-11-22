@extends('templates.main')

@section('title') {{ $category->name }} @stop

@section('extra-content')
	@include('templates.partials.modals-delete')
@stop

@section('content')

<ol class="breadcrumb">
	<li><a href="{{ route('Categories::index' ) }}">Administrador de Categorías</a></li>
	<li class="active">{{ $category->name }}</li>
</ol>

<h3>{{ $category->name }}</h3>
<small>Creado por <strong>{{ $category->user->first_name . ' ' . $category->user->last_name }}</strong> <time datetime="{{ $category->created_at }}" title="@datetime($category->created_at)" id="created_at">{{ $category->created_at }}</time></small>

<hr class="divider">

<div class="row">
	<div class="col-md-4">
		<strong>Description:</strong>
		<p>{{ $category->description }}</p>
		<strong>Slug:</strong>
		<p>{{ $category->slug }}</p>

		@if($category->parent_id > 0)
			<strong>Categoría padre:</strong>
			<p>{{ $category->parent }}</p>
		@else
			<strong>Categoría Principal</strong>
		@endif
	</div>
	<div class="col-md-6">
		<p>
			<strong>Imágen</strong><br>
			@if($category->image === null)
				<img class="img-responsive img-rounded" src="http://placehold.it/200x200/A0D2F2/2980b9/?text=200x200" alt="{{ $category->name }}">
			@else
				{!! Html::image('assets/content_application/category-images/' . $category->image, $category->name, ['class' => 'img-responsive img-rounded']) !!}
			@endif
		</p>
	</div>
</div>
<div class="row">
	<div class="col-md-12 bg-custom-grey">
		<div class="page-header">
		  <h4><i class="fa fa-magic"></i> Eliminación de categoría</h4>
		</div>
		<p>
			Antes de eliminar una categoría debes saber que: al eliminarse la categoría, todos los productos se reasignaran a la etiqueta 'Sin categoría', que no estará visible para el usuario final. Posterior mente estos productos podrán ser reasignados.
			
			<form action="{{ route('Categories::destroy', $category->id) }}" accept-charset="UTF-8" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="off">
                
                {!! method_field('DELETE') !!}
                {!! csrf_field() !!}

                <button type="button" class="btn btn-danger btn-xs btn-animated" data-toggle="modal" data-target="#confirmDelete" data-title="Eliminar Destinatario" data-message="¿<strong>{{ Auth::user()->first_name }}</strong> estás seguro de eliminar a <strong>{{ $category->name }}</strong>?"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar Categoría</button>		            
            </form>		

		</p>
	</div>
</div>

@stop