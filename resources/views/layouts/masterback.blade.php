<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explora Macael</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/backend.css') }}" rel="stylesheet"> 
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid">
          <a class="navbar-brand" href="/backend">Menu Backend de Explora Macael </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavDropdown" >
            <ul class="navbar-nav">
              
              <li class="nav-item me-3">
              <a href="/backend/monumento" class="btn btn-primary">Gestión Monumentos</a> 
              </li>
              <li class="nav-item me-3">
                <a href="/backend/hosteleria" class="btn btn-primary">Gestión Hostelería </a>
              </li>
              <li class="nav-item me-3">
                <a href="/backend/alojamiento" class="btn btn-primary">Gestión Alojamiento</a>
              </li>
              <li class="nav-item dropdown me-3">
                <a href="/backend/actividad" class="btn btn-primary"> Gestión Actividades</a> 
              </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          <button onclick="document.getElementById('logout-form').submit();" class="btn btn-danger">
              Cerrar sesión
          </button>
          </div>
        </div>
    </nav>
    <div class="container-fluid" id="content">
        @section('cuerpo')
            Cuerpo de la página
        @show
    </div>
  </body>
</html>