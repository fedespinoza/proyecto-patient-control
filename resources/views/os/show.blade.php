@extends('layouts.plantilla')

@section('title', 'Obra Social - ' . $obra->nombre)
    
@section('content')
    <div class="col-9 d-flex flex-column align-items-center">
        <h2 class="tituloShow">Datos de {{$obra->nombre}}</h2>

        <div class="contentShow d-flex justify-content-around">
            <div class="muestraUnoObra d-flex flex-column">
                <h2><span class="spanShow">Nombre:</span> <span class="copy" onclick="Copiar(this)">{{$obra->nombre}}</span></h2>
                <h2><span class="spanShow">CUIT:</span> <span class="copy" onclick="Copiar(this)">{{$obra->cuit}}</span></h2>
                <h2><span class="spanShow">Dirección:</span> <span class="copy" onclick="Copiar(this)">{{$obra->direccion}}</span></h2>
            </div>
            <div class="muestraDosObra d-flex flex-column">
                <h2><span class="spanShow">IVA:</span> <span class="copy" onclick="Copiar(this)">{{$obra->iva}}</span></h2>
                <h2><span class="spanShow">Condición de venta:</span> <span class="copy" onclick="Copiar(this)">{{$obra->cond_venta}}</span></h2>
                <h2><span class="spanShow">URL:</span> <span class="copy" onclick="Copiar(this)">{{$obra->url}}</span></h2>
            </div>
        </div>        

        <div class="botones d-flex">
            <a href="{{route('os.edit', $obra)}}" class="botonEditar">Editar Obra Social</a>
            <form action="{{route('os.destroy', $obra)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="botonEliminar">Eliminar</button>
            </form>
        </div>
    </div>
@endsection