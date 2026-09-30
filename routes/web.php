<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Aura Café & Tostaduría
|--------------------------------------------------------------------------
| Rutas públicas del negocio con controladores dedicados.
*/

// Ruta 1: Inicio (Home)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Ruta 2: Carta & Especialidades
Route::get('/carta', [MenuController::class, 'index'])->name('menu');

// Ruta 3: Contacto, Ubicación & Reservas
Route::get('/contacto', [ContactController::class, 'index'])->name('contact');
Route::post('/contacto', [ContactController::class, 'submit'])->name('contact.submit');
