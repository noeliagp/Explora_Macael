@extends('layouts.masterback')

@section('cuerpo')
<div class="container-fluid">
    @isset($Monumento)
        <h2>Modificar Monumento</h2>
    @else
        <h2>Añadir Monumentos</h2>
    @endisset
    
    <form action="@isset($Monumento){{ route('modificar_monumento') }}@else{{ route('guardar_monumento') }}@endisset" method="POST" enctype="multipart/form-data">
        @csrf
        @isset($Monumento) 
            <input type="hidden" class="form-control" id="id" name="id" value="{{$Monumento->id}}" required> 
        @endisset
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" @isset($Monumento) value="{{$Monumento->titulo}}" @endisset required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion">@isset($Monumento) {{$Monumento->descripcion}} @endisset</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="img" class="form-label">Imagen Principal</label>
                    <input type="file" class="form-control" id="img" name="img" required @isset($Monumento) value="{{$Monumento->imagen}}" @endisset >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="ubicacion" class="form-label">Ubicación</label>
                    <input type="text" class="form-control" id="ubicacion" name="ubicacion" @isset($Monumento) value="{{$Monumento->ubicacion}}"  @endisset  required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="img1" class="form-label">Imagen Opcional</label>
                    <input type="file" class="form-control" id="img1" name="img1" @isset($Monumento) value="{{$Monumento->imagen}}" @endisset  >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="img2" class="form-label">Imagen Opcional</label>
                    <input type="file" class="form-control" id="img2" name="img2" @isset($Monumento) value="{{$Monumento->imagen}}" @endisset  >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="img3" class="form-label">Imagen Opcional</label>
                    <input type="file" class="form-control" id="img3" name="img3" @isset($Monumento) value="{{$Monumento->imagen}}" @endisset  >
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@stop