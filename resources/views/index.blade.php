@extends('layouts.layout')


@section('content')
  <img src="{{ asset('images/newlogo.jpg')}}" id="img-logo" alt="">
  <section class="principal">
    <img class="cartel"src="tres.png" alt="">
  </section>
  <section class="col-md-12">
    <div class="bienvenidacontenedor">
      <div class="bienvenida">
        @if (Auth::user())
          <h2 class="text-center">Bienvenido/a {{Auth::user()->username}} a Ecopreguntas , esperamos que te diviertas probando tus conocimientos sobre la ecología.</h2>
        @elseif (!Auth::user())
          <h2 class="text-center">Bienvenido/a a Ecopreguntas , esperamos que te diviertas probando tus conocimientos sobre la ecología.</h2>
        @endif
      </div>
      <div class="botones">
        @if(!Auth::user()){
          <button class="boton" type="button" name="button"> <a href="#">Rregistrate</a></button>
          <button  class="boton"type="button" name="button"> <a href="#">Iniciar sesión</a></button>
        @endif
      </div>
    </div>
  </section>
  <section class="col-md-12" >
    <div class="contenedorcreadores">
      <div class="titulo">
        <h2>Creadores:</h2>
      </div>
      <div class="creadores">
        <div class="perfilcredor">
          <img class="creador" src="sofi.jpg" alt="">
          <div class="nombre">
            <h2>Mariana</h2>
          </div>
          <div class="descripción">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
              in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
              sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
          <div class="perfilcredor">
            <img class="creador" src="sofi.jpg" alt="">
            <div class="nombre">
              <h2>Sofía</h2>
            </div>
            <div class="descripción">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              </div>
            </div>
            <div class="perfilcredor">
              <img class="creador" src="sofi.jpg" alt="">
              <div class="nombre">
                <h2>Emiliano</h2>
              </div>
              <div class="descripción">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                  in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                  sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
              <div class="perfilcredor">
                <img class="creador" src="sofi.jpg" alt="">
                <div class="nombre">
                  <h2>Camila</h2>
                </div>
                <div class="descripción">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
            </section>
            <section class="col-md-12">
              <div class="contenedorranking">
                <div class="titulo">
                  <h2>Ranking</h2>
                </div>
                <div class="ranking">
                  <div class="subtitulos">
                    <div class="col-md-4">
                      <h2>Puesto</h2>
                    </div>
                    <div class="col-md-4">
                      <h2>Perfil</h2>
                    </div>
                    <div class="col-md-4">
                      <h2>Puntos</h2>
                    </div>
                  </div>
                  <div class="jugadores">
                    <div class="perfiljugador">
                      <h2>1er Puesto:</h2>
                      <div class="perfil">
                        <img class="jugador" src="emiliano.jpg" alt="">
                        <h2> Ana María</h2>
                      </div>
                      <p class="informacion">100000 puntos.</p>
                    </div>
                    <div class="perfiljugador">
                      <h2>2do Puesto:</h2>
                      <div class="perfil">
                        <img class="jugador" src="emiliano.jpg" alt="">
                        <h2> Ana María</h2>
                      </div>
                      <p class="informacion">100000 puntos.</p>
                    </div>
                    <div class="perfiljugador">
                      <h2>3ro Puesto:</h2>
                      <div class="perfil">
                        <img class="jugador" src="emiliano.jpg" alt="">
                        <h2> Ana María</h2>
                      </div>
                      <p class="informacion">100000 puntos.</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>


          @endsection
