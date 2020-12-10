@extends('layouts.plantilla')

@section('title', 'Paciente - ' . $pax->nombre)
    
@section('content')
    <div class="col-9 d-flex flex-column align-items-center">
        <h2 class="tituloShow">Datos de {{$pax->nombre}}</h2>

        <div class="contentShow d-flex justify-content-around">
            <div class="muestraUno d-flex flex-column">
                <h2><span class="spanShow">Nombre:</span> {{$pax->nombre}}</h2>
                <h2><span class="spanShow">ID:</span> {{$pax->id}}</h2>
                <h2><span class="spanShow">Teléfono:</span> {{$pax->telefono}}</h2>
                <h2><span class="spanShow">Nacimiento:</span> {{$pax->nacimiento}}</h2>
                <h2><span class="spanShow">Obra Social:</span> {{$pax->obra_id}}</h2>
            </div>
            <div class="muestraDos d-flex flex-column">
                <h2><span class="spanShow">Apellido:</span> {{$pax->apellido}}</h2>
                <h2><span class="spanShow">DNI:</span> {{$pax->dni}}</h2>
                <h2><span class="spanShow">Escuela:</span> {{$pax->escuela}}</h2>      
                <h2><span class="spanShow">Afiliado:</span> {{$pax->afiliado}}</h2>
                <h2 class="diagnostico"><span class="spanShow">Diagnóstico:</span> {{$pax->diagnostico}}</h2>
            </div>
        </div>

        

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