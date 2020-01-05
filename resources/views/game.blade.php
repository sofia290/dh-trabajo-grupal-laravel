@extends('layouts.layout')

@section('content')
  <audio id="myAudio" src="">

  </audio>
  <div id="game">

    <div class="row">
      <div class="col title">
        <div id="timer">
          <p class="countdown"> ''</p>
        </div>
        <h3 class="text-center" id='pregunta'> {{$pregunta->text}}</h3>
        <!--<p id="timer"> 30 </p>-->
      </div>
    </div>

    <!-- Respuestas-->
    <div class="row justify-content-center">
      @foreach ($respuestas as $respuesta)
        <div class="col-12 col-lg-6">
          <div class="answers" id="{{$respuesta->id}}">
            <p>{{$respuesta->text}}</p>
          </div>
        </div>
      @endforeach

    </div>
    <div id="result-wrapper">
      <div id="result">
        <span class="icon-line"></span>
        <span class="icon-line"></span>
      </div>
      <p id="result-message"> </p>
      <div id="next-question">
        <form method="POST">
          @csrf
          <input type="hidden" name="token" value="{{$pregunta->id}}">
          <input type="hidden" name="user_answer" id="user_answer" value="">
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

          <input name="submit" type="submit" name="next-question" id="next" value="Siguiente pregunta">
        </form>
      </div>

    </div>
    <div id="loader-wrapper">
      <div id="loader"></div>

      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>

    </div>
  </div>
@endsection

@section('script')

  @section('extrascripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/game.js"></script>
  @endsection


<?php
foreach ($respuestas as $respuesta) {
  if ($respuesta->correct == 1) {
    echo "<script>
  var respuestaCorrecta ={
      id:" . $respuesta->id . ",
    };
    </script>";
  }
}
 ?>
