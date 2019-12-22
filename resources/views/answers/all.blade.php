<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista de respuestas</title>
  <link href="https://fonts.googleapis.com/css?family=Courier+Prime&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body{
    font-family: 'Courier Prime', monospace;
  }
  div.container{
    width:100%;
    margin:auto;
    display:flex;
    flex-direction:row;
    flex-wrap:wrap;
    justify-content: space-around;
    align-items:center;
  }
  div.respuesta{
    width: 100%;
    border-bottom: 2px solid green;
    font-size: 20px;
    padding-bottom: 10px;
    margin-bottom: 5px;
  }
  </style>
</head>
<body>
  <h3 class="text-center">Todas las respuestas</h3>
  <div class="container">

    @foreach ($respuestas as $respuesta)
    <div class="respuesta">
      <span> {{$respuesta->id}}</span>
      <h5>{{$respuesta->text}}</h5>
      @if ($respuesta->correct)
        <p> Es correcta  </p>
      @endif
      @if (!$respuesta->correct)
        <p> Es incorrecta </p>
      @endif
      <p> Pregunta asignada: <a href="/questions/{{$respuesta->question_id}}">{{$respuesta->question_id}} </a></p>
      <a href="/respuesta/{{$respuesta->id}}"> Ver detalle</a>
      <a href="/answers/edit/{{$respuesta->id}}"> Editar </a>
    </div>
    @endforeach
  </div>
  <a href="/answers/create"> Agregar respuesta</a>
</body>
</html>
