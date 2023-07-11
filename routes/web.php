<?php

use App\Models\Product;
use App\Http\Controllers\Team;
use App\Http\Controllers\Backoffice;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestBddProducts;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BackofficeController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});


Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/liste-des-produits', [ProductController::class, 'catalogue'])->name('products.index');

Route::get('/details-produit/{id}', [ProductController::class, 'productSheet']);

Route::get('/panier', [CartController::class, 'index']);

Route::get('/team', [Team::class, 'index']);

Route::get('/testBDD', [TestBddProducts::class, 'index']);


Route::get('/productListName', [ProductController::class, 'productListName']);
Route::get('/productListPrice', [ProductController::class, 'productListPrice']);

Route::get('/backoffice', [BackofficeController::class, 'index']);
Route::get('/backoffice/Create', [BackofficeController::class, 'showCreate']);

Route::get('/backoffice/Update', [BackofficeController::class, 'showUpdate']);
Route::get('/backoffice/Delete', [BackofficeController::class, 'showDelete']);

Route::post('/liste-des-produits-ajout', [BackofficeController::class, 'storeCreate']);
// Route::put(

Route::get('/backoffice/product/{product}/edit', [ProductController::class, 'edit']);


// use App\Http\Controllers\UserController;

 Route::put('/update/{product}', [ProductController::class, 'update'])->name('product.update');
 Route::delete('/user/{product}', [ProductController::class, 'destroy'])->name('product.delete');
