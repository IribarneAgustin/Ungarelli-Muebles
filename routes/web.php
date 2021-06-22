<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RepairController;
use Illuminate\Support\Facades\Artisan;


Route::get('/admin', function () {
    return view('auth.login');
});

Route::get('register', function () {
    return view('auth.login');
});

Route::get('/', [HomeController::class, 'index']);
Route::post('/repairs/changeStatus', [RepairController::class, 'changeStatus'])->name('changeStatus');
Route::get('/repairs/listInProcess', [RepairController::class, 'listInProcess'])->name('listInProcess');
Route::get('/repairs/listInTapestry', [RepairController::class, 'listInTapestry'])->name('listInTapestry');
Route::get('/repairs/listOnHold', [RepairController::class, 'listOnHold'])->name('listOnHold');
Route::get('/repairs/listFinished', [RepairController::class, 'listFinished'])->name('listFinished');
Route::resource('articles', 'App\Http\Controllers\ArticleController');
Route::resource('clients', 'App\Http\Controllers\ClientController');
Route::resource('repairs', 'App\Http\Controllers\RepairController');
Route::get('/galeria/muebles', [HomeController::class, 'furnitureGallery']);
Route::get('/galeria/sillas', [HomeController::class, 'chairsGallery']);
Route::get('/galeria/estanterías', [HomeController::class, 'shelvesGallery']);
Route::get('/galeria/racks', [HomeController::class, 'racksGallery']);
Route::get('/galeria/muebles metálicos', [HomeController::class, 'metalFurnitureGallery']);
Route::get('/galeria/seguridad', [HomeController::class, 'segurityGallery']);
Route::get('/galeria/accesorios', [HomeController::class, 'accesoriesGallery']);
Route::post('contact', [HomeController::class, 'contact']);

Route::get('storage-link', function () {

    if (file_exists(public_path('storage'))) {
        return "The public/storage link already exists.";
    }

    app('files')->link(storage_path('app/public'), public_path('storage'));

    return 'The links have been created.';
});
