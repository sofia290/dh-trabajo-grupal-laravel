<!DOCTYPE html>
<html>

<head>
  @section('head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSR Token -->
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>{{ config('app.name', 'Ecopreguntas') }}</title>

    <!-- Scripts-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/game.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/amigos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/ranking.css')}}">

    <link rel="shortcut icon" type="image/png" href="{{ asset('images/recycle-logo.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  @show
</head>

<body>

  <div class="wrapper">
    <div class="overlay"></div>
    <!-- Sidebar  -->
    <nav id="sidebar">
      <div id="dismiss">
        <i class="fas fa-arrow-left" style="line-height: 50px;position: absolute;top: 10px;right: 10px;"></i>
      </div>

      <div class="sidebar-header">
        <h3>{{ Auth::user()->username }}</h3>
      </div>
      <div class="line">

      </div>
      <ul class="list-unstyled components">
        <!--<p>Dummy Heading</p>-->
        <li class="active">
          <a href="/home">Inicio</a>
        </li>
        <li>
          <a href="/profile">Mi perfil</a>
          <a href="#"> Logros </a>
          <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"> Creador de preguntas </a>
          <ul class="collapse list-unstyled" id="pageSubmenu">
            <li>
              <a href="/createquestion"> Agregar pregunta </a>
            </li>
            <li>
              <a href="#"> Revisar preguntas</a>
            </li>
            <li>
              <a href="#"> Calificar preguntas </a>
            </li>
            <li>
              <a href="#"> Estado de preguntas enviadas </a>
            </li>
          </ul>
        </li>
        <li>
          <a href="#">Contacto</a>
        </li>
      </ul>

      <ul class="list-unstyled CTAs">
        <li>
          <a href="#" class="info">Mas información </a>
        </li>
      </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">
      <header>
        <nav class="navbar navbar-expand-lg navbar-light" id="menu">
          <button type="button" id="sidebarCollapse" class="btn btn-info">
            <i class="fas fa-align-left"></i>
          </button>
          <a href="/" class="navbar-brand"> <img src="{{asset('images/logogreen.png')}}" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="navbar-toggler-icon"></span>
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
                    {{ Auth::user()->username }} <span class="caret"></span>
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
                    {{ __('Cerrar sesión') }} </a>

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
        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>
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
    </div>
  </div>
  @section('script')

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/js/jquery.min.js"> </script>
    <script src="/js/back_to_top.js"></script>
  @show

  @yield('extrascripts')


  <script type="text/javascript">
  $(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
      theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function () {
      $('#sidebar').removeClass('active');
      $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
      $('#sidebar').addClass('active');
      $('.overlay').addClass('active');
      $('.collapse.in').toggleClass('in');
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
  });
</script>
</body>

</html>
