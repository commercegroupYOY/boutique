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

    public function productList( $categoryName)
    {
        $products = Products::where('category', $categoryName)->get();

        return view('product-list', ['products' => $products]);
    }

}
