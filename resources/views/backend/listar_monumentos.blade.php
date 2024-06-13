@extends('layouts.masterback')

@section('cuerpo')
<div class="container-fluid mt-4">
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="mb-0">Gestión de Monumentos</h2>
                    <a href="{{ route('crear_monumento') }}" class="btn btn-primary">Crear Monumento</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($Monumentos as $monumento)
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100">
                                <img src="{{ $monumento->imagen }}" class="card-img-top img-fluid rounded" alt="Imagen del Monumento">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $monumento->nombre }}</h5>
                                    <p class="card-text">{{ Str::limit($monumento->descripcion, 100) }}</p>
                                    <p class="card-text"><strong>Ubicación:</strong> {{  Str::limit($monumento->ubicacion,100) }}</p>
                                    <div class="d-flex flex-column">
                                        <a href="{{ route('editar_monumento', ['id' => $monumento->id]) }}" class="btn btn-warning btn-sm mb-2">Modificar</a>
                                        <a href="{{ route('eliminar_monumento', ['id' => $monumento->id]) }}" class="btn btn-danger btn-sm">Borrar</a>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    @if($monumento->imagen1)
                                    <img src="{{ $monumento->imagen1 }}" class="img-fluid rounded me-1" width="50" alt="Imagen Opcional 1">
                                    @endif
                                    @if($monumento->imagen2)
                                    <img src="{{ $monumento->imagen2 }}" class="img-fluid rounded me-1" width="50" alt="Imagen Opcional 2">
                                    @endif
                                    @if($monumento->imagen3)
                                    <img src="{{ $monumento->imagen3 }}" class="img-fluid rounded" width="50" alt="Imagen Opcional 3">
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
