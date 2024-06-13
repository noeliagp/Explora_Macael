@extends('layouts.masterback')

@section('cuerpo')
<div class="container-fluid">
    @isset($Hosteleria)
        <h2>Modificar Hosteleria</h2>
    @else
        <h2>Añadir Bar - Restaurante </h2>
    @endisset
    
    <form action="@isset($Hosteleria){{ route('modificar_hosteleria') }}@else{{ route('guardar_hosteleria') }}@endisset" method="POST" enctype="multipart/form-data">
        @csrf
        @isset($Hosteleria) 
            <input type="hidden" class="form-control" id="id" name="id" value="{{$Hosteleria->id}}" required> 
        @endisset
        <div class="row">
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $Hosteleria->nombre ?? '') }}" required>
                </div>
            </div>
            <div class="col-md-8">
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion">@isset($Hosteleria) {{$Hosteleria->descripcion}} @endisset</textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="img" class="form-label">Imagen Principal</label>
                    <input type="file" class="form-control" id="img" name="img"  @isset($Hosteleria) value="{{$Hosteleria->imagen}}" @endisset >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="ubicacion" class="form-label">Ubicación</label>
                    <input type="text" class="form-control" id="ubicacion" name="ubicacion" @isset($Hosteleria) value="{{$Hosteleria->ubicacion}}"  @endisset  >
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="horario" class="form-label">Horario</label>
                    {{-- <input type="textarea" class="form-control" id="horario" name="horario" @isset($Hosteleria) value="{{$Hosteleria->horario}}" @endisset  > --}}
                    <textarea class="form-control" id="horario" name="horario">@isset($Hosteleria) {{$Hosteleria->horario}} @endisset</textarea>

                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" @isset($Hosteleria) value="{{$Hosteleria->telefono}}"  @endisset  >
                </div>
            </div>
          

        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@stop