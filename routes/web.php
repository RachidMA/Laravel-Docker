<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

use function Clue\StreamFilter\fun;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
