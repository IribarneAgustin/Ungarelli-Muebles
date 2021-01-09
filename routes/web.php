<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('index');
});

Route::get('/admin', function () {
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');

Route::resource('articles','App\Http\Controllers\ArticleController');

Route::get('/galeria/muebles', [HomeController::class, 'furnitureGallery']);
