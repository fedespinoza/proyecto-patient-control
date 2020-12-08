@extends('layouts.plantilla')

@section('title', 'Paciente - ' . $obra->nombre)
    
@section('content')
    <div class="col-9 d-flex flex-column align-items-center">
        <h2 class="tituloShow">Datos de {{$obra->nombre}}</h2>

        <div class="contentShow">
            <div class="muestraUno d-flex flex-column">
                <h2>Nombre: {{$obra->nombre}}</h2>
                <h2>CUIT: {{$obra->cuit}}</h2>
                <h2>Dirección: {{$obra->direccion}}</h2>
                <h2>IVA: {{$obra->iva}}</h2>
            </div>
            <div class="muestraDos d-flex flex-column">
                <h2>Condición de venta: {{$obra->cond_venta}}</h2>
                <h2>URL: {{$obra->url}}</h2>
            </div>
        </div>        

        <div class="botones d-flex">
            <a href="{{route('os.edit', $obra)}}" class="botonEditar">Editar persona</a>
            <form action="{{route('os.destroy', $obra)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="botonEliminar">Eliminar</button>
            </form>
        </div>
    </div>
@endsection