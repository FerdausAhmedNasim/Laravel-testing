<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Admin Routes
Route::get('/admin/login', function () {
    return view('admin.login');
});
