@extends('layouts.masterback')

@section('cuerpo')
<div class="container-fluid">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2>Gestión de Actividades</h2>
        <a href="{{ route('crear_actividad') }}" class="btn btn-primary mb-3">Crear Actividad</a>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Ubicación</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Duracion</th>
                    <th scope="col">Enlace Reserva</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Actividades as $actividad)
                <tr>
                    <td>{{ $actividad->nombre }}</td>
                    <td>{{ $actividad->descripcion }}</td>
                    <td><img src="{{ $actividad->imagen }}" class="img-fluid" width="100" alt="..."></td>
                    <td>{{ $actividad->ubicacion }}</td>
                    <td>{{ $actividad->precio }}</td>
                    <td>{{ $actividad->duracion }}</td>
                    <td>{{ $actividad->enlace_reserva }}</td>
                    <td>
                        <a href="{{ route('editar_actividad', ['id' => $actividad->id]) }}" class="btn btn-warning">Modificar</a>
                        <a href="{{ route('eliminar_actividad', ['id' => $actividad->id]) }}" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
