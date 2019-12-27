@extends('layouts.layout')

@section('content')
  <audio id="myAudio" src="">

  </audio>
  <div id="game">

    <div class="row">
      <div class="col title">
        <h3 class="text-center" id='pregunta'> {{$pregunta->text}}</h3>
        <!--<p id="timer"> 30 </p>-->
        <div id="timer">
          <p class="countdown"> </p>
        </div>
      </div>
    </div>

    <!-- Respuestas-->
    <div class="row justify-content-center">
      @foreach ($respuestas as $respuesta)
          <div class="col-12 col-lg-6">
            <div class="answers" onclick="isCorrect({{$respuesta->correct}})">
              <p>{{$respuesta->text}} </p>
            </div>
          </div>
      @endforeach

    </div>
  </div>
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
$(document).ready(function () {
  $('.answers').on('click', function () {
    $(this).addClass('correct');

	    });
	});

var x = document.getElementById("myAudio");

function playAudio() {
  x.play();

}
var counter = 16;
var interval = setInterval(function(){
  counter--;
  $('.countdown').html(counter);
  /*if (counter < 10) {
    document.getElementsByClassName("countdown").style.marginLeft = "5px";
  }*/
  if(counter == 5){
    var timer = document.getElementById("timer");
    timer.style.backgroundColor = "red";
    timer.style.color = "white";

  }
  if (counter == 0) {
    clearInterval(interval);
    //alert("SE TERMINO EL TIEMPO");
    timeUp();
  }
},1000);


function isCorrect(numero) {
  if(numero == 0){

  }
}
function timeUp() {
  var respuestas = document.getElementsByClassName("answers");
  //respuestas.classList.add("incorrect");
  for (var i = 0; i < respuestas.length; i++) {
  respuestas[i].classList.add("correct");
  };
};
</script>
