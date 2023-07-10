<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\Products;


class HomeController extends Controller
{

    public function index(): View
    {
        $product = Products::all();

         return View('/homepage', ['product' => $product]);

    }
}
