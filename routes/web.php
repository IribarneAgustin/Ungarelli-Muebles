<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});

Route::get('/user/profile', function () {
    return view('navigation-dropdown');
});


Route::get('/admin', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');

Route::resource('articles','App\Http\Controllers\ArticleController');

