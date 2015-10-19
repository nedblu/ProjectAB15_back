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

  @if(count($banners) > 0)

	<h4>Imágenes actuales</h4>

	<p class="bg-custom-grey">
		Las imágenes que se muestran aquí, han sido recortadas con el fin de presentarlas de manera óptima, si deseas ver las imágenes que actualmente se encuentran en el sitio, te recomentamos presionar el botón superior que dice "Visualizar el Sitio".
	</p>
  
	<div class="flexslider carousel">
    <ul class="slides">
    @foreach($banners as $banner)
      <li>
      {!! Html::image('assets/content_application/thumbnail_' . $banner->image, $banner->title) !!}
    	</li>
    @endforeach
    </ul>
  </div>

  <div id="alertForAjax"></div>

  <form action="" id="saveOrder" accept-charset="UTF-8" method="POST">
    {!! method_field('PUT') !!}
    {!! csrf_field() !!}
    <button class="btn btn-primary" id="saveorder" type="submit"><i class="fa fa-floppy-o"></i> Guardar orden</button>
    <button class="btn btn-primary" id="switcher" type="button"><i class="fa fa-unlock"></i> Habilitar edición</button>
    <a class="btn btn-primary" href="{{ route('Slides::create') }}" role="button"><i class="fa fa-plus-circle"></i> Nuevo slide</a>
  </form>

  <ul id="slideList" class="list-group">
    @foreach($banners as $banner)

    <li class="list-group-item slide-sortable-list" data-id="{{ $banner->id }}">
      {{ $banner->title }}
      <form action=" " class="pull-right" accept-charset="UTF-8" method="POST" enctype="application/x-www-form-urlencoded" autocomplete="off">                        
        {!! method_field('DELETE') !!}
        {!! csrf_field() !!}
        @if($banner->published)
        <span class="label label-success">Público</span>
        @else
        <span class="label label-default">No público</span>
        @endif
        <a class="btn btn-primary btn-xs fancy-btn" href="{!! asset('assets/content_application/photo_' . $banner->image) !!}" title="{{ $banner->title }}"><i class="fa fa-picture-o"></i></a>
        <button type="button" class="btn btn-danger btn-xs btn-animated" data-toggle="modal" data-target="#confirmDelete" data-title="Eliminar Destinatario" data-message="¿<strong>{{ Auth::user()->first_name }}</strong> estás seguro de eliminar?"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
        <a href="asd" class="btn btn-primary btn-xs btn-animated"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
      </form>
    </li>

    @endforeach

  </ul>

  @endif

</div>


@stop

@section('scripts')
    @parent
    {!! Html::script('assets/js/slide_app.js') !!}
@endsection