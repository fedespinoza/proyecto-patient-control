@extends('layouts.plantilla')

@section('title', 'Editar')
    
@section('content')
<div class="col-9">
    <h2 class="tituloShow">Editar paciente</h2>
    <div class="row">
        <div class="col-2 cargarPacienteLeft d-flex justify-content-start align-items-start flex-column">            
            <a href="#">Informes</a>
            <a href="#">Cargar Facturas</a>
            <a href="#">Cargar Recibo</a>
            <a href="#">Presupuestos</a>
        </div>
        <div class="col-6 formularioPacientes">
            <form action="{{route('patient.update', $pax)}}" method="POST">
                @csrf
                @method('put')
                <div class="formPrimeraLinea">
                    <input type="text" name="nombre" id="" placeholder="Nombre" value="{{$pax->nombre}}">
                    <input type="text" name="apellido" id="" placeholder="Apellido" value="{{$pax->apellido}}">
                </div>
                <div class="formSegundaLinea">
                    <input type="number" name="telefono" placeholder="telefono" value="{{$pax->telefono}}">
                    <input type="number" name="dni" id="" placeholder="DNI" value="{{$pax->dni}}">
                </div>
                <div class="formTerceraLinea">
                    <input type="date" name="nacimiento" id="nacimiento" value="{{$pax->nacimiento}}">
                    <input type="text" name="escuela" placeholder="escuela" value="{{$pax->escuela}}">
                </div>
                <div class="formCuartaLinea">
                    <input type="text" name="obraSocial" id="" placeholder="Obra Social" value="{{$pax->obraSocial}}">
                    <input type="number" name="afiliado" id="" placeholder="N° Afiliado" value="{{$pax->afiliado}}"></div>
                <div class="formQuintaLinea">
                    <textarea name="diagnostico" id="" cols="30" rows="10" placeholder="Diagnostico">{{$pax->diagnostico}}</textarea>
                </div> 
                <input type="submit" value="Guardar" class="boton btn btn-warning">
            </form>
        </div>
    </div>
</div><!--col-9-->
@endsection