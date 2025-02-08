<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/{id}', function ($id) {
    return $id;
});

Route::get('/info', function(){
    return 'Hello';
});
