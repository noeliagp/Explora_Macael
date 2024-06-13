 @extends('layouts.master')

@section('cuerpo')
<div class="container-fluid m-1 text-center">
    <div class="row justify-content-center"> 
        <div class="col-md-8 text-center"> 
            <h1>Organiza tu Viaje</h1>
            <p class="fs-4">Encuentra los mejores lugares para hospedarte y comer en Macael.</p>
        </div>
    </div>
    <div>
        <h2>Lista de Bares - Restaurante</h2>
         <div class="row">
            @foreach($Hostelerias as $Hosteleria)
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card h-100 d-flex flex-column"> 
                    <h2 class="card-text mt-3">{{ $Hosteleria->nombre }}</h2> 
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="{{$Hosteleria->imagen}}" class="card-img-top m-auto" alt="Imagen de {{$Hosteleria->nombre}}"> 
                  
                        <a href="{{ url('hosteleria/'.$Hosteleria->id) }}" class="btn btn-primary mt-2">Ver más detalles</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>     
        
        <h2>Lista de Alojamientos</h2>
        <div class="row">
            @foreach($Alojamientos as $Alojamiento)
            <div class="col-12 col-md-6 col-lg-3 mb-4">
                <div class="card h-100 d-flex flex-column"> 
                    <h2 class="card-text mt-3">{{ $Alojamiento->nombre }}</h2> 
                    <div class="card-body d-flex flex-column justify-content-center">
                        <img src="{{$Alojamiento->imagen}}" class="card-img-top m-auto" alt="Imagen de {{$Alojamiento->nombre}}"> 
                        <a href="{{ url('alojamiento/'.$Alojamiento->id) }}" class="btn btn-primary mt-2">Ver más detalles</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>    
    </div>
</div>
@stop 
