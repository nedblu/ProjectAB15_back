@extends('templates.main')

@section('title') {{ $banner->title }} @stop

@section('extra-content')
	@include('templates.partials.modals-delete')
@stop

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ route('Slides::index' ) }}">Slideshow Manager</a></li>
  <li class="active">{{ $banner->title }}</li>
</ol>

<h3>{{ $banner->title }} <small>edición</small></h3>

<hr class="divider">

@include('templates.partials.alerts')

<div class="col-md-12 row">

  <div class="col-md-6">
    <form enctype="multipart/form-data" method="post" action="{{ route('Slides::update', $banner->id ) }}" accept-charset="UTF-8" autocomplete="off">
      {!! method_field('PUT') !!}
      <div class="form-group">
        <label for="title"><strong>Título del Slider</strong></label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nuevo slider" value="{{ $banner->title }}" required>
      </div>
      
      <div class="form-group">
        <label for="url"><strong>Dirección de vinculación</strong></label>
        <input type="text" class="form-control" id="url"  name="url" placeholder="http://www.alphabeta.com.mx/" value="{{ $banner->uri }}" >
      </div>

      <div class="form-group">
        <label for="image"><strong>Subir nueva imagen</strong></label>
        <input type="file" name="image" id="image">
        <p class="help-block">Para mejor visualización, las dimensiones deben ser <strong>1366px x 400px</strong> </p>
      </div>

      <div class="checkbox">
        <label for="published">
          @if($banner->published)
          <input type="checkbox" name="published" value="1" checked> Publicar slideshow en el sitio web
          @else
          <input type="checkbox" name="published" value="1"> Publicar slideshow en el sitio web
          @endif
        </label>        
      </div>

      {!! csrf_field() !!}

      <button type="submit" id="add" class="btn btn-primary">Actualizar</button>
      <a href="{!! route('Slides::index') !!}" class="btn btn-default">Cancelar</a>
    </form>
  </div>
  <div class="col-md-6">
    <p><strong>Imagen actual</strong></p>
    <div class="alert alert-info" role="alert">
      <small>Esto sólo muestra una previsualización de la imágen.</small>
    </div>
    {!! Html::image('assets/content_application/slide-show/preview_' . $banner->image, $banner->title, ['class' => 'img-responsive img-thumbnail']) !!}
  </div>
  
</div>

@stop

@section('scripts')
    @parent
    {!! Html::script('assets/js/slide_app.js') !!}
@endsection