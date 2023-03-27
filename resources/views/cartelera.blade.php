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
</head>
<body >
@include("navbar")
<div class="contenedor container">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AgregarModal">
    Agregar Película
  </button>

  <!-- Modal Agregar-->
  <div class="modal fade" id="AgregarModal" tabindex="-1" aria-labelledby="AgregarModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 text-black-50" id="AgregarModalLabel">Agregar Película</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-black-50">
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
                  <textarea type="text" class="form-control" placeholder="holabuenasnoches" aria-label="Descripción" name="descripcion"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <label for="inputState" class="form-label">Año:</label>
                  <input type="text" class="form-control" placeholder="2018" aria-label="Año" name="anio">
                </div>
                <div class="col">
                  <label for="inputState" class="form-label">Duración:</label>
                  <input type="text" class="form-control" placeholder="120" aria-label="Duración" name="duracion_minutos">
                </div>
              </div>
              <div>
                    <label class="form-label">Portada de película:</label>
                    <input class="form-control" type="file" name="imagen">
              </div>
              <br>
              <div class="modal-footer">
                <button type="submit" class="btn btn-primary" >Agregar Película</button>
              </div>   
            </div>      

          </form>
        </div>
      </div>
    </div>
  </div>

  <br>
  <br>

  <h2 class="mb-0">Cartelera</h2>

  <br>

  <div class="row row-cols-3">
  @foreach($peliculas as $pelicula)
    <div class="col"> 
      <div class="card m-0 mt-2 " style="width: 18rem;">
        @if($pelicula->imagen)
          <img src="/storage/fotos/{{$pelicula->imagen}}" class="card-img-top" alt="...">
        @endif
        <div class="card-body text-black-50" style="background-color: grey" >
          <form action="{{route('cartelera.update', $pelicula->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          @method('put')
            <h5 class="card-title">{{$pelicula->titulo}}</h5>
            <h6 class="card-title">{{$pelicula->anio}}</h5>
            <h6 class="card-title">{{$pelicula->director}}</h5>
            <p class="card-text">{{$pelicula->descripcion}}</p>
            <button title="Editar Pelicula" class="reset_button"><a class="material-icons md-18 actions" href="{{route('cartelera.edit', $pelicula->id)}}" data-bs-toggle="modal" data-bs-target="#exampleModal2">
              history_edu
            </a></button>
            </span></button>
            <button title="Expulsar Usuario" class="reset_button"><a class="material-icons md-18 actions" href="{{route('cartelera.delete', $pelicula->id)}}" data-bs-toggle="modal" data-bs-target="#exampleModal">
              delete
            </a></button>
          </form>
        </div>
      </div>
    </div>
    <!-- Modal Edit
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 text-black-50" id="exampleModalLabel2">Editar Alumno</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body text-black-50">
            @if(Session::has('exito'))
                <p>
                    {{Session::get('exito')}}
                </p>
            @endif
            <form action="{{route('cartelera.update', $pelicula->id)}}" method="POST" enctype="multipart/form-data">
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
                </div>
                <div>
                      <label class="form-label">Portada de película:</label>
                      <input class="form-control" type="file" name="imagen">
                </div>
                <br>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary" >Actualizar Película</button>
                </div>   
              </div>    
            </div>
            </form>
          </div>
        </div>
      </div>
    </div> -->
  @endforeach
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>