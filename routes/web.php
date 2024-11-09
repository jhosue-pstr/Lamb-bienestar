<?php

use App\Http\Controllers\EventosAnunciosController;
use App\Http\Controllers\InformacionController;
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
