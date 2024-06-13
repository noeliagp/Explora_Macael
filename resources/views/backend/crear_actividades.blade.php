@extends('layouts.masterback')

@section('cuerpo')
<div class="container-fluid">
    @isset($Actividad)
        <h2>Modificar Actividad</h2>
    @else
        <h2>Añadir Actividades</h2>
    @endisset
    
    <form action="@isset($Actividad){{ route('modificar_actividad') }}@else{{ route('guardar_actividad') }}@endisset" method="POST" enctype="multipart/form-data">
        @csrf
        @isset($Actividad) 
            <input type="hidden" class="form-control" id="id" name="id" value="{{$Actividad->id}}" required> 
        @endisset
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $Actividad->nombre ?? '') }}" required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion">@isset($Actividad) {{$Actividad->descripcion}} @endisset</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="img" class="form-label">Imagen Principal</label>
                    <input type="file" class="form-control" id="img" name="img"  @isset($Actividad) value="{{$Actividad->imagen}}" @endisset >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="ubicacion" class="form-label">Ubicación</label>
                    <input type="text" class="form-control" id="ubicacion" name="ubicacion" @isset($Actividad) value="{{$Actividad->ubicacion}}"  @endisset  >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" step="0.01" class="form-control" id="precio" name="precio" @isset($Actividad) value="{{$Actividad->precio}}" @endisset  >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="duracion" class="form-label">Duracion</label>
                    <input type="text" class="form-control" id="duracion" name="duracion" @isset($Actividad) value="{{$Actividad->duracion}}"  @endisset  >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="enlace_reserva" class="form-label">Enlace Reserva</label>
                    <input type="text" class="form-control" id="enlace_reserva" name="enlace_reserva" @isset($Actividad) value="{{$Actividad->enlace_reserva}}"  @endisset  >
                </div>
            </div>

        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@stop