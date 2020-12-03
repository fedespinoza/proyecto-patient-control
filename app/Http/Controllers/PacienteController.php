<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function __invoke(){
        $paciente = Patient::all();
        return view('paciente', compact('paciente'));
    }
}
