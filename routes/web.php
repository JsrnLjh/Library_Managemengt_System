<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/books', [BookController::class, 'index']);
Route::get('/books', [BookController::class, 'store']);