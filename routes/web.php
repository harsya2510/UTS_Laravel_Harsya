<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route to display the home view created for the UTS
Route::get('/home', function () {
    return view('home');
});
