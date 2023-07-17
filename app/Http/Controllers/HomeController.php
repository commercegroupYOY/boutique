<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

use App\Models\Products;


class HomeController extends Controller
{

    public function index(): View
    {
        $products = \DB::select('SELECT * from products ');


         return View('includs/_home/homepage', ['products' => $products]);

    }
}
