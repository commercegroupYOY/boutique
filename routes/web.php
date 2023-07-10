<?php

use App\Http\Controllers\ContactController;

use App\Http\Controllers\Team;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductList;



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

Route::get('/', function ()
{ return view('homepage');
});


Route::get('/Contact', [ContactController::class, 'Contact']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/Liste_des_produits/console', [ProductList::class, 'productListConsole']);

Route::get('/Liste_des_produits/jeux-video', [ProductList::class, 'productListJeuxvideo']);

Route::get('/Liste_des_produits/merchandising', [ProductList::class, 'productListMerch']);

Route::get('/Details_produit/{id}',[ProductList::class, 'ProductSheet']);

Route::get('/Panier', [CartController::class, 'index']);

Route::get('/Team', [Team::class, 'index']);

route::get('/Liste_des_produits', [ProductList::class, 'productslist']);

