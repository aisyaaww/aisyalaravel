<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/welcome'Welcome, function () {
    return view('welcome');
});