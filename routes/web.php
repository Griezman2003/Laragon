<?php

use App\Http\Controllers\BookController;

route::get('/books', [BookController::class, 'index']);
route::get('/books/{id}', [BookController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});