<?php

use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/submit', 'App\Http\Controllers\homecontroller@submit')->name('submit');
Route::get('/submit/form','App\Http\Controllers\homecontroller@submit')->name('form');
