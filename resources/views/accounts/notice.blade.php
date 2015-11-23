@extends('templates.main')

@section('title') Publicar Aviso @stop

@section('content')

<ol class="breadcrumb">
  <li class="active">Publicar Aviso</li>
</ol>

<h3>Publicar Aviso</h3>

<hr class="divider">

<div class="col-md-12">
	
	<form class="row" action="{{ route('Accounts::update-notice') }}" accept-charset="UTF-8" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="off">
	
		{!! method_field('PUT') !!}

		<label for="body"><strong>Ingresa el mensaje: </strong></label>

	@if ($notice)

		
		@if($notice[0]->published)

			<textarea class="form-control" name="body" rows="3" required>{{ $notice[0]->body }}</textarea>

			<div class="radio">
				<label>
					<input type="radio" name="publish" value="1" checked>
					Publicar
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="publish" value="0">
					No Publicar
				</label>
			</div>

		@else

			<textarea class="form-control" name="body" rows="3" required disabled>{{ $notice[0]->body }}</textarea>

			<div class="radio">
				<label>
					<input type="radio" name="publish" value="1" >
					Publicar
				</label>
			</div>
			<div class="radio">
				<label>
					<input type="radio" name="publish" value="0" checked>
					No Publicar
				</label>
			</div>

		@endif
	@else

		<textarea class="form-control" name="body" rows="3" placeholder="Escribe aquí tu aviso" disabled></textarea>

		<div class="radio">
			<label>
				<input type="radio" class="radio-notice" name="publish" value=1 >
				Publicar
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" class="radio-notice" name="publish" value=0 checked>
				No Publicar
			</label>
		</div>

	@endif

		{!! csrf_field() !!}

		<button type="submit" class="btn btn-primary">Guardar Cambios</button>
	</form>

</div>

@stop