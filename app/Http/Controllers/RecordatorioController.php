<?php

namespace App\Http\Controllers;

use App\Models\Recordatorio;
use Illuminate\Http\Request;

class RecordatorioController extends Controller
{
    // Método para guardar un nuevo recordatorio
    public function store(Request $request)
    {
        $recordatorio = Recordatorio::create($request->all());
        return response()->json(['success' => true, 'recordatorio' => $recordatorio]);
    }

    // Método para obtener el último recordatorio
    public function getLatest()
    {
        $recordatorio = Recordatorio::orderBy('created_at', 'desc')->first();
        return response()->json($recordatorio);
    }
}
