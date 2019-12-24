@extends('layouts.layout')

@section('content')
  <div class="game">

    <div class="row">
      <div class="col title">
        <h3 class="text-center" id='pregunta'> {{$pregunta->text}}</h3>
        <!--<p id="timer"> 30 </p>-->
        <div class="countdown" id="timer"></div>
      </div>
    </div>

    <!-- Respuestas-->
    <div class="row justify-content-center">
      <!--<div class="col-md-3"> Timer
        <<p id="demo"></p>
        <p id="timer">
          <span id="timer-secs"></span>
        </p>
      </div>-->
      @foreach ($respuestas as $respuesta)
        @if ($respuesta->correct == 1)
          <div class="col-12 col-lg-6">
            <div class="answers" onclick="isCorrect(1)">
              <p>{{$respuesta->text}} </p>
            </div>
          </div
        @endif
        @if ($respuesta->correct == 0)
          <div class="col-12 col-lg-6">
            <div class="answers" onclick="isCorrect(0)">
              <p>{{$respuesta->text}} </p>
            </div>
          </div>
        @endif
      @endforeach

    </div>
    </div>
  </div>
@endsection


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

var counter = 11;
var interval = setInterval(function(){
  counter--;
  $('.countdown').html(counter);
  if (counter == 0) {
    clearInterval(interval);
    alert("SE TERMINO EL TIEMPO");
  }
},1000);

function isCorrect(numero) {
  if(numero == 0){
  }
}
</script>
