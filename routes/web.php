<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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

/*Mostrar*/
Route::get('/mostrar',[HotelController::class,'mostrarHoteles']);
/*CREAR*/
Route::get('/crear',[HotelController::class,'crearHoteles']);
Route::post('/crear',[HotelController::class,'crearHotelesPost']);
/*Eliminar*/
Route::delete('/eliminarHotel/{id}',[HotelController::class,'eliminarHotel']);
/*Actualizar*/
Route::get('/modificarHotel/{id}',[HotelController::class,'modificarHoteles']);
Route::put('/modificarHotel',[HotelController::class,'modificarHotelesPut']);