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
        $product = DB::select('select * from product where id = ' . $id);
        return view('/ProductDetail', ['product' => $product]);
    }

    public function productListConsole()
    {
        $product = DB::select('select * from product where category = "console"');
        return view('product-list', ['product' => $product]);
    }
    public function productListJeuxvideo()
    {
        $product = DB::select('select * from product where category = "Jeux-video"');
        return view('product-list', ['product' => $product]);
    }
    public function productListMerch()
    {
        $product = DB::select('select * from product where category = "merchandising"');
        return view('product-list', ['product' => $product]);
    }
}
