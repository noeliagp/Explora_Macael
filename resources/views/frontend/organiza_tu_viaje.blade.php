@extends('layouts.master')

@section('cuerpo')
<div class="container-fluid p-0">
    <div class="monumentos-section text-white text-center" style="background-image: url('https://i.ibb.co/X4y4br0/image.png'); background-size: cover; background-position: center;">
        <div class="dark-overlay"></div>
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 50vh;">
            <div>
                <h1 class="display-4">Organiza tu Viaje</h1>
                <p class="lead">Encuentra los mejores lugares para hospedarte, comer y actividades en Macael.</p>
            </div>
        </div>
    </div>

    <nav class="navbar-organiza navbar-expand-lg navbar-light bg-light w-100">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fs-3 fw-bold" href="#actividades">Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-3 fw-bold" href="#restaurantes">Bares - Restaurantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-3 fw-bold" href="#alojamientos">Alojamientos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-3 fw-bold" href="#como-llegar">Cómo Llegar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section id="como-llegar" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">Cómo Llegar</h2>
                    <p class="lead">Las mejores rutas para llegar a Macael desde distintas ciudades.</p>
                    <img src="https://i.ibb.co/DzSWnMj/Como-llegar.jpg">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h5>Desde Almería</h5>
                    <p>a) Autovía del Mediterráneo (E-15 o N-340) dirección a Murcia. Enlace 547, A-334 dirección Baza. Desvío en Olula del Rio, A-349 hasta Macael.</p>
                    <p>b) A-92 dirección Granada. Desvío A-370 en Rioja dirección Tabernas. A-349 pasando por la Planta Solar hasta Macael.</p>
                </div>
                <div class="col-md-4">
                    <h5>Desde Murcia</h5>
                    <p>Autovía del Mediterráneo (E-15 o N-340) dirección a Almería. Enlace 547, A-334 dirección Baza. Desvío en Olula del Rio, A-349 hasta Macael.</p>
                </div>
                <div class="col-md-4">
                    <h5>Desde Granada</h5>
                    <p>A-92 dirección Puerto Lumbreras. Desvío en Baza, A-334 dirección Huercal-Overa. Desvío en Olula del Rio, A-349 hasta Macael.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="planning" class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">Plan de 2 Días en Macael</h2>
                    <p class="lead">Aprovecha al máximo tu visita con nuestro itinerario sugerido.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h3 class="mb-3">Día 1</h3>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h5>Mañana</h5>
                            <p>Visita la oficina de turismo en el Museo del Mármol para obtener información y contratar una guía local.</p>
                            <p>Horario: 10:00 - 14:00 y 17:00 - 19:00 (Octubre–Abril); 10:00 - 14:00 y 18:00 - 20:00 (Mayo–Septiembre); domingo por la tarde y lunes cerrado.</p>
                        </li>
                        <li class="list-group-item">
                            <h5>Mediodía</h5>
                            <p>Visita al Museo del Mármol de Macael. Conoce la historia del mármol, participa en la plataforma 4D y realiza un taller de artesanía.</p>
                            <p>Duración: 1.5 horas</p>
                        </li>
                        <li class="list-group-item">
                            <h5>Tarde</h5>
                            <p>Conduce hasta el Mirador de Cosentino para disfrutar de una espectacular panorámica de las canteras.</p>
                            <p>Opcional: Realiza el Sendero del Mármol (4.6 km, 1.5 horas solo ida) para acceder a las canteras a pie.</p>
                        </li>
                        <li class="list-group-item">
                            <h5>Comida</h5>
                            <p>Almuerza en el Restaurante Los Membrives (Avenida Andalucía, 6) y disfruta de la gastronomía tradicional.</p>
                        </li>
                        <li class="list-group-item">
                            <h5>Atardecer</h5>
                            <p>Pasea por el itinerario urbano Rincones de Macael y descubre los lugares más emblemáticos del pueblo.</p>
                        </li>
                        <li class="list-group-item">
                            <h5>Noche</h5>
                            <p>Aloja en el Hotel Cero Ocho, situado cerca del Mortero más grande del mundo.</p>
                            <p>Cena tapeando en el Bar la Plaza o la Tapería El Hogar.</p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3 class="mb-3">Día 2</h3>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <h5>Mañana</h5>
                            <p>Visita el Yacimiento Arqueológico de Macael Viejo y recorre el sendero circular señalizado.</p>
                            <p>Duración: 2 horas</p>
                        </li>
                        <li class="list-group-item">
                            <h5>Mediodía</h5>
                            <p>Visita algunos de los talleres de artesanía y escultura en Macael.</p>
                            <p>Duración: 1.5 horas</p>
                        </li>
                        <li class="list-group-item">
                            <h5>Comida</h5>
                            <p>Almuerza en el Restaurante la Marmita (C/ Pedro Tapia Espinosa, s/n), una opción elegante con una amplia carta presentada en platos de mármol.</p>
                        </li>
                        <li class="list-group-item">
                            <h5>Tarde</h5>
                            <p>Disfruta de una visita al Parque de las familias, ideal para niños con muchas atracciones y zonas de juegos.</p>
                        </li>
                        <li class="list-group-item">
                            <h5>Eventos</h5>
                            <p>No te pierdas la Recreación Histórica “Canteros y Caciques en la Lucha por el Mármol” y el Rally “Subida del Mármol” si coinciden con las fechas de tu visita.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="activities" class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">Lista de Actividades</h2>
                    <p class="lead">Explora las actividades disponibles para disfrutar en Macael.</p>
                </div>
            </div>
            <div class="row">
                @foreach($Actividades as $Actividad)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cardMonument h-100 shadow-sm">
                        <img src="{{$Actividad->imagen}}" class="cardMonument-img-top" alt="Imagen de {{$Actividad->nombre}}">
                        <div class="cardMonument-body d-flex flex-column">
                            <h3 class="cardMonument-title">{{ $Actividad->nombre }}</h3>
                            <a href="{{ url('actividad/'.$Actividad->id) }}" class="btn btn-primary mt-auto">Ver más detalles</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>    
        </div>
    </section>

    <section id="restaurants" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">Lista de Bares - Restaurantes</h2>
                    <p class="lead">Disfruta de la gastronomía local en los mejores bares y restaurantes de Macael.</p>
                </div>
            </div>
            <div class="row">
                @foreach($Hostelerias as $Hosteleria)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cardMonument h-100 shadow-sm">
                        <img src="{{$Hosteleria->imagen}}" class="cardMonument-img-top" alt="Imagen de {{$Hosteleria->nombre}}">
                        <div class="cardMonument-body d-flex flex-column">
                            <h3 class="cardMonument-title">{{ $Hosteleria->nombre }}</h3>
                            <a href="{{ url('hosteleria/'.$Hosteleria->id) }}" class="btn btn-primary mt-auto">Ver más detalles</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>     
        </div>
    </section>

    <section id="accommodations" class="py-5">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">Lista de Alojamientos</h2>
                    <p class="lead">Descubre los mejores lugares para hospedarte durante tu visita a Macael.</p>
                </div>
            </div>
            <div class="row">
                @foreach($Alojamientos as $Alojamiento)
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="cardMonument h-100 shadow-sm">
                        <img src="{{$Alojamiento->imagen}}" class="cardMonument-img-top" alt="Imagen de {{$Alojamiento->nombre}}">
                        <div class="cardMonument-body d-flex flex-column">
                            <h3 class="cardMonument-title">{{ $Alojamiento->nombre }}</h3>
                            <a href="{{ url('alojamiento/'.$Alojamiento->id) }}" class="btn btn-primary mt-auto">Ver más detalles</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>    
        </div>
    </section>

  
</div>
@stop
