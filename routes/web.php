<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    // return view('welcome');
    return 'Server is running...';
});

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::get('/books/update', [BookController::class, 'update']);
Route::get('/books/delete', [BookController::class, 'delete']);
Route::get('/books/restore', [BookController::class, 'restore']);
