<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="\Alumnos.css">
    <link rel="stylesheet" href="\BebasNeue.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Righteous&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>CineClub Funciones</title>
</head>
<body>
    @include("navbar")
    <div class="container ">
        <div class="mx-auto card p-5" style="width: 300px;">
        <h2>Crear Función</h2>
        <div>
            <form action="{{route('funciones.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div>
                        <label>Nombre:</label>
                        <input type="text" name="nombre">
                        <div>
                            <br>
                            <button class="btn btn-primary" type="submit">Crear Función</button>
                        </div>
                    </div>      
            </form>
        </div>  
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>