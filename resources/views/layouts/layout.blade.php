<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  @section('head')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- CSR Token -->
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>{{ config('app.name', 'Ecopreguntas') }}</title>

    <!-- Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


    <!--Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/game.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{asset('css/loader.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">

    <link rel="shortcut icon" type="image/png" href="{{ asset('images/recycle-logo.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
  @show
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light" id="menu">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a href="/" class="navbar-brand"> <img src="{{asset('images/logogreen.png')}}" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-navbar-collapse-user">
        @fas('fa-user-circle')
        <!--<img src="{{ asset('images/usuario.png')}}" alt="" class="user-picture">-->
      </button>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/faqs"> Preguntas frequentes </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-md-auto">
          <!-- Authentication Links -->
          @guest
            <li id="boton-registro">
              <a class="btn btn-success mr-2" href="{{ route('login') }}">{{ __('Inicia sesión') }}</a>
            </li>
            @if (Route::has('register'))
              <li id="boton-login">
                <a class="btn btn-success" href="{{ route('register') }}">{{ __('Registrate') }}</a>
              </li>
            @endif
          @else
            <li class="nav-item dropdown d-sm-none d-none d-lg-block collapse navbar-collapse" id="bs-navbar-collapse-user">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->username }}
                @if (Auth::user()->profile_picture)
                  <img src="{{ Auth::user()->profile_picture}}" alt="" class="user-picture-small">
                @else
                  <img src="{{ asset('images/usuario.png') }}" alt=""  class="user-picture-small">
                @endif

              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/profile">
                  {{ __('Mi perfil') }}
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Cerrar sesión') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        @endguest
      </ul>
    </div>
  </nav>
</header>

<main>
  @yield('content')
</main>
<footer class="container-fluid">
  <div class="row">
    <div class="col-lg-4">
      <img src="{{asset('images/logowhite.png')}}" alt="">
    </div>
    <div class="col-lg-2">
      <ul>
        <li><a href="/"> Inicio </a></li>
        <li><a href="#"> Comunidad  </a></li>
        <li><a href="/faqs"> Preguntas frequentes </a></li>
      </ul>
    </div>
    <div class="col-lg-3">
      <ul>
        <li> <a href="#"> Nuestros sponsors </a> </li>
        <li><a href="#"> Forma parte de nuestra lista de patrocinadores   </a></li>
      </ul>
    </div>
    <div class="col-lg-3 footer-info">
      <p> <a href="/contact"> Contactanos </a> </p> <!-- Agregar blade vista -->
      <ul>
        <li> Facebook </li>
        <li> Twitter </li>
        <li> Instagram </li>
      </ul>
    </div>
  </div>
</footer>

@section('script')

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@show

@yield('extrascripts')
</body>
</html>
