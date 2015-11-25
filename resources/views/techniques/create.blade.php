@extends('templates.main')

@section('title') Crear nuevo destinatario @stop

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ route('Techniques::index' ) }}">Técnicas</a></li>
  <li class="active">Nueva entrada</li>
</ol>

<h3>Nueva entrada</h3>

<hr class="divider">

@include('templates.partials.alerts')

<form class="form" method="post" action="{{ route('Techniques::store' ) }}" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
	
	<div class="col-md-6">

		<div class="form-group">
			<label for="title"><strong>Título</strong></label>
			<input type="text" tabindex="1" class="form-control" id="title" name="title" placeholder="Título de la técnica" value="{{ old('title') }}" required>
		</div>

		<div class="form-group">
			<label for="image"><strong>Imagen</strong></label>
			<input type="file" tabindex="3" class="form-control" id="image" accept="image/*" name="image" value="{{ old('image') }}" required>
		</div>
		
	</div>

	<div class="col-md-6">

		<div class="form-group">
			<label for="about"><strong>Acerca de</strong></label>
			<textarea name="about" tabindex="2" class="form-control" placeholder="Escribe acerca de la técnica..." rows="5" required></textarea>
		</div>
		
	</div>

	<div class="col-md-12">

		<div class="form-group">
			<label for="detail"><strong>Detalle</strong></label>
			<textarea name="detail" tabindex="4" class="form-control" required></textarea>
		</div>

	</div>

	{!! csrf_field() !!}

	<div class="clearfix"></div>
	<hr class="divider">

	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</button>
	<a href="{{ route('Techniques::index' ) }}" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cancelar</a>
	
</form>

@stop

@section('scripts')
	@parent

	{!! Html::script('//cdn.ckeditor.com/4.5.4/full/ckeditor.js') !!}

  	<script>
	    CKEDITOR.replace( 'detail', {
			language: 'es',
		    uiColor: '#EDEDED',
		    toolbar: [
		        {name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
		        {name: 'editing', items: ['Find','Replace','-','SelectAll','-','Scayt'] },
		        {name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
		        {name: 'insert', items: ['Table', 'HorizontalRule', 'SpecialChar'] },
		        {name: 'tools', items: ['Maximize'] },
		        {name: 'document', items: ['Source', 'NewPage'] },
		        '/',
		        {name: 'basicstyles', items: ['Bold', 'Italic', 'Strike', '-', 'RemoveFormat'] },
		        {name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
		        //{ name: 'styles', items: ['Styles', 'Format'] },
		        {name: 'styles', items: ['Format'] }
		    ]
		});
    </script>
@endsection