@extends('layouts.plantilla')

@section('title', 'Paciente - ' . $pax->nombre)
    
@section('content')
    <div class="col-9">
        <h2>Nombre: {{$pax->nombre}}</h2>
        <h2>Apellido: {{$pax->apellido}}</h2>
        <h2>Teléfono: {{$pax->telefono}}</h2>
        <h2>Escuela: {{$pax->escuela}}</h2>
        <h2>Nacimiento: {{$pax->nacimiento}}</h2>
        <h2>Afiliado: {{$pax->afiliado}}</h2>
        <h2>Foto: {{$pax->foto}}</h2>

        <a href="{{route('patient.edit', $pax)}}">Editar persona</a>
    </div>
@endsection