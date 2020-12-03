<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class BuscarPacienteController extends Controller
{
    public function __invoke()
    {
        $paciente = Patient::all();
        return view('buscar_paciente', compact('paciente'));
    }
}
