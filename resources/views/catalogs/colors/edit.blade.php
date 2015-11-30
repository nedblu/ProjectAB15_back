@extends('templates.main')

@section('title') {{ $color->name }} @stop

@section('extra-content')
    @include('templates.partials.modals-delete')
@stop

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ route('Colors::index' ) }}">Recurso de Colores</a></li>
    <li class="active">{{ $color->name }}</li>
</ol>

<h3>{{ $color->name }} <small>edición</small></h3>

<small>Creado por <strong>{{ $color->user->first_name . ' ' . $color->user->last_name }}</strong> <time datetime="{{ $color->created_at }}" title="@datetime($color->created_at)" id="created_at">{{ $color->created_at }}</time></small>

<hr class="divider">

@include('templates.partials.alerts')

<div class="row col-md-12">

    <form method="post" action="{{ route('Colors::update', $color->id ) }}" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
        
        {!! method_field('PUT') !!}
        
        <div class="col-md-6">
            <div class="form-group">
                <label for="name"><strong>Nombre de Color</strong></label>
                <input type="text" class="form-control" name="name" placeholder="Nombre de color" value="{{ $color->name }}" required>
            </div>
            <div class="form-group">
                <label for="image"><strong>Imagen</strong></label>
                <input type="file" class="form-control" accept="image/*" id="image" name="image">
            </div>
        </div>

        <div class="clearfix"></div>

        {!! csrf_field() !!}
        
        <button type="submit" class="btn btn-primary"><i class="fa fa-refresh"></i> Actualizar</button>
        <a href="{{ route('Colors::index' ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cancelar</a>
    </form>
</div>

@stop