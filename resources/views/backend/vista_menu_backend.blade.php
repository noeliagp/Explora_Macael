<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylesheets/css/app.css" type="text/css">
    <title>Backend Explora Macael</title>
</head>
<body>
    <h1>Bienvenido al backend de Explora Macael</h1> 
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/backend">Menu Backend</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/backend/monumento">Gestión Monumentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/backend/hosteleria">Gestión Hostelería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/backend/alojamiento">Gestión Alojamiento</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/backend/actividad">Gestión Actividades</a>
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
</body>
</html>
