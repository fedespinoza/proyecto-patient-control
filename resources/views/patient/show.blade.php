@extends('layouts.plantilla')

@section('title', 'Paciente - ' . $pax->nombre)
    
@section('content')
    <div class="col-9 d-flex flex-column align-items-center">
        <h2 class="tituloShow">Datos de {{$pax->nombre}}</h2>

        <div class="contentShow d-flex justify-content-around">
            <div class="muestraUno d-flex flex-column">
                <h2><span class="spanShow" >Nombre:</span> <span onclick="Copiar(this)" class="copy">{{$pax->nombre}}</span></h2>
                <h2><span class="spanShow">ID:</span> <span onclick="Copiar(this)" class="copy">{{$pax->id}}</span></h2>
                <h2><span class="spanShow">Teléfono:</span> <span onclick="Copiar(this)" class="copy">{{$pax->telefono}}</span></h2>
                <h2><span class="spanShow">Nacimiento:</span> <span onclick="Copiar(this)" class="copy">{{$pax->nacimiento}}</span></h2>
                <h2><span class="spanShow">Obra Social:</span> <span onclick="Copiar(this)" class="copy">{{$pax->obra_id}}</span></h2>
                {{-- <input type="text" name="obra_id" class="form-control" id="obra_id" value="{{$pax->obra_id['nombre']}}"> --}}
            </div>
            <div class="muestraDos d-flex flex-column">
                <h2><span class="spanShow">Apellido:</span> <span onclick="Copiar(this)" class="copy">{{$pax->apellido}}</span></h2>
                <h2><span class="spanShow">DNI:</span> <span onclick="Copiar(this)" class="copy">{{$pax->dni}}</span></h2>
                <h2><span class="spanShow">Escuela:</span> <span onclick="Copiar(this)" class="copy">{{$pax->escuela}}</span></h2>      
                <h2><span class="spanShow">Afiliado:</span> <span onclick="Copiar(this)" class="copy">{{$pax->afiliado}}</span></h2>
                <h2 class="diagnostico copy"><span class="spanShow">Diagnóstico:</span> <span onclick="Copiar(this)" class="copy">{{$pax->diagnostico}}</span></h2>
            </div>
        </div>      

        <div class="botones d-flex">
            <a href="{{route('patient.edit', $pax)}}" class="botonEditar">Editar persona</a>
            <form action="{{route('patient.destroy', $pax)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="botonEliminar">Eliminar</button>
            </form>
            <a href="#" class="botonEditar">Ver Historial</a>
        </div>
    </div>
@endsection