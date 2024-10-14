<?php

use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/submit', 'App\Http\Controllers\homecontroller@submit')->name('submit');

//Route::post('/submit', 'mailcontroller@send')->name('mailsend');

//Route::get('send', 'mailcontroller@send');
//Route::post('/send', 'mailcontroller@send')->name('mail.send');