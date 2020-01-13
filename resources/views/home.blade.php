@extends('layouts.newlayout')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 user-home">
        <h1 class="text-center mt-3"> {{ Auth::user()->username }}</h1>
        <img src="{{ Auth::user()->profile_picture}}" class="user-picture" id="user-picture-home" alt="">
        <p> Puntaje para el siguiente nivel: </p>
        <div id="my_progress">
          @php
            $nivel = App\Level::find(Auth::user()->level)
          @endphp
          <span> {{Auth::user()->score}}/{{$nivel->max_value}}</span>
          <div id="my_bar"> </div>
        </div>
        <div class="row user_level_info">
          <div class="col-3">
            <li> <p class="level_points"> Ranking </p> <p> 3.000.000</p> </li>
          </div>
          <div class="col-3">
            <li> <p> Preguntas contestadas </p> <p> {{Auth::user()->answered_questions}} </p></li>
          </div>
          <div class="col-3">
            <li> <p class="level_points"> Nivel </p> <p> {{Auth::user()->level}} </p></li>
          </div>
          <div class="col-3">
            <li> <p class="level_points"> Puntos </p> <p id="score"> {{Auth::user()->score}}</p></li>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-12 game-buttons">
        <a href="/game"> Jugá al modo clásico</a>
      </div>
      <div class="col-lg-4 col-12 game-buttons">
        <a href="/game/trueorfalse"> Modo Verdadero o Falso</a>
      </div>
      <div class="col-lg-4 col-12 game-buttons">
        <a href="/game/lightning"> Modo Rayo </a>
      </div>
    </div>
    <!--<div class="game-buttons-container">
      <a href="/game" class="game-buttons"> Jugá al modo clásico</a>
      <a href="/game/trueorfalse" class="game-buttons"> Modo Verdadero o Falso</a>
      <a href="/game/lightning" class="game-buttons"> Modo Rayo </a>
    </div>-->
@endsection

<?php
echo "<script> nivel ={
        maximoValor: " . $nivel->max_value .
     " };</script>"
?>

@section('extrascripts')
<script>
  $(document).ready(function() {
    var puntaje = $('#score').text();
    var porcentaje = puntaje*100/nivel.maximoValor;
    console.log(nivel.maximoValor);
    $('#my_bar').css("width", porcentaje + "%");

  })
</script>
@endsection
