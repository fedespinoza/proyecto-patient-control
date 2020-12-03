@extends('layouts.plantilla')

@section('title', 'Home')

@section('content')
    {{-- <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="jumbotron">
            <h5>Welcome, {{ auth()->user()->email }}</h5>
            <h1 class="display-3">Bootstrap 4 Laravel Fortify Authentication</h1>
            <p class="lead">This is a simple auth starter setup for laravel 8 projects</p>
            <hr class="my-4">
            <h2>Features:</h2>
            <ul>
                <li>User Login</li>
                <li>User Registration</li>
                <li>Email Verification</li>
                <li>Forget Password</li>
                <li>Reset Password</li>
            </ul>
            <p class="lead">
                <a class="btn btn-primary" href="" target="_blank" role="button">Github Source Code</a>
            </p>
        </div>
    </div> --}}

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