<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear alumno</title>
</head>
<body>
        <h1>Crear Alumno</h1>
        <a href="{{route('alumnos.index')}}">Lista de alumnos</a>
        <br>
        <br>
        <form action="{{route('alumnos.store')}}" method="POST">
            @csrf
            <div>
                <label>Nombre:</label>
                <input type="text" name="nombre">
                <div>
                    <br>
                    <button type="submit">Crear Alumno</button>
                </div>
            </div>            
        </form>
</body>
</html>