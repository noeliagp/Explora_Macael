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
                        <a class="nav-link fs-3 fw-bold" href="#como-llegar">Cómo Llegar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-3 fw-bold" href="#planning">Itinerario</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-3 fw-bold" href="#actividades">Actividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-3 fw-bold" href="#restaurantes">Bares - Restaurantes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-3 fw-bold" href="#alojamientos">Alojamientos</a>
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
                    <img src="https://i.ibb.co/DzSWnMj/Como-llegar.jpg" class="img-fluid rounded" alt="Cómo Llegar">
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
                            <div class="row justify-content-center mb-4">
                                <div class="col-md-8">
                                    <img src="https://i.ibb.co/sjNFhfL/image.png" alt="image" class="img-fluid itinerary-img">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <h5>Mediodía</h5>
                            <p>Visita al Museo del Mármol de Macael. Conoce la historia del mármol, participa en la plataforma 4D y realiza un taller de artesanía.</p>
                            <p>Duración: 1.5 horas</p>
                            <div class="row justify-content-center mb-4">
                                <div class="col-md-8">
                                    <img src="https://i.ibb.co/VvyvdKk/image.png" alt="Visita al museo del mármol con la posibilidad de probar la gafas de 4d para vivir una experiencia única" class="img-fluid itinerary-img">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <h5>Tarde</h5>
                            <p>Conduce hasta el Mirador de Cosentino para disfrutar de una espectacular panorámica de las canteras.</p>
                            <div class="row justify-content-center mb-4">
                                <div class="col-md-8">
                                    <img src="https://i.ibb.co/brF2wNc/image.png" alt="image" class="img-fluid itinerary-img">
                                </div>
                            </div>
                          
                            <p>Opcional: Realiza el Sendero del Mármol (4.6 km, 1.5 horas solo ida) para acceder a las canteras a pie.</p>
                            <p>Nuevo atractivo turístico en Macael, que viene a completar la oferta existente alrededor de la Cantería del Mármol de Macael: La Cantera Histórica "Hoyos del Tío Amador". 
                                Declarada Bien de Interés Cultural. En ella se puede apreciar vestigios de su explotación anteriores a la introducción de los adelantos técnicos que llegaron con la industrialización. Dichos vestigios son interpretados a través de un dispositivo de realidad aumentada instalado en el cortijo en el que se refugiaban los canteros (Necesario reservarlo en la Oficina municipal de Información Turística de Macael 950128916).
                                Se alcanza mediante un camino accesible a personas de movilidad reducida, de 450 mts., que parte del Mirador de Cosentino.
                                Está integrado en el Sendero del Mármol SL-A170.
                            </p>
                            <div class="row justify-content-center mb-4">
                                <div class="col-md-10">
                                    <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Freel%2F370367125763942%2F&show_text=false&width=560&t=0" width="100%" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <h5>Comida</h5>
                            <p>Recomendamos para la comida  el Restaurante Los Membrives (Avenida Andalucía, 6) y disfruta de la gastronomía tradicional.</p>
                            <a href="/donde_comer">Más opciones donde comer</a>
                        </li>
                        <li class="list-group-item">
                            <h5>Atardecer</h5>
                            <p>Pasea por el itinerario urbano Rincones de Macael y descubre los lugares más emblemáticos del pueblo.</p>
                            <div class="row justify-content-center mb-4">
                                <div class="col-md-8">
                                    <img src="https://i.ibb.co/YtTR2Hk/image.png" alt="image" class="img-fluid itinerary-img">
                                </div>
                            </div>
                            <a href="/que ver">Más opciones que visitar</a>
                        </li>
                        <li class="list-group-item">
                            <h5>Noche</h5>
                            <p>Aloja en el Hotel Cero Ocho, situado cerca del Mortero más grande del mundo.</p>
                            <p>Cena tapeando en el Bar la Plaza o la Tapería El Hogar.</p>
                            <a href="/donde_comer">Más opciones donde comer</a>
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
                            <p>Para reservar: <a href="https://www.mireservaonline.es/es/servicios/visita-yacimiento-arqueologico-macael-viejo-centro-interpretacion-marmol-macael.aspx">Haz click en este enlace</a></p>
                        </li>
                        <li class="list-group-item">
                            <h5>Mediodía</h5>
                            <p>Visita algunos de los talleres de artesanía y escultura en Macael.</p>
                            <p>Duración: 1.5 horas</p>
                            <p>Para reservar: <a href="https://www.mireservaonline.es/es/servicios/centro-interpretacion-marmol-talleres-artesania-escultura-macael.aspx">Haz click en este enlace</a></p>
                        </li>
                        <li class="list-group-item">
                            <h5>Comida</h5>
                            <p>Almuerza en el Restaurante la Marmita (C/ Pedro Tapia Espinosa, s/n), una opción elegante con una amplia carta presentada en platos de mármol.</p>
                            <a href="/donde_comer">Más opciones donde comer</a>
                        </li>
                        <li class="list-group-item">
                            <h5>Tarde</h5>
                            <p>Disfruta de una visita al Parque de las familias, ideal para niños con muchas atracciones y zonas de juegos, presidido por la escultura de "Pachamama"</p>
                            <div class="row justify-content-center mb-4">
                                <div class="col-md-8">
                                    <img src="https://i.ibb.co/wWNmBPg/image.png" alt="image" class="img-fluid itinerary-img">
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <h5>Eventos</h5>
                            <p>No te pierdas la Recreación Histórica “Canteros y Caciques en la Lucha por el Mármol” y el Rally “Subida del Mármol” si coinciden con las fechas de tu visita.</p>
                            <div class="d-flex justify-content-center">
                                <div class="col-md-10">
                                    <iframe class="mb-3" width="100%" height="281" src="https://www.youtube.com/embed/HgzInNP6DqU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="actividades" class="py-5">
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

    <section id="restaurantes" class="py-5 bg-light">
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
                    <div class="cardMonument-orange h-100 shadow-sm">
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

    <section id="alojamientos" class="py-5">
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
