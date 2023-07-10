<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductList extends Controller
{


    public function productslist()
    {
        $products = Products::all();

        return view('product-list', ['products' => $products]);
    }

    public function ProductSheet($id)
    {
        $product = Products::find($id);
        return view('/ProductDetail', ['product' => $product]);
    }

    public function productListConsole()
    {
        $products = Products::where('category', "console")->get();

        return view('product-list', ['products' => $products]);
    }
    public function productListJeuxvideo()
    {
        $products = Products::where('category', "jeux-video")->get();

        return view('product-list', ['products' => $products]);
    }
    public function productListMerch()
    {
        $products = Products::where('category', "merchandising")->get();

        return view('product-list', ['products' => $products]);
    }

}
