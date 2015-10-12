@extends('templates.main')

@section('title') Slideshow @stop

@section('extra-content')
	@include('templates.partials.modals-delete')
@stop

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ route('Slides::index' ) }}">Slideshow Manager</a></li>
  <li class="active">Nuevo slider</li>
</ol>

<h3><i class="fa fa-picture-o"></i> Agregar nuevo slide</h3>

<hr class="divider">

@include('templates.partials.alerts')

<div class="col-md-12 row">

  <div class="col-md-6">
    <form enctype="multipart/form-data" method="post" action="{{ route('Slides::create' ) }}" accept-charset="UTF-8" autocomplete="off">
      <div class="form-group">
        <label for="title"><strong>Título del Slider</strong></label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nuevo slider" required>
      </div>
      
      <div class="form-group">
        <label for="url"><strong>Dirección de vinculación</strong></label>
        <input type="text" class="form-control" id="url"  name="url" placeholder="http://www.alphabeta.com.mx/" >
      </div>

      <div class="form-group">
        <label for="image">Imagen</label>
        <input type="file" name="image" id="image">
        <p class="help-block">Para mejor visualización, las dimensiones deben ser <strong>1366px x 400px</strong> </p>
      </div>

      {!! csrf_field() !!}

      <button type="submit" id="add" class="btn btn-primary">Agregar</button>
      <button type="reset" class="btn btn-default">Cancelar</button>
    </form>
  </div>

  <!--<div class="col-md-6">
    <form enctype="multipart/form-data" action=" " method="POST" class="bg-custom-grey dropzone custom-dropzone" id="dropzoneFileUpload">
      <div class="dz-message">
        <i class="fa fa-upload"></i><br>
        <span class="lead"><strong>Arrastra aquí tu imagen</strong></span><br>
        <small>Las especificaciones óptimas para una nueva imágen deben ser: <strong>1366px x 400px</strong> optimizadas, su peso máximo debe ser de <strong>2MB</strong> de lo contrario la imagen no se subirá.</small>
      </div>
      <div class="token" data-token="{{ Session::getToken() }}"></div>
      <div class="fallback">
        <input name="file" type="file" multiple />
      </div>
    </form>
  </div>-->
  
</div>

@stop

@section('scripts')
    @parent
    {!! Html::script('assets/js/slide_app.js') !!}
@endsection