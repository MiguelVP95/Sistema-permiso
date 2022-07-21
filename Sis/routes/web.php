<?php

use Illuminate\Support\Facades\Route;

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
    return view('inicio');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/inicio', [App\Http\Controllers\InicioController::class, 'index'])->name('home');
Route::get('/funcionario', [App\Http\Controllers\FuncionarioController::class, 'index']);
Route::get('/registrofuncionario', [App\Http\Controllers\FuncionarioController::class, 'index']);
Route::post('/registrofuncionario', [App\Http\Controllers\FuncionarioController::class, 'store']);

//planilla
Route::get('/planilla', [App\Http\Controllers\FuncionarioController::class, 'planilla']);
Route::post('/planilla', [App\Http\Controllers\FuncionarioController::class, 'store']);



//cod motivo









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

