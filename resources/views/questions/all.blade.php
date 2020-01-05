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
    font-family: 'Courier Prime', monospace;
    margin: 0;
    padding: 0;
  }
  div.container{
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
    width: 50%;
    height: 630px;
    padding: 20px;
    border: 2px solid green;
    font-size: 18px;
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
  <h1 class="text-center">Todas las preguntas</h3>
  <div class="container">

    @foreach ($preguntas as $pregunta)
    <div class="pregunta">
      <h4>{{$pregunta->id}} . {{$pregunta->text}}</h4>
      <p> Puntos: {{$pregunta->points}}</p>
      <a href="/pregunta/{{$pregunta->id}}"> Ver detalle</a>
      <a href="/questions/edit/{{$pregunta->id}}"> Editar</a>
      <a href="/answers/create"> Agregar respuesta </a>
      <h4> Respuestas asignadas </h4>
      @foreach ($respuestas as $respuesta)
        @if ($respuesta->question_id == $pregunta->id)
          @if ($respuesta->correct == 1)
            <p class="answers correct"> {{$respuesta->text}}</p>
          @endif
          @if ($respuesta->correct == 0)
            <p class="answers"> {{$respuesta->text}}</p>
          @endif
        @endif
      @endforeach
    </div>
    @endforeach
  </div>
  <a href="/questions/create"> Agregar pregunta</a>
</body>
</html>
