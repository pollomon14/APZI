<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('index');
});

Auth::routes();

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');


Route::resource('categorias', App\Http\Controllers\categoriasController::class);

Route::resource('emergencias', App\Http\Controllers\emergenciasController::class);

Route::resource('subcategorias', App\Http\Controllers\subcategoriasController::class);

Route::resource('iconos', App\Http\Controllers\iconosController::class);

Route::resource('eventos', App\Http\Controllers\eventosController::class);

Route::resource('festivos', App\Http\Controllers\festivosController::class);

Route::resource('horarios', App\Http\Controllers\horariosController::class);

Route::resource('municipios', App\Http\Controllers\municipiosController::class);

Route::resource('transporteCargas', App\Http\Controllers\transporte_cargaController::class);