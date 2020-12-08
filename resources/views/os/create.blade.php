@extends('layouts.plantilla')

@section('title', 'agregar-paciente')
    
@section('content')
<div class="col-9"> 
    <h2 class="buscarOS pt-5 tituloPacienteNuevo">Agregar nueva Obra Social</h2>
        <div class="row">
            <div class="col-9 formularioOS">
                <form action="{{route('os.store')}}" method="POST">
                    @csrf
                    <div class="formOsPrimeraLinea">
                        <input type="text" name="nombre" id="" placeholder="Obra Social">
                        <input type="number" name="cuit" id="" placeholder="CUIT">
                    </div>
                    <div class="formOsSegundaLinea">
                        <input type="text" name="direccion" id="" placeholder="Dirección">
                        <input type="text" name="iva" id="" placeholder="Condición frente IVA">
                    </div>
                    <div class="formOsTerceraLinea">
                        <input type="text" name="cond_venta" id="" placeholder="Condición de Venta">
                    </div>
                    <div class="formOsCuartaLinea">
                        <input type="text" name="url" id="" placeholder="URL de la web">
                    </div>
                    <input type="submit" value="Agregar" class="boton btn btn-warning">
                </form>
            </div>
        </div>
</div><!--col-9-->
@endsection