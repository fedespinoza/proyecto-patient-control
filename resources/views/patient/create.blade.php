@extends('layouts.plantilla')

@section('title', 'agregar-paciente')
    
@section('content')
<div class="col-9">
    <h2 class="tituloPacienteNuevo">Agregar paciente nuevo</h2>
    <div class="row">
        {{-- <div class="col-3 cargarPacienteLeft d-flex justify-content-around align-items-start flex-column">
            <img src="iconos/user.png" alt="perfil-foto">
            <div class="subirFoto d-flex flex-column align-items-center">
                <form action="" method="POST">
                    <label for="">Adjuntar Foto</label>
                    <input type="file" name="" id="" class="files">
                </form>
            </div>
            
            <a href="#">Informes</a>
            <a href="#">Cargar Facturas</a>
            <a href="#">Cargar Recibo</a>
            <a href="#">Presupuestos</a>
        </div> --}}
        <div class="col-6 formularioPacientes">
            <form action="{{route('patient.store')}}" method="POST">
                @csrf
                <div class="formPrimeraLinea">
                    <input type="text" name="nombre" id="" placeholder="Nombre">
                    <input type="text" name="apellido" id="" placeholder="Apellido">
                </div>
                <div class="formSegundaLinea">
                    <input type="date" name="nacimiento" id="nacimiento">
                    <input type="number" name="telefono" placeholder="telefono">
                    <input type="number" name="dni" id="" placeholder="DNI">
                </div>
                <div class="formTerceraLinea">
                    <select name="terapias" id="">
                        <option value="Terapia Ocupacional">Terapia Ocupacional</option>
                        <option value="Psicología">Psicología</option>
                        <option value="Fonoaudilogía">Fonoaudilogía</option>
                        <option value="Psicopedagogía">Psicopedagogía</option>
                    </select>
                    <input type="text" name="escuela" id="" placeholder="Escuela">
                </div>
                <div class="formCuartaLinea">
                    <input type="text" name="obraSocial" id="" placeholder="Obra Social">
                    <input type="number" name="afiliado" id="" placeholder="N° Afiliado">
                    <input type="text" name="foto" placeholder="foto">
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