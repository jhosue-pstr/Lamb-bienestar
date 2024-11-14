<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventosAnunciosController extends Controller
{
    public function index()
    {
        // Obtener todos los eventos que tienen un afiche
        $eventos = Evento::whereNotNull('afiche')->get();
        return view('eventos-anuncios', compact('eventos'));
    }
}
