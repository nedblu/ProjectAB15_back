@extends('errors.template')

@section('title') 500 Error Interno del Servidor @stop

@section('content')

    <div class="error-box">
        
        <h1 class="text-danger"><span class="glyphicon glyphicon-fire"></span> 500 Error Interno del Servidor</h1>
        
        <p class="lead">El servidor está retornando un error interno</p>
        <p><a href="javascript:location.reload()" class="btn btn-default btn-lg"><span class="green">Recargar la página nuevamente</span></a></p>

    </div>

    <hr class="divider">
    
    <div class="container">
        <div class="body-content">
            <div class="row">
                <div class="col-md-6">
                    <h2>¿Que sucedió?</h2>
                    <p class="lead">Un error 500 indica que hay un problema interno en el software causando el mal funcionamiento.</p>
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