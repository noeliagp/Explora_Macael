<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    </head>
    <body class="font-sans text-gray-900 antialiased" style="padding-left:45em">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="/frontend/index">
                    <a class="navbar-brand ms-5 " href="/"><img src="https://i.ibb.co/5KDnCSF/logo-explora-macael.png" alt="logo-explora-macael" width="100" height="100"></a>
                </a>
                <div style="background-color:black; color:white">hola</div>
            </div>

           
        </div>
    </body>
</html>
