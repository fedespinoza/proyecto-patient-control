@extends('layouts.plantilla')

@section('title', 'Pacientes')
    
@section('content')

<div class="col-9">
    <h1>Bienvenido</h1>

    <ul>
        @foreach ($paciente as $pat)
            {{-- <li>{{$pat->nombre}}</li> --}}
            <li><a href="{{route('patient.show', $pat->id)}}">{{$pat->nombre}}</a></li>
        @endforeach
    </ul>

    <form action="{{route('patient.show', $pat->id)}}">
        <select name="" id="">
            @foreach ($paciente as $pat)
                <option value="">{{$pat->nombre}}</option>
            @endforeach
        </select>
        <button type="submit">Buscar</button>
    </form>


</div>

{{-- <div class="col-9">
    <h2>Pacientes</h2>
    <div class="row">
        <div class="col-3">
            <img src="fotos/boy face.jpg" alt="perfil-foto">
            <a href="#">Ver Facturas</a>
            <a href="#">Ver Recibo</a>
            <a href="#">Ver Informes</a>
            <a href="#">Presupuestos</a>
        </div>
        <div class="col-6">
            <div class="primerFila">
                <h6>Nacimiento</h6>
                <p>19/03/2016</p>
                <h6>Escuela</h6>
                <p>Escuela N°16</p>
            </div>
            <div class="segundaFila">
                <h6>Obra Social</h6>
                <p>OSECAC</p>
                <h6>Afiliado</h6>
                <p>N°14621</p>
            </div>
            <div class="terceraFila">
                <h6>Terapias a la que asiste</h6>
                <p>Terapia Ocupacional, Fonoaudiología,Psicología</p>
            </div>
            <div class="cuartaFila">
                <h6>Diagnostico</h6>
                <p>Posee habilidades sociales suficientes para relacionarse en sus contextos de referencia habitual, aunque en ocasiones ha verbalizado no sentirse capaz de desenvolverse en los mismos.</p>
            </div>
            <button>Editar</button>
        </div>
    </div>
</div> --}}
@endsection