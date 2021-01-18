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

Route::get('/galeria/sillas', [HomeController::class, 'chairsGallery']);

Route::get('/galeria/estanterías', [HomeController::class, 'shelvesGallery']);

Route::get('/galeria/racks', [HomeController::class, 'racksGallery']);

Route::get('/galeria/muebles metálicos', [HomeController::class, 'metalFurnitureGallery']);
