@extends('layouts.plantilla')

@section('title', 'agregar-paciente')
    
@section('content')
<div class="col-9">
    <h2 class="buscarOS">Agregar paciente nuevo</h2>
    <div class="row">
        <div class="col-9 formularioPacientes">
            <form action="{{route('patient.store')}}" method="POST">
                @csrf
                <div class="formPrimeraLinea">
                    <input type="text" name="nombre" id="" placeholder="Nombre">
                    <input type="text" name="apellido" id="" placeholder="Apellido">
                </div>
                <div class="formSegundaLinea">
                    <input type="date" name="nacimiento" id="nacimiento" placeholder="Fecha de Nacimiento">
                    <input type="number" name="telefono" placeholder="Teléfono">
                </div>
                <div class="formTerceraLinea">
                    <input type="number" name="dni" id="" placeholder="DNI">
                    <input type="text" name="escuela" id="" placeholder="Escuela">
                </div>
                <div class="formCuartaLinea">
                    <select name="obra_id" id="">
                        <option value="">-- Seleccionar --</option>
                        @foreach ($obra as $os)
                    <option value="">{{$os->id}}- {{$os->nombre}}</option>
                        @endforeach
                    </select>
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