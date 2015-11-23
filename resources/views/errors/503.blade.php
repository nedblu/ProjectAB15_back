@extends('errors.template')

@section('title') 503 Servicio no disponible @stop

@section('content')

    <div class="error-box">
        
        <h1 class="text-warning"><i class="fa fa-exclamation-triangle"></i> 503 Servicio no disponible</h1>
        
        <p class="lead">El servidor está retornando un error temporal</p>
        <p><a href="javascript:location.reload()" class="btn btn-default btn-lg"><span class="green">Recargar la página nuevamente</span></a></p>

    </div>

    <hr class="divider">
    
    <div class="container">
        <div class="body-content">
            <div class="row">
                <div class="col-md-6">
                    <h2>¿Que sucedió?</h2>
                    <p class="lead">Un error 503 indica una condición temporal debido a una sobrecarga temporal o mantenimiento del servidor. Este error normalmente es un breve interrupción.</p>
                </div>
                
                <div class="col-md-6">
                    <h2>¿Qué puedo hacer?</h2>
                    <p class="lead">Administrador</p>
                    <p>Si es necesaria asistencia técnica, por favor envía un correo electrónico al equipo de soporte para que sea verificado. Lamentamos los inconvenientes.</p>
                </div>
            </div>
        </div>
    </div>

@stop