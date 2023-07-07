<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProductList extends Controller
{
    public function productlist()
    {
        $product = DB::select('select * from product ');

        return view('product-list', ['product' => $product]);
    }

    public function ProductSheet($id)
    {
        $product = DB::select('select * from product where id = '.$id);
        dump($product);
        return view('/ProductDetail', ['product' => $product]);
    }
}
