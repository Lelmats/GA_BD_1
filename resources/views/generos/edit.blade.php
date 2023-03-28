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
        <title>CineClub Géneros</title>
</head>
<body>
    @include("navbar")
        <div class="container mt-5">
            <div class="mx-auto card p-5" style="width: 40vw;">
                <h2>Editar Género</h2>
                <div>
                    <form action="{{route('generos.update',$genero->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                            <div>
                                <div class="row">
                                    <div class="col mb-3">
                                        <label for="inputState" class="form-label">Nombre:</label>
                                        <input type="text" class="form-control" placeholder="Comedia" aria-label="Nombre" name="nombre" value='{{$genero->nombre}}'>
                                    </div>
                                    <hr>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" href="{{route('generos.Glista')}}">Actualizar Género</button>
                                    </div>      
                                </div>
                            </div>

                    </form>
                </div>
            </div>  
        </div>
</body>
</html>