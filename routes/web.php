<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\TeamController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('homepage');
});


Route::get('/Contact', [ContactController::class, 'Contact']);

Route::get('/', [HomeController::class, 'index']);

route::get('/Allproducts', [ProductListController::class, 'productsList']);

Route::get('productList/{category}', [ProductListController::class, 'productListCat']);

Route::get('/detailsProduit/{id}', [ProductListController::class, 'productSheet']);

Route::get('/cart', [CartController::class, 'index']);

Route::get('/Team', [TeamController::class, 'index']);

Route::get('/backoffice', [BackOfficeController::class, 'index']);

Route::resource('products', BackOfficeController::class);

