<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use Illuminate\Support\Facades\Route;

//Inicio
Route::get('/', function () {
    return view('home');
});



//registro
Route::get('/register', [RegisterController::class, 'create'])
->middleware('guest')
->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
->name('register.store');

//Ruta Login
Route::get('/login', [SessionsController::class, 'create'])
->middleware('guest')
->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
->middleware('auth')
->name('login.destroy');

Route::get('/mytrainingpath', [App\Http\Controllers\TranningController::class, 'index'])->name('app');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin/admin');
Route::get('/admin/personalizado', [App\Http\Controllers\AdminController::class, 'personalizada'])->name('admin/personal');

Route::post('/admin/delete', [App\Http\Controllers\AdminController::class, 'delete'])->name('admin/delete');

Route::post('/admin/personalizar', [App\Http\Controllers\AdminController::class, 'store'])->name('admin/personalizar');