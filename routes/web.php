<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/secret', fn() => 'You are in secret!')->middleware('gate.word:1');

