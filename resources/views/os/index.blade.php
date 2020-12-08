@extends('layouts.plantilla')

@section('title', 'agregar-obra-social')
    
@section('content')
    <div class="col-9">
        <h1 class="text-dark gestionPacientes">Gestión de Obras Sociales</h1>

    <form class="form-inline md-form mr-auto mb-4" action="{{route('os.index')}}" method="get">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="texto" value="{{$texto}}">
        <button class="btn btn-outline-warning btn-rounded btn-sm my-0" type="submit">Buscar</button>
    </form>


    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Opciones</th>
            <th scope="col">Nombre</th>
            <th scope="col">Cuit</th>
            <th scope="col">Iva</th>
            {{-- <th scope="col">Obra Social</th> --}}
            <th scope="col">Condición de venta</th>
          </tr>
        </thead>
        @if(count($obras)<=0)
            <tr>
                <td colspan="5">No hay resultados</td>
            </tr>
        @else
        <tbody>
            @foreach ($obras as $obra)
            <tr>
                <th scope="row"><a href="{{route('os.show', $obra->id)}}" class="btn btn-warning btn-sm">Ver Obra Social</a></th>
                <td>{{$obra->nombre}}</td>
                <td>{{$obra->cuit}}</td>
                <td>{{$obra->iva}}</td>
                {{-- <td>{{$pat->obraSocial}}</td> --}}
                <td>{{$obra->cond_venta}}</td>
            </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    {{$obras->links()}}


    {{-- <div class="pacientesDiv">
        @foreach ($paciente as $pat)
            <p class="bg-warning pacienteSolo"><a href="{{route('patient.show', $pat->id)}}">{{$pat->nombre}} {{$pat->apellido}}</a></p>
        @endforeach
    </div> --}}
    </div>
@endsection