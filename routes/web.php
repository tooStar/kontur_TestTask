<?php

use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

//Route::post('/submit', 'homecontroller@submit')->name('submit');
Route::post('/submit', [HomeController::class, 'submit'])->name('submit');
