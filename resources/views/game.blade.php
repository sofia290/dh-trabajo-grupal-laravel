@extends('layouts.layout')

@section('content')
  <audio id="myAudio" src="">

  </audio>
  <div class="green">
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
            <input type="hidden" name="time" value="0" id="time">
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
    </div><!-- Cierra div game-->
  </div>
@endsection

@section('script')

  @section('extrascripts')
    @if ($pregunta->game_mode_id == 1)
        <script src="../js/game.js"></script>
    @elseif ($pregunta->game_mode_id == 2)
      <script src="../js/game_mode2.js"></script>
    @endif
  @endsection


  <?php
if($pregunta->game_mode_id == 1){
  foreach ($respuestas as $respuesta) {
    if ($respuesta->correct == 1) {
      echo "<script>
      var respuestaCorrecta ={
        id:" . $respuesta->id . ",
      };
      </script>";
    }
  }
}
elseif ($pregunta->game_mode_id == 2) {
  if ($pregunta->true_or_false == 1) {
    echo "<script>
    var respuestaCorrecta = {
      id: 'Ja',
    };
    </script>";
  }
  elseif ($pregunta->true_or_false == 0) {
    echo "<script>
    var respuestaCorrecta = {
    };
    </script>";
  }
}
  ?>
