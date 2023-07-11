<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

use App\Models\Products;


class HomeController extends Controller
{

    public function index(): View
    {
        $product = Products::all();

         return View('includs/_home/homepage', ['product' => $product]);

    }
}
