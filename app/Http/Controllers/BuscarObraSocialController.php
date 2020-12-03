<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscarObraSocialController extends Controller
{
    public function __invoke()
    {
        return view('buscar_obra_social');
    }
}
