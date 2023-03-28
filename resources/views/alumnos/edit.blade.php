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
        <title>CineClub Alumno</title>
</head>
<body>
    @include("navbar")
        <div class="container mt-5">
            <div class="mx-auto card p-5" style="width: 40vw;">
                <h2>Editar Alumno</h2>
                <div>
                    <form action="{{route('alumnos.update',$alumno->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <label for="inputState" class="form-label">Nombre:</label>
                                        <input type="text" class="form-control" placeholder="Max" aria-label="Nombre" name="nombre" value='{{$alumno->nombre}}'>
                                    </div>
                                    <div class="col">
                                        <label for="inputState" class="form-label">Apellido:</label>
                                        <input type="text" class="form-control" placeholder="Rivera" aria-label="Apellido" name="apellido" value='{{$alumno->apellido}}'></input>
                                    </div>
                                </div>
                                <div class="row">
                                    <div>
                                        <label for="inputState" class="form-label">Email:</label>
                                        <input type="text" class="form-control" placeholder="max@gmail.com" aria-label="Email" name="email" value='{{$alumno->email}}'></input>
                                    </div>
                                    <div class="col">
                                        <label for="floatingSelect">Carrera:</label>
                                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="carrera">
                                            <option value="" selected disabled>Elige una carrera:</option>
                                            @foreach($carreras as $carrera)
                                                <option @if($alumno->id_carrera == $carrera->id) selected @endif value="{{$carrera->id}}">{{$carrera->nombre}}</option>
                                            @endforeach
                                         </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row align-items-center">
                                    <div class="col-4">
                                        @if($alumno->foto)
                                            <img src="/storage/fotos/{{$alumno->foto}}" alt="" style="width: 10vw; height: 10vw; border-radius: 100px;">
                                        @endif
                                    </div>
                                    <div class="col ">
                                        <label class="form-label">foto de perfil:</label>
                                        <input class="form-control" type="file" name="foto" value="{{$alumno->foto}}">
                                    </div>
                                </div>
                                </div>
                                <br>
                                <hr>
                                <div>
                                    @if(Session::has('exito'))
                                    <p>
                                        {{Session::get('exito')}}
                                    </p>
                                    @endif
                                </div>
                                

                                <div class="modal-footer">
                                <div class="row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary" href="{{route('alumnos.lista')}}">Cancelar</button>
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-primary" href="{{route('alumnos.lista')}}">Actualizar</button>
                                    </div>
                                </div>
                                </div>      
                            </div>

                    </form>
                </div>
            </div>  
        </div>
</body>
</html>