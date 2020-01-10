<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crea una nueva respuesta</title>
  <link href="https://fonts.googleapis.com/css?family=Courier+Prime&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body{
    font-family: 'Courier Prime', monospace;
  }
  input{
    height: 300px;
  }
  </style>
</head>
<body>
  <div class="container-fluid"> <!-- Aca empieza el formulario -->
    <div class="row mt-3">
      <div class="col-12 flexbox">
        <h1 class="text-center">Editar respuesta</h1>
        <p> <a href="/answers/all"> Ver listado de respuestas </a></p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-10 offset-lg-1">
        <form method="POST">
          @csrf
          <div class="form-group">
            <label for="text">Texto respuesta </label>
            <div class="input-group">
              <input id="text" name="text" placeholder="Ingrese respuesta" type="text" class="form-control" style="height: 100px">
              <span style="color:red;">{{$errors->first('text')}}</span>
            </div>
          </div>
          <div class="form-group">
            <label for="correct"> Correcto o no </label>
            <div class="input-group">
              <input id="correct" name="correct" placeholder="Ingrese 0 si es incorrecto, 1 si es correcto" type="number" class="form-control" value="0">
              <span style="color:red;">{{$errors->first('correct')}}</span>
            </div>
          </div>
          <div class="form-group">
            <label for="question">Asignar pregunta</label>
            <div>
              <select id="question_id" name="question_id" class="custom-select">
                @foreach ($preguntas as $pregunta)
                  <option value="{{$pregunta->id}}">{{$pregunta->text}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <button name="submit" type="submit" class="btn btn-success btn-lg btn-block"> Crear respuesta </button>
          </div>
        </form>
      </div>
    </div> <!-- Aca termina el formulario -->
  </div>
  <!--<form action="" method="POST" enctype="multipart/form-data">

  @csrf
  Titulo:
  <input type="text" name="text">
  <span style="color:red;">{{$errors->first('text')}}</span>
  <br>
  Puntos:
  <input type="number" name="points">
  <span style="color:red;">{{$errors->first('points')}}</span>

  <button type="submit">Crear pregunta</button>
</form>-->
</body>
</html>
