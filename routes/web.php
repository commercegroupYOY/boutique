<?php


use App\Http\Controllers\Team;
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


Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/', [HomeController::class, 'index'])->name('accueil');   

Route::get('/liste-des-produits', [ProductController::class, 'catalogue'])->name('products.index');

Route::get('/details-produit/{id}', [ProductController::class, 'productSheet']);

Route::get('/panier', [CartController::class, 'index']);

Route::get('/team', [Team::class, 'index']);

Route::get('/testBDD', [TestBddProducts::class, 'index']);


Route::get('/productListName', [ProductController::class, 'productListName']);
Route::get('/productListPrice', [ProductController::class, 'productListPrice']);

Route::get('/backoffice', [BackofficeController::class, 'index'])->name('backoffice');
Route::get('/backoffice/Create', [BackofficeController::class, 'showCreate'])->name('products.added');

Route::get('/backoffice/Update', [BackofficeController::class, 'showUpdate']);
Route::get('/backoffice/Delete', [BackofficeController::class, 'showDelete']);

Route::post('/liste-des-produits-ajout', [ProductController::class, 'store']);
// Route::put(

Route::get('/backoffice/product/{product}/edit', [ProductController::class, 'edit']);


// use App\Http\Controllers\UserController;

 Route::put('/update/{product}', [ProductController::class, 'update'])->name('product.update');
 Route::delete('/user/{product}', [ProductController::class, 'destroy'])->name('product.delete');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


 
Route::get('/greeting/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'es', 'fr'])) {
        abort(400);
    }
 
    App::setLocale($locale);
 
    // ...
});
// require __DIR__.'/auth.php'; Mis à la fin du projet 





 require __DIR__.'/auth.php';
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
