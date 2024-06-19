<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personasController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');


// Definir explícitamente la ruta para contacto
Route::get('/personas', [personasController::class, 'index'])->name('personas');
Route::get('/personas/create', [personasController::class, 'create'])->name('posts.create');


Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
















