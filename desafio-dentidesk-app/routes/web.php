<?php

use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\EgresoController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\ResultadoMensualController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('general.index');
});

Route::resource('/',AdministradorController::class);
Route::resource('/ingresos',IngresoController::class);
Route::resource('/egresos',EgresoController::class);
Route::resource('/resultado',ResultadoMensualController::class);

