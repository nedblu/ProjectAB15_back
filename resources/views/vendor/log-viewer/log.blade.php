@extends('templates.main')

@section('title') Slideshow @stop

@section('extra-content')
	@include('templates.partials.modals-delete')
@stop

@section('content')

<ol class="breadcrumb">
  <li class="active">Registro de Eventos</li>
</ol>

<h3>Registro de Eventos</h3>

<hr class="divider">

<div class="panel panel-default">
  <div class="panel-body">
    <strong>Descripción:</strong> Aplicación para el direccionamiento de los mensajes que provienen del formulario de contacto.
  </div>
  @if($logs)
  <div class="btn-group" role="group">

    <a href="?dl={{ base64_encode($current_file) }}" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-download-alt"></span> Descargar archivo actual</a>
    <a id="delete-log" href="?del={{ base64_encode($current_file) }}" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash"></span> Eliminar archivo actual</a>

    <div class="btn-group" role="group">
      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Archivos disponibles
        <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        @foreach($files as $file)
          <li>
            <a href="?l={{ base64_encode($file) }}">{{$file}}</a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
  @endif
</div>


<div class="col-md-12 table-container table-responsive">
  @if ($logs === null)
    <div>
      El archivo de log es >50M, por favor descargalo.
    </div>
  @else

  <table id="table-log" class=" row table table-striped">

    <thead>
      <tr>
        <th class="col-md-1">Nivel</th>
        <th class="col-md-2">Fecha</th>
        <th class="col-md-9">Descrpción</th>
      </tr>
    </thead>

    <tbody>

      @foreach($logs as $key => $log)
      <tr>
        <td class="text-{{{$log['level_class']}}}"><span class="glyphicon glyphicon-{{{$log['level_img']}}}-sign" aria-hidden="true"></span> &nbsp;{{$log['level']}}</td>
        <td class="date"><small>{{{$log['date']}}}</small></td>
        <td class="text">
          @if ($log['stack']) <a class="pull-right expand btn btn-default btn-xs" data-display="stack{{{$key}}}"><span class="glyphicon glyphicon-search"></span></a>@endif
          {{{$log['text']}}}
          @if (isset($log['in_file'])) <br />{{{$log['in_file']}}}@endif
          @if ($log['stack']) <div class="stack" id="stack{{{$key}}}" style="display: none; white-space: pre-wrap;">{{{ trim($log['stack']) }}}</div>@endif
        </td>
      </tr>
      @endforeach

    </tbody>
  </table>
  @endif
</div>

@stop

@section('scripts')
    @parent
    {!! Html::script('//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js') !!}
    {!! Html::script('//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js') !!}

    <script>
      $(document).ready(function(){
        $('#table-log').DataTable({
          "order": [ 1, 'desc' ],
          "stateSave": true,
          "stateSaveCallback": function (settings, data) {
            window.localStorage.setItem("datatable", JSON.stringify(data));
          },
          "stateLoadCallback": function (settings) {
            var data = JSON.parse(window.localStorage.getItem("datatable"));
            if (data) data.start = 0;
            return data;
          }
        });
        $('.table-container').on('click', '.expand', function(){
          $('#' + $(this).data('display')).toggle();
        });
        $('#delete-log').click(function(){
          return confirm('Are you sure?');
        });
      });
    </script>

@endsection