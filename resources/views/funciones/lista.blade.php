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
    <title>CineClub Funciones</title>
</head>
<body >
@include("navbar")
<div class="contenedor">
    <!-- <button type="button" class="btn btn-primary">
      <a href="{{route('funciones.create')}}">
      Agregar Función
      </a>
    </button> -->
    <br>
    <br>
    <h2 class="mb-4">Funciones</h2>
    <hr>
    <table class="table table-dark table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Película</th>
          <th scope="col">Usuario</th>
          <th scope="col">Hora</th>
          <th scope="col">Fecha</th>
          <!-- <th scope="col">Acciones</th> -->
        </tr>
      </thead>
      <tbody>
        @foreach($funciones as $funcion)
        <tr>
          <th scope="row">{{$funcion->id}}</th>
          <th scope="row">{{$funcion->id_pelicula}}</th>
          <th scope="row">{{$funcion->id_usuario}}</th>
          <th scope="row">{{$funcion->hora}}</th>
          <th scope="row">{{$funcion->fecha}}</th>
          <!-- <td>
            <button title="Editar Función" class="reset_button"><a class="material-icons md-18 actions" href="{{route('funciones.edit', $funcion->id)}}">
              history_edu
            </a></button>
            <button title="Eliminar Función" class="reset_button"><a class="material-icons md-18 actions" href="{{route('funciones.delete', $funcion->id)}}">
              delete
            </a></button>
          </td> -->
        </tr>
        @endforeach
      </tbody>
    </table>
    <br>
    <br>




  <script src="https://kit.fontawesome.com/f2851b3233.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>