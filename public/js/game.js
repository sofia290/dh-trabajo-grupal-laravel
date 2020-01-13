$(document).ready(function() {
  $('body').css("background-color", "rgb(45, 207, 93)");
  setTimeout(function(){
    $('body').addClass('loaded');
    $('h1').css('color','#222222');
  }, 1000);

  $('.answers').on('click', function () { // CLICK EN UNA DE LAS RESPUESTAS
    clearInterval(interval); // Se limpia  el timer
    var opcion = $(this).attr('id'); // La opcion elegida por user
    $('#result-wrapper').css("display","block"); // muestra el resultado
    $('#result').css("display", "block");
    $('#nextquestion').css("display", "block");
    if (opcion == respuestaCorrecta.id) {
      $(this).addClass('correct');
      $('#result').addClass('correct');
      $('.icon-line').first().addClass('line-tip');
      $('.icon-line').last().addClass('line-long');
      var tiempoExtra = $('#time').val(counter);
      //$('#result-message').append("CORRECTO").css("color", "green");
    }
    if (opcion != respuestaCorrecta.id) {
      $(this).addClass('incorrect');
      var respuestaDefinitiva = document.getElementById(respuestaCorrecta.id);
      respuestaDefinitiva.classList.add('correct');
      document.getElementById("result").style.borderColor= "rgb(187, 19, 19)";
      $('#result').addClass('incorrect');
      $('.icon-line').first().addClass('line-cross line-cross-left');
      $('.icon-line').last().addClass('line-cross line-cross-right');
      //$('#result-message').append("INCORRECTO").css("color", "red").css("top", "470px");
    }
    $('#user_answer').val(opcion);
  });
});

var x = document.getElementById("myAudio");

function playAudio() {
  x.play();

}

// TIMER
var counter = 16;
var interval = setInterval(function(){
  counter--;
  $('.countdown').html(counter+"''");

if(counter == 5){ // TIMER CAMBIA DE COLOR CUANDO QUEDAN 5 SEGUNDOS
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


// Si se acaba el tiempo
function timeUp() {
var respuestas = document.getElementsByClassName("answers");
for (var i = 0; i < respuestas.length; i++) {
  respuestas[i].classList.add('incorrect');
}
$('#result-wrapper').css("display","block");
document.getElementById("result-message").innerHTML = "SE ACABÓ EL TIEMPO";
document.getElementById("next").value = "Empezar nueva partida";
var respuestaDefinitiva = document.getElementById(respuestaCorrecta.id);
respuestaDefinitiva.classList.add('correct');
respuestaDefinitiva.classList.remove('incorrect');
document.getElementById("user_answer").value = "0";

};
