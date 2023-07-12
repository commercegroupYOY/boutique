<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

use App\Models\Products;


class HomeController extends Controller
{

    public function index(): View
    {
        $product = \DB::select('SELECT * from product WHERE sell = 1');

         return View('includs/_home/homepage', ['product' => $product]);

    }
}
