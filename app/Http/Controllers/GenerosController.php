<?php

namespace App\Http\Controllers;
use App\Models\Genero;

use Illuminate\Http\Request;

class GenerosController extends Controller
{
    public function lista() {
        $generos = Genero::all();
        $argumentos = array();
        $argumentos['generos'] = $generos;
        return view('generos.Glista', $argumentos);
    }
    public function create() {
        $argumentos = array();        
        return view('generos.Glista', $argumentos);
        
    }
    public function edit($id) {
        $genero = Genero::find($id);
        $argumentos = array();
        $argumentos['genero'] = $genero;
        return view('generos.Glista', $argumentos);
    }
    public function store(Request $request) {
        $nuevoGenero = new Genero();
        //Las columnas de las tablas asociadas representan propiedades del objeto
        $nuevoGenero->nombre = $request->input('nombre');
        $nuevoGenero->save();

        return redirect()->route('generos.Glista')
            ->with('exito','Genero creado exitosamente');
    }

    public function update(Request $request, $id) {
        $genero = Genero::find($id);
        //Las columnas de las tablas asociadas representan propiedades del objeto
        $genero->nombre = $request->input('nombre');
        $genero->save();

        return redirect()->route('generos.Glista', $id)->with('exito', 'El genero ha sido actualizado exitosamente');

    }
    public function delete($id)
    {
        $genero = Genero::find($id);

        $argumentos = array();
        $argumentos['genero'] = $genero;
        
        return view('generos.delete', $argumentos);
    }

    public function destroy(Request $request, $id)
    {
        $genero = Genero::find($id);
        $feedback = 'Se elimino correctamente el '. $genero->nombre;
        $genero->delete();
        return redirect()->route('generos.Glista')
            ->with('exito', $feedback);
    }
}
