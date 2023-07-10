<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{

    public function index(): View
    {
        $product = DB::select('select * from product ');
         return View('/homepage', ['product' => $product]);

    }
}
