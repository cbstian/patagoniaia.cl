<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/iniciativa', function () {
    return view('initiative');
})->name('initiative');
