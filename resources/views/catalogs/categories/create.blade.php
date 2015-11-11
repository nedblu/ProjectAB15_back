@extends('templates.main')

@section('title') Nueva categoría @stop

@section('content')

<ol class="breadcrumb">
	<li><a href="{{ route('Categories::index' ) }}">Administrador de Categorías</a></li>
	<li class="active">Nueva categoría</li>
</ol>

<h3>Nueva categoría</h3>

<hr class="divider">

@include('templates.partials.alerts')

<div class="row col-md-12">
	<form method="post" action="{{ route('Categories::store' ) }}" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
		<div class="col-md-6">
			<div class="form-group">
				<label for="name"><strong>Nombre de Categoría</strong></label>
				<input type="text" class="form-control" id="category_name" name="name" placeholder="Nombre de Categoría" value="{{ old('name') }}" required>
			</div>
			<div class="form-group">
				<label for="slug"><strong>Slug</strong></label>
				<input type="text" class="form-control" id="category_slug" name="slug" placeholder="slug" value="{{ old('slug') }}" required>
			</div>
			<div class="form-group">
				<label for="image"><strong>Imagen</strong></label>
				<input type="file" class="form-control" id="image" name="image">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label for="description"><strong>Descripción</strong></label>
				<textarea name="description" class="form-control" rows="3" required placeholder="Describe la categoría...">{{ old('description') }}</textarea>
			</div>

			<div class="form-group">
				<label for="parent"><strong>Padre</strong></label>
				<select name="parent" class="form-control" required aria-describedby="helpBlock">
					<option value="">- -</option>
					<option value="0">Principal</option>
					<option value="">-----------------------------</option>
					@forelse ($categories as $category)
					<option value="{{ $category->id }}">{{ $category->name }}</option>
					@empty

					@endforelse
				</select>
				<span id="helpBlock" class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>
			</div>

		</div>

		<div class="clearfix"></div>

		{!! csrf_field() !!}
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</button>
		<a href="{{ route('Categories::index' ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cancelar</a>
	</form>
</div>

@stop