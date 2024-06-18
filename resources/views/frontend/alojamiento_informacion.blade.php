@extends('layouts.master')

@section('cuerpo')
<div class="container-fluid p-0">
    <div class="monumentos-section text-white text-center" style="background-image: url('https://i.ibb.co/X4y4br0/image.png'); background-size: cover; background-position: center;">
        <div class="dark-overlay"></div>
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 50vh;">
            <div>
                <h1 class="display-4">{{ $Alojamiento->nombre }}</h1>
                <p class="lead">Descubre más sobre este alojamiento</p>
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
                                @if(isset($imagenes) && count($imagenes) > 0)
                                    <div id="carouselAlojamiento" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner rounded">
                                            @foreach($imagenes as $index => $imagen)
                                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                                    <img src="{{ $imagen }}" class="d-block w-100" alt="Imagen de Alojamiento">
                                                </div>
                                            @endforeach
                                        </div>
                                        @if(count($imagenes) > 1)
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselAlojamiento" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Anterior</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselAlojamiento" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Siguiente</span>
                                            </button>
                                        @endif
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-12">
                                <h2 class="card-title text-center">{{ $Alojamiento->nombre }}</h2>
                                <p class="card-text lead text-justify">{!! nl2br(e($Alojamiento->descripcion)) !!}</p>
                            </div>
                            <div class="col-md-12 mt-4 d-flex justify-content-center">
                                <div class="embed-responsive embed-responsive-16by9" style="width: 100%; max-width: 800px;">
                                    {!! $Alojamiento->ubicacion !!}
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
