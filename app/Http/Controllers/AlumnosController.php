<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Carrera;



class AlumnosController extends Controller
{
    public function login() {
        $alumnos = Alumno::all();
        $argumentos = array();
        $argumentos['alumnos'] = $alumnos;
        
        return view('login', $argumentos);
    }
    public function index() {
        $alumnos = Alumno::all();
        $argumentos = array();
        $argumentos['alumnos'] = $alumnos;
        
        return view('index', $argumentos);
    }
    public function lista() {
        $alumnos = Alumno::all();
        $carreras = Carrera::all();
        
        $argumentos = array();
        $argumentos['carreras'] = $carreras;
        $argumentos['alumnos'] = $alumnos;

        return view('alumnos.lista', $argumentos);
    }
    public function create() {
        $argumentos = array();        
        $alumnos = Alumno::all();
        $carreras = Carrera::all();
        $argumentos['carreras'] = $carreras;
        $argumentos['alumnos'] = $alumnos;
        return view('alumnos.create', $argumentos);
        
    }
    public function edit($id) {
        $alumno = Alumno::find($id);
        $carreras = Carrera::all();

        $argumentos = array();

        $argumentos['alumno'] = $alumno;
        $argumentos['carreras'] = $carreras;

        return view('alumnos.edit', $argumentos);
    }
    public function store(Request $request) {
        $nuevoAlumno = new Alumno();
        //Las columnas de las tablas asociadas representan propiedades del objeto
        $nuevoAlumno->nombre = $request->input('nombre');
        $nuevoAlumno->apellido = $request->input('apellido');
        $nuevoAlumno->email = $request->input('email');
        $nuevoAlumno->id_carrera = $request->input('carrera');

        $foto = $request->file('foto');
        if ($foto) {
            $nuevoAlumno->foto = $foto->hashName();
            $foto->store('public/fotos');
        }
        $nuevoAlumno->save();
        return redirect()->route('alumnos.store')
            ->with('exito','Alumno creado exitosamente');
    }

    public function update(Request $request, $id) {
        $alumno = Alumno::find($id);
        //Las columnas de las tablas asociadas representan propiedades del objeto
        $alumno->nombre = $request->input('nombre');
        $alumno->apellido = $request->input('apellido');
        $alumno->email = $request->input('email');
        $alumno->id_carrera = $request->input('carrera');

        $foto = $request->file('foto');
        if ($foto) {
            $alumno->foto = $foto->hashName();
            $foto->store('public/fotos');
        }
        $alumno->save();

        return redirect()->route('alumnos.lista', $id)->with('exito', 'El alumno ha sido actualizado exitosamente');

    }
    public function delete($id)
    {
        $alumno = Alumno::find($id);

        $argumentos = array();
        $argumentos['alumno'] = $alumno;
        
        return view('alumnos.delete', $argumentos);
    }

    public function destroy(Request $request, $id)
    {
        $alumno = Alumno::find($id);
        $feedback = 'Se elimino correctamente a '. $alumno->nombre;
        $alumno->delete();
        return redirect()->route('alumnos.lista')
            ->with('exito', $feedback);
    }
}
