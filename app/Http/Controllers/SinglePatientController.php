<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\WorkSocial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SinglePatientController extends Controller
{
    public function index(Request $request){
        // if($request){
        //     $buscarpor = $request->get('buscarpor');
        //     $paciente = Patient::where('nombre','LIKE','%' . $buscarpor . '%');
        //     return view('patient/index', compact('paciente', 'buscarpor'));
        //     $paciente = Patient::find($id);
        // }
        $texto=trim($request->get('texto'));
        $paciente =DB::table('patients')
                    ->select('id', 'nombre','apellido', 'dni', 'afiliado')
                    ->where('nombre', 'LIKE', '%'.$texto.'%')
                    ->orWhere('apellido', 'LIKE', '%'.$texto.'%')
                    ->orderBy('apellido', 'asc')
                    ->paginate(8);
        return view('patient.index', compact('paciente', 'texto'));
    }

    public function create(){
        $obra = WorkSocial::all();
        return view('patient.create', compact('obra'));
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
        $patient->obra_id = $request->obra_id;
        $patient->afiliado = $request->afiliado;
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
        $pax->obra_id = $request->obra_id;
        $pax->afiliado = $request->afiliado;
        $pax->diagnostico = $request->diagnostico;

        $pax->save();
        return redirect()->route('patient.show', $pax);
    }

    public function destroy($id) {
        $pax = Patient::find($id);
        $pax->delete();
        return redirect()->route('patient.index', $pax);
        // return view('cualquier.vista');  
    }
}
