@extends('layouts.master')

@section('cuerpo')
<div class="container-fluid p-0">
    <div class="monumentos-section text-white text-center" style="background-image: url('https://i.ibb.co/X4y4br0/image.png'); background-size: cover; background-position: center;">
        <div class="dark-overlay"></div>
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 50vh;">
            <div>
                <h1 class="display-4">{{ $Hosteleria->nombre }}</h1>
                <p class="lead">Descubre más sobre este establecimiento</p>
            </div>
        </div>
    </div>
    
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 mb-4 text-center">
                                <img src="{{ $Hosteleria->imagen }}" class="img-fluid rounded" alt="{{ $Hosteleria->nombre }}">
                            </div>
                            <div class="col-md-12">
                                <h2 class="card-title text-center">{{ $Hosteleria->nombre }}</h2>
                                <p class="card-text lead text-justify">{!! nl2br(e($Hosteleria->descripcion)) !!}</p>
                            </div>
                            <div class="col-md-12 mt-4 text-center">
                                <p class="text-black fs-6">Horario: {!! nl2br(e($Hosteleria->horario)) !!}</p>
                                <p class="text-black fs-4">Contacto: {!! nl2br(e($Hosteleria->telefono)) !!}</p>
                            </div>
                            <div class="col-md-12 mt-4 d-flex justify-content-center">
                                <div class="embed-responsive embed-responsive-16by9" style="width: 100%; max-width: 800px;">
                                    {!! $Hosteleria->ubicacion !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
