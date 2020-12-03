@extends('layouts.plantilla')

@section('title', 'agregar-obra-social')
    
@section('content')
    <div class="col-9">
        <h2 class="buscarOS pt-5">Agregar nueva Obra Social</h2>
        <div class="row">
            <div class="col-2 cargarPacienteLeft d-flex justify-content-around align-items-center flex-column">
                <img src="iconos/user.png" alt="perfil-foto">
                <form action="">
                    <div class="subirFoto d-flex flex-column align-items-start">
                        <label for="">Adjuntar Foto</label>
                        <input type="file" name="" id="" class="files">
                    </div>
                </form>
            </div>
            <div class="col-7 formularioOS">
                <form action="">
                    <div class="formOsPrimeraLinea">
                        <input type="text" name="" id="" placeholder="Obra Social">
                        <input type="number" name="" id="" placeholder="CUIT">
                    </div>
                    <div class="formOsSegundaLinea">
                        <input type="text" name="" id="" placeholder="Dirección">
                        <input type="text" name="" id="" placeholder="Condición frente IVA">
                    </div>
                    <div class="formOsTerceraLinea">
                        <input type="text" name="" id="" placeholder="Condición de Venta">
                    </div>
                    <div class="formOsCuartaLinea">
                        <input type="text" name="" id="" placeholder="URL de la web">
                    </div>
                    <input type="submit" value="Agregar" class="boton btn btn-warning">
                </form>
            </div>
        </div>
    </div>
@endsection