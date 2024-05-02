<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    // return view('welcome');
    return 'Server is running...';
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create']);
Route::get('/books/update', [BookController::class, 'update']);
Route::get('/books/delete', [BookController::class, 'delete']);
Route::get('/books/restore', [BookController::class, 'restore']);
Route::get('/books/first_or_create', [BookController::class, 'firstOrCreate']);
Route::get('/books/update_or_create', [BookController::class, 'updateOrCreate']);

Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
