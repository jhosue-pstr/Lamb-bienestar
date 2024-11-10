<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function getEventosByTipo($tipo)
    {
        $eventos = Evento::where('tipo', $tipo)->get();
        return response()->json($eventos);
    }

    public function getEventoById($id)
    {
        $evento = Evento::find($id);
        return response()->json($evento);
    }
}
