@extends('templates.main')

@section('title') Técnicas @stop

@section('extra-content')
	@include('templates.partials.modals-delete')
@stop

@section('content')

<ol class="breadcrumb">
  <li class="active">Técnicas</li>
</ol>

<h3><i class="fa fa-magic"></i> Técnicas</h3>

<hr class="divider">

<div class="col-md-12 row">

<div class="btn-group" role="group" aria-label="buttons">
  <a href="{{ route('Techniques::create') }}" role="button" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Agregar nueva</a>
</div>

@if($techniques)
@foreach($techniques as $technique)
  <div class="media">
      <div class="media-left">
        <a href="{{ route('Techniques::show', $technique->id) }}" title="Ver {{ $technique->title }}">
          @if($technique->image === 'na.png')
          <img class="media-object img-rounded" src="http://placehold.it/100x100/A0D2F2/2980b9/?text=100x100" alt="{{ $technique->title }}">
          @else
          <img class="media-object img-rounded" src="{!! asset('assets/content_application/thumbnail_' . $technique->image) !!}" alt="{{ $technique->title }}">
          @endif
        </a>
      </div>
      <div class="media-body">

        <h4 class="media-heading">{{ $technique->title }} <a href="{{ route('Techniques::show', $technique->id) }}" title="Ver {{ $technique->title }}"><i class="fa fa-eye"></i></a></h4>

        {!! str_limit($technique->about, 300) !!} <br>
        <small><i class="fa fa-clock-o"></i> Creado <time datetime="{{ $technique->created_at }}" title="{{ $technique->created_at }}" class="created_at">{{ $technique->created_at }}</time></small>
        
        <form action="{{ route('Techniques::destroy', $technique->id) }}" accept-charset="UTF-8" method="POST" >
          {!! method_field('DELETE') !!}
          {!! csrf_field() !!}
          <div class="btn-group btn-group-xs pull-right" role="group" aria-label="...">
            <a href="#" class="btn btn-primary" role="button" title="Editar" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-pencil-square-o"></i></a>  
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete" data-title="Eliminar Artículo" data-message="¿<strong>{{ Auth::user()->first_name }}</strong> estás seguro de eliminar el artículo <strong>{{ $technique->title }}</strong>?"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
          </div>
        </form>

      </div>
  </div>
  @endforeach
@endif

</div>

@stop
