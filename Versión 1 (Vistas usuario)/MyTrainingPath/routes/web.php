<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Admin\SemanaPrueba\CategoriaPruebaController;
use Illuminate\Support\Facades\Route;

//Inicio
Route::get('/', function () {
    return view('home');
});

//app
Route::get('/mytrainingpath', function () {
    return view('mytrainingpath');
})->middleware('auth');

//registro
Route::get('/register', [RegisterController::class, 'create'])
->middleware('guest')
->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
->name('register.store');


//registro user discapacidad fisíca
Route::get('discapacidad', function () {
    return view('auth.discapacidad');
})->middleware('auth');


//Ruta Login
Route::get('/login', [SessionsController::class, 'create'])
->middleware('guest')
->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');


//alimentación
Route::get('/alimentacion', [RegisterController::class, 'alimentacion'])
->name('alimentacion.index')->middleware('auth');


//HomeAdmin
//Ruta Login
Route::get('/MyTrainingPath_HomeAdmin', [HomeAdminController::class, 'create'])
->name('homeAdmin.index');

//Admin Rutinas de semana de prueba
Route::get('/MyTrainingPath_AdminRutinas', [CategoriaPruebaController::class, 'adminRutinas'])
->name('adminRutinas.index');

//Admin Semana de prueba crear Categoria
Route::post('/admin/create',[CategoriaPruebaController::class, 'store'])
->name('adminRutinas.store');

Route::get('/admin/categoria', [CategoriaPruebaController::class, 'categoria'])
->name('adminRutinas.categoria');

//Admin agregar Rutinas de semana de prueba
Route::get('/admin/agregarRutinasSemanaPrueba', [CategoriaPruebaController::class, 'agregarRutinaSMP'])
->name('agregarRutinasSMP.index');

//Admin Semana de prueba crear rutinas por categoria
Route::post('/admin/storeSMP',[CategoriaPruebaController::class, 'storeSMP'])
->name('agregarRutinasSemanaPrueba.storeSMP');


//Admin Semana de prueba crear rutinas por categoria
Route::get('/admin/idCategoria/{id}',[CategoriaPruebaController::class, 'idCategoria'])
->name('agregarRutinasSemanaPrueba.idCat');

//Admin Semana de prueba crear rutinas por categoria
Route::get('/admin/idCat',[CategoriaPruebaController::class, 'idCategoria'])
->name('agregarRutinasSemanaPrueba.idCategorias');





//Route::get('/users', ShowUsers::class);