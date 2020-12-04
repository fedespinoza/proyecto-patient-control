@extends('layouts.plantilla')

@section('title', 'buscar-paciente')
    
@section('content')
    <div class="col-9 buscarPacientes">
        <h2>Buscar Pacientes</h2>
    <form action="{{route('patient.show', $paciente->all())}}" method="get">
            <select name="" id="">
                <option value="">-- Seleccionar --</option>
                @foreach ($paciente as $pat)
                <option value="">{{$pat->nombre}} {{$pat->apellido}}</option>
                @endforeach
            </select>
            <input type="text" placeholder="Nombre">
            <input type="text" placeholder="Apellido">
            <input type="number" placeholder="DNI">  
            <div class="separarInput">
                <input type="submit" value="Buscar" class="boton btn btn-warning">
            </div>
        </form>
    </div>
@endsection