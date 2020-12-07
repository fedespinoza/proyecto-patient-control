@extends('layouts.plantilla')

@section('title', 'Paciente - ' . $pax->nombre)
    
@section('content')
    <div class="col-9 d-flex flex-column align-items-center">
        <h2 class="tituloShow">Datos de {{$pax->nombre}}</h2>

        <div class="contentShow">
            <div class="muestraUno d-flex flex-column">
                <h2>Nombre: {{$pax->nombre}}</h2>
                <h2>Teléfono: {{$pax->telefono}}</h2>
                <h2>Nacimiento: {{$pax->nacimiento}}</h2>
                <h2>Obra Social: {{$pax->obraSocial}}</h2>
            </div>
            <div class="muestraDos d-flex flex-column">
                <h2>Apellido: {{$pax->apellido}}</h2>
                <h2>DNI: {{$pax->dni}}</h2>
                <h2>Escuela: {{$pax->escuela}}</h2>      
                <h2>Afiliado: {{$pax->afiliado}}</h2>
            </div>
        </div>
        <h2 class="diagnostico">Diagnóstico: {{$pax->diagnostico}}</h2>
        

        <div class="botones d-flex">
            <a href="{{route('patient.edit', $pax)}}" class="botonEditar">Editar persona</a>
            <form action="{{route('patient.destroy', $pax)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="botonEliminar">Eliminar</button>
            </form>
        </div>
    </div>
@endsection