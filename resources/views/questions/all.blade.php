<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Lista de preguntas</title>
  <link href="https://fonts.googleapis.com/css?family=Courier+Prime&display=swap" rel="stylesheet">
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
  div.pregunta{
    width: 100%;
    border-bottom: 2px solid green;
    font-size: 20px;
    padding-bottom: 10px;
    margin-bottom: 5px;
  }
  </style>
</head>
<body>
  <h3>Todas las preguntas</h3>
  <div class="container">

    @foreach ($preguntas as $pregunta)
    <div class="pregunta">
      <span> {{$pregunta->id}}</span>
      <h5>{{$pregunta->text}}</h5>
      <p> Puntos: {{$pregunta->points}}</p>
      <a href="/pregunta/{{$pregunta->id}}"> Ver detalle</a>
      <a href="/questions/edit/{{$pregunta->id}}"> Editar </a>
    </div>
    @endforeach
  </div>
  <a href="/questions/create"> Agregar pregunta</a>
</body>
</html>
