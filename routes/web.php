<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        'name' => 'Jay'
    ]);
});

Route::get('/hello', function () {
    return 'Hello';
});

Route::get('/greet/{name}', function ($name) {
    return 'Hello ' . $name . '!';
});
