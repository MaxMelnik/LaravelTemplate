<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    // return view('welcome');
    return 'Server is running...';
});

Route::get('/books', [BookController::class, 'index']);
