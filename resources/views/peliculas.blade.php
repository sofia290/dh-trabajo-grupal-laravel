<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1> Peliculas</h1> 

    @if (isset($id))
    {{$peliculas[$id]["nombre"]}}
    {{$peliculas[$id]["rating"]}}

    @endif

    @if (!isset($id))
    @forelse ($peliculas as $pelicula) 
    <p> {{$pelicula["nombre"]}} </p>
    @if ($pelicula["rating"]>8)
    <span> RECOMENDADA </span>
    @endif
    @empty 
        <p> No hay peliculas</p>
    @endforelse
    @endif

 
</body>
</html>