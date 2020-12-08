<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/560b7fc6f7.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> 
    <link rel="shortcut icon" href="{{URL::asset('fotos/logo.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- <link rel="stylesheet" href="css/styles.css"> --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 nav-top">
                <div class="logoTitulo d-flex align-items-center">
                    <a href="{{route('home')}}"><img src="{{URL::asset('fotos/logo.png')}}" alt="logo" class="logo"></a>
                    <h1>PATIENT <span>CONTROL</span></h1>
                </div>
                <div class="iconos">
                    <div class="calendario">
                        <img src="{{URL::asset('iconos/calendar.png')}}" alt="calendario">
                        <a href="" class="topCalendario">Calendario</a>
                    </div>
                    <div class="agregar">
                        <img src="{{URL::asset('iconos/add.png')}}" alt="agregar">
                        <div class="dropdown">
                            <button class="btn text-light dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Agregar</button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <button class="dropdown-item" type="button"><a href="{{ route('patient.create') }}"> Cargar Paciente</a></button>
                              <button class="dropdown-item" type="button"><a href="{{route('os.create')}}"> Cargar Obra Social</a></button>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="perfil">
                    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown d-flex align-items-center">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Hola, {{ Auth::user()->name }}
                                </a>
                                <div class="iconProfile pl-2">
                                    <img src="{{URL::asset('iconos/woman.png')}}" alt="perfil">
                                </div>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    {{-- <div class="iconProfile">
                        <img src="iconos/woman.png" alt="perfil">
                        <i class="fas fa-caret-down"></i>
                    </div> --}}
                </div>
            </div>

            <div class="col-3 menu-nav-aside">
                <nav>
                    <a href="{{ route('home') }}" class="{{request()->routeIs('home') ? 'current' : ''}}">INICIO</a>
                    <a href="#" id="show" class="{{request()->routeIs('patient.create', 'patient.index') ? 'current' : ''}}">PACIENTES</a>
                        <a href="{{ route('patient.index') }}" id="ocultar" class="{{request()->routeIs('patient.index') ? 'current' : ''}}">Ver Pacientes</a>
                        <a href="{{ route('patient.create') }}" id="ocultar" class="{{request()->routeIs('patient.create') ? 'current' : ''}}">Agregar Paciente</a>
                    <a href="#" id="showOs" class="{{request()->routeIs('os.index', 'os.create') ? 'current' : ''}}">OBRAS SOCIALES</a>
                        <a href="{{ route('os.index') }}" id="ocultarOs" class="{{request()->routeIs('os.index') ? 'current' : ''}}">Ver Obras Sociales</a>
                        <a href="{{ route('os.create') }}" id="ocultarOs" class="{{request()->routeIs('os.create') ? 'current' : ''}}">Agregar Obra Social</a>
                    <a href="#">CALENDARIO</a>
                    <a href="#" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('CERRAR SESIÓN') }}</a>
                </nav>
            </div>
                
            @yield('content')
            
        </div><!--row-->
    </div><!--container-fluid-->


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="{{URL::asset('js/app.js')}}"></script>
</body>
</html>