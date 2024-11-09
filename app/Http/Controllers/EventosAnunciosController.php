<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventosAnunciosController extends Controller
{
    public function index()
    {
        return view('eventos-anuncios');
    }
}
