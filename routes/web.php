<?php

use App\Http\Controllers\DatosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistroController;
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

Route::get('/', HomeController::class);

// Route::get('registros/autos', [RegistroController::class, 'autos']);

// Route::get('registros/mascotas', [RegistroController::class, 'mascotas']);
Route::get('formularios/contacto',[DatosController::class, 'contacto'] );
/*Ruta -> Controlador -> Metodo/*
/* post para generar inputs*/
Route::post('formularios/contacto',[DatosController::class, 'contacto'] );
// Route::post('formularios/contacto',[DatosController::class, 'contactoin'] );
/* post para registrar inputs */
Route::post('formularios/G',[DatosController::class, 'contactoin'] );


Route::get('formulariosM/mascota',[DatosController::class,'mascota']);
Route::post('formulariosM/mascota',[DatosController::class, 'mascota'] );
Route::post('formulariosM/G2',[DatosController::class, 'mascotain'] );