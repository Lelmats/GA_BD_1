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
        <a href="{{route('alumnos.lista')}}">Lista de alumnos</a>
        <br>
        <br>
        <form action="{{route('alumnos.update', $alumno->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div>
                <label>Nombre:</label>
                <input type="text" name="nombre" value='{{$alumno->nombre}}' >
                <select name="carrera">
                    <option value="" disabled> Elige Carrera</option>
                    @foreach($carreras as $carrera)
                        <option @if($alumno->id_carrera == $carrera->id) selected @endif value="{{$carrera->id}}">{{$carrera->nombre}}</option>
                    @endforeach
                </select>
                <div>
                <label >Foto de perfil:</label>
                <input type="file" name="foto">
                </div>
                <div>
                    @if($alumno->foto)
                        <img src="/storage/fotos/{{$alumno->foto}}" alt="">
                    @endif
                </div>
                <div>
                    <br>
                    <button type="submit">Actualizar Alumno</button>
                </div>
            </div>   
  
        </form>
</body>
</html>