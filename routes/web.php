<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/landingPage');
})->name('landing');
