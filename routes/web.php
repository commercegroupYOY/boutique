<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
require __DIR__ . '/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::prefix('commandes')->group(function () {
        Route::name('commandes.details')->post('details', DetailsController::class, '__invoke');
        Route::resource('resume', OrderController::class);
        Route::get('confirmation/{order}', [OrdersController::class,'confirmation'])->name('commandes.confirmation');
    });
});



Route::middleware('admin')->group(function () {
    Route::get('/backoffice', [BackOfficeController::class, 'index']);

});

Route::get('/', function () {
    return view('homepage');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/Contact', [ContactController::class, 'Contact']);

Route::get('/', [HomeController::class, 'index']);

route::get('/Allproducts', [ProductListController::class, 'productsList']);

Route::get('productList/{category}', [ProductListController::class, 'productListCat']);

Route::get('/detailsProduit/{id}', [ProductListController::class, 'productSheet']);

Route::get('/orderByNamedesc/', [ProductListController::class, 'ordernamedesc']);

Route::get('/orderByNameasc/', [ProductListController::class, 'ordernameasc']);

Route::get('/orderByPricedesc/', [ProductListController::class, 'orderpricedesc']);

Route::get('/orderByPriceasc/', [ProductListController::class, 'orderpriceasc']);

Route::get('/orderByid/', [ProductListController::class, 'orderid']);

Route::get('/Team', [TeamController::class, 'index']);

Route::resource('products', BackOfficeController::class);

Route::get('cart', [CartController::class, 'cart'])->name('cart');

Route::get('add-to-cart/{id}', [CartController::class, 'addToCart'])->name('add.to.cart');

Route::patch('update-cart', [CartController::class, 'update'])->name('update.cart');

Route::delete('remove-from-cart', [CartController::class, 'remove'])->name('remove.from.cart');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('/DetailsController', [App\Http\Controllers\DetailsController::class, 'index']);

Auth::routes();

Route::fallback(function() {
    return view('404'); // la vue 404.blade.php
 });
