<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformacionController extends Controller
{
    public function index()
    {
        // Lógica adicional si es necesario
        return view('mas-informacion');
    }
}
