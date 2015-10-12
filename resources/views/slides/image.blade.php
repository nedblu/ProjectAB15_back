@extends('templates.main')

@section('title') Slideshow @stop

@section('extra-content')
	@include('templates.partials.modals-delete')
@stop

@section('content')

<ol class="breadcrumb">
  <li class="active">Slideshow Manager</li>
</ol>

<h3><i class="fa fa-picture-o"></i> Slideshow Manager</h3>

<hr class="divider">

<div class="col-md-12 row">

    <div>
    	<h4>Subir nuevo slide</h4>

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

    </div>
	
</div>

</div>

@stop

@section('scripts')
    @parent
    {!! Html::script('assets/js/slide_app.js') !!}
@endsection