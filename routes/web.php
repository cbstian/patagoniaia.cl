<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/font-demo', function () {
    return view('font-demo');
})->name('font-demo');
