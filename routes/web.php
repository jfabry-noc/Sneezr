<?php

use App\Http\Controllers\SneezeController;
use Illuminate\Support\Facades\Route;

// Index.

Route::get('/', function () {
    return view('welcome');
});


// Sneezes.

Route::get('/sneezes', [SneezeController::class, 'index']);
