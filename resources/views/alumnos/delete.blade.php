<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar alumno</title>
</head>
<body>
    <h1>Eliminar Alumno</h1>
    <p>Estas seguro de eliminar a <strong>{{$alumno->nombre}}</strong> </p> 
    <form action="{{route('alumnos.destroy', $alumno->id)}}" method="POST">
        @csrf
        @method('delete')
        <button type='submit'>
            <a href="{{route('index')}}">
                Si
            </a>
        </button>
        <button>
            <a href="{{route('index')}}">
                Cancelar
            </a>
        </button>
    </form>
</body>
</html>