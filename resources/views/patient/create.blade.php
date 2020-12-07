@extends('layouts.plantilla')

@section('title', 'agregar-paciente')
    
@section('content')
<div class="col-9">
    <h2 class="tituloPacienteNuevo">Agregar paciente nuevo</h2>
    <div class="row">
        <div class="col-2 cargarPacienteLeft d-flex justify-content-start align-items-start flex-column">            
            <a href="#">Informes</a>
            <a href="#">Cargar Facturas</a>
            <a href="#">Cargar Recibo</a>
            <a href="#">Presupuestos</a>
        </div>
        <div class="col-7 formularioPacientes">
            <form action="{{route('patient.store')}}" method="POST">
                @csrf
                <div class="formPrimeraLinea">
                    <input type="text" name="nombre" id="" placeholder="Nombre">
                    <input type="text" name="apellido" id="" placeholder="Apellido">
                </div>
                <div class="formSegundaLinea">
                    <input type="date" name="nacimiento" id="nacimiento" placeholder="Fecha de Nacimiento">
                    <input type="number" name="telefono" placeholder="telefono">
                </div>
                <div class="formTerceraLinea">
                    <input type="number" name="dni" id="" placeholder="DNI">
                    <input type="text" name="escuela" id="" placeholder="Escuela">
                </div>
                <div class="formCuartaLinea">
                    <input type="text" name="obraSocial" id="" placeholder="Obra Social">
                    <input type="number" name="afiliado" id="" placeholder="N° Afiliado">
                </div>
                <div class="formQuintaLinea">
                    <textarea name="diagnostico" id="" cols="30" rows="10" placeholder="Diagnostico"></textarea>
                </div> 
                <input type="submit" value="Agregar" class="boton btn btn-warning">
            </form>
        </div>
    </div>
</div><!--col-9-->
@endsection