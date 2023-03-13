<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;

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


Route::get('/login', [AlumnosController::class, 'login'])
    ->name('alumnos.login');

Route::get('/', [AlumnosController::class, 'index'])
    ->name('alumnos.index');

Route::get('/alumnos', [AlumnosController::class, 'lista'])
    ->name('alumnos.lista');

Route::get('/alumnos/create',[AlumnosController::class,'create'])
    ->name('alumnos.create');

Route::get('/alumnos/{id}/edit',[AlumnosController::class,'edit'])
    ->name('alumnos.edit');

Route::post('/alumnos',[AlumnosController::class,'store'])
    ->name('alumnos.store');
    
Route::put('/alumnos/{id}',[AlumnosController::class,'update'])
    ->name('alumnos.update');

Route::get('/alumnos/{id}/delete',[AlumnosController::class,'delete'])
    ->name('alumnos.delete');

Route::delete('/alumnos/{id}',[AlumnosController::class,'destroy'])
    ->name('alumnos.destroy');