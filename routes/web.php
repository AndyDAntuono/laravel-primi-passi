<?php

use Illuminate\Support\Facades\Route;

// Rotta per la homepage
Route::get('/', function () {
    $data = [
        'message' => 'Benvenuto nella mia homepage dinamica!'
    ];
    return view('home', $data);
})->name('home'); // Definiamo il nome 'home' per la rotta

// Rotta per la pagina Chi Siamo
Route::get('/chi-siamo', function () {
    return view('about');
})->name('about'); // Definiamo il nome 'about' per la rotta

// Rotta per la pagina Contatti
Route::get('/contatti', function () {
    return view('contact');
})->name('contact'); // Definiamo il nome 'contact' per la rotta
