@extends('layouts.master')

@section('cuerpo')
<div class="container-fluid m-1 text-center">
    <div class="row justify-content-center"> 
        <div class="col-md-8 text-center"> 
            <h1>Qué Hacer</h1>
            <p class="fs-4">Explora las actividades disponibles</p>
        </div>
    </div>
    <div>
        <h2>Lista de activades </h2>
        <div class="row">
            @foreach($Actividades as $Actividad)
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card h-100 d-flex flex-column"> 
                    <h2 class="card-text mt-3">{{ $Actividad->nombre }}</h2> 
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="{{$Actividad->imagen}}" class="card-img-top m-auto" alt="Imagen de {{$Actividad->nombre}}"> 
                        <p class="fw-bold mt-2">Precio: {{$Actividad->precio}}</p>
                        <a href="{{ url('actividad/'.$Actividad->id) }}" class="btn btn-primary mt-2">Ver más detalles</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>    
    </div>
</div>
@stop
