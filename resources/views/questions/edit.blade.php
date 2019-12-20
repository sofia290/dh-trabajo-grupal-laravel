<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edita una nueva pregunta</title>
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
        <h1 class="text-center">Editar pregunta</h1>
        <p> ¿Agregar pregunta? <a href="/questions/create"> Aca </a></p>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-10 offset-lg-1">
        <form method="POST">
          @csrf
          <div class="form-group">
            <label for="text">Texto pregunta </label>
            <div class="input-group">
              <input id="text" name="text" placeholder="Ingrese pregunta" type="text" class="form-control"  value="{{$pregunta->text}}" style="height: 100px">
            </div>
          </div>
          <div class="form-group">
            <label for="points"> Puntos </label>
            <div class="input-group">
              <input id="points" name="points" placeholder="Ingrese los puntos" type="number" class="form-control" value="{{$pregunta->points}}">
            </div>
          </div>
          <div class="form-group">
            <button name="submit" type="submit" class="btn btn-success btn-lg btn-block"> Editar pregunta </button>
          </div>
        </form>
      </div>
    </div> <!-- Aca termina el formulario -->
  </div>
  <!--<form action="" method="POST">
  @csrf
  Texto:
  <input type="text" name="text" value="{{$pregunta->text}}">
  <br>
  Puntos:
  <input type="text" name="points" value="{{$pregunta->points}}">
  <br>
  <button type="submit">Editar pregunta</button>
</form>-->
</body>
</html>
