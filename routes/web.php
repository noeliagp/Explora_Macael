<?php

use App\Http\Controllers\ActividadController;
use App\Http\Controllers\AlojamientoController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DescubreMacaelController;
use App\Http\Controllers\HosteleriaController;
use App\Http\Controllers\MonumentoController;
use App\Http\Controllers\OrganizadorController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Ruta para el index (frontend)
Route::get('/', function () {
    return view('frontend.index');
})->name('home');

// Ruta para el login
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

// Ruta para manejar la autenticación (inicio de sesión)
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest')
    ->name('login.store');

// Ruta para cerrar sesión
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Rutas protegidas por middleware de autenticación
Route::middleware('auth')->group(function () {
    // Ruta para el backend
    Route::get('/backend', function () {
        return view('backend.vista_menu_backend');
    })->name('backend');

    Route::get('/back', function () {
        return view('layouts.navigation');
    });

  
    // Rutas para los monumentos backend
    Route::get('backend/monumento', [MonumentoController::class, 'index'])->name('monumento');
    Route::get('backend/crear_monumento', [MonumentoController::class, 'crear'])->name('crear_monumento');
    Route::post('backend/crear_monumento', [MonumentoController::class, 'guardar'])->name('guardar_monumento');
    Route::get('backend/eliminar_monumento/{id}', [MonumentoController::class, 'eliminar'])->name('eliminar_monumento');
    Route::get('backend/editar_monumento/{id}', [MonumentoController::class, 'editar'])->name('editar_monumento');
    Route::post('backend/modificar_monumento', [MonumentoController::class, 'modificar'])->name('modificar_monumento');

    // Rutas para las actividades backend
    Route::get('backend/actividad', [ActividadController::class, 'index'])->name('actividad');
    Route::get('backend/crear_actividad', [ActividadController::class, 'crear'])->name('crear_actividad');
    Route::post('backend/crear_actividad', [ActividadController::class, 'guardar'])->name('guardar_actividad');
    Route::get('backend/eliminar_actividad/{id}', [ActividadController::class, 'eliminar'])->name('eliminar_actividad');
    Route::get('backend/editar_actividad/{id}', [ActividadController::class, 'editar'])->name('editar_actividad');
    Route::post('backend/modificar_actividad', [ActividadController::class, 'modificar'])->name('modificar_actividad');

    // Rutas para la hostelería backend
    Route::get('backend/hosteleria', [HosteleriaController::class, 'index'])->name('hosteleria');
    Route::get('backend/crear_hosteleria', [HosteleriaController::class, 'crear'])->name('crear_hosteleria');
    Route::post('backend/crear_hosteleria', [HosteleriaController::class, 'guardar'])->name('guardar_hosteleria');
    Route::get('backend/eliminar_hosteleria/{id}', [HosteleriaController::class, 'eliminar'])->name('eliminar_hosteleria');
    Route::get('backend/editar_hosteleria/{id}', [HosteleriaController::class, 'editar'])->name('editar_hosteleria');
    Route::post('backend/modificar_hosteleria', [HosteleriaController::class, 'modificar'])->name('modificar_hosteleria');

    // Rutas para el alojamiento backend
    Route::get('backend/alojamiento', [AlojamientoController::class, 'index'])->name('alojamiento');
    Route::get('backend/crear_alojamiento', [AlojamientoController::class, 'crear'])->name('crear_alojamiento');
    Route::post('backend/crear_alojamiento', [AlojamientoController::class, 'guardar'])->name('guardar_alojamiento');
    Route::get('backend/eliminar_alojamiento/{id}', [AlojamientoController::class, 'eliminar'])->name('eliminar_alojamiento');
    Route::get('backend/editar_alojamiento/{id}', [AlojamientoController::class, 'editar'])->name('editar_alojamiento');
    Route::post('backend/modificar_alojamiento', [AlojamientoController::class, 'modificar'])->name('modificar_alojamiento');
});

// Rutas para el frontend
Route::get('/que_ver', [MonumentoController::class, 'mostrarTodosMonumentos'])->name('que_ver');
Route::get('/monumento/{id}', [MonumentoController::class, 'mostrarMonumentosId'])->name('monumento_informacion');

Route::get('/que_hacer', [ActividadController::class, 'mostrarTodasActividades'])->name('que_hacer');
Route::get('/actividad/{id}', [ActividadController::class, 'mostrarActividadesId'])->name('actividad_informacion');

Route::get('/donde_comer', [HosteleriaController::class, 'mostrarTodasHostelerias'])->name('donde_comer');
Route::get('/hosteleria/{id}', [HosteleriaController::class, 'mostrarHosteleriasId'])->name('hosteleria_informacion');

Route::get('/donde_dormir', [AlojamientoController::class, 'mostrarTodosAlojamientos'])->name('donde_dormir');
Route::get('/alojamiento/{id}', [AlojamientoController::class, 'mostrarAlojamientosId'])->name('alojamiento_informacion');

Route::get('/organiza_tu_viaje', [OrganizadorController::class, 'organizaTuViaje'])->name('organiza_tu_viaje');
Route::get('/descubre_macael', [DescubreMacaelController::class, 'descubreMacael'])->name('descubre_macael');