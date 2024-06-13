@extends('layouts.master')

@section('cuerpo')
<div class="container-fluid p-0">
    <!-- Hero Section -->
    <div class="hero-section text-white text-center" style="background-image: url('https://i.ibb.co/X4y4br0/image.png); background-size: cover; background-position: center;">
        <div class="dark-overlay"></div>
        <div class="container d-flex align-items-center justify-content-center" style="min-height: 100vh;">
            <div>
                <h1 class="display-4">Bienvenido a Explora Macael</h1>
                <p class="lead">Descubre la historia, cultura y belleza de Macael</p>
                <a href="#about" class="btn btn-lg btn-primary mt-4">Descubre Más</a>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">Historia de Macael</h2>
                    <p class="lead">El turismo en Macael se centra en su rica historia y tradición ligada al mármol, una piedra que ha sido el pilar de su cultura y economía durante siglos.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    <div class="feature-box p-4">
                        <img src="https://i.postimg.cc/j2RbNjWy/hornazo-1.jpg" class="img-fluid rounded-circle mb-3" alt="Gastronomía" style="width: 150px;">
                        <h4>Gastronomía</h4>
                        <p>Disfruta de la auténtica gastronomía de Macael, desde migas tradicionales hasta postres únicos.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="feature-box p-4">
                        <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle mb-3" alt="Fiestas y Tradiciones" style="width: 150px;">
                        <h4>Fiestas y Tradiciones</h4>
                        <p>Participa en las festividades locales y experimenta la cultura vibrante de Macael.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="feature-box p-4">
                        <img src="https://via.placeholder.com/150" class="img-fluid rounded-circle mb-3" alt="Naturaleza" style="width: 150px;">
                        <h4>Naturaleza</h4>
                        <p>Explora los paisajes naturales y senderos que rodean la región, perfectos para aventuras al aire libre.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="py-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 mb-4">
                    <h2 class="display-5">Galería</h2>
                </div>
                <div class="col-md-4 mb-4">
                    <img src="https://via.placeholder.com/400x300" class="img-fluid rounded" alt="Galería 1">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="https://via.placeholder.com/400x300" class="img-fluid rounded" alt="Galería 2">
                </div>
                <div class="col-md-4 mb-4">
                    <img src="https://via.placeholder.com/400x300" class="img-fluid rounded" alt="Galería 3">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="display-5">Contacto</h2>
                    <p class="lead">¿Tienes preguntas? ¡Ponte en contacto con nosotros!</p>
                    <a href="mailto:info@exploramacael.com" class="btn btn-lg btn-primary">Enviar Email</a>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection
