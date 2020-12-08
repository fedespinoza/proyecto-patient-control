@extends('layouts.plantilla')

@section('title', 'Editar')
    
@section('content')
<div class="col-9">
    <h2 class="tituloShow">Editar Obra Social</h2>
    <div class="row">
        <div class="col-9 formularioPacientes">
            <form action="{{route('os.update', $obra)}}" method="POST">
                @csrf
                @method('put')
                <div class="formPrimeraLinea">
                    <input type="text" name="nombre" id="" placeholder="Nombre" value="{{$obra->nombre}}">
                    <input type="text" name="cuit" id="" placeholder="CUIT" value="{{$obra->cuit}}">
                </div>
                <div class="formSegundaLinea">
                    <input type="text" name="direccion" placeholder="Direccion" value="{{$obra->direccion}}">
                    <input type="text" name="iva" id="" placeholder="IVA" value="{{$obra->iva}}">
                </div>
                <div class="formTerceraLinea">
                    <input type="text" name="cond_venta" placeholder="Condición de venta" value="{{$obra->cond_venta}}">
                    <input type="text" name="url" placeholder="URL" value="{{$obra->url}}">
                </div>
                <input type="submit" value="Guardar" class="boton btn btn-warning">
            </form>
        </div>
    </div>
</div><!--col-9-->
@endsection