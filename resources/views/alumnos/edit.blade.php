<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Alumno puto</title>
</head>
<body>
        <h1>Editar Alumno</h1>
        @if(Session::has('exito'))
            <p>
                {{Session::get('exito')}}
            </p>
        @endif
        <a href="{{route('alumnos.index')}}">Lista de alumnos</a>
        <br>
        <br>
        <form action="{{route('alumnos.update', $alumno->id)}}" method="POST">
            @csrf
            @method('delete')
            <div>
                <label>Nombre:</label>
                <input type="text" name="nombre" value='{{$alumno->nombre}}'>
                <div>
                    <br>
                    <button type="submit">Actualizar Alumno</button>
                </div>
            </div>            
        </form>
</body>
</html>