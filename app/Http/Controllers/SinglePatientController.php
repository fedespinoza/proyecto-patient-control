<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class SinglePatientController extends Controller
{
    public function index(){
        return view('patient/patient');
    }

    public function create(){
        return view('patient/create');
    }

    public function store(Request $request){
        $patient = new Patient();

        $patient->nombre = $request->nombre;
        $patient->apellido = $request->apellido;
        $patient->nacimiento = $request->nacimiento;
        $patient->telefono = $request->telefono;
        $patient->escuela = $request->escuela;
        $patient->dni = $request->dni;
        // $patient->terapias = $request->terapias;
        // $patient->obraSocial = $request->obraSobraSocialocial;
        $patient->afiliado = $request->afiliado;
        $patient->foto = $request->foto;
        $patient->diagnostico = $request->diagnostico;

        $patient->save();

        return redirect()->route('patient.show', $patient);

    }

    public function show($id){
        $pax = Patient::find($id);
        return view("patient/show", compact('pax'));
    }

    public function edit($id){
        $pax = Patient::find($id);

        return view("patient/edit", compact('pax'));
    }

    public function update(Request $request, $id){
        $pax = Patient::find($id);

        $pax->nombre = $request->nombre;
        $pax->apellido = $request->apellido;
        $pax->nacimiento = $request->nacimiento;
        $pax->telefono = $request->telefono;
        $pax->escuela = $request->escuela;
        $pax->dni = $request->dni;
        // $patient->terapias = $request->terapias;
        // $patient->obraSocial = $request->obraSobraSocialocial;
        $pax->afiliado = $request->afiliado;
        $pax->foto = $request->foto;
        $pax->diagnostico = $request->diagnostico;

        $pax->save();
        return redirect()->route('patient.show', $pax);
    }

    public function destroy($id) {
        $pax = Patient::find($id);
        $pax->delete();
        return redirect()->route('patient.create', $pax);
        // return view('cualquier.vista');  
    }
}
