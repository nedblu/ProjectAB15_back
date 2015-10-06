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

	<h4>Imágenes actuales</h4>

	<p class="bg-custom-grey">
		Las imágenes que se muestran aquí, han sido recortadas con el fin de presentarlas de manera óptima, si deseas ver las imágenes que actualmente se encuentran en el sitio, te recomentamos presionar el botón superior que dice "Visualizar el Sitio".
	</p>

	<div class="flexslider carousel">
        <ul class="slides">
            <li>
  	    	    <img src="../../public_html/content/slide-show/caption_momentos.gif" alt="">
  	    	</li>
  	    	<li>
  	    	    <img src="../../public_html/content/slide-show/caption_momentos.gif" alt="">
  	    	</li>
  	    	<li>
  	    	    <img src="../../public_html/content/slide-show/caption_momentos.gif" alt="">
  	    	</li>
  	    	<li>
  	    	    <img src="../../public_html/content/slide-show/caption_momentos.gif" alt="">
  	    	</li>
  	    	<li>
  	    	    <img src="../../public_html/content/slide-show/caption_momentos.gif" alt="">
  	    	</li>
  	    	<li>
  	    	    <img src="../../public_html/content/slide-show/caption_momentos.gif" alt="">
  	    	</li>
  	    	<li>
  	    	    <img src="../../public_html/content/slide-show/caption_momentos.gif" alt="">
  	    	</li>
  	    	<li>
  	    	    <img src="../../public_html/content/slide-show/caption_momentos.gif" alt="">
  	    	</li>
        </ul>
    </div>

    <div>
    	<h4>Subir nuevo slide</h4>

    	<form enctype="multipart/form-data" action=" " method="POST" class="bg-custom-grey dropzone custom-dropzone" id="dropzoneFileUpload">
    		<div class="dz-message">
    			<i class="fa fa-upload"></i><br>
    			<span class="lead"><strong>Arrastra aquí tu imagen</strong></span><br>
    			<small>Las especificaciones óptimas para una nueva imágen deben ser: <strong>1366px x 400px</strong> optimizadas, su peso máximo debe ser de <strong>2MB</strong> de lo contrario la imagen no se subirá.</small>
			</div>
  			<div class="fallback">
    			<input name="file" type="file" multiple />
  			</div>
		</form>
		<div class="token" data-token="{{ Session::getToken() }}"></div>
		
    </div>
	
</div>

</div>

@stop