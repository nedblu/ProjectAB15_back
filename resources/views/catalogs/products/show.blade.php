@extends('templates.main')

@section('title') {{ $product->name }} @stop

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ route('Products::index' ) }}">Productos</a></li>
  <li class="active">{{ $product->name }}</li>
</ol>

<h3>{{ $product->name }} <a href="{{ route('Products::edit', $product->id) }}">[Editar]</a></h3>

<hr class="divider">

@include('templates.partials.alerts')

<div class="col-md-4">
    @if($product->image === null)
        <img class="img-rounded" src="http://placehold.it/300x300/A0D2F2/2980b9/?text=300x300" alt="{{ $product->name }}">
    @else
        {!! Html::image('assets/content_application/products/photo/' . $product->image ) !!}
    @endif
</div>

<div class="col-md-8">

    <div class="table-responsive">
        <table class="table table-hover table-condensed table-bordered">
            <tbody>
                <tr>
                    <td><strong>Nombre de Producto</strong></td>
                    <td>{{ $product->name }}</td>
                </tr>
                <tr>
                    <td><strong>SKU (Stockkeeping Unit)</strong></td>
                    <td>{{ $product->sku }}</td>
                </tr>
                <tr>
                    <td><strong>Stock</strong></td>
                    <td>
                        @if($product->stock)
                        <span class="label label-success">En existencia</span>
                        @else
                        <span class="label label-default">No hay en stock</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>Creado por</strong></td>
                    <td>{{ $product->user->first_name . ' ' . $product->user->last_name }}</td>
                </tr>
                <tr>
                    <td><strong>Creación</strong></td>
                    <td><time datetime="{{ $product->created_at }}" title="{{ $product->created_at }}" class="created_at">{{ $product->created_at }}</time></td>
                </tr>
                <tr>
                    <td><strong>Última modificación</strong></td>
                    <td><time datetime="{{ $product->updated_at }}" title="{{ $product->updated_at }}" class="updated_at">{{ $product->updated_at }}</time></td>
                </tr>
                <tr>
                    <td><strong>Categoría</strong></td>
                    <td>
                    @if($product->category_id === 1)
                        <span class="label label-warning"><i class="fa fa-tag"></i> {{ $product->category->name }}</span>
                    @else
                        <span class="label label-primary"><i class="fa fa-tag"></i> {{ $product->category->name }}</span>
                    @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>Sub-categoría</strong></td>
                    <td>
                    @if($product->parent_id === 1)
                        <span class="label label-warning"><i class="fa fa-tag"></i> {{ $product->subcategory->name }}</span>
                    @else
                        <span class="label label-primary"><i class="fa fa-tag"></i> {{ $product->subcategory->name }}</span>
                    @endif
                    </td>
                </tr>
                <tr>
                    <td><strong>Descripción</strong></td>
                    <td>{!! $product->description !!}</td>
                </tr>
            </tbody>

        </table>
    </div>
</div>

<div class="clearfix"></div>

@if($product->colors || $product->ink || $product->equipment)
<h3>Recursos ligados</h3>

<hr class="divider">

<div class="table-responsive">
    <table class="table table-hover table-condensed table-bordered">
        <tbody>

        @if($product->equipment)
            <tr>
                <td><strong>Equipos</strong></td>
                <td>{{ $product->getEquips->equip_ar }}</td>
            </tr>
        @endif

        @if($product->ink)
            <tr>
                <td><strong>Tintas</strong></td>
                <td>{{ $product->getInks->inks_ar }}</td>
            </tr>
        @endif

        @if($product->colors)
            <tr>
                <td><strong>Colores disponibles</strong></td>
                <td>
                    @foreach($product->colorResources as $color)
                        {!! Html::image('assets/content_application/colors/' . $color->image, $color->name, ['class' => 'img-circle', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => $color->name, 'width' => 30]) !!}
                    @endforeach
                </td>
            </tr>
        @endif

        </tbody>

    </table>
</div>

@endif

@stop