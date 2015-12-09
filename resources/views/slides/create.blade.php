@extends('templates.main')

@section('title') Nuevo slider @stop

@section('extra-content')
	@include('templates.partials.modals-delete')
@stop

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ route('Slides::index' ) }}">Slideshow Manager</a></li>
  <li class="active">Nuevo slider</li>
</ol>

<h3>Nuevo slider</h3>

<hr class="divider">

@include('templates.partials.alerts')

<div class="col-md-12 row">

  <div class="col-md-6">
    <form enctype="multipart/form-data" method="post" action="{{ route('Slides::create' ) }}" accept-charset="UTF-8" autocomplete="off">
      <div class="form-group">
        <label for="title"><strong>Título del Slider</strong></label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Título del Slider" required>
      </div>

      <div class="form-group">
        <label for="url"><strong>Dirección de vinculación</strong></label>
        <input type="text" class="form-control" id="url"  name="url" value="{{ old('url') }}" placeholder="{{ env('SYSTEM_URL', '#SYSTEM_URL') }}" >
      </div>

      <div class="form-group">
        <label for="image"><strong>Subir imagen</strong></label>
        <input type="file" name="image" class="form-control" id="image" accept="image/*" value="{{ old('image') }}">
        <p class="help-block">Para mejor visualización, las dimensiones deben ser <strong>1366px x 400px</strong> </p>
      </div>

      <div class="checkbox">
        <label>
          <input type="checkbox" name="published" value="1"> Publicarlo en el sitio web
        </label>
      </div>

      {!! csrf_field() !!}

      <button type="submit" id="add" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</button>
      <a href="{{ route('Slides::index' ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cancelar</a>
    </form>
  </div>

</div>

@stop

@section('scripts')
    @parent
    {!! Html::script('assets/js/slide_app.js') !!}
@endsection