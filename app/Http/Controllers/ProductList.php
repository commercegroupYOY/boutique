<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductList extends Controller
{
    public function productlist()
    {
        $product = DB::select('select * from product', [1]);

        return view('products.index', ['product' => $product]);
    }
}

