@extends('layouts.plantilla')

@section('title', 'Editar')
    
@section('content')
<div class="col-9">
    <h2 class="tituloShow">Editar paciente</h2>
    <div class="row">
        <div class="col-9 formularioPacientes">
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
                    <select name="obra_id" id="">
                        <option value="{{$pax->obra_id}}"></option>
                        @foreach ($obra as $os)
                            <option value="{{$os->id}}">{{$os->id}}- {{$os->nombre}}</option>
                        @endforeach
                    </select>
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