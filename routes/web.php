<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/login', "login")->name('login');
Route::view('/registro', "register")->name('registro');
Route::view('/privada', "secret")->middleware('auth')->name('privada');
Route::view('/Vista_empleados', "Vista_empleados")->name('Vista_empleados');
Route::view('/clientes', "clientes")->name('clientes');



Route::post('/validar-registro',[LoginController::class,'register'])->name('validar-registro');
Route::post('/iniciar-sesion',[LoginController::class,'login'])->name('iniciar-sesion');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


