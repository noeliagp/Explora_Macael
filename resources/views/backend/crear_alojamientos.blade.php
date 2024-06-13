@extends('layouts.masterback')

@section('cuerpo')
<div class="container-fluid">
    @isset($Alojamiento)
        <h2>Modificar Alojamiento</h2>
    @else
        <h2>Añadir Alojamientos</h2>
    @endisset
    
    <form action="@isset($Alojamiento){{ route('modificar_alojamiento') }}@else{{ route('guardar_alojamiento') }}@endisset" method="POST" enctype="multipart/form-data">
        @csrf
        @isset($Alojamiento) 
            <input type="hidden" class="form-control" id="id" name="id" value="{{$Alojamiento->id}}" required> 
        @endisset
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" @isset($Alojamiento) value="{{$Alojamiento->titulo}}" @endisset required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion">@isset($Alojamiento) {{$Alojamiento->descripcion}} @endisset</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="img" class="form-label">Imagen Principal</label>
                    <input type="file" class="form-control" id="img" name="img" required @isset($Alojamiento) value="{{$Alojamiento->imagen}}" @endisset >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="ubicacion" class="form-label">Ubicación</label>
                    <input type="text" class="form-control" id="ubicacion" name="ubicacion" @isset($Alojamiento) value="{{$Alojamiento->ubicacion}}"  @endisset  required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="img1" class="form-label">Imagen Opcional</label>
                    <input type="file" class="form-control" id="img1" name="img1" @isset($Alojamiento) value="{{$Alojamiento->imagen}}" @endisset  >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="img2" class="form-label">Imagen Opcional</label>
                    <input type="file" class="form-control" id="img2" name="img2" @isset($Alojamiento) value="{{$Alojamiento->imagen}}" @endisset  >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="img3" class="form-label">Imagen Opcional</label>
                    <input type="file" class="form-control" id="img3" name="img3" @isset($Alojamiento) value="{{$Alojamiento->imagen}}" @endisset  >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="enlace_reserva" class="form-label">Enlace de reserva</label>
                    <input type="text" class="form-control" id="enlace_reserva" name="enlace_reserva" @isset($Alojamiento) value="{{$Alojamiento->enlace_reserva}}"  @endisset  required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@stop