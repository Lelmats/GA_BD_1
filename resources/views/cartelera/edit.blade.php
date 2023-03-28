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
        <title>CineClub Película</title>
</head>
<body>
    @include("navbar")
        <div class="container mt-5">
            <div class="mx-auto card p-5" style="width: 40vw;">
                <h2>Editar Película</h2>
                <div>
                    <form action="{{route('cartelera.update',$pelicula->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                            <div>
                                <div class="row">
                                <div class="col">
                                    <label for="inputState" class="form-label">Título:</label>
                                    <input type="text" class="form-control" placeholder="Ghostbusters" aria-label="Título" name="titulo" value='{{$pelicula->titulo}}'>
                                </div>
                                <div class="col">
                                    <label for="inputState" class="form-label">Director:</label>
                                    <input type="text" class="form-control" placeholder="Tarantino" aria-label="Director" name="director" value='{{$pelicula->director}}'></input>
                                </div>
                                </div>
                                <div class="row">
                                <div>
                                    <label for="inputState" class="form-label">Descripcion:</label>
                                    <input type="text" class="form-control" placeholder="holabuenasnoches" aria-label="Descripción" name="descripcion" value='{{$pelicula->descripcion}}'></input>
                                </div>
                                </div>
                                <div class="row">
                                <div class="col">
                                    <label for="inputState" class="form-label">Año:</label>
                                    <input type="text" class="form-control" placeholder="2018" aria-label="Año" name="anio" value='{{$pelicula->anio}}'>
                                </div>
                                <div class="col">
                                    <label for="inputState" class="form-label">Duración:</label>
                                    <input type="text" class="form-control" placeholder="120" aria-label="Duración" name="duracion_minutos" value='{{$pelicula->duracion_minutos}}'>
                                </div>
                                <div >
                                    <label for="floatingSelect" >Género:</label>
                                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="genero">
                                        <option value="" selected disabled>Elige un género</option>
                                        @foreach($generos as $genero)
                                            <option @if($pelicula->id_genero == $genero->id) selected @endif value="{{$genero->id}}">{{$genero->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                </div>
                                
                                <div>
                                    <label class="form-label">Portada de película:</label>
                                    <input class="form-control" type="file" name="imagen">
                                </div>
                                <br>
                                <div>
                                    @if(Session::has('exito'))
                                    <p>
                                        {{Session::get('exito')}}
                                    </p>
                                    @endif
                                </div>
                                

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary" href="{{route('cartelera')}}">Actualizar Película</button>
                                </div>      
                            </div>

                    </form>
                </div>
            </div>  
        </div>
</body>
</html>