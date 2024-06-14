@extends('layouts.master')

@section('cuerpo')
<div class="container-fluid p-0">
    <div class="monumentos-section text-white text-center" style="background-image: url('https://i.ibb.co/X4y4br0/image.png'); background-size: cover; background-position: center;">
        <div class="dark-overlay"></div>
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 50vh;">
            <div>
                <h1 class="display-4">Qué Ver</h1>
                <p class="lead">Descubre los monumentos y lugares históricos del pueblo</p>
            </div>
        </div>
    </div>

    <section id="monuments" class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">Visitas Recomendadas</h2>
                    <p class="lead">Explora los monumentos y lugares históricos que no te puedes perder.</p>
                </div>
            </div>
            <div class="row">
                @foreach($Monumentos as $Monumento)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cardMonument h-100 shadow-sm">
                        <img src="{{$Monumento->imagen}}" class="cardMonument-img-top" alt="Imagen de {{$Monumento->nombre}}">
                        <div class="cardMonument-body d-flex flex-column">
                            <h3 class="cardMonument-title">{{ $Monumento->nombre }}</h3>
                            <p class="cardMonument-text">{{ \Illuminate\Support\Str::limit($Monumento->descripcion, 100, '...') }}</p>
                            <a href="{{ url('monumento/'.$Monumento->id) }}" class="btn btn-primary mt-auto">Ver más detalles</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection
