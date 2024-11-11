<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\EventosAnunciosController;
use App\Http\Controllers\InformacionController;
use App\Http\Controllers\RecordatorioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rutas protegidas para usuarios autenticados
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Rutas para eventos y anuncios
Route::get('/eventos-anuncios', [EventosAnunciosController::class, 'index'])->name('eventos-anuncios');
Route::get('/mas-informacion', [InformacionController::class, 'index'])->name('mas-informacion');

// Rutas para API de eventos
Route::get('/api/eventos/{tipo}', [EventoController::class, 'getEventosByTipo']);
Route::get('/api/evento/{id}', [EventoController::class, 'getEventoById']);

// Rutas para Recordatorios
Route::post('/recordatorio', [RecordatorioController::class, 'store']);
Route::get('/api/recordatorio', [RecordatorioController::class, 'getLatest']);

// Vistas estáticas
Route::get('/anuncios', function () {
    return view('anuncios');
})->name('anuncios');
Route::get('/mas-informacion2', function () {
    return view('mas-informacion2');
})->name('mas-informacion2');

// Rutas para creación y gestión de eventos
Route::middleware(['auth'])->group(function () {
    // Vista para la lista de eventos y botón para crear uno nuevo
    Route::get('/creacion-evento', [EventoController::class, 'index'])->name('creacion-evento');

    // Vista para ingresar detalles de un nuevo evento
    Route::get('/creacion-evento-detalles', [EventoController::class, 'create'])->name('creacion-evento-detalles');

    // Ruta para guardar un nuevo evento
    Route::post('/guardar-evento', [EventoController::class, 'store'])->name('guardar-evento');

    // Ruta para ver los detalles de un evento específico
    Route::get('/evento/{id}', [EventoController::class, 'show'])->name('evento-detalle');

    Route::delete('/eliminar-evento/{id}', [EventoController::class, 'destroy'])->name('eliminar-evento');


    Route::get('/editar-evento/{id}', [EventoController::class, 'edit'])->name('editar-evento');
    Route::put('/actualizar-evento/{id}', [EventoController::class, 'update'])->name('actualizar-evento');


});
