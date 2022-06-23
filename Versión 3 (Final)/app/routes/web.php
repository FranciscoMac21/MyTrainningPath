<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VideoController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('mytrainningpath/mytrainningpath');

Route::get('/homeAdmin', [App\Http\Controllers\HomeController::class, 'homeAdmin'])->name('home');

Route::get('/alimentacion', [App\Http\Controllers\HomeController::class, 'alimentacion'])->name('mytrainningpath/alimentacion');

Route::get('/mimusica', [App\Http\Controllers\PlaylistController::class, 'musica'])->name('mytrainningpath/mimusica');

Route::get('/rutina', [App\Http\Controllers\HomeController::class, 'rutina'])->name('mytrainningpath/rutina');

Route::get('/perfil', [App\Http\Controllers\HomeController::class, 'perfil'])->name('mytrainningpath/perfil');

Route::get('/social', [App\Http\Controllers\SocialController::class, 'index'])->name('mytrainningpath/social');

//Route Hooks - Do not delete//
	Route::view('guias', 'livewire.guias.index')->middleware('auth');
	Route::view('nivels', 'livewire.nivels.index')->middleware('auth');

	Route::view('ejercicios', 'livewire.ejercicios.index')->middleware('auth');
	Route::view('trens', 'livewire.trens.index')->middleware('auth');
	Route::view('trenins', 'livewire.trenins.index')->middleware('auth');
	Route::view('fulls', 'livewire.fulls.index')->middleware('auth');


//Controller Video
Route::get('/video', [App\Http\Controllers\VideoController::class, 'index'])->name('admin/video');
Route::post('/video/insert', [App\Http\Controllers\VideoController::class, 'store'])->name('admin/videos');
//update video
Route::post('/video/update', [App\Http\Controllers\VideoController::class, 'update'])->name('admin/video/update');

//Controller Ejercicios Principiante
Route::get('/ejercicio', [App\Http\Controllers\EjercicioController::class, 'ejercicio'])->name('admin/ejercicios');

//Contreoller Video Intermedio
Route::get('/videoInter', [App\Http\Controllers\VideointerController::class, 'index'])->name('admin/videointer');
Route::post('/videoInter/update', [App\Http\Controllers\VideointerController::class, 'update'])->name('admin/videointer/update');

//Contreoller Video Intermedio
Route::get('/videoAvan', [App\Http\Controllers\VideoavanController::class, 'index'])->name('admin/videoavan');
Route::post('/videoAvan/update', [App\Http\Controllers\VideoavanController::class, 'update'])->name('admin/videoavan/update');

//update perfil
Route::post('/perfil/update', [App\Http\Controllers\HomeController::class, 'update'])->name('mytrainningpath/perfil/update');
//Delete perfil
Route::post('/perfil/delete', [App\Http\Controllers\HomeController::class, 'delete'])->name('mytrainningpath/perfil/delete');

//Store musica
Route::post('/musica/insert', [App\Http\Controllers\PlaylistController::class, 'store'])->name('admin/mimusica');

//Store social
Route::post('/social/insert', [App\Http\Controllers\SocialController::class, 'store'])->name('admin/social');