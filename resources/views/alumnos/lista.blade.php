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
    <title>CineClub Alumnos</title>
</head>
<body >
@include("navbar")
<div class="contenedor">
    <button type="button" class="btn btn-primary">
      <a href="{{route('alumnos.create')}}">
      Agregar Alumno
      </a>
    </button>

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
            <button title="Revisar Reseña" class="reset_button"><a class="material-icons md-18 actions" href="{{route('alumnos.edit', $alumno->id)}}">
              history_edu
            </a></button>
            <!-- <button title="Ver Reseña" class="reset_button"><span class="material-icons md-18 actions">visibility</span></button> -->
            <button title="Eliminar Usuario" class="reset_button"><a class="material-icons md-18 actions" href="{{route('alumnos.delete', $alumno->id)}}">
              delete
            </a></button>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>


  <script src="https://kit.fontawesome.com/f2851b3233.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>