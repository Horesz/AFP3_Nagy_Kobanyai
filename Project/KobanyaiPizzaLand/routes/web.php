<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [PizzaController::class, 'index']);
