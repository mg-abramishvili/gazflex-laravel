<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('filialy', function () {
    return view('filialy');
});

Route::get('history', function () {
    return view('history');
});

Route::get('news', function () {
    return view('news');
});

Route::get('obs', function () {
    return view('obs');
});