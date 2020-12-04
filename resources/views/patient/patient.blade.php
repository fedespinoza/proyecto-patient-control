@extends('layouts.plantilla')

@section('title', 'Pacientes')
    
@section('content')
<div class="col-9">
    <h1 class="text-dark">Bienvenido</h1>

    {{-- <ul>
        @foreach ($pax as $pat)
            <li><a href="{{route('patient.show', $pat->id)}}">{{$pat->nombre}}</a></li>
        @endforeach
    </ul> --}}


</div>
@endsection