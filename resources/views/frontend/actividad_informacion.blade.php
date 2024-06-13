@extends('layouts.master')

@section('cuerpo')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row g-0">
                    <h1 class="card-title m-5 text-center" >{{ $Actividad->nombre }}</h1>
                 
                    <p class=" text-black fs-4 text-center"> Precio: {{ $Actividad->precio }}</p>
                    <p class=" text-black fs-4 text-center"> Duración: {{ $Actividad->duracion }}</p>
                    <div class="col-md-5 m-auto">
                        <img src="{{ $Actividad->imagen }}" class="img-fluid rounded-start" alt="{{ $Actividad->nombre }}">

                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text">{!! nl2br(e($Actividad->descripcion)) !!}</p>
                        </div>
                    </div>
                    <a href="{!! $Actividad->enlace_reserva !!}"  class="btn btn-primary mt-2 mb-2 ">Enlace de reserva </a>
                    <div class="d-flex justify-content-center ">
                        {!! $Actividad->ubicacion !!}
                    </div>
                </div>
            </div>
            
        </div>
       
    </div> 
</div>
@endsection
