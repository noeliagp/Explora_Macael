@extends('layouts.master')

@section('cuerpo')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-0 shadow-sm">
                <div class="row g-0">
                    <h1 class="card-title mt-4 mb-3 text-center display-4">{{ $Monumento->nombre }}</h1>
                    <div class="col-md-6 m-auto">
                        @if(isset($imagenes) && count($imagenes) > 0)
                            <div id="carouselMonumento" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach($imagenes as $index => $imagen)
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <img src="{{ $imagen }}" class="d-block w-100 rounded" alt="Imagen de Monumento">
                                        </div>
                                    @endforeach
                                </div>
                                @if(count($imagenes) > 1)
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselMonumento" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselMonumento" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                @endif
                            </div>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <p class="card-text lead">{!! nl2br(e($Monumento->descripcion)) !!}</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center mt-3 mb-3">
                    <div class="embed-responsive embed-responsive-16by9">
                        {!! $Monumento->ubicacion !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
