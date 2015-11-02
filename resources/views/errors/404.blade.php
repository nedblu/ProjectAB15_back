@extends('errors.template')

@section('title') 404 No encontrado @stop

@section('content')

	<div class="error-box">
		
		<h1 class="text-danger"><i class="fa fa-frown-o"></i> 404 No encontrado</h1>
    	
    	<p class="lead">¡Lo sentimos! No hemos podido localizar lo que estás buscando.</p>
    	<p><a href="{{ route('Home::index') }}" class="btn btn-default btn-lg"><span class="green">¡Sácame de aqui!</span></a></p>

  	</div>

  	<hr class="divider">
	
	<div class="container">
  		<div class="body-content">
    		<div class="row">
      			<div class="col-md-6">
        			<h2>¿Que sucedió?</h2>
        			<p class="lead">Un error 404 implica que el recurso (archivo o página) que estás buscando no ha sido encontrado en el servidor.</p>
        			<p>
        			Las posibles causas son:
        			<ul>
						<li>La <strong>URL</strong> ha cambiado</li>
						<li>La <strong>URL</strong> no está escrita correctamente</li>
						<li>El <strong>recurso</strong> ha sido movido</li>
						<li>La <strong>URL</strong> se ha deshabilitado automáticamente *</li>
					</ul>
        			</p>
        			<div class="well well-sm">
						<em>* El bloqueo automático occurre cuando los parámetros del sistema ha sido sobre pasados.</em>
					</div>
      				
      			</div>
      			
      			<div class="col-md-6">
        			<h2>¿Qué puedo hacer?</h2>
        			<p class="lead">Administrador</p>
        			<p>Por favor, regresa a la página anterior y verifica si estás en el lugar correcto. Si es necesaria asistencia técnica, por favor envía un correo electrónico al equipo de soporte para que sea verificado.</p>
        			
     			</div>
    		</div>
  		</div>
  	</div>

@stop