@extends('templates.main')

@section('title') {{ $product->name }} @stop

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ route('Products::index' ) }}">Productos</a></li>
  <li class="active">{{ $product->name }}</li>
</ol>

<h3>{{ $product->name }}</h3>

<hr class="divider">

@include('templates.partials.alerts')

<form method="post" action="{{ route('Products::update', $product->id) }}" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">

    {!! method_field('PUT') !!}

    <div class="col-md-6">
        <div class="form-group">
            <label for="name"><strong>Nombre del Producto</strong></label>
            <input type="text" class="form-control" name="name" placeholder="Nombre del Producto" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label for="sku"><strong>SKU (Stockkeeping Unit)</strong></label>
            <input type="text" class="form-control" name="sku" placeholder="Nombre del Producto" value="{{ $product->sku }}" aria-describedby="skuHelp" required>
            <span id="skuHelp" class="help-block">Ingresa el código en stock para localización del proucto.</span>
        </div>

        <div class="form-group">
            <label for="image"><strong>Remplazar imagen actual</strong></label>
            <input type="file" accept="image/*" class="form-control" id="image" name="image">
        </div>

        <input type="hidden" id="colorList" name="colorList" data-colors="{{route('Colors::json_product_colors', 'prod=' . $product->id) }}">

        <div class="form-group">
            <strong>Seleccionar si está en existencia</strong>
            <div class="checkbox">
            @if($product->stock)
                <label><input type="checkbox" id="inStock" name="inStock" checked> En stock</label>
            @else
                <label><input type="checkbox" id="inStock" name="inStock"> En stock</label>
            @endif
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
        @if($product->colors)
            <div class="checkbox">
                <label><input type="checkbox" id="checkColors" name="checkColors" checked> <strong>Colores del Producto (Opcional)</strong></label>
            </div>
            <input type="text" class="form-control" name="colors" id="colors" placeholder="Colores del Producto" value="{{ $product->getColors->colors_ar }}" aria-describedby="colorsHelp" >
            <span id="colorsHelp" class="help-block">Habilita este campo en caso de que el producto tenga colores.</span>
        @else
            <div class="checkbox">
                <label><input type="checkbox" id="checkColors" name="checkColors"> <strong>Colores del Producto (Opcional)</strong></label>
            </div>
            <input type="text" class="form-control" name="colors" id="colors" disabled placeholder="Colores del Producto" aria-describedby="colorsHelp" >
            <span id="colorsHelp" class="help-block">Habilita este campo en caso de que el producto tenga colores.</span>
        @endif
        </div>

        <div class="form-group">
        @if($product->ink)
            <div class="checkbox">
                <label><input type="checkbox" id="checkInks" name="checkInks" checked> <strong>Tintas ligadas (Opcional)</strong></label>
            </div>
            <input type="text" class="form-control" name="inks" id="inks" placeholder="Tintas ligadas" value="{{ $product->getInks->inks_ar }}" aria-describedby="inksHelp" >
            <span id="inksHelp" class="help-block">Habilita este campo en caso de que haya tintas ligadas al producto.</span>
        @else
            <div class="checkbox">
                <label><input type="checkbox" id="checkInks" name="checkInks"> <strong>Tintas ligadas (Opcional)</strong></label>
            </div>
            <input type="text" class="form-control" name="inks" id="inks" disabled placeholder="Tintas ligadas" aria-describedby="inksHelp" >
            <span id="inksHelp" class="help-block">Habilita este campo en caso de que haya tintas ligadas al producto.</span>
        @endif
        </div>

        <div class="form-group">
        @if($product->equipment)
            <div class="checkbox">
                <label><input type="checkbox" id="checkEquipment" name="checkEquipment" checked> <strong>Equipos ligados (Opcional)</strong></label>
            </div>
            <input type="text" class="form-control" name="equipments" id="equipments" placeholder="Equipos ligados" value="{{ $product->getEquips->equip_ar }}" aria-describedby="equipmentsHelp" >
            <span id="equipmentsHelp" class="help-block">Habilita este campo en caso de que haya equipos ligados al producto.</span>
        @else
            <div class="checkbox">
                <label><input type="checkbox" id="checkEquipment" name="checkEquipment"> <strong>Equipos ligados (Opcional)</strong></label>
            </div>
            <input type="text" class="form-control" name="equipments" id="equipments" disabled placeholder="Equipos ligados" aria-describedby="equipmentsHelp" >
            <span id="equipmentsHelp" class="help-block">Habilita este campo en caso de que haya equipos ligados al producto.</span>
        @endif
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-md-12">

        <div class="form-group">
            <label for="parent_id"><strong>Seleccione la categoría del producto</strong></label>
        
            <select name="parent_id" class="form-control" required>
                <option value="">- -</option>
                <option value="0">Categoría principal</option>
                <option value="">-----------------------------</option>
                @forelse ($categories as $category)
                @if($product->parent_id === $category->id)
                <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
                @empty
                <option value="">No available</option>
                @endforelse
            </select>
        </div>
        
        <div class="form-group">
            <label for="description"><strong>Descripción del producto</strong></label>
            <textarea class="form-control" name="description" rows="3">{{ $product->description }}</textarea>
        </div>

    </div>

    {!! csrf_field() !!}

    <button type="submit" class="btn btn-primary"><i class="fa fa-refresh"></i> Actualizar</button>
    <a href="{{ route('Products::index' ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cancelar</a>
</form>


@stop

@section('scripts')
    @parent
    {!! Html::script('assets/js/product-edit.js') !!}
    {!! Html::script('//cdn.ckeditor.com/4.5.4/full/ckeditor.js') !!}

    <script>
        CKEDITOR.replace('description', {
            language: 'es',
            uiColor: '#EDEDED',
            toolbar: [
                {name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
                {name: 'editing', items: ['Find','Replace','-','SelectAll','-','Scayt'] },
                {name: 'links', items: ['Link', 'Unlink', 'Anchor'] },
                {name: 'insert', items: ['Table', 'HorizontalRule', 'SpecialChar'] },
                {name: 'tools', items: ['Maximize'] },
                {name: 'document', items: ['Source', 'NewPage'] },
                '/',
                {name: 'basicstyles', items: ['Bold', 'Italic', 'Strike', '-', 'RemoveFormat'] },
                {name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
                //{ name: 'styles', items: ['Styles', 'Format'] },
                {name: 'styles', items: ['Format'] }
            ]
        });
    </script>
@endsection