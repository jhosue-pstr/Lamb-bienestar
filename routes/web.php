<?php

use App\Livewire\Admin\RoleMain;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
// routes/web.php
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth']);


    Route::get('/Roles', RoleMain::class)->name('Roles');
});
