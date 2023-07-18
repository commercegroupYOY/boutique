<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
use App\Models\Shop;
use Cart;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('shop', Shop::firstOrFail());

        Route::resourceVerbs([
            'edit' => 'modification',
            'create' => 'creation',
        ]);

        View::composer(['layouts.app', 'products.show'], function ($view) {
            $view->with([
                'cartCount' => 'Cart'::getTotalQuantity(),
                'cartTotal' => 'Cart'::getTotal(),
            ]);
        });
    }
}
