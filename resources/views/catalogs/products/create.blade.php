@extends('templates.main')

@section('title') Nuevo producto @stop

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ route('Products::index' ) }}">Productos</a></li>
  <li class="active">Nuevo producto</li>
</ol>

<h3>Nuevo producto</h3>

<hr class="divider">

@include('templates.partials.alerts')

<form method="post" action="{{ route('Products::store' ) }}" accept-charset="UTF-8" enctype="multipart/form-data" autocomplete="off">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name"><strong>Nombre del Producto</strong></label>
            <input type="text" class="form-control" name="name" placeholder="Nombre del Producto" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="sku"><strong>SKU (Stockkeeping Unit)</strong></label>
            <input type="text" class="form-control" name="sku" placeholder="SKU (Stockkeeping Unit)" value="{{ old('sku') }}" aria-describedby="skuHelp" required>
            <span id="skuHelp" class="help-block">Ingresa el código en stock para localización del proucto.</span>
        </div>

        <div class="form-group">
            <label for="image"><strong>Subir imagen de producto</strong></label>
            <input type="file" accept="image/*" class="form-control" id="image" name="image" value="{{ old('image') }}">
            <p class="help-block">Suba la imagen que represente el producto.</p>
        </div>

        <div class="form-group">
            <strong>Seleccionar si está en existencia</strong>
            <div class="checkbox">
                <label><input type="checkbox" id="inStock" name="inStock"> En stock</label>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <div class="checkbox">
                <label><input type="checkbox" id="checkColors" name="checkColors"> <strong>Colores del Producto (Opcional)</strong></label>
            </div>
            <input type="text" class="form-control" name="colors" id="colors" disabled placeholder="Colores del Producto" value="{{ old('colors') }}" aria-describedby="colorsHelp" >
            <span id="colorsHelp" class="help-block">Habilita este campo en caso de que el producto tenga colores.</span>
        </div>

        <div class="form-group">
            <div class="checkbox">
                <label><input type="checkbox" id="checkInks" name="checkInks"> <strong>Tintas ligadas (Opcional)</strong></label>
            </div>
            <input type="text" class="form-control" name="inks" id="inks" disabled placeholder="Tintas ligadas" value="{{ old('inks') }}" aria-describedby="inksHelp" >
            <span id="inksHelp" class="help-block">Habilita este campo en caso de que haya tintas ligadas al producto.</span>
        </div>

        <div class="form-group">
            <div class="checkbox">
                <label><input type="checkbox" id="checkEquipment" name="checkEquipment"> <strong>Equipos ligados (Opcional)</strong></label>
            </div>
            <input type="text" class="form-control" name="equipments" id="equipments" disabled placeholder="Equipos ligados" value="{{ old('equipments') }}" aria-describedby="equipmentsHelp" >
            <span id="equipmentsHelp" class="help-block">Habilita este campo en caso de que haya equipos ligados al producto.</span>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-md-12">

        <div class="form-group">

            <label for="parent_id"><strong>Seleccione la categoría del producto</strong></label>

            <select name="parent_id" class="form-control" required>
                <option value="">- -</option>
                @forelse ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @empty
                <option value="">No available</option>
                @endforelse
            </select>
        </div>

        <div class="form-group">
            <label for="description"><strong>Descripción del producto</strong></label>
            <textarea class="form-control" name="description" rows="3">{{ old('description') }}</textarea>
        </div>

    </div>

    {!! csrf_field() !!}

    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Agregar</button>
    <a href="{{ route('Products::index' ) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span> Cancelar</a>
</form>


@stop

@section('scripts')
    @parent
    {!! Html::script('assets/js/product-new.js') !!}
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
                '/',
                {name: 'tools', items: ['Maximize'] },
                {name: 'document', items: ['Source', 'NewPage'] },
                {name: 'basicstyles', items: ['Bold', 'Italic', 'Strike', '-', 'RemoveFormat'] },
                {name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] }
            ]
        });
    </script>
@endsection