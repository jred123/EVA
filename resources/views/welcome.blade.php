@extends('layouts.principal')
@section('titulo1', 'BlueberryStation')
@section('titulo2', 'Es hora de aprender!')
@section('content')

<div class="row">
    <div class="col-sm-12 features section-description wow fadeIn">
        <h2>El proyecto BlueberryStation</h2>
        
    </div>
</div>
<div class="row ">
    <div class="col-sm-4 features section-description wow fadeIn ">
        <h3>Administrador</h3>  
        <h4>
            Es una plataforma de evaluacion virtual, en la cual
            los estudiantes y los docentes podran subir o bajar
            archivos, asignar o ver sus calificaciones en tiempo
            real.
        </h4>
        <div>
            <a class="btn btn-primary" href="#" role="button">Ingresar</a>
        </div>              
    </div>

    <div class="col-sm-4 features section-description wow fadeIn ">
        <h3>Docente</h3>
        <h4>
            Es una plataforma de evaluacion virtual, en la cual
            los estudiantes y los docentes podran subir o bajar
            archivos, asignar o ver sus calificaciones en tiempo
            real.
        </h4>
        <div>
            <a class="btn btn-primary" href="#" role="button">Ingresar</a>
        </div> 
        
    </div>

    <div class="col-sm-4 features section-description wow fadeIn ">
        <h3>Estudiante</h3>
         <h4>
            Es una plataforma de evaluacion virtual, en la cual
            los estudiantes y los docentes podran subir o bajar
            archivos, asignar o ver sus calificaciones en tiempo
            real.
        </h4>
        <div>
            <a class="btn btn-primary" href="#" role="button">Ingresar</a>
        </div> 
    </div>
</div>

@endsection