@extends('layouts.master')

@section('cuerpo')
<div class="container-fluid p-0">
    <div class="monumentos-section text-white text-center" style="background-image: url('https://i.ibb.co/X4y4br0/image.png'); background-size: cover; background-position: center;">
        <div class="dark-overlay"></div>
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 50vh;">
            <div>
                <h1 class="display-4">Qué Hacer</h1>
                <p class="lead">Explora las actividades disponibles</p>
            </div>
        </div>
    </div>

    <section id="activities" class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">Lista de Actividades</h2>
                    <p class="lead">Descubre las mejores actividades para disfrutar en Macael</p>
                </div>
            </div>
            <div class="row">
                @foreach($Actividades as $Actividad)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cardMonument h-100 shadow-sm">
                        <img src="{{$Actividad->imagen}}" class="cardMonument-img-top" alt="Imagen de {{$Actividad->nombre}}">
                        <div class="cardMonument-body d-flex flex-column">
                            <h3 class="cardMonument-title">{{ $Actividad->nombre }}</h3>
                            <p class="cardMonument-text">Precio: {{$Actividad->precio}}</p>
                            <p class="cardMonument-text">Duración: {{$Actividad->duracion}}</p>
                            <a href="{{ url('actividad/'.$Actividad->id) }}" class="btn btn-primary mt-auto">Ver más detalles</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
