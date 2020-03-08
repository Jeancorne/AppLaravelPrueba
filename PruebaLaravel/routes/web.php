<?php

use Illuminate\Support\Facades\Route;
use App\tblCurso as tblCurso;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('ingresar', function () {
    $layoutLogin = "layouts/formulario";
    return View::make('index')->with('layout', $layoutLogin);;
})->name('ingresar');

Route::get('registrar', function () {
    $layoutRegistrar = "layouts/registrar";
    return View::make('index')->with('layout', $layoutRegistrar);;
})->name('registrar');



Route::post('/registrarUsuario', [
    'uses' => 'ControllerUsuario@Registrar',
  	'as' => 'registrarUsuario', 
]);

Route::post('/loginUsuario', [
    'uses' => 'ControllerUsuario@Login',
  	'as' => 'loginUsuario', 
]);

Route::get('login', function () {
    $layoutLogin = "layouts/tablacursos";
    $cursos = new tblCurso;
    $data = $cursos::all();
    return View::make('Login')->with('layout', $layoutLogin)->with('data',$data);
})->name('login');

Route::get('crear', function () {
    $layoutLogin = "layouts/crearCurso";    
    return View::make('Login')->with('layout', $layoutLogin);
})->name('crear');


Route::post('/crearCurso', [
    'uses' => 'ControllerUsuario@crearCurso',
  	'as' => 'crearCurso', 
]);


Route::post('/deleteCurso', [
    'uses' => 'ControllerUsuario@deleteCurso',
  	'as' => 'deleteCurso', 
]);
