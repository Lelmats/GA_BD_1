<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="Alumnos.css">
    <link rel="stylesheet" href="BebasNeue.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Righteous&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <title>CineClub Funciones</title>
</head>
<body>
        <h1>Editar Función</h1>
        @if(Session::has('exito'))
            <p>
                {{Session::get('exito')}}
            </p>
        @endif
        <a href="{{route('funciones.lista')}}"> Editar Función</a>
        <br>
        <br>
        <form action="{{route('funciones.update',$funcion->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div>
                <label>Nombre:</label>
                <input type="text" name="nombre" value='{{$funciones->nombre}}'>
                <div>
                    <br>
                    <button type="submit">Actualizar función
                    </button>
                </div>
            </div>   
        </form>
        
</body>
</html>