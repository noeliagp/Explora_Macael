<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explora Macael</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylesheets/css/backend.css" type="text/css">


  </head>
  <body class="d-flex flex-column vh-100" >
    <nav class="navbar navbar-expand-lg bg-light navbar-light ">
      <div class="container-fluid">
        <a class="navbar-brand ms-5 " href="/"><img src="https://i.ibb.co/5KDnCSF/logo-explora-macael.png" alt="logo-explora-macael" width="150" height="150"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item me-5 fs-3 text-dark fw-bold">
              <a class="nav-link" href="/descubre_macael">Descubre Macael</a>
            </li>
            <li class="nav-item me-5 fs-3  text-dark fw-bold">
              <a class="nav-link" href="/que_ver">Que ver</a>
            </li>
            <li class="nav-item me-5 fs-3  text-dark fw-bold">
              <a class="nav-link" href="/que_hacer">Que hacer</a>
          
            <li class="nav-item me-5 fs-3 text-dark fw-bold">
              <a class="nav-link" href="/donde_comer">Donde comer</a>
            </li>
            <li class="nav-item me-5 fs-3 text-dark fw-bold">
              <a class="nav-link" href="/donde_dormir">Donde dormir</a>
            </li>
          </li>
          <li class="nav-item me-5 fs-3 text-dark fw-bold">
          <a class="nav-link" href="/organiza_tu_viaje">Organiza tu viaje</a>
        </li> 
          </ul>
        </div>
        {{-- <a class="navbar-brand" href="https://macaelturismo.com/"><img src="https://i.ibb.co/nRqwfZN/ESCUDO-MACAEL.png" alt="ESCUDO-MACAEL" width="100" height="100"></a> --}}

      </div>
    </nav>
    
    <div class="container-fluid flex-grow-1" id="content">
        @section('cuerpo')
            Cuerpo de la página
        @show
    </div>
    <footer class="bg-light text-dark mt-auto">
      <div class="container py-4">
        <div class="row">
          <div class="col-md-4 mb-3">
            <h5 class="fw-bold fs-5">Contacto</h5>
            <ul class="list-unstyled">
              <li class="fs-6 ">Dirección: Calle Aprobado 123, Macael</li>
              <li class="fs-6">Email: <a href="mailto:info@macaelexplora.com">info@macaelexplora.com</a></li>
              <li class="fs-6">Teléfono: <a href="tel:+34123456789">+34 123 456 789</a></li>
            </ul>
          </div>
          <div class="col-md-4 mb-3">
            <h5 class="fw-bold fs-5">Enlaces Rápidos</h5>
            <ul class="list-unstyled">
              <li class="fs-6 "><a href="/" class="text-dark" style="text-decoration: none;">Inicio</a></li>
              <li class="fs-6 "><a href="/que_ver" class="text-dark" style="text-decoration: none;">Qué Ver</a></li>
              <li class="fs-6"><a href="/que_hacer" class="text-dark" style="text-decoration: none;">Qué Hacer</a></li>
              <li class="fs-6 "><a href="/organiza_tu_viaje" class="text-dark" style="text-decoration: none;">Organiza tu Viaje</a></li>
            </ul>
          </div>
          <div class="col-md-4 mb-3">
            <h5 class="fw-bold fs-5">Síguenos</h5>
            <ul class="list-unstyled">
              <li class="fs-6 "><a href="#" class="text-dark" style="text-decoration: none;">Facebook</a></li>
              <li class="fs-6 "><a href="#" class="text-dark" style="text-decoration: none;">Instagram</a></li>
              <li class="fs-6 "><a href="#" class="text-dark" style="text-decoration: none;">Twitter</a></li>
            </ul>
          </div>
        </div>
        <div class="text-center fs-4 fw-bold">
          &copy; 2024 Macael - Todos los derechos reservados
        </div>
      </div>
    </footer>
  </body>
</html>