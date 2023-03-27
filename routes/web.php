<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\FuncionesController;
use App\Http\Controllers\GenerosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {return view('index'); })->name('index');;
Route::get('/login', function () {return view('login'); })->name('login');;

//Users
Route::get('/alumnos', [AlumnosController::class, 'lista']) ->name('alumnos.lista');
Route::get('/alumnos/create',[AlumnosController::class,'create']) ->name('alumnos.create');
Route::get('/alumnos/{id}/edit',[AlumnosController::class,'edit']) ->name('alumnos.edit');
Route::post('/alumnos',[AlumnosController::class,'store']) ->name('alumnos.store'); 
Route::put('/alumnos/{id}',[AlumnosController::class,'update']) ->name('alumnos.update');
Route::get('/alumnos/{id}/delete',[AlumnosController::class,'delete']) ->name('alumnos.delete');
Route::delete('/alumnos/{id}',[AlumnosController::class,'destroy']) ->name('alumnos.destroy');

//Peliculas
Route::get('/cartelera', [PeliculasController::class, 'index']) ->name('cartelera');
Route::get('/cartelera/create',[PeliculasController::class,'create']) ->name('cartelera.create');
Route::get('/cartelera/{id}/edit',[PeliculasController::class,'edit']) ->name('cartelera.edit');
Route::post('/cartelera',[PeliculasController::class,'store']) ->name('cartelera.store'); 
Route::put('/cartelera/{id}',[PeliculasController::class,'update']) ->name('cartelera.update');
Route::get('/cartelera/{id}/delete',[PeliculasController::class,'delete']) ->name('cartelera.delete');
Route::delete('/cartelera/{id}',[PeliculasController::class,'destroy']) ->name('cartelera.destroy');

//Generos
Route::get('/generos', [GenerosController::class, 'lista']) ->name('generos.Glista');
Route::get('/generos/create',[GenerosController::class,'create']) ->name('generos.create');
Route::get('/generos/{id}/edit',[GenerosController::class,'edit']) ->name('generos.edit');
Route::post('/generos',[GenerosController::class,'store']) ->name('generos.store'); 
Route::put('/generos/{id}',[GenerosController::class,'update']) ->name('generos.update');
Route::get('/generos/{id}/delete',[GenerosController::class,'delete']) ->name('generos.delete');
Route::delete('/generos/{id}',[GenerosController::class,'destroy']) ->name('generos.destroy');