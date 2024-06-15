@extends('layouts.master')

@section('cuerpo')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row g-0">
                  <h1 class="card-title m-5 text-center">{{ $Alojamiento->nombre }}</h1>
                    <div class="col-md-5 m-auto">
                        @if(isset($imagenes) && count($imagenes) > 0)
                        <div id="carouselAlojamiento" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($imagenes as $index => $imagen)
                                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                        <img src="{{ $imagen }}" class="d-block w-100" alt="Imagen de Alojamiento">
                                    </div>
                                @endforeach
                            </div>
                            @if(count($imagenes) > 1)
                            
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAlojamiento" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselAlojamiento" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            @endif
                        </div>
                    @endif
                    
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            
                            <p class="card-text">{!! nl2br(e($Alojamiento->descripcion)) !!}</p>
                        </div>
                    </div>
                    
                    <div class="d-flex justify-content-center mt-2 mb-2">
                        {!! $Alojamiento->ubicacion !!}
                    </div>
                </div>
            </div>
            
        </div>
       
    </div> 
</div>
@endsection
