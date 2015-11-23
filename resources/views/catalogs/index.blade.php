@extends('templates.main')

@section('title') Productos @stop

@section('extra-content')

	@include('templates.partials.modals-delete')

@stop

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ route('Catalogs::index') }}">Catálogo</a></li>
  <li class="active">Productos</li>
</ol>

<h3>Administrador de Categorías</h3>

<hr class="divider">

<div class="panel panel-default">
	<div class="panel-body">
		<strong>Descripción:</strong> Aplicación para el direccionamiento de los mensajes que provienen del formulario de contacto.
	</div>
</div>

<div class="table-responsive">
	<table id="table-products" class="table table-bordered table-hover table-condensed table-striped">
		<thead>
			<tr>
				<th>Nombre de Producto</th>
				<th>SKU</th>
				<th>Stock</th>
				<th>Categoría</th>
				<th>Description</th>
				<th>Creación</th>
			</tr>
		</thead>
		<tbody>
		@foreach($products as $product)
			<tr>
				<td>{{ $product->name }}</td>
				<td>{{ $product->sku }}</td>
				<td>
				@if($product->stock)
					<span class="label label-success">SI</span>
				@else
					<span class="label label-danger">NO</span>
				@endif
				</td>
				<td>{{ $product->category->name }}</td>
				<td>{{ str_limit(strip_tags($product->description->body), 50)  }}</td>
				<td>Creado <time datetime="{{ $product->created_at }}" title="{{ $product->created_at }}" class="created_at">{{ $product->created_at }}</time></td>
			</tr>
		@endforeach
		</tbody>
	</table>
</div>

{!! $products->render() !!}

@stop

@section('scripts')
    @parent
    {!! Html::script('assets/js/vendor/jquery.filterTable.min.js') !!}

    <style>
		.filter-table .quick { margin-left: 0.5em; font-size: 0.8em; text-decoration: none; }
		.fitler-table .quick:hover { text-decoration: underline; }
		td.alt { background-color: #ffc; background-color: rgba(255, 255, 0, 0.2); }
	</style> <!-- or put the styling in your stylesheet -->

    <script>
      $('#table-products').filterTable();
    </script>

@endsection