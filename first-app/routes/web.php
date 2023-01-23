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

/*
Route::get('/', function () {
    return view('welcome');
});

*/

Route::view('/' ,'index');

Route::view('/servicios', 'servicio');

Route::view('/index', 'index');

Route::view('/web', 'web');

Route::view('/form', 'form');

/*
Route::view('/saludo' ,'hola') ->name('saludo1');

Route::get('/view', function () {
    return view('pag');
});
*/