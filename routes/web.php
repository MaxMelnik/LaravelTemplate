<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return 'Server is running...';
});

Route::get('/test', function (){
    return 'Test Endpoint';
});
