@extends('templates.main')

@section('title') Productos @stop

@section('extra-content')
    @include('templates.partials.modals-delete')
@stop

@section('content')

<ol class="breadcrumb">
  <li class="active">Productos</li>
</ol>

<h3>Productos</h3>

<hr class="divider">

<div class="panel panel-default">
    <div class="panel-body">
        <strong>Descripción:</strong> Administre aquí los productos de la base de datos que ofrece a sus clientes.
    </div>
</div>

<div class="btn-group" role="group" aria-label="ad">
    <a href="{{ route('Products::create') }}" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar un nuevo producto</a> 
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
                <td><a href="{{ route('Products::show', $product->id) }}" title="{{ $product->name }}">{{ $product->name }}</a></td>
                <td>{{ $product->sku }}</td>
                <td>
                @if($product->stock)
                    <span class="label label-success">SI</span>
                @else
                    <span class="label label-danger">NO</span>
                @endif
                </td>
                <td>
                    @if($product->category_id === 1 || $product->parent_id === 1)
                        <span class="label label-warning"><i class="fa fa-tag"></i> {{ $product->subcategory->name }}</span>
                    @else
                        <span class="label label-primary"><i class="fa fa-tag"></i> {{ $product->subcategory->name }}</span>
                    @endif
                </td>
                <td>{{ str_limit(strip_tags($product->description), 30)  }}</td>
                <td><time datetime="{{ $product->created_at }}" title="{{ $product->created_at }}" class="created_at">{{ $product->created_at }}</time></td>
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
    </style>

    <script>
        $('#table-products').filterTable({
            label       : '',
            placeholder : 'Buscar en la página actual...'
        });
    </script>

@endsection



