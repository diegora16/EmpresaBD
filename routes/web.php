<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personasController;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');


// Definir explícitamente la ruta para contacto
Route::get('/personas', [personasController::class, 'index'])->name('personas');
Route::get('/personas/create', [personasController::class, 'create'])->name('posts.create');
Route::post('/personas', [personasController::class, 'store'])->name('posts.store');
Route::get('/personas/{persona}', [personasController::class, 'show'])->name('personas.show');
Route::get('/personas/{persona}/edit', [personasController::class, 'edit'])->name('posts.edit');
Route::patch('/personas/{persona}', [personasController::class, 'update'])->name('posts.update');
Route::delete('/personas/{persona}', [personasController::class, 'destroy'])->name('posts.destroy');


Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');
















