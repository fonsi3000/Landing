<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Nueva ruta para la vista "Our Company"
Route::get('/our-company', function () {
    return view('company');
})->name('company');

// Ruta para la vista "Experiencia Internacional"
Route::get('/international-experience', function () {
    return view('experience');
})->name('experience');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
