@extends('layouts.master')

@section('cuerpo')
<div class="container-fluid m-1 text-center">
    <div class="row justify-content-center"> 
        <div class="col-md-8 text-center"> 
            <h1>Qué Ver</h1>
            <p class="fs-4" >Descubre los monumentos y lugares históricos del pueblo.</p>
        </div>
    </div>
    <div>
        <h2 class="mb-4">Visitas recomedadas</h2>
        <div class="row">
            @foreach($Monumentos as $Monumento)
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card h-100 d-flex flex-column"> 
                    <h2 class="card-text mt-3">{{ $Monumento->nombre }}</h2> 
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="{{$Monumento->imagen}}" class="card-img-top m-auto" alt="Imagen de {{$Monumento->nombre}}"> 
                        <a href="{{ url('monumento/'.$Monumento->id) }}" class="btn btn-primary mt-2">Ver más detalles</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@stop
