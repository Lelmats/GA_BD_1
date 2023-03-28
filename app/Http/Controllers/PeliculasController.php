<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;
use App\Models\Genero;

class PeliculasController extends Controller
{
    public function index() {
        $peliculas = Pelicula::all();
        $generos = Genero::all();

        $argumentos['peliculas'] = $peliculas;
        $argumentos['generos'] = $generos;

        return view('cartelera', $argumentos);
    }
    public function create() {
        $peliculas = Pelicula::all();
        $generos = Genero::all();

        $argumentos = array();        
        $argumentos['peliculas'] = $peliculas;
        $argumentos['generos'] = $generos;
        return view('cartelera.create', $argumentos);
    }
    public function edit($id) {
        $pelicula = Pelicula::find($id);
        $generos = Genero::all();

        $argumentos = array(); 
        
        $argumentos['pelicula'] = $pelicula;
        $argumentos['generos'] = $generos;

        return view('cartelera.edit', $argumentos);
    }
    public function store(Request $request) {
        $nuevaPelicula = new Pelicula();
        //Las columnas de las tablas asociadas representan propiedades del objeto
        $nuevaPelicula->titulo = $request->input('titulo');
        $nuevaPelicula->descripcion = $request->input('descripcion');
        $nuevaPelicula->anio = $request->input('anio');
        $nuevaPelicula->duracion_minutos = $request->input('duracion_minutos');
        $nuevaPelicula->director = $request->input('director');
        $nuevaPelicula->id_genero = $request->input('genero');

        $foto = $request->file('imagen');
        if ($foto) {
            $nuevaPelicula->imagen = $foto->hashName();
            $foto->store('public/fotos');
        }
        $nuevaPelicula->save();
        return redirect()->route('cartelera.store')->with('exito','Pelicula creada exitosamente');
    }

    public function update(Request $request, $id) {
        $pelicula = Pelicula::find($id);
        //Las columnas de las tablas asociadas representan propiedades del objeto
        $pelicula->titulo = $request->input('titulo');
        $pelicula->descripcion = $request->input('descripcion');
        $pelicula->anio = $request->input('anio');
        $pelicula->duracion_minutos = $request->input('duracion_minutos');
        $pelicula->director = $request->input('director');
        $pelicula->id_genero = $request->input('genero');


        $foto = $request->file('imagen');
        if ($foto) {
            $pelicula->imagen = $foto->hashName();
            $foto->store('public/fotos');
        }
        $pelicula->save();
        return redirect()->route('cartelera', $id)
            ->with('exito', 'La pelicula ha sido actualizada exitosamente');

    }
    public function delete($id)
    {
        $pelicula = Pelicula::find($id);

        $argumentos = array();
        $argumentos['pelicula'] = $pelicula;
        
        return view('cartelera.delete', $argumentos);
    }

    public function destroy(Request $request, $id)
    {
        $pelicula = Pelicula::find($id);
        $feedback = 'Se elimino correctamente '. $pelicula->titulo;
        $pelicula->delete();
        return redirect()->route('cartelera')
            ->with('exito', $feedback);
    }
}
