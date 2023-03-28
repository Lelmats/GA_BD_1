<?php

namespace App\Http\Controllers;
use App\Models\Funcion;
use App\Models\Pelicula;


use Illuminate\Http\Request;

class FuncionesController extends Controller
{
    public function lista() {
        $funciones = Funcion::all();
        $peliculas = Pelicula::all();

        $argumentos = array();
        $argumentos['funciones'] = $funciones;
        return view('funciones.lista', $argumentos);
    }
    public function edit($id) {
        $funcion = Funcion::find($id);
        $pelicula = Pelicula::find($funcion->id_pelicula);

        $argumentos = array();
        $argumentos['funcion'] = $funcion;
        $argumentos['pelicula'] = $pelicula;

        return view('funciones.edit', $argumentos);
    }

    public function store(Request $request, $id) {
        $nuevaFuncion = new Funcion();
        //Las columnas de las tablas asociadas representan propiedades del objeto
        $nuevaFuncion->nombre = $request->input('nombre');
        $nuevaFuncion->hora = $request->input('hora');
        $nuevaFuncion->fecha = $request->input('fecha');

        $nuevaFuncion->id_pelicula = $request->input('id_pelicula');
        $nuevaFuncion->id_usuario = $request->input('id_usuario');
        $nuevaFuncion->id_pelicula = $id;
        $nuevaFuncion->id_usuario = 1;

        $nuevaFuncion->save();

        return redirect()->route('funciones.lista')
            ->with('exito','Funcion creado exitosamente');
    }

    public function update(Request $request, $id) {
        $funcion = Funcion::find($id);
        //Las columnas de las tablas asociadas representan propiedades del objeto
        $funcion->nombre = $request->input('nombre');
        $funcion->hora = $request->input('hora');
        $funcion->fecha = $request->input('fecha');
        $funcion->id_pelicula = $request->input('id_pelicula');
        $funcion->id_usuario = $request->input('id_usuario');
        $funcion->save();

        return redirect()->route('funciones.update', $id)->with('exito', 'El Funcion ha sido actualizado exitosamente');

    }
    public function delete($id)
    {
        $funcion = Funcion::find($id);
        $argumentos = array();
        $argumentos['funcion'] = $funcion;
        
        return view('Funciones.delete', $argumentos);
    }

    public function destroy(Request $request, $id)
    {
        $funcion = Funcion::find($id);
        $feedback = 'Se elimino correctamente el '. $funcion->nombre;
        $funcion->delete();
        return redirect()->route('Funciones.lista')
            ->with('exito', $feedback);
    }
}
