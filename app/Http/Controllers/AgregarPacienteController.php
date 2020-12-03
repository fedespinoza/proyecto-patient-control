<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgregarPacienteController extends Controller
{
    public function __invoke()
    {
        return view('agregar_paciente');
    }
}
