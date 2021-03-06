@extends('templates.main')

@section('title') Técnicas @stop

@section('extra-content')
  @include('templates.partials.modals-delete')
@stop

@section('content')

<ol class="breadcrumb">
  <li class="active">Técnicas</li>
</ol>

<h3>Técnicas</h3>

<hr class="divider">

<div class="panel panel-default">
  <div class="panel-body">
    <strong>Descripción:</strong> El contenido de la página de técnicas.
  </div>
</div>

<div class="col-md-12 row">

@if(count($techniques) > 0)

  <div class="btn-group" role="group" aria-label="buttons">
    <a href="{{ route('Techniques::create') }}" role="button" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Agregar nueva entrada</a>
  </div>

@foreach($techniques as $technique)

  <div class="media">
      <div class="media-left">
        <a href="{{ route('Techniques::show', $technique->id) }}" title="Ver {{ $technique->title }}">
          @if($technique->image === null)
          <img class="media-object img-rounded" src="http://placehold.it/100x100/A0D2F2/2980b9/?text=100x100" alt="{{ $technique->title }}">
          @else
          <img class="media-object img-rounded" src="{!! asset('assets/content_application/techniques/thumbnail_' . $technique->image) !!}" alt="{{ $technique->title }}">
          @endif
        </a>
      </div>
      <div class="media-body">

        <h4 class="media-heading"><a href="{{ route('Techniques::show', $technique->id) }}" title="Ver {{ $technique->title }}">{{ $technique->title }}</a> <a href="{{ route('Techniques::edit', $technique->id) }}" data-toggle="tooltip" data-placement="top" title="Editar">[Editar]</a></h4>

        {!! str_limit($technique->about, 300) !!} <br>

        <form action="{{ route('Techniques::destroy', $technique->id) }}" accept-charset="UTF-8" method="POST" >
          {!! method_field('DELETE') !!}
          {!! csrf_field() !!}

          <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmDelete" data-title="Eliminar Artículo" data-message="¿<strong>{{ Auth::user()->first_name }}</strong> estás seguro de eliminar el artículo <strong>{{ $technique->title }}</strong>?"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>

          @if($technique->user()->count() > 0)
           <i class="fa fa-clock-o"></i> Creado por <strong>{{ $technique->user->first_name . ' ' . $technique->user->last_name}}</strong>
          @else
            <i class="fa fa-clock-o"></i> Creado por <span class="label label-warning">No disponible</span>
          @endif

           <time datetime="{{ $technique->created_at }}" title="{{ $technique->created_at }}" class="created_at">{{ $technique->created_at }}</time>
            @if($technique->created_at->ne($technique->updated_at))
            | Editado <time datetime="{{ $technique->updated_at }}" title="{{ $technique->updated_at }}" class="updated_at">{{ $technique->updated_at }}</time>
            @endif
        </form>

      </div>
  </div>
  @endforeach
@else
  <div class="col-md-12 row">
    <div class="text-center">
      <h3>Upsss! <i class="fa fa-frown-o"></i></h3>
      <p>Parece que no has agregado técnicas hasta el momento, ¿Te gustaría comenzar añadiendo una?</p>
      <a href="{{ route('Techniques::create') }}" class="btn btn-primary btn-lg" role="button"><i class="fa fa-plane"></i> Empezar aquí</a>
    </div>
  </div>
@endif

</div>

@stop
