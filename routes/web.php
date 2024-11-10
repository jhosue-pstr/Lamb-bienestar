<?php

use App\Http\Controllers\EventoController;
use App\Http\Controllers\EventosAnunciosController;
use App\Http\Controllers\InformacionController;
use App\Http\Controllers\RecordatorioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/eventos-anuncios', [EventosAnunciosController::class, 'index'])->name('eventos-anuncios');

Route::get('/mas-informacion', [InformacionController::class, 'index'])->name('mas-informacion');


Route::get('/api/eventos/{tipo}', [EventoController::class, 'getEventosByTipo']);
Route::get('/api/evento/{id}', [EventoController::class, 'getEventoById']);

Route::post('/recordatorio', [RecordatorioController::class, 'store']);
Route::get('/api/recordatorio', [RecordatorioController::class, 'getLatest']);

Route::get('/anuncios', function () {
    return view('anuncios');
})->name('anuncios');

Route::get('/mas-informacion2', function () {
    return view('mas-informacion2');
})->name('mas-informacion2');
