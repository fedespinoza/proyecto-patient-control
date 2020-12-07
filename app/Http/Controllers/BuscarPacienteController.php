<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class BuscarPacienteController extends Controller
{
    public function __invoke()
    {
        // $buscarpor=$request->get('buscarpor');
        $paciente = Patient::all();
        return view('buscar-paciente', compact('paciente'));
    }
}
