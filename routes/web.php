<?php


use App\Http\Controllers\Team;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestBddProducts;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BackofficeController;


// use Illuminate\View\View;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Contracts\Support\MessageProvider;

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
Route::get('/product-list/category/{category}', [CategoryController::class, 'indexlist'])->name('catgory.list');


Route::get('/details-produit/{id}', [ProductController::class, 'productSheet']);

Route::get('/Panier', [CartController::class, 'index']);

Route::get('/team', [Team::class, 'index']);

Route::get('/testBDD', [TestBddProducts::class, 'index']);


Route::get('/productListName', [ProductController::class, 'productListName']);
Route::get('/productListPrice', [ProductController::class, 'productListPrice']);

Route::get('/backoffice', [ProductController::class, 'index'])->name('backoffice');
Route::get('/backoffice/categories', [CategoryController::class, 'index'])->name('backoffice.categories');





Route::get('/backoffice/Create/product', [ProductController::class, 'create'])->name('products.added');
Route::post('/liste-des-produits-ajout', [ProductController::class, 'store']);
Route::get('/backoffice/product/{product}/edit', [ProductController::class, 'edit']);
Route::put('/update/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/delet/{product}', [ProductController::class, 'destroy'])->name('product.delete');




Route::get('/backoffice/category/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/backoffice/category/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/backoffice/category/{category}/edit/', [CategoryController::class, 'edit'])->name('categories.edit');



Route::put('/backoffice/update/category/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/delet/la/{category}', [CategoryController::class, 'destroy'])->name('category.delete');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/greeting/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'es', 'fr'])) {
        abort(400);
    }

    App::setLocale($locale);

    // ...
});
// require __DIR__.'/auth.php'; Mis à la fin du projet





require __DIR__ . '/auth.php';
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
