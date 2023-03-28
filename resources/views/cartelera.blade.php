<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="Alumnos.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="BebasNeue.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Righteous&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body >
@include("navbar")
<div class="contenedor">
    <button  type="button" class="btn btn-primary" >
      <a href="{{route('cartelera.create')}}"> 
        Agregar Película
      </a>
    </button>
    
    <br>
    <br>

    <h2 class="mb-0">Historial</h2>

    <br>
    <div class="row row-cols-sm-2 row-cols-md-4 row-cols-xl-6">
     @foreach($peliculas as $pelicula)
      <form action="{{route('cartelera.update', $pelicula->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="col mx-2">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" >
              <div class="carousel-inner" >
                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-md m-0 p-0">
                      <div class="card text-bg-dark">
                        @if($pelicula->imagen)
                          <img src="/storage/fotos/{{$pelicula->imagen}}" class="card-img-top" alt="...">
                          @endif
                        <div class="row align-items-center">
                          <div class="col-4 m-2">
                            <button title="Editar Genero" class="reset_button">
                              <a class="material-icons md-18 actions" href="{{route('cartelera.edit', $pelicula->id)}}">
                              history_edu
                              </a>
                            </button>
                          </div>
                          <div class="col m-2">
                          </div>
                          <div class="col-3 m-2">
                            <button title="Eliminar Genero" class="reset_button">
                              <a class="material-icons md-18 actions" href="{{route('cartelera.delete', $pelicula->id)}}">
                                delete
                              </a>
                            </button>
                          </div>
                        </div>
                        <div class="card-img-overlay">
                          <h5 class="card-title">{{$pelicula->titulo}}</h5>
                          <h6 class="card-text">{{$pelicula->director}}</h6>
                          <h6 class="card-text"><small>{{$pelicula->descripcion}}</small></h6>
                          <small class="card-text">{{$pelicula->anio}}</small>
                        </div>
                      </div>
                    </div>     
                  </div>
                </div>
              </div>
            </div>
          </div>
      </form>

  @endforeach
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>