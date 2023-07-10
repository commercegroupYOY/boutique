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


Route::get('/Contact', [ContactController::class, 'Contact']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/Liste des produits', [ProductController::class, 'catalogue']);

Route::get('/details-produit/{id}', [ProductController::class, 'ProductSheet']);

Route::get('/Panier', [CartController::class, 'index']);

Route::get('/Team', [Team::class, 'index']);

Route::get('/TestBDD', [TestBddProducts::class, 'index']);


Route::get('/ProductListName', [ProductController::class, 'ProductListName']);
Route::get('/ProductListPrice', [ProductController::class, 'ProductListPrice']);

Route::get('/backoffice', [BackofficeController::class, 'Backoffice']);
Route::get('/backoffice/Create', [BackofficeController::class, 'ShowCreate']);
Route::get('/backoffice/Update', [BackofficeController::class, 'ShowUpdate']);
Route::get('/backoffice/Delete', [BackofficeController::class, 'ShowDelete']);

