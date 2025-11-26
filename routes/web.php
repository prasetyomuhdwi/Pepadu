<?php

use App\Http\Controllers\Views\ControllerPages;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControllerPages::class, 'index'])->name('landing');
