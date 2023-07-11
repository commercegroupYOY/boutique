<?php

namespace App\Http\Controllers;

use App\Models\Products;

class ProductList extends Controller
{

    public function productsList()
    {
        $products = Products::all();

        return view('Includs/_product/productList', ['products' => $products]);
    }

    public function productSheet($id)
    {
        $product = Products::find($id);
        return view('Includs/_product/productDetail', ['product' => $product]);
    }

    public function productListCat($categoryName)
    {
        $products = Products::where('category', $categoryName)->get();

        return view('Includs/_product/productList', ['products' => $products]);
    }

}
