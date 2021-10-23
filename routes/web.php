<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;

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
//aquí se define la ruta por default
Route::get('/', function () {
    return view('home');
});
/*aquí la clase Route mediante el método resource va a mandar a llamar al controlador 'ProductoController' 
para administrar las URLs cuyo parámetro sea 'productos'*/
Route::resource('productos', ProductoController::class);