<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista de preguntas</title>
  <link href="https://fonts.googleapis.com/css?family=Courier+Prime&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  *{
    box-sizing: border-box;
  }
  body{
    overflow-y: scroll;
  }
  body{
    font-family: 'Courier Prime', monospace;
    margin: 0;
    padding: 0;
  }
  div.contenedor{
    width:100%;
    padding: 0;
    margin: 0;
    margin:auto;
    display:flex;
    flex-direction:row;
    flex-wrap:wrap;
    justify-content: space-around;
    align-items:center;
  }
  div.pregunta{
    box-sizing: border-box;
    width: 30%;
    height: 650px;
    padding: 20px;
    border: 2px solid green;
    font-size: 16px;
    margin-bottom: 50px;
  }
  .answers{
    display: inline-block;
    border: 2px solid green;
    padding: 10px;
  }
  .correct{
    color: green;
    font-weight: bold;
  }
  </style>
</head>
<body>
  <div class="row text-center">
    <div class="col-3">
      <a href="/questions/create"> Agregar pregunta</a>
    </div>
    <div class="col-6">
      <h1 class="text-center">Todas las preguntas</h3>
        <span> (Clickear en la respuesta para editar) </span>
      </div>
    <div class="col-3">
      <a href="/answers/all"> Lista de respuestas </a>
    </div>
  </div>
  <div class="contenedor">

    @foreach ($preguntas as $pregunta)
    <div class="pregunta">
      <h4>{{$pregunta->id}} . {{$pregunta->text}}</h4>
      <p> Modo de juego: {{$pregunta->game_mode_id}}</p>
      @if ($pregunta->verified)
        <p> Verificada</p>
        <a href="/questions/deactivate/{{$pregunta->id}}"> Desactivar </a>
        @else
          <p> No verificada</p>
          <a href="/questions/verify/{{$pregunta->id}}"> Verificar </a>
      @endif
      <a href="/pregunta/{{$pregunta->id}}"> Ver detalle</a>
      <a href="/questions/edit/{{$pregunta->id}}"> Editar</a>
      <a href="/answers/create"> Agregar respuesta </a>
      <h4> Respuestas asignadas </h4>
      @foreach ($respuestas as $respuesta)
        @if ($respuesta->question_id == $pregunta->id)
          @if ($respuesta->correct == 1)
            <a class="answers correct" href="../answers/edit/{{$respuesta->id}}"> {{$respuesta->text}}</a>
          @endif
          @if ($respuesta->correct == 0)
            <a class="answers" href="../answers/edit/{{$respuesta->id}}"> {{$respuesta->text}}</a>
          @endif
        @endif
      @endforeach
    </div>
    @endforeach
  </div>
  <a href="/questions/create"> Agregar pregunta</a>
</body>
</html>
