<?php

use App\Http\Controllers\ConnectController;
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
    return view('welcome');
});

//ESPESIFICAR LA RUTA DESDE LA RAIZ
// LAS RUTAS SIRVE PARA QUE EL SOFTWARE
//SEPA DONDE TIENE QUE DIRIJISE.
Route::get('/login', 'App\Http\Controllers\ConnectController@getLogin');