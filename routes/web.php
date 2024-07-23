<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\personasController;

// Home
Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::resource('personas', personasController::class)->names([
    'index' => 'personas',
    'create' => 'posts.create',
    'store' => 'posts.store',
    'show' => 'personas.show',
    'edit' => 'posts.edit',
    'update' => 'posts.update',
    'destroy' => 'posts.destroy',
])->middleware('auth');

 
// Contacto - EMAIL
Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::post('/contacto', [ContactoController::class, 'store'])->name('contacto.store');

// Registrar Usuario
Route::get('/register', function(){
    return view('auth.register');
})->name('register');

Route::post('/register', [RegisteredUserController::class, 'store']);

// Login

Route::get('/login', function(){
    return 'Login page';
})->name('login');
