@extends('layouts.masterback')

@section('cuerpo')
    <h1>Bienvenido a backend de <b>Explora Macael </b></h1>
    <div class="container">
        <h2>Acciones que puede realizar en este admin panel</h2>
        <div class="actions-section">
            <h3>Monumentos</h3>
            <ul>
                <a href="/backend/crear_monumento"><li>Crear</li></a>
                <a href="/backend/monumento"><li>Listar</li></a>
                <li>Modificar</li>
                <li>Borrar</li>
               
            </ul>
        </div>
        <div class="actions-section">
            <h3>Hoteles</h3>
            <ul>
              <a href="/backend/crear_alojamiento"><li>Crear</li></a>
              <a href="/backend/alojamiento"><li>Listar</li></a>
              <li>Modificar</li>
              <li>Borrar</li>
             
            </ul>
        </div>
        <div class="actions-section">
            <h3>Bares - Restaurantes</h3>
            <ul>
              <a href="/backend/crear_hosteleria"><li>Crear</li></a>
              <a href="/backend/hosteleria"><li>Listar</li></a>
              <li>Modificar</li>
              <li>Borrar</li>
             
            </ul>
        </div>
        <div class="actions-section">
            <h3>Actividades</h3>
            <ul>
              <a href="/backend/crear_actividad"><li>Crear</li></a>
              <a href="/backend/actividad"><li>Listar</li></a>
              <li>Modificar</li>
              <li>Borrar</li>
             
            </ul>
        </div>
    </div>
@stop