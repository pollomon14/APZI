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


//Front
Route::get('/', function () {
    return view('/front/desplegable');
});
Route::get('/front/emergencias/{id}', 'App\Http\Controllers\FrontemergenciasController@index')->name('emergencias');

Route::get('/front/index/{id}', 'App\Http\Controllers\FrontindexController@info')->name('index');;

Route::get('/front/directorio/{id}', 'App\Http\Controllers\FrontdirectorioController@info')->name('directorio');;

Route::get('/front/destacado/{id}{var}', 'App\Http\Controllers\FrontdirectorioController@local')->name('local');



//Dashboard

Route::get('/home', [
    HomeController::class, 'index'
])->name('home');

Auth::routes();

Route::resource('categorias', App\Http\Controllers\categoriasController::class);

Route::resource('emergencias', App\Http\Controllers\emergenciasController::class);

Route::resource('subcategorias', App\Http\Controllers\subcategoriasController::class);

Route::resource('iconos', App\Http\Controllers\iconosController::class);

Route::resource('eventos', App\Http\Controllers\eventosController::class);

Route::resource('festivos', App\Http\Controllers\festivosController::class);

Route::resource('horarios', App\Http\Controllers\horariosController::class);

Route::resource('municipios', App\Http\Controllers\municipiosController::class);

Route::resource('transporteCargas', App\Http\Controllers\transporte_cargaController::class);

Route::resource('directorios', App\Http\Controllers\directorioController::class);

Route::resource('transporteDomiciliarios', App\Http\Controllers\transporte_domiciliariosController::class);

Route::resource('transporteExpresos', App\Http\Controllers\transporte_expresosController::class);

Route::resource('transporteTaxes', App\Http\Controllers\transporte_taxisController::class);
