<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

Route::get('/', function () {
    return redirect()->route('comics.index');
});

Route::resource('comics', ComicController::class);
