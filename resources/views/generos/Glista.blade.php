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
    <title>CineClub Alumnos</title>
</head>
<body >
@include("navbar")
<div class="contenedor">
    <button type="button" class="btn btn-primary">
      <a href="{{route('generos.create')}}">
      Agregar Genero
      </a>
    </button>
    <br>
    <br>
    <h2 class="mb-4">Generos</h2>
    <hr>
    <table class="table table-dark table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($generos as $genero)
        <tr>
          <th scope="row">{{$genero->id}}</th>
          <td>{{$genero->nombre}}</td>
          <td>
            <button title="Editar Genero" class="reset_button"><a class="material-icons md-18 actions" href="{{route('generos.edit', $genero->id)}}">
              history_edu
            </a></button>
            <button title="Eliminar Genero" class="reset_button"><a class="material-icons md-18 actions" href="{{route('generos.delete', $genero->id)}}">
              delete
            </a></button>
          </td>
        </tr>
        
        <!-- Modal Delete
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5 text-black-50" id="exampleModalLabel">Seguro quieres borrarlo?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-footer">
                <form action="{{route('generos.destroy', $genero->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary" >Si</button>
                </form>
              </div>
            </div>
          </div>
        </div> -->
          <!-- Modal Edit
        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5 text-black-50" id="exampleModalLabel2">Editar Genero</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body text-black-50">
                @if(Session::has('exito'))
                    <p>
                        {{Session::get('exito')}}
                    </p>
                @endif
                <form action="{{route('generos.update', $genero->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <div>
                      <div class="row">
                        <div class="col">
                        <label for="inputState" class="form-label">Nombre:</label>
                          <input type="text" class="form-control" placeholder="Max" aria-label="Nombre" name="nombre" value='{{$genero->nombre}}'>
                        </div>

                        </div>

                    </div>   
                    <div class="modal-footer">
                  <div>
                    <br>
                      <button type="submit" class="btn btn-primary">Actualizar Genero</button>
                  </div>
                </div>
                </form>
              </div>

            </div>
          </div>
        </div> -->
        @endforeach
      </tbody>
    </table>
      <!-- Modal Agregar
      <div class="modal fade" id="AgregarModal" tabindex="-1" aria-labelledby="AgregarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-black-50" id="AgregarModalLabel">Agregar Genero</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-black-50">
              <form action="{{route('generos.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="row">
                      <div class="col">
                        <label for="inputState" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" placeholder="Max" aria-label="Nombre" name="nombre">
                      </div>
                    <br>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" >Crear Genero</button>
                    </div>   
                    </div>      
   
              </form>
            </div>

          </div>
        </div>
      </div> -->
      <br>
      <br>




  <script src="https://kit.fontawesome.com/f2851b3233.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>