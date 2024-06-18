@extends('layouts.masterback')

@section('cuerpo')
<div class="container-fluid">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h2 class="mb-0">Gestión de Hosteleria</h2>
        <a href="{{ route('crear_hosteleria') }}" class="btn btn-primary">Crear Bares/Restaurantes</a>
    </div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Ubicación</th>
                    <th scope="col">Horario</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Hostelerias as $hosteleria)
                <tr>
                    <td>{{ $hosteleria->nombre }}</td>
                    <td>{{ $hosteleria->descripcion }}</td>
                    <td><img src="{{ $hosteleria->imagen }}" class="img-fluid" width="100" alt="..."></td>
                    <td>{{ $hosteleria->ubicacion }}</td>
                    <td>{{ $hosteleria->horario }}</td>
                    <td>{{ $hosteleria->telefono }}</td>
                    
                    <td>
                        <a href="{{ route('editar_hosteleria', ['id' => $hosteleria->id]) }}" class="btn btn-warning">Modificar</a>
                        <a href="{{ route('eliminar_hosteleria', ['id' => $hosteleria->id]) }}" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
