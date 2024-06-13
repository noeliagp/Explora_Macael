@extends('layouts.masterback')

@section('cuerpo')
<div class="container-fluid">
    <h2>Gestión de Alojamientos</h2>
    <a href="{{ route('crear_alojamiento') }}" class="btn btn-primary mb-3">Crear Alojamiento</a>
    
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Ubicación</th>
                    <th scope="col">ImagenOpcional1</th>
                    <th scope="col">ImagenOpcional2</th>
                    <th scope="col">ImagenOpcional3</th>
                    <th scope="col">EnlaceReserva</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($Alojamientos as $alojamiento)
                <tr>
                    <td>{{ $alojamiento->nombre }}</td>
                    <td>{{ $alojamiento->descripcion }}</td>
                    <td><img src="{{ $alojamiento->imagen }}" class="img-fluid" width="100" alt="..."></td>
                    <td>{{ $alojamiento->ubicacion }}</td>
                    <td><img src="{{ $alojamiento->imagen1 }}" class="img-fluid" width="100" alt="..."></td>
                    <td><img src="{{ $alojamiento->imagen2 }}" class="img-fluid" width="100" alt="..."></td>
                    <td><img src="{{ $alojamiento->imagen3 }}" class="img-fluid" width="100" alt="..."></td>
                    <td>{{ $alojamiento->enlace_reserva }}</td>
                    <td>
                        <a href="{{ route('editar_alojamiento', ['id' => $alojamiento->id]) }}" class="btn btn-warning">Modificar</a>
                        <a href="{{ route('eliminar_alojamiento', ['id' => $alojamiento->id]) }}" class="btn btn-danger">Borrar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop
