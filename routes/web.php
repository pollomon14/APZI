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
Route::get('/front/mapa/{id}', 'App\Http\Controllers\FrontindexController@mapa')->name('mapa');

Route::get('/front/servicios/{id}', 'App\Http\Controllers\FrontemergenciasController@index2')->name('servicios');

Route::get('/front/emergencias/{id}', 'App\Http\Controllers\FrontemergenciasController@index')->name('emergencias');

Route::get('/front/index/{id}', 'App\Http\Controllers\FrontindexController@info')->name('index');;

Route::get('/front/directorio/{id}', 'App\Http\Controllers\FrontdirectorioController@info')->name('directorio');;

Route::get('/front/comida/{id}', 'App\Http\Controllers\FrontdirectorioController@comida')->name('comida');;

Route::get('/front/bebida/{id}', 'App\Http\Controllers\FrontdirectorioController@bebida')->name('bebida');;

Route::get('/front/detalle/{id}', 'App\Http\Controllers\FrontdirectorioController@detalle')->name('detalle');;

Route::get('/front/mascota/{id}', 'App\Http\Controllers\FrontdirectorioController@mascota')->name('mascota');;

Route::get('/front/hospedaje/{id}', 'App\Http\Controllers\FrontdirectorioController@hospedaje')->name('hospedaje');;

Route::get('/front/banco/{id}', 'App\Http\Controllers\FrontdirectorioController@banco')->name('banco');;

Route::get('/front/ocio/{id}', 'App\Http\Controllers\FrontdirectorioController@ocio')->name('ocio');;

Route::get('/front/artesania/{id}', 'App\Http\Controllers\FrontdirectorioController@artesania')->name('artesania');;

Route::get('/front/destacado/{id}{var}', 'App\Http\Controllers\FrontdirectorioController@local')->name('local');

Route::get('/front/carga/{id}', 'App\Http\Controllers\FronttransporteController@carga')->name('carga');

Route::get('/front/expresos/{id}', 'App\Http\Controllers\FronttransporteController@expresos')->name('expresos');

Route::get('/front/domiciliarios/{id}', 'App\Http\Controllers\FronttransporteController@domiciliarios')->name('domiciliarios');

Route::get('/front/taxis/{id}', 'App\Http\Controllers\FronttransporteController@taxis')->name('taxis');

Route::get('/front/turismo/{id}', 'App\Http\Controllers\FrontdirectorioController@turismo')->name('turismo');

Route::get('/front/ofertas/{id}', 'App\Http\Controllers\FronteventosController@index')->name('eventos');

Route::get('/front/busquedas/', function () {
    return view('/front/busquedas');
});

Route::post('/front/busquedas/', 'App\Http\Controllers\FrontbusquedaController@search')->name('busquedas');


Route::post('/front/busquedas2/', 'App\Http\Controllers\FrontbusquedaController@categorias')->name('busquedasCategorias');

Route::post('/front/directorio/', 'App\Http\Controllers\FrontdirectorioController@contador')->name('contador');



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


Route::resource('palabraMasBuscadas', App\Http\Controllers\palabra_mas_buscadaController::class);

Route::resource('registroDirectorios', App\Http\Controllers\registro_directorioController::class);

Route::resource('registroDirectorios', App\Http\Controllers\registro_directorioController::class);
