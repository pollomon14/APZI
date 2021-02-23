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

// Ruta index
Route::get('/index', function () {
    return view('index');
});

// Ruta del Home
Route::get('/home', function () {
    return view('home');
});
// Ruta del Home
Route::get('/directorio', function () {
    return view('directorio');
});
// Ruta del Home
Route::get('/emergencias', function () {
    return view('emergencias');
});
// Ruta del Home
Route::get('/transporte', function () {
    return view('transporte');
});




Route::get('/', 'DestacadosController@index');