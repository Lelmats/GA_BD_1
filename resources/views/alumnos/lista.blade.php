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
<div class="container-fluid ">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
          <h2 class="offcanvas-title" id="offcanvasDarkNavbarLabel">CineClub <br> <small><small> Admin </small></small> </h2>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('index')}}">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('alumnos.lista')}}">Alumnos Inscritos </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html">Cerrar Sesión</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu dropdown-menu-dark">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li> -->
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="container contenedor">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AgregarModal">
      Agregar Alumnos
    </button>

      <!-- Modal Agregar-->
      <div class="modal fade" id="AgregarModal" tabindex="-1" aria-labelledby="AgregarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5 text-black-50" id="AgregarModalLabel">Agregar Alumno</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-black-50">
              <form action="{{route('alumnos.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <div class="row">
                      <div class="col">
                      <label for="inputState" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" placeholder="Max" aria-label="Nombre" name="nombre">
                      </div>
                      <div class="col">
                      <label for="inputState" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" placeholder="Rivera" aria-label="Apellidos" name="apellido">
                      </div>
                    </div>
                    <div class="row">
                    <label for="inputState" class="form-label">Correo Electronico</label>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="max@gmail.com" aria-label="Email" name="email">
                      </div>
                    </div>
                    <label for="inputState" class="form-label">Carrera:</label>
                    <select name="carrera" id="inputState" class="form-select">
                        <option value="" selected disabled> Elige Carrera</option>
                        @foreach($carreras as $carrera)
                            <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>
                        @endforeach
                    </select>
                    <div>
                          <label class="form-label">Foto de perfil:</label>
                          <input class="form-control" type="file" name="foto">
                    </div>
                    <br>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary" >Crear Alumno</button>
                    </div>   
                    </div>      
   
              </form>
            </div>

          </div>
        </div>
      </div>
      <br>
      <br>

    <h2 class="mb-4">Alumnos Inscritos</h2>
    <hr>
    <table class="table table-dark table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">Martrícula</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Email</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
        @foreach($alumnos as $alumno)
        <tr>
          <th scope="row">{{$alumno->id}}</th>
          <td>{{$alumno->nombre}}</td>
          <td>{{$alumno->apellido}}</td>
          <td>{{$alumno->email}}</td>
          <td>
            <button title="Revisar Reseña" class="reset_button"><a class="material-icons md-18 actions" href="{{route('alumnos.edit', $alumno->id)}}" data-bs-toggle="modal" data-bs-target="#exampleModal2">
              history_edu
            </a></button>
            <button title="Ver Reseña" class="reset_button"><span class="material-icons md-18 actions">visibility</span></button>
            <button title="Expulsar Usuario" class="reset_button"><a class="material-icons md-18 actions" href="{{route('alumnos.delete', $alumno->id)}}" data-bs-toggle="modal" data-bs-target="#exampleModal">
              delete
            </a></button>
          </td>
        </tr>
        
        <!-- Modal Delete-->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5 text-black-50" id="exampleModalLabel">Seguro quieres borrarlo?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>

              <div class="modal-footer">
                <form action="{{route('alumnos.destroy', $alumno->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Nou</button>
                <button type="submit" class="btn btn-primary" >Yessir</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        
          <!-- Modal Edit -->
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
                <form action="{{route('alumnos.update', $alumno->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                    <div>
                      <div class="row">
                        <div class="col">
                        <label for="inputState" class="form-label">Nombre:</label>
                          <input type="text" class="form-control" placeholder="Max" aria-label="Nombre" name="nombre" value='{{$alumno->nombre}}'>
                        </div>
                        <div class="col">
                        <label for="inputState" class="form-label">Apellidos:</label>
                          <input type="text" class="form-control" placeholder="Rivera" aria-label="Apellidos" name="apellido" value='{{$alumno->apellido}}'>
                        </div>
                        </div>
                        <div class="row">
                        <label for="inputState" class="form-label">Correo Electronico</label>
                          <div class="col">
                            <input type="text" class="form-control" placeholder="max@gmail.com" aria-label="Email" name="email" value='{{$alumno->email}}'>
                          </div>
                        </div>
                        <label for="inputState" class="form-label">Carrera:</label>
                        <select name="carrera" id="inputState" class="form-select">
                            <option value="" selected disabled> Elige Carrera</option>
                            @foreach($carreras as $carrera)
                              <option @if($alumno->id_carrera == $carrera->id) selected @endif value="{{$carrera->id}}">{{$carrera->nombre}}</option>
                            @endforeach
                        </select>
                          <div>
                        <div class="mb-3">
                          <label class="form-label">Foto de perfil:</label>
                          <input class="form-control" type="file" name="foto">
                        </div>
                        </div>
                        <div>
                            @if($alumno->foto)
                              <img src="/storage/fotos/{{$alumno->foto}}" alt="">
                            @endif
                        </div>

                    </div>   
                    <div class="modal-footer">
                  <div>
                    <br>
                      <button type="submit" class="btn btn-primary">Actualizar Alumno</button>
                  </div>
                </div>
                </form>
              </div>

            </div>
          </div>
        </div>
        @endforeach
      </tbody>
    </table>


  <script src="https://kit.fontawesome.com/f2851b3233.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>