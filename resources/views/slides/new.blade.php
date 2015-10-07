@extends('templates.main')

@section('title') Slideshow @stop

@section('extra-content')
	@include('templates.partials.modals-delete')
@stop

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ route('Slides::index' ) }}"></a> Slideshow Manager</li>
  <li class="active">Nuevo slider</li>
</ol>

<h3><i class="fa fa-picture-o"></i> Slideshow Manager</h3>

<hr class="divider">

<div class="col-md-12 row">

  <h4>Nuevo slider</h4>

  <form method="post" action="{{ route('Slides::create' ) }}" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off">
    <div class="form-group">
      <label for="title"><strong>Título</strong></label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Nuevo slider" required>
    </div>
    
    <div class="form-group">
      <label for="email"><strong>Correo Electrónico</strong></label>
      <input type="email" class="form-control" id="email"  name="email" placeholder="nombre@dominio.com"  required>
    </div>
  </form>
	
</div>

</div>

@stop

@section('scripts')
    @parent
    {!! Html::script('assets/js/slide_app.js') !!}
@endsection