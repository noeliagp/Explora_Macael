@extends('layouts.master')

@section('cuerpo')
<div class="container-fluid p-0">
    <div class="monumentos-section text-white text-center" style="background-image: url('https://i.ibb.co/X4y4br0/image.png'); background-size: cover; background-position: center;">
        <div class="dark-overlay"></div>
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 50vh;">
            <div>
                <h1 class="display-4">Dónde Dormir</h1>
                <p class="lead">Encuentra los mejores lugares para hospedarte en Macael o alrededores.</p>
            </div>
        </div>
    </div>

    <section id="accommodations" class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">Lista de Alojamientos</h2>
                    <p class="lead">Descubre los mejores lugares para descansar durante tu visita a Macael.</p>
                </div>
            </div>
            <div class="row">
                @foreach($Alojamientos as $Alojamiento)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cardMonument h-100 shadow-sm">
                        <img src="{{$Alojamiento->imagen}}" class="cardMonument-img-top" alt="Imagen de {{$Alojamiento->nombre}}">
                        <div class="cardMonument-body d-flex flex-column">
                            <h3 class="cardMonument-title">{{ $Alojamiento->nombre }}</h3>
                            <p class="cardMonument-text">{{ \Illuminate\Support\Str::limit($Alojamiento->descripcion, 100, '...') }}</p>
                            <a href="{{ url('alojamiento/'.$Alojamiento->id) }}" class="btn btn-primary mt-auto">Ver más detalles</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
