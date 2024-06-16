@extends('layouts.master')

@section('cuerpo')
<div class="container-fluid p-0">
    <div class="monumentos-section text-white text-center" style="background-image: url('https://i.ibb.co/X4y4br0/image.png'); background-size: cover; background-position: center;">
        <div class="dark-overlay"></div>
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 50vh;">
            <div>
                <h1 class="display-4">Dónde Comer</h1>
                <p class="lead">Encuentra los mejores lugares para comer en Macael.</p>
            </div>
        </div>
    </div>

    <section id="restaurants" class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">Lista de Bares y Restaurantes</h2>
                    <p class="lead">Descubre los mejores lugares para disfrutar de la gastronomía local.</p>
                </div>
            </div>
            <div class="row">
                @foreach($Hostelerias as $Hosteleria)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cardMonument h-100 shadow-sm">
                        <img src="{{$Hosteleria->imagen}}" class="cardMonument-img-top" alt="Imagen de {{$Hosteleria->nombre}}">
                        <div class="cardMonument-body d-flex flex-column">
                            <h3 class="cardMonument-title">{{ $Hosteleria->nombre }}</h3>
                            <p class="cardMonument-text">Teléfono: {{$Hosteleria->telefono}}</p>
                            <p class="cardMonument-text">Horario: {{$Hosteleria->horario}}</p>
                            <a href="{{ url('hosteleria/'.$Hosteleria->id) }}" class="btn btn-primary mt-auto">Ver más detalles</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
