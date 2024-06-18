@extends('layouts.master')

@section('cuerpo')
<div class="container-fluid p-0">
    <div class="index-section text-white text-center" style="background-image: url('https://i.ibb.co/X4y4br0/image.png'); background-size: cover; background-position: center;">
        <div class="dark-overlay"></div>
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
            <div>
                <h1 class="display-2">Explora Macael</h1>
                <p class="lead">Descubre la tierra del Mármol</p>
                
            </div>
        </div>
    </div>

    <section id="about" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">Turismo en Macael</h2>
                    <p class="lead">El turismo en Macael se centra en su pasado y presente, escrito a mazo y puntero, está ligado al famoso mármol blanco de sus canteras, aprovechado desde el neolítico, y que ha sido utilizado en los más importantes monumentos que componen el Patrimonio histórico-artístico de España como el Teatro Romano de Mérida, la Alhambra de Granada, el Palacio del Escorial, el Palacio Real de Madrid o la Casa Consistorial de Cartagena.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="feature-box p-4">
                        <a href="/descubre_macael">
                            <img src="https://i.ibb.co/dgFqVXg/hornazo-1-2.jpg" class="img-fluid rounded-circle mb-3" alt="Fiestas y Tradiciones" style="width: 150px;">
                        </a>
                        <h4>Gastronomía</h4>
                        <p>Disfruta de la auténtica gastronomía de Macael, desde migas tradicionales hasta postres únicos.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="feature-box p-4">
                        <img src="https://i.ibb.co/Hg8DLrX/34911170116-24aa3e267a-q.jpg" class="img-fluid rounded-circle mb-3" alt="Fiestas y Tradiciones" style="width: 150px;">
                        <h4>Fiestas y Tradiciones</h4>
                        <p>Participa en las festividades locales y experimenta la cultura vibrante de Macael.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="feature-box p-4">
                        <img src="https://i.ibb.co/2888XgL/13983175382-e20856dac0-q.jpg" class="img-fluid rounded-circle mb-3" alt="Naturaleza" style="width: 150px;">
                        <h4>Naturaleza</h4>
                        <p>Explora los paisajes naturales y senderos, perfectos para aventuras al aire libre.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mb-4">
                    <h2 class="display-5">Galería</h2>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="/que_ver">
                        <img src="https://i.ibb.co/0G5rsPf/fuente-leones-noche.jpg" class="img-fluid rounded gallery-img" alt="Galería 1">
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="/monumento/20">
                        <img src="https://i.ibb.co/fph45BH/mortero.jpg" class="img-fluid rounded gallery-img" alt="Galería 2">
                    </a>
                </div>
                <div class="col-md-4 mb-4">
                    <a href="/que_ver">
                        <img src="https://i.ibb.co/68n3Pwh/foto-marmoris-macael-plazaalmeria-01.jpg" class="img-fluid rounded gallery-img" alt="Galería 3">
                    </a>
                </div>
            </div>
        </div>
    </section>
    
</div>
@endsection
