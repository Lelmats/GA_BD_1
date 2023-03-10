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
        
        return view('alumnos.login', $argumentos);
    }
    public function index() {
        $alumnos = Alumno::all();

        $argumentos = array();
        $argumentos['alumnos'] = $alumnos;
        
        return view('alumnos.index', $argumentos);
    }
    public function lista() {
        $alumnos = Alumno::all();

        $argumentos = array();
        $argumentos['alumnos'] = $alumnos;
        
        return view('alumnos.lista', $argumentos);
    }
    public function create() {
        $argumentos = array();        
        $carreras = Carrera::all();
        $argumentos['carreras'] = $carreras;
        return view('alumnos.create', $argumentos);
        
    }
    public function edit($id) {
        $alumno = Alumno::find($id);
        $argumentos = array();
        $argumentos['alumno'] = $alumno;
        return view('alumnos.edit', $argumentos);
    }
    public function store(Request $request) {
        $nuevoAlumno = new Alumno();
        //Las columnas de las tablas asociadas representan propiedades del objeto
        $nuevoAlumno->nombre = $request->input('nombre');

        $nuevoAlumno->save();
        return redirect()->route('alumnos.index')
            ->with('exito','Alumno creado exitosamente');
    }

    public function update(Request $request, $id) {
        $alumno = Alumno::find($id);
        //Las columnas de las tablas asociadas representan propiedades del objeto
        $alumno->nombre = $request->input('nombre');

        $alumno->save();
        return redirect()->route('alumnos.edit', $id)
            ->with('exito', 'El alumno ha sido actualizado exitosamente');

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
        return redirect()->route('alumnos.index')
            ->with('exito', $feedback);
    }
}
