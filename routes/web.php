<?php

use App\Http\Controllers\DirectorioController;
use App\Models\Contacto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio', 
            [DirectorioController::class,'mostrarDirectorio']);

Route::get('/contacto/agregar',
            [ContactoController::class, 'crearContacto']);
