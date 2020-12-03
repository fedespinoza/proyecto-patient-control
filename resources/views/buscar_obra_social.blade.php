@extends('layouts.plantilla')

@section('title', 'buscar-obra-social')
    
@section('content')
    <div class="col-9 contenido buscarOS">
        <h2>Buscar Obra Social</h2>
        <form action="">
            <select name="" id="">
                <option value="">-Seleccionar-</option>
            </select>
            <input type="text" placeholder="Nombre">
            <input type="text" placeholder="CUIT">
            <div class="separarInput">
                <input type="submit" value="Buscar" class="boton btn btn-warning">
            </div>
        </form>
    </div><!--col-9-->
@endsection