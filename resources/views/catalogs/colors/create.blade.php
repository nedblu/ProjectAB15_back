@extends('templates.main')

@section('title') Nuevo recurso @stop

@section('content')

<ol class="breadcrumb">
    <li><a href="{{ route('Colors::index' ) }}">Recurso de Colores</a></li>
    <li class="active">Nuevo recurso</li>
</ol>

<h3>Nuevo recurso</h3>

<hr class="divider">

@include('templates.partials.alerts')

<div class="row col-md-12">
    <form method="post" action="{{ route('Colors::store' ) }}" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
        <div class="col-md-6">
            <div class="form-group">
                <label for="name"><strong>Nombre de Color</strong></label>
                <input type="text" class="form-control" name="name" placeholder="Nombre de colores" value="{{ old('name') }}" required>
            </div>
            <div class="form-group">
                <label for="image"><strong>Color (imagen)</strong></label>
                <input type="file" accept="image/*" class="form-control" id="image" name="image" required>
            </div>
        </div>

        <div class="clearfix"></div>

        {!! csrf_field() !!}
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</button>
        <a href="{{ route('Colors::index' ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cancelar</a>
    </form>
</div>

@stop