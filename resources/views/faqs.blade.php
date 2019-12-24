@extends('layouts.layout')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <h1 class="text-center"><u>Preguntas Frecuentes</u></h1>
      </div>
    </div>
    <div class="preguntas"  class="row">
      <div class="col text-center" >
        <h2> ¿Cómo jugar?</h2>
        <p>Muy simple, la jugada empieza con una serie de preguntas fáciles, pero ¡OJO!, solo habrá un tiempo de 30 segundos en cada pregunta. Cada respuesta correcta valdrá 10 puntos.  </p>
      </div>
    </div>

    <div class="preguntas">
      <h3>¿Cómo funcionan los puntos?</h3>
      <p>Cada respuesta válclassa obtendrá el valor de 10 puntos. Cuando una respuesta es inválclassa, al jugador se le descontarán 5 puntos.</p>

    </div>
    <div class="preguntas">
      <h2><u>¿Sobre que tratan estas preguntas? Las temáticas son:</u></h2>
      <p><br>&bull; Reciclaje <br>
        <br> &bull; Ecología<br>
        <br>&bull; Ambiente <br></p>

      </div>
      <div class="preguntas">
        <h3>¿Puedo jugar con mis amigos?</h3>
        <p><u>¡Por supuesto!</u> El juego tiene 2 modalclassades:  <br>
          &bull; Solitario. La partclassa será jugada por un solo usuario.
          <br>  &bull; Competencia. Se podrá armar un grupo de máximo 4 usuarios, estos competirán entre sí y el ganador se llevará los puntos sumados por todos los usuarios.<br>   </p>


        </div>
        <div class="preguntas">
          <h3><u>¿Para que funciona la página? ¿Cual es el objetivo del juego?</u> </h3>
          <p>Nuestro objetivo es que por medio de este juego cada participante pueda aprender, y asi tomar conciencia sobre las problematicas que existen en el mundo</p>
        </div>
        <div class="preguntas">
          <h3><u>¿Quiénes pueden participar?</u></h3>
          <p>No hay edad para jugar, puede participar cualquier persona que tenga ganas de aprender.</p>
        </div>
        <div class="preguntas">
          <h3>¿Puedo sugerir preguntas? </h3>
          <p> <u>¡CLARO!</u>  La pregunta que sugieras pasará a una etapa de evaluación para despues agregarla a nuestro ecopreguntas. </p>
        </div>

        <div class="preguntas">
          <h3>¿Cómo surgió ecopreguntas? </h3>
          <p>Queremos que la gente tome conciencia sobre las problematicas que hay en el mundo,  asi aprender y ayudar a mejorar el medioambiente. <u>Tu granito de arena ayuda al planeta y animales.</u>  </p>
        </div>
      </div>
@endsection
