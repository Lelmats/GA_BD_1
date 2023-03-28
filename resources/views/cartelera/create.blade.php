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
    <title>CineClub Películas</title>
</head>
<body>
    @include("navbar")
    <div class="container mt-5">
        <div class="mx-auto card p-5" style="width: 40vw;">
        <h2>Crear Película</h2>
        <div>
        <form action="{{route('cartelera.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
              <div>
                <div class="row">
                  <div class="col">
                    <label for="inputState" class="form-label">Título:</label>
                    <input type="text" class="form-control" placeholder="Ghostbusters" aria-label="Título" name="titulo">
                  </div>
                  <div class="col">
                    <label for="inputState" class="form-label">Director:</label>
                    <input type="text" class="form-control" placeholder="Tarantino" aria-label="Director" name="director"></input>
                  </div>
                </div>
                <div class="row">
                  <div>
                    <label for="inputState" class="form-label">Descripcion:</label>
                    <input type="text" class="form-control" placeholder="holabuenasnoches" aria-label="Descripción" name="descripcion"></input>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <label for="inputState" class="form-label">Año:</label>
                    <input type="text" class="form-control" placeholder="2018" aria-label="Año" name="anio" >
                  </div>
                  <div class="col">
                    <label for="inputState" class="form-label">Duración:</label>
                    <input type="text" class="form-control" placeholder="120" aria-label="Duración" name="duracion_minutos">
                  </div>
                  <div >
                    <label for="floatingSelect" >Género:</label>
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="genero">
                        <option value="" selected disabled>Elige un género</option>
                        @foreach($generos as $genero)
                            <option value="{{$genero->id}}">{{$genero->nombre}}</option>
                        @endforeach
                    </select>
                </div>
                </div>
                
                <div>
                      <label class="form-label">Portada de película:</label>
                      <input class="form-control" type="file" name="imagen">
                </div>
                <br>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" >Crear Película</button>
                </div>   
              </div>    
            </div>
        </form>
      </div>  
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>