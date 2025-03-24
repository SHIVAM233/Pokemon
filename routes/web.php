<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PokemonController::class, 'index'])->name('home');
Route::get('/search', [PokemonController::class, 'search'])->name('pokemon.search');