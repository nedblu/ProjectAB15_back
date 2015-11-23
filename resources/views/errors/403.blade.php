@extends('errors.template')

@section('title') 403 Acceso restringido @stop

@section('content')

	<div class="error-box">
		
		<h1 class="text-danger"><i class="fa fa-ban"></i> 403 Acceso restringido</h1>
    	
    	<p class="lead">¡Lo sentimos! No tienes permisos para acceder aquí.</p>
    	<p><a href="{{ route('Home::index') }}" class="btn btn-default btn-lg"><span class="green">¡Llévame a un lugar seguro!</span></a></p>

  	</div>

  	<hr class="divider">
	
	<div class="container">
  		<div class="body-content">
    		<div class="row">
      			<div class="col-md-6">
	      			<h2>¿Que sucedió?</h2>
        			<p class="lead">Un error 403 indica que tú no tienes permiso para accesar al archivo o página. En general, los servidores o sitios web tienen directorios o archivos que requieren permisos especiales para acceder por razones de seguridad.</p>
        			<p>Para poder acceder a este recurso es necesario que pidas a tu administrador que te otorgue los permisos suficientes.</p>
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