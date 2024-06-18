<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Macael</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @vite(['resources/css/index.css'])
</head>
<body class="d-flex flex-column vh-100">
    <nav class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="/"><img src="https://i.ibb.co/5KDnCSF/logo-explora-macael.png" alt="logo-explora-macael" width="150" height="150"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item me-5 fs-3 text-dark fw-bold">
                        <a class="nav-link" href="/descubre_macael_en">Discover Macael</a>
                    </li>
                    <li class="nav-item me-5 fs-3 text-dark fw-bold">
                        <a class="nav-link" href="/que_ver">What to See</a>
                    </li>
                    <li class="nav-item me-5 fs-3 text-dark fw-bold">
                        <a class="nav-link" href="/que_hacer">What to Do</a>
                    </li>
                    <li class="nav-item me-5 fs-3 text-dark fw-bold">
                        <a class="nav-link" href="/donde_comer">Where to Eat</a>
                    </li>
                    <li class="nav-item me-5 fs-3 text-dark fw-bold">
                        <a class="nav-link" href="/donde_dormir">Where to Stay</a>
                    </li>
                    <li class="nav-item me-5 fs-3 text-dark fw-bold">
                        <a class="nav-link" href="/organiza_tu_viaje">Plan Your Trip</a>
                    </li>
                </ul>
                <div class="ms-auto me-5">
                    <a href="/" class="btn btn-primary">ES</a>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="container-fluid flex-grow-1" id="content">
        @section('body')
            Body of the page
        @show
    </div>
    <footer class="bg-light text-dark mt-auto">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold fs-5">Contact</h5>
                    <ul class="list-unstyled">
                        <li class="fs-6">Address: Calle García Lorca, 50, 04867 Macael, Almería</li>
                        <li class="fs-6">Email: <a href="mailto:info@macaelexplora.com">info@macaelexplora.com</a></li>
                        <li class="fs-6">Phone: <a href="tel:+34950128916">+34 950 12 89 16</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold fs-5">Opening Hours</h5>
                    <ul class="list-unstyled">
                        <li class="fs-6">Open from <strong>Tuesday to Sunday, including holidays</strong></li>
                        <li class="fs-6">(Closed Sunday and Monday afternoons.)</li>
                        <li class="fs-6">May – October: 10:00 to 14:00 and 18:00 to 20:00.</li>
                        <li class="fs-6">November – April: 10:00 to 14:00 and 17:00 to 19:00.</li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold fs-5">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="fs-6"><a href="/" class="text-dark" style="text-decoration: none;">Home</a></li>
                        <li class="fs-6"><a href="/descubre_macael" class="text-dark" style="text-decoration: none;">Discover Macael</a></li>
                        <li class="fs-6"><a href="/que_ver" class="text-dark" style="text-decoration: none;">What to See</a></li>
                        <li class="fs-6"><a href="/que_hacer" class="text-dark" style="text-decoration: none;">What to Do</a></li>
                        <li class="fs-6"><a href="/organiza_tu_viaje" class="text-dark" style="text-decoration: none;">Plan Your Trip</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h5 class="fw-bold fs-5">Follow Us</h5>
                    <ul class="list-unstyled">
                        <li class="fs-6"><a href="https://www.facebook.com/turismomacael/?fref=ts" class="text-dark" style="text-decoration: none;">Facebook</a></li>
                        <li class="fs-6"><a href="https://www.instagram.com/macaelturismo/" class="text-dark" style="text-decoration: none;">Instagram</a></li>
                        <li class="fs-6"><a href="https://x.com/i/flow/login?redirect_after_login=%2Fmacaelturismo" class="text-dark" style="text-decoration: none;">Twitter</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center fs-4 fw-bold">
                &copy; 2024 Explore Macael - All rights reserved
            </div>
        </div>
    </footer>
</body>
</html>
