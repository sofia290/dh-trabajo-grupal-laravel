@extends('layouts.layout')

@section('content')
  <div id="creator">
    <form class="" action="" method="POST">
      @csrf

      <div class="row">
        <div class="col title">
          <h3 class="text-center" id='pregunta_nueva'> <input type="text" name="text_question" value="" placeholder="Ingrese su pregunta"> </h3>
          <!--<p id="timer"> 30 </p>-->
        </div>
      </div>

      <!-- Respuestas-->
      <div class="row justify-content-center">
        @php
        $numeroRandom = rand(1,4);
        @endphp
        @for ($i=1; $i < 5; $i++)
          @if ($i == 1)
            <div class="col-12 col-lg-6">
              <div class="answers correct">
                <span>{{$i}}</span>
                <input class="correct" type="text" name="text_answer_correct" value="" placeholder="Ingrese la respuesta correcta">
              </div>
            </div>
            @else
              <div class="col-12 col-lg-6">
                <div class="answers">
                  <span>{{$i}}</span>
                  <input type="text" name="text_answer{{$i}}" value="" placeholder="Ingrese la opcion {{$i}}">
                </div>
              </div>
          @endif
        @endfor
      </div>
      <div class="row justify-content-center">
        <input type="hidden" name="creator" value="{{ Auth::user()->username }}">
        <input type="submit" name="" value="Crear pregunta" id="new_question">
      </div>
    </form>
  </div>
@endsection
