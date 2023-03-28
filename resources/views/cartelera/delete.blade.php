<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/Alumnos.css">
    <link rel="stylesheet" href="BebasNeue.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Righteous&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>CineClub Películas</title>
</head>
<body>
@include("navbar")
    <div class="container mt-5">
        <div class="mx-auto card p-5" style="width: 20vw;">
            <h1>Eliminar Película</h1>
            <p>Estas seguro de eliminar "<strong>{{$pelicula->titulo}}</strong>" </p> 
            <form action="{{route('cartelera.destroy', $pelicula->id)}}" method="POST">
                @csrf
                @method('delete')
                <button href="{{route('cartelera')}}" class="btn btn-primary" type='submit'>
                        Si
                </button>
                <button href="{{route('cartelera')}}" class="btn btn-primary">
                        Cancelar
                </button>
            </form>
        </div>
    </div>
</body>
</html>