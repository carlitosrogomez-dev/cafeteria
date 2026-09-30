<?php

use App\Http\Controllers\CafeteriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CafeteriaController::class, 'home'])->name('home');
Route::get('/menu', [CafeteriaController::class, 'menu'])->name('menu');
Route::get('/nosotros', [CafeteriaController::class, 'about'])->name('about');
Route::get('/contacto', [CafeteriaController::class, 'contact'])->name('contact');
Route::post('/contacto', [CafeteriaController::class, 'sendContact'])->name('contact.send');
