@extends('layouts.plantilla')

@section('title', 'Pacientes')
    
@section('content')
<div class="col-9">

    <h1 class="text-dark gestionPacientes">Gestión de Pacientes</h1>

    <form class="form-inline md-form mr-auto mb-4" action="{{route('patient.index')}}" method="get">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="texto" value="{{$texto}}">
            <button class="btn btn-outline-warning btn-rounded btn-sm my-0" type="submit">Buscar</button>
    </form>


    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Opciones</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">DNI</th>
            {{-- <th scope="col">Obra Social</th> --}}
            <th scope="col">Afiliado</th>
          </tr>
        </thead>
        @if(count($paciente)<=0)
            <tr>
                <td colspan="5">No hay resultados</td>
            </tr>
        @else
        <tbody>
            @foreach ($paciente as $pat)
            <tr>
                <th scope="row"><a href="{{route('patient.show', $pat->id)}}" class="btn btn-warning btn-sm">Ver paciente</a></th>
                <td>{{$pat->nombre}}</td>
                <td>{{$pat->apellido}}</td>
                <td>{{$pat->dni}}</td>
                {{-- <td>{{$pat->obraSocial}}</td> --}}
                <td>{{$pat->afiliado}}</td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{$paciente->links()}}


    {{-- <div class="pacientesDiv">
        @foreach ($paciente as $pat)
            <p class="bg-warning pacienteSolo"><a href="{{route('patient.show', $pat->id)}}">{{$pat->nombre}} {{$pat->apellido}}</a></p>
        @endforeach
    </div> --}}


</div>
@endsection