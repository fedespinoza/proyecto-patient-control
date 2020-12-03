@extends('layouts.plantillas')

@section('title', 'Pacientes')
    
@section('content')
<ul>
    @foreach ($paciente as $pat)
        {{-- <li>{{$pat->nombre}}</li> --}}
        <li><a href="{{route('patient.show', $pat->id)}}">{{$pat->nombre}}</a></li>
    @endforeach
</ul>
@endsection