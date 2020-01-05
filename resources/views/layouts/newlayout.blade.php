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

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <link rel="shortcut icon" type="image/png" href="{{ asset('images/recycle-solid.png') }}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
  @show
  </head>

  <body>

    <div class="wrapper">
      <!-- Sidebar  -->
      <nav id="sidebar">
        <div id="dismiss">
          <i class="fas fa-arrow-left"></i>
        </div>

        <div class="sidebar-header">
          <h3>Bootstrap Sidebar</h3>
        </div>

        <ul class="list-unstyled components">
          <p>Dummy Heading</p>
          <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
              <li>
                <a href="#">Home 1</a>
              </li>
              <li>
                <a href="#">Home 2</a>
              </li>
              <li>
                <a href="#">Home 3</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">About</a>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Pages</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                <a href="#">Page 1</a>
              </li>
              <li>
                <a href="#">Page 2</a>
              </li>
              <li>
                <a href="#">Page 3</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="#">Portfolio</a>
          </li>
          <li>
            <a href="#">Contact</a>
          </li>
        </ul>

        <ul class="list-unstyled CTAs">
          <li>
            <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>
          </li>
          <li>
            <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
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
    </div>
  </div>

  <div class="overlay"></div>

  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <!-- Popper.JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <!-- jQuery Custom Scroller CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

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
