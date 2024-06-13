@extends('layouts.master')

@section('cuerpo')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row g-0">
                    <h1 class="card-title m-5 text-center" >{{ $Hosteleria->nombre }}</h1>
    
                    <div class="col-md-5 m-auto">
                        <img src="{{ $Hosteleria->imagen }}" class="img-fluid rounded-start" alt="{{ $Hosteleria->nombre }}">

                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text">{!! nl2br(e($Hosteleria->descripcion)) !!}</p>
                        </div>
                        <p class=" text-black fs-6 text-center"> Horario:  {!! nl2br(e($Hosteleria->horario)) !!} </p>
                        <p class=" text-black fs-4 text-center"> Contacto: {!! nl2br(e($Hosteleria->telefono)) !!}</p>
                    </div>
        
                    <div class="d-flex justify-content-center ">
                        {!! $Hosteleria->ubicacion !!}
                    </div>
                </div>
            </div>
            
        </div>
       
    </div> 
</div>
@endsection
