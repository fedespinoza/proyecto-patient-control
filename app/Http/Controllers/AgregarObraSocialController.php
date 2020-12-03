<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgregarObraSocialController extends Controller
{
    public function __invoke()
    {
        return view('agregar_obra_social');
    }
}
