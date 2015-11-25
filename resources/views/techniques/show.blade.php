@extends('templates.main')

@section('title') Editar @stop

@section('extra-content')
	@include('templates.partials.modals-delete')
@stop

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ route('Techniques::index' ) }}">Técnicas</a></li>
  <li class="active">{{ $technique->title }}</li>
</ol>

<h3>{{ $technique->title }} <small>vista</small></h3>
<small>
  Creado por <strong>{{ $technique->user->first_name . ' ' . $technique->user->last_name }}</strong> <time datetime="{{ $technique->created_at }}" title="@datetime($technique->created_at)" id="created_at">{{ $technique->created_at }}</time>.
  @if($edited)
  | Editado <time datetime="{{ $technique->updated_at }}" title="@datetime($technique->created_at)" id="updated_at">{{ $technique->updated_at }}</time>.
  @endif
</small>

<hr class="divider">

<form action="{{ route('Techniques::destroy', $technique->id) }}" accept-charset="UTF-8" method="POST" >
  {!! method_field('DELETE') !!}
  {!! csrf_field() !!}

  <div class="btn-group" role="group" aria-label="buttons">
    <a href="{{ route('Techniques::edit', $technique->id) }}" role="button" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i> Editar esta entrada</a>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete" data-title="Eliminar Artículo" data-message="¿<strong>{{ Auth::user()->first_name }}</strong> estás seguro de eliminar el artículo <strong>{{ $technique->title }}</strong>?"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Eliminar esta entrada</button>
  </div>
</form>

<div class="panel panel-default">
  <div class="panel-body">
    <div class="col-md-2">
      @if($technique->image === null)
      <img class="img-responsive img-rounded" src="http://placehold.it/150x100/A0D2F2/2980b9/?text=150x100" alt="{{ $technique->title }}">
      @else
      <img class="img-responsive img-rounded" src="{!! asset('assets/content_application/techniques/thumbnail_show_' . $technique->image) !!}" alt="{{ $technique->title }}">
      @endif
    </div>
    <div class="col-md-10">
      <strong>Acerca:</strong> {{ $technique->about }}
    </div>
  </div>
</div>

@include('templates.partials.alerts')

<div class="col-md-12 row">
  {!! $technique->detail !!}
</div>

@stop