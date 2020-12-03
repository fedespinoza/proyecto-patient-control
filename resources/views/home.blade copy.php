@extends('layouts.plantilla')

@section('title', 'Home')
    
@section('content')
    <div class="col-9 botones-inicio">
        <div class="botones-top">
            <a href="{{route('agregar-paciente')}}" alt=""><img src="botones/btn1.png" alt="boton-cargar-paciente"></a>
            <a href="{{route('agregar-obra-social')}}" alt=""><img src="botones/btn2.png" alt="boton-obra-social"></a>
            <a href="#" alt=""><img src="botones/btn3.png" alt="reuniones"></a>
        </div>
        <div class="botones-bottom">
            <a href="{{route('buscar-paciente')}}" alt=""><img src="botones/btn4.png" alt="buscar-paciente"></a>
            <a href="{{route('buscar-obra-social')}}" alt=""><img src="botones/btn5.png" alt="buscar-obra-social"></a>
        </div>
        <div class="version">
            <p>Version 1.0</p>
        </div>
    </div> <!--col-9-->
@endsection